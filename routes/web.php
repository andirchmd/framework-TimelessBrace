<?php

use App\Models\Produk;
use App\Models\Customers;

use App\Models\Keranjang;
use App\Models\KeranjangItem;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;


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
})->name('welcome');

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('dashboard', function () {
        return view('admin.dashboard', [DashboardController::class, 'getStats']);
    })->name('admin.dashboard');

    Route::get('customer', function () {
        return view(
            'admin.customer',
            [
                'customer' => Customers::all(),
            ],
            [DashboardController::class, 'getStats'],
        );
    })->name('admin.customer');

    Route::get('produk', function () {
        return view('admin.produk', [
            'produk' => Produk::all(),
        ]);
    })->name('admin.produk');

    Route::get('keranjang', function () {
        return view('admin.keranjang', [
            'keranjang' => Keranjang::all(),
        ]);
    })->name('admin.keranjang');

    Route::view('customer/tambah', 'admin.crud.add')->name('customer.add');
    
    Route::controller(CustomerController::class)->group(function(){
    
        Route::post('customer/tambah/action','store')->name('customer.store');
    
        Route::get('customer/edit/{id}', 'edit')->name('customer.edit');
    
        Route::post('customer/edit/{id}/action','update')->name('customer.update');
    
        Route::post('customer/delete/{id}/action', 'delete')->name('customer.delete');
    });
});

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');


Route::controller(AuthController::class)->group(function(){
    Route::post('/register/action','registerAction')->name('register.action');

    Route::post('/login/action','loginAction')->name('login.action');

    Route::get('/logout','logout')->name('logout');
});

