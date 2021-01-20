<?php
use Illuminate\Support\Facades\Route;
Route::get('slider',[\App\Http\Controllers\HomeController::class,'getSlider']);
Route::get('about',[\App\Http\Controllers\HomeController::class,'getAbout']);
Route::get('rooms',[\App\Http\Controllers\HomeController::class,'getRooms']);
Route::get('rooms-all',[\App\Http\Controllers\HomeController::class,'getAllRooms']);
Route::get('room-detail/{id}',[\App\Http\Controllers\HomeController::class,'getRoomDetail']);
Route::get('pictures',[\App\Http\Controllers\HomeController::class,'getPictures']);
Route::get('pictures-all',[\App\Http\Controllers\HomeController::class,'getAllPictures']);
Route::get('comments',[\App\Http\Controllers\HomeController::class,'getComments']);
Route::get('contact',[\App\Http\Controllers\HomeController::class,'getContact']);
Route::post('message',[\App\Http\Controllers\HomeController::class,'sendMessage']);
