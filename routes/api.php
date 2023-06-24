<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BikeController;
use OpenApi\Annotations as OA;
use OpenApi\Info;

/**
 * @OA\Info(
 *     title="Teste LiberFly Álvaro",
 *     version="1.0.0"
 * )
 */



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

Route::get('api/documentation', '\L5Swagger\Http\Controllers\SwaggerController@api')->name('l5-swagger.api');
Route::post('auth/login', [AuthController::class, 'login']);

Route::group([
    'middleware' => 'api',
], function ($router) {

    //Auth
    Route::group(['prefix' => 'auth'], function(){
        Route::post('logout', [AuthController::class, 'logout']);
        Route::post('refresh', [AuthController::class, 'refresh']);
        Route::post('me', [AuthController::class, 'me']);
    });

    //Bikes
    Route::group(['prefix' => 'bike'], function(){
        Route::get('', [BikeController::class, 'allBikes']);
        Route::get('{id}', [BikeController::class, 'bikeById']);
    });

});



