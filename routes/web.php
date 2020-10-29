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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// customer controller route
Route::get('customer/index', [App\Http\Controllers\CustomerController::class, 'index'])->name('customer');
Route::get('customer/create', [App\Http\Controllers\CustomerController::class, 'create'])->name('customer.create');
Route::post('customer/store', [App\Http\Controllers\CustomerController::class, 'store'])->name('customer.store');
Route::get('customer/edit/{id}', [App\Http\Controllers\CustomerController::class, 'edit'])->name('customer.edit');
Route::post('customer/update/{id}', [App\Http\Controllers\CustomerController::class, 'update'])->name('customer.update');
Route::get('customer/destroy/{id}', [App\Http\Controllers\CustomerController::class, 'destroy'])->name('customer.destroy');