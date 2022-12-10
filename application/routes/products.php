<?php

use App\Http\Controllers\Page\GigpageController;
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
        Route::post('/store', 'store')->name('backend.gigpage.store');
        Route::post('/destroy', 'destroy')->name('backend.gigpage.destroy');
        Route::post('/autogigpages', 'autogigpages')->name('autogigpages');
    });

});



Route::get('/abcd', [ProductController::class, 'autoproducts']);
