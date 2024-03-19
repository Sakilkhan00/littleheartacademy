<?php

use Illuminate\Support\Facades\Route;
use App\Models\Blog;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\SettingController;
use App\Http\Controllers\admin\NavbarController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\BannerController;
use App\Http\Controllers\admin\CreatePageController;
use App\Http\Controllers\admin\CourseController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SitemapXmlController;
use App\Http\Controllers\SamplepaperactionController;



 


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
Route::get('sitemap.xml', [SitemapXmlController::class, 'index']);
Auth::routes(['register' => false,'home' => false]);
    Route::group(['middleware' => ['HtmlMinifier','CheckUrl']], static function(){
    Route::get('/', [HomeController::class, 'home']);
    Route::get('contact-us', [ContactController::class, 'index']);
    Route::any('contact-us/store', [ContactController::class, 'store'])->name('contact_store');
    Route::get('page/{slug}', [HomeController::class, 'StaticPage']);
    Route::post('Samplepaperaction', [SamplepaperactionController::class, 'sendMail'])->name('samplepaper.store');
    Route::get('course/{slug}', [CourseController::class, 'courseView'])->name('course.view');
    
    Route::get('about-us', function () {
       return view('front.pages.about_us');
    });
    Route::get('privacy_policy', function () {
       return view('front.pages.privacy_policy');
    });

    Route::get('gallery-view', [HomeController::class, 'galleryView']);

});

 

Route::group(['prefix' => 'admin', 'middleware' => ['admin','auth'], 'nampspace'=>'admin'], function(){
     
    Route::get('dashboard', 'App\Http\Controllers\admin\HomeController@index')->name('admin.dashboard');
   
    Route::get('gallery', 'App\Http\Controllers\admin\GalleryController@index')->name('list_gallery');
    Route::get('add-gallery-image', 'App\Http\Controllers\admin\GalleryController@create')->name('add_gallery');
    Route::post('gallery', 'App\Http\Controllers\admin\GalleryController@store')->name('save_gallery');
    Route::get('edit-gallery/{id}', 'App\Http\Controllers\admin\GalleryController@edit')->name('edit_gallery');
    Route::post('update-gallery', 'App\Http\Controllers\admin\GalleryController@update')->name('update_gallery');
    Route::get('delete-gallery/{id}', 'App\Http\Controllers\admin\GalleryController@delete')->name('delete_gallery'); 
    Route::post('update-gallery', 'App\Http\Controllers\admin\GalleryController@update')->name('update_gallery');
     
    Route::resource('career', 'App\Http\Controllers\admin\CareerController');

    Route::post('career/Carrerupdate/{id}', [CareerController::class, 'Carrerupdate'])->name('carrer.update');
    Route::get('career/CarrerDelete/{id}', [CareerController::class, 'CarrerDelete'])->name('carrer.delete');

    Route::get('navbar', [NavbarController::class, 'index'])->name('navbar');
    Route::get('navbar/add', [NavbarController::class, 'create'])->name('navbar_add');
    Route::post('navbar/store', [NavbarController::class, 'store'])->name('navbar_store');
    Route::get('navbar/edit/{id}', [NavbarController::class, 'edit'])->name('navbar_edit');
    Route::post('navbar/update/{id}', [NavbarController::class, 'update'])->name('navbar_update');
    Route::get('navbar/delete/{id}', [NavbarController::class, 'delete'])->name('navbar_delete');

    Route::get('contact-us/list', [ContactController::class, 'list'])->name('contact_us.list');
    Route::get('contact-us/show/{id}', [ContactController::class, 'show'])->name('contact_us.show');
    Route::get('contact-us/pdf/{id}', [ContactController::class, 'showPDF'])->name('pdfStream');


    // Route::get('header-footer', [App\Http\Controllers\admin\HeaderFooterController::class, 'create'])->name('header-footer');
    // Route::post('update-header-footer', [App\Http\Controllers\admin\HeaderFooterController::class, 'store'])->name('update-header-footer');
    // Route::get('site-seo', [App\Http\Controllers\admin\SiteSeoController::class, 'index'])->name('site-seo');
    // Route::post('update-site-seo', [App\Http\Controllers\admin\SiteSeoController::class, 'store'])->name('site-seo');

    Route::get('users/list', [UserController::class, 'index'])->name('users.index');
    Route::get('user/create', [UserController::class, 'create'])->name('users.create');
    Route::post('user/store', [UserController::class, 'store'])->name('users.store');
    Route::get('user/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
    Route::post('user/update/{user}', [UserController::class, 'update'])->name('users.update');
    Route::get('user/delete/{id}', [UserController::class, 'destroy'])->name('users.destroy');


    
    Route::get('banner/list', [BannerController::class, 'index'])->name('banner.index');
    Route::get('banner/create', [BannerController::class, 'create'])->name('banner.create');
    Route::post('banner/store', [BannerController::class, 'store'])->name('banner.store');
    Route::get('banner/edit/{id}', [BannerController::class, 'edit'])->name('banner.edit');
    Route::post('banner/update/{id}', [BannerController::class, 'update'])->name('banner.update');
    Route::get('banner/delete/{id}', [BannerController::class, 'delete'])->name('banner.destroy');


    Route::get('create-page', 'App\Http\Controllers\admin\CreatePageController@index')->name('list_createPage');
    Route::get('add-create-page', 'App\Http\Controllers\admin\CreatePageController@create')->name('add_createPage');
    Route::post('create-page', 'App\Http\Controllers\admin\CreatePageController@store')->name('save_createPage');
    Route::get('edit-create-page/{id}', 'App\Http\Controllers\admin\CreatePageController@edit')->name('edit_createPage');
    Route::post('update-create-page', 'App\Http\Controllers\admin\CreatePageController@update')->name('update_createPage');
    Route::get('delete-create-page/{id}', 'App\Http\Controllers\admin\CreatePageController@delete')->name('delete_createPage'); 
    

    Route::get('setting', [SettingController::class, 'Index'])->name('setting');
    Route::post('setting_add', [SettingController::class, 'addOption'])->name('setting.add');

    // setting pages
    Route::get('setting-logo', [SettingController::class, 'settingLogo']);
    Route::get('theme-setting', [SettingController::class, 'SettingTheme']);


    Route::get('create-page-url', 'App\Http\Controllers\admin\CreatePageController@createURL');
    Route::post('store-page-url', 'App\Http\Controllers\admin\CreatePageController@createURLStore');
    Route::get('edit-url-page/{id}', 'App\Http\Controllers\admin\CreatePageController@editURL')->name('edit_URL');
    Route::post('update-url-page', 'App\Http\Controllers\admin\CreatePageController@updateURL')->name('update_URL');

    Route::get('course/list', [CourseController::class, 'index'])->name('course.index');
    Route::get('course/create', [CourseController::class, 'create'])->name('course.create');
    Route::post('course/store', [CourseController::class, 'store'])->name('course.store');
    Route::get('course/edit/{id}', [CourseController::class, 'edit'])->name('course.edit');
    Route::post('course/update', [CourseController::class, 'update'])->name('course.update');
    Route::get('course/delete/{id}', [CourseController::class, 'delete'])->name('course.destroy');



});


