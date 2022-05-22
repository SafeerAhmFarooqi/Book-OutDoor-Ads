<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Client\ClientProfileController;
use App\Http\Controllers\Client\ClientLedController;

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

});

require __DIR__.'/auth.php';
