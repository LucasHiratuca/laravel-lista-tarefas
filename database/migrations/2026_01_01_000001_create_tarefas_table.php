<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // Método que cria a tabela no banco de dados
    public function up(): void
    {
        Schema::create('tarefas', function (Blueprint $table) {
            $table->id(); // Cria a chave primária auto-incremento (id)
            $table->string('titulo'); // Coluna de texto curto para o título
            $table->string('descricao'); // Coluna de texto para a descrição
            $table->timestamps(); // Cria as colunas created_at e updated_at
        });
    }

    // Método que desfaz a migration (caso precise apagar a tabela)
    public function down(): void
    {
        Schema::dropIfExists('tarefas');
    }
};
