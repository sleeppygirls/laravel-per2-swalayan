<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TransactionController;
use App\Http\Controllers\DetailTransactionController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\StuffController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

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

Route::get('generateData', [AuthController::class, 'generateData']);

Route::get('/', function () {
    return view('home');
})->middleware('is.auth');

Route::get('login', [AuthController::class, 'showLogin'])->middleware('is.not.auth');
Route::post('login', [AuthController::class, 'actionLogin'])->middleware('is.not.auth');

Route::middleware(['is.auth'])->group(function () {

    Route::get('logout', [AuthController::class, 'actionLogout']);

    Route::resource('customers', CustomerController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('users', UserController::class);
    Route::resource('stuffs', StuffController::class);

    Route::get('transaction', [TransactionController::class, 'index']);
    Route::get('transaction/add', [TransactionController::class, 'create']);
});





// Route::get('customers', [CustomerController::class, 'index']);                   // Menampilkan data tabel
// Route::get('customers/create', [CustomerController::class, 'create']);           // Menampilkan form untuk tambah data
// Route::post('customers', [CustomerController::class, 'store']);                  // Menyimpan data baru dari form tambah (add)
// Route::get('customers/{customer}', [CustomerController::class, 'show']);         // Menampilkan form edit berdasarkan data yang terpilih
// Route::put('customers/{customer}', [CustomerController::class, 'update']);       // Menyimpan data yang di edit melalui form edit
// Route::delete('customers/{customer}', [CustomerController::class, 'destroy']);   // Menghapus data

// Route::get('category', [CategoryController::class, 'index']);
// Route::get('category/add', [CategoryController::class, 'create']);

// Route::get('user', [UserController::class, 'index']);
// Route::get('user/add', [UserController::class, 'create']);

// Route::get('stuff', [StuffController::class, 'index']);
// Route::get('stuff/add', [StuffController::class, 'create']);