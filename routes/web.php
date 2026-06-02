<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SheetController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {

    Route::get('/',
        [AuthController::class,'index'])
        ->name('login');

    Route::get('/entrar',
        [AuthController::class,'index'])
        ->name('login');

    Route::post('/entrar',
        [AuthController::class,'login'])
        ->name('auth');

    Route::get('/cadastro',
        [UserController::class,'create'])
        ->name('create-account');

    Route::post('/cadastro',
        [UserController::class,'store'])
        ->name('insert-account');

});

Route::middleware('auth')->group(function () {

    Route::get('/perfil',
        [UserController::class, 'edit'])
        ->name('profile');

    Route::put('/perfil',
        [UserController::class, 'update'])
        ->name('profile.update');

    Route::get('/regras', function () {
        return view('rules');
    })->name('rules');

    Route::post('/sair',
        [AuthController::class, 'logout'])
        ->name('logout');

    Route::get('/inicio',
        [SheetController::class,'index'])
        ->name('home');

    Route::get('/fichas',
        [SheetController::class, 'sheets'])
        ->name('sheets');

    Route::get('/fichas/{sheet}',
        [SheetController::class, 'sheets'])
        ->name('sheet.show');

    Route::get('/ficha/nova',
        [SheetController::class,'create'])
        ->name('create-sheet');

    Route::post('/ficha/nova',
        [SheetController::class,'store'])
        ->name('insert-sheet');

    Route::get('/ficha/{sheet}/editar',
        [SheetController::class,'edit'])
        ->name('edit-sheet');

    Route::get('/ficha/{sheet}/editar-caracteristicas',
        [SheetController::class,'editFeatures'])
        ->name('edit-sheet.features');

    Route::put('/ficha/{sheet}',
        [SheetController::class,'update'])
        ->name('update-sheet');

    Route::delete('/ficha/{sheet}',
        [SheetController::class,'destroy'])
        ->name('delete-sheet');

});