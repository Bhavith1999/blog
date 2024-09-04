<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BlogController;

Route::get('/panel/dashboard', [DashboardController::class, 'dashboard'])->name('panel.dashboard');

Route::get('/panel/blog/list', [BlogController::class, 'blog'])->name('panel.blog.list');
Route::get('/panel/blog/add', [BlogController::class, 'add_blog'])->name('panel.blog.add');
Route::post('/panel/blog/add', [BlogController::class, 'insert_blog'])->name('panel.blog.insert');
Route::get('/panel/blog/edit/{id}', [BlogController::class, 'edit_blog'])->name('panel.blog.edit');
Route::post('/panel/blog/edit/{id}', [BlogController::class, 'update_blog'])->name('panel.blog.update');
Route::get('/panel/blog/delete/{id}', [BlogController::class, 'delete_blog'])->name('panel.blog.delete');

Route::get('/blog', [BlogController::class, 'blog_front'])->name('blog.front');
Route::get('/blog/{id}', [BlogController::class, 'show_blog'])->name('blog.show');
