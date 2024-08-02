<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\manpowerController;
use App\Http\Controllers\qc_checkController;

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

Route::resource('mp',manpowerController::class); 
Route::resource('cs',qc_checkController::class); 