<?php

use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\FrontendPageController;
use App\Http\Controllers\Settings\SettingController;
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

    Route::get('/page/{slug}', 'rulepage')->name('frontend.rulepage');
    Route::get('/privacy-policy', 'privacy_policy')->name('frontend.privacy.policy'); // Privacy Policy and Terms and Condition
    Route::get('/terms-and-condition', 'terms_and_condition')->name('frontend.termsand.condition'); // Privacy Policy and Terms and Condition
});
