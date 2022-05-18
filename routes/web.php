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

Route::get('/dashboard',[DashboardController::class,'dashboard'])->middleware(['auth'])->name('dashboard');

Route::group(['middleware' => ['role:Client','auth']], function () {
    Route::get('/client-profile', [ClientProfileController::class,'show'])->name('client.profile.show');
    Route::get('/client-profile-edit', [ClientProfileController::class,'edit'])->name('client.profile.edit');
    Route::post('/client-profile-edit', [ClientProfileController::class,'update'])->name('client.profile.update');
    Route::get('/client-led', [ClientLedController::class,'addLed'])->name('client.led.add');
    Route::post('/client-led-store', [ClientLedController::class,'storeLed'])->name('client.led.store');
});

require __DIR__.'/auth.php';
