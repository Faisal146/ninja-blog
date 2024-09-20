<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// profile  update


Route::get('/home' , [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile' , [App\Http\Controllers\ProfileController::class, 'index'])->name('profile.index');
Route::post('/profile/info/update' , [App\Http\Controllers\ProfileController::class, 'name_update'])->name('profile.username.update');
Route::post('/profile/photo/update' , [App\Http\Controllers\ProfileController::class, 'photo_update'])->name('profile.photo.update');
Route::post('/profile/pass/update' , [App\Http\Controllers\ProfileController::class, 'pass_update'])->name('profile.password.update');

// categorys

Route::get('/categorys' , [App\Http\Controllers\CategoryController::class, 'index'])->name('category');


// user management

Route::get('/user_manage' , [App\Http\Controllers\UserController::class, 'index'])->name('user_manage');
Route::get('/user_manage/create' , [App\Http\Controllers\UserController::class, 'create'])->name('user_manage.create');
Route::post('/user_manage/create/new' , [App\Http\Controllers\UserController::class, 'create_new'])->name('user.create.new');
Route::get('/user_manage/user/delete/{id}' , [App\Http\Controllers\UserController::class, 'delete_user'])->name('user.manage.delete');
Route::get('/user_manage/user/block/{id}' , [App\Http\Controllers\UserController::class, 'block_user'])->name('user.manage.block');
Route::post('/user_manage/user/role' , [App\Http\Controllers\UserController::class, 'roleAssign_user'])->name('user.manage.roleAssign');
Route::get('/user_manage/user/edit/{id}' , [App\Http\Controllers\UserController::class, 'edit_page'])->name('user.manage.edit.page');
Route::post('/user_manage/user/edit/{id}' , [App\Http\Controllers\UserController::class, 'edit_user'])->name('user.create.edit');

