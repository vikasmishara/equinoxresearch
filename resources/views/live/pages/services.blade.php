<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Equinox Research | Services </title>
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

    <!-- job feature start -->
    <section class="breadcrumb-area">
        <div class="breadcrumb-widget  pt-145 pb-200" style="background-image: url('{{asset('dist/img/breadcrumb/bg-2.png')}}');">
            <div class="container">
                <div class="row pb-100 pb-sm-0">
                    <div class="col-md-12">
                        <div class="breadcrumb-content pt-140 pb-15">
                            <h1>Equinox Research | Services</h1>
                            <ul>
                                <li><a href="{{route('live.index')}}l">home</a></li>
                                <li><a href="{{route('live.pages.services')}}">Services</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- job feature end -->

    @include('live.include.services-new')

    @include('live.include.package-new')

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