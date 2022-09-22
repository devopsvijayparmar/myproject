<?php

use Illuminate\Support\Facades\Route;

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



Route::get("/testpage", function(){
   return view("emailpage");
});


/*supar admin*/

Route::group(['prefix' => 'super-admin', 'namespace' => 'super_admin'], function () {
	Route::get('/super-admin/home', 'HomeController@index');
	Route::resource('web-templates', 'front\WebTemplatesController');
	Route::resource('pricing', 'PricingController');
	Route::resource('about-us', 'front\AboutUsController');
	Route::resource('contact-us', 'front\ContactUsController');
	Route::resource('system', 'front\SystemController');
	Route::resource('amazing-features', 'front\AmazingFeaturesController');
	Route::resource('settings', 'front\SettingsController');
	Route::resource('admin-slider', 'front\SliderController');
	Route::resource('roles', RoleController::class);
});
/*supar admin*/


/*supar admin front*/
Route::get('/signup', 'front\RegisterController@index');
Route::post('/signup', 'front\RegisterController@register');
Route::post('/check-site-name', 'front\RegisterController@checkSiteName');
Route::post('/check-email', 'front\RegisterController@checkEmail');
Route::get('verify-account/{token}', 'front\RegisterController@verifyAccount');
Route::get('/', 'front\HomeController@index');
Route::get('/web-templates', 'front\HomeController@webTemplate');
Route::get('/web-templates/{id}', 'front\HomeController@singleWebTemplate');
Route::get('/pricing', 'front\HomeController@pricing');
Route::get('/page/{type}', 'front\HomeController@Cms');
Route::get('/contact-us', 'front\HomeController@contactUs');
Route::post('/front-contact-us', 'front\HomeController@contact_us_store');
Route::get('/purchase-plan/{id}', 'front\PurchasePlanController@index');
/*supar admin front*/



/*admin Routes*/
Auth::routes();
Route::get('logout', 'Auth\LoginController@logout');

Route::group(['prefix' => 'admin', 'namespace' => 'admin'], function () {

	Route::group(['middleware' => ['auth']], function() {
		
		Route::get('dashboard', 'HomeController@index')->name('home');
		Route::resource('about-us', 'AboutUsController');
		Route::post('import-address', 'AddressBookController@import')->name('import-addressbook');
		Route::resource('blog', 'BlogController');
		Route::resource('category', 'CategoryController');
		Route::get('settings', 'SettingsController@index')->name('settings');
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
		
		Route::resource('projects', 'ProjectsController');
		Route::resource('products', 'ProductsController');
		Route::resource('plan', 'PlanController');
		Route::resource('books', 'BooksController');
	
		Route::resource('service', 'ServiceController');
		
		Route::resource('philosophy', 'PhilosophyController');
		Route::resource('brand', 'BrandController');
		Route::resource('type', 'TypeController');
		Route::resource('project_type', 'ProjectTypeController');
		Route::resource('our-team', 'OurTeamController');
		
		
		
		Route::resource('slider', 'SliderController');
		
		
		
		Route::resource('mobile', 'MobileController');
		
		Route::resource('photo-shoots', 'PhotoShootsController');

		Route::get('landing_page_editor', 'LandingPageController@editor');
		Route::get('landing_page_edit_editor/{id}', 'LandingPageController@editEditor');
		Route::post('exit-title', 'LandingPageController@exitTitle');
		Route::post('exit-title-edit', 'LandingPageController@exitTitleEdit');
		Route::resource('orders', 'OrdersController');
		Route::get('mobile-orders', 'OrdersController@mobile');
		Route::get('mobile-orders/{id}', 'OrdersController@mobiles_show');
		Route::post('send-landing-page', 'LandingPageController@sendLandingPage');
		
		Route::resource('event', 'EventController');
		Route::get('purchase-plan', 'PurchasePlanController@index');

		/*Business Routes*/
		Route::group(['middleware' => ['purchaseplan']], function() {
			Route::resource('promotion', 'PromotionController');
			Route::resource('address-book', 'AddressBookController');
			Route::resource('group', 'GroupController');
			Route::resource('landing-page', 'LandingPageController');
			Route::resource('email-marketing', 'EmailMarketingController');
			Route::get('upgrade-plan/{type}', 'PurchasePlanController@upgradePlan');
		});
	});
	
	Route::post('checkoldpassword', 'CommanController@checkoldpassword')->name('checkoldpassword');
});

Route::get('/{title}/landing-page/{url_name}', 'admin\CommanController@preview');
/*admin Routes End*/





/*Front*/
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
/*Front end*/


