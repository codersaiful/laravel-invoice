<?php

use App\Http\Controllers\InvoiceController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('invoice',[InvoiceController::class,'index'])->name('invoice');
Route::get('create-invoice',[InvoiceController::class,'create'])->name('invoice.create');
Route::post('store-invoice',[InvoiceController::class,'store'])->name('invoice.store');
Route::get('invoice/{id}',[InvoiceController::class,'show'])->name('invoice.show');