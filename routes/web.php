<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientsController;

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
    return view('blank');   //ici c'est notre layout
});


Route::resource('clients', ClientsController::class);


Route::get('users/{id}', [UserController::class, 'index'])->name('user.index');


Route::get('/dash', function () {
    return view('dashboard');
});

