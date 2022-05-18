<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Client\ClientProfileController;

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

Route::get('/', [DashboardController::class,'home']);

Route::get('/dashboard',[DashboardController::class,'dashboard'])->middleware(['auth'])->name('dashboard');

Route::group(['middleware' => ['role:Client']], function () {
    Route::get('/client-profile', [ClientProfileController::class,'show'])->name('client.profile.show');
});

require __DIR__.'/auth.php';
