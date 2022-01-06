<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link href="/storage/{{$shareSettings->favicon}}" rel="shortcut icon"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- font-owesome icons link -->
    <link href="{{ asset('frontend/fontawesome/css/all.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <livewire:styles />
    @yield('css')
</head>
<body class="bg-dark">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-dark sticky-top shadow-sm border-bottom">
            <div class="container">
                <a class="navbar-brand text-light" href="{{ route('home') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>

                <a href="{{ url('/') }}" target="_blank" class="btn btn-success align-content-center" style="outline: none; border: none; background-color: #fff; color: #000; margin-left: 50%;">View Application Frontend</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link  text-light" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link  text-light" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle  text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('my-profile.edit') }}">Settings</a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4 bg-dark">
            <div class="container">
                @auth

                <div class="row">
                    <div class="col-md-3">

                        <ul class="list-group">

                            <li class="list-group-item bg-primary border-white">
                                <a href="{{ route('orders.index') }}" class="text-decoration-none text-light">Orders</a>
                            </li>

                            <li class="list-group-item bg-primary border-white">
                                <a href="{{ route('categories.index') }}" class="text-decoration-none text-light">Category</a>
                            </li>

                            <li class="list-group-item bg-primary border-white">
                                <a href="{{ route('subcategories.index') }}" class="text-decoration-none text-light">Sub Category</a>
                            </li>

                            <li class="list-group-item bg-primary border-white">
                                <a href="{{ route('products.index') }}" class="text-decoration-none text-light">Products</a>
                            </li>

                            <li class="list-group-item bg-primary border-white">
                                <a href="{{ route('slides.index') }}" class="text-decoration-none text-light">Slides</a>
                            </li>

                            <li class="list-group-item bg-primary border-white">
                                <a href="{{ route('coupon.index') }}" class="text-decoration-none text-light">Coupons</a>
                            </li>

                            <li class="list-group-item bg-primary border-white">
                                <a href="{{ route('contactMessages') }}" class="text-decoration-none text-light">Messages</a>
                            </li>

                            <li class="list-group-item bg-primary border-white">
                                <a href="{{ route('social-links.index') }}" class="text-decoration-none text-light">Social Links</a>
                            </li>

                            <li class="list-group-item bg-primary border-white">
                                <a href="{{ route('users.index') }}" class="text-decoration-none text-light">Platform Users</a>
                            </li>

                            <li class="list-group-item bg-primary border-white">
                                <a href="{{ route('system-settings.index') }}" class="text-decoration-none text-light">System Settings</a>
                            </li>

                            <li class="list-group-item bg-primary border-white">
                                <a href="{{ route('about.index') }}" class="text-decoration-none text-light">About Info</a>
                            </li>

                            <li class="list-group-item bg-primary border-white">
                                <a href="{{ route('privacy.index') }}" class="text-decoration-none text-light">Privacy Policy</a>
                            </li>

                            <li class="list-group-item bg-primary border-white">
                                <a href="{{ route('terms.index') }}" class="text-decoration-none text-light">Terms & Conditions</a>
                            </li>
                        </ul>

                    </div>
                    <div class="col-md-9">
                        @if(Session::has('success'))
                            <div class="alert alert-primary" role="alert">
                                {{ Session::get('success') }}
                            </div>
                        @endif

                        @if(Session::has('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ Session::get('error') }}
                            </div>
                        @endif
                        
                        @yield('content')
                    </div>
                </div>

                @else
                    @yield('content')
                @endauth
            </div>
        </main>
    </div>
</body>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<livewire:scripts />

@yield('scripts')

</html>
