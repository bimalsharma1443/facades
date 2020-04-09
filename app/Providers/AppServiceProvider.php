<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\PostCardService;

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
        $this->app->singleton('PostCard',function(){
            return new PostCardService('India',3,4);
        });
    }
}
