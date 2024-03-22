<?php

use Illuminate\Support\Facades\Route;
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
    return view('welcome');
});

Route::get('/addProduct', function () {
    return view('addProduct');
});

/*Route::get('/showProduct', function () {
    return view('showProduct');
});*/

Route::get('/showProduct', function () {
    return view('showProduct', [
        'products' => Product::latest()->paginate()
    ]);
})->name('products.index');

Route::get('/showProduct/{product}', function (Product $product) {
    return view('showProduct', [
        'product' => $product
    ]);
})->name('products.show');
