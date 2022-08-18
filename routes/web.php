<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BranchController as BranchCon;

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


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user', [App\Http\Controllers\HomeController::class, 'user'])->name('user')->middleware('role:user');
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin')->middleware('role:admin');

//branches
Route::get('/branches', [BranchCon::class, 'index'])->name('branches-index')->middleware('role:admin');
Route::get('/branches/create', [BranchCon::class, 'create'])->name('branches-create')->middleware('role:admin');
Route::delete('/branches/{branch}', [BranchCon::class, 'destroy'])->name('branches-delete')->middleware('role:admin');

//services
Route::get('/services', [App\Http\Controllers\HomeController::class, 'index'])->name('services-index')->middleware('role:admin');

//mechanics
Route::get('/mechanics', [App\Http\Controllers\HomeController::class, 'index'])->name('mechanics-index')->middleware('role:admin');

//orders
Route::get('/orders', [App\Http\Controllers\HomeController::class, 'index'])->name('orders-index')->middleware('role:admin');

//ratings
Route::get('/ratings', [App\Http\Controllers\HomeController::class, 'index'])->name('ratings-index')->middleware('role:admin');
