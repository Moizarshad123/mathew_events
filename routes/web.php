<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\VenueController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;




Route::get('/', [HomeController::class, 'index']);
Route::get('search-venue', [HomeController::class, 'search_venue']);
Route::get('venue-detail/{id}', [HomeController::class, 'venue_detail']);
Route::get('checkout', [HomeController::class, 'checkout'])->name('checkout');
Route::get('submit-request', [HomeController::class, 'submit_request'])->name('submitRequest');

Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');



Route::match(['get', 'post'], 'login', [AdminController::class, 'login'])->name('admin.login');

Route::get('logout', function (){
    auth()->logout();
    return redirect('login');
})->name('admin.logout');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware('admin')->name('admin.')->group(function () {
    
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::match(['get','post'],'upload-image', [EventController::class, 'upload_images'])->name('uploadImages');

    Route::resource('venues', VenueController::class);
    // Route::match(['get', 'post'], '/setting', [AdminController::class, 'setting'])->name('setting');
    // Route::get('/change-password', [AdminController::class, 'changePassword'])->name('changePassword');
    // Route::post('/update-admin-password', [AdminController::class, 'updateAdminPassword'])->name('updateAdminPassword');
    
});

// Auth::routes();