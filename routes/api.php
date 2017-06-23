<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


$api = app('Dingo\Api\Routing\Router');


$api->version('v1', function ($api) {
    $ctrl="App\\Http\\Controllers\\API\\";

    //$api->resource('user',$ctrl."UserController");
    /*$api->get('test',function(){
       return "test";
    });*/
});
