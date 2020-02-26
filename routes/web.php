<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::prefix('auth')->group(function () {
    Auth::routes();
});

Route::name('frontend.')->group(function () {
    Route::get('/', 'FrontendController@index')->name('index');
});
