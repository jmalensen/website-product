@extends('layouts.front')
@section('description') eKoCRM est un super outil. @endsection

@section('content')
    <section class="part1 row">
        <div class="container">
            <div class="row">
                <div class="text-left col-12 col-md-6 px-4 px-md-1">
                    <h1 class="bigtitle mb-0"><span>Facilitez</span> <span>votre gestion d'entreprise</span></h1>
                    <p class="mb-3 text-bigger">Outil de gestion d'entreprise complet, agile et accessible de n'importe quel support.</p>
                    <a class="bttn btn-color2 darker-bg d-inline-block mb-3 text-uppercase" href="{{ route('front.test') }}">Découvrez à quel point c'est facile !</a>
                    <div class="d-flex legend-home">
                        <p class="mr-4">
                            <i class="text-prim-color-2 fa fa-check mr-2"></i>
                            <span class="text-second-5">15 jours d'essai gratuit</span>
                        </p>
                        <p>
                            <i class="text-prim-color-2 fa fa-check mr-2"></i>
                            <span class="text-second-5">Sans engagement</span>
                        </p>
                    </div>
                </div>
                <div class="illustration col-12 col-md-6 d-none d-md-block">
                    <img src="{{ asset('images/illustration-home1.png') }}" alt="Illustration eKo Home" class="img-fluid">
                    <img src="{{ asset('images/illustration-home2.png') }}" alt="Illustration eKo Home" class="img-fluid">
                    <img src="{{ asset('images/illustration-home3.png') }}" alt="Illustration eKo Home" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section class="part2 row">
        <div class="container">
            <div class="row mb-6">
                <section class="col-12 mb-6 d-none d-md-block">
                    <ul class="d-flex justify-content-center mb-0 list-decoration list-top text-smallmont text-uppercase text-second-2">
                        <li>
                            <p class="text-center mb-0">
                                <img src="{{ asset('images/icone-simple.svg') }}" alt="Illustration simple" class="img-fluid">
                            </p>
                            Simple
                        </li>
                        <li>
                            <p class="text-center mb-0">
                                <img src="{{ asset('images/icone-complet.svg') }}" alt="Illustration complet" class="img-fluid">
                            </p>
                            Complet
                        </li>
                        <li>
                            <p class="text-center mb-0">
                                <img src="{{ asset('images/icone-secure.svg') }}" alt="Illustration sécurisé" class="img-fluid">
                            </p>
                            Sécurisé
                        </li>
                        <li>
                            <p class="text-center mb-0">
                                <img src="{{ asset('images/icone-service.svg') }}" alt="Illustration service client" class="img-fluid">
                            </p>
                            Service client
                        </li>
                        <li>
                            <p class="text-center mb-0">
                                <img src="{{ asset('images/icone-french.svg') }}" alt="Illustration interface français" class="img-fluid">
                            </p>
                            Interface en français
                        </li>
                    </ul>
                </section>
                <section class="col-12 text-center">
                    <h2 class="text-prim-color-1">
                        Tout ce dont vous avez besoin<br/>
                        Pour une gestion simple et sereine
                    </h2>
                </section>
            </div>

            <div class="row px-5 px-md-0 mb-4">
                {{-- Partie optimiser workflows --}}
                <section class="col-12 col-md-6 order-2 order-md-1">
                    <img src="{{ asset('images/image1_home.png') }}" alt="Illustration optimiser les workflows quotidiens" class="img-fluid img-illustration">
                </section>
                <section class="col-12 col-md-6 order-1 order-md-2">
                    <p class="text-second-2 text-uppercase text-smallmont legend">
                        <span class="text-prim-color-2 d-inline-block mr-2">1</span>
                        Gestion commerciale
                    </p>
                    <h2 class="text-prim-color-3">Optimiser les workflows quotidiens</h2>
                    <p>
                        Avec Eko CRM, vous pouvez facilement générer vos documents commerciaux (devis, commandes clients, bons de livraison, factures et avoirs, etc.), ainsi que vos commandes fournisseurs.
                    </p>
                    <p class="text-uppercase">
                        <a href="{{route('front.test')}}" class="special-link">
                            <span class="mr-2">Demander un essai</span>
                            <i class="fa fa-arrow-right"></i>
                        </a>
                    </p>
                </section>
                {{-- Fin Partie optimiser workflows --}}
            </div>

            <div class="row px-5 px-md-0 mb-4">
                {{-- Partie gestion contact --}}
                <section class="col-12 col-md-6">
                    <p class="text-second-2 text-uppercase text-smallmont legend">
                        <span class="text-prim-color-2 d-inline-block mr-2">2</span>
                        Gestion des contacts
                    </p>
                    <h2 class="text-prim-color-3">Rester connecté avec son réseau</h2>
                    <p>
                        Quelle que soit votre activité, il est primordial de soigner vos relations clients, professionnels comme particuliers.
                    </p>
                    <p class="text-uppercase">
                        <a href="{{route('front.test')}}" class="special-link">
                            <span class="mr-2">Demander un essai</span>
                            <i class="fa fa-arrow-right"></i>
                        </a>
                    </p>
                </section>
                <section class="col-12 col-md-6">
                    <img src="{{ asset('images/image2_home.png') }}" alt="Illustration gestion des contacts" class="img-fluid img-illustration">
                </section>
                {{-- Fin Partie gestion contact --}}
            </div>

            <div class="row px-5 px-md-0">
                {{-- Partie gestion des documents --}}
                <section class="col-12 col-md-6 d-none d-md-block">
                    <img src="{{ asset('images/image3_home.png') }}" alt="Illustration gestion des documents" class="img-fluid img-illustration">
                </section>
                <section class="col-12 col-md-6">
                    <p class="text-second-2 text-uppercase text-smallmont legend">
                        <span class="text-prim-color-2 d-inline-block mr-2">3</span>
                        Lorem ipsum
                    </p>
                    <h2 class="text-prim-color-3">Gestion des documents</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dapibus, enim ut auctor pellentesque, nisl metus aliquam velit, vitae tempus ligula nibh et elit.
                    </p>
                    <p class="text-uppercase">
                        <a href="{{route('front.test')}}" class="special-link">
                            <span class="mr-2">Demander un essai</span>
                            <i class="fa fa-arrow-right"></i>
                        </a>
                    </p>
                </section>
                {{-- Fin Partie gestion des documents --}}
            </div>
        </div>
    </section>

    <section class="part3 row bg-second">
        <div class="container">
            <div class="row text-center">

                <section class="col-12 mb-6">
                    <p class="text-uppercase text-second-2 text-smallmont mb-6 d-none d-md-block">Lorem ipsum</p>
                    <h2 class="mb-0 text-prim-color-1">Les fonctionnalités</h2>
                </section>
                <div class="col-12 container-fluid">
                    <div class="row">
                        <div class="col-12 col-md-4 p-5 feature">
                            <p class="text-center">
                                <img src="{{ asset('images/icon_gestion_contrat.png') }}" alt="Illustration gestion des contrats" class="img-fluid icon-features">
                            </p>
                            <h3 class="text-uppercase text-prim-color-3">Gestions des contrats avec relance</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dapibus, enim ut auctor pellentesque, nisl metus aliquam velit, vitae tempus ligula nibh et elit.
                            </p>
                        </div>
                        <div class="col-12 col-md-4 p-5 feature">
                            <p class="text-center">
                                <img src="{{ asset('images/icon_envoi_mail.png') }}" alt="Illustration envoi des pièces commerciales" class="img-fluid icon-features">
                            </p>
                            <h3 class="text-uppercase text-prim-color-3">Envoi des pièces commerciales par mail</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dapibus, enim ut auctor pellentesque, nisl metus aliquam velit, vitae tempus ligula nibh et elit.
                            </p>
                            <a href="{{route('front.test')}}" class="special-link">
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="col-12 col-md-4 p-5 feature">
                            <p class="text-center">
                                <img src="{{ asset('images/icon_agenda.png') }}" alt="Illustration agenda" class="img-fluid icon-features">
                            </p>
                            <h3 class="text-uppercase text-prim-color-3">Agenda partagé synchronisé</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dapibus, enim ut auctor pellentesque, nisl metus aliquam velit, vitae tempus ligula nibh et elit.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="part4 row">
        <div class="container">
            <div class="row">

                <section class="col-12 text-center mb-6">
                    <p class="text-uppercase text-second-2 text-smallmont mb-6 d-none d-md-block">Lorem ipsum</p>
                    <h2 class="text-prim-color-1 mb-0">Avec eKo Cloud, vous pouvez accéder à votre outil depuis n'importe où</h2>
                </section>

                <div class="col-12 container-fluid">
                    <div class="row mb-3">
                        <div class="col-12 col-md-6 d-md-flex justify-content-end d-none">
                            <img src="{{ asset('images/devices.png') }}" alt="Illustration mobile" class="img-fluid" style="width: 186px; height: 66px;">
                        </div>
                        <div class="col-12 col-md-6">
                            <p class="d-none d-md-block">
                                Créé pour apporter aux populations nomades et fixes une solution globale et modulaire, eKo CRM est accessible depuis toute connexion au réseau, depuis leurs bureaux, leurs maisons, et tous types de terminaux fixes ou mobiles, ordinateurs et smartphones...
                            </p>
                            <p class="text-center text-md-left">
                                <a href="{{route('front.test')}}" class="text-prim-color-2">
                                    <span class="text-uppercase text-smallmont mr-2">En savoir plus</span>
                                    <i class="fa fa-chevron-right"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="col-12 text-center mb-6 d-none d-md-block">
                        <div class="cloud-illustration1">
                            <img src="{{ asset('images/bloc-1-1.png') }}" alt="Illustration eKo Cloud bloc1" class="img-fluid"><img src="{{ asset('images/bloc-2-1.png') }}" alt="Illustration eKo Cloud bloc2" class="img-fluid">
                        </div>
                        <div class="cloud-illustration2">
                            <img src="{{ asset('images/bloc-3-1.png') }}" alt="Illustration eKo Cloud bloc3" class="img-fluid"><img src="{{ asset('images/bloc-4-1.png') }}" alt="Illustration eKo Cloud bloc4" class="img-fluid">
                        </div>
                    </div>
                    <section class="col-12 text-center mb-6">
                        <p class="text-uppercase text-second-2 text-smallmont mb-5 d-none d-md-block">Lorem ipsum</p>
                        <h2 class="text-prim-color-1 mb-5">eKo s'interface avec vos outils et votre écosystème</h2>
                        <p class="mb-0 d-none d-md-block text-bigger">
                            Il s'adapte avec votre environnement de travail existant.
                        </p>
                    </section>

                    <section class="col-12 logos mb-6 d-flex justify-content-between">
                        <img src="{{ asset('images/part_3c.png') }}" alt="Logo" class="img-fluid px-2">
                        <img src="{{ asset('images/part_acd.png') }}" alt="Logo" class="img-fluid px-2">
                        <img src="{{ asset('images/part_agiris.png') }}" alt="Logo" class="img-fluid px-2">
                        <img src="{{ asset('images/part_e.png') }}" alt="Logo" class="img-fluid px-2">
                        <img src="{{ asset('images/part_sage.png') }}" alt="Logo" class="img-fluid px-2">
                        <img src="{{ asset('images/part_us.png') }}" alt="Logo" class="img-fluid px-2">
                        <img src="{{ asset('images/part_sap.png') }}" alt="Logo" class="img-fluid px-2">
                    </section>
                    <div class="col-12 text-center">
                        <a href="{{route('front.test')}}" class="bttn btn-color2 text-smallmont text-uppercase">
                            En savoir plus
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimony row text-white d-none d-md-flex">
        <section class="col-12 col-md-6 bg-prim-color-1 p-8">
            <p class="text-uppercase text-second-2 text-smallmont">Témoignages</p>
            <p class="text-big font-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </p>

            <div class="container-fluid">
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
            </div>
        </section>
        <section class="col-12 col-md-6 p-8 pt-10 pict">
            <p class="text-big font-italic">
                Chez eKo, nous avons trouvé des solutions adaptées à nos besoins. Nous nous concentrons dans la création et eKo fait le reste.
            </p>
            <p class="text-prim-color-2 mb-0">Prénom Nom</p>
            <p>Créatrice et styliste mode</p>
            <a href="{{route('front.test')}}" class="bttn btn-color2 text-uppercase">
                Lire les témoignages
            </a>
        </section>
    </section>

    <section class="part6 bg-second row">
        <div class="container">
            <div class="row">

                <section class="col-12">
                    <div class="text-center">
                        <h2 class="text-prim-color-1">Choisissez la formule qui vous convient</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </p>
                    </div>

                    <div class="container-fluid">
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
                    </div>
                </section>

            </div>
        </div>
    </section>

    <section class="part7 row">
        <section class="col-12 col-md-6 bg-prim-color-1 p-6 p-md-9">
            <p class="text-uppercase text-smallmont">Contact</p>
            <h2 class="text-white">Vous souhaitez plus d'informations ?</h2>
            <p>
                Laissez-nous uniquement votre e-mail et nous prendrons contact avec vous dans les plus brefs délais.
            </p>
            <form>
                <p>
                    <label class="text-uppercase text-smallmont mr-3">Email</label>
                    <input type="text" placeholder="Votre adresse email" />
                </p>

                <p class="text-center text-md-left">
                    <a href="{{route('front.contact')}}" class="bttn btn-color2 darker-bg text-uppercase">
                        Contactez-moi
                    </a>
                </p>
            </form>
        </section>
        <section class="col-12 col-md-6 pict d-none d-md-block">
        </section>
    </section>
@endsection


@push('js_after')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}" />
    <script type="text/javascript" src="{{ asset('js/slick.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.illustration').slick({
                autoplay: true,
                autoplaySpeed: 2000,
                arrows: false,
                dots: false,
                infinite: true,
                speed: 2000,
                fade: true,
                cssEase: 'linear'
            });

            $('.logos').slick({
                infinite: true,
                centerMode: true,
                slidesToShow: 6,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                responsive: [
                    {
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 500,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        });
    </script>
@endpush