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

    // 2. CADASTRAR: Recebe os dados do formulário, valida e salva no banco
    public function store(Request $request)
    {
        $dados = $request->validate([
            'titulo' => ['required', 'string', 'max:255'],
            'descricao' => ['required', 'string', 'max:255'],
        ], [
            'titulo.required' => 'O título é obrigatório.',
            'titulo.max' => 'O título deve ter no máximo 255 caracteres.',
            'descricao.required' => 'A descrição é obrigatória.',
            'descricao.max' => 'A descrição deve ter no máximo 255 caracteres.',
        ]);

        Tarefa::create($dados); // INSERT INTO tarefas
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
