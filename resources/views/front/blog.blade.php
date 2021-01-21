@extends('layouts.front')
@section('description') eKoCRM est un super outil. @endsection

@section('content')
    <section class="part1 row">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="mediumtitle filet">Le blog de eKo</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="part2 row">
        <div class="container">
            <div class="row">
                <article class="col-12 mb-5">
                    <header>
                        <div>
                            <ul class="d-flex list-decoration tags p-0 mb-1">
                                <li class="mr-2"><a href="#" class="text-prim-color-2 text-uppercase">#ekocloud</a></li>
                                <li class="mr-2"><a href="#" class="text-prim-color-2 text-uppercase">#reseau</a></li>
                            </ul>
                        </div>
                        <h2 class="mb-0"><a class="text-prim-color-1" href="{{route('front.article')}}">Lorem eKo Cloud, c'est le faux texte</a></h2>
                    </header>
                    <p class="mb-3">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dapibus, enim ut auctor pellentesque, nisl metus aliquam velit, vitae tempus ligula nibh et elit.
                    </p>
                    <footer>
                        <p class="text-second-2 text-smallmont text-uppercase font-weight-bold">
                            Posté par <span class="text-prim-color-3">Prénom</span>, le 26 novembre 2020
                        </p>
                    </footer>
                </article>

                <article class="col-12 mb-5">
                    <header>
                        <div>
                            <ul class="d-flex list-decoration tags p-0 mb-1">
                                <li class="mr-2"><a href="#" class="text-prim-color-2 text-uppercase">#ekocloud</a></li>
                                <li class="mr-2"><a href="#" class="text-prim-color-2 text-uppercase">#reseau</a></li>
                            </ul>
                        </div>
                        <h2 class="mb-0"><a class="text-prim-color-1" href="{{route('front.article')}}">Lorem eKo Cloud, c'est le faux texte</a></h2>
                    </header>
                    <p class="mb-3">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dapibus, enim ut auctor pellentesque, nisl metus aliquam velit, vitae tempus ligula nibh et elit.
                    </p>
                    <footer>
                        <p class="text-second-2 text-smallmont text-uppercase font-weight-bold">
                            Posté par <span class="text-prim-color-3">Prénom</span>, le 26 novembre 2020
                        </p>
                    </footer>
                </article>

                <article class="col-12 mb-5">
                    <header>
                        <div>
                            <ul class="d-flex list-decoration tags p-0 mb-1">
                                <li class="mr-2"><a href="#" class="text-prim-color-2 text-uppercase">#ekocloud</a></li>
                                <li class="mr-2"><a href="#" class="text-prim-color-2 text-uppercase">#reseau</a></li>
                            </ul>
                        </div>
                        <h2 class="mb-0"><a class="text-prim-color-1" href="{{route('front.article')}}">Lorem eKo Cloud, c'est le faux texte</a></h2>
                    </header>
                    <p class="mb-3">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dapibus, enim ut auctor pellentesque, nisl metus aliquam velit, vitae tempus ligula nibh et elit.
                    </p>
                    <footer>
                        <p class="text-second-2 text-smallmont text-uppercase font-weight-bold">
                            Posté par <span class="text-prim-color-3">Prénom</span>, le 26 novembre 2020
                        </p>
                    </footer>
                </article>

                <article class="col-12 mb-5">
                    <header>
                        <div>
                            <ul class="d-flex list-decoration tags p-0 mb-1">
                                <li class="mr-2"><a href="#" class="text-prim-color-2 text-uppercase">#ekocloud</a></li>
                                <li class="mr-2"><a href="#" class="text-prim-color-2 text-uppercase">#reseau</a></li>
                            </ul>
                        </div>
                        <h2 class="mb-0"><a class="text-prim-color-1" href="{{route('front.article')}}">Lorem eKo Cloud, c'est le faux texte</a></h2>
                    </header>
                    <p class="mb-3">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dapibus, enim ut auctor pellentesque, nisl metus aliquam velit, vitae tempus ligula nibh et elit.
                    </p>
                    <footer>
                        <p class="text-second-2 text-smallmont text-uppercase font-weight-bold">
                            Posté par <span class="text-prim-color-3">Prénom</span>, le 26 novembre 2020
                        </p>
                    </footer>
                </article>

                <p class="col-12 text-center text-md-right">
                    <a href="#" class="bttn btn-color2 text-uppercase">Voir les articles plus anciens</a>
                </p>
            </div>
        </div>
    </section>

    <section class="testimony row text-white">
        <section class="col-12 col-md-6 bg-prim-color-1 p-5 p-md-8">
            <p class="text-uppercase text-second-2 text-smallmont">Témoignages</p>
            <p class="text-big font-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </p>
            <div class="row">
                <div class="col-12 col-md-6">
                    <div>
                        <img src="{{ asset('images/portrait.png') }}" alt="Photo témoignage" class="img-fluid">
                        <img src="{{ asset('images/icon_talk.png') }}" alt="Icône tchat" class="img-fluid" style="width:130px;position: absolute;bottom: 0;left: 35%;">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <p class="text-prim-color-3 mb-0">Prénom Nom</p>
                    <p>Service clientèle eKo</p>
                </div>
            </div>
        </section>
        <section class="col-12 col-md-6 p-5 p-md-8 pt-6 pt-md-10 pict">
            <p class="text-big font-italic">
                Chez eKo, nous avons trouvé des solutions adaptées à nos besoins. Nous nous concentrons dans la création et eKo fait le reste.
            </p>
            <p class="text-prim-color-2 mb-0">Prénom Nom</p>
            <p>Créatrice et styliste mode</p>
            <p class="text-center text-md-left">
                <a href="{{route('front.test')}}" class="bttn btn-color2 darker-bg text-uppercase">
                    Lire les témoignages
                </a>
            </p>
        </section>
    </section>

    <section class="try-part bg-prim-color-2 row">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 d-none d-md-block">
                    <img src="{{ asset('images/pc_eko.png') }}" alt="Photo eKo" class="img-fluid">
                </div>
                <div class="col-12 col-md-8 pl-6 pr-7 pt-6 pb-5 pb-md-0">
                    <h2 class="text-white">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </h2>
                    <a href="{{route('front.test')}}" class="text-uppercase special-link white-link">
                        <span class="mr-2">Demander un essai</span>
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection