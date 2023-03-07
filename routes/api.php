<?php
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\CalculatorController;

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

Route::get('vehicle', [VehicleController::class, 'index']);
Route::post('simulate',[CalculatorController::class,'simulate']);
Route::post('vehicle',[VehicleController::class, 'create']);
