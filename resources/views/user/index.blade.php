<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>GLOBALGROWTH</title>
    <meta name="title" content="Trend24fx">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta name="google-site-verification" content="p8186pMOV3vnGG_yjW67bUgtIgBZd-9RCkazNM5E5JA" />
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="front_assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="front_assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="front_assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="front_assets/css/style.css" rel="stylesheet">
   
</head>

<body>
    <div class="container-xxl  p-0">
      

        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="/" class="navbar-brand p-0">
                    <img src="front_assets/images/logo.png" class="w-100" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="/" class="nav-item nav-link active">Home</a>
                        <a href="/about" class="nav-item nav-link">About</a>
                        <a href="/contact" class="nav-item nav-link">Contact</a>
                        <!-- <a href="service.html" class="nav-item nav-link">Service</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="feature.html" class="dropdown-item">Features</a>
                                <a href="quote.html" class="dropdown-item">Free Quote</a>
                                <a href="team.html" class="dropdown-item">Our Team</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                <a href="404.html" class="dropdown-item">404 Page</a>
                            </div>
                        </div> -->

                    </div>
                    <a href="{{route('user.login')}}" class="btn btn-outline-light  rounded-pill  py-2 px-4 ms-lg-5">Login</a>
                    <a href="{{route('user.register')}}"
                        class="btn btn-outline-light  rounded-pill  py-2 px-4 ms-lg-5">Signup</a>

                </div>
            </nav>

            <div class="container-xxl bg-primary hero-header">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated zoomIn">Start Your Forex Trading with GlobalGrowths</h1>
                            <p class="text-white pb-3 animated zoomIn">Become the trader you want to be with our Next
                                Generation platform technology and personal client service.</p>
                            <a href="{{route('user.login')}}"
                                class="btn btn-outline-light rounded-pill border-2 py-3 px-5 animated slideInRight">LOGIN</a>
                            <a href="{{route('user.register')}}"
                                class="btn btn-outline-light rounded-pill border-2 py-3 px-5 animated slideInRight">SIGNUP</a>

                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid animated zoomIn" src="front_assets/images/hero.png" alt=""
                                style="filter: sepia(1);">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End --> 




        <!-- About Start -->
        <div class="container-xxl py-6">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow zoomIn" data-wow-delay="0.1s">
                        <img class="img-fluid" src="front_assets/images/about.png">
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">About Us</div>
                        <h2 class="mb-4">GlobalGrowths is an international online trading broker.</h2>
                        <p class="mb-4">
                            The company operates successfully around the globe and places great emphasis on providing
                            professional and reliable services to all our clients.GlobalGrowths is committed to provide the
                            highest standard of services with full transparency to clients and become a one-stop
                            destination for online trading. At GlobalGrowths we are proud of our state of the art order
                            execution, competitive spreads, and most importantly our round-the-clock service and
                            support. We strive to make our clients trading journey an enjoyable experience and value the
                            relationship of each of our account holders and business partners.</p>
                        <p class="mb-4">Our trading platform combines simplicity with cutting-edge technology and you
                            are only ever a few clicks from opening an account! We provide our traders with the
                            stability and accessibility you need for secure trading 24 hours a day, under all market
                            conditions.</p>
                        <!-- <div class="row g-3 mb-4">
                            <div class="col-12 d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-user-tie text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h6>Business Planning</h6>
                                    <span>Tempor erat elitr rebum at clita. Diam dolor ipsum amet eos erat ipsum lorem et sit sed stet lorem sit clita duo</span>
                                </div>
                            </div>
                            <div class="col-12 d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-chart-line text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h6>Financial Analaysis</h6>
                                    <span>Tempor erat elitr rebum at clita. Diam dolor ipsum amet eos erat ipsum lorem et sit sed stet lorem sit clita duo</span>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="">Read More</a> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Newsletter Start -->
        <div class="container-xxl bg-primary my-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container px-lg-5">
                <div class="row align-items-center p-5">
                    <div class="col-12 col-md-12 text-center">
                        <h3 class="text-white">Download Your MetaTrader 5</h3>
                        <small class="text-white">Trade from your desktop or on-the-go with the most powerful and
                            convenient trading platform for Windows, OS X and mobile devices.</small>

                    </div>

                </div>

                <div class="d-lg-flex d-md-flex justify-content-center text-center">
                    <a href="" download>
                        <div class="img">
                            <h1 class="display-1 text-white"><i class="fab fa-windows"></i></h1><b>Windows</b>

                        </div>
                    </a>
                    <!-- <div class="img">
                        <h1 class="display-1 text-white"> <i class="fab fa-apple"></i></h1><b>Mac</b>
 
                     </div> -->

                    <div class="img ">
                        <a href="">
                            <h1 class="display-1 text-white"> <i class="fab fa-android"></i> </h1><b>Android</b>
                        </a>

                    </div>
                    <!-- <div class="img">
                        <h1 class="display-1 text-white">  <i class="fab fa-apple"></i> </h1><b>Android</b>
 
                     </div> -->


                </div>

            </div>
        </div>
        <!-- Newsletter End -->


        <!-- Service Start -->
        <div class="container-xxl py-6">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">GlobalGrowth</div>
                    <h2 class="mb-5">EXPERIENCE NEXT LEVEL TRADING WITH GlobalGrowth
                    </h2>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon">
                                    <i class="fa fa-user-tie fa-2x"></i>
                                </div>
                                <a class="service-btn" href="">
                                    <i class="fa fa-link fa-2x"></i>
                                </a>
                            </div>
                            <div class="p-5">
                                <h5 class="mb-3">Trade Conveniently </h5>
                                <span>There are many benefits of trading forex, which include convenient market hours,
                                    high liquidity and the ability to trade on margin.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon">
                                    <i class="fa fa-chart-pie fa-2x"></i>
                                </div>
                                <a class="service-btn" href="">
                                    <i class="fa fa-link fa-2x"></i>
                                </a>
                            </div>
                            <div class="p-5">
                                <h5 class="mb-3">High Tech Security </h5>
                                <span> GlobalGrowth Provides Responsive and secure trading platform. Become a part of the
                                    best possible service on the foreign exchange market.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon">
                                    <i class="fa fa-chart-line fa-2x"></i>
                                </div>
                                <a class="service-btn" href="">
                                    <i class="fa fa-link fa-2x"></i>
                                </a>
                            </div>
                            <div class="p-5">
                                <h5 class="mb-3">Reliability </h5>
                                <span>GlobalGrowth Team maintain and support our valuable clients to Risk Management,
                                    Fastest Order Execution and Complete Transparency.</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Service End -->



        <!-- Newsletter Start -->
        <div class="container-xxl bg-primary my-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container px-lg-5">
                <div class="row align-items-center p-5">
                    <div class="col-12 col-md-12 text-center">
                        <h3 class="text-white">Start trading with GlobalGrowths. </h3>
                        <small class="text-white">Fast account opening in 3 simple steps </small>

                    </div>

                </div>

                <div class="d-lg-flex d-md-flex justify-content-center justify-content-between text-center">
                    <div class="section text-center">
                        <div class="rounded-circle">
                            1
                        </div>
                        <b>Register</b>
                        <p>Choose an account type and submit <br> your application </p>
                    </div>
                    <div class="section">

                        <div class="rounded-circle">
                            2
                        </div>
                        <b>Fund</b>
                        <p>Fund your account using a wide range <br> of funding methods.</p>
                    </div>

                    <div class="section">

                        <div class="rounded-circle">
                            3
                        </div>
                        <b>Trade
                        </b>
                        <p>Access 180+ instruments across all<br> asset classes on App

                        </p>
                    </div>



                </div>

            </div>
        </div>
        <!-- Newsletter End -->

        <div class="container-xxl py-5">
            <div class="container">
                <div class="col-12 g-5 text-cenetr">
                    <h1 class="text-uppercase mb-4 text-cenetr" style="text-align:center"> <b>GlobalGrowths IS COMMITTED TO
                            INTEGRITY &amp; INNOVATION</b></h1>
                </div>
                <div class="col-12 text-center">
                    <div class="tradingview-widget-container"
                        style="width:100%; height: 500px;overflow-x:auto;overflow-y:hidden">
                        <iframe scrolling="no" allowtransparency="true" frameborder="0"
                            src="https://s.tradingview.com/embed-widget/forex-cross-rates/?locale=en#%7B%22width%22%3A900%2C%22height%22%3A500%2C%22currencies%22%3A%5B%22EUR%22%2C%22USD%22%2C%22JPY%22%2C%22GBP%22%2C%22CHF%22%2C%22AUD%22%2C%22CAD%22%2C%22NZD%22%2C%22CNY%22%5D%2C%22isTransparent%22%3Afalse%2C%22colorTheme%22%3A%22dark%22%2C%22utm_source%22%3A%22zainfxfincroplimited.com%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22forex-cross-rates%22%7D"
                            style="box-sizing: border-box; height: 500px; width: 900px;"></iframe>
                        <style>
                            .tradingview-widget-copyright {
                                font-size: 13px !important;
                                line-height: 32px !important;
                                text-align: center !important;
                                vertical-align: middle !important;
                                /* @mixin sf-pro-display-font; */
                                font-family: -apple-system, BlinkMacSystemFont, 'Trebuchet MS', Roboto, Ubuntu, sans-serif !important;
                                color: #9db2bd !important;
                            }

                            .tradingview-widget-copyright .blue-text {
                                color: #2962FF !important;
                            }

                            .tradingview-widget-copyright a {
                                text-decoration: none !important;
                                color: #9db2bd !important;
                            }

                            .tradingview-widget-copyright a:visited {
                                color: #9db2bd !important;
                            }

                            .tradingview-widget-copyright a:hover .blue-text {
                                color: #1E53E5 !important;
                            }

                            .tradingview-widget-copyright a:active .blue-text {
                                color: #1848CC !important;
                            }

                            .tradingview-widget-copyright a:visited .blue-text {
                                color: #2962FF !important;
                            }
                        </style>
                    </div>
                </div>
            </div>
        </div>







        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s"
            style="margin-top: 6rem;">
            <div class="container">
                <!-- <div class="row g-5">
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Get In Touch</h5>
                        <p><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                        <p><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p><i class="fa fa-envelope me-3"></i>info@example.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Quick Link</h5>
                        <a class="btn btn-link" href="">About Us</a>
                        <a class="btn btn-link" href="">Contact Us</a>
                        <a class="btn btn-link" href="">Privacy Policy</a>
                        <a class="btn btn-link" href="">Terms & Condition</a>
                        <a class="btn btn-link" href="">Career</a>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Popular Link</h5>
                        <a class="btn btn-link" href="">About Us</a>
                        <a class="btn btn-link" href="">Contact Us</a>
                        <a class="btn btn-link" href="">Privacy Policy</a>
                        <a class="btn btn-link" href="">Terms & Condition</a>
                        <a class="btn btn-link" href="">Career</a>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Newsletter</h5>
                        <p>Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulpu</p>
                        <div class="position-relative w-100 mt-3">
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Your Email" style="height: 48px;">
                            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">GlobalGrowths</a>, All Right Reserved.

                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a class="border-bottom" href="https://htmlcodex.com">GlobalGrowths</a>
                            <br>Distributed By: <a class="border-bottom" href="https://themewagon.com"
                                target="_blank">GlobalGrowths</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="front_assets/lib/wow/wow.min.js"></script>
    <script src="front_assets/lib/easing/easing.min.js"></script>
    <script src="front_assets/lib/waypoints/waypoints.min.js"></script>
    <script src="front_assets/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="front_assets/js/main.js"></script>
</body>

</html>