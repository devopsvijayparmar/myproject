<?php

namespace App\Providers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use App\Models\AdminSitesettings;
use App\Models\PurchasePlan;
use App\Models\Sitesettings;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
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
			$user_site_setting="";
			if(isset($auth)){
				$authid = $auth->id;
				$user_site_setting = Sitesettings::getRecordByUserIdForWebsite($auth->id);
				$view->with('user_site_setting', $user_site_setting );
			}
			$view->with('user_site_setting', $user_site_setting);
			$plan = PurchasePlan::userPurchasePlan($authid);
			$view->with('user_purchase_plan', $plan);
			
		});  
    }
}
