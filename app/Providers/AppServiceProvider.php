<?php

namespace App\Providers;

use App\Models as Models;
use Illuminate\Support\ServiceProvider;

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
        $lang_id = 1;
        $this->app->request->attributes->add(['lang_id' => $lang_id]);
        View()->composer('*', function ($view) use ($lang_id) {            
            $_menu = [];
            $menu = Models\Menu::where('is_active', 1)->cursor();
            foreach ($menu as $item) {
                //print_r($item);exit;
                $records = [];
                $record["id"] = $item->id;
                $record["title"] = $item->menu_translates()->where('lang_id', $lang_id)->first()->toArray()["title"];
                $record["menu_link"] = $item->menu_link;
                $_menu[] = $record;
                unset($record);
            }
            $view->with('global_menu', $_menu);
            $viewSeo = [];
            $route = \Route::getCurrentRoute();
            $seo = [];
            if(isset($route->uri)) {
                $seo = \App\Models\Seo::where([
                    'route' => $route->uri,
                ])->get()->toArray();                
            }
            if(count($seo) > 0) {
                $viewSeo["page_title"] = $seo[0]["title"];
                $viewSeo["meta_keywords"] = $seo[0]["keywords"];
                $viewSeo["meta_description"] = $seo[0]["descriptions"];
            }else{
                $viewSeo["page_title"] = "asd";
                $viewSeo["meta_keywords"] = "asdas";
                $viewSeo["meta_description"] = "asds";
            }
            $view->with('seo', $viewSeo);
        });
    }
}
