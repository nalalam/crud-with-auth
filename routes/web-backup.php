<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SliderController;

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
Route::get('/home', function () {
    return view('home');
});
Route::get('/forms', function () {
    return view('forms');
});
// Route::get('/home', function () {
//     return view('product.home');
// });
Route::get('/porduct_create', function () {
    return view('product.product_create');
});
Route::get('/porduct_list', function () {
    return view('product.product_list');
});
Route::get('/porduct_delete', function () {
    return view('product.product_delete');
});
Route::get('/porduct_update', function () {
    return view('product.product_update');
});
Route::get('/catagory', function () {
    return view('catagory.catagory_list');
});
Route::get('/catagory_create', function () {
    return view('catagory.catagory_create');
});

Route::get('/my-all-sliders', [SliderController::class, 'sliders']);








Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/products/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/products/store', [ProductController::class, 'store'])->name('product.store');
Route::get('product/{id}/show', [ProductController::class, 'show'])->name('product.show');
Route::get('product/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::patch('product/{id}/update', [ProductController::class, 'update'])->name('product.update');
Route::delete('product/{id}/delete', [ProductController::class, 'delete'])->name('product.delete');
