<?php
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\AuthController;

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

Route::middleware('jwt.auth')->group(
    function() {
        Route::post('vehicle',[VehicleController::class, 'create']);
    }
);

Route::get('vehicle', [VehicleController::class, 'index']);
Route::get('vehicle/{id}', [VehicleController::class, 'getById']);
Route::post('simulate',[CalculatorController::class,'simulate']);


Route::post('login', [AuthController::class, 'login']);