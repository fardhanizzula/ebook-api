<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthorController;

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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//   return $request->user();
//});

Route::get('halo', function(){
    $data = ["me" => "Ganteng"];

    return $data;
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request){
    return $request->user();
});

//public route
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::resource('testController', testController::class);
Route::resource('siswa', SiswaController::class);  
Route::resource('books', BookController::class);  

//protected routes
Route::middleware('auth:sanctum')->group(function () {
    Route::resource('books', BookController::class)->except('create', 'edit');
    Route::post('/logout', [AuthController::class, 'logout']) ;
    Route::resource('authors', AuthorController::class)->except('create', 'edit');
});