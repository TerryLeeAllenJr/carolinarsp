<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    public function boot() {

        $this->app['view']->composers([

            'App\ViewComposers\HomeComposer' => ['web.home'],
            'App\ViewComposers\AboutUsComposer' => ['web.about-us'],
            'App\ViewComposers\ServicesComposer' => ['web.services'],
            'App\ViewComposers\GlobalComposer' => ['web.layouts.app'],
            //'App\Http\ViewComposers\RecentWork' => ['web.recent-work'],
            //'App\Http\ViewComposers\Contact' => ['web.contact'],

        ]);

    }

    public function register() {

    }

}
