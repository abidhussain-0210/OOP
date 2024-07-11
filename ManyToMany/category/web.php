<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TestController;

	Route::get('index' , [TestController::class , 'index']);


Route::get('/', function () {
    return view('welcome');
});
