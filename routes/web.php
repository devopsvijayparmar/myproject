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
Route::group(['prefix' => 'super-admin', 'namespace' => 'super_admin','middleware' => ['preventBackHistory']], function () {
	Route::get('/super-admin/home', 'HomeController@index');
	Route::resource('web-templates', 'WebTemplatesController');
	Route::resource('pricing', 'PricingController');
	Route::resource('about-us', 'AboutUsController');
	Route::resource('contact-us', 'ContactUsController');
	Route::resource('system', 'SystemController');
	Route::resource('amazing-features', 'AmazingFeaturesController');
	Route::resource('settings', 'SettingsController');
	Route::resource('admin-slider', 'SliderController');
	Route::resource('roles', RoleController::class);
	Route::resource('email-templates', 'EmailTemplateController');
});
/*supar admin*/

/*supar admin front*/
Route::group(['namespace' => 'front','middleware' => ['preventBackHistory']], function () {
	
	Route::get('/signup', 'RegisterController@index');
	Route::post('/signup', 'RegisterController@register');
	Route::post('/check-site-name', 'RegisterController@checkSiteName');
	Route::post('/check-email', 'RegisterController@checkEmail');
	Route::get('verify-account/{token}', 'RegisterController@verifyAccount');
	Route::get('/', 'HomeController@index');
	Route::get('/web-templates', 'HomeController@webTemplate');
	Route::get('/web-templates/{id}', 'HomeController@singleWebTemplate');
	Route::get('/pricing', 'HomeController@pricing');
	Route::get('/page/{type}', 'HomeController@Cms');
	Route::get('/contact-us', 'HomeController@contactUs');
	Route::post('/front-contact-us', 'HomeController@contact_us_store');
	Route::get('/purchase-plan/{id}', 'PurchasePlanController@index');
	Route::get('/bussiness', 'BussinessController@index');
	Route::post('/bussiness', 'BussinessController@store');
	Route::post('/send-message', 'BussinessController@sendMessage')->name('send-message');
	Route::get('/chat', 'BussinessController@chat')->middleware('auth');

});
/*supar admin front*/

/*admin Routes*/
Route::group(['middleware' => ['preventBackHistory']], function () {
Auth::routes();
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
		Route::resource('page-builder', 'PageBuilderController');
		Route::POST('upload-image', 'CommanController@summerNoteImage')->name('upload-image');
		
		/*Business Routes*/
		Route::group(['middleware' => ['purchaseplan']], function() {
			Route::resource('promotion', 'PromotionController');
			Route::resource('address-book', 'AddressBookController');
			Route::resource('group', 'GroupController');
			Route::resource('landing-page', 'LandingPageController');
			Route::resource('email-marketing', 'EmailMarketingController');
			Route::get('upgrade-plan/{type}', 'PurchasePlanController@upgradePlan')->name('upgrade-plan');
		});
	});
	
	Route::post('checkoldpassword', 'CommanController@checkoldpassword')->name('checkoldpassword');
});

Route::get('/{title}/landing-page/{url_name}', 'admin\CommanController@preview');
/*admin Routes End*/


/*Front*/
Route::group(['middleware' => ['preventBackHistory']], function () {
Route::get('{title}', 'websites\HomeController@index');
Route::get('{title}/about-us', 'websites\HomeController@about_us');
Route::get('{title}/service', 'websites\HomeController@service');
Route::get('{title}/gallery', 'websites\HomeController@gallery');
Route::get('{title}/blog', 'websites\HomeController@blog');
Route::get('{title}/events', 'websites\HomeController@events');
Route::get('{title}/products/{cat}', 'websites\HomeController@products');
Route::get('{title}/{id}/single-product', 'websites\HomeController@single_product');
Route::get('{title}/{id}/single-electric', 'websites\HomeController@single_electric');
Route::get('{title}/{id}/single-mobile', 'websites\HomeController@single_mobile');
Route::get('{title}/{id}/single-blog', 'websites\HomeController@single_blog');
Route::get('{title}/{id}/single-event', 'websites\HomeController@singleEvent');
Route::get('{title}/contact-us', 'websites\HomeController@contact_us');
Route::post('{title}/contact-us', 'websites\HomeController@contact_us_store');
Route::get('{title}/photo-shoots/{cat}', 'websites\HomeController@photo_shoots');
Route::get('{title}/ourteam', 'websites\HomeController@ourteam');
Route::get('{title}/philosophy', 'websites\HomeController@philosophy');
Route::get('{title}/projects/{cat}', 'websites\HomeController@projects');
Route::get('{title}/{id}/single-project', 'websites\HomeController@single_project');
Route::get('{title}/promotion', 'websites\HomeController@promotion');
Route::post('{title}/addresses', 'websites\HomeController@addresses');
Route::post('{title}/order', 'websites\HomeController@order');
Route::post('{title}/mobile-orders', 'websites\HomeController@mobileorder');
Route::get('{title}/plan', 'websites\HomeController@plan');
Route::get('{title}/{id}/single-plan', 'websites\HomeController@single_plan');
});
/*Front end*/


