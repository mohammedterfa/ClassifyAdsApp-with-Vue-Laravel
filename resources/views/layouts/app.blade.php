<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-danger shadow-sm">
            <div class="container">
                <a class="navbar-brand"  style="color: white" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" style="color: white" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" style="color: white" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm navbar-hover">

                <a class="navbar-brand" href="#">

                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHover" aria-controls="navbarDD" aria-expanded="false" aria-label="Navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarHover">

                    <ul class="container-fluid navbar-nav">
                        @foreach ($menus as $menuItem)


                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle text-dark" data-bs-toggle="dropdown_remove_dropdown_class_for_clickable_link"
                            aria-haspopup="true"
                            aria-expanded="false" id="menu">
                                {{ $menuItem->name }}
                            </a>
                            <ul class="dropdown-menu">
                                @foreach ($menuItem->subcategories as $subMenuItem )

                                    <li>
                                        <a href="" class="dropdown-item dropdown-toggle">{{ $subMenuItem->name }}</a>
                                        <ul class="dropdown-menu">
                                            @foreach ($subMenuItem->childcategories as $childMenu )

                                                <li>
                                                    <a href="" class="dropdown-item">{{ $childMenu->name }}</a>
                                                </li>

                                            @endforeach
                                        </ul>
                                    </li>
                                @endforeach
                            </ul>

                        </li>
                        @endforeach
                    </ul>
                </div>

        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <style>
        .dropdown:hover>.dropdown-menu{
            display: block;
        }
        @media only screen and(max-width:9991px){
            .navbar-hover .show> .dropdown-toggle::after{
                transform: rotate(-90deg);
            }
        }

        @media only screen and (min-width:492px){
            .navbar-hover .collapse ul li{
                position: relative;
            }

            .navbar-hover .collapse ul li:hover > ul{
                display: block;
            }

            .navbar-hover .collapse ul ul{
                position: absolute;
                top: 100%;
                left: 0;
                min-width: 250px;
                display: none;
            }

            .navbar-hover .collapse ul ul ul{
                position: absolute;
                top: 0;
                left: 100%;
                min-width: 250px;
                display: none;
            }
        }
    </style>

</body>
</html>
