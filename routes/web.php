<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
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

Route::controller(UserController::class)->group(function () {
    Route::get('register', 'register');
    Route::get('login', 'login')->name('login')->middleware('guest');
    Route::post('login/process', 'process');
    Route::post('logout', 'logout');
    Route::post('store', 'store');
});


// Route::get('/', [StudentController::class, 'index'])->middleware('auth');

Route::controller(StudentController::class)->group(function () {
    Route::get('/', 'index')->middleware('auth');
    Route::get('/add/student', 'create')->name('add student'); //Addstudent
    Route::post('/add/student', 'store');
    Route::get('/student/{id}', 'show');
    Route::put('/student/{student}', 'update');
    Route::delete('/student/{student}', 'destroy');
});
