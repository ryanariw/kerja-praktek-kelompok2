<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group([
    'midleware' => 'api',
    'prefix' => 'auth'
],function () {
    Route::post('login',[AuthController::class,'login']) ->name('login');
});
