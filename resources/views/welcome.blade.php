<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Share Tutorial </title>
    @livewireStyles
    <style>
        h5 {
            color: orange;
            background-color: rgb(150, 120, 178);
        }
    </style>
</head>

<body>
    @livewire('users')
    {{-- <livewire:profile /> --}}
    {{-- <livewire:search /> --}}
    @livewireScripts
</body>

</html>
