<?php

use App\Http\Controllers\FetchDataController;
use Illuminate\Support\Facades\Route;

Route::get('/api-data',[FetchDataController::class,'fetchData'])->name('api-data');
Route::get('/api-data/store',[FetchDataController::class,'store'])->name('api-data/store');
Route::get('/api-data/{id}/edit',[FetchDataController::class,'edit'])->name('api-data/edit');
