<?php

use App\Http\Controllers\Backend\Auth\LoginController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')->group(function() {
    Route::get('login', [LoginController::class, 'show_login_form'])->name('admin.login');
    Route::post('login', [LoginController::class, 'login']);

    Route::post('logout', [LoginController::class, 'logout'])->name('admin.logout');
    // Route::get('deshboard', [DeshboardController::class, 'index'])->name('admin.deshboard');
});

Route::group(['as' => 'admin.', 'prefix' => 'admin', 'middleware' => 'auth:admin'], function() {
    
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('brands', BrandController::class);

    Route::group(['as' => 'category.', 'prefix' => 'category'], function() {
        Route::get('/index', [CategoryController::class, 'index'])->name('index');
        Route::get('/create', [CategoryController::class, 'create'])->name('create');
        Route::post('/store', [CategoryController::class, 'store'])->name('store');
        Route::get('/{category}/edit/', [CategoryController::class, 'edit'])->name('edit');
        Route::post('/{category}/update/', [CategoryController::class, 'update'])->name('update');
        Route::delete('/{category}/delete/', [CategoryController::class, 'delete'])->name('delete');
    });

    

    // icon routes
    Route::get('font-awesome-icon', function() {
        return view('backend.icons.font_awesome');
    })->name('font_awesome');
    Route::get('bootstrap-icon', function() {
        return view('backend.icons.bootstrap');
    })->name('bootstrap_icon');

});

// Route::group(['as' => 'attribute.', 'prefix' => 'attribute'], function() {
//     Route::get('/index', [AttributeController::class, 'index'])->name('index');
//     Route::post('/create', [AttributeController::class, 'store'])->name('create');
//     Route::get('/{attribute}/edit/', [AttributeController::class, 'edit'])->name('edit');
//     Route::post('/{attribute}/update/', [AttributeController::class, 'update'])->name('update');
//     Route::post('/{attribute}/delete/', [AttributeController::class, 'delete'])->name('delete');
// });

// Route::prefix('admin')->as('admin')->middleware('auth:admin')->group(function() {
    
// });



