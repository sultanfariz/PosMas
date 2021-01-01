<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIController;
use App\Http\Controllers\KtpBaruController;
use App\Http\Livewire\Permohonans;
use App\Http\Livewire\Ktp_Baru;
use App\Models\KtpBaru;

// use App\Models\Permohonan as Permohonan;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Route::get('/register', [APIController::class, 'getApi']);
Route::middleware(['auth:sanctum', 'verified'])->get('/get/{nik}', [APIController::class, 'getApi']);
Route::middleware(['auth:sanctum', 'verified'])->get('/history', Permohonans::class)->name('history');
Route::middleware(['auth:sanctum', 'verified'])->get('/ktp-baru', Ktp_Baru::class)->name('ktp-baru');
Route::middleware(['auth:sanctum', 'verified'])->post('/create-ktp-baru', [KtpBaruController::class, 'createKtpBaru'])->name('create-ktp-baru');
// Route::middleware(['auth:sanctum', 'verified'])->post('/create-ktp-baru', 'KtpBaruController@createKtpBaru')->name('create-ktp-baru');
// Route::get('/ktp', [ktp::class, 'getApi']);
