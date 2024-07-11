<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('index');
//});
    Route::get('/', [MainController::class , 'index'])->name('home');
    Route::get('/about', [MainController::class , 'about'])->name('about');
    Route::get('/contact', [MainController::class , 'contact'])->name('contact');
    Route::get('/index-full', [MainController::class , 'indexFull'])->name('index.full');
    Route::get('/index-full-width-left-sidebar', [MainController::class , 'indexLeftSidebar'])->name('index.leftsidebar');
    Route::get('/index-full-width-right-sidebar', [MainController::class , 'indexRightSidebar'])->name('index.rightsidebar');
    Route::get('/index-list-style', [MainController::class , 'indexListStyle'])->name('index.listStyle');
    Route::get('/index-list-left', [MainController::class , 'indexListLeft'])->name('index.listLeft');
    Route::get('/index-list-right', [MainController::class , 'indexListright'])->name('index.listRight');

