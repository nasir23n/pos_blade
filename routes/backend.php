<?php

use App\Http\Controllers\Backend\Auth\LoginController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\PaymentMethodController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\PurchaseController;
use App\Http\Controllers\Backend\SaleController;
use App\Http\Controllers\Backend\SupplierController;
use App\Http\Controllers\Backend\UnitController;
use App\Http\Controllers\ExpenceCategoryController;
use App\Http\Controllers\ExpenceController;
use App\Http\Controllers\PaymentStatusController;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')->group(function() {
    Route::get('login', [LoginController::class, 'show_login_form'])->name('admin.login');
    Route::post('login', [LoginController::class, 'login']);

    Route::post('logout', [LoginController::class, 'logout'])->name('admin.logout');
    // Route::get('deshboard', [DeshboardController::class, 'index'])->name('admin.deshboard');
});

Route::group(['as' => 'admin.', 'prefix' => 'admin', 'middleware' => 'auth:admin'], function() {
    
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('brand', BrandController::class);

    Route::group(['as' => 'category.', 'prefix' => 'category'], function() {
        Route::get('/index', [CategoryController::class, 'index'])->name('index');
        Route::get('/create', [CategoryController::class, 'create'])->name('create');
        Route::post('/store', [CategoryController::class, 'store'])->name('store');
        Route::get('/{category}/edit/', [CategoryController::class, 'edit'])->name('edit');
        Route::post('/{category}/update/', [CategoryController::class, 'update'])->name('update');
        Route::delete('/{category}/delete/', [CategoryController::class, 'delete'])->name('delete');
    });

    Route::group(['as' => 'unit.', 'prefix' => 'unit'], function() {
        Route::get('/index', [UnitController::class, 'index'])->name('index');
        Route::get('/create', [UnitController::class, 'create'])->name('create');
        Route::post('/store', [UnitController::class, 'store'])->name('store');
        Route::get('/{unit}/edit/', [UnitController::class, 'edit'])->name('edit');
        Route::post('/{unit}/update/', [UnitController::class, 'update'])->name('update');
        Route::delete('/{unit}/delete/', [UnitController::class, 'delete'])->name('delete');
    });

    Route::group(['as' => 'payment_method.', 'prefix' => 'payment_method'], function() {
        Route::get('/index', [PaymentMethodController::class, 'index'])->name('index');
        Route::get('/create', [PaymentMethodController::class, 'create'])->name('create');
        Route::post('/store', [PaymentMethodController::class, 'store'])->name('store');
        Route::get('/{payment_method}/edit/', [PaymentMethodController::class, 'edit'])->name('edit');
        Route::post('/{payment_method}/update/', [PaymentMethodController::class, 'update'])->name('update');
        Route::delete('/{payment_method}/delete/', [PaymentMethodController::class, 'delete'])->name('delete');
    });

    Route::group(['as' => 'payment_status.', 'prefix' => 'payment_status'], function() {
        Route::get('/index', [PaymentStatusController::class, 'index'])->name('index');
        Route::get('/create', [PaymentStatusController::class, 'create'])->name('create');
        Route::post('/store', [PaymentStatusController::class, 'store'])->name('store');
        Route::get('/{payment_status}/edit/', [PaymentStatusController::class, 'edit'])->name('edit');
        Route::post('/{payment_status}/update/', [PaymentStatusController::class, 'update'])->name('update');
        Route::delete('/{payment_status}/delete/', [PaymentStatusController::class, 'delete'])->name('delete');
    });

    Route::group(['as' => 'product.', 'prefix' => 'product'], function() {
        Route::get('/index', [ProductController::class, 'index'])->name('index');
        Route::get('/create', [ProductController::class, 'create'])->name('create');
        Route::post('/store', [ProductController::class, 'store'])->name('store');
        // Route::get('/{unit}/edit/', [ProductController::class, 'edit'])->name('edit');
        // Route::post('/{unit}/update/', [ProductController::class, 'update'])->name('update');
        Route::delete('/{product}/delete/', [ProductController::class, 'delete'])->name('delete');
    });

    Route::group(['as' => 'supplier.', 'prefix' => 'supplier'], function() {
        Route::get('/index', [SupplierController::class, 'index'])->name('index');
        Route::get('/create', [SupplierController::class, 'create'])->name('create');
        Route::post('/store', [SupplierController::class, 'store'])->name('store');
        Route::get('/{supplier}/edit/', [SupplierController::class, 'edit'])->name('edit');
        Route::post('/{supplier}/update/', [SupplierController::class, 'update'])->name('update');
        Route::delete('/{supplier}/delete/', [SupplierController::class, 'delete'])->name('delete');
    });

    Route::group(['as' => 'customer.', 'prefix' => 'customer'], function() {
        Route::get('/index', [CustomerController::class, 'index'])->name('index');
        Route::get('/create', [CustomerController::class, 'create'])->name('create');
        Route::post('/store', [CustomerController::class, 'store'])->name('store');
        Route::get('/{customer}/edit/', [CustomerController::class, 'edit'])->name('edit');
        Route::post('/{customer}/update/', [CustomerController::class, 'update'])->name('update');
        Route::delete('/{customer}/delete/', [CustomerController::class, 'delete'])->name('delete');
    });

    Route::group(['as' => 'purchase.', 'prefix' => 'purchase'], function() {
        Route::get('/index', [PurchaseController::class, 'index'])->name('index');
        Route::get('/filter_product', [PurchaseController::class, 'filterProduct'])->name('filter_product');
        Route::get('/get_products', [PurchaseController::class, 'get_products'])->name('get_products');
        Route::get('/create', [PurchaseController::class, 'create'])->name('create');
        Route::post('/store', [PurchaseController::class, 'store'])->name('store');
        Route::get('/{purchase}/show/', [PurchaseController::class, 'show'])->name('show');
        Route::get('/{purchase}/edit/', [PurchaseController::class, 'edit'])->name('edit');
        Route::post('/{purchase}/update/', [PurchaseController::class, 'update'])->name('update');
        Route::delete('/{purchase}/delete/', [PurchaseController::class, 'delete'])->name('delete');
    });

    Route::group(['as' => 'sales.', 'prefix' => 'sales'], function() {
        Route::get('/index', [SaleController::class, 'index'])->name('index');
        Route::get('/filter_product', [SaleController::class, 'filterProduct'])->name('filter_product');
        Route::get('/get_products', [SaleController::class, 'get_products'])->name('get_products');
        Route::get('/create', [SaleController::class, 'create'])->name('create');
        Route::post('/store', [SaleController::class, 'store'])->name('store');
        Route::get('/{sale}/show/', [SaleController::class, 'show'])->name('show');
        Route::get('/{sale}/edit/', [SaleController::class, 'edit'])->name('edit');
        // Route::post('/{purchase}/update/', [SaleController::class, 'update'])->name('update');
        Route::delete('/{sale}/delete/', [SaleController::class, 'delete'])->name('delete');
    });

    Route::group(['as' => 'expence.', 'prefix' => 'expence'], function() {
        Route::get('/index', [SaleController::class, 'index'])->name('index'); 
        Route::get('/create', [SaleController::class, 'create'])->name('create');
        Route::post('/store', [SaleController::class, 'store'])->name('store');
        Route::get('/{sale}/show/', [SaleController::class, 'show'])->name('show');
        Route::get('/{sale}/edit/', [SaleController::class, 'edit'])->name('edit');
        // Route::post('/{purchase}/update/', [SaleController::class, 'update'])->name('update');
        Route::delete('/{sale}/delete/', [SaleController::class, 'delete'])->name('delete');
    });


    Route::group(['as' => 'expence_category.', 'prefix' => 'expence_category'], function() {
        Route::get('/index', [ExpenceCategoryController::class, 'index'])->name('index');
        Route::get('/create', [ExpenceCategoryController::class, 'create'])->name('create');
        Route::post('/store', [ExpenceCategoryController::class, 'store'])->name('store');
        Route::get('/{expence_category}/edit/', [ExpenceCategoryController::class, 'edit'])->name('edit');
        Route::post('/{expence_category}/update/', [ExpenceCategoryController::class, 'update'])->name('update');
        Route::delete('/{expence_category}/delete/', [ExpenceCategoryController::class, 'delete'])->name('delete');
    });

    Route::group(['as' => 'expence.', 'prefix' => 'expence'], function() {
        Route::get('/index', [ExpenceController::class, 'index'])->name('index');
        Route::get('/create', [ExpenceController::class, 'create'])->name('create');
        Route::post('/store', [ExpenceController::class, 'store'])->name('store');
        Route::get('/{expence}/edit/', [ExpenceController::class, 'edit'])->name('edit');
        Route::post('/{expence}/update/', [ExpenceController::class, 'update'])->name('update');
        Route::delete('/{expence}/delete/', [ExpenceController::class, 'delete'])->name('delete');
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



