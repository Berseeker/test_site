<header class="page-head">
   
    <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-minimal rd-navbar-light" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-lg-auto-height="true" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-inner">
                <div class="rd-navbar-top-panel">
                    <address class="contact-info d-md-inline-block text-left offset-none">
                    <div class="p unit unit-spacing-xs unit-horizontal">
                        <div class="unit-left"><span class="icon icon-xs icon-circle icon-gray-lighter mdi mdi-phone text-primary"></span></div>
                        <div class="unit-body"><a href="tel:#" style="padding-top:9px;">99-8386-7588</a>{{-- <br/><a href="tel:#"> 1-800-3214-654</a> --}}</div>
                    </div>
                    </address>
                    
                    <div class="rd-navbar-brand d-none d-lg-inline-block"> 
                        <a href="index.html"><img width='203' height='70' class='img-responsive' src='{{ url('img/medical-logo.png') }}' alt=''/></a>
                    </div>
                    <address class="contact-info d-md-inline-block text-left offset-top-10 offset-md-top-0">
                    <div class="p unit unit-horizontal unit-spacing-xs">
                        <div class="unit-left"><span class="icon icon-xs icon-circle icon-gray-lighter mdi mdi-map-marker text-primary"></span></div>
                        <div class="unit-body"><a href="#">Camara de comercio norte<br/>Mérida Yucatan</a></div>
                    </div>
                    </address>
                </div>
               
                <div class="rd-navbar-panel">
                    
                    <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap"><span></span></button>
                  
                    <div class="rd-navbar-brand d-lg-none">
                        <a href="index.html"><img width='203' height='70' class='img-responsive' src='{{ url('img/medical-logo.png') }}' alt=''/></a>
                    </div>
                    <button class="rd-navbar-top-panel-toggle" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-top-panel"><span></span></button>
                </div>
                <div class="rd-navbar-menu-wrap">
                    <div class="rd-navbar-nav-wrap">
                        <div class="rd-navbar-mobile-scroll">
                            
                            <div class="rd-navbar-mobile-brand">
                                <a href="index.html"><img width='203' height='70' class='img-responsive' src='{{ url('img/medical-logo.png') }}' alt=''/></a>
                            </div>
                            <div class="form-search-wrap">
                                
                                <form class="form-search rd-search" action="search-results.html" method="GET">
                                    <div class="form-group">
                                        <label class="form-label form-search-label form-label-sm" for="rd-navbar-form-search-widget">Search</label>
                                        <input class="form-search-input form-control #{inputClass}" id="rd-navbar-form-search-widget" type="text" name="s" autocomplete="off"/>
                                    </div>
                                    <button class="form-search-submit" type="submit"><span class="fa fa-search"></span></button>
                                </form>
                            </div>
                            
                            <ul class="rd-navbar-nav">
                                @foreach ($sections as $section)
                                    @if ($section->name == 'Procedimientos')
                                        <li>
                                            <a href="{{ url( $section->path )}}"><span>{{ strtoupper($section->name) }}</span></a>
                                            <ul class="rd-navbar-dropdown">
                                                <li><a href="grid-gallery.html"><span class="text-middle">Grid Gallery</span></a></li>
                                                <li><a href="masonry-gallery.html"><span class="text-middle">Masonry Gallery</span></a></li>
                                                <li><a href="cobbles-gallery.html"><span class="text-middle">Cobbles Gallery</span></a></li>
                                            </ul>
                                        </li> 
                                    @else

                                        <li> <a href="{{ url( $section->path )}}"><span>{{ strtoupper($section->name) }}</span></a></li>
                                    @endif
                                    
                                @endforeach
                                
                            </ul>
                        </div>
                    </div>
                    
                    <div class="rd-navbar-search">
                        <a class="rd-navbar-search-toggle mdi" data-rd-navbar-toggle=".rd-navbar-menu-wrap,.rd-navbar-search" href="#"><span></span></a>
                        <form class="rd-navbar-search-form search-form-icon-right rd-search" action="search-results.html" data-search-live="rd-search-results-live" method="GET">
                            <div class="form-group">
                                <label class="form-label" for="rd-navbar-search-form-input">Type and hit enter...</label>
                                <input class="rd-navbar-search-form-input form-control form-control-gray-lightest" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off"/>
                            </div>
                            <div class="rd-search-results-live" id="rd-search-results-live"></div>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>