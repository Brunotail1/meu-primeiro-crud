<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

Route::get('/', [ClienteController::class, 'create'])->name('clientes.create');

Route::get('/consulta-cep/{cep}', [ClienteController::class, 'consultaCep']);

Route::post('/cadastrar', [ClienteController::class, 'store'])->name('clientes.store');

Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index');

Route::delete('clientes/{id}', [ClienteController::class, 'excluir'])->name('clientes.excluir');

Route::get('/clientes/{id}/editar', [ClienteController::class, 'edit'])->name('clientes.edit');

Route::put('/clientes/{id}', [ClienteController::class, 'update'])->name('clientes.update');
