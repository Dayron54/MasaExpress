<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <title>Masa Express</title>
</head>
<body>
<body class="d-flex h-100 text-center bg-dark text-white">
    <div class="d-flex h-100 w-100 p-3 mx-auto flex-column main-container">
        <header class="mb-auto">
            <img src="{{ asset('images/logo-sena.png') }}" alt="Logo SENA" class="logo">
        </header>
        <main class="px-3">
            <h1 class="text-center">Proyecto formativo</h1>
            <p class="fs-4 fw-lighter my-5">Masa Express</p>
            <a href="{{ route('productos.index')}}" class="btn btn-light btn-lg w-100">Ingresar</a>
        </main>
        <footer class="mt-auto">
            .:: ADSI 2472155 ::. <br>
            Angy, Dayron, Sharon, Richard.
        </footer>
    </div>

    <script src="{{ asset('css/bootstrap/js/bootstrap.bundle.js') }}"></script>
</body>
</html>