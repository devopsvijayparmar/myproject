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

Route::get('/super-admin/home', 'super_admin\HomeController@index');
Route::resource('super-admin/web-templates', 'super_admin\front\WebTemplatesController');
Route::resource('super-admin/pricing', 'super_admin\front\PricingController');
Route::resource('super-admin/about-us', 'super_admin\front\AboutUsController');
Route::resource('super-admin/contact-us', 'super_admin\front\ContactUsController');
Route::resource('super-admin/system', 'super_admin\front\SystemController');
Route::resource('super-admin/amazing-features', 'super_admin\front\AmazingFeaturesController');
Route::resource('super-admin/settings', 'super_admin\front\SettingsController');
Route::resource('super-admin/admin-slider', 'super_admin\front\SliderController');
Route::resource('super-admin/roles', super_admin\RoleController::class);
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


/*supar admin front*/

/*admin Routes*/
Auth::routes();
Route::get('logout', 'Auth\LoginController@logout');


Route::group(['middleware' => ['auth']], function() {
	
Route::get('/admin/home', [App\Http\Controllers\admin\HomeController::class, 'index'])->name('home');	
Route::resource('admin/category', 'admin\CategoryController');
Route::resource('admin/projects', 'admin\ProjectsController');
Route::resource('admin/products', 'admin\ProductsController');
Route::resource('admin/plan', 'admin\PlanController');
Route::resource('admin/books', 'admin\BooksController');
Route::resource('admin/about-us', 'admin\AboutUsController');
Route::resource('admin/promotion', 'admin\PromotionController');
Route::resource('admin/service', 'admin\ServiceController');
Route::resource('admin/contact-us', 'admin\ContactUsController');
Route::resource('admin/philosophy', 'admin\PhilosophyController');
Route::resource('admin/brand', 'admin\BrandController');
Route::resource('admin/type', 'admin\TypeController');
Route::resource('admin/project_type', 'admin\ProjectTypeController');
Route::resource('admin/our-team', 'admin\OurTeamController');
Route::resource('admin/gallery', 'admin\GalleryController');
Route::post('/admin/upload-gallary', 'admin\GalleryController@update');
Route::post('/admin/remove-image', 'admin\GalleryController@removeImage');
Route::resource('admin/electric', 'admin\ElectricController');
Route::get('admin/settings', 'admin\SettingsController@index');
Route::resource('admin/slider', 'admin\SliderController');
Route::resource('admin/site-settings', 'admin\SitesettingsController');
Route::get('admin/change-password', 'admin\SettingsController@change_password');
Route::post('admin/change-password', 'admin\SettingsController@update');
Route::resource('admin/mobile', 'admin\MobileController');
Route::resource('admin/blog', 'admin\BlogController');
Route::resource('admin/photo-shoots', 'admin\PhotoShootsController');
Route::resource('admin/landing-page', 'admin\LandingPageController');
Route::get('/admin/landing_page_editor', 'admin\LandingPageController@editor');
Route::get('/admin/landing_page_edit_editor/{id}', 'admin\LandingPageController@editEditor');
Route::post('/admin/exit-title', 'admin\LandingPageController@exitTitle');
Route::post('/admin/exit-title-edit', 'admin\LandingPageController@exitTitleEdit');
Route::get('/{title}/landing-page/{url_name}', 'admin\CommanController@preview');
Route::resource('admin/orders', 'admin\OrdersController');
Route::get('/admin/mobile-orders', 'admin\OrdersController@mobile');
Route::get('/admin/mobile-orders/{id}', 'admin\OrdersController@mobiles_show');
Route::resource('admin/address-book', 'admin\AddressBookController');
Route::post('/admin/import-address', 'admin\AddressBookController@import');
Route::resource('admin/group', 'admin\GroupController');
Route::post('/admin/send-landing-page', 'admin\LandingPageController@sendLandingPage');
Route::resource('admin/email-marketing', 'admin\EmailMarketingController');
Route::post('/admin/send-email', 'admin\EmailMarketingController@sendEmail');
Route::resource('admin/event', 'admin\EventController');

});

Route::post('admin/get-type-by-category', 'admin\CommanController@gettypebycategory');
Route::post('admin/checkoldpassword', 'admin\CommanController@checkoldpassword');

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


