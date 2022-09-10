<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body{ font-family: 'Nunito', sans-serif; }
    </style>

    <title>@yield('title')</title>
</head>
<body class="bg-light pb-2">
    <div class="bg-dark shadow-sm p-3 px-2 mb-3">
        <a class="
            btn
            btn-dark
            rounded-0
            @if (request()->route()->getName() == 'welcome') active @endif"
            href="/"
        >
            Início
        </a>
        <a class="
            btn
            btn-dark
            rounded-0
            @if (in_array(request()->route()->getName(), ['customers', 'customers.any'])) active @endif"
            href="/clientes"
        >
            Lista de Clientes
        </a>
    </div>

    @yield('content')

    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
