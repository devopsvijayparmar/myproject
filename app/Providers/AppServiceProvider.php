<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\AdminSitesettings;

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
		view()->composer('*', function ($view) 
		{
			$admin_site_setting = AdminSitesettings::first();
			$view->with('admin_site_setting', $admin_site_setting ); 
		});  
    }
}
