<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livewire CRUD </title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/product-style.css') }}"> --}}
    @livewireStyles
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    {{-- @livewire('users') --}}
    {{-- <livewire:profile /> --}}
    {{-- <livewire:search /> --}}

    @livewire('crud-form')
    @livewireScripts
</body>

</html>
