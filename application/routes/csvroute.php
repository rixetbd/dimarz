<?php

use App\Http\Controllers\Leads\CsvuploadController;
use Illuminate\Support\Facades\Route;



Route::controller(CsvuploadController::class)->prefix('csv')->group(function(){

    Route::post('/import/country', 'CountryCsvUpload')->name('CountryCsvUpload');
    Route::post('/import/city', 'CityCsvUpload')->name('CityCsvUpload');
    Route::post('/import/leadscsvupload', 'leadscsvupload')->name('backend.csv.leadscsvupload');
    Route::post('/export/leads', 'LeadExport')->name('LeadExport');

});
