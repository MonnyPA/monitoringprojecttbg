<?php

use App\Http\Controllers\DatasiteController;
use App\Http\Controllers\HistoryprogressController;
use App\Http\Controllers\MitraController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.master');
});

Route::resource('mitras', MitraController::class);
Route::resource('datasites', DatasiteController::class);
// Route::resource('historyprogresses', HistoryprogressController::class);

Route::get(
    '/datasites/{id}/historyprogresses/create',
    [HistoryprogressController::class, 'create']
)->name('historyprogresses.create');

Route::post(
    '/datasites/{id}/historyprogresses',
    [HistoryprogressController::class, 'store']
)->name('historyprogresses.store');
