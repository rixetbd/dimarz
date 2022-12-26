<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Leads\CsvuploadController;


Route::controller(CsvuploadController::class)->prefix('csv')->group(function(){

    Route::post('/import/country', 'countrycsvupload')->name('backend.csv.countrycsvupload');
    Route::post('/import/city', 'citycsvupload')->name('backend.csv.citycsvupload');
    Route::post('/import/leads', 'leadscsvupload')->name('backend.csv.leadscsvupload');
    Route::post('/export/leads', 'LeadExport')->name('LeadExport');

});
