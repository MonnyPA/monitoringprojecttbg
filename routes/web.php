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

Route::get(
    '/historyprogresses/{id}/edit',
    [HistoryprogressController::class, 'edit']
)->name('historyprogresses.edit');

Route::put(
    '/historyprogresses/{id}',
    [HistoryprogressController::class, 'update']
)->name('historyprogresses.update');

Route::delete(
    '/historyprogresses/{id}',
    [HistoryprogressController::class, 'destroy']
)->name('historyprogresses.destroy');
