<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Client\ClientProfileController;
use App\Http\Controllers\Client\ClientLedController;
use App\Http\Controllers\Client\ClientOrderController;
use App\Http\Controllers\User\UserProfileController;
use App\Http\Controllers\User\UserOrderController;
use App\Http\Controllers\Admin\AdminUsersController;
use App\Http\Controllers\Admin\AdminClientController;
use App\Http\Controllers\Admin\AdminLedController;
use App\Http\Controllers\Admin\AdminCityController;
use App\Http\Controllers\Admin\AdminBillingController;

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
Route::get('/payment-process/{id?}',[DashboardController::class,'paymentProcess'])->name('payment.order.process');
Route::post('/webhooks-mollie', [DashboardController::class,'handle'] )->name('webhooks.mollie');

Route::get('/led-detail/{id}', [DashboardController::class,'ledDetail'])->name('app.led.detail');
Route::post('/cart-led-add', [DashboardController::class,'addLedToCart'])->name('cart.led.add');
Route::post('/cart-led-delete', [DashboardController::class,'deleteLedFromCart'])->name('cart.led.delete');
Route::get('/cart-list-items', [DashboardController::class,'listCartItems'])->name('cart.list.items');
Route::post('/cart-list-items-delete', [DashboardController::class,'deleteLedFromCartList'])->name('cart.list.led.delete');
Route::get('/checkout', [DashboardController::class,'checkout'])->name('led.checkout');
Route::get('/payment/{id?}', [DashboardController::class,'payment'])->name('led.order.payment');
Route::get('/search-led', [DashboardController::class,'searchLed'])->name('find.led');
Route::get('/search-map-led', [DashboardController::class,'searchMapLed'])->name('find.map.led');
Route::get('/imprint', [DashboardController::class,'showImprint'])->name('show.imprint');
Route::get('/contact', [DashboardController::class,'showContact'])->name('show.contact');
Route::get('/agb', [DashboardController::class,'showAgb'])->name('show.agb');
Route::get('/policy', [DashboardController::class,'showPolicy'])->name('show.policy');
Route::get('/about', [DashboardController::class,'showAbout'])->name('show.about');
Route::get('/list-leds-in-cities/{id?}', [DashboardController::class,'listCitiesLeds'])->name('list.cities.led');
Route::get('/payment-m', [DashboardController::class,'preparePayment']);
Route::get('/payment-complete/{id?}', [DashboardController::class,'showPaymentCompletePage'])->name('order.complete');

Route::get('/checkorder/{id?}', [DashboardController::class,'checkOrder']);

Route::get('/dashboard',[DashboardController::class,'dashboard'])->middleware(['auth','verified','admin.dashboard.approved'])->name('dashboard');

Route::group(['middleware' => ['role:User','auth','verified','admin.user.approved']], function () {
    Route::get('/user-profile', [UserProfileController::class,'show'])->name('user.profile.show');
    Route::get('/user-profile-edit', [UserProfileController::class,'edit'])->name('user.profile.edit');
    Route::post('/user-profile-edit', [UserProfileController::class,'update'])->name('user.profile.update');
    Route::get('/user-orders-list', [UserOrderController::class,'show'])->name('user.orders.list');
    Route::post('/user-suborders-list', [UserOrderController::class,'subOrdersList'])->name('user.sub-orders.view');
    
});

Route::group(['middleware' => ['role:Client','auth','verified','admin.partner.approved']], function () {
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
    Route::get('/client-order-view', [ClientOrderController::class,'viewOrder'])->name('client.order.view');
    Route::get('/client-order-billing-view', [ClientOrderController::class,'viewBilling'])->name('client.order.billing');
});

Route::group(['middleware' => ['role:Admin','auth']], function () {
    Route::get('/admin-users-list', [AdminUsersController::class,'usersList'])->name('admin.users.list');
    Route::post('/admin-users-list-delete', [AdminUsersController::class,'deleteUser'])->name('admin.users.list.delete');
    Route::post('/admin-users-list-enable', [AdminUsersController::class,'enableUser'])->name('admin.users.list.enable');
    Route::post('/admin-users-list-verify', [AdminUsersController::class,'verifyUser'])->name('admin.users.list.verify');
    Route::post('/admin-users-list-disable', [AdminUsersController::class,'disableUser'])->name('admin.users.list.disable');
    Route::post('/admin-users-list-orders', [AdminUsersController::class,'showUserOrders'])->name('admin.users.list.order');
    Route::get('/admin-client-list', [AdminClientController::class,'clientList'])->name('admin.client.list');
    Route::post('/admin-client-list-delete', [AdminClientController::class,'deleteClient'])->name('admin.client.list.delete');
    Route::post('/admin-partner-list-enable', [AdminClientController::class,'enablePartner'])->name('admin.partner.list.enable');
    Route::post('/admin-partner-list-verify', [AdminClientController::class,'verifyPartner'])->name('admin.partner.list.verify');
    Route::post('/admin-partner-list-disable', [AdminClientController::class,'disablePartner'])->name('admin.partner.list.disable');
    Route::post('/admin-client-list-leds', [AdminClientController::class,'showClientLeds'])->name('admin.client.list.led');
    Route::get('/admin-led-list', [AdminLedController::class,'ledList'])->name('admin.led.list');
    Route::post('/admin-led-list-delete', [AdminLedController::class,'deleteLed'])->name('admin.led.list.delete');
    Route::post('/admin-led-list-orders', [AdminLedController::class,'showLedOrders'])->name('admin.led.list.order');
    Route::get('/admin-city-list', [AdminCityController::class,'cityList'])->name('admin.city.list');
    Route::post('/admin-city-add', [AdminCityController::class,'cityStore'])->name('admin.city.add');
    Route::post('/admin-city-update', [AdminCityController::class,'cityUpdate'])->name('admin.city.update');
    Route::post('/admin-city-list-delete', [AdminCityController::class,'cityDelete'])->name('admin.city.list.delete');
    Route::get('/admin-popular-leds', [AdminLedController::class,'popularLeds'])->name('admin.led.popular');
    Route::post('/admin-led-add-popular', [AdminLedController::class,'addLedPopular'])->name('admin.led.add.popular');
    Route::post('/admin-led-remove-popular', [AdminLedController::class,'removeLedPopular'])->name('admin.led.remove.popular');
    Route::get('/admin-trending-leds', [AdminLedController::class,'trendingLeds'])->name('admin.led.trending');
    Route::post('/admin-led-add-trending', [AdminLedController::class,'addLedTrending'])->name('admin.led.add.trending');
    Route::post('/admin-led-remove-trending', [AdminLedController::class,'removeLedTrending'])->name('admin.led.remove.trending');
    Route::get('/admin-orders-list', [AdminLedController::class,'showOrdersList'])->name('admin.led.orders');
    Route::get('/admin-led-comments', [AdminLedController::class,'showLedComment'])->name('admin.led.comment');
    Route::post('/admin-led-comment-activate', [AdminLedController::class,'activateLedComment'])->name('admin.led.comment.activate');
    Route::post('/admin-led-comment-deactivate', [AdminLedController::class,'deactivateLedComment'])->name('admin.led.comment.deactivate');
    Route::post('/admin-led-comment-delete', [AdminLedController::class,'deleteLedComment'])->name('admin.led.comment.delete');
    Route::resource('billing', AdminBillingController::class, [
        'as' => 'admin'
    ]);
});

require __DIR__.'/auth.php';


