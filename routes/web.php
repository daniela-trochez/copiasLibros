<?php

use App\Http\Controllers\EjemplarController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('ejemplars', EjemplarController::class);