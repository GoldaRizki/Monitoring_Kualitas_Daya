<?php

use App\Http\Controllers\API\ApiAlatController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/si_paling_skripsi', [ApiAlatController::class, 'create']);
Route::post('/data_random', [ApiAlatController::class, 'createRandom']);
Route::post('/minta_data', [ApiAlatController::class, 'getData']);