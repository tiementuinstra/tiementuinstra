<?php

namespace App\Traits;

use stdClass;

trait StrapiTrait
{

    public static function getRequest($endpoint)
    {

        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', $endpoint);
        // echo $res->getStatusCode();
        // // "200"
        // echo $res->getHeader('content-type')[0];
        // 'application/json; charset=utf8'

        // {"type":"User"...'

        // Send an asynchronous request.
        $request = new \GuzzleHttp\Psr7\Request('GET', $endpoint);
        $promise = $client->sendAsync($request)->then(function ($response) {
        });
        $promise->wait();

        return json_decode($res->getBody());
    }

    public static function getPath()
    {
        return 'http://localhost:1337';
        return  env('STRAPI_URL');
    }


    public static function getImageUrl($image, $size = null)
    {

        if (!empty($image)) {
            if (isset($image->formats) && !empty($image->formats)) {
                if (!is_null($size)) {
                    return self::getPath() . $image->formats->{$size}->url;
                }
            }
        } else {
            if (!is_null(StrapiTrait::getRequest("http://localhost:1337/website-configuration")->defaultimage)) {
                return self::getImageUrl(StrapiTrait::getRequest("http://localhost:1337/website-configuration")->defaultimage, $size);
            } else {
                return 'https://www.toonenreizen.nl/sites/default/files/afbeeldingen_paginas/test-elonisas.jpg';
            }
        }
    }

    public static function getMetaInformation($page)
    {
        $config = StrapiTrait::getRequest("http://localhost:1337/website-configuration");

        $meta = new stdClass;
        $meta->description = (isset($page->meta->description) && !is_null($page->meta->description)
            ? $page->meta->description : $config->meta->description);

        $meta->keywords = (isset($page->meta->tags) && (!is_null($page->meta->tags)
            ? $page->meta->tags : $config->meta->tags));

        $meta->author = (isset($page->meta->admin_user) && (!is_null($page->meta->admin_user)
            ? self::getFullName($page->meta->admin_user) : self::getFullName($config->meta->admin_user)));


        return $meta;
    }

    private static function getFullName($user)
    {
        return $user->firstname . ' ' . $user->lastname;
    }
}
