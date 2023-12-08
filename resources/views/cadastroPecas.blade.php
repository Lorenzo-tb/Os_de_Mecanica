
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="antialiased">
        <nav class="navbar navbar-expand-lg bg-dark meu-nav sticky-top">
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
        <div class="bg-secondary mb-5 row">
            <div class="col-1"></div>
            <div class="col-4 mt-2">
                <h1 class="text-white titulo ms-3">Registro de Peças</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-1"></div>
            <div class="col-10 rounded bg-white">
                <form action="{{ route('pecas.insert') }}" method="post">
                    @csrf <!-- Adiciona o token CSRF para proteção contra CSRF attacks -->
                    <!-- Campos do formulário -->
                    <div class="row mt-5">
                        <div class="col-2"></div>
                        <div class="col-8">
                            <div class="input-group input-group-lg">
                                <span class="input-group-text" id="inputGroup-sizing-lg">Nome</span>
                                <input type="text" id="nome" name="nome" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" required>
                            </div>
                        </div>
                    </div>
                    

                    <div class="row mt-4">
                        <div class="col-2"></div>
                        <div class="col-8">
                            <div class="input-group input-group-lg">
                                <span class="input-group-text">$</span>
                                <input name="preco" id="preco" type="number" class="form-control" aria-label="Amount (to the nearest dollar)" required>
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>
                    </div>
                    

                    <div class="row mt-4">
                        <div class="col-2"></div>
                        <div class="col-8">
                            <div class="input-group input-group-lg">
                                <span class="input-group-text" id="inputGroup-sizing-lg">Quantidade</span>
                                <input type="number" id="quantidade" name="quantidade" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" required>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5 mb-5">
                        <div class="col-7"></div>
                        <div class="col-2">
                            
                                <a class="text-decoration-none" href="/pecas">
                                    <button type="button" class="btn btn-outline-danger">CANCELAR</button>
                                </a>
                            
                        </div>
                        <div class="col-2">
                            <button class="btn btn-outline-success" type="submit">SALVAR</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</html>
