<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    // 1. LISTAR: Busca todas as tarefas no banco e envia para a view
    public function index()
    {
        $tarefas = Tarefa::all(); // SELECT * FROM tarefas
        return view('tarefas', compact('tarefas')); // Retorna a view "tarefas.blade.php"
    }

    // 2. CADASTRAR: Recebe os dados do formulário e salva no banco
    public function store(Request $request)
    {
        Tarefa::create($request->only('titulo', 'descricao')); // INSERT INTO tarefas
        return redirect()->route('tarefas.index'); // Redireciona de volta para a lista
    }

    // 3. EXCLUIR: Localiza a tarefa pelo ID e apaga do banco
    public function destroy($id)
    {
        $tarefa = Tarefa::findOrFail($id); // Procura a tarefa pelo ID
        $tarefa->delete(); // DELETE FROM tarefas WHERE id = $id
        return redirect()->route('tarefas.index'); // Redireciona de volta para a lista
    }
}
