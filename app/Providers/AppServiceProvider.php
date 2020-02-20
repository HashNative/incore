<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        $arr=array();
        View::share('arr',$arr);
        $arr2=array();
        View::share('arr2',$arr2);
        $arr3=array();
        View::share('arr3',$arr3);
        $arr4=array();
        View::share('arr4',$arr4);
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
