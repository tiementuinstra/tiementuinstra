<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Traits\StrapiTrait;

class GenerateMenus
{
    use StrapiTrait;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {


        \Menu::make('MainNav', function ($menu) {
            $menuitems = StrapiTrait::getRequest("http://localhost:1337/menus");

            foreach ($menuitems as $item) {
                $menu->add($item->name, [
                    'url' => ($item->url != '' ? $item->url : $item->slug),
                    'class' => 'nav-item',
                    'data-id' => $item->id,
                ])->link->attr([
                    'class' => 'nav-link',
                    'target' => $item->target
                ]);
            }
        });

        \Menu::make('FooterMainNav', function ($menu) {
            $menuitems = StrapiTrait::getRequest("http://localhost:1337/menus");

            foreach ($menuitems as $item) {
                $menu->add($item->name, [
                    'url' => ($item->url != '' ? $item->url : $item->slug),
                    'data-id' => $item->id,
                ])->link->attr([
                    'target' => $item->target,
                    'class' => 'text-white'
                ]);
            }
        });
        \Menu::make('FeaturedNav', function ($menu) {
            $menuitems = StrapiTrait::getRequest("http://localhost:1337/menus");
            foreach ($menuitems as $item) {
                $menu->add($item->name, [
                    'url' => ($item->url != '' ? $item->url : $item->slug),
                    'class' => 'nav-item',
                    'data-id' => $item->id,
                    'style' => "background:url( '" . StrapiTrait::getImageUrl($item->image, 'medium') . "')"
                ])
                    ->link->attr([
                        'class' => 'nav-link',
                        'target' => $item->target
                    ]);
            }
        });
        \Menu::make('SocialNav', function ($menu) {
            $menuitems = StrapiTrait::getRequest("http://localhost:1337/socials");
            foreach ($menuitems as $item) {
                $menu->add($item->name, [
                    'url' => $item->url,
                    'class' => 'col ' . strtolower($item->name),
                ])
                    ->append('</span>')
                    ->prepend('<i class="' . $item->icon . '"></i><span>')
                    ->link->attr([
                        'target' => '_blank',
                        'class' => 'btn btn-default social-item shadow-1-strong mb-4 ' . strtolower($item->name),
                        'data-id' => $item->id,
                        'role' => 'button'
                    ]);
            }
        });
        return $next($request);
    }
}
