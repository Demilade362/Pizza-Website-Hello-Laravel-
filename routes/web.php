<?php

use App\Http\Controllers\Admin\PizzasCrudController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\Auth\ConfirmPasswordController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\UserSettingController;
use Illuminate\Support\Facades\Route;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use Illuminate\Support\Facades\Schema;
// use App\Http\Controllers\PizzaController;

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

Route::get('/', function (Cart $cart, Product $product) {
    $products = $product->latest()
        ->take(6)
        ->get();

    if (Schema::hasTable('carts')) {
        $cart = $cart->where('usersID', Auth::id())
            ->orderBy('id', 'DESC')
            ->lazy();
    }
    session(['carts' => count($cart)]);
    return view('welcome', [
        'products' => $products
    ]);
});
Route::get('/about', function () {
    return view('about');
})->name('about');


Route::group(['middleware' => ['auth']], function () {
    Route::get('/user/setting', [UserSettingController::class, 'index']);
    Route::put('/user/setting/update/{id}', [UserSettingController::class, 'update']);
    Route::group(['middleware' => ['auth']], function () {
        Route::group(['as' => 'orders.'], function () {
            Route::group(['prefix' => 'order'], function () {
                Route::get('create/{id}', [PizzaController::class, 'create'])->name("create");
                Route::post('/pizzas', [PizzaController::class, 'store'])->name('store');
            });
        });
        Route::group(['as' => 'carts.'], function () {
            Route::get('/cart', [CartController::class, 'index'])->name('get');
            Route::post('/cart', [CartController::class, 'store'])->name('post');
            Route::delete('/cart/{id}', [CartController::class, 'destroy'])->name("delete");
        });
        Route::get('/home', [HomeController::class, 'index'])->name('home');
    });
});
Route::post('/email/resend', [VerificationController::class, 'resend'])->name('verification.resend');
// Route::get('/confirm', [ConfirmPasswordController::class, 'index'])->name('confirm.pass');




Auth::routes([
    'verify' => true,
    'password.confirm' => true
]);
