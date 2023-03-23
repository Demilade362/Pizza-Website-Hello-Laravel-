<?php

use Illuminate\Support\Facades\Route;
use App\Models\Pizza;
use App\Models\Product;

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

Route::get('/', function () {
    $products = Product::orderBy('id', 'DESC', 6)->get();
    return view('welcome', [
        'products' => $products
    ]);
});
Route::get('/about', function () {
    return view('about');
})->name('about');



Route::get('/pizzas', 'App\Http\Controllers\PizzaController@index')->name("pizzas.index")->middleware(['auth', 'verified']);
Route::get('/pizzas/create/{type}', 'App\Http\Controllers\PizzaController@create')->name("pizzas.create")->middleware(['auth', 'verified']);

Route::get('/cart', 'App\Http\Controllers\CartController@index')->name('pizzas.cart')->middleware(['auth']);
Route::post('/cart', 'App\Http\Controllers\CartController@store')->name('pizzas.cart')->middleware(['auth']);
Route::delete('/cart/{id}', 'App\Http\Controllers\CartController@destroy')->name("cart.delete");
Route::get('pizzas/products', 'App\Http\Controllers\ProductController@index')->name('pizzas.products');
Route::post('/pizzas', 'App\Http\Controllers\PizzaController@store')->name('pizzas.store');
Route::get('/pizzas/{id}', 'App\Http\Controllers\PizzaController@show')->name('pizzas.show')->middleware(['auth', 'verified']);
Route::delete('/pizzas/{id}', 'App\Http\Controllers\PizzaController@destroy')->name("pizzas.destroy")->middleware(['auth', 'verified']);

Auth::routes([
    'register' => true,
    'verify' => true
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
