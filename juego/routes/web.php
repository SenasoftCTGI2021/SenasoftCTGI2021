<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/sala/privada', function(){
    return view('sala/privada/index');
})->name('privada');

Route::get('/sala/crear', function(){
    return view('sala/crear/index');
})->name('crear');

Route::get('/sala', function () {
    return view('sala');
});


Route::get('/sala/sala', function () {
    return view('sala/sala/index');
});
