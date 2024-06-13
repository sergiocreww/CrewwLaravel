<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DevolucionController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\prestamoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AuthController;


Route::view('/','welcome')->name('inicio');
Route::post('/usuarioPost',[UsuarioController::class,'store'])->name('usuariof');
Route::middleware(['auth'])->group(function () {
Route::get('/devolucion',[DevolucionController::class, 'index'])->name('devolucion');
Route::get('/prestamo',[prestamoController::class, 'index'])->name('prestamo');
Route::get('/equipo',[EquipoController::class, 'index'])->name('equipo');
Route::view('/nosotros','nosotros')->name('nosotros');


Route::post('/equipoPost',[EquipoController::class,'store'])->name('equipof');


Route::post('/prestamoPost',[prestamoController::class,'store'])->name('salidaf');
Route::post('/Devolucionpost',[DevolucionController::class,'store'])->name('devolucionf');


Route::post('/equipoUp',[EquipoController::class,'update'])->name('equiff');

Route::post('/Devolucion',[DevolucionController::class,'update'])->name('devolucionff');


Route::post('/equipo',[EquipoController::class,'destroy'])->name('equipofff');

Route::post('/prestamo',[prestamoController::class,'destroy'])->name('salidafff');
Route::post('/Devolucion',[DevolucionController::class,'destroy'])->name('devolucionfff');


    // Rutas protegidas por el middleware 'auth'

});


Route::post('/login', [AuthController::class,'login'])->name('login');
Route::post('/logout', [AuthController::class,'logout'])->name('logout');

