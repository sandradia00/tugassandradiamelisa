<?php


use App\Http\Controllers\JurnalController;
use App\Http\Controllers\KelompokController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PeriodeController;
use App\Http\Controllers\PerkiraanController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('perkiraan', PerkiraanController::class);
Route::resource('pegawai', PegawaiController::class);
Route::resource('user', UserController::class);
Route::resource('jurnal', JurnalController::class);
Route::resource('periode', PeriodeController::class);
Route::resource('kelompok', KelompokController::class);