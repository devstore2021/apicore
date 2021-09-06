<?php

 
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\UserController;


// user controller routes


Route::post("register", [UserController::class, "register"]);

 Route::post("login", [UserController::class, "login"]);
 
 //Route::post("showuser", [UserController::class, "showuser"]);
 
// sanctum auth middleware routes

Route::middleware('auth:api')->group(function() {

    Route::get("user", [UserController::class, "user"]);
    Route::get("showuser", [UserController::class, "showuser"]);
  

});
