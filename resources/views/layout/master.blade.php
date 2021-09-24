<!doctype html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    @yield('css')

</head>
<body class="bg-light">

<div class="container">
    <div class="pt-5 text-center">
        <img class="d-block mx-auto mb-2"
             src="https://images.vexels.com/media/users/3/235658/isolated/preview/ab14b963565a4c5ab27169d90c341994-silueta-animales-21.png"
             alt="" width="72" height="57">
        <h2>Quatro Patas</h2>
        <p class="lead">Gerencie seus pets.</p>
    </div>
    <header class="d-flex justify-content-center py-3">
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="{{route('canino.index')}}" class="nav-link {{ preg_match('/canino/i', Route::current()->getName()) ? 'active' : '' }}" aria-current="page">Caninos</a></li>
            <li class="nav-item"><a href="{{route('raca.index') }}" class="nav-link {{ preg_match('/raca/i', Route::current()->getName()) ? 'active' : '' }}">Raças</a></li>
        </ul>
    </header>
    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
@yield('js')
</body>
</html>
