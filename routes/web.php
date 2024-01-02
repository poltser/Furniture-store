<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes([
   'reset'  => false,
   'verify' => false,
]);

Route::get('/', [\App\Http\Controllers\MainPageController::class, 'index'])->name('mainPage');

Route::get('/signin', [\App\Http\Controllers\LoginPageController::class, 'index'])
    ->name('signin');

Route::get('/auth', [\App\Http\Controllers\RegisterPageController::class, 'index'])
    ->name('auth');


Route::get('/category/{id}', [\App\Http\Controllers\CategoryPageController::class, 'index'])
    ->name('category');

Route::get('/product/{id}', [\App\Http\Controllers\ProductPageController::class, 'index'])
    ->name('product');

Route::middleware('auth')->group(function () {
   Route::get('/favourites', [\App\Http\Controllers\FavouritePageController::class, 'index'])
       ->name('favourites');

   Route::post('/add_favourites', [\App\Http\Controllers\FavouritePageController::class, 'addFavouriteProduct'])
       ->name('add_favourite');

   Route::prefix('basket')->group(function () {
      Route::get('/', [\App\Http\Controllers\BasketController::class, 'index'])->name('basket');

      Route::post('/add', [\App\Http\Controllers\BasketController::class, 'addToBasket'])
          ->name('addToBasket');

      Route::post('/confirm', [\App\Http\Controllers\BasketController::class, 'confirmOrder'])
          ->name('confirmOrder');
   });

   Route::get('orders', [\App\Http\Controllers\OrdersPageController::class, 'index'])->name('orders');
});
