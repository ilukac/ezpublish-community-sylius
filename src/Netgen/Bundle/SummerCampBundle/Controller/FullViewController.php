<?php

namespace Netgen\Bundle\SummerCampBundle\Controller;

use eZ\Bundle\EzPublishCoreBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use eZ\Publish\Core\FieldType\Relation\Value as RelationValue;
use eZ\Publish\Core\FieldType\Url\Value as UrlValue;
use eZ\Publish\Core\Pagination\Pagerfanta\LocationSearchAdapter;
use eZ\Publish\API\Repository\Values\Content\LocationQuery;
use eZ\Publish\API\Repository\Values\Content\Query\Criterion;
use Pagerfanta\Pagerfanta;

class FullViewController extends Controller
{
    /**
     * Action for viewing location with ng_category content type identifier
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param mixed $locationId
     * @param string $viewType
     * @param boolean $layout
     * @param array $params
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function viewProductLocation( Request $request, $locationId, $viewType, $layout = false, array $params = array() )
    {

        $location = $this->getRepository()->getLocationService()->loadLocation( $locationId );
        $content = $this->getRepository()->getContentService()->loadContent( $location->contentId );

        $query = new LocationQuery();
        $query->criterion = new Criterion\LogicalAnd([
            new Criterion\Visibility(Criterion\Visibility::VISIBLE),
            new Criterion\ContentTypeIdentifier('ng_product'),
            new Criterion\ParentLocationId($location->parentLocationId),
            new Criterion\LogicalNot( new Criterion\LocationId( $location->id ) )
        ]);


        $pager = new Pagerfanta(
            new LocationSearchAdapter(
                $query,
                $this->getRepository()->getSearchService()
            )
        );

        $pager->setNormalizeOutOfRangePages( true );

        $pager->setMaxPerPage( 10 );

        $currentPage = (int)$request->get( 'page', 1 );
        $pager->setCurrentPage( $currentPage > 0 ? $currentPage : 1 );

        return $this->get( 'ez_content' )->viewLocation(
            $locationId,
            $viewType,
            $layout,
            $params + array(
                'pager' => $pager
            )
        );
    }

}
