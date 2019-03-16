<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\FooterSetting;
class FooterServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*',function($view){
            $footer = FooterSetting::find(1);
            return $view->with('footer',$footer);
        });
    }
}
