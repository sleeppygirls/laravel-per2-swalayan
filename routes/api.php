<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/stuffs', [ApiController::class, 'stuff']);                    // Mengambil semua data
Route::post('/stuffs', [ApiController::class, 'stuffAdd']);                 // Menyimpan data baru
Route::post('/stuffs/{stuff}', [ApiController::class, 'stuffUpdate']);     // update data
Route::get('/stuffs/{stuff}', [ApiController::class, 'stuffDelete']);      // Menghapus data


