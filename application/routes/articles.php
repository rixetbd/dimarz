<?php

use App\Http\Controllers\Articles\ArticleController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function(){

    Route::controller(ArticleController::class)->prefix('articles')->group(function(){
        Route::get('/index', 'index')->name('backend.articles.index');
        Route::get('/create', 'create')->name('backend.articles.create');
        Route::post('/store', 'store')->name('backend.articles.store');
        Route::post('/update', 'update')->name('backend.articles.update');
        Route::post('/destroy', 'destroy')->name('backend.articles.destroy');
        Route::get('/autoarticles', 'autoarticles')->name('autoarticles');
    });

});
