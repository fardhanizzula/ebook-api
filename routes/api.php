<?php

use App\Http\Controllers\BookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HeloController; 
use App\Http\Controllers\SiswaContoller; 


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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
// return $request->user();
// });

route::get('halo', function(){
    $data = ["me"=> "ganteng"];

    return $data;
}) ;


route::resource('helocontroller', HeloController::class) ;
route::resource('siswa', SiswaContoller::class) ;
route::resource('books', BookController::class) ;