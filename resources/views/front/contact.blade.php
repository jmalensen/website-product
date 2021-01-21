@extends('layouts.front')
@section('description') eKoCRM est un super outil. @endsection

@section('content')
    <section class="part3 pb-0 row">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-6 d-none d-md-block">
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
                </div>
                <div class="col-12 text-center">
                    <h1 class="text-prim-color-1">Nous contacter</h1>
                    <h3 class="text-second-2 text-bigger font-weight-normal">Vous avez des questions, nous avons des réponses.</h3>
                </div>
            </div>
        </div>
    </section>

    <section class="part2 row">
        <div class="col-12">
            {{ Form::open(['route' => ['front.contact'], 'method' => 'post', 'class' => 'contact-form']) }}
                <div class="container">
                    <div class="row">
                        <div class="col-12 offset-0 col-md-8 offset-md-2">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    {{Form::textGroup('name', 'Nom', [ 'input' => ['placeholder' => 'ex : Martin']])}}
                                </div>
                                <div class="col-12 col-md-6">
                                    {{Form::textGroup('firstname', 'Prénom', [ 'input' => ['placeholder' => 'ex : Vincent']])}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    {{Form::textGroup('company', 'Société', [ 'input' => ['placeholder' => 'ex : Conselio']])}}
                                </div>
                                <div class="col-12 col-md-6">
                                    {{Form::textGroup('role', 'Fonction', [ 'input' => ['placeholder' => 'ex : Dirigeant']])}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    {{Form::emailGroup('email', 'Email', [ 'input' => ['placeholder' => 'ex : utilisateur@eko.com']])}}
                                </div>
                                <div class="col-12 col-md-6">
                                    {{Form::textGroup('phone', 'Numéro de téléphone', [ 'input' => ['placeholder' => 'ex : ex : +352 42 25 20']])}}
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-12">
                                    {{Form::textareaGroup('message', 'Message', [ 'input' => ['placeholder' => 'ex : Votre message']])}}
                                </div>
                            </div>
                            <p class="text-center mb-0">
                                <button class="bttn btn-color2 text-uppercase right" type="submit">
                                    Envoyer ma demande
                                </button>
                            </p>
                        </div>
                    </div>
                </div>
            {{ Form::close() }}
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