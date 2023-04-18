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

Route::group(['prefix'=>'admin','middleware' => ['auth']],function(){

Route::any('/',[App\Http\Controllers\AdminController::class, 'admin'])->name('portal');
Route::any('/fetchusers',[\App\Http\Controllers\UserController::class,'fetchUsers']);
Route::resource('users',App\Http\Controllers\UserController::class);
Route::resource('valuechains',App\Http\Controllers\backend\ValueChainController::class);
Route::any('/fetch_valuechains',[\App\Http\Controllers\backend\ValueChainController::class,'fetchValuechains']);
Route::resource('news',App\Http\Controllers\backend\NewsController::class);
Route::resource('partners',App\Http\Controllers\backend\PartnersController::class);
Route::resource('projects',App\Http\Controllers\backend\ProjectsController::class);
Route::any('/fetchpartners',[App\Http\Controllers\backend\PartnersController::class, 'fetchPartners']);
Route::any('/fetchprojects',[App\Http\Controllers\backend\ProjectsController::class, 'fetchProjects']);



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
Route::any('/valuechains',[\App\Http\Controllers\Frontend\IndexController::class,'valuechains'])->name('valuechains');
Route::any('/valuechain/{id}',[\App\Http\Controllers\Frontend\IndexController::class,'valuechain'])->name('valuechain.show');
Route::any('/projects/{id}',[\App\Http\Controllers\Frontend\IndexController::class,'Project'])->name('meme');
Route::any('/project_details/{id}',[\App\Http\Controllers\Frontend\IndexController::class,'projectDetails'])->name('project.details');
