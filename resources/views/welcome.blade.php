@extends('layouts.main')

@section('contenido')



<section class="section-lg-top-20">
    <!--Swiper-->
    <div class="swiper-container swiper-slider" data-loop="true" data-height="" data-slide-effect="fade" data-dragable="false" data-min-height="400px" data-autoplay="true">
        <div class="swiper-wrapper text-center">
            <div class="swiper-slide" id="page-loader" data-slide-bg="{{ url( $img_slider[0]->path ) }}">
                <div class="swiper-caption">
                    <div class="swiper-slide-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 section-41 section-sm-98 section-md-bottom-167">
                                    <div class="text-lg-left">
                                        <h2>
                                            {{ $slider_textos[0]->description }}<br class="d-none d-lg-block"> {{ $slider_textos[1]->description }}
                                        </h2>
                                        <h5 class="d-none d-lg-block">{{ $slider_textos[2]->description }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" data-slide-bg="{{ url( $img_slider[1]->path ) }}">
                <div class="swiper-caption">
                    <div class="swiper-slide-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 section-41 section-sm-98 section-md-110 to-front">
                                    <div class="text-lg-left">
                                        <h2>
                                            {{ $slider_textos[3]->description }}<br class="d-none d-lg-block"> {{ $slider_textos[4]->description }}
                                        </h2>
                                        <h5 class="d-none d-lg-block">{{ $slider_textos[5]->description }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" data-slide-bg="{{ url( $img_slider[2]->path ) }}">
                <div class="swiper-caption">
                    <div class="swiper-slide-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 section-41 section-sm-98 section-md-bottom-167">
                                    <div class="text-lg-left">
                                        <h2>
                                            {{ $slider_textos[6]->description }}<br class="d-none d-lg-block">{{ $slider_textos[7]->description }}
                                        </h2>
                                        <h5 class="d-none d-lg-block">{{ $slider_textos[8]->description }}</h5>
                                        {{-- <a class="btn btn-ellipse button-primary offset-top-24" href="make-an-appointment.html">make an appointment</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>
<!-- Page Contents -->
<main class="page-content">
    <!--Sheldue-->
    <section class="section-xs">
        <div class="container">
            <div class="row no-gutters justify-content-center justify-content-xl-start sheldue text-sm-left to-front">
                <div class="col-md-8 col-lg-5 col-xl-3">
                    <div class="sheldue-item first">
                        <div class="sheldue-item-body">
                            <div class="icon icon-xs mdi mdi-calendar-clock text-java"></div>
                            <h6 class="text-primary d-inline-block inset-left-10">opening hours</h6>
                            <hr class="hr">
                            <div class="row row-20 offset-top-24 justify-content-between text-gray-darker">
                                <div class="col-sm-4">Mon–Fri</div>
                                <div class="col-sm-7 text-sm-right">8:00am–7:00pm</div>
                                <div class="col-sm-4">Saturday</div>
                                <div class="col-sm-7 text-sm-right">9:00am–5:00pm</div>
                                <div class="col-sm-4">Sunday</div>
                                <div class="col-sm-7 text-sm-right">9:00am–3:00pm </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-lg-5 col-xl-3">
                    <div class="sheldue-item light">
                        <div class="sheldue-item-body">
                            <div class="icon icon-xs mdi mdi-calendar-today text-java"></div>
                            <h6 class="text-primary d-inline-block inset-left-10">doctors' timetable</h6>
                            <hr class="hr">
                            <div class="offset-top-24 text-gray-darker">
                                <p>The following is for guidance only to help you plan your appointment with a preferred doctor or nurse. It does not guarantee availability as the doctors or nurses may sometimes be attending to other duties.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-lg-5 col-xl-3">
                    <div class="sheldue-item">
                        <div class="sheldue-item-body">
                            <div class="icon icon-xs mdi mdi-phone text-java"></div>
                            <h6 class="text-primary d-inline-block inset-left-10">appointments</h6>
                            <hr class="hr">
                            <div class="offset-top-24 text-gray-darker">
                                <p>The first step towards a healthy life  is to schedule an appointment. Please contact our office by phone or complete the appointment request form.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-lg-5 col-xl-3">
                    <div class="sheldue-item light last">
                        <div class="sheldue-item-body">
                            <div class="icon icon-xs icon-emergency-01 text-java"></div>
                            <h6 class="text-primary d-inline-block inset-left-10">emergency cases</h6>
                            <hr class="hr">
                            <div class="offset-top-24">
                                <h5 class="text-bold"><a class="text-gray-darker" href="tel:#">99-8386-7588</a></h5>
                                <p class="text-gray-darker" style="color:black;">Llamanos!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Team-->
    <section>
        <div class="d-md-flex justify-content-center flex-md-wrap flex-xl-nowrap">
            {{--
            <figure class="thumbnail-josip thumbnail-services">
                <a href="team-member.html"><img width="320" height="320" src="{{ url('img/index-01-320x320')}}.jpg" alt=""/></a>
                <div class="thumbnail-desc">
                    <h5 class="thumbnail-josip-title text-bold text-white">Eyelid Surgery</h5>
                    <p class="d-none d-lg-block text-italic text-white offset-top-0"></p>
                </div>
                <figcaption><a class="btn-java btn btn-block btn-rect text-lg-left" href="make-an-appointment.html">book an appointment</a></figcaption>
            </figure> --}}

            <figure class="thumbnail-josip thumbnail-services offset-top-41 offset-sm-top-0">
                <a href="team-member.html"><img width="320" height="320" src="{{ url( $img_proc[0]->path ) }}" alt=""/></a>
                <div class="thumbnail-desc">
                    <h5 class="thumbnail-josip-title text-bold text-white">Rinoplastía</h5>
                    <p class="d-none d-lg-block text-italic text-white offset-top-0"></p>
                </div>
                <figcaption>
                    <a class="btn-java btn btn-block btn-rect text-lg-left" href="make-an-appointment.html">book an appointment</a>
                </figcaption>
            </figure>

            <figure class="thumbnail-josip thumbnail-services offset-top-41 offset-lg-top-0">
                <a href="team-member.html"><img width="320" height="320" src="{{ url( $img_proc[1]->path ) }}" alt=""/></a>
                <div class="thumbnail-desc">
                    <h5 class="thumbnail-josip-title text-bold text-white">Contorno facial</h5>
                    <p class="d-none d-lg-block text-italic text-white offset-top-0"></p>
                </div>
                <figcaption>
                    <a class="btn-java btn btn-block btn-rect text-lg-left" href="make-an-appointment.html">book an appointment</a>
                </figcaption>
            </figure>

            <figure class="thumbnail-josip thumbnail-services offset-top-41 offset-lg-top-0">
                <a href="team-member.html"><img width="320" height="320" src="{{ url( $img_proc[2]->path ) }}" alt=""/></a>
                <div class="thumbnail-desc">
                    <h5 class="thumbnail-josip-title text-bold text-white">Contorno corporal</h5>
                    <p class="d-none d-lg-block text-italic text-white offset-top-0"></p>
                </div>
                <figcaption><a class="btn-java btn btn-block btn-rect text-lg-left" href="make-an-appointment.html">book an appointment</a></figcaption>
            </figure>

            <figure class="thumbnail-josip thumbnail-services offset-top-41 offset-lg-top-0">
                <a href="team-member.html"><img width="320" height="320" src="{{ url( $img_proc[3]->path ) }}" alt=""/></a>
                <div class="thumbnail-desc">
                    <h5 class="thumbnail-josip-title text-bold text-white">Cirugía baratria</h5>
                    <p class="d-none d-lg-block text-italic text-white offset-top-0"></p>
                </div>
                <figcaption><a class="btn-java btn btn-block btn-rect text-lg-left" href="make-an-appointment.html">book an appointment</a></figcaption>
            </figure>

            <figure class="thumbnail-josip thumbnail-services offset-top-41 offset-lg-top-0">
                <a href="team-member.html"><img width="320" height="320" src="{{ url( $img_proc[4]->path ) }}" alt=""/></a>
                <div class="thumbnail-desc">
                    <h5 class="thumbnail-josip-title text-bold text-white">Cirugia dental</h5>
                    <p class="d-none d-lg-block text-italic text-white offset-top-0"></p>
                </div>
                <figcaption><a class="btn-java btn btn-block btn-rect text-lg-left" href="make-an-appointment.html">book an appointment</a></figcaption>
            </figure>
        </div>
    </section>
    <!--What makes us different-->
    <section class="section-xl">
        <div class="container"> 
            <h3>What makes us different</h3>
            <hr class="text-java divider-custom">
            <div class="row row-50">
                <div class="col-lg-4">
                    <!-- Icon Box Type 2-->
                    <div class="unit unit-sm unit-sm-horizontal unit-spacing-sm text-md-left">
                        <div class="unit-left"><span class="icon icon icon-lg icon-default icon-pills-01"></span></div>
                        <div class="unit-body">
                            <h5 class="text-bold text-bold text-primary">Equipo Médico de primera</h5>
                            <p>Utilizamos lo ultimo en equipo médico para brindar el mejor servicio en cirugías de primera calidad.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <!-- Icon Box Type 2-->
                    <div class="unit unit-sm unit-sm-horizontal unit-spacing-sm text-md-left">
                        <div class="unit-left"><span class="icon icon icon-lg icon-default icon-doctor-01"></span></div>
                        <div class="unit-body">
                            <h5 class="text-bold text-bold text-primary">Asistencia personalizada 24hrs</h5>
                            <p>Nunca estaras solo en tu proceso, te asesoraremos desde el inicio hasta el final de tu viaje.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <!-- Icon Box Type 2-->
                    <div class="unit unit-sm unit-sm-horizontal unit-spacing-sm text-md-left">
                        <div class="unit-left"><span class="icon icon icon-lg icon-default icon-medical-car-01"></span></div>
                        <div class="unit-body">
                            <h5 class="text-bold text-bold text-primary">Garantía de seguros y precios</h5>
                            <p>Siempre estaras seguro con nuestro seguro de intervenciones quirurgicas y garantía de nuestro precio especial.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- RD Parallax-->
    <section class="parallax-container" data-parallax-img="{{ url( $img_slider2[0]->path )}}">
        <div class="parallax-content section-xxl">
            <div class="container text-left">
                <div class="row justify-content-center justify-content-lg-end">
                    <div class="col-md-10 col-lg-8 col-xl-6">
                        <h2>All kinds<br class="d-none d-xl-inline-block">of diagnostics</h2>
                        <p class="offset-top-30 text-gray-darker">All the services you need. One convenient location. VISAGE Plastic Surgery Clinic has the region’s most comprehensive plastic surgery services available.</p>
                        <div class="offset-top-30"><a class="btn btn-ellipse button-primary" href="make-an-appointment.html">free consultation</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- main services-->
    <section class="section-xl">
        <div class="container">
            <h3>our team</h3>
            <hr class="text-java divider-custom">
            <div class="row row-40 justify-content-center text-lg-left">
                <div class="col-sm-8 col-md-6 col-lg-3">
                    <!-- Thumbnail Josip-->
                    <figure class="thumbnail-josip">
                        <a href="team-member.html"><img width="270" height="270" src="{{ url( $img_team[0]->path ) }}" alt=""/></a>
                        <div class="thumbnail-desc">
                            <h5 class="thumbnail-josip-title text-bold text-white">Katherine Wong</h5>
                            <p class="d-none d-lg-block text-italic text-white offset-top-0">Facial &amp; breast surgery</p>
                        </div>
                        <figcaption><a class="btn-java btn btn-block btn-rect text-lg-left" href="team-member.html">view full profile</a></figcaption>
                    </figure>
                </div>
                <div class="col-sm-8 col-md-6 col-lg-3">
                    <!-- Thumbnail Josip-->
                    <figure class="thumbnail-josip">
                        <a href="team-member.html"><img width="270" height="270" src="{{ url( $img_team[1]->path )}}" alt=""/></a>
                        <div class="thumbnail-desc">
                            <h5 class="thumbnail-josip-title text-bold text-white">Nicholas Bryant</h5>
                            <p class="d-none d-lg-block text-italic text-white offset-top-0">Body contouring</p>
                        </div>
                        <figcaption><a class="btn-java btn btn-block btn-rect text-lg-left" href="team-member.html">view full profile</a></figcaption>
                    </figure>
                </div>
                <div class="col-sm-8 col-md-6 col-lg-3">
                    <!-- Thumbnail Josip-->
                    <figure class="thumbnail-josip">
                        <a href="team-member.html"><img width="270" height="270" src="{{ url( $img_team[2]->path ) }}" alt=""/></a>
                        <div class="thumbnail-desc">
                            <h5 class="thumbnail-josip-title text-bold text-white">Victoria Morgan</h5>
                            <p class="d-none d-lg-block text-italic text-white offset-top-0">Facial contouring</p>
                        </div>
                        <figcaption><a class="btn-java btn btn-block btn-rect text-lg-left" href="team-member.html">view full profile</a></figcaption>
                    </figure>
                </div>
                <div class="col-sm-8 col-md-6 col-lg-3">
                    <!-- Thumbnail Josip-->
                    <figure class="thumbnail-josip">
                        <a href="team-member.html"><img width="270" height="270" src="{{ url( $img_team[3]->path )}}" alt=""/></a>
                        <div class="thumbnail-desc">
                            <h5 class="thumbnail-josip-title text-bold text-white">Walter Jenkins</h5>
                            <p class="d-none d-lg-block text-italic text-white offset-top-0">Cosmetic surgery</p>
                        </div>
                        <figcaption><a class="btn-java btn btn-block btn-rect text-lg-left" href="team-member.html">view full profile</a></figcaption>
                    </figure>
                </div>
            </div>
            <div class="offset-top-60"><a class="btn btn-ellipse button-primary" href="our-team.html">View all team</a></div>
            <!-- testimonials-->
        </div>
    </section>
    <section class="section-xl bg-lighter">
        <div class="container">
            <h3>Testimonials</h3>
            <hr class="text-java divider-custom">
            <div class="owl-carousel owl-carousel-default owl-carousel-class-light" data-loop="false" data-margin="15" data-items="1" data-dots="true" data-mouse-drag="false" data-lg-items="3" data-nav="false">
                <div class="owl-item">
                    <blockquote class="quote quote-classic">
                        <div class="quote-body">
                            <p class="h4 text-italic text-gray-dark font-size-15">
                                <q>The costs of treatments are very reasonable at Visage and I have always been impressed with the results. The fully medically qualified team at the clinic is professional, friendly and trustworthy.</q>
                            </p>
                            <div class="quote-meta unit unit-horizontal unit-spacing-sm unit-middle">
                                <div class="unit-left unit-item-narrow"><img class="img-circle quote-img" width="60" height="60" src="{{ url('img/users/user-betty')}}-wade-60x60.jpg" alt=""/></div>
                                <div class="unit-body unit-item-wide">
                                    <h5 class="quote-author text-capitalize text-bold text-primary">
                                        <cite class="text-normal">Betty Wade</cite>
                                    </h5>
                                    <p class="quote-desc text-capitalize text-gray text-italic">Regular Patient</p>
                                </div>
                            </div>
                        </div>
                    </blockquote>
                </div>
                <div class="owl-item">
                    <blockquote class="quote quote-classic">
                        <div class="quote-body">
                            <p class="h4 text-italic text-gray-dark font-size-15">
                                <q>Dr. Bryant is a wonderful Doctor, who makes you feel important and who takes time to listen, which most doctors don’t do. Loved him from the first visit! Very professional assistance.</q>
                            </p>
                            <div class="quote-meta unit unit-horizontal unit-spacing-sm unit-middle">
                                <div class="unit-left unit-item-narrow"><img class="img-circle quote-img" width="60" height="60" src="{{ url('img/users/user-bryan')}}-green-60x60.jpg" alt=""/></div>
                                <div class="unit-body unit-item-wide">
                                    <h5 class="quote-author text-capitalize text-bold text-primary">
                                        <cite class="text-normal">Stacy Williams</cite>
                                    </h5>
                                    <p class="quote-desc text-capitalize text-gray text-italic">Regular Patient</p>
                                </div>
                            </div>
                        </div>
                    </blockquote>
                </div>
                <div class="owl-item">
                    <blockquote class="quote quote-classic">
                        <div class="quote-body">
                            <p class="h4 text-italic text-gray-dark font-size-15">
                                <q>Wonderful people here! They listen to you, and are genuinely concerned about providing you the best care possible! I would recommend them to everyone!</q>
                            </p>
                            <div class="quote-meta unit unit-horizontal unit-spacing-sm unit-middle">
                                <div class="unit-left unit-item-narrow"><img class="img-circle quote-img" width="60" height="60" src="{{ url('img/users/user-joan')}}-anderson-60x60.jpg" alt=""/></div>
                                <div class="unit-body unit-item-wide">
                                    <h5 class="quote-author text-capitalize text-bold text-primary">
                                        <cite class="text-normal">Joan Anderson</cite>
                                    </h5>
                                    <p class="quote-desc text-capitalize text-gray text-italic">Regular Patient</p>
                                </div>
                            </div>
                        </div>
                    </blockquote>
                </div>
                <div class="owl-item">
                    <blockquote class="quote quote-classic">
                        <div class="quote-body">
                            <p class="h4 text-italic text-gray-dark font-size-15">
                                <q>The costs of treatments are very reasonable at Visage and I have always been impressed with the results. The fully medically qualified team at the clinic is professional, friendly and trustworthy.</q>
                            </p>
                            <div class="quote-meta unit unit-horizontal unit-spacing-sm unit-middle">
                                <div class="unit-left unit-item-narrow"><img class="img-circle quote-img" width="60" height="60" src="{{ url('img/users/user-betty')}}-wade-60x60.jpg" alt=""/></div>
                                <div class="unit-body unit-item-wide">
                                    <h5 class="quote-author text-capitalize text-bold text-primary">
                                        <cite class="text-normal">Betty Wade</cite>
                                    </h5>
                                    <p class="quote-desc text-capitalize text-gray text-italic">Regular Patient</p>
                                </div>
                            </div>
                        </div>
                    </blockquote>
                </div>
                <div class="owl-item">
                    <blockquote class="quote quote-classic">
                        <div class="quote-body">
                            <p class="h4 text-italic text-gray-dark font-size-15">
                                <q>Dr. Bryant is a wonderful Doctor, who makes you feel important and who takes time to listen, which most doctors don’t do. Loved him from the first visit! Very professional assistance.</q>
                            </p>
                            <div class="quote-meta unit unit-horizontal unit-spacing-sm unit-middle">
                                <div class="unit-left unit-item-narrow"><img class="img-circle quote-img" width="60" height="60" src="{{ url('img/users/user-bryan')}}-green-60x60.jpg" alt=""/></div>
                                <div class="unit-body unit-item-wide">
                                    <h5 class="quote-author text-capitalize text-bold text-primary">
                                        <cite class="text-normal">Stacy Williams</cite>
                                    </h5>
                                    <p class="quote-desc text-capitalize text-gray text-italic">Regular Patient</p>
                                </div>
                            </div>
                        </div>
                    </blockquote>
                </div>
                <div class="owl-item">
                    <blockquote class="quote quote-classic">
                        <div class="quote-body">
                            <p class="h4 text-italic text-gray-dark font-size-15">
                                <q>Wonderful people here! They listen to you, and are genuinely concerned about providing you the best care possible! I would recommend them to everyone!</q>
                            </p>
                            <div class="quote-meta unit unit-horizontal unit-spacing-sm unit-middle">
                                <div class="unit-left unit-item-narrow"><img class="img-circle quote-img" width="60" height="60" src="{{ url('img/users/user-joan')}}-anderson-60x60.jpg" alt=""/></div>
                                <div class="unit-body unit-item-wide">
                                    <h5 class="quote-author text-capitalize text-bold text-primary">
                                        <cite class="text-normal">Joan Anderson</cite>
                                    </h5>
                                    <p class="quote-desc text-capitalize text-gray text-italic">Regular Patient</p>
                                </div>
                            </div>
                        </div>
                    </blockquote>
                </div>
                <div class="owl-item">
                    <blockquote class="quote quote-classic">
                        <div class="quote-body">
                            <p class="h4 text-italic text-gray-dark font-size-15">
                                <q>The costs of treatments are very reasonable at Visage and I have always been impressed with the results. The fully medically qualified team at the clinic is professional, friendly and trustworthy.</q>
                            </p>
                            <div class="quote-meta unit unit-horizontal unit-spacing-sm unit-middle">
                                <div class="unit-left unit-item-narrow"><img class="img-circle quote-img" width="60" height="60" src="{{ url('img/users/user-betty')}}-wade-60x60.jpg" alt=""/></div>
                                <div class="unit-body unit-item-wide">
                                    <h5 class="quote-author text-capitalize text-bold text-primary">
                                        <cite class="text-normal">Betty Wade</cite>
                                    </h5>
                                    <p class="quote-desc text-capitalize text-gray text-italic">Regular Patient</p>
                                </div>
                            </div>
                        </div>
                    </blockquote>
                </div>
                <div class="owl-item">
                    <blockquote class="quote quote-classic">
                        <div class="quote-body">
                        <p class="h4 text-italic text-gray-dark font-size-15">
                            <q>Dr. Bryant is a wonderful Doctor, who makes you feel important and who takes time to listen, which most doctors don’t do. Loved him from the first visit! Very professional assistance.</q>
                        </p>
                        <div class="quote-meta unit unit-horizontal unit-spacing-sm unit-middle">
                            <div class="unit-left unit-item-narrow"><img class="img-circle quote-img" width="60" height="60" src="{{ url('img/users/user-bryan')}}-green-60x60.jpg" alt=""/></div>
                            <div class="unit-body unit-item-wide">
                                <h5 class="quote-author text-capitalize text-bold text-primary">
                                    <cite class="text-normal">Stacy Williams</cite>
                                </h5>
                                <p class="quote-desc text-capitalize text-gray text-italic">Regular Patient</p>
                            </div>
                        </div>
                        </div>
                    </blockquote>
                </div>
                <div class="owl-item">
                    <blockquote class="quote quote-classic">
                        <div class="quote-body">
                            <p class="h4 text-italic text-gray-dark font-size-15">
                                <q>Wonderful people here! They listen to you, and are genuinely concerned about providing you the best care possible! I would recommend them to everyone!</q>
                            </p>
                            <div class="quote-meta unit unit-horizontal unit-spacing-sm unit-middle">
                                <div class="unit-left unit-item-narrow"><img class="img-circle quote-img" width="60" height="60" src="{{ url('img/users/user-joan')}}-anderson-60x60.jpg" alt=""/></div>
                                <div class="unit-body unit-item-wide">
                                    <h5 class="quote-author text-capitalize text-bold text-primary">
                                        <cite class="text-normal">Joan Anderson</cite>
                                    </h5>
                                    <p class="quote-desc text-capitalize text-gray text-italic">Regular Patient</p>
                                </div>
                            </div>
                        </div>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>
    <!-- latest blog posts-->
    <section class="section-xl">
        <div class="container">
            <h3>latest blog posts</h3>
            <hr class="text-java divider-custom">
            <div class="row row-50 justify-content-center">
                <div class="col-md-6">
                    <!-- Post Modern-->
                    <article class="post post-modern post-modern-classic post-modern-classic-full">
                        <!-- Post media-->
                        <header class="post-media">
                            <img class="img-responsive img-cover" width="770" height="480" src="{{ url( $img_blog[0]->path ) }}" alt=""/>
                        </header>
                        <!-- Post content-->
                        <section class="post-content text-left">
                            <!-- Post Title-->
                            <div class="post-title offset-top-8">
                                <h4 class="text-bold"><a href="single-post.html">How to manage and prevent age spots this summer</a></h4>
                            </div>
                            <ul class="list-inline list-inline-dashed">
                                <li class="list-inline-item">June 21, 2018 at 8:12pm</li>
                                <li class="list-inline-item"><span class="text-dark">by </span><a class="text-java d-inline" href="blog-masonry.html">Amanda Wells</a></li>
                                <li class="list-inline-item"><a class="text-java" href="blog-masonry.html">Healthy Lifestyle</a></li>
                            </ul>
                            <!-- Post Body-->
                            <div class="post-body">
                                <p>Your guide to keeping brown spots at bay. It’s not uncommon to notice freckles and brown spots surfacing and/or darkening as the sunlight intensifies.</p>
                            </div>
                            <div class="tags group group-sm">
                                <a class="btn-tag btn btn-default" href="#">Healthy </a><a class="btn-tag btn btn-default" href="#">Lifestyle</a><a class="btn-tag btn btn-default" href="#">Summer</a>
                            </div>
                        </section>
                    </article>
                </div>
                <div class="col-md-6">
                    <!-- Post Modern-->
                    <article class="post post-modern post-modern-classic post-modern-classic-full">
                        <!-- Post media-->
                        <header class="post-media">
                            <img class="img-responsive img-cover" width="770" height="480" src="{{ url( $img_blog[1]->path ) }}" alt=""/>
                        </header>
                        <!-- Post content-->
                        <section class="post-content text-left">
                            <!-- Post Title-->
                            <div class="post-title offset-top-8">
                                <h4 class="text-bold"><a href="single-post.html">Why laser skin rejuvenation needs to be on your to-do list</a></h4>
                            </div>
                            <ul class="list-inline list-inline-dashed">
                                <li class="list-inline-item">June 21, 2018 at 8:12pm</li>
                                <li class="list-inline-item"><span class="text-dark">by </span><a class="text-java d-inline" href="blog-masonry.html">Amanda Wells</a></li>
                                <li class="list-inline-item"><a class="text-java" href="blog-masonry.html">Skin Care</a></li>
                            </ul>
                            <!-- Post Body-->
                            <div class="post-body">
                                <p>Laser treatments fix skin problems. Medical lasers have revolutionized how we fight premature skin ageing.</p>
                            </div>
                            <div class="tags group group-sm">
                                <a class="btn-tag btn btn-default" href="#">Health</a><a class="btn-tag btn btn-default" href="#">Treatments</a><a class="btn-tag btn btn-default" href="#">Laser</a>
                            </div>
                        </section>
                    </article>
                </div>
                <div class="col-12"><a class="btn btn-ellipse button-primary" href="blog-grid.html">View all blog posts</a></div>
            </div>
        </div>
    </section>
    <!-- Google map-->
    <section class="section-image-aside section-image-aside-left text-md-left bg-lighter">
        {{-- aqui va el mapa --}}
        
    </section>
</main>

@endsection


