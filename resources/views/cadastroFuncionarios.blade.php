<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <body class="antialiased">
        <h1>Registro de Funcionarios</h1>
        <form action="{{ route('funcionarios.insert') }}" method="post">
            @csrf <!-- Adiciona o token CSRF para proteção contra CSRF attacks -->
            <!-- Campos do formulário -->
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" name="telefone" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>

            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" name="cpf" required>

            <label for="equipe_id">Equipe:</label>
            <select id="equipe_id" name="equipe_id" required>
                @foreach($equipes as $equipe)
                    <option value="{{ $equipe->id }}">{{ $equipe->nome }}</option>
                @endforeach
            </select>

            <!-- Botão de envio -->
            <button type="submit">Adicionar Funcionário</button>
            <a href="/funcionarios">Ir para Lista de Funcionários</a>
        </form>
    </body>
</html>