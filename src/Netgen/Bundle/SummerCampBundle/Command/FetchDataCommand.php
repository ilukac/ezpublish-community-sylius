<?php

namespace Netgen\Bundle\SummerCampBundle\Command;

use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\Process\ProcessBuilder;
use \Exception;

class FetchDataCommand extends GeneratorCommand {

    /**
     * Configures the command
     */
    protected function configure()
    {
        $this->setDefinition(
            array(
                new InputOption( 'term', '', InputOption::VALUE_REQUIRED, 'Search term' ),
                new InputOption( 'type', '', InputOption::VALUE_REQUIRED, 'Content type' ),
                new InputOption( 'parent', '', InputOption::VALUE_REQUIRED, 'Parent location id' ),
                new InputOption( 'price', '', InputOption::VALUE_REQUIRED, 'Price of item' ),
            )
        );
        $this->setDescription( 'Fetches data' );
        $this->setName( 'netgen:summercamp:fetchdata' );
    }

    /**
     * Runs the command interactively
     *
     * @param \Symfony\Component\Console\Input\InputInterface $input
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     *
     * @return int
     */
    protected function interact( InputInterface $input, OutputInterface $output )
    {
        $this->input = $input;
        $this->output = $output;
        $this->questionHelper = $this->getHelper( 'question' );

        $this->output->writeln(
            array(
                'Input the search term',
                ''
            )
        );

        $this->askForData(
            'term',
            'Search term',
            '',
            'validateNotEmpty'
        );

        $this->askForData(
            'type',
            'Content type',
            '',
            'validateNotEmpty'
        );

        $this->askForData(
            'parent',
            'Parent location id',
            '',
            'validateNotEmpty'
        );

        $this->askForData(
            'price',
            'Price of an item',
            '',
            'validateNotEmpty'
        );
    }

    /**
     * Runs the command
     *
     * @param \Symfony\Component\Console\Input\InputInterface $input
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     *
     * @return int
     */
    protected function execute( InputInterface $input, OutputInterface $output )
    {
        if ( !$input->isInteractive() )
        {
            $output->writeln( '<error>This command only supports interactive execution</error>' );
            return 1;
        }

        $repository = $this->getContainer()->get( 'ezpublish.api.repository' );
        $contentService = $repository->getContentService();
        $spotify = $this->getContainer()->get("netgen.summercamp.spotify");

        foreach ($spotify->searchSpotify($input->getOption("term"), "album")["albums"]["items"] as $album) {

            try {

                $content = $contentService->loadContentByRemoteId( $album["id"] );

            } catch (\eZ\Publish\API\Repository\Exceptions\NotFoundException $e) {

                $this->createAlbum($output,
                    $album["name"],
                    $album["id"],
                    $album["images"][0]["url"],
                    $input->getOption("type"),
                    $input->getOption("price"),
                    $input->getOption("parent")
                );
            }
        }

        return 0;
    }

    protected function createAlbum($output, $title, $id, $image, $contentTypeIdentifier, $price, $parentLocationId = 2) {
        /** @var $repository \eZ\Publish\API\Repository\Repository */
        $repository = $this->getContainer()->get( 'ezpublish.api.repository' );
        $contentService = $repository->getContentService();
        $locationService = $repository->getLocationService();
        $contentTypeService = $repository->getContentTypeService();
        $repository->setCurrentUser( $repository->getUserService()->loadUser( 14 ) );

        try
        {
            $contentType = $contentTypeService->loadContentTypeByIdentifier( $contentTypeIdentifier );
            $contentCreateStruct = $contentService->newContentCreateStruct( $contentType, 'eng-EU' );
            $contentCreateStruct->setField( 'title', $title );
            $contentCreateStruct->setField( 'image', $this->prepareImage($image, $id, $title) );

            $sylius = array(
                'name' => $title,
                'description' => " - ",
                'price' => $price,
                'available_on' => new \DateTime('now'),
                'weight' => 0,
                'height' => 0,
                'width' => 0,
                'depth' => 0,
                'sku' => $id,
                'tax_category' => 'Taxable goods',
                'discount' => 0
            );
            $contentCreateStruct->setField('sylius_product', $sylius);

            $contentCreateStruct->remoteId = $id;
            // instantiate a location create struct from the parent location
            $locationCreateStruct = $locationService->newLocationCreateStruct( $parentLocationId );
            // create a draft using the content and location create struct and publish it
            $draft = $contentService->createContent( $contentCreateStruct, array( $locationCreateStruct ) );
            $content = $contentService->publishVersion( $draft->versionInfo );
        }
            // Content type or location not found
        catch ( \eZ\Publish\API\Repository\Exceptions\NotFoundException $e )
        {
            $output->writeln( $e->getMessage() );
        }
            // Invalid field value
        catch ( \eZ\Publish\API\Repository\Exceptions\ContentFieldValidationException $e )
        {
            $output->writeln( $e->getMessage() );
        }
            // Required field missing or empty
        catch ( \eZ\Publish\API\Repository\Exceptions\ContentValidationException $e )
        {
            $output->writeln( $e->getMessage() );
        }

        catch (\Exception $e)
        {
            $output->writeln( $e->getMessage() );
        }
        $output->writeln($title." imported",true);

        return $content;
    }

    protected function prepareImage($image, $id, $title) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $image);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $data = curl_exec ($ch);
        curl_close ($ch);
        $destination = "/tmp/".$id.".jpeg";
        $file = fopen($destination, "w+");
        fputs($file, $data);
        fclose($file);

        return new \eZ\Publish\Core\FieldType\Image\Value(
            array(
                'path' => $destination,
                'fileSize' => filesize( $destination ),
                'fileName' => basename( $destination ),
                'alternativeText' => $title. " cover image"
            )
        );
    }

}
