<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get("users",[UserController::class,'show']);
Route::get("edit/{id}",[UserController::class,'showData']);
Route::post("editAction",[UserController::class,'update']);
Route::get('users/{id}', [UserController::class,'showWord']);
Route::get('users/word-export/{id}', [UserController::class,'wordExport']);



require __DIR__.'/auth.php';
