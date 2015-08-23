<?php

namespace Netgen\Bundle\SummerCampBundle\Service;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class Spotify
{
    public $guzzleClient;

    function __construct()
    {
        $this->guzzleClient = new Client();
    }
    /**
     * @param $q
     * @param $type
     * @return array
     *
     * $type   Required. A comma-separated list of item types to search across. Valid types are:
     * album, artist, playlist, and track.
     *
     * $q   Required. The search query's keywords
     *
     * Get Spotify catalog information about artists, albums, tracks or playlists that match a keyword string.
     *
     */
    public function searchSpotify( $q, $type )
    {
        try
        {
            $url = 'https://api.spotify.com/v1/search?q=' . urlencode( $q ) . '&type=' . $type;
            $request = $this->guzzleClient->createRequest( 'GET', $url );
            $response = $this->guzzleClient->send( $request );
        }

        catch ( RequestException $e )
        {
            echo $e->getRequest();
            if ( $e->hasResponse() ) {
                echo $e->getResponse();
            }
        }

        return $response ? $response->json() : Array() ;
    }

    /**
     * @param $id
     * @return array
     *
     * $id  The Spotify ID for the album.
     *
     * Get Spotify catalog information for a single album.
     *
     */
    public function getAlbum( $id )
    {
        try
        {
            $url = 'https://api.spotify.com/v1/albums/' . $id;
            $request = $this->guzzleClient->createRequest( 'GET', $url );
            $response = $this->guzzleClient->send( $request );
        }

        catch ( RequestException $e )
        {
            echo $e->getRequest();
            if ( $e->hasResponse() ) {
                echo $e->getResponse();
            }
        }

        return $response ? $response->json() : Array() ;
    }

    /**
     * @param $id
     * @return array
     *
     * $id  The Spotify ID for the album.
     *
     * Get Spotify catalog information about an album’s tracks. Optional parameters can be used to limit the number of
     * tracks returned.
     *
     */
    public function getAlbumTracks( $id )
    {
        try
        {
            $url = 'https://api.spotify.com/v1/albums/' . $id . '/tracks';
            $request = $this->guzzleClient->createRequest( 'GET', $url );
            $response = $this->guzzleClient->send( $request );
        }

        catch ( RequestException $e )
        {
            echo $e->getRequest();
            if ( $e->hasResponse() ) {
                echo $e->getResponse();
            }
        }

        return $response ? $response->json() : Array() ;
    }

    /**
     * @param $id
     * @return array
     *
     * $id  The Spotify ID for the track.
     *
     * Get Spotify catalog information for a single track identified by its unique Spotify ID.
     *
     */
    public function getTrack( $id )
    {
        try
        {
            $url = 'https://api.spotify.com/v1/tracks/' . $id;
            $request = $this->guzzleClient->createRequest( 'GET', $url );
            $response = $this->guzzleClient->send( $request );
        }

        catch ( RequestException $e )
        {
            echo $e->getRequest();
            if ( $e->hasResponse() ) {
                echo $e->getResponse();
            }
        }

        return $response ? $response->json() : Array() ;
    }
}
