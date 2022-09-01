<?php

namespace App\Providers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use App\Models\AdminSitesettings;
use App\Models\PurchasePlan;

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

            $auth = Auth::user();
			$authid ="";
			if(isset($auth)){
				$authid = $auth->id;
			}
			$plan = PurchasePlan::userPurchasePlan($authid);
			$view->with('user_purchase_plan', $plan );
			
		});  
    }
}
