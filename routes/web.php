<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Frontend\BlogController as FrontBlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Frontend\homeController as FrontendHome;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Category2Controller;




Route::get('/wel', function () {
    return view('welcome');
});

Route::get('/' , [FrontendHome::class, 'index'])->name('home');


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// profile  update


Route::get('/home' , [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile' , [App\Http\Controllers\ProfileController::class, 'index'])->name('profile.index');
Route::post('/profile/info/update' , [App\Http\Controllers\ProfileController::class, 'name_update'])->name('profile.username.update');
Route::post('/profile/photo/update' , [App\Http\Controllers\ProfileController::class, 'photo_update'])->name('profile.photo.update');
Route::post('/profile/pass/update' , [App\Http\Controllers\ProfileController::class, 'pass_update'])->name('profile.password.update');

// categorys

Route::get('/category' , [App\Http\Controllers\CategoryController::class, 'index'])->name('category.index');
Route::get('/category/create' , [App\Http\Controllers\CategoryController::class, 'create'])->name('category.create');
Route::post('/category/store' , [App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');
Route::get('/category/destroy/{id}' , [App\Http\Controllers\CategoryController::class, 'destroy'])->name('category.destroy');
Route::get('/category/edit/{id}' , [App\Http\Controllers\CategoryController::class, 'edit'])->name('category.edit');
Route::post('/category/update/{id}' , [App\Http\Controllers\CategoryController::class, 'update'])->name('category.update');
Route::post('/category/status/' , [App\Http\Controllers\CategoryController::class, 'status'])->name('category.status');



 // Blogs

 Route::resource('blog', BlogController::class);
 Route::post('/blog/status/' , [App\Http\Controllers\BlogController::class, 'status'])->name('blog.status');
 Route::post('/blog/updates/{id}' , [App\Http\Controllers\BlogController::class, 'update'])->name('blog.updates');
 Route::get('/blog/delete/{id}' , [App\Http\Controllers\BlogController::class, 'destroy'])->name('blog.delete');


// user management

Route::get('/user_manage' , [App\Http\Controllers\UserController::class, 'index'])->name('user_manage');
Route::get('/user_manage/create' , [App\Http\Controllers\UserController::class, 'create'])->name('user_manage.create');
Route::post('/user_manage/create/new' , [App\Http\Controllers\UserController::class, 'create_new'])->name('user.create.new');
Route::get('/user_manage/user/delete/{id}' , [App\Http\Controllers\UserController::class, 'delete_user'])->name('user.manage.delete');
Route::get('/user_manage/user/block/{id}' , [App\Http\Controllers\UserController::class, 'block_user'])->name('user.manage.block');
Route::post('/user_manage/user/role' , [App\Http\Controllers\UserController::class, 'roleAssign_user'])->name('user.manage.roleAssign');
Route::get('/user_manage/user/edit/{id}' , [App\Http\Controllers\UserController::class, 'edit_page'])->name('user.manage.edit.page');
Route::post('/user_manage/user/edit/{id}' , [App\Http\Controllers\UserController::class, 'edit_user'])->name('user.create.edit');



// Frontend

// home


// Category Show

Route::get('/category/{slug}' , [FrontBlogController::class, 'category'])->name('blog.category');

// Single blog

Route::get('/blogs/{slug}' , [FrontBlogController::class, 'single'])->name('blog.single');
