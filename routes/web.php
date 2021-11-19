<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\KaspinController;

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





Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/', [KaspinController::class, 'home']);
Route::get('/home', [KaspinController::class, 'home'])->name('home');
Route::get('/add', [KaspinController::class, 'add'])->name('add');
Route::post('/store', [KaspinController::class, 'store']);
Route::get('/edit/{id}', [KaspinController::class, 'edit'])->name('edit');
Route::put('/update/{id}', [KaspinController::class, 'update'])->name('update');
Route::get('/delete/{id}', [KaspinController::class, 'delete'])->name('delete');
Route::get('/log', [KaspinController::class, 'log'])->name('log');
