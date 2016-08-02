<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::Resou

Route::post('authenticate', 'AuthenticateController@authenticate');

Route::get('/register',function(){$user = new App\User();
    $user->name="test";
 $user->email="test@test.com";
 $user->password = \Illuminate\Support\Facades\Hash::make("123456");
 $user->save();

});