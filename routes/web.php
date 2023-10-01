<?php

use App\Http\Controllers\genshinReviewController;
use App\Http\Controllers\kunciController;
use App\Http\Controllers\loginController;
use Illuminate\Support\Facades\Route;

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
    return redirect('waiting_list');
});



Route::get('who-are-you', [kunciController::class, 'login'])->name('login');
Route::post('kunci_proses', [kunciController::class, 'kunci_proses'])->name('login.proses');

Route::resource('waiting_list', genshinReviewController::class);

Route::get('list', [genshinReviewController::class, 'tampil_list'])->name('list');
// Route::middleware(['auth:kunci'])->group(function () {
// });