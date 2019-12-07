<?php

namespace App\Providers;

use App\Image;
use App\Message;
use App\OrderStatus;
use App\Text;
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
            $images=Image::all();
            $texts=Text::all();
            $unreadMessages = Message::where('is_read',0)->count();
            $view->with(compact('types','statuses','images','texts','unreadMessages'));
        });
    }
}
