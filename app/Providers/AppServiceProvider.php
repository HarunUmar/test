<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //

 \Blade::extend(function($value){
        return preg_replace('/\@php(.+)/','<?php ${1}; ?>',$value);
    });
    
    Schema::defaultStringLength(191);

   

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
