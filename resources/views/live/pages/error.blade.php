<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Page Not Found </title>
    <link rel="shortcut icon" href="{{asset('dist/img/favicon.png')}}" type="image/x-icon">

    <!-- CSS here -->
    @include('live.include.top_scripts')
</head>

<body>
<!-- Preloader -->
@include('live.include.preloader')


<main>

    <!-- Error start -->
    <section class="error_area bg_color pb-50 overflow-hidden">
        <div class="error_dot one"></div>
        <div class="error_dot two"></div>
        <div class="error_dot three"></div>
        <div class="error_dot four"></div>
        <div class="container">
            <div class="error_content_two text-center">
                <div class="error_img">
                    <img class="position-absolute error_shap" src="{{asset('dist/img/error/404_bg.png')}}" alt="">
                    <div class="one wow clipInDown" data-wow-delay="1s"><img class="img_one"
                                                                             src="{{asset('dist/img/error/404_two.png')}}" alt=""></div>
                    <div class="two wow clipInDown" data-wow-delay="1.5s"><img class="img_two"
                                                                               src="{{asset('dist/img/error/404_three.png')}}" alt=""></div>
                    <div class="three wow clipInDown" data-wow-delay="1.8s"><img class="img_three"
                                                                                 src="{{asset('dist/img/error/404_one.png')}}" alt=""></div>
                </div>
                <h2 class="wow fadeIn">Error. We can’t find the page you’re looking for.</h2>
                <p>Sorry for the inconvenience. Go to our homepage or check out our latest trade tips.</p>
                <a href="{{route('live.index')}}" class="action_btn theme-btn"><i class="arrow_left"></i>Back to Home
                    Page</a>
            </div>
        </div>
    </section>
    <!-- Error end -->
</main>



<!-- JS here -->
@include('live.include.bottom_scripts')
</body>

</html>