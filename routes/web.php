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
    Route::get('sub-category', [CategoryController::class, 'getSubCategory'])->name('admin.sub-category');

    Route::get('products', [ProductController::class, 'create'])->name('admin.products');
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
