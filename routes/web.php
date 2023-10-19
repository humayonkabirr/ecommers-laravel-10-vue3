<?php

use App\Http\Controllers\BackEnd\CategoryController;
use App\Http\Controllers\BackEnd\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin.index');
});





// Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function(){
Route::group(['prefix' => 'admin'], function(){
    Route::get('category', [CategoryController::class, 'index'])->name('admin.category');
    Route::post('category', [CategoryController::class, 'store'])->name('admin.category.store');
    Route::get('sub-category', [CategoryController::class, 'getSubCategory'])->name('admin.sub-category');

    Route::get('products', [ProductController::class, 'index'])->name('admin.products');
    Route::get('product/create', [ProductController::class, 'create'])->name('admin.products.create');
    Route::post('product/create', [ProductController::class, 'store'])->name('admin.products.store');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
