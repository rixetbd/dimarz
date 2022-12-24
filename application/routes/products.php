<?php

use App\Http\Controllers\Page\GigpageController;
use App\Http\Controllers\Page\RuleArticleController;
use App\Http\Controllers\Page\TestimonialController;
use App\Http\Controllers\Products\CategoryController;
use App\Http\Controllers\Products\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function(){

    Route::controller(ProductController::class)->prefix('products')->group(function(){
        Route::get('/index', 'index')->name('backend.products.index');
        Route::get('/create', 'create')->name('backend.products.create');
        Route::post('/store', 'store')->name('backend.products.store');
        Route::post('/destroy', 'destroy')->name('backend.products.destroy');
        Route::post('/autoproducts', 'autoproducts')->name('autoproducts');
    });

    Route::controller(GigpageController::class)->prefix('gigpage')->group(function(){
        Route::get('/index', 'index')->name('backend.gigpage.index');
        Route::get('/create', 'create')->name('backend.gigpage.create');
        Route::get('/show/{id}', 'show')->name('backend.gigpage.show');
        Route::get('/edit/{id}', 'edit')->name('backend.gigpage.edit');
        Route::post('/store', 'store')->name('backend.gigpage.store');
        Route::post('/update', 'update')->name('backend.gigpage.update');
        Route::post('/destroy', 'destroy')->name('backend.gigpage.destroy');
        Route::post('/slug-check', 'slug_check')->name('backend.gigpage.slug.check');
        Route::post('/autogigpages', 'autogigpages')->name('autogigpages');
    });


    Route::controller(TestimonialController::class)->prefix('testimonial')->group(function(){
        Route::get('/index', 'index')->name('backend.testimonial.index');
        Route::get('/create', 'create')->name('backend.testimonial.create');
        Route::get('/edit/{id}', 'edit')->name('backend.testimonial.edit');
        Route::post('/store', 'store')->name('backend.testimonial.store');
        Route::post('/update', 'update')->name('backend.testimonial.update');
        Route::post('/destroy', 'destroy')->name('backend.testimonial.destroy');
        Route::get('/alltestimonial', 'alltestimonial')->name('backend.testimonial.alltestimonial');

    });
    Route::controller(RuleArticleController::class)->prefix('rules')->group(function(){
        Route::get('/index', 'index')->name('backend.rules.index');
        Route::get('/create', 'create')->name('backend.rules.create');
        Route::get('/edit/{id}', 'edit')->name('backend.rules.edit');
        Route::post('/store', 'store')->name('backend.rules.store');
        Route::post('/update', 'update')->name('backend.rules.update');
        Route::post('/destroy', 'destroy')->name('backend.rules.destroy');
        Route::get('/allrulearticle', 'allrulearticle')->name('backend.rules.allrulearticle');

    });



});



Route::get('/abcd', [ProductController::class, 'autoproducts']);
