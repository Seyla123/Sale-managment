<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\ProductController as ControllersProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
Route::get('user/register', function(){
    return view('auth.register');
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::controller(ControllersProductController::class)->group(function () {
        Route::prefix("product")->group(function () {
            Route::get('/', 'index')->name('product');
            Route::get('/edit/{id}', 'edit');
            Route::get('/create', 'store');
            Route::post('/create', 'create');
            Route::put('/edit/{id}', 'update');
            Route::put('/delete/{id}', 'destroy');
        });
    });
    Route::controller(CategoryController::class)->group(function () {
        Route::prefix("category")->group(function (){
            Route::get('/', 'index')->name('category');
            Route::get('/create', 'store');
            Route::post('/create', 'create');
            Route::get('/edit/{id}', 'edit');
            Route::put('/edit/{id}', 'update');
            Route::put('/delete/{id}', 'destroy');
        });
    });
    Route::controller(UserController::class)->group(function () {
        Route::prefix("user")->group(function (){
            Route::get('/', 'index')->name('user');
            Route::get('/create', 'store');
            Route::post('/create', 'create');
            Route::get('/edit/{id}', 'edit');
            Route::put('/edit/{id}', 'update');
            Route::put('/delete/{id}', 'destroy');
        });
    });
    Route::controller(SaleController::class)->group(function () {
        Route::prefix("sale")->group(function (){
            Route::get('/', 'index')->name('sale');
            Route::get('/report', 'show')->name('sale.report');
            Route::get('/{id}', 'store');
            Route::post('/create', 'create');
        });
    });
    Route::controller(PurchaseController::class)->group(function () {
        Route::prefix("purchase")->group(function (){
            Route::get('/', 'index')->name('purchase');
            Route::get('/report', 'show')->name('purchase.report');
            Route::get('{id}', 'store');
            Route::post('/create', 'create');
        });
    });
    Route::controller(SupplierController::class)->group(function () {
        Route::prefix("supplier")->group(function (){
            Route::get('/', 'index')->name('supplier');
            Route::get('/create', 'store');
            Route::post('/create', 'create');
            Route::get('/edit/{id}', 'edit');
            Route::put('/edit/{id}', 'update');
            Route::put('/delete/{id}', 'destroy');
        });
    });
    Route::controller(DashboardController::class)->group(function () {
            Route::get('/', 'index')->name('dashboard');
        });
        Route::controller(DashboardController::class)->group(function () {
            Route::get('/dashboard', 'index')->name('dashboard');
        });

});

