<?php

use App\Http\Controllers\ExportExcelController;
use Illuminate\Database\Query\IndexHint;
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

Route::get('/', [ExportExcelController::class,'welcome'])->name('welcome');
Route::get('/export-users', [ExportExcelController::class,'export'])->name('export-users');
