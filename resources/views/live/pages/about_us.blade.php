<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Equinox Research | About US </title>
    <link rel="shortcut icon" href="{{asset('dist/img/favicon.png')}}" type="image/x-icon">

    <!-- CSS here -->
    @include('live.include.top_scripts')
</head>

<body>
<!-- Preloader -->
@include('live.include.preloader')
        <!-- Header -->
@include('live.include.top_navigation')
        <!-- Header end-->


<main>
    <!-- Banner start -->
    <section class="banner-area-2 pt-145" style="background-image: url('{{asset('dist/img/banner/about-bg.png')}}');">
        <div class="container">
            <div class="row align-items-center pt-130 pb-140">
                <div class="col-xl-6 col-lg-8">
                    <div class="banner-content py-5">
                        <div class="section-title text-start">
                            <span class="short-title wow fadeInUp" style="color: #ffffff;">ABOUT US</span>

                            <h1 class="wow fadeInUp mb-0" data-wow-delay='0.2s' style="color: white">Equinox Research for, achieving
                                different</h1>
                        </div>
                        <a class="theme-btn-2 theme-btn-primary mt-45 wow fadeInUp" data-wow-delay="0.4s" href="{{route('live.pages.services')}}"
                           style="color: white">
                                <span class="arrow">
                                    <span class="horizontal-line"></span>
                                </span>View our Services
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner end -->

    <section class="bg_white pt-90 pb-40 ">
        <div class="container">
            <div class="description-widget">
                <div class="row">
                    <div class="col-md-4">
                        <div class="desc-title text-end bg_primary">
                            <h2>A journey that started with a belief to Do Different</h2>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="desc-text pl-lg-10">
                            <p class="mt-35">Pankaj Ramanuj Randad is an Indian-born Entrepreneur and Stocks Analyst &
                                Consultant. He is the founder of Equinox Research and Advisors, Pune – a consulting firm
                                offering a multitude of quality services to its clients in the areas of Stocks, Futures
                                & Options, Equity and more. Before founding Equinox, Pankaj worked in prominent roles in
                                eminent organizations including Motilal Oswal, PhillipCapital, and IndiaNivesh. He has
                                gained immense exposure to technical analysis of stocks while working on hundreds of
                                them over a career spanning 15+ years.</p>

                            <p class="mt-20">Pankaj is a post graduate in Marketing Management and is a SEBIregistered
                                Research Analyst (registration number – INH000008288). Coming from a Maheshwari business
                                family in Latur, Maharashtra, he is fluent in Hindi, English, Marathi, Marwadi and
                                Gujarati and is based in Pune, India. His interests and passions lie in varied
                                sports/games including Chess (where he was an inter-university Table-A player),
                                Swimming, Snooker and Cricket.</p>

                            <p class="mt-20">Of the things he has accomplished during his career, Pankaj particularly liked Futures &
                                options and gravitated toward it more and more. Over the years, he has gained extensive
                                expertise in this area. Today, as the Founder of Equinox, Pankaj is helping UHNIs, HNIs
                                and corporates in the areas of:</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics start -->
    <section class="statistics-area pt-135 pb-140 bg_white">
        <div class="container">
            <div class="row pt-30 pb-30 gy-4 gy-lg-0">
                <div class="col-lg-6 ">
                    <div class="statistics-widget-2 wow fadeInRight" data-wow-delay="0.7s">
                        <div class="widget-content widget-6"
                             style="background-image: url('{{asset('dist/img/statistics/img-2.png')}}')">
                            <h2>Futures and Options </h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ">
                    <div class="statistics-widget-2 wow fadeInRight" data-wow-delay="0.7s">
                        <div class="widget-content widget-6"
                             style="background-image: url('{{asset('dist/img/statistics/img-2.png')}}')">
                            <h2>Futures and Options </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gy-4 gy-md-0">
                <div class="col-md-6">
                    <div class="statistics-widget-2 wow fadeInLeft" data-wow-delay="0.1s">
                        <div class="widget-content widget-7"
                             style="background-image: url('{{asset('dist/img/statistics/img-3.png')}}');">
                            <h1 class="stat-counter">Equity</h1>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="statistics-widget-2 wow fadeInLeft" data-wow-delay="0.1s">
                        <div class="widget-content widget-7"
                             style="background-image: url('{{asset('dist/img/statistics/img-3.png')}}');">
                            <h1 class="stat-counter">Commodities</h1>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Statistics end -->

    <!-- Recgnition start -->
    {{--<section class="recognition-area bg_white pt-135 pb-140">
        <div class="container">
            <div class="section-title text-start">
                    <span class="short-title mt-0 wow fadeInUp">
                        Recognition
                    </span>

                <h2 class="mb-0 wow fadeInUp" data-wow-delay="0.2s">Milestones and Accolades</h2>
            </div>

            <div class="recognition-widget pt-70">
                <div class="row gy-4 gy-lg-0">
                    <div class="col-lg-3 col-5">
                        <div class="widget-navigation wow fadeInUp pe-lg-4" data-wow-delay="0.1s">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="2020-tab" data-bs-toggle="tab" href="#twenty"
                                       role="tab" aria-controls="twenty" aria-selected="true">2020</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="2019-tab" data-bs-toggle="tab" href="#nineteen"
                                       role="tab" aria-controls="nineteen" aria-selected="false">2019</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="2018-tab" data-bs-toggle="tab" href="#eighteen"
                                       role="tab" aria-controls="eighteen" aria-selected="false">2018</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="2017-tab" data-bs-toggle="tab" href="#seventeen"
                                       role="tab" aria-controls="seventeen" aria-selected="false">2017</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link " id="2016-tab" data-bs-toggle="tab" href="#sixteen"
                                       role="tab" aria-controls="sixteen" aria-selected="false">2016</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link " id="2015-tab" data-bs-toggle="tab" href="#fifteen"
                                       role="tab" aria-controls="fifteen" aria-selected="false">2015</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link " id="2014-tab" data-bs-toggle="tab" href="#lessfifteen"
                                       role="tab" aria-controls="lessfifteen" aria-selected="false">2014 and
                                        before</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-7">
                        <div class="tab-content wow fadeInUp" data-wow-delay="0.3s" id="myTabContent">
                            <div class="tab-pane fade show active" id="twenty" role="tabpanel"
                                 aria-labelledby="2020-tab">
                                <h3>2020</h3>

                                <p>The First Mauritian Bank to join the GRI Community</p>

                                <p>Instant account opening with a Customer On-boarding App</p>
                            </div>
                            <div class="tab-pane fade" id="nineteen" role="tabpanel" aria-labelledby="2019-tab">
                                <h3>2019</h3>

                                <p>The First Mauritian Bank to join the GRI Community</p>

                                <p>Instant account opening with a Customer On-boarding App</p>
                            </div>
                            <div class="tab-pane fade" id="eighteen" role="tabpanel" aria-labelledby="2018-tab">
                                <h3>2018</h3>

                                <p>The First Mauritian Bank to join the GRI Community</p>

                                <p>Instant account opening with a Customer On-boarding App</p>
                            </div>
                            <div class="tab-pane fade" id="seventeen" role="tabpanel" aria-labelledby="2017-tab">
                                <h3>2017</h3>

                                <p>The First Mauritian Bank to join the GRI Community</p>

                                <p>Instant account opening with a Customer On-boarding App</p>
                            </div>
                            <div class="tab-pane fade" id="sixteen" role="tabpanel" aria-labelledby="2016-tab">
                                <h3>2016</h3>

                                <p>The First Mauritian Bank to join the GRI Community</p>

                                <p>Instant account opening with a Customer On-boarding App</p>
                            </div>
                            <div class="tab-pane fade" id="fifteen" role="tabpanel" aria-labelledby="2015-tab">
                                <h3>2015</h3>

                                <p>The First Mauritian Bank to join the GRI Community</p>

                                <p>Instant account opening with a Customer On-boarding App</p>
                            </div>
                            <div class="tab-pane fade" id="lessfifteen" role="tabpanel" aria-labelledby="2014-tab">
                                <h3>2014 and before</h3>

                                <p>The First Mauritian Bank to join the GRI Community</p>

                                <p>Instant account opening with a Customer On-boarding App</p>

                                <p>The First Mauritian Bank to join the GRI Community</p>

                                <p>Instant account opening with a Customer On-boarding App</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-4 col-lg-5 offset-xl-1 pr-lg-35 pl-lg-35">
                        <div class="accolades-widget wow fadeInUp" data-wow-delay="0.5s">
                            <div class="accolades-header d-flex justify-content-between align-items-end">
                                <h2>Awards</h2>
                                <img src="{{asset('dist/img/recognition/icon.svg')}}" alt="icon">
                            </div>
                            <div class="accolades-content">
                                <ul>
                                    <li class="">
                                        <p class="subtitle">CITI BANK</p>

                                        <p class="text">Straight-Through processing (STP) Excellence Award</p>
                                    </li>
                                    <li class="mt-3">
                                        <p class="subtitle">MARCOM AWARDS</p>

                                        <p class="text">Platinum Winner for ‘The Believers’ Campaign</p>
                                    </li>
                                    <li class="mt-3">
                                        <p class="subtitle">BURJ CEO AWARDS</p>

                                        <p class="text">Most Innovative Bank in Mauritius</p>
                                    </li>
                                    <li class="mt-3">
                                        <p class="subtitle">GLOBAL BRANDS MAGAZINE</p>

                                        <p class="text">Most Innovative Treasury Services</p>

                                        <p class="text">Best Banking Brand in Mauritius</p>

                                        <p class="text">Best Credit Card Rewards Program</p>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}
    <!-- Recgnition end -->

    <!-- Leadership Team start -->
    <section class="leadership-area pt-135 pb-140 bg_disable">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-sm-8">
                    <div class="section-title text-start wow fadeInRight">
                        <span class="short-title mt-0">Leadership</span>

                        <h2 class="mb-0">Meet our leadership team</h2>
                    </div>
                </div>
            </div>

            <div class="row pt-65 gy-md-0 gy-4">
                <div class="col-lg-6">
                    <div class="single-leadership-widget wow fadeInUp " data-wow-delay="0.1s">
                        <a href="#">
                            <img src="{{asset('dist/img/leadership/img-1.png')}}" alt="leader-1">

                            <div class="leader-info">
                                <h5>Atul Ausekar</h5>

                                <p>Designation: Channel Partner</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="single-leadership-widget wow fadeInUp " data-wow-delay="0.3s">
                        <a href="#">
                            <img src="{{asset('dist/img/leadership/img-2.png')}}" alt="leader-2">

                            <div class="leader-info">
                                <h5>Pankaj Randa</h5>

                                <p>Founder and CEO (EQUINOX RESEARCH AND ADVISORY) </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Leadership Team end -->

    <!-- Call To Action start -->
  {{--  <section class="cta-area-2 pt-80 pb-80">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="cta-content text-black wow fadeInRight">
                        <h2>Our latest results</h2>

                        <p>Access Equinox Research’s latest quarterly results and other financial documents.</p>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="cta-content mt-3 mt-sm-0 text-sm-end text-center">
                        <a href="#" class="theme-btn wow fadeInLeft">See results</a>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}
    <!-- Call To Action end -->
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