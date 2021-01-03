<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
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
Route::get('/profile', function () {
    return view('Member.profile');
});



Auth::routes();

Route::middleware('auth')->group(function(){

    Route::middleware('role:Admin')->group(function(){
        Route::get('/AddMenu', [MenuController::class, 'create']);
        Route::post('/AddMenu/store', [MenuController::class, 'store'])->name('menu.store');
        Route::get('/admin', [MenuController::class, 'index']);
        Route::delete('/deletemenu/{id}', [MenuController::class, 'hapusmenu']);
        Route::delete('/deleteuser/{id}', [MenuController::class, 'hapususer']);
        Route::get('/EditMenu/{id}', [MenuController::class, 'edit']);
        Route::get('/EditUser/{id}', [MenuController::class, 'edituser']);
        Route::patch('/EditMenu/{id}/update', [MenuController::class, 'update'])->name('menu.update');
        Route::patch('/EditUser/{id}/update', [MenuController::class, 'updateuser'])->name('user.update');
        Route::get('/AddInformation', [MenuController::class, 'make']);
        Route::post('/Addinfo', [MenuController::class, 'addinfo'])->name('info.add');

    });
    Route::get('/home',[HomeController::class, 'index']);
    Route::get('/information',[HomeController::class, 'indexinfo']);
    Route::get('/detail/{id}',[MenuController::class, 'lihat']);
    Route::get('/cart',[CartController::class, 'index']);
    Route::get('/myorder',[OrderController::class, 'index']);
    Route::post('/order', [OrderController::class, 'orderadd']);
    Route::delete('/deletecart/{id}',[CartController::class,'delete']);
    Route::get('/order/{id}',[OrderController::class, 'CreateOrder']);
    Route::post('/order/{id}/store', [OrderController::class, 'store'])->name('order.store');
    Route::get('/profile',[HomeController::class, 'editprofile']);
    Route::patch('/EditProfile/update', [HomeController::class, 'updateprofile'])->name('profile.update');
    Route::get('/bmi', function () {
        return view('Member.bmi');
    });

});