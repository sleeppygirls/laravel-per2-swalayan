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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware(['auth:sanctum'])->group(function () {

    Route::get('auth', [ApiController::class, 'auth']);

Route::post('login', [ApiController::class, 'login']);

Route::get('/stuffs', [ApiController::class, 'stuff']);                    // Mengambil semua data
Route::post('/stuffs', [ApiController::class, 'stuffAdd']);                 // Menyimpan data baru
Route::put('/stuffs/{stuff}', [ApiController::class, 'stuffUpdate']);     // update data
Route::delete('/stuffs/{stuff}', [ApiController::class, 'stuffDelete']);      // Menghapus data

Route::post('/transaction/save', [ApiController::class, 'saveTransaction']);

});

Route::post('login', [ApiController::class, 'login']);


