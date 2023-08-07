<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PariwisataController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SaranController;

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
    return view('welcome',[
        "title" => "Home"
    ]);
});
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->name('register');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/', [SaranController::class, 'store']);

Route::get('/dashboard/edit', [ProfileController::class, 'index'])->middleware('auth');
Route::post('/dashboard/edit', [ProfileController::class, 'store']);

Route::get('/pariwisata/submit', [PariwisataController::class, 'submit'])->middleware('auth');
Route::get('/pariwisata', [PariwisataController::class, 'index'])->middleware('auth');
Route::post('/pariwisata/submit', [PariwisataController::class, 'store']);

Route::get('/dashboard/edit', [PariwisataController::class, 'index'])->middleware('auth');
Route::post('/pariwisata/edit', [PariwisataController::class, 'update']);
