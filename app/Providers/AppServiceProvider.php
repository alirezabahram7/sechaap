<?php

namespace App\Providers;

use App\OrderStatus;
use App\Type;
use Illuminate\Support\Facades\View;
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
        View::composer('*',function ($view){
            $types=Type::all();
            $statuses = OrderStatus::all();
            $view->with(compact('types','statuses'));
        });
    }
}
