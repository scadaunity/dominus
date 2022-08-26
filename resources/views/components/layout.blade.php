<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dataTables.bootstrap5.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/mascaras.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <title>Dominus</title>
</head>

<body>

    <header class="navbar navbar-light sticky-top bg-light flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="/">
            <img src="{{ asset('icons/logo.png') }}" alt="Home" class="rounded">
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

    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script type="text/javascript">
    //DataTable
    $(document).ready(function () {
        $('table.display').DataTable({
            paging: true,   //Exibir paginação
            ordering: true, // Permite ordenar
            info: false, // exibe informação no footer
            lengthChange: false, // exibe o botão a quantidade de registros por pagina
            stateSave: true,
            order: [[0, 'asc']], // ordenar (desc ou asc)
            language: {
                url: 'https://cdn.datatables.net/plug-ins/1.11.5/i18n/pt-BR.json',
            },
        });
    });
    </script>
</body>

</html>
