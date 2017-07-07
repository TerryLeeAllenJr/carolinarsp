<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Carolina RSP: Roofing Siding Painting </title>
    <!--plugins-->
    <link href="/web/css/plugins/plugins.css" rel="stylesheet">
    <!--Custom css-->
    <link href="/web/css/style.css" rel="stylesheet">
    <!--master slider-->
    <link rel="stylesheet" href="/web/masterslider/style/masterslider.css"/>
    <link href="/web/masterslider/skins/default/style.css" rel='stylesheet'>
    <link href="/web/css/master-slider-custom.css" rel="stylesheet" type="text/css">
    <link href="/web/cubeportfolio/css/cubeportfolio.min.css" rel='stylesheet'>
</head>
<body>
<div id="preloader">
    <div id="preloader-inner"></div>
</div><!--/preloader-->

<nav class="navbar navbar-toggleable-sm navbar-inverse bg-inverse yamm" id="primaryNav">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="/"><img src="/web/img/logo-white.png" class="img-fluid" alt="CarolinaRSP Roofing Siding Painting"></a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="nav navbar-nav ml-auto">

                <li class="{{($page == 'home') ? 'active' : ''}} dropdown nav-item" class="">
                    <a href="/" class="nav-link">Home</a>
                </li>

                <li class="{{($page == 'services') ? 'active' : ''}} dropdown nav-item">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">Services</a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="/services/roofing" class="dropdown-item">Roofing</a></li>
                        <li><a href="/services/siding" class="dropdown-item">Siding</a></li>
                        <li><a href="/services/painting" class="dropdown-item">Painting</a></li>
                        <li><a href="/services/gutters" class="dropdown-item">Gutters</a></li>
                    </ul>
                </li>

                <li class="{{($page == 'about-us') ? 'active' : ''}} dropdown nav-item">
                    <a href="/about-us" class="nav-link">About Us</a>
                </li>

                <li class="{{($page == 'contact') ? 'active' : ''}} dropdown nav-item">
                    <a href="/contact" class="nav-link">Contact</a>
                </li>
                <!-- TODO: Setup facebook and linkedin pages, then activate the links.
                <li class="social-nav nav-item"><a href="#" class="nav-link"><i class="ion-social-facebook"></i></a></li>
                <li class="social-nav nav-item"><a href="#" class="nav-link"><i class="ion-social-linkedin"></i></a></li>
                -->

            </ul>
        </div>

    </div>
</nav><!--nav end-->
<div class="clearfix"></div>

@yield('content')

<!--footer-->
<div id="footer">
    <div class="container">
        <div class="row">

            <div class="col-md-4 margin-btm-20">
                <div class="footer-col">
                    <h3>Contact Info</h3>
                    <!-- TODO: Get Joe's PO BOX Address or use home address -->
                    <p><i class="ion-home"></i> 2764 Pleasnt Road Suite A # 10342</p>
                    <p>Fort Mill, SC 29708</p>
                    <a><i class="ion-iphone"></i> <a href="tel:7048041856">(704) 804-1856</a></p>
                    <p><i class="ion-email"></i> <a href="mailto:joe@carolinarsp.com">joe@carolinarsp.com</a></p>
                </div>
                <div class="space-20"></div>
            </div><!--col-4 end-->

            <div class="col-md-8">
                <div class="footer-col">
                    <h3>Get in touch</h3>
                    <form action="/contact" method="POST">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Name..." name="name">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" placeholder="Email..." name="email">
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="Subject..." name="subject">
                            </div>
                            <div class="col-md-12">
                                <textarea class="form-control" placeholder="Massage..." rows="7" name="message"></textarea>
                            </div>
                            @if(count($errors) > 0)
                                @foreach ($errors->all() as $error)
                                    <div class="col-md-12 text-right error">
                                        <p class="text-danger">{{$error}}</p>
                                    </div>
                                @endforeach
                            @endif
                            <div class="col-md-12 text-right">
                                <button type="submit" class="btn btn-lg btn-white">Send Message</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div><!--get in touch col end-->

        </div><!--footer main row end-->
        <div class="space-70"></div>
        <div class="row">
            <div class="col-md-12 text-center footer-bottom">
                <a href="index.html"> <img src="/web/img/logo-white.png" alt=""></a>
                <div class="space-20"></div>
                <span>
                    &copy;{{date('Y',time())}}. All right reserved. Website by
                    <a href="http://www.lee-allen.com">Lee Allen</a>
                </span>
            </div>
        </div><!--footer copyright row end-->
    </div><!--container-->
</div><!--footer main end-->
<a href="#" class="scrollToTop"><i class="ion-android-arrow-dropup-circle"></i></a>
<!--back to top end-->

<!-- jQuery plugins. -->
<script src="/web/js/plugins/plugins.js"></script>
<script src="/web/js/app.js"></script>
<!--page template scripts-->
<script src="/web/masterslider/masterslider.min.js"></script>
<script src="/web/js/masterslider-custom.js" type="text/javascript"></script>
<script src="/web/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
<script>
    (function ($, window, document, undefined) {
        'use strict';

        // init cubeportfolio
        $('#js-grid-slider-thumbnail').cubeportfolio({
            layoutMode: 'slider',
            drag: true,
            auto: false,
            autoTimeout: 5000,
            autoPauseOnHover: true,
            showNavigation: false,
            showPagination: false,
            rewindNav: true,
            scrollByPage: true,
            gridAdjustment: 'responsive',
            mediaQueries: [{
                width: 0,
                cols: 1,
            }],
            gapHorizontal: 0,
            gapVertical: 0,
            caption: '',
            displayType: 'fadeIn',
            displayTypeSpeed: 400,
            plugins: {
                slider: {
                    pagination: '#js-pagination-slider',
                    paginationClass: 'cbp-pagination-active',
                }
            },
        });
    })(jQuery, window, document);
</script>

@if(count($errors) > 0)
    @include(
        'web.includes.modalSmall', [
            'title' => 'Error Submitting Form',
            'body' => 'There were some errors submitting your form. Please review your inputs and try again.'
            ])
@endif

</body>
</html>