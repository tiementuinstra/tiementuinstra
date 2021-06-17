<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\StrapiTrait;

class PageController extends Controller
{
    protected $webconfig;
    use StrapiTrait;

    public function __construct()
    {
        parent::__construct();
        return view('cms', self::$view);
    }

    // Show a page by slug
    public function show($slug = 'home')
    {
        if ($slug == 'cv') {
            self::getPageCv();
        } else {
            self::getPage($slug);
        }
        self::$view['meta'] = StrapiTrait::getMetaInformation(self::$content);
        self::$view['content'] =  self::$content;
        self::$view['bodyclass'] = 'pagetype-'.self::$content->pageType.' '.$slug;
        return view('pages.' . self::$content->pageType, self::$view);
    }

    private static function getPage($slug)
    {
        self::$content =  StrapiTrait::getRequest("http://localhost:1337/pages/slug/" . $slug);

        self::$view['pagetitle'] = self::$content->name;
        self::$view['pageimage'] = self::getPageImage($slug);
    }

    private static function getPageCv()
    {
        self::$content = StrapiTrait::getRequest("http://localhost:1337/curriculum-vitae");
        self::$view['pagetitle'] = 'Curriculum Vitae';
        self::$view['pageimage'] = StrapiTrait::getImageUrl(StrapiTrait::getRequest("http://localhost:1337/menus/slug/cv")->image, 'large');

        self::$view['hobbies'] = '';
        self::$view['name'] =  compact(self::$content->name);
        self::$content->pageType = 'cv';
    }

    private static function getPageImage($slug, $size = 'large')
    {
        if (self::$content->pageType == 'blog') {
            $image = StrapiTrait::getRequest("http://localhost:1337/pages/slug/" . $slug)->image;
        } else {
            $image = StrapiTrait::getRequest("http://localhost:1337/menus/slug/" . $slug)->image;
        }
        return StrapiTrait::getImageUrl($image, $size);
    }
}
