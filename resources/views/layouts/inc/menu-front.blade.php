<div class="offset-0 offset-lg-1 col-11 col-lg-3 mb-2 mb-lg-0">
    <a class="logo navbar-brand" href="{{ route('home') }}">
        <img src="{{ asset('images/eKo-logo.svg') }}" alt="{{ config('app.name', 'Laravel') }}" class="img-fluid" style="width:110px;">
    </a>
</div>
<div class="bars col-1 d-block d-lg-none">
    <a href="#"><i class="fa fa-2x fa-bars"></i></a>
</div>
<ul id="nav-menu" class="nav-main col-lg-7 mb-0 pt-2">
    <li class="nav-main-item">
        <a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="{{route('home')}}">
            <span class="nav-main-link-name">@lang('commun.home')</span>
        </a>
    </li>
    <li class="nav-main-item">
        <a class="{{ request()->routeIs('front.features') ? 'active' : '' }}" href="{{route('front.features')}}">
            <span class="nav-main-link-name">Fonctionnalités</span>
        </a>
    </li>
    <li class="nav-main-item">
        <a class="{{ request()->routeIs('front.prices') ? 'active' : '' }}" href="{{route('front.prices')}}">
            <span class="nav-main-link-name">Tarifs</span>
        </a>
    </li>
    <li class="nav-main-item">
        <a class="{{ request()->routeIs('front.blog') ? 'active' : '' }}" href="{{route('front.blog')}}">
            <span class="nav-main-link-name">Blog</span>
        </a>
    </li>
    <li class="nav-main-item">
        <a class="{{ request()->routeIs('front.contact') ? 'active' : '' }}" href="{{route('front.contact')}}">
            <span class="nav-main-link-name">Contact</span>
        </a>
    </li>
    <li class="nav-main-item">
        <a class="" href="https://eko.conselio.com/" target="_blank">
            <span class="nav-main-link-name">Connexion</span>
        </a>
    </li>
    <li class="nav-main-item">
        <a class="text-uppercase bttn btn-color2 darker-bg{{ request()->routeIs('front.test') ? ' active' : '' }}" href="{{route('front.test')}}">
            <span class="nav-main-link-name">Testez gratuitement</span>
        </a>
    </li>
</ul>


@push('js_after')
    <script type="text/javascript">
        $(document).ready(function() {
            $('.bars a').on('click', function(e){
                e.preventDefault();
                $(this).toggleClass('open');
                $('#nav-menu').toggleClass('open');
            });
        });
    </script>
@endpush