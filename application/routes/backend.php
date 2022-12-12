<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Page\MainServicePageController;
use App\Http\Controllers\Page\PageWidgetController;
use App\Http\Controllers\Products\CategoryController;
use App\Http\Controllers\Products\SubCategoryController;
use App\Http\Controllers\Settings\SettingController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/


Route::middleware('auth')->group(function(){

    Route::get('/admin', function(){
        return redirect()->route('dashboard');
    });
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');


    Route::controller(CategoryController::class)->prefix('categories')->group(function(){
        Route::get('/index', 'index')->name('backend.categories.index');
        Route::post('/store', 'store')->name('backend.categories.store');
        Route::post('/update', 'update')->name('backend.categories.update');
        Route::post('/destroy', 'destroy')->name('backend.categories.destroy');
        Route::get('/autocategories', 'autocategories')->name('autocategories');
    });

    Route::controller(SubCategoryController::class)->prefix('subcategories')->group(function(){
        Route::get('/index', 'index')->name('backend.subcategories.index');
        Route::get('/create', 'create')->name('backend.subcategories.create');
        Route::post('/store', 'store')->name('backend.subcategories.store');
        Route::get('/edit/{id}', 'edit')->name('backend.subcategories.edit');
        Route::post('/update', 'update')->name('backend.subcategories.update');
        Route::post('/destroy', 'destroy')->name('backend.subcategories.destroy');
        Route::get('/autosubcategories', 'autosubcategories')->name('autosubcategories');
        Route::post('/get-subcategory-auto', 'get_subcategory_auto')->name('backend.get_subcategory_auto');
        Route::post('/get-subcategories-single', 'subcategories_single')->name('backend.subcategories.single');
    });


    Route::controller(SettingController::class)->prefix('settings')->group(function(){
        Route::get('/index', 'index')->name('backend.settings.index');
        Route::post('/store', 'store')->name('backend.settings.store');
        Route::post('/update', 'update')->name('backend.settings.update');
        Route::post('/destroy', 'destroy')->name('backend.settings.destroy');
        Route::get('/autoSettings', 'autoSettings')->name('backend.settings.autoSettings');
    });

    Route::controller(PageWidgetController::class)->prefix('pagewidget')->group(function(){
        Route::get('/index', 'index')->name('backend.pagewidget.index');
        Route::post('/store', 'store')->name('backend.pagewidget.store');
        Route::post('/update', 'update')->name('backend.pagewidget.update');
        Route::get('/destroy/{id}', 'destroy')->name('backend.pagewidget.destroy');
        Route::get('/autoSettings', 'autoSettings')->name('backend.pagewidget.autoSettings');
    });


    Route::controller(MainServicePageController::class)->prefix('mainpage')->group(function(){
        Route::get('/index', 'index')->name('backend.mainpage.index');
        Route::get('/create', 'create')->name('backend.mainpage.create');
        Route::get('/show/{id}', 'show')->name('backend.mainpage.show');
        Route::post('/store', 'store')->name('backend.mainpage.store');
        Route::post('/update', 'update')->name('backend.mainpage.update');
        Route::post('/destroy', 'destroy')->name('backend.mainpage.destroy');
        Route::get('/autoSettings', 'autoSettings')->name('backend.mainpage.autoSettings');
        Route::post('/automainpage', 'automainpage')->name('automainpage');
    });



});
