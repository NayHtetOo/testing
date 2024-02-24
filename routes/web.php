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
// excel export testing on server
Route::get('/', [ExportExcelController::class,'welcome'])->name('welcome');
Route::get('/export-users', [ExportExcelController::class,'export'])->name('export-users');

// web socket testing
Route::get('/playground',function(){
    event(new \App\Events\ChatMessageEvent('hi'));
    return null;
});
Route::get('/ws',function(){
    return view('web-socket');
});
Route::post('/chat-message',function(\Illuminate\Http\Request $request){
    event(new \App\Events\ChatMessageEvent($request->message));
    return null;
});
