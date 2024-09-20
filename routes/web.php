<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\officeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Product Routes
    Route::get('/products', [ProductController::class, 'productFunction'])->name('productRoutesName');
    Route::get('/customers', [CustomerController::class, 'customerFunction'])->name('customerRoutesName');
    Route::get('/orders', [OrderController::class, 'orderFunction'])->name('orderRoutesName');
    Route::get('/employees', [EmployeeController::class, 'employeeFunction'])->name('employeesList');
    Route::get('/office', [officeController::class, 'officeFunction'])->name('officeRoutesName');
});

require __DIR__.'/auth.php';
