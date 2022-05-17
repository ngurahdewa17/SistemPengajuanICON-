<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pengajuanController;

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

//DASHBOARD
Route::get('/dashboard',[pengajuanController::class,'dashboard']);


//MANAGEMEN-PENGAJUAN
Route::get('/tampil_pengajuan',[pengajuanController::class, 'tampilPengajuan']);
Route::get('/form_pengajuan',[pengajuanController::class, 'form_pengajuan']);
Route::post('/store_pengajuan',[pengajuanController::class, 'store_pengajuan']);

//PRINT TEMPLATE
Route::get('/print_template',[pengajuanController::class,'printTemplate']);
