<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use View;
use App\Models\Navbar;
use App\Models\Page;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() 
    {
        Schema::defaultStringLength(191); 
        
        View::composer('*', function($view)
        {
            // $navbars = Navbar::select('navbars.id','navbars.name','pages.title','pages.website_url','pages.slug')
            //             ->join('pages', 'pages.menu_id', '=', 'navbars.id')
            //             ->get()->toArray();
            // $navbars = Navbar::orderBy('ordering')->get();

        $navbars = Navbar::orderBy('ordering')->get();
        $pages = Page::where('status', 1)->get();

        $newArr = [];

        foreach ($navbars as $nav) {
            $newArr[$nav->id]['id'] = $nav->id;
            $newArr[$nav->id]['name'] = $nav->name;
            $newArr[$nav->id]['route'] = $nav->route;
            $newArr[$nav->id]['subMenu'] = []; // Initialize subMenu array for each navbar

            foreach ($pages as $page) {
                if ($nav->id == $page->menu_id) {
                    $newArr[$nav->id]['subMenu'][] = [
                        'menu_id' => $page->menu_id,
                        'title' => $page->title,
                        'slug' => $page->slug,
                        'website_url' => $page->website_url,
                    ];
                }
            }
        }
        $navbars = $newArr;
        $view->with('navbars', $navbars);
        });
    }
}
