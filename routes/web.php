<?php

use App\Http\Controllers\PegawaiController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/add', [PegawaiController::class, 'add']);
Route::post('/pegawai/store', [PegawaiController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
Route::put('/pegawai/update/{id}', [PegawaiController::class, 'update']);
Route::get('/pegawai/delete/{id}', [PegawaiController::class, 'delete']);