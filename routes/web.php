<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonalRecordsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create-record', function () {
    return view('personal_records_form');
})->name('create-record');

Route::get('/get-records', [PersonalRecordsController::class, 'getRecords']);
Route::post('/store-record', [PersonalRecordsController::class, 'storeRecord']);
