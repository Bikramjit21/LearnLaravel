<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users',function(){
    return view('users']);
});

Route::get('/users/{id}',function($id){
    echo $id;
    return view('users',['id'=>$id]);
});

Route::view('about','about');
Route::view('contact','/contact');

Route::get('user',[UsersController::class,'showData']);
Route::get('user/{id}',[UsersController::class,'show']);

Route::get('use',[UsersController::class,'load']);