<?php
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('app');
})->name('home');

Route::any('{slug}',function (){
    return view('app');
});
