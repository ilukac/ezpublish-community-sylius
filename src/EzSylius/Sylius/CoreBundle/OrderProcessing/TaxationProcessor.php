<?php

namespace EzSylius\Sylius\CoreBundle\OrderProcessing;

use Sylius\Component\Core\Model\AdjustmentInterface;
use Sylius\Component\Core\Model\OrderInterface;
use Sylius\Bundle\CoreBundle\OrderProcessing\TaxationProcessor as BaseTaxationProcessor;

class TaxationProcessor extends BaseTaxationProcessor
{
    /**
     * {@inheritdoc}
     */
    public function applyTaxes(OrderInterface $order)
    {
        // Remove all tax adjustments, we recalculate everything from scratch.
        $order->removeAdjustments(AdjustmentInterface::TAX_ADJUSTMENT);

        if ($order->getItems()->isEmpty()) {
            return;
        }

        $zone = null;

        if (null !== $order->getShippingAddress()) {
            // Match the tax zone.
            $zone = $this->zoneMatcher->match($order->getShippingAddress());
        }

        if ($this->settings->has('default_tax_zone')) {
            // If address does not match any zone, use the default one.
            $zone = $zone ?: $this->settings->get('default_tax_zone');
        }

        if (null === $zone) {
            return;
        }

        $taxes = $this->processTaxes($order, $zone);

        $this->addAdjustments($taxes, $order);

        $order->calculateTotal();
    }

    private function processTaxes(OrderInterface $order, $zone)
    {
        $taxes = array();
        foreach ($order->getItems() as $item) {
            $rate = $this->taxRateResolver->resolve($item->getProduct(), array('zone' => $zone));

            // Skip this item is there is not matching tax rate.
            if (null === $rate) {
                continue;
            }

            $item->calculateTotal();

            $amount = $this->calculator->calculate($item->getTotal(), $rate);
            $taxAmount = $rate->getAmountAsPercentage();
            $description = sprintf('%s (%s%%)', $rate->getName(), (float)$taxAmount);

            $taxes[$description] = array(
                'amount' => (isset($taxes[$description]['amount']) ? $taxes[$description]['amount'] : 0) + $amount,
                'included' => $rate->isIncludedInPrice(),
            );
        }

        foreach ($order->getShipments() as $shipment) {
            $rate = $this->taxRateResolver->resolve($shipment->getMethod(), array('zone' => $zone));
            if (null == $rate) {

                continue;
            }
            $amount = $this->calculator->calculate($order->getAdjustmentsTotal('shipping'), $rate);
            $taxAmount = $rate->getAmountAsPercentage();
            $description = sprintf('%s (%s%%)', $rate->getName(), (float)$taxAmount);

            $taxes[$description] = array(
                'amount' => (isset($taxes[$description]['amount']) ? $taxes[$description]['amount'] : 0) + $amount,
                'included' => $rate->isIncludedInPrice(),
            );
        }

        return $taxes;
    }

    private function addAdjustments(array $taxes, OrderInterface $order)
    {
        foreach ($taxes as $description => $tax) {
            $adjustment = $this->adjustmentRepository->createNew();
            $adjustment->setLabel(AdjustmentInterface::TAX_ADJUSTMENT);
            $adjustment->setAmount($tax['amount']);
            $adjustment->setDescription($description);
            $adjustment->setNeutral($tax['included']);

            $order->addAdjustment($adjustment);
        }
    }
}
