<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
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

Route::group(['controller' => App\Http\Controllers\home::class], function() {
	Route::get('/','home');
	Route::get('/index','home');
	Route::get('/works','work');
	Route::get('/contact','contact');
	Route::get('/About','about')->name('about');
	Route::get('/blog','blog')->name('blog');
	Route::get('/fullblog/{id}','fullblog')->name('fullBlog');
	Route::get('service','service')->name('service');
});

Route::group(['controller' => App\Http\Controllers\AdminController::class], function() {
	Route::get('/admin_login','index');
	Route::post('/welcome','create')->name('login');
	Route::get('/welcome','create')->name('login');
	Route::get('/dashboard','show')->name('dashboard');

});

Route::group(['controller' => App\Http\Controllers\CreateprojectController::class], function() {
	Route::get('/project','index')->name('project');
	Route::get('/ridrectProject','create')->name('ridrectProject');
	Route::post('/addProject','store')->name('addProject');
	Route::get('/editProject/{id}','edit')->name('editProject');
	Route::post('/updateProject','update')->name('updateProject');
	Route::post('/deleteProject','destroy')->name('deleteProject');

});

Route::group(['controller' => App\Http\Controllers\BlogController::class],function(){
	Route::get('/showBlog','index')->name('showBlog');
	Route::get('/createBlog','create')->name('createBlog');
	Route::post('/addBlog','store')->name('addBlog');
	Route::get('/editBlog/{id}','edit')->name('editBlog');
	Route::post('/updateBlog','update')->name('updateBlog');
	Route::post('/deleteBlog','destroy')->name('deleteBlog');

});

	Route::resource('/showService',ServiceController::class);
	Route::resource('/createService',ServiceController::class);
	Route::resource('/addService',ServiceController::class);
	Route::get('/editService/{id}',[App\Http\Controllers\ServiceController::class,'edit'])->name('editService');
	Route::post('/updateService',[App\Http\Controllers\ServiceController::class,'update'])->name('updateService');

	Route::post('/deleteService',[ServiceController::class,'destroy'])->name('deleteService');

