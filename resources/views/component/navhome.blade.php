<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/style/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md shadow-sm border-0" style="background-color: #4ABDAC">
            <div class="p-3 w-25 d-flex" >
                <img src="{{ asset('assets/images/logo.png') }}" alt="" class="ps-3" style="width: 70px">
            </div>
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav m-auto">
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item {{ Request::is('home') ? 'active': '' }}">
                                <a class="nav-link respon-nav text-light" aria-current="page" href="{{ route('home') }}">Beranda</a>
                            </li>
                            <li class="nav-item {{ Request::is('tiket') ? 'active': '' }}">
                                <a class="nav-link respon-nav text-light" href="/tiket">Tiket</a>
                            </li>

                            <li class="nav-item {{ Request::is('tentang') ? 'active': '' }}">
                                <a class="nav-link respon-nav text-light" href="/tentang">Tentang</a>
                            </li>
                        </ul>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle rounded-start-pill text-light"
                                    href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false" v-pre>
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
<!-- Footer -->
<footer class="text-center text-lg-start text-light"  style="background-color: #4ABDAC">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
        <!-- Section: Links -->
        <section class="">
            <!-- Copyright -->
            <div class="text-center p-3" >
                <h2 style="color: #fc4a1a; font-weight:bolder">Wisata Alam Curug Bayan</h2>
            </div>
            <!-- Copyright -->
            <!--Grid row-->
            <div class="row">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <p>
                        <img src="{{ asset('assets/images/logo.png') }}" class="w-75" alt="">

                    </p>
                </div>
                <!-- Grid column -->

                <hr class="w-100 clearfix d-md-none" />

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold" style="color: white;">Layanan Wisata</h6>
                    <p>
                        Camping Ground
                    </p>
                    <p>
                        Homestay
                    </p>
                    <p>
                        ARcafe
                    </p>
                    <p>
                        Tangkeban Park
                    </p>

                </div>
                <!-- Grid column -->

                <hr class="w-100 clearfix d-md-none" />

                <!-- Grid column -->
                <hr class="w-100 clearfix d-md-none" />

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold" style="color: white;">Tentang Kami</h6>
                    <p>
                        Sejarah Singkat
                    </p>

                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold" style="color: white;">Kontak Kami</h6>
                    <p>
                        Desa Nyalembeng, <br>
                        Kec. Pulosari, Pemalang,<br>
                        Jawa Tengah, <br>
                        <br>
                        0823 2655 9688
                    </p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold" style="color: white;">Follow us</h6>

                    <!-- Instagram -->
                    <a href="https://www.instagram.com/curug_bayan/"><img width="32" height="32"
                            src="https://img.icons8.com/3d-fluency/32/instagram-new.png" alt="instagram-new" />@curug_bayan</a>

                </div>
            </div>
            <!--Grid row-->
        </section>
        <!-- Section: Links -->
    </div>
    <!-- Grid container -->


</footer>
<!-- Footer -->

</html>
