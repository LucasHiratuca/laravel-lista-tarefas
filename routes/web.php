<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarefaController;

// Rota GET para exibir a página com o formulário e a listagem
Route::get('/', [TarefaController::class, 'index'])->name('tarefas.index');

// Rota POST para receber o formulário e salvar a tarefa
Route::post('/tarefas', [TarefaController::class, 'store'])->name('tarefas.store');

// Rota DELETE para remover uma tarefa específica pelo ID
Route::delete('/tarefas/{id}', [TarefaController::class, 'destroy'])->name('tarefas.destroy');
