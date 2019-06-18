@extends('layouts.main')

@section('contenido')

@include('includes.header')

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

@include('includes.body')

@endsection




