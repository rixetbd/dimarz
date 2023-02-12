<?php

use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\FrontendPageController;
use App\Http\Controllers\Frontend\MarketplaceController;
use App\Http\Controllers\Frontend\SearchController;
use App\Http\Controllers\MailBox\ContactMailController;
use App\Http\Controllers\Settings\SettingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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


Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware('auth')->group(function(){

    Route::controller(SettingController::class)->prefix('settings')->group(function(){
        Route::get('/index', 'index')->name('backend.settings.index');
        // Route::get('/store', 'store')->name('backend.settings.store');
        // Route::post('/update', 'update')->name('backend.settings.update');
        // Route::post('/destroy', 'destroy')->name('backend.settings.destroy');
    });
});


Route::middleware('auth')->controller(FrontendController::class)->group(function(){
    Route::get('/', 'index')->name('frontend.index');
    Route::get('/mainpage/{mainpage_id}', 'mainpage')->name('frontend.mainpage');
    Route::get('/service/{gigpage}', 'gigpage')->name('frontend.gigpage');
    Route::post('/autoservicelist', 'autoservicelist')->name('frontend.autoservicelist');
    Route::get('/autoservicelist', 'autoservicelist')->name('frontend.autoservicelist');
    Route::get('/all-mainpage', 'all_mainpage')->name('frontend.allmainpage');
});



Route::middleware('auth')->controller(FrontendPageController::class)->group(function(){
    Route::get('/about', 'about')->name('frontend.about');
    Route::get('/career', 'career')->name('frontend.career');
    Route::get('/career/{slug}', 'career_post')->name('frontend.career.post');
    Route::post('/career/store', 'career_store')->name('frontend.career.store');
    Route::get('/blog', 'blog')->name('frontend.blog');
    Route::get('/blog/{slug}', 'single_blog')->name('frontend.blog.single');
    Route::get('/onehalfleads', 'onehalfleads')->name('frontend.onehalfleads');
    Route::get('/page/{slug}', 'rulepage')->name('frontend.rulepage');
    Route::get('/privacy-policy', 'privacy_policy')->name('frontend.privacy.policy'); // Privacy Policy and Terms and Condition
    Route::get('/terms-and-condition', 'terms_and_condition')->name('frontend.termsand.condition'); // Privacy Policy and Terms and Condition
    Route::get('/cart', 'orderpage')->name('frontend.orderpage');
    Route::get('/brief-by-email', 'brief_by_email')->name('frontend.orderpage.brief_by_email');
    Route::get('/custom-cart', 'custom_orderpage')->name('frontend.orderpage.custom');
    Route::post('/custom-getservice', 'custom_getservice')->name('frontend.custom.getservice');
    Route::post('/custom-ordersubmit', 'custom_ordersubmit')->name('frontend.custom.ordersubmit');
    // Route::get('/cart/{slug}/{pack?}', 'service_order')->name('frontend.orderpage.service');
});

Route::controller(SearchController::class)->prefix('search')->group(function(){
    Route::post('/leadresetdata', 'leadresetdata')->name('search.leadresetdata');
    Route::get('/leadbycountry/{name}', 'leadByCountry')->name('search.leadresetdata.leadByCountry');
    Route::post('/leadbycities', 'leadBycities')->name('search.leadresetdata.leadBycities');
    Route::get('/leadbycity/currentcitieslead', 'currentcitieslead')->name('search.leadresetdata.currentcitieslead');
    Route::post('/getcities', 'getcities')->name('search.getcities');
    Route::post('/multiplecities', 'multiplecities')->name('store.multiplecities');
});

Route::controller(ContactMailController::class)->prefix('contactmail')->group(function(){
    Route::post('/briefbyemailstore', 'briefbyemailstore')->name('frontend.contactmail.briefbyemailstore');

});

Route::controller(ConsultationController::class)->prefix('consultation')->group(function(){
        Route::get('/store', 'store')->name('consultation.store');
});


Route::middleware('auth')->controller(CartController::class)->prefix('cart')->group(function(){
    Route::get('/{slug}/{pack}', 'cart')->name('cart.single');
    Route::post('/package-change-view', 'package_change_view')->name('cart.single.packageview');
    Route::post('/confirm-general-order', 'confirm_general_order')->name('cart.single.confirmgeneralorder');
});


// Marketplace
Route::get('/marketplace/upwork', function(){
    return view('frontend.page.upworkshow');
})->name('frontend.marketplace.upwork');

Route::controller(MarketplaceController::class)->prefix('markerplace')->group(function(){
    Route::get('/upwork', 'upwork')->name('frontend.marketplace.upwork');
    Route::post('/search/nicheupdate', 'nicheupdate')->name('search.marketplace.nicheupdate');
    Route::post('/search/leadBycountry', 'leadBycountry')->name('search.marketplace.leadBycountry');
});
