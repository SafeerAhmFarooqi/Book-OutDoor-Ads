<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Client\ClientProfileController;
use App\Http\Controllers\Client\ClientLedController;
use App\Http\Controllers\Admin\AdminUsersController;
use App\Http\Controllers\Admin\AdminClientController;
use App\Http\Controllers\Admin\AdminLedController;
use App\Http\Controllers\Admin\AdminCityController;

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

Route::get('/', [DashboardController::class,'home'])->name('home');
Route::get('/led-detail/{id}', [DashboardController::class,'ledDetail'])->name('app.led.detail');
Route::post('/cart-led-add', [DashboardController::class,'addLedToCart'])->name('cart.led.add');
Route::post('/cart-led-delete', [DashboardController::class,'deleteLedFromCart'])->name('cart.led.delete');
Route::get('/cart-list-items', [DashboardController::class,'listCartItems'])->name('cart.list.items');
Route::post('/cart-list-items-delete', [DashboardController::class,'deleteLedFromCartList'])->name('cart.list.led.delete');
Route::get('/checkout', [DashboardController::class,'checkout'])->name('led.checkout');
Route::post('/payment', [DashboardController::class,'payment'])->name('led.order.payment');
Route::get('/search-led', [DashboardController::class,'searchLed'])->name('find.led');
Route::get('/imprint', [DashboardController::class,'showImprint'])->name('show.imprint');
Route::get('/contact', [DashboardController::class,'showContact'])->name('show.contact');

Route::get('/dashboard',[DashboardController::class,'dashboard'])->middleware(['auth'])->name('dashboard');

Route::group(['middleware' => ['role:Client','auth']], function () {
    Route::get('/client-profile', [ClientProfileController::class,'show'])->name('client.profile.show');
    Route::get('/client-profile-edit', [ClientProfileController::class,'edit'])->name('client.profile.edit');
    Route::post('/client-profile-edit', [ClientProfileController::class,'update'])->name('client.profile.update');
    Route::get('/client-led', [ClientLedController::class,'addLed'])->name('client.led.add');
    Route::post('/client-led-store', [ClientLedController::class,'storeLed'])->name('client.led.store');
    Route::get('/client-led-view', [ClientLedController::class,'viewLed'])->name('client.led.view');
    Route::post('/client-led-view-delete', [ClientLedController::class,'ledDelete'])->name('client.led.view.delete');
    Route::get('/client-led-edit/{id}', [ClientLedController::class,'editLed'])->name('client.led.edit');
    Route::post('/client-led-edit-update/{id}', [ClientLedController::class,'updateLed'])->name('client.led.edit.store');
    Route::post('/client-led-image-delete', [ClientLedController::class,'deleteLedImage'])->name('client.led.delete.image');
});

Route::group(['middleware' => ['role:Admin','auth']], function () {
    Route::get('/admin-users-list', [AdminUsersController::class,'usersList'])->name('admin.users.list');
    Route::post('/admin-users-list-delete', [AdminUsersController::class,'deleteUser'])->name('admin.users.list.delete');
    Route::get('/admin-client-list', [AdminClientController::class,'clientList'])->name('admin.client.list');
    Route::post('/admin-client-list-delete', [AdminClientController::class,'deleteClient'])->name('admin.client.list.delete');
    Route::get('/admin-led-list', [AdminLedController::class,'ledList'])->name('admin.led.list');
    Route::post('/admin-led-list-delete', [AdminLedController::class,'deleteLed'])->name('admin.led.list.delete');
    Route::get('/admin-city-list', [AdminCityController::class,'cityList'])->name('admin.city.list');
    Route::post('/admin-city-add', [AdminCityController::class,'cityStore'])->name('admin.city.add');
    Route::post('/admin-city-list-delete', [AdminCityController::class,'cityDelete'])->name('admin.city.list.delete');
});

require __DIR__.'/auth.php';
