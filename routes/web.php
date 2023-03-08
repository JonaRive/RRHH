<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\CivilStatesController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProcessController;
use App\Http\Controllers\RelationsController;
use App\Models\process;
use GuzzleHttp\Middleware;

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
    return view('auth.login');
});



Route::resource('department', DepartmentController::class)->middleware('auth');
Route::resource('civilstates', CivilStatesController::class)->middleware('auth');
Route::resource('address', AddressController::class)->middleware('auth');
Route::resource('status', StatusController::class)->middleware('auth');
Route::resource('employee', EmployeeController::class)->middleware('auth');
Route::resource('process', ProcessController::class)->middleware('auth');
Route::resource('relations', RelationsController::class)->middleware('auth');

Auth::routes(['register'=>false,'reset'=>false]);
Route::get('/home', [ProcessController::class, 'index'])->name('home');
Route::group(['Middleware' => 'auth'],function() {
   
    Route::get('/home', [ProcessController::class, 'index'])->name('home');
});

