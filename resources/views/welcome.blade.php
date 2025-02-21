<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livewire CRUD </title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/product-style.css') }}"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    @livewireStyles
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>


    <nav class="navbar navbar-expand-sm bg-light">

        <!-- Links -->
        {{-- <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Link 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link 3</a>
            </li>
        </ul> --}}
        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/home') }}">Home</a>
            </li>
            @if (Route::has('login'))
                @auth
                    {{-- <li class="nav-item">
                        <a href="{{ url('/home') }}" class="nav-link">Home</a>
                    </li> --}}
                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}" role="button">
                            @csrf
                            <a :href="route('logout')" class="nav-link"
                                onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                        </form>
                        {{-- <a href="{{ url('/home') }}" class="nav-link">Home</a> --}}
                    </li>
                @else
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link">Login</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="ml-4 nav-link">Register</a>
                        </li>
                    @endif
                @endauth

            @endif

        </ul>
    </nav>
    {{-- @livewire('users') --}}
    {{-- <livewire:profile /> --}}
    {{-- <livewire:search /> --}}

    @livewire('crud-form')
    @livewireScripts
</body>

</html>
