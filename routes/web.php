<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CustomerCRUDController;
use App\Http\Controllers\WishlistController;

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
//wish lish
Route::get('wish', [ProductController::class, 'wishList'])->name('wish.list');
Route::post('wish', [ProductController::class, 'addToWish'])->name('wish.add');
// Route::get('wishlist',[WishlistController::class, 'index']);
//profile
Route::get('profile', [AuthController::class, 'profile'])->name('profile');
//log-in page
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AuthController::class, 'dashboard']); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

//products page
Route::get('/', [ProductController::class, 'productList'])->name('products.list');
Route::get('cart', [ProductController::class, 'cartList'])->name('cart.list');
Route::post('cart', [ProductController::class, 'addToCart'])->name('cart.store');