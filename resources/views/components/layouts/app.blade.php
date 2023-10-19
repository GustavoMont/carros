<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    {{-- CSS do Loading --}}
    <link rel="stylesheet" href="{{ asset('css/loading.css') }}">

    {{-- Tailwind --}}
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>

    {{-- Toast --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

    <title>Locadora de Carros</title>
</head>

<body>

    {{-- Menu Lateral --}}
    <x-admin.menu-lateral />

    {{-- Conteúdo Principal --}}
    <main class="ml-auto mb-6 w-[85%]">
        <div class="px-6 pt-6">
            {{ $slot }}
        </div>
    </main>

    {{-- Componente anonimo do Toast --}}
    <x-admin.toastify />

</body>

</html>
