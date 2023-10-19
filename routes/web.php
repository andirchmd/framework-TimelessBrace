<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

use App\Models\Customers;
use App\Models\Keranjang;
use App\Models\Produk;
use App\Models\KeranjangItem;

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

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard',[
        DashboardController::class, 'getStats'
    ]);
})->name('admin.dashboard');

Route::get('/admin/customer', function () {
    return view('admin.customer',[
        "customer" => Customers::all()
    ],
    [
        DashboardController::class, 'getStats'
    ]);
})->name('admin.customer');

Route::get('/admin/produk', function () {
    return view('admin.produk',[
        "produk" => Produk::all()
    ]);
})->name('admin.produk');

Route::get('/admin/keranjang', function () {
    return view('admin.keranjang',[
        "keranjang" => Keranjang::all()
    ]);
})->name('admin.keranjang');