<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashbordController;
use App\Http\Controllers\landingController;
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

Route::get('/hello', [dashbordController::class, 'hello'])->name('alam');

// Route::get('/dashboard', function(){
//     return view('dashboard');
// });

Route::get('/dashboard', [dashbordController::class, 'index'])->name('dashboard');

Route::get('/landing', [landingController::class, 'index'])->name('landing');