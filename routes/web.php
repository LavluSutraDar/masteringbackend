<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\admin\categorycontroller;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/category/index', [categorycontroller::class, 'index'])->name('all.category');
Route::get('/category/create', [categorycontroller::class, 'create'])->name('category.create');
Route::post('/category/store', [categorycontroller::class, 'store'])->name('category.store');
Route::get('/category/edit/{id}', [categorycontroller::class, 'edit'])->name('category.edit');

Route::post('/update/category/{id}', [categorycontroller::class, 'update'])->name('update.name');

Route::get('/category/delete/{id}', [categorycontroller::class, 'distroy'])->name('cat.delete');
