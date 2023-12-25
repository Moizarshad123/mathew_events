<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\VenueController;
use App\Http\Controllers\Admin\BlogController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;




Route::get('/', [HomeController::class, 'index']);
Route::get('search-venue', [HomeController::class, 'search_venue']);
Route::get('venue-detail/{id}', [HomeController::class, 'venue_detail']);
Route::get('checkout', [HomeController::class, 'checkout'])->name('checkout');
Route::get('supplier-request', [HomeController::class, 'supplier_request']);
Route::POST('submit-supplier-request', [HomeController::class, 'submit_supplier_request']);
Route::get('contact', [HomeController::class, 'contact']);
Route::POST('contact-submit', [HomeController::class, 'contact_submit']);



Route::get('blog-detail/{id}', [HomeController::class, 'blog_detail']);
Route::get('submit-request', [CartController::class, 'submit_request'])->name('submitRequest');
Route::POST('submit-venue-request', [CartController::class, 'submit_venue_request'])->name('submitVenueRequest');


Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');



Route::match(['get', 'post'], 'login', [AdminController::class, 'login'])->name('admin.login');
Route::match(['get', 'post'], 'register', [AdminController::class, 'register'])->name('admin.register');


Route::get('logout', function (){
    auth()->logout();
    return redirect('login');
})->name('admin.logout');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware('admin')->name('admin.')->group(function () {
    
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::match(['get','post'],'upload-image', [EventController::class, 'upload_images'])->name('uploadImages');
    Route::get('new-supplier-request', [EventController::class, 'supplier_requests'])->name('supplierRequests');
    Route::get('supplier-request-detail/{id}', [EventController::class, 'supplier_request_detail']);
    Route::get('users', [AdminController::class, 'users'])->name('users');
    Route::get('contacts', [AdminController::class, 'contacts'])->name('contacts');


    
    Route::get('venue-requests', [EventController::class, 'venue_requests'])->name('venueRequests');
    Route::get('venue-request-detail/{id}', [EventController::class, 'venue_request_detail']);


    

    
    Route::resource('venues', VenueController::class);
    Route::resource('blogs', BlogController::class);

    // Route::match(['get', 'post'], '/setting', [AdminController::class, 'setting'])->name('setting');
    // Route::get('/change-password', [AdminController::class, 'changePassword'])->name('changePassword');
    // Route::post('/update-admin-password', [AdminController::class, 'updateAdminPassword'])->name('updateAdminPassword');
    
});

// Auth::routes();