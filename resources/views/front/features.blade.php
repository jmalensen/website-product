@extends('layouts.front')
@section('description') eKoCRM est un super outil. @endsection

@section('content')
    <section class="part1 row">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="mediumtitle filet">Les fonctionnalités</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="features row">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="main-feature bg-second-3 rounded py-6 px-4">
                        <img src="{{ asset('images/icon_gestion_contrat.png') }}" alt="Illustration gestion" class="img-fluid">
                        <h2 class="text-prim-color-3">Gestion</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dapibus, enim ut auctor pellentesque, nisl metus aliquam velit, vitae tempus ligula nibh et elit.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-4 pl-6 pt-5">
                    <div>
                        <p class="text-uppercase text-second-2 text-smallmont legend mb-1">
                            <span class="text-prim-color-2 d-inline-block mr-2">1</span>
                            Lorem ipsum
                        </p>
                        <div class="pl-4">
                            <h3 class="text-prim-color-3">Fonctionnalité 1</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dapibus, enim ut auctor pellentesque, nisl metus aliquam velit, vitae tempus ligula nibh et elit.
                            </p>
                        </div>
                    </div>
                    <div>
                        <p class="text-uppercase text-second-2 text-smallmont legend mb-1">
                            <span class="text-prim-color-2 d-inline-block mr-2">2</span>
                            Lorem ipsum
                        </p>
                        <div class="pl-4">
                            <h3 class="text-prim-color-3">Fonctionnalité 2</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dapibus, enim ut auctor pellentesque, nisl metus aliquam velit, vitae tempus ligula nibh et elit.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 pl-6 pt-5">
                    <div>
                        <p class="text-uppercase text-second-2 text-smallmont legend mb-1">
                            <span class="text-prim-color-2 d-inline-block mr-2">3</span>
                            Lorem ipsum
                        </p>
                        <div class="pl-4">
                            <h3 class="text-prim-color-3">Fonctionnalité 3</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dapibus, enim ut auctor pellentesque, nisl metus aliquam velit, vitae tempus ligula nibh et elit.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="features row">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="main-feature bg-second-3 rounded py-6 px-4">
                        <img src="{{ asset('images/icon_gestion_contrat.png') }}" alt="Illustration facturation" class="img-fluid">
                        <h2 class="text-prim-color-3">Facturation</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dapibus, enim ut auctor pellentesque, nisl metus aliquam velit, vitae tempus ligula nibh et elit.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-4 pl-6 pt-5">
                    <div>
                        <p class="text-uppercase text-second-2 text-smallmont legend mb-1">
                            <span class="text-prim-color-2 d-inline-block mr-2">1</span>
                            Lorem ipsum
                        </p>
                        <div class="pl-4">
                            <h3 class="text-prim-color-3">Fonctionnalité 1</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dapibus, enim ut auctor pellentesque, nisl metus aliquam velit, vitae tempus ligula nibh et elit.
                            </p>
                        </div>
                    </div>
                    <div>
                        <p class="text-uppercase text-second-2 text-smallmont legend mb-1">
                            <span class="text-prim-color-2 d-inline-block mr-2">2</span>
                            Lorem ipsum
                        </p>
                        <div class="pl-4">
                            <h3 class="text-prim-color-3">Fonctionnalité 2</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dapibus, enim ut auctor pellentesque, nisl metus aliquam velit, vitae tempus ligula nibh et elit.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 pl-6 pt-5">
                    <div>
                        <p class="text-uppercase text-second-2 text-smallmont legend mb-1">
                            <span class="text-prim-color-2 d-inline-block mr-2">3</span>
                            Lorem ipsum
                        </p>
                        <div class="pl-4">
                            <h3 class="text-prim-color-3">Fonctionnalité 3</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dapibus, enim ut auctor pellentesque, nisl metus aliquam velit, vitae tempus ligula nibh et elit.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="part4 row py-0 mb-6">
        <section class="col-12 col-md-6 pl-0">
            <div class="p-6 p-md-10 picfaq">
                <p class="text-prim-color-2 text-uppercase text-center">Vous avez des questions,<br/> nous avons les réponses.</p>
            </div>
        </section>
        <section class="col-12 col-md-6 pt-5 pt-md-7 pl-7 pr-7 pr-md-9">
            <h4 class="text-prim-color-2 text-smallmont">FAQ</h4>

            <div id="accordion" role="tablist" aria-multiselectable="true">
                <div class="mb-1">
                    <div class="head-accordion actif" role="tab" id="accordion_h1">
                        <a class="font-w100 d-block" data-toggle="collapse" data-parent="#accordion" href="#accordion_q1" aria-expanded="true" aria-controls="accordion_q1"><span>Question 1</span></a>
                    </div>
                    <div id="accordion_q1" class="content-accordion collapse show" role="tabpanel" aria-labelledby="accordion_h1">
                        <div class="">
                            <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                        </div>
                    </div>
                    <div class="head-accordion" role="tab" id="accordion_h2">
                        <a class="font-w100 d-block" data-toggle="collapse" data-parent="#accordion" href="#accordion_q2" aria-expanded="true" aria-controls="accordion_q2"><span>Question 2</span></a>
                    </div>
                    <div id="accordion_q2" class="content-accordion collapse" role="tabpanel" aria-labelledby="accordion_h2">
                        <div class="">
                            <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                        </div>
                    </div>
                    <div class="head-accordion" role="tab" id="accordion_h3">
                        <a class="font-w100 d-block" data-toggle="collapse" data-parent="#accordion" href="#accordion_q3" aria-expanded="true" aria-controls="accordion_q3"><span>Question 3</span></a>
                    </div>
                    <div id="accordion_q3" class="content-accordion collapse" role="tabpanel" aria-labelledby="accordion_h3">
                        <div class="">
                            <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                        </div>
                    </div>
                    <div class="head-accordion" role="tab" id="accordion_h4">
                        <a class="font-w100 d-block" data-toggle="collapse" data-parent="#accordion" href="#accordion_q4" aria-expanded="true" aria-controls="accordion_q4"><span>Question 4</span></a>
                    </div>
                    <div id="accordion_q4" class="content-accordion collapse" role="tabpanel" aria-labelledby="accordion_h4">
                        <div class="">
                            <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                        </div>
                    </div>
                    <div class="head-accordion" role="tab" id="accordion_h5">
                        <a class="font-w100 d-block" data-toggle="collapse" data-parent="#accordion" href="#accordion_q5" aria-expanded="true" aria-controls="accordion_q5"><span>Question 5</span></a>
                    </div>
                    <div id="accordion_q5" class="content-accordion collapse" role="tabpanel" aria-labelledby="accordion_h5">
                        <div class="">
                            <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                        </div>
                    </div>
                    <div class="head-accordion" role="tab" id="accordion_h6">
                        <a class="font-w100 d-block" data-toggle="collapse" data-parent="#accordion" href="#accordion_q6" aria-expanded="true" aria-controls="accordion_q6"><span>Question 6</span></a>
                    </div>
                    <div id="accordion_q6" class="content-accordion collapse" role="tabpanel" aria-labelledby="accordion_h6">
                        <div class="">
                            <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                        </div>
                    </div>

                    <p class="text-center text-md-right">
                        <a href="{{route('front.contact')}}" class="bttn btn-color2 text-uppercase">
                            Vous avez une autre question ?
                        </a>
                    </p>
                </div>
            </div>
        </section>
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

@push('js_after')
    <script type="text/javascript">
        $(document).ready(function() {
            $('.head-accordion').on('click', function(){
                $(this).toggleClass('actif');
            });
        });
    </script>
@endpush