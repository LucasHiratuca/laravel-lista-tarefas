<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Tarefas</title>
</head>
<body>

    <h1>Nova Tarefa</h1>

    <!-- FORMULÁRIO DE CADASTRO (POST) -->
    <form action="{{ route('tarefas.store') }}" method="POST">
        <!-- Token obrigatório do Laravel para proteção contra ataques CSRF -->
        @csrf

        <label for="titulo">Título:</label><br>
        <input type="text" id="titulo" name="titulo" required><br><br>

        <label for="descricao">Descrição:</label><br>
        <input type="text" id="descricao" name="descricao" required><br><br>

        <button type="submit">Cadastrar</button>
    </form>

    <hr>

    <h2>Tarefas Cadastradas</h2>

    <!-- LISTAGEM DAS TAREFAS (GET) -->
    <table border="1" cellpadding="5">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tarefas as $tarefa)
                <tr>
                    <td>{{ $tarefa->id }}</td>
                    <td>{{ $tarefa->titulo }}</td>
                    <td>{{ $tarefa->descricao }}</td>
                    <td>
                        <!-- FORMULÁRIO DE EXCLUSÃO (DELETE) -->
                        <form action="{{ route('tarefas.destroy', $tarefa->id) }}" method="POST">
                            @csrf
                            <!-- Simula o verbo HTTP DELETE, pois o HTML suporta nativamente apenas GET e POST -->
                            @method('DELETE')
                            <button type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
