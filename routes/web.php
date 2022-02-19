<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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

Route::get('/',[HomeController::class, 'index']);


Route::get('/home',[HomeController::class, 'redirect']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/add_doctor_view',[AdminController::class, 'addview']);

// Route::post('/upload_doctor',[AdminController::class, 'upload'])->name('upload_doctor');
// Route::get('/upload_doctor',[AdminController::class, 'upload'])->name('upload_doctor');
