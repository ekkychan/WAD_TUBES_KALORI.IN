<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/order', function () {
    return view('Member.order');
});



Auth::routes();

Route::middleware('auth')->group(function(){

    Route::middleware('role:Admin')->group(function(){

        Route::get('/AddMenu', [MenuController::class, 'create']);
        Route::post('/AddMenu/store', [MenuController::class, 'store'])->name('menu.store');
        Route::get('/admin', [MenuController::class, 'index']);
        Route::delete('/deletemenu/{id}', [MenuController::class, 'hapusmenu']);
        Route::get('/EditMenu/{id}', [MenuController::class, 'edit']);
        Route::patch('/EditMenu/{id}/update', [MenuController::class, 'update'])->name('menu.update');

    });


    Route::get('/home',[HomeController::class, 'index']);
});