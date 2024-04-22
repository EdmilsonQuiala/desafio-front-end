<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0" style="background: #D9D9D9">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <h3 class="d-flex align-items-center pb-3 pt-2 mb-md-0 me-md-auto text-decoration-none text-dark">
                        Menu
                    </h3>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                        id="menu">
                        <li class="nav-item">
                            <a href="/" class="nav-link align-middle px-0 text-dark">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Início</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/registar-salas" class="nav-link align-middle px-0 text-dark">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Registar
                                    Salas</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/" class="nav-link align-middle px-0 text-dark">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Escola</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/" class="nav-link align-middle px-0 text-dark">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Cursos</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/" class="nav-link align-middle px-0 text-dark">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Docentes</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/" class="nav-link align-middle px-0 text-dark">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Alunos</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/" class="nav-link align-middle px-0 text-dark">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Relatórios</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/" class="nav-link align-middle px-0 text-dark">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Perfis</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/" class="nav-link align-middle px-0 text-dark">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Utilizadores</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/" class="nav-link align-middle px-0 text-dark">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Configurações</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/" class="nav-link align-middle px-0 text-dark">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Anos Lectivos</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/" class="nav-link align-middle px-0 text-dark">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Atalhos</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0 text-dark align-middle">
                                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Sistema de
                                    Informação para ensino Técnico Profissional</span>
                            </a>
                        </li>
                    </ul>
                    <hr>
                    <div class="dropdown pb-4">
                        <a href="#"
                            class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                            id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://avatars.githubusercontent.com/u/68898835?v=4" alt="hugenerd"
                                width="30" height="30" class="rounded-circle">
                            <span class="d-none d-sm-inline mx-1 text-dark">Utilizador</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                            <li><a class="dropdown-item" href="#">Perfil</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Terminar Sessão</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            @yield('content')

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
