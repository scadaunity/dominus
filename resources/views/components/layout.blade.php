<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/mascaras.js') }}"></script>
    <title>Escola - {{ $title }}</title>
</head>

<body>

    <header class="navbar navbar-light sticky-top bg-light flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="/">
            <img src="{{ asset('icons/logo.png') }}" alt="Home">
        </a>
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="btn btn-outline-primary btn-sm m-3" href="{{ url('/') }}">Sair</a>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <x-sidebar />
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 bg-light">
                <div class="col col-lg-11 mt-5">
                    <h1 class="text-primary mb-3">{{ $title }}</h1>
                    {{ $slot }}
                </div>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
