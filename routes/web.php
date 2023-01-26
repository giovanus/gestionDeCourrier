<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pdfcontroller;
use App\Http\Controllers\Savecontroller;

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
    return view('acc');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('boite', [SaveController::class, 'page_boite'])->name('page_boite');

Route::get('save', [Savecontroller::class, 'page_save'])->name('form_page');
Route::post('save', [Savecontroller::class, 'create'])->name('save_form');

#Route::get('pdf', [PdfController::class, 'index'])->name('pdf');


Route::get('pdf', [Pdfcontroller::class, 'index'])->name('pdf');

Route::get('/log', [Savecontroller::class, 'log'])->name('log1');
