<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\searchController;
use App\Http\Controllers\carbonController;

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
    return view('home');
});
Route::get('/about', function () {
    return view('students/about');
});

Route::resource('/student', StudentsController::class);

Route::get("lastweek",[carbonController::class,'lastweek']);
Route::get("lastmonth",[carbonController::class,'lastmonth']);

Route::get("search",[searchController::class,'search']);

