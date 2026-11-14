# Lista de Tarefas (Laravel + MySQL)

Sistema web extremamente simples e didático desenvolvido para trabalho acadêmico.

## 🛠️ Stack Utilizada
- **Backend / Frontend**: Laravel 11 com Blade
- **Banco de Dados**: MySQL
- **Interface**: HTML puro (sem Bootstrap, Tailwind, JS ou bibliotecas externas)

## 📋 Entidade e Banco de Dados
Tabela: `tarefas`
- `id`: Chave primária (auto-incremento)
- `titulo`: Texto (string)
- `descricao`: Texto (string)
- `created_at` / `updated_at`: Timestamps

## 🚀 Como Executar o Projeto

1. Clone o repositório:
```bash
git clone https://github.com/LucasHiratuca/laravel-lista-tarefas.git
cd laravel-lista-tarefas
```

2. Instale as dependências:
```bash
composer install
```

3. Configure o arquivo `.env`:
```bash
cp .env.example .env
php artisan key:generate
```
> Configure o banco `tarefas_db` e o usuário/senha no arquivo `.env`.

4. Execute as migrations:
```bash
php artisan migrate
```

5. Inicie o servidor:
```bash
php artisan serve
```
Acesse no navegador: `http://localhost:8000`

## 🔄 Fluxo da Aplicação (Arquitetura MVC)
O usuário faz uma requisição acessando a URL no navegador; o arquivo `routes/web.php` intercepta essa rota e chama o método correspondente no `TarefaController`. O controller aciona o `Model` para consultar, inserir ou remover registros no banco de dados MySQL e, em seguida, envia os dados retornados para a view Blade (`tarefas.blade.php`), que renderiza o HTML final na tela do usuário.
