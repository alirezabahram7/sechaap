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
            $offsetTypes = Type::where('is_offset',1)->get();
            $digitalTypes = Type::where('is_digital',1)->get();
            $otherTypes = Type::where('is_digital',0)->where('is_offset',0)->get();
            $statuses = OrderStatus::all();
            $images=Image::all();
            $bannerImages = Image::where('is_home_banners',1)->get();
            $texts=Text::all();
            $unreadMessages = Message::where('is_read',0)->count();
            $view->with(compact('types','statuses','images','texts','unreadMessages','offsetTypes','digitalTypes','otherTypes','bannerImages'));
        });
    }
}
