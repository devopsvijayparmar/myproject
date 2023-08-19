<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/clear', function() {
    Artisan::call('cache:clear'); Artisan::call('config:clear');
    Artisan::call('config:cache'); Artisan::call('view:clear');
    Artisan::call('route:clear');return "Cleared!";
});

Route::get("/testpage", function(){
   return view("verify");
});

/*supar admin*/
Route::get('super-admin/login', 'Auth\SuperadminLoginController@index')->name('super-admin.login');
Route::post('super-admin/login', 'Auth\SuperadminLoginController@login')->name('super-admin.login-post');
Route::get('super-admin/logout', 'Auth\SuperadminLoginController@logout')->name('super-admin.logout');

Route::group(['prefix' => 'super-admin', 'namespace' => 'super_admin','middleware' => ['preventBackHistory','auth_superadmin']], function () {
	Route::get('dashboard', 'HomeController@index')->name('super-admin.dashboard');
	Route::resource('web-templates', 'WebTemplatesController');
	Route::resource('pricing', 'PricingController');
	Route::get('/cms/{type}', 'CMSController@index');
	Route::post('/cms/{id}', 'CMSController@update')->name('cms');
	Route::resource('contact-us', 'ContactUsController');
	Route::resource('system', 'SystemController');
	Route::resource('amazing-features', 'AmazingFeaturesController');
	Route::resource('settings', 'SettingsController');
	Route::resource('admin-slider', 'SliderController');
	Route::resource('roles', RoleController::class);
	Route::resource('email-templates', 'EmailTemplateController');
});
/*supar admin*/



/*admin Routes*/
Route::group(['middleware' => ['preventBackHistory']], function () {
Auth::routes();
Route::get('/register', 'front\RegisterController@index');
Route::post('custom-login', 'Auth\LoginController@customLogin')->name('custom-login');
});

Route::get('logout', 'Auth\LoginController@logout');

Route::group(['prefix' => 'admin', 'namespace' => 'admin','middleware' => ['preventBackHistory']], function () {

	Route::group(['middleware' => ['auth']], function() {
		
		Route::get('dashboard', 'HomeController@index')->name('home');
		Route::resource('about-us', 'AboutUsController');
		Route::post('import-address', 'AddressBookController@import')->name('import-addressbook');
		Route::resource('blog', 'BlogController');
		Route::resource('category', 'CategoryController');
		Route::get('settings', 'SettingsController@index')->name('user-settings');
		Route::resource('site-settings', 'SitesettingsController');
		Route::get('change-password', 'SettingsController@change_password')->name('change-password');
		Route::post('change-password', 'SettingsController@update')->name('change-password.update');
		Route::resource('contact-us', 'ContactUsController');
		Route::post('get-type-by-category', 'CommanController@getTypeByCategory')->name('type-by-category');
		Route::resource('electric', 'ElectricController');
		Route::post('send-email', 'EmailMarketingController@sendEmail')->name('send-email');
		Route::post('upload-gallary', 'GalleryController@update')->name('upload-gallary');
		Route::resource('gallery', 'GalleryController');
		Route::post('remove-image', 'GalleryController@removeImage')->name('remove-image');
		Route::resource('event', 'EventController');
		Route::post('landing-page/check-exit-title', 'LandingPageController@exitTitle')->name('landing-page-check-exit-title');
		Route::get('landing-page/landing-page-editor', 'LandingPageController@editor')->name('landing-page-editor');
		Route::get('landing-page/landing-page-edit-editor/{id}', 'LandingPageController@editEditor')->name('landing-page-edit-editor');
		Route::post('landing-page/exit-title-edit', 'LandingPageController@exitTitleEdit')->name('landing-page-exit-title-edit');
		Route::post('send-landing-page', 'LandingPageController@sendLandingPage')->name('send-landing-page');
		Route::resource('mobile', 'MobileController');
		Route::resource('books', 'BooksController');
		Route::resource('brand', 'BrandController');
		Route::resource('our-team', 'OurTeamController');
		Route::resource('photo-shoots', 'PhotoShootsController');
		Route::resource('plan', 'PlanController');
		Route::resource('project-type', 'ProjectTypeController');
		Route::resource('products', 'ProductsController');
		Route::resource('projects', 'ProjectsController');
		Route::resource('service', 'ServiceController');
		Route::resource('philosophy', 'PhilosophyController');
		Route::get('purchase-plan', 'PurchasePlanController@index')->name('purchase-plan');
		Route::resource('slider', 'SliderController');
		Route::resource('orders', 'OrdersController');
		Route::resource('type', 'TypeController');
		Route::get('my-account', 'MyAccountController@index')->name('my-account');
		Route::post('my-account', 'MyAccountController@update')->name('my-account-update');
		
		Route::POST('upload-image', 'CommanController@summerNoteImage')->name('upload-image');
		
		/*Business Routes*/
		Route::group(['middleware' => ['purchaseplan']], function() {
			Route::resource('promotion', 'PromotionController');
			Route::resource('address-book', 'AddressBookController');
			Route::resource('group', 'GroupController');
			Route::resource('landing-page', 'LandingPageController');
			Route::resource('email-marketing', 'EmailMarketingController');
			Route::get('upgrade-plan/{type}', 'PurchasePlanController@upgradePlan')->name('upgrade-plan');
			Route::resource('page-builder', 'PageBuilderController');
			Route::post('change-menu-name', 'PageBuilderController@changeMenuName')->name('change-menu-name');
			Route::post('reposition', 'PageBuilderController@reposition')->name('reposition');
		});
	});
	
	Route::post('checkoldpassword', 'CommanController@checkoldpassword')->name('checkoldpassword');
});


/*admin Routes End*/

/*supar admin front*/
Route::domain(config('enum.domain'))->group(function () {
	Route::group(['namespace' => 'front','middleware' => ['preventBackHistory']], function () {
		Route::get('/register', 'RegisterController@index');
		Route::get('/signup', 'RegisterController@index');
		Route::post('/signup', 'RegisterController@register');
		Route::post('/check-site-name', 'RegisterController@checkSiteName');
		Route::post('/check-email', 'RegisterController@checkEmail');
		Route::get('verify-account/{token}', 'RegisterController@verifyAccount');
		Route::get('/', 'HomeController@index');
		Route::get('/amazing-features', 'HomeController@amazingFeatures');
		Route::get('/web-templates', 'HomeController@webTemplate');
		Route::get('/web-templates/{id}', 'HomeController@singleWebTemplate');
		Route::get('/pricing', 'HomeController@pricing');
		Route::get('/page/{type}', 'HomeController@Cms');
		Route::get('/contact-us', 'HomeController@contactUs');
		Route::post('/front-contact-us', 'HomeController@contact_us_store');
		Route::get('/purchase-plan/{id}', 'PurchasePlanController@index');
		Route::get('/business', 'BusinessController@index');
		Route::post('/business', 'BusinessController@store');
		Route::post('/send-message', 'BusinessController@sendMessage')->name('send-message');
		Route::get('/chat', 'BusinessController@chat')->middleware('auth');
		Route::get('/customization', 'HomeController@customization');
		Route::post('/customization', 'HomeController@customizationStore');

	});
});
/*supar admin front*/

/*Front*/
Route::domain('{subdomain}.'.config('enum.subdomain'))->group(function () {
	Route::get('landing-page/{url_name}', 'admin\CommanController@preview');
	
	Route::get('page/{url_name}', 'websites\HomeController@page');
	Route::group(['middleware' => ['preventBackHistory'],'namespace' => 'websites'], function () {
		Route::get('/', 'HomeController@index');
		Route::get('about-us', 'HomeController@about_us');
		Route::get('service', 'HomeController@service');
		Route::get('gallery', 'HomeController@gallery');
		Route::get('blog', 'HomeController@blog');
		Route::get('events', 'HomeController@events');
		Route::get('products/{cat}', 'HomeController@products');
		Route::get('{id}/single-product', 'HomeController@single_product');
		Route::get('{id}/single-electric', 'HomeController@single_electric');
		Route::get('{id}/single-mobile', 'HomeController@single_mobile');
		Route::get('{id}/single-blog', 'HomeController@single_blog');
		Route::get('{id}/single-event', 'HomeController@singleEvent');
		Route::get('contact-us', 'HomeController@contact_us');
		Route::post('contact-us', 'HomeController@contact_us_store');
		Route::get('photo-shoots/{cat}', 'HomeController@photo_shoots');
		Route::get('ourteam', 'HomeController@ourteam');
		Route::get('philosophy', 'HomeController@philosophy');
		Route::get('projects/{cat}', 'HomeController@projects');
		Route::get('{id}/single-project', 'HomeController@single_project');
		Route::get('promotion', 'HomeController@promotion');
		Route::post('addresses', 'HomeController@addresses');
		Route::post('order', 'HomeController@order');
		Route::post('mobile-orders', 'HomeController@mobileorder');
		Route::get('plan', 'HomeController@plan');
		Route::get('{id}/single-plan', 'HomeController@single_plan');
	});
});
/*Front end*/


