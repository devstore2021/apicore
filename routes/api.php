<?php

 
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Api\DanhmucController as DanhmucController;


// user controller routes


 Route::post("register", [UserController::class, "register"]);

 Route::post("login", [UserController::class, "login"]);
 
 

Route::middleware('auth:api')->group(function() {

    Route::get("user", [UserController::class, "user"]);
    Route::get("showuser", [UserController::class, "showuser"]);
    Route::resource('danhmuc', DanhmucController::class);
  

});
