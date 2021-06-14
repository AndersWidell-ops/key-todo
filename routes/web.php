<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;

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


Route::get('/', function() {
    return view('welcome');
});

Route::get('/task',[TasksController::class, 'index']);

Route::get('/task/create',[TasksController::class, 'create']);

Route::post('/task',[TasksController::class, 'store']);

Route::get('/task/delete/{id}',[TasksController::class, 'delete']);

