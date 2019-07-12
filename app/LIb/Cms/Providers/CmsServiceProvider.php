<?php
/**
 * App\Lib\Cms\Providers\CmsServiceProvider.php
 */
namespace App\Lib\Cms\Providers;

use Illuminate\Support\ServiceProvider;

class CmsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     * This is called in bootstrap/app.php and should be removed there before deleting this file.
     * @return void
     */
    public function boot()
    {

        $this->app->bind('App\Lib\Cms\ClientInterface','App\Lib\Cms\CmsClient');
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
