<?php

use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\UserIndexController as UserIndexController;
use App\Http\Controllers\User\OrderController;
use App\Http\Controllers\User\OrdersController;
use App\Http\Controllers\Delivery\DeliveryIndexController as DeliveryIndexController;
use App\Http\Controllers\Delivery\PaczkiController;
use App\Http\Controllers\Delivery\ZleceniaController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:admin'])->name('admin.')->prefix('admin')->group(function(){
    Route::get('/',[IndexController::class, 'index'])->name('index');
    Route::resource('/roles', RolesController::class);
    Route::resource('/permissions', PermissionController::class);
});

Route::middleware(['auth', 'role:user'])->name('user.')->prefix('user')->group(function(){
    Route::get('/',[UserIndexController::class, 'index'])->name('index');
    Route::resource('/orders', OrdersController::class);
    Route::resource('/order', OrderController::class);
    Route::get('/insert',[OrdersController::class, 'index'])->name('index');
    Route::post('/',[OrdersController::class, 'store'])->name('orders.store');
});

Route::middleware(['auth', 'role:delivery'])->name('delivery.')->prefix('delivery')->group(function(){
    Route::get('/',[DeliveryIndexController::class, 'index'])->name('index');
    Route::resource('/zlecenia', ZleceniaController::class);
    Route::resource('/paczki', PaczkiController::class);
    Route::post('/',[ZleceniaController::class, 'store'])->name('delivery.zlecenia.store');
    Route::get('/{id}', [ZleceniaController::class, 'edit'])->name('delivery.zlecenia.edit');
    Route::patch('/{id}', [ZleceniaController::class, 'update'])->name('delivery.zlecenia.update');
});

require __DIR__.'/auth.php';


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
