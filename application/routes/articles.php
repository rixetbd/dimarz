<?php

use App\Http\Controllers\Articles\ArticleController;
use App\Http\Controllers\Articles\WorkProcessController;
use App\Http\Controllers\Faq\FaqController;
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
        Route::get('/edit/{id}', 'edit')->name('backend.articles.edit');
        Route::get('/show/{id}', 'show')->name('backend.articles.show');
        Route::post('/update', 'update')->name('backend.articles.update');
        Route::post('/destroy', 'destroy')->name('backend.articles.destroy');
        Route::post('/autoarticles', 'autoarticles')->name('autoarticles');
        // Route::get('/autoarticles', 'autoarticles')->name('autoarticles');
    });


    Route::controller(FaqController::class)->prefix('faq')->group(function(){
        Route::get('/index', 'index')->name('backend.faq.index');
        Route::get('/create', 'create')->name('backend.faq.create');
        Route::post('/store', 'store')->name('backend.faq.store');
        Route::post('/store-qa', 'store_qa')->name('backend.faq.store_qa');
        Route::post('/edit', 'edit')->name('backend.faq.edit');
        Route::get('/show/{id}', 'show')->name('backend.faq.show');
        Route::post('/update', 'update')->name('backend.faq.update');
        Route::post('/destroy', 'destroy')->name('backend.faq.destroy');
        Route::post('/faqa-destroy', 'faq_qa_destroy')->name('backend.faq_qa.destroy');
        Route::post('/autofaqs', 'autofaqs')->name('autofaqs');
        Route::post('/autofaqs-qa', 'autofaqs_qa')->name('autofaqs_qa');
        Route::get('/autofaqs-qa', 'autofaqs_qa')->name('autofaqs_qa');
        Route::post('/faqsqa-update', 'faqs_qa_update')->name('faqs_qa_update');
    });

    Route::controller(WorkProcessController::class)->prefix('workprocess')->group(function(){
        Route::get('/index', 'index')->name('backend.workprocess.index');
        Route::get('/create', 'create')->name('backend.workprocess.create');
        Route::post('/store', 'store')->name('backend.workprocess.store');
        Route::post('/store-qa', 'store_qa')->name('backend.workprocess.store_qa');
        Route::post('/edit', 'edit')->name('backend.workprocess.edit');
        Route::get('/show/{id}', 'show')->name('backend.workprocess.show');
        Route::post('/update', 'update')->name('backend.workprocess.update');
        Route::post('/destroy', 'destroy')->name('backend.workprocess.destroy');
        Route::post('/workprocess-destroy', 'workprocess_qa_destroy')->name('backend.workprocess_qa.destroy');
        Route::post('/autoworkprocess', 'autoworkprocess')->name('autoworkprocess');
        Route::post('/autofaqs-qa', 'autofaqs_qa')->name('autofaqs_qa');
        Route::get('/autofaqs-qa', 'autofaqs_qa')->name('autofaqs_qa');
        Route::post('/faqsqa-update', 'faqs_qa_update')->name('faqs_qa_update');
    });

});
