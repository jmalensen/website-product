@extends('layouts.front')
@section('description') eKoCRM est un super outil. @endsection

@section('content')
    <section class="part1 row" style="background: url({{ asset('images/bg_article.png') }}); background-size:cover; background-repeat: no-repeat; background-position: center center;">
        <div class="container">
            <div class="row">
                <div class="col-12 offset-0 col-md-8 offset-md-2 text-white">
                    <h1>Le titre de votre article</h1>
                    <p class="text-bigger">Le lorem ipsum de l'enfer</p>
                    <p class="ext-gray-dark text-uppercase">Posté par <span class="font-weight-bold">Prénom</span>, le 26 novembre 2020</p>
                    <div>
                        <ul class="d-flex list-decoration tags p-0 mb-1">
                            <li class="mr-2"><a href="#" class="text-prim-color-2 text-uppercase">#ekocloud</a></li>
                            <li class="mr-2"><a href="#" class="text-prim-color-2 text-uppercase">#reseau</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="part2 row">
        <div class="container">
            <div class="row">
                <div class="col-12 offset-0 col-md-8 offset-md-2">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dapibus, enim ut auctor pellentesque, nisl metus aliquam velit, vitae tempus ligula nibh et elit. In sit amet justo convallis, dignissim felis vitae, lobortis metus. In faucibus augue nec ex fringilla, nec gravida enim faucibus. Praesent nec mattis leo. Mauris pulvinar augue at sagittis gravida. Vestibulum ut diam in quam efficitur viverra. Mauris fringilla luctus tincidunt. Praesent congue ligula a ante interdum scelerisque. Phasellus ut varius magna. Duis bibendum a magna eu imperdiet. Mauris pulvinar hendrerit tortor id feugiat. Donec tempor tincidunt leo sit amet pellentesque. Donec congue lacus vel leo vulputate iaculis. Aenean at diam sem. Mauris nec ultricies sapien.
                    </p>

                    <p>
                        Cras quam risus, aliquam condimentum vestibulum molestie, mollis ac augue. Quisque vel pretium turpis. Phasellus volutpat elementum metus sed sodales. Aenean viverra nisl vel sem congue, eget vehicula nisi pharetra. Aliquam pharetra congue porttitor. Aenean vestibulum interdum ligula. Aliquam ac dolor sit amet lorem semper ornare non a neque. Integer eu ligula eros. Cras metus tortor, faucibus eu efficitur eu, cursus quis arcu.
                    </p>

                    <h2>Resté connecté avec son réseau</h2>

                    <p>
                        Cras tristique ex dolor, ut condimentum nulla volutpat eu. Maecenas sit amet tellus in augue vehicula rutrum non id nulla. Curabitur consectetur, lectus id pellentesque tristique, eros nunc mattis sapien, vitae suscipit turpis ligula non risus. Duis dignissim neque vel molestie placerat. Sed nec velit mauris. Vivamus venenatis erat eu tellus posuere commodo. Fusce vehicula tristique felis, ac suscipit ligula sodales et. Praesent et mollis neque.

                        Vivamus ornare justo cursus tempus mollis. Cras ligula elit, dictum non nulla ut, venenatis tincidunt neque. Quisque porttitor ac nibh a malesuada. Aliquam purus risus, interdum non suscipit a, tincidunt sed erat. Vivamus viverra lectus quis neque varius, gravida dapibus nulla gravida. Aenean a volutpat enim, sed mollis sem. Vestibulum imperdiet velit at ipsum semper mattis. Donec dignissim lacus nulla, vel sodales odio tincidunt imperdiet. Vivamus consequat sed urna ac ornare. Nulla et turpis metus.
                    </p>

                    <p style="font-style: italic; font-weight:bold;">
                        Cras tristique ex dolor, ut condimentum nulla volutpat eu. Maecenas sit amet tellus in augue vehicula rutrum non id nulla. Curabitur consectetur, lectus id pellentesque tristique, eros nunc mattis sapien, vitae suscipit turpis ligula non risus. Duis dignissim neque vel molestie placerat. Sed nec velit mauris. Vivamus venenatis erat eu tellus posuere commodo. Fusce vehicula tristique felis, ac suscipit ligula sodales et. Praesent et mollis neque.

                        Vivamus ornare justo cursus tempus mollis. Cras ligula elit, dictum non nulla ut, venenatis tincidunt neque. Quisque porttitor ac nibh a malesuada. Aliquam purus risus, interdum non suscipit a, tincidunt sed erat. Vivamus viverra lectus quis neque varius, gravida dapibus nulla gravida. Aenean a volutpat enim, sed mollis sem. Vestibulum imperdiet velit at ipsum semper mattis. Donec dignissim lacus nulla, vel sodales odio tincidunt imperdiet. Vivamus consequat sed urna ac ornare. Nulla et turpis metus.
                    </p>

                    <p>
                        Cras tristique ex dolor, ut condimentum nulla volutpat eu. Maecenas sit amet tellus in augue vehicula rutrum non id nulla. Curabitur consectetur, lectus id pellentesque tristique, eros nunc mattis sapien, vitae suscipit turpis ligula non risus. Duis dignissim neque vel molestie placerat. Sed nec velit mauris. Vivamus venenatis erat eu tellus posuere commodo. Fusce vehicula tristique felis, ac suscipit ligula sodales et. Praesent et mollis neque.

                        Vivamus <a href="#">ornare justo cursus tempus mollis</a>. Cras ligula elit, dictum non nulla ut, venenatis tincidunt neque. Quisque porttitor ac nibh a malesuada. Aliquam purus risus, interdum non suscipit a, tincidunt sed erat. Vivamus viverra lectus quis neque varius, gravida dapibus nulla gravida. Aenean a volutpat enim, sed mollis sem. Vestibulum imperdiet velit at ipsum semper mattis. Donec dignissim lacus nulla, vel sodales odio tincidunt imperdiet. Vivamus consequat sed urna ac ornare. Nulla et turpis metus.
                    </p>

                    <figure>
                        <img src="{{ asset('images/img_article.png') }}" alt="Photo article" class="img-fluid">
                        <figcaption class="text-center" style="color:#9fa3a7;">Donec dignissim lacus nulla, vel sodales odio tincidunt imperdiet.</figcaption>
                    </figure>
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
            <a href="{{route('front.test')}}" class="bttn btn-color2 darker-bg text-uppercase">
                Lire les témoignages
            </a>
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