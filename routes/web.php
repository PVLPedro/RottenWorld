<?php

use App\Http\Controllers\SheetsController;
use App\Http\Controllers\CaracteristicasController;
use Illuminate\Support\Facades\Route;

Route::get('/rules', function () {
    return view('rules');
})->name('rules');

Route::get('/', [SheetsController::class, 'getDataHome'])->name('home');
Route::get('/new', [SheetsController::class, 'addSheet'])->name('sheets.add');
Route::post('/new', [SheetsController::class, 'confirmAdd'])->name('sheets.addUpdate');

Route::get('/edit/{sheet}', [SheetsController::class, 'editSheet'])->name('sheets.edit');
Route::put('/edit/{sheet}', [SheetsController::class, 'confirmEdit'])->name('sheets.update');

Route::get('/sheets/{sheet?}', [SheetsController::class, 'getDataSheets'])->name('sheets');
Route::delete('/edit/{sheet}', [SheetsController::class, 'deleteSheet'])->name('sheets.delete');

Route::get('/sheets/{sheet}/caracteristicas/edit', [CaracteristicasController::class, 'edit'])->name('caracteristicas.edit');
Route::put('/sheets/{sheet}/caracteristicas', [CaracteristicasController::class, 'update'])->name('caracteristicas.update');