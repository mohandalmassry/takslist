<?php

use App\Http\Controllers\TaskController;
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

Route::get('front',[TaskController::class,'getAllTask']);
Route::post('store',[TaskController::class,'store']);
Route::post('delete/{id}',[TaskController::class,'delete']);



// Route::get('contact/{id}',[TaskController::class,'show']);
Route::get('app',function() {

    return view ('layout.app');
});

// Route::get('front',function() {

//     return view ('front.index');
// });



