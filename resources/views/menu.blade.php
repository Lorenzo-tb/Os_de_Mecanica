<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="stylesheet" href="{{ asset('css/menuStyle.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="antialiased">
        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container-fluid">
                <div class="container">
                    <a class="navbar-brand" href="/">
                        <img src="{{ asset('images/logo.png') }}" alt="Bootstrap" width="50" height="50">
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse me-5" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 me-5">
                        <li class="nav-item dropdown me-5">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Cadastrar
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/cadastroFuncionarios">Funcionários</a></li>
                                <li><a class="dropdown-item" href="/cadastroEquipes">Equipe</a></li>
                                <li><a class="dropdown-item" href="/cadastroPecas">Peça</a></li>
                                <li><a class="dropdown-item" href="/cadastroClientes">Cliente</a></li>
                                <li><a class="dropdown-item" href="/cadastroCarros">Carro</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown me-5">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Serviços
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/servicos">Lista</a></li>
                                <li><a class="dropdown-item" href="/cadastroServicos">Novo Serviço</a></li>

                            </ul>
                        </li>
                        <li class="nav-item dropdown me-5">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Listas
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/funcionarios">Funcionçários</a></li>
                                <li><a class="dropdown-item" href="/equipes">Equipes</a></li>
                                <li><a class="dropdown-item" href="/clientes">Clientes</a></li>
                                <li><a class="dropdown-item" href="/pecas">Peças</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div>
            <div class="row mt-5">
                <div class="col-4"></div>
                <div class="col-4">
                    <a href="/servicos" class="text-decoration-none text-white">
                        <button type="button" class="btn btn-dark border border-white meu-botao">Serviços</button>
                    </a>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-4"></div>
                <div class="col-4">
                    <a href="/pecas" class="text-decoration-none text-white">
                        <button type="button" class="btn btn-dark border border-white meu-botao">Peças</button>
                    </a>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-4"></div>
                <div class="col-4">
                    <a href="/funcionarios" class="text-decoration-none text-white">
                        <button type="button" class="btn btn-dark border border-white meu-botao">Funcionários</button>
                    </a>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-4"></div>
                <div class="col-4">
                    <a href="/equipes" class="text-decoration-none text-white">
                        <button type="button" class="btn btn-dark border border-white meu-botao">Equipes</button>
                    </a>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-4"></div>
                <div class="col-4">
                    <a href="/clientes" class="text-decoration-none text-white">
                        <button type="button" class="btn btn-dark border border-white meu-botao">Clientes</button>
                    </a>
                </div>
            </div>
        </div>
        
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</html>
