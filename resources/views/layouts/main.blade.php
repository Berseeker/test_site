<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="keywords" content="Medical Paradise">
    <link rel="icon" href="{{ url('img/favicon.ico') }}" type="image/x-icon">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Medical Paradise') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/core.min.js') }}"> </script>
    <script src="{{ asset('js/script.js') }}"> </script>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Oswald%7CLato:400italic,400,700">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>

    <div class="page text-center">

        

        @yield('contenido')  
        
        <footer class="section-relative section-sm page-footer bg-lighter">
            <div class="container">
                <div class="row justify-content-md-center text-xl-left">
                    <div class="col-md-8 col-lg-12">
                        <div class="row row-50 justify-content-center">
                            <div class="col-sm-10 col-lg-4 text-left order-xl-3 inset-md-left-50">
                                <h6>Newsletter</h6>
                                <hr class="text-subline">
                                <p class="text-gray-darker"> Enter your email address to receive up-to-date news, new patient information and other useful stuff, delivered right to your inbox.</p>
                                <form class="rd-mailform rd-form-inline-modern" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                                    <div class="form-group form-wrap">
                                        <input class="input-sm input-white form-control text-gray-darker" placeholder="Your e-mail..." type="email" data-constraints="@Required @Email" name="email">
                                        <div class="form-button"> 
                                            <button class="btn btn-sm button-primary" type="submit">Subscribe</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-sm-10 text-sm-left col-lg-4 order-xl-2">
                                <h6>contact us</h6>
                                <hr class="text-subline">
                                <div class="text-center text-xl-left">
                                    <address class="contact-info d-md-inline-block text-left">
                                        <div class="p unit unit-spacing-xxs unit-horizontal">
                                            <div class="unit-left"><span class="icon icon-xxs mdi mdi-phone text-primary"></span></div>
                                            <div class="unit-body"><a class="text-gray-darker" href="tel:#">1-800-1234-567</a><span class="text-gray-darker">, </span><a class="text-gray-darker" href="tel:#">1-800-3214-321</a></div>
                                        </div>
                                        <div class="p unit unit-horizontal unit-spacing-xxs">
                                            <div class="unit-left"><span class="icon icon-xxs mdi mdi-map-marker text-primary"></span></div>
                                            <div class="unit-body"><a class="text-gray-darker" href="#">2130 Fulton Street San Diego, CA 94117-1080 USA</a></div>
                                        </div>
                                        <div class="p unit unit-spacing-xxs unit-horizontal offset-top-16">
                                            <div class="unit-left"><span class="icon icon-xxs mdi mdi-email-outline text-primary"></span></div>
                                            <div class="unit-body"><a class="text-primary" href="mailto:#">info@demolink.org</a></div>
                                        </div>
                                    </address>
                                </div>
                            </div>
                            <div class="col-sm-10 col-lg-4 order-xl-1">
                                <!-- Footer brand-->
                                <div class="footer-brand">
                                    <a href="index.html"><img width='203' height='70' class='img-responsive' src='{{url('img/medical-logo.png')}}' alt=''/></a>
                                </div>
                                <div class="offset-top-50 offset-md-top-90">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a class="icon fa fa-facebook icon-xxs icon-circle icon-white" href="#"></a></li>
                                        <li class="list-inline-item"><a class="icon fa fa-twitter icon-xxs icon-circle icon-white" href="#"></a></li>
                                        <li class="list-inline-item"><a class="icon fa fa-google-plus icon-xxs icon-circle icon-white" href="#"></a></li>
                                        <li class="list-inline-item"><a class="icon fa fa-rss icon-xxs icon-circle icon-white" href="#"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container offset-top-50 offset-md-top-60">
                <p class="text-gray text-lg-left">
                    &copy; <span class="copyright-year"></span> All Rights Reserved. <a class="text-gray" href="privacy.html">Terms of Use and Privacy Policy</a>
                </p>
            </div>
        </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
</body>
</html>
