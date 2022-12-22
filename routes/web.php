<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['prefix'=>'sadmin','middleware' => ['auth']],function(){

Route::any('/',[App\Http\Controllers\AdminController::class, 'admin'])->name('portal');
Route::resource('orders',App\Http\Controllers\ordersController::class);
Route::resource('branches',App\Http\Controllers\BranchController::class);
Route::resource('companies',App\Http\Controllers\CompanyController::class);
Route::resource('categories',App\Http\Controllers\CategoryController::class);
Route::any('/fethcategories',[\App\Http\Controllers\CategoryController::class,'fetchCategory']);
Route::any('/getProducts/{id}',[\App\Http\Controllers\CategoryController::class,'cascadeProducts']);
Route::resource('ordersdetails',App\Http\Controllers\OrdersDetailController::class);
Route::resource('products',App\Http\Controllers\ProductController::class);
Route::any('/fetchproducts',[\App\Http\Controllers\ProductController::class,'fetchProducts']);
Route::resource('suppliers',App\Http\Controllers\SupplierController::class);
Route::resource('users',App\Http\Controllers\UserController::class);
Route::resource('transactions',App\Http\Controllers\TransactionController::class);
Route::any('/fetchusers',[\App\Http\Controllers\UserController::class,'fetchUsers']);


});




Auth::routes(['register' => false]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return 'Application cache cleared';
});
Route::get('/optimize', function() {
    $exitCode = Artisan::call('optimize');
    return 'Application optimized';
});

// frontend routes

Route::any('/',[\App\Http\Controllers\Frontend\IndexController::class,'home'])->name('home');
Route::any('/contact_us',[\App\Http\Controllers\Frontend\IndexController::class,'contactUs'])->name('contact_us');
Route::any('/about_us',[\App\Http\Controllers\Frontend\IndexController::class,'aboutUs'])->name('about_us');
Route::any('/blog',[\App\Http\Controllers\Frontend\IndexController::class,'blog'])->name('blog');
