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


    $api->resource('user',$ctrl."UserController");
    $api->resource('profile',$ctrl."ProfileController");
    $api->resource('rol',$ctrl."RolController");
    $api->resource('book',$ctrl."BookController");

    $api->post('auth/signIn',["uses"=>$ctrl.'AuthController@signIn', "as"=>"auth.signin"]);
    $api->post('auth/signUp',["uses"=>$ctrl.'AuthController@signUp', "as"=>"auth.signup"]);
    $api->get('auth/signOut',["uses"=>$ctrl.'AuthController@signOut', "as"=>"auth.signout"]);

});

/*$api->version('v1', function ($api) {
    $api->group(['middleware' => 'foo'], function ($api) {
        // Endpoints registered here will have the "foo" middleware applied.
    });
});*/
