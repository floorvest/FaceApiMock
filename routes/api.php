<?php

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group('face-api/v3', function() {

    Route::post('face/detect', 'FaceApiController@detectFace');
    Route::post('face/identify', 'FaceApiController@identifyFace');
    Route::post('face/add', 'FaceApiController@addFace');
    Route::post('face/liveness', 'FaceApiController@checkLiveness');
    Route::get('group/list', 'FaceApiController@geGroupList');

});
