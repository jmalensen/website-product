<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="Conselio">
    <meta name="description" content="@yield('description')">

    <meta name="title" content="@yield('pagetitle') - eKoCRM - Outil de gestion complet et sécurisé" />

    <title>@yield('pagetitle')eKoCRM - Outil de gestion complet et sécurisé</title>

    <link rel="canonical" href="{{ route('home') }}" />
    <link rel='shortlink' href="{{ route('home') }}" />
    <meta property="og:locale" content="fr_FR" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('pagetitle') - ekoCRM" />
    <meta property="og:description" content="@yield('description')" />
    <meta property="og:url" content="{{ route('home') }}" />
    <meta property="og:site_name" content="eKoCRM - Outil de gestion complet et sécurisé" />

    @routes {{--Ziggy routes for js--}}
<!-- Fonts and Styles -->
    @stack('css_before')
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,500;0,700;1,500;1,700&family=Libre+Franklin:ital,wght@0,100;0,300;0,400;0,600;0,700;1,300;1,400&family=Montserrat:ital,wght@0,600;0,700;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/dashmix.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('images/eKo-favicon.png') }}">

    <!-- You can include a specific file from public/css/themes/ folder to alter the default color theme of the template. eg: -->
{{--<link rel="stylesheet" href="{{ mix('css/themes/xmodern.css') }}">--}}
@stack('css_after')

@include('layouts.inc.front-cookie-consent')

<!-- Scripts -->
    <script>window.Laravel = {!! json_encode(['csrfToken' => csrf_token(),]) !!};</script>
</head>
<body>
<div id="page-container-front" class="container-fluid p-0 m-0">
    <!-- Header -->
    <header id="page-header" class="row">

        <!-- Menu -->
        <nav id="menu-front" class="col-12 push pt-4 pb-3 fixed-top" aria-label="Main Navigation">
            <div class="container-fluid">
                <div class="row">
                    @include('layouts.inc.menu-front')
                </div>
            </div>
        </nav>
        <!-- END Menu -->

    </header>
    <!-- END Header -->

    <!-- Main Container -->
    <main id="main-container" class="container-fluid">
        @yield('content')
    </main>
    <!-- END Main Container -->

    <!-- Footer -->
    <footer id="footer" class="content pt-5 pt-md-8 pb-5 text-center text-lg-left">
        <div class="row font-size-sm">
            <div class="footer-logo offset-0 offset-lg-2 col-12 col-lg-2 mb-5 mb-lg-0">
                <a class="logo navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('images/logo-footer.svg') }}" alt="{{ config('app.name', 'Laravel') }}" class="img-fluid" style="width:110px;">
                </a>
            </div>
            <div class="col-12 col-lg-5 d-block d-lg-flex justify-content-center">
                <div class="mr-0 mr-lg-6">
                    <ul class="d-block d-lg-flex justify-content-begin p-0 mb-3 mb-lg-0 list-decoration text-smallmont text-uppercase">
                        <li class="mr-0 mr-lg-5 mb-3 mb-lg-0">
                            <a class="{{ request()->routeIs('home') ? ' active' : '' }}" href="{{ route('home') }}">Accueil</a>
                        </li>
                        <li class="mr-0 mr-lg-5 mb-3 mb-lg-0">
                            <a class="{{ request()->routeIs('front.features') ? ' active' : '' }}" href="{{ route('front.features') }}">Fonctionnalités</a>
                        </li>
                        <li class="mr-0 mr-lg-5 mb-3 mb-lg-0">
                            <a class="{{ request()->routeIs('front.prices') ? ' active' : '' }}" href="{{ route('front.prices') }}">Tarifs</a>
                        </li>
                        <li class="mr-0 mr-lg-5">
                            <a class="{{ request()->routeIs('front.blog') ? ' active' : '' }}" href="{{ route('front.blog') }}">Blog</a>
                        </li>
                    </ul>
                    <p class="font-weight-light">
                        <strong>&copy; {{ config('app.name', 'Laravel') }}</strong>
                        - Tous droits réservés
                    </p>
                </div>
                <ul class="d-flex social-links justify-content-center p-0 list-decoration text-uppercase">
                    <li class="text-smallmont font-weight-normal mr-4" style="width:100px;">Suivez-nous</li>
                    <li class="mr-5"><a class="" href="#"><i class="fab fa-2x fa-facebook-f"></i></a></li>
                    <li class="mr-5"><a class="" href="#"><i class="fab fa-2x fa-twitter"></i></a></li>
                    <li class="mr-5"><a class="" href="#"><i class="fab fa-2x fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- END Footer -->

    @stack('js_before')

<!-- Dashmix Core JS -->
    <script src="{{ mix('js/dashmix.app.js') }}"></script>
    {{--        <script src="{{ asset('js/plugins.js') }}"></script>--}}


    @include('flash')

    <script src="{{ mix('js/default.js') }}"></script>
    <!-- Laravel Scaffolding JS -->
    <script src="{{ mix('js/laravel.app.js') }}"></script>

@stack('script')

@stack('js_after')


</div>
</body>
</html>
