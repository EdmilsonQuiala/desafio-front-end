<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'home'])->name('home');
Route::get('/registar-salas', [MainController::class, 'showForm'])->name('registar.salas.form'); // Rota para exibir o formulário de registro
Route::post('/registar-salas', [MainController::class, 'registrarSalas'])->name('registar.salas'); // Rota para lidar com a submissão do formulário
Route::post('/escola/atualizar', [MainController::class, 'atualizarSalas'])->name('escola.atualizar');














