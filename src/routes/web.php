<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OnsenController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\AmusementController;

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
})->name('home');

// 温泉
Route::get('/onsen', [OnsenController::class, 'index'])->name('onsen.index');

// 客室
Route::get('/room', [RoomController::class, 'index'])->name('room.index');

// お食事
Route::get('/restaurant', [RestaurantController::class, 'index'])->name('restaurant.index');

// アミューズメント
Route::get('/amusement', [AmusementController::class, 'index'])->name('amusement.index');
