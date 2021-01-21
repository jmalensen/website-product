@extends('layouts.front')
@section('description') eKoCRM est un super outil. @endsection

@section('content')
    <section class="part1 row">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="mediumtitle filet">eKo, deux formats pensés selon la taille de votre entreprise</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="row">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 d-flex justify-content-center justify-content-md-end mb-4 mb-md-0">
                    <div class="bg-white block-price rounded p-5" style="width:400px;">
                        <p class="text-center mb-5">
                            <span class="d-inline-block bg-prim-color-2 squabox text-uppercase">
                                15 jours<br/>
                                d'essai gratuit
                            </span>
                        </p>
                        <p class="text-center mb-3">
                            <img src="{{ asset('images/eKo-first.svg') }}" alt="Illustration eKo first" class="img-fluid" style="width: 150px;">
                        </p>
                        <p>
                            Vous êtes indépendant
                        </p>
                        <div class="text-center text-prim-color-1">
                            <p class="mb-0" style="line-height: 1;">
                                <sup style="font-size:40px;">€</sup>
                                <span style="font-size:65px; font-weight:bold;">35</span>
                            </p>
                            <p class="text-highlight text-second-2">/ mois</p>
                        </div>

                        <div class="mb-8 pl-6">
                            <p class="mb-1">
                                <i class="text-prim-color-2 far fa-check-circle mr-2"></i>
                                <span>Mono utilisateur</span>
                            </p>
                            <p class="mb-1">
                                <i class="text-prim-color-2 far fa-check-circle mr-2"></i>
                                <span>Engagement 12 mois</span>
                            </p>
                        </div>

                        <div class="text-center">
                            <a href="{{route('front.test')}}" class="bttn btn-color2 text-uppercase">
                                Démarrez un essai gratuit
                            </a>

                            <p class="mb-0">
                                <a href="{{route('front.test')}}" class="text-second-2">
                                    <span class="mr-2">Voir l'offre en détails</span>
                                    <i class="fa fa-chevron-right"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 d-flex justify-content-center justify-content-md-begin">
                    <div class="bg-white block-price rounded p-5" style="width:400px;">
                        <p class="text-center mb-5">
                                        <span class="d-inline-block bg-prim-color-2 squabox text-uppercase">
                                            15 jours<br/>
                                            d'essai gratuit
                                        </span>
                        </p>
                        <p class="text-center mb-3">
                            <img src="{{ asset('images/eKo-plus.svg') }}" alt="Illustration eKo plus" class="img-fluid" style="width: 150px;">
                        </p>
                        <div class="text-center text-prim-color-1">
                            <p class="mb-0" style="line-height: 1;">
                                <sup style="font-size:40px;">€</sup>
                                <span style="font-size:65px; font-weight:bold;">60<sup style="font-size:35px;">*</sup></span>
                            </p>
                            <p class="text-highlight text-second-2">/ mois</p>
                        </div>

                        <div class="mb-6 pl-6">
                            <p class="mb-1">
                                <i class="text-prim-color-2 far fa-check-circle mr-2"></i>
                                <span>60€* / mois par utilisateur</span>
                            </p>
                            <p class="mb-1">
                                <i class="text-prim-color-2 far fa-check-circle mr-2"></i>
                                <span>160€ / mois pour 5 utilisateurs</span>
                            </p>
                            <p class="mb-1">
                                <i class="text-prim-color-2 far fa-check-circle mr-2"></i>
                                <span>260€ / mois pour 10 utilisateurs</span>
                            </p>
                            <p class="mb-0">
                                <i class="text-prim-color-2 far fa-check-circle mr-2"></i>
                                <span>Engagement 12 mois</span>
                            </p>
                        </div>

                        <div class="text-center">
                            <a href="{{route('front.test')}}" class="bttn btn-color2 text-uppercase">
                                Démarrez un essai gratuit
                            </a>

                            <p class="text-uppercase">
                                <a href="{{route('front.test')}}" class="text-prim-color-2">
                                    <span class="text-smallmont mr-2">Demandez une démo</span>
                                    <i class="fa fa-chevron-right"></i>
                                </a>
                            </p>

                            <p class="mb-0">
                                <a href="{{route('front.test')}}" class="text-second-2">
                                    <span class="mr-2">Voir l'offre en détails</span>
                                    <i class="fa fa-chevron-right"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-8 pt-0 pt-md-6">
                    <h2>eKo <span>first</span></h2>
                    <p>
                        <strong>Vous êtes indépendant, artisan ou gestionnaire d'une TPE et cherchez un outil pour faciliter votre gestion client et commerciale ?</strong>
                    </p>
                    <p>
                        Ce format est pensé pour vous. eKo first vous donne accès à l'ensemble de toutes les fonctionnalités offertes aux grosses entreprises mais avec un prix adapté à la taille de votre structure.
                    </p>
                    <div class="d-flex">
                        <p class="mr-3">
                            <i class="text-prim-color-2 far fa-check-circle mr-2"></i>
                            <span>Mono utilisateur</span>
                        </p>
                        <p>
                            <i class="text-prim-color-2 far fa-check-circle mr-2"></i>
                            <span>Engagement 12 mois</span>
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="bg-white rounded p-5" style="width:400px; position:relative; top:-40px;">
                        <p class="text-center mb-5">
                            <span class="d-inline-block bg-prim-color-2 squabox text-uppercase">
                                15 jours<br/>
                                d'essai gratuit
                            </span>
                        </p>
                        <p class="text-center mb-3">
                            <img src="{{ asset('images/eKo-first.svg') }}" alt="Illustration eKo first" class="img-fluid" style="width: 150px;">
                        </p>
                        <div class="text-center text-prim-color-1">
                            <p class="mb-0" style="line-height: 1;">
                                <sup style="font-size:40px;">€</sup>
                                <span style="font-size:65px; font-weight:bold;">35</span>
                            </p>
                            <p class="text-second-2">/ mois</p>
                        </div>

                        <div class="text-center">
                            <a href="{{route('front.test')}}" class="bttn btn-color2 text-uppercase">
                                Démarrez un essai gratuit
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="part3 bg-second row">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">
                    <h2>eKo <span>plus</span></h2>
                    <p>
                        <strong>Vous travaillez au sein d'une PME et cherchez un outil pour faciliter votre gestion d'entreprise ?</strong>
                    </p>
                    <p>
                        eKo plus est pensé pour vous. Vous pourrez disposer de un à dix comptes grâce à cette formule.
                    </p>
                    <div class="d-flex">
                        <div class="mr-3">
                            <p>
                                <i class="text-prim-color-2 far fa-check-circle mr-2"></i>
                                <span>60 €* / mois par utilisateur</span>
                            </p>
                            <p>
                                <i class="text-prim-color-2 far fa-check-circle mr-2"></i>
                                <span>160 € / mois pour 5 utilisateurs</span>
                            </p>
                        </div>
                        <div>
                            <p>
                                <i class="text-prim-color-2 far fa-check-circle mr-2"></i>
                                <span>260 € / mois pour 10 utilisateurs</span>
                            </p>
                            <p>
                                <i class="text-prim-color-2 far fa-check-circle mr-2"></i>
                                <span>Engagement 12 mois</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="bg-white rounded p-5" style="width:400px;">
                        <p class="text-center mb-5">
                            <span class="d-inline-block bg-prim-color-2 squabox text-uppercase">
                                15 jours<br/>
                                d'essai gratuit
                            </span>
                        </p>
                        <p class="text-center mb-3">
                            <img src="{{ asset('images/eKo-plus.svg') }}" alt="Illustration eKo plus" class="img-fluid" style="width: 150px;">
                        </p>
                        <div class="text-center text-prim-color-1">
                            <p class="mb-0" style="line-height: 1;">
                                <sup style="font-size:40px;">€</sup>
                                <span style="font-size:65px; font-weight:bold;">60<sup>*</sup></span>
                            </p>
                            <p class="text-second-2">/ mois</p>
                        </div>

                        <div class="text-center">
                            <a href="{{route('front.test')}}" class="bttn btn-color2 text-uppercase">
                                Démarrez un essai gratuit
                            </a>

                            <p class="text-uppercase">
                                <a href="{{route('front.test')}}" class="text-prim-color-2">
                                    <span class="mr-2">Demandez une démo</span>
                                    <i class="fa fa-chevron-right"></i>
                                </a>
                            </p>

                            <p class="mb-0">
                                <a href="{{route('front.test')}}">
                                    <span class="mr-2">Voir l'offre en détails</span>
                                    <i class="fa fa-chevron-right"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
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