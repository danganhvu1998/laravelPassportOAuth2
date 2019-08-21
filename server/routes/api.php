<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    return Auth::user();
});

Route::post("/login", "UsersController@login")->name("login");

Route::post("/register", "UsersController@register")->name("register");

Route::middleware('auth:api')->post("/logout_current", "UsersController@logoutCurrent")->name("logout_current");

Route::middleware('auth:api')->post("/logout_all", "UsersController@logoutAll")->name("logout_all");
