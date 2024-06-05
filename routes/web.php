<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

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

Route::group(['prefix'=>'admin','middleware' => ['auth','password.change']],function(){

Route::any('/',[App\Http\Controllers\AdminController::class, 'admin'])->name('portal');
Route::any('/fetchusers',[\App\Http\Controllers\UserController::class,'fetchUsers']);
Route::resource('users',App\Http\Controllers\UserController::class);
Route::resource('valuechains',App\Http\Controllers\backend\ValueChainController::class);
Route::any('/fetch_valuechains',[\App\Http\Controllers\backend\ValueChainController::class,'fetchValuechains']);
Route::resource('news',App\Http\Controllers\backend\NewsController::class);

Route::resource('media',App\Http\Controllers\backend\MediaController::class);
Route::any('/fethmedia',[App\Http\Controllers\backend\MediaController::class, 'fetchMedia']);
Route::resource('partners',App\Http\Controllers\backend\PartnersController::class);
Route::resource('projects',App\Http\Controllers\backend\ProjectsController::class);
Route::any('/fetchpartners',[App\Http\Controllers\backend\PartnersController::class, 'fetchPartners']);
Route::any('/fetchmessages',[App\Http\Controllers\backend\PartnersController::class, 'fetchMessages']);
Route::any('/hmessage_edit',[App\Http\Controllers\backend\PartnersController::class, 'editMessage'])->name('feedback.edit');

Route::any('/fetchprojects',[App\Http\Controllers\backend\ProjectsController::class, 'fetchProjects']);
Route::resource('materials',App\Http\Controllers\backend\MaterialsController::class);
Route::any('/fetch_materials',[App\Http\Controllers\backend\MaterialsController::class, 'fetchMaterials']);
Route::resource('impactareas',App\Http\Controllers\backend\ImpactAreasController::class);
Route::any('/fetch_impactareas',[App\Http\Controllers\backend\ImpactAreasController::class, 'fetchImpactAreas']);
Route::resource('research',App\Http\Controllers\backend\ResearchController::class);

Route::any('/fetch_research',[App\Http\Controllers\backend\ResearchController::class, 'fetchResearch']);
Route::resource('research_achievements',App\Http\Controllers\backend\AchiementsController::class);
Route::any('/fetch_research_achievements',[App\Http\Controllers\backend\AchiementsController::class, 'fetchResearchAchievements']);
Route::any('/fetch_allachievements',[App\Http\Controllers\backend\AllAchievementsController::class, 'fetchAllAchievements']);
Route::resource('all_achievements',App\Http\Controllers\backend\AllAchievementsController::class);
Route::resource('project_achievements',App\Http\Controllers\backend\ProjectAchievementsController::class);
Route::any('/fetch_projectachievements',[App\Http\Controllers\backend\ProjectAchievementsController::class, 'fetchProjectAchievements']);
Route::any('/cascade_projects/{id}',[App\Http\Controllers\backend\ProjectAchievementsController::class, 'cascadeProjects']);


Route::resource('coapplicants',App\Http\Controllers\backend\CoapplicantsController::class);
Route::any('/fetch_coapplicants',[App\Http\Controllers\backend\CoapplicantsController::class, 'fetchCoapplicants']);
Route::any('/Dashboard','App\Http\Controllers\HomeController@Dashboard');
Route::any('/departments','App\Http\Controllers\HomeController@Departments');

Route::any('/first_time_password',[\App\Http\Controllers\Auth\PasswordChangeController::class,'firstTmiemPasswordRequest'])->name('requestft.password');





});




Auth::routes(['register' => false]);
Route::group(['prefix'=>'admin','middleware' => ['auth']],function(){
    Route::any('/first_time_password_save',[\App\Http\Controllers\Auth\PasswordChangeController::class,'firstTmiemPasswordUpdate'])->name('fspassword.update');
});

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
Route::any('/about_us',[\App\Http\Controllers\Frontend\IndexController::class,'about'])->name('about_us');
Route::any('/blog',[\App\Http\Controllers\Frontend\IndexController::class,'blog'])->name('blog');
Route::any('/valuechains',[\App\Http\Controllers\Frontend\IndexController::class,'valuechains'])->name('valuechains');
Route::any('/valuechain/{id}',[\App\Http\Controllers\Frontend\IndexController::class,'valuechain'])->name('valuechain.details');
Route::any('/partners',[\App\Http\Controllers\Frontend\IndexController::class,'Partners'])->name('partners');
Route::any('/partners/{id}',[\App\Http\Controllers\Frontend\IndexController::class,'Partner'])->name('partner');
Route::any('/co-applicants/{id}',[\App\Http\Controllers\Frontend\IndexController::class,'CoApplicant'])->name('coapplicant');
Route::any('/co-applicants',[\App\Http\Controllers\Frontend\IndexController::class,'CoApplicants'])->name('coapplicants');
Route::any('/project_details/{id}',[\App\Http\Controllers\Frontend\IndexController::class,'projectDetails'])->name('project.details');
Route::any('/media',[\App\Http\Controllers\Frontend\IndexController::class,'Media'])->name('media');
Route::any('/resources',[\App\Http\Controllers\Frontend\IndexController::class,'Resources'])->name('resources');
Route::any('/achievements',[\App\Http\Controllers\Frontend\IndexController::class,'achievements'])->name('achievements');
Route::any('/technology-models',[\App\Http\Controllers\Frontend\IndexController::class,'technologyModel'])->name('technology_models');
Route::any('/about',[\App\Http\Controllers\Frontend\IndexController::class,'about'])->name('about');
Route::any('/research/{id}',[\App\Http\Controllers\Frontend\IndexController::class,'research_Details'])->name('reseach_details');
Route::any('/reseach_details/{id}',[\App\Http\Controllers\Frontend\IndexController::class,'Research'])->name('research');
Route::any('/dashboard',[\App\Http\Controllers\Frontend\IndexController::class,'dashboard'])->name('dashboard');
Route::any('/result_dashboard',[\App\Http\Controllers\Frontend\IndexController::class,'resultDashboard'])->name('results.dashboard');
Route::any('/farmersingroups',[\App\Http\Controllers\Frontend\IndexController::class,'FarmerGroups'])->name('farmers.groups');
Route::any('/farmerspercounty',[\App\Http\Controllers\Frontend\IndexController::class,'FarmersCounty'])->name('farmers.county');
Route::any('/technology_adoption',[\App\Http\Controllers\Frontend\IndexController::class,'technologyAdoption'])->name('technology.adoption');
Route::any('/bydistance',[\App\Http\Controllers\Frontend\IndexController::class,'Distance'])->name('market.distance');
Route::any('/bygender',[\App\Http\Controllers\Frontend\IndexController::class,'Gender'])->name('farmers.gender');
Route::any('/groupactivities',[\App\Http\Controllers\Frontend\IndexController::class,'groupActivity']);
Route::any('/farmersregistration',[\App\Http\Controllers\Frontend\IndexController::class,'Registration']);
Route::any('/farmersbyward',[\App\Http\Controllers\Frontend\IndexController::class,'farmersByWard']);
Route::any('/farmersbyvaluechain',[\App\Http\Controllers\Frontend\IndexController::class,'farmersByValueChain']);
Route::any('/project_profile',[\App\Http\Controllers\Frontend\IndexController::class,'projectProfile'])->name('project_profile');
Route::any('/project_governance',[\App\Http\Controllers\Frontend\IndexController::class,'projectGovernance'])->name('project_governance');
Route::any('/map',[\App\Http\Controllers\Frontend\IndexController::class,'map'])->name('map');
Route::any('/impact-areas',[\App\Http\Controllers\Frontend\IndexController::class,'impactAreas'])->name('impact.areas');
Route::any('/feedback',[\App\Http\Controllers\Frontend\IndexController::class,'feedBack'])->name('feedback');
Route::any('/project_achievements/{id}',[\App\Http\Controllers\Frontend\IndexController::class,'projectAchievements'])->name('project.achievements');


