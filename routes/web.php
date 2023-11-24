<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;


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
Route::match(['get', 'post'], 'login', [AdminController::class, 'login'])->name('admin.login');

Route::get('logout', function (){
    auth()->logout();
    return redirect('login');
})->name('admin.logout');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware('admin')->name('admin.')->group(function () {
    
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    
    // Route::match(['get', 'post'], '/setting', [AdminController::class, 'setting'])->name('setting');
    // Route::get('/change-password', [AdminController::class, 'changePassword'])->name('changePassword');
    // Route::post('/update-admin-password', [AdminController::class, 'updateAdminPassword'])->name('updateAdminPassword');
    
});

// Auth::routes();