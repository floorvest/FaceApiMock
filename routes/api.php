<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FaceApiController;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('face-api/v3')->group(function() {

    Route::post('/face/detect', [FaceApiController::class, 'detectFace']);
    Route::post('/face/identify', [FaceApiController::class, 'identifyFace']);
    Route::post('/face/add', [FaceApiController::class, 'addFace']);
    Route::post('/face/liveness', [FaceApiController::class, 'checkLiveness']);
    Route::get('/group/list', [FaceApiController::class, 'getGroupList']);

});

