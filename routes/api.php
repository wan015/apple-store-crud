<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/**
 * Route API Auth
 */
Route::post('/login', [AuthController::class, 'login'])->name('api.customer.login');
Route::post('/register', [AuthController::class, 'register'])->name('api.customer.register');
Route::get('/user', [AuthController::class, 'getUser'])->name('api.customer.user');

/**
 * Router Order
 */
Route::get('/order', [OrderController::class, 'index'])->name('api.order.index');
Route::get('/order/{snap_token?}', [OrderController::class, 'show'])->name('api.order.show');

/**
 * Route API Category
 */
Route::get('/categories', [CategoryController::class, 'index'])->name('customer.category.index');
Route::get('/category/{slug?}', [CategoryController::class, 'show'])->name('customer.category.show');
Route::get('/categoryHeader', [CategoryController::class, 'categoryHeader'])->name('customer.category.categoryHeader');

/**
 * Route API Product
 */
Route::get('/products', [ProductController::class, 'index'])->name('customer.product.index');
Route::get('/product/{slug?}', [ProductController::class, 'show'])->name('customer.product.show');

/**
 * Route API Cart
 */
Route::get('/cart', [CartController::class, 'index'])->name('customer.cart.index');
Route::post('/cart', [CartController::class, 'store'])->name('customer.cart.store');
Route::get('/cart/total', [CartController::class, 'getCartTotal'])->name('customer.cart.total');
Route::get('/cart/totalWeight', [CartController::class, 'getCartTotalWeight'])->name('customer.cart.getCartTotalWeight');
Route::post('/cart/remove', [CartController::class, 'removeCart'])->name('customer.cart.remove');
Route::post('/cart/removeAll', [CartController::class, 'removeAllCart'])->name('customer.cart.removeAll');

/**
 * Route Raja Ongkir
 */
Route::get('/rajaongkir/provinces', [RajaOngkirController::class, 'getProvinces'])->name('customer.rajaongkir.getProvinces');
Route::get('/rajaongkir/cities', [RajaOngkirController::class, 'getCities'])->name('customer.rajaongkir.getCities');
Route::post('/rajaongkir/checkOngkir', [RajaOngkirController::class, 'checkOngkir'])->name('customer.rajaongkir.checkOngkir');

/**
 * Route Checkout
 */
Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');
Route::post('/notificationHandler', [CheckoutController::class, 'notificationHandler'])->name('notificationHanlder');

/**
 * Route API Slider
 */
Route::get('/sliders', [SliderController::class, 'index'])->name('customer.slider.index');
