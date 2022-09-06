<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientProdukController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
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
    return view('client/index');
});

Route::get('index' , [HomeController::class, 'showIndex']);
Route::get('shop' , [HomeController::class, 'showShop']);
Route::get('contact' , [HomeController::class, 'showContact']);


Route::get('login' , [AuthController::class, 'showLogin']);

Route::get('home' , [HomeController::class, 'showHome']);
Route::get('supplier' , [HomeController::class, 'showSupplier']);

Route::get('produk' , [ProdukController::class, 'index']);
Route::get('produk/create' , [ProdukController::class, 'create']);
Route::post('produk' , [ProdukController::class, 'store']);
Route::get('produk/{produk}' , [ProdukController::class, 'show']);
Route::get('produk/{produk}/edit' , [ProdukController::class, 'edit']);
Route::put('produk/{produk}' , [ProdukController::class, 'update']);
Route::delete('produk/{produk}' , [ProdukController::class, 'destroy']);


Route::get('/', [CLientProdukController::class, 'index']);
Route::get('detail/{produk}', [ClientProdukController::class, 'show']);

Route::get('product', [ClientProdukController::class, 'prod']);








