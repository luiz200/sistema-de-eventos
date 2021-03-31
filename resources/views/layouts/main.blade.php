<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="/css/styles.css">
    <title>@yield('title')</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="collapse navbar-collapse" id="navbar">
            <a href="/" class="navbar-brand">Eventos</a>
        </div>
        <ul class="navbar-nav">
            <li class="navbar-item">
                <a href="/" class="nav-link">Eventos</a>
            </li>
            <li class="navbar-item">
                <a href="/events/create" class="nav-link">Criar Eventos</a>
            </li>
            @auth
            <li class="navbar-item">
                <a href="/dashboard" class="nav-link">Meus eventos</a>
            </li>
            <li class="navbar-item">
                <form action="/logout" method="POST">
                    @csrf
                    <a href="/logout" class="nav-link" onclick="event.preventDefault();
                                this.closest('form').submit();"
                    >                                
                        Sair
                    </a>
                </form>
            </li>
            @endauth
            @guest
            <li class="navbar-item">
                <a href="/login" class="nav-link">Entrar</a>
            </li>
            <li class="navbar-item">
                <a href="/register" class="nav-link">Cadastrar</a>
            </li>
            @endguest
        </ul>
    </nav>
</header>
<main>
    <div class="container-fluid">
        <div class="row">
            @if(session('msg'))
                <p class="msg">{{ session('msg') }}</p>
            @endif
            @yield('content')
        </div>
    </div>
</main>
<footer>
    <p>Eventos &copy; 2021</p>
    </footer>
</body>
<script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
</html>