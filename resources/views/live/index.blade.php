<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Equinox Research | Home </title>
    <link rel="shortcut icon" href="{{asset('dist/img/favicon.png')}}" type="image/x-icon">

    <!-- CSS here -->
 @include('live.include.top_scripts')
</head>

<body data-spy="scroll" data-offset="70">
<!-- Preloader -->
@include('live.include.preloader')
<!-- Header -->
@include('live.include.top_navigation')
<!-- Header end-->


<main>

    <!-- banner section -->
@include('live.include.slider.home_slider_banner_two')
    <!-- banner section end-->

    <!-- marketplace logo section start-->
    {{--<section class="mplace-logo bg_white pt-80 pb-85">
        <div class="container">
            <div class="row gy-lg-0 gy-4">
                <div class="col-lg-3  wow fadeInLeft pe-0 mr-60">
                    <p>SEBI REGISTERED
                        RESEARCH ANALYST INH000008288</p>
                </div>
                <div class="col-lg-8 border-start text-center pl-lg-60">
                    <div class="row gy-md-0 gy-4 align-items-center h-100">
                        <div class="col-md-3 col-6">
                            <a href="#"><img class="img-fluid wow fadeInRight" data-wow-delay="0.1s"
                                             src="{{asset('dist/img/card/company-logo-1.png')}}" alt="logo"></a>
                        </div>
                        <div class="col-md-3 col-6">
                            <a href="#"><img class="img-fluid wow fadeInRight" data-wow-delay="0.3s"
                                             src="{{asset('dist/img/card/company-logo-2.png')}}" alt="logo"></a>
                        </div>
                        <div class="col-md-3 col-6">
                            <a href="#"><img class="img-fluid wow fadeInRight" data-wow-delay="0.5s"
                                             src="{{asset('dist/img/card/company-logo-3.png')}}" alt="logo"></a>
                        </div>
                        <div class="col-md-3 col-6">
                            <a href="#"><img class="img-fluid wow fadeInRight" data-wow-delay="0.7s"
                                             src="{{asset('dist/img/card/company-logo-4.png')}}" alt="logo"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}
    <!-- marketplace logo section end-->

    @include('live.include.services-new')

    @include('live.include.package-new')

    @include('live.include.testimonials')




</main>

<!-- footer -->
@include('live.include.footer')
<!-- footer end -->

<!-- Back to top button -->
<a id="back-to-top" title="Back to Top"></a>

<!-- JS here -->
@include('live.include.bottom_scripts')
</body>

</html>