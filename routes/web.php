<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\DocumentalController;

Route::get('/', function () {
    return redirect()->route('documentales.index');
});

Route::resource('directores', DirectorController::class)->parameters([
    'directores' => 'director'
]);
Route::resource('documentales', DocumentalController::class)->parameters([
    'documentales' => 'documental'
]);