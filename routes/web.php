<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TurmaController;
use App\Http\Controllers\AlunoController;

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

// Route::get('/', function () {
//     return view('index');
// });

Route::prefix('ESC')->group(function(){

    Route::get('/TUR', [TurmaController::class, 'index'])->name('turma');
    Route::get('/ALU', [AlunoController::class, 'index'])->name('busAluno'); 
});