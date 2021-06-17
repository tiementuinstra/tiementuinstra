<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Traits\StrapiTrait;
use stdClass;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public static $content;
    public static $view;

    use StrapiTrait;
    public function __construct()
    {
        self::$content;
        $config = StrapiTrait::getRequest("http://localhost:1337/website-configuration");

        self::$view = [
            'sitelogo' => StrapiTrait::getImageUrl($config->logo, 'medium'),
            'pagetitle' => $config->name,
            'webconfig' => $config,
            'strapipath' => StrapiTrait::getPath(),
        ];
    }
}
