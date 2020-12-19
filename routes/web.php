<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/dashboard', [PageController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');

Route::get('/group/{join_code}', [PageController::class, 'group'])->middleware(['auth'])->name('group');

Route::get('/join/{join_code}', [PageController::class, 'joinGroup']);
Route::get('/join/{join_code}/confirm', [PageController::class, 'confirmJoinGroup']);

require __DIR__.'/auth.php';
