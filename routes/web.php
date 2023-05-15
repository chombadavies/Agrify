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
Route::resource('materials',App\Http\Controllers\backend\MaterialsController::class);
Route::resource('research',App\Http\Controllers\backend\ResearchController::class);
Route::any('/Dashboard','App\Http\Controllers\HomeController@Dashboard');
Route::any('/departments','App\Http\Controllers\HomeController@Departments');



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
Route::any('/valuechain/{id}',[\App\Http\Controllers\Frontend\IndexController::class,'valuechain'])->name('valuechain.details');
Route::any('/partners/{id}',[\App\Http\Controllers\Frontend\IndexController::class,'Partner'])->name('partner');
Route::any('/project_details/{id}',[\App\Http\Controllers\Frontend\IndexController::class,'projectDetails'])->name('project.details');
Route::any('/media',[\App\Http\Controllers\Frontend\IndexController::class,'Media'])->name('media');
Route::any('/resources',[\App\Http\Controllers\Frontend\IndexController::class,'Resources'])->name('resources');
Route::any('/achievements',[\App\Http\Controllers\Frontend\IndexController::class,'achievements'])->name('achievements');
Route::any('/about',[\App\Http\Controllers\Frontend\IndexController::class,'about'])->name('about');
Route::any('/research/{id}',[\App\Http\Controllers\Frontend\IndexController::class,'Research'])->name('research');
Route::any('/dashboard',[\App\Http\Controllers\Frontend\IndexController::class,'dashboard'])->name('dashboard');
Route::any('/farmersingroups',[\App\Http\Controllers\Frontend\IndexController::class,'FarmerGroups'])->name('farmers.groups');
Route::any('/farmerspercounty',[\App\Http\Controllers\Frontend\IndexController::class,'FarmersCounty'])->name('farmers.county');
Route::any('/bydistance',[\App\Http\Controllers\Frontend\IndexController::class,'Distance'])->name('market.distance');
Route::any('/bygender',[\App\Http\Controllers\Frontend\IndexController::class,'Gender'])->name('farmers.gender');
Route::any('/groupactivities',[\App\Http\Controllers\Frontend\IndexController::class,'groupActivity']);
Route::any('/farmersregistration',[\App\Http\Controllers\Frontend\IndexController::class,'Registration']);
Route::any('/farmersbyward',[\App\Http\Controllers\Frontend\IndexController::class,'farmersByWard']);
Route::any('/farmersbyvaluechain',[\App\Http\Controllers\Frontend\IndexController::class,'farmersByValueChain']);


