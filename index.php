<!-- get_header('Page Name','Title')-->
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>TunezWallet</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.materialdesignicons.com/2.8.94/css/materialdesignicons.min.css">

    <link rel="icon" type="image/png" href="assets/images/logo.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="assets/images/logo.png">

    <link rel="stylesheet" href="assets/css/fontawesome-min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/xsIcon.css">
    <link rel="stylesheet" href="assets/fonts/icomoon/style.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/navigation.css">
    <link rel="stylesheet" href="assets/css/animate.css">

    <!--Theme custom css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!--Theme Responsive css-->
    <link rel="stylesheet" href="assets/css/responsive.css" />

    <!-- use only color version -->
    <!-- <link rel='stylesheet' type='text/css' href='assets/css/colors/color-1.css' > -->
</head>

<body>
    <!--[if lt IE 10]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

    <!-- preloader  -->

    <div class="preloader" id="preloader">
        <svg class="xs-preload" viewBox="0 0 120 120" width="120px" height="120px">
            <circle class="inner" cx="60" cy="60" r="32" />
            <circle class="middle" cx="60" cy="60" r="38" />
            <circle class="outer" cx="60" cy="60" r="44" />
        </svg>
        <!-- <a class="cencel-preloader" href="">Cancel Preloader</a> -->
    </div>

    <!-- preloader end  -->


    <!-- reg/login form -->
    <div class="xs-sidebar-group info-group">
        <div class="xs-overlay xs-bg-black"></div>
        <div class="xs-sidebar-widget">
            <div class="sidebar-widget-container">
                <div class="widget-heading">
                    <a href="#" class="close-side-widget">
                        <i class="icon icon-cross"></i>
                    </a>
                </div>
                <div class="sidebar-textwidget" style="margin-bottom: 100px;">
                    <div class="sidebar-logo-wraper">
                        <img src="assets/images/logo.png" alt="sidebar logo">
                    </div>
                    <div class="subscribe-from">
                        <p id="regtext">Join the Airdrop Campaign!</p>
                        <form class="needs-validation">
                            <div class="col-xs-12 mb-3 mt-3">
                                <label for="validationCustom01">Email</label>
                                <input type="email" class="form-control" 
                                       id="email" placeholder="Email" required>
                                <div id="noemail" class="invalid-feedback">
                                    Please provide a valid email address.
                                </div>
                                <div id="takenemail" class="invalid-feedback">
                                    Email address already taken.
                                </div>
                            </div>
                            <div class="col-xs-12 mb-3 mt-3">
                                <label for="validationCustom02">Password</label>
                                <input type="password" class="form-control" 
                                       id="password" placeholder="Password" required>
                                <div id="nopass" class="invalid-feedback">
                                    Please provide a password.
                                </div>
                            </div>
                            <div class="col-xs-12 mb-4 mt-3" id="referraldiv">
                                <label for="validationCustom03">Referral Code</label>
                                <input type="text" class="form-control" 
                                       id="referral" placeholder="Referral Code">
                                <div id="noref" class="invalid-feedback">
                                    Invalid referral code.
                                </div>
                            </div>
                            <button id="formbtn" class="btn btn-primary" type="submit"></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="z-index: 999999; display: none;" id="alert" class="alert alert-warning alert-dismissible fade show" role="alert">
        <span id="alertbox"></span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    </div>
    <!-- END reg form -->



    <!-- header section start -->
    <header class="header">
        <div class="container" style="padding: 0; margin:0; max-width:100%;">
            <nav id="navigation1" class="navigation bg-dark">

                <div class="nav-header">
                    <a class="text-light nav-brand" href="index.html">
                        <img width="90px" src="assets/images/logo.png" alt="logo">
                        TunezWallet
                    </a>
                    <div class="nav-toggle"></div>
                </div>

                <div class="bg-dark nav-menus-wrapper xs-menu">
                    <ul class="header-right align-to-right" style="display: flex; line-height: 43px;">

                        <li>
                            <a href="#" class="text-light navSidebar-button-reg">
                                <i class="fa fa-user-plus"></i>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="text-light navSidebar-button-log">
                                <i class="fa fa-sign-in"></i>
                            </a>
                        </li>

                        <li>
                            <a class="text-light" href="dashboard.php">
                                <i class="fa fa-line-chart"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav-menu align-to-right">
                        <li class="text-light active"><a class="text-light" href="#">Home</a></li>
                        <li><a class="text-light" href="#featured" class="scrolls">Features</a></li>
                        <li><a class="text-light" href="#how_work" class="scrolls">How it work</a></li>
                        <li><a class="text-light" href="#documents" class="scrolls">Documentations</a></li>
                        <li><a class="text-light" href="#team" class="scrolls">Team</a></li>
                        <li><a class="text-light" href="#blog" class="scrolls">Blog</a></li>
                    </ul>

                </div>


            </nav>
        </div><!-- .container END -->
    </header><!-- header section end -->

    <div id="particles-js">

        <!-- banner start -->
        <section class="banner-sec" id="particles-js1">
            <div class="banner-item" style="background: url(assets/images/background/bg1.jpg) no-repeat center center /cover">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="banner-content">
                                <h2 class="banner-title">Investing in a platform for mass adoption of cryptocurrencies.</h2>
                                <p>
                                    Providing you with a combo-packed platform aimed at mass adoption using the
                                    blockchain technology.
                                </p>
                            </div>
                        </div>

                        <div class="banner-img-item">
                            <img style="max-width: 100%; height: auto; border-radius: 5px;" class="banner-img" src="assets/images/banner/blockchain3.png"
                                alt="">
                            <img style="max-width: 100px;" class="banner-ico banner-ico-1" src="assets/images/logo.png"
                                alt="">
                            <img style="max-width: 100px;" class="banner-ico banner-ico-2" src="assets/images/logo.png"
                                alt="">
                            <img style="max-width: 100px;" class="banner-ico banner-ico-3" src="assets/images/logo.png"
                                alt="">
                        </div>
                    </div><!--  .cont  ainer END -->
                </div>
            </div>
        </section> <!-- banner section end -->

        <div class="featured-area">

            <div class="blockcain-and-featured-area">

                <!-- blockchain section start -->
                <section class="blockcain-top-sec">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 wow fadeInUp" data-wow-duration="1.5s">
                                <div class="blockcain-top">
                                    <h2 class="column-title">Everything Blockchain Is No Joke, Taking the World By
                                        Storm</h2>
                                </div>
                            </div><!-- col end -->
                            <div class="col-md-5 offset-md-1 wow fadeInUp" data-wow-duration="2s">
                                <div class="blockcain-top-content">
                                    <p>
                                        Seamless streaming and download of music and videos, chatting and sharing of
                                        resources such
                                        as, music, videos and cryptocurrency with friends and loved ones
                                        and a multi-cryptocurrency wallet all at your fingertip by leveraging the
                                        benefits of the Blockchain technology.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> <!-- blockcain section end -->

                <!-- featured section start -->
                <section style="padding-bottom: 40px;" class="featured-sec" id="featured">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="section-title-item">
                                    <small class="xs-section-title">Main Features</small>
                                    <h2 class="section-title">TunezWallet Features</h2>
                                </div>
                            </div>
                        </div><!-- row end -->
                        <div class="main-fetured-item">
                            <div class="row">
                                <div class="col-md-4 wow fadeInUp" data-wow-duration="1.5s">
                                    <div class="single-feaured-item">
                                        <i class="mdi mdi-lock-outline"></i>
                                        <h3 class="feature-title">
                                            Secure
                                        </h3>
                                        <p>
                                            A better way to present your money using fully featured digital
                                        </p>
                                    </div>
                                </div><!-- col end -->
                                <div class="col-md-4 wow fadeInUp" data-wow-duration="1.5s">
                                    <div class="single-feaured-item">
                                        <i class="mdi mdi-television-guide"></i>
                                        <h3 class="feature-title">
                                            Outstanding UI/UX
                                        </h3>
                                        <p>
                                            A better way to present your money using fully featured digital
                                        </p>
                                    </div>
                                </div><!-- col end -->
                                <div class="col-md-4 wow fadeInUp" data-wow-duration="2s">
                                    <div class="single-feaured-item">
                                        <i class="mdi mdi-lock-outline"></i>
                                        <h3 class="feature-title">
                                            Semi-Decentralized
                                        </h3>
                                        <p>
                                            A better way to present your money using fully featured digital
                                        </p>
                                    </div>
                                </div><!-- col end -->
                                <div class="col-md-4 wow fadeInUp" data-wow-duration="2.5s">
                                    <div class="single-feaured-item">
                                        <i class="mdi mdi-cloud-download"></i>
                                        <h3 class="feature-title">
                                            Streaming and Downloading
                                        </h3>
                                        <p>
                                            A better way to present your money using fully featured digital
                                        </p>
                                    </div>
                                </div><!-- col end -->
                                <div class="col-md-4 wow fadeInUp" data-wow-duration="2.5s">
                                    <div class="single-feaured-item">
                                        <i class="mdi mdi-share-variant"></i>
                                        <h3 class="feature-title">
                                            Sharing of Resources
                                        </h3>
                                        <p>
                                            A better way to present your money using fully featured digital
                                        </p>
                                    </div>
                                </div><!-- col end -->
                                <div class="col-md-4 wow fadeInUp" data-wow-duration="2.5s">
                                    <div class="single-feaured-item">
                                        <i class="mdi mdi-currency-usd"></i>
                                        <h3 class="feature-title">
                                            Rewarding Participation
                                        </h3>
                                        <p>
                                            A better way to present your money using fully featured digital
                                        </p>
                                    </div>
                                </div><!-- col end -->
                            </div><!-- row end -->
                        </div><!-- main-fetured-item end -->

                        <div class="featured-poligonal-img wow fadeInUp" data-wow-duration="1.5s">
                            <img class="poligonal-img" src="assets/images/feature/poligonal.png" alt="">
                        </div>

                    </div>
                </section> <!-- featured section end -->
            </div>
            <div class="blockcain-and-logo-area">
                <!-- blockcain business section start -->
                <section class="blockcain-business-sec">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-lg-6 wow fadeInUp" data-wow-duration="1.5s">
                                <div class="blockcain-img">
                                    <img src="assets/images/blockchain/app.png" alt="">
                                </div>
                            </div><!-- col end -->
                            <div class="col-md-6 col-lg-5 offset-lg-1 wow fadeInUp" data-wow-duration="2s">
                                <div class="blockcain-content">
                                    <small class="xs-section-title">Entertainment solution</small>
                                    <h3 class="column-title">TunezWallet for Entertainment</h3>
                                    <p>
                                        A better way to utilize your money on an entertainment platform that fully
                                        features digital
                                        currency usage for mass adoption, making it the first of it's kind, enabling
                                        you to seamlessly explore the entertainment world.
                                    </p>
                                    <a href="#" class="btn btn-primary disabled">Coming Soon!!!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> <!-- blockcain business section end -->

                <!-- client logo section start -->
                <section class="client-logo-sec">
                    <div class="container">
                        <div class="client-logo-item">
                            <div class="row owl-carousel" id="client-slider">
                                <div class="col-sm wow fadeInUp" data-wow-duration="1.5s">
                                    <div class="client-logo">
                                        <img src="assets/images/blockchain/app1.png" alt="">
                                    </div>
                                </div>
                                <div class="col-sm wow fadeInUp" data-wow-duration="2s">
                                    <div class="client-logo">
                                        <img src="assets/images/blockchain/app2.png" alt="">
                                    </div>
                                </div>
                                <div class="col-sm wow fadeInUp" data-wow-duration="2.5s">
                                    <div class="client-logo">
                                        <img src="assets/images/blockchain/app3.png" alt="">
                                    </div>
                                </div>
                                <div class="col-sm wow fadeInUp" data-wow-duration="3s">
                                    <div class="client-logo">
                                        <img src="assets/images/blockchain/app4.png" alt="">
                                    </div>
                                </div>
                                <div class="col-sm wow fadeInUp" data-wow-duration="3.5s">
                                    <div class="client-logo">
                                        <img src="assets/images/blockchain/app5.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> <!-- client logo section end -->
            </div>
        </div>

    </div>
    <div class="how-work-and-token-area">
        <!-- how work section start -->
        <section class="how-work-sec section-padding" id="how_work">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="section-title-item">
                            <small class="xs-section-title">Process</small>
                            <h2 class="section-title">ICO</h2>
                        </div>
                    </div>
                </div><!-- row end -->
                <div class="row">
                    <div class="col-lg-4 col-md-6 wow fadeInUp " data-wow-duration="1.5s">
                        <div class="xs-count-down">
                            <h3 class="xs-single-title">ICO Starts in</h3>

                            <ul class="xs-counter-list">
                                <li>
                                    <strong id="xs_days">24</strong>
                                    <span>Days</span>
                                </li>
                                <li>
                                    <strong id="xs_hours">24</strong>
                                    <span>Hours</span>
                                </li>
                                <li>
                                    <strong id="xs_minuts">24</strong>
                                    <span>Minutes</span>
                                </li>
                                <li>
                                    <strong id="xs_second">24</strong>
                                    <span>Seconds</span>
                                </li>
                            </ul>
                            <div style="display: none;">
                                <div class="xs-progress-bar">
                                    <span class="progess-text-1">Sold: $28,985,879</span>
                                    <span class="progess-text-2">$50,000</span>
                                    <div class="xs-bar">
                                        <div class="bar-bg"></div>
                                    </div>
                                </div>

                                <div class="btn-wrapper text-center">
                                    <a href="#" class="btn btn-primary">Buy Crypto</a>
                                </div>
                            </div>

                        </div>
                    </div><!-- col end -->
                    <div class="col-lg-3 offset-lg-1 col-md-6 align-self-center wow fadeInUp" data-wow-duration="2s">
                        <div class="work-token-item">
                            <ul>
                                <li>
                                    <strong> Pre-Sale Ended</strong>
                                </li>
                                <li>
                                    <strong> Token Symbol</strong>
                                    <span>TUNEZ</span>
                                </li>
                                <li>
                                    <strong> ICO Price</strong>
                                    <span>1,000,000 TUNEZ = 1 ETH</span>
                                </li>
                                <li>
                                    <strong> Softcap</strong>
                                    <span>500 ETH</span>
                                </li>
                                <li>
                                    <strong> Hardcap</strong>
                                    <span>2,000 ETH</span>
                                </li>
                                <li>
                                    <strong> Total Number of Tokens</strong>
                                    <span>2,400,000,000 TUNEZ</span>
                                </li>
                            </ul>
                        </div>
                    </div><!-- col end -->
                    <div class="col-lg-4 align-self-center col-md-12 wow fadeInUp" data-wow-duration="2.5s">
                        <div class="work-video">
                            <img src="assets/images/how-works/vid.png" alt="">
                            <a href="https://www.youtube.com/watch?v=2X9eJF1nLiY" class="video-btn xs-video"
                                data-effect="mfp-zoom-in">
                                <i class="icon icon-play-button2"></i>
                                <span class="btn-hover-anim"></span>
                            </a>
                        </div>
                    </div><!-- col end -->
                </div><!-- row end -->
            </div>
        </section> <!-- how work section end -->

        <div class="token-roadmap-area">
            <!-- how work section start -->
            <section class="token-distribution-sec section-padding" style="">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="section-title-item">
                                <small class="xs-section-title">Token Details</small>
                                <h2 class="section-title">Token Distribution</h2>
                            </div>
                        </div>
                    </div><!-- row end -->
                    <div class="row" style="justify-content: center;">
                        <div class="col-lg-6 wow fadeInUp" data-wow-duration="1.5s">
                            <div class="row chart-gap">
                                <div class="col-sm-7 ml-lg-auto">
                                    <canvas class="token-chart-item" id="myChart"></canvas>
                                    <h3 class="xs-single-title">Token Distribution</h3>
                                </div> <!-- Col End -->
                                <div class=" col-sm-5">
                                    <ul class="chart-label">
                                        <li>
                                            <img src="assets/images/token/label_img1.png" alt="">
                                            <span class="chart-bg1">12.92 %</span> Airdrop/Bounty
                                        </li>
                                        <li>
                                            <img src="assets/images/token/label_img3.png" alt="">
                                            <span class="chart-bg3">3.75 %</span> Marketing and Team
                                        </li>
                                        <li>
                                            <img src="assets/images/token/label_img4.png" alt="">
                                            <span class="chart-bg4">83.33 %</span> Sale Drop ICO
                                        </li>
                                    </ul>
                                </div> <!-- Chart Label End -->

                            </div> <!-- Row End -->

                        </div> <!-- Col End -->
                        <div class="col-lg-6 wow fadeInUp" data-wow-duration="2s">
                            <div class="row chart-gap">
                                <div class="col-sm-7 ml-lg-auto">
                                    <canvas class="token-chart-item" id="myChartTwo"></canvas>
                                    <h3 class="xs-single-title">Use of Proceeds</h3>
                                </div>
                                <div class="col-sm-5">
                                    <ul class="chart-label chart-label2">
                                        <li>
                                            <img src="assets/images/token/label_img1.png" alt="">
                                            <span class="chart-bg4">5 %</span> Legal Operation
                                        </li>
                                        <li>
                                            <img src="assets/images/token/label_img2.png" alt="">
                                            <span class="chart-bg3">5 %</span> Operational Cost
                                        </li>
                                        <li>
                                            <img src="assets/images/token/label_img3.png" alt="">
                                            <span class="chart-bg1">40 %</span> Product Development
                                        </li>
                                        <li>
                                            <img src="assets/images/token/label_img2.png" alt="">
                                            <span class="chart-bg2">50 %</span> Marketing and Lisiting
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <!-- Col End-->
                    </div> <!-- Row End -->

                </div>
            </section> <!-- how work section end -->

            <!-- roadmap section start -->
            <section class="roadmap-sec section-padding" style="overflow-x:hidden;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="section-title-item">
                                <small class="xs-section-title">Process</small>
                                <h2 class="section-title">Company Roadmap</h2>
                            </div>
                        </div>
                    </div><!-- row end -->
                    <div id="timeline">
                        <ul id="dates">
                            <li><a href="#2018a">2018</a></li>
                            <li><a href="#2018b">2018</a></li>
                            <li><a href="#2018c">2018</a></li>
                            <li><a href="#2018d">2018</a></li>
                            <li><a href="#2018e">2018</a></li>
                            <li><a href="#2018f">2018</a></li>
                            <li><a href="#2018g">2018</a></li>
                            <li><a href="#9018a">2019</a></li>
                            <li><a href="#2019b">2019</a></li>
                            <li><a href="#2019c">2019</a></li>
                            <li><a href="#2019d">2019</a></li>
                            <li><a href="#2019e">2019</a></li>
                            <li><a href="#2019f">2019</a></li>
                            <li><a href="#2019g">2019</a></li>
                            <li><a href="#2020">2020</a></li>
                        </ul>
                        <ul id="issues">
                            <li id="2018a">
                                <img src="assets/images/roadmap/2.png" width="256" height="256" />
                                <h1>June 2018</h1>
                                <p>Tunez whitepaper is born</p>
                            </li>
                            <li id="2018b">
                                <img src="assets/images/roadmap/2.png" width="256" height="256" />
                                <h1>July 2018</h1>
                                <p>MVP demo development starts</p>
                            </li>
                            <li id="2018c">
                                <img src="assets/images/roadmap/2.png" width="256" height="256" />
                                <h1>September 2018</h1>
                                <p>Private sale launched.</p>
                            </li>
                            <li id="2018d">
                                <img src="assets/images/roadmap/2.png" width="256" height="256" />
                                <h1>October 22nd, 2018</h1>
                                <p>Airdrop and Bounty Campaign is launched.</p>
                            </li>
                            <li id="2018e">
                                <img src="assets/images/roadmap/2.png" width="256" height="256" />
                                <h1>November 4th, 2018</h1>
                                <p>ICO starts.</p>
                            </li>
                            <li id="2018f">
                                <img src="assets/images/roadmap/2.png" width="256" height="256" />
                                <h1>December 4th, 2018</h1>
                                <p>ICO ends.</p>
                            </li>
                            <li id="2018g">
                                <img src="assets/images/roadmap/2.png" width="256" height="256" />
                                <h1>December 2018</h1>
                                <p>List on four major exchanges.</p>
                            </li>
                            <li id="2019a">
                                <img src="assets/images/roadmap/2.png" width="256" height="256" />
                                <h1>January 2019</h1>
                                <p>Tunez app released on google play store.</p>
                            </li>
                            <li id="2019b">
                                <img src="assets/images/roadmap/2.png" width="256" height="256" />
                                <h1>February 2019</h1>
                                <p>Viral Marketing and partnerships.</p>
                            </li>
                            <li id="2019c">
                                <img src="assets/images/roadmap/2.png" width="256" height="256" />
                                <h1>March 2019</h1>
                                <p>Tunez app released on itunes store.</p>
                            </li>
                            <li id="2019d">
                                <img src="assets/images/roadmap/2.png" width="256" height="256" />
                                <h1>1st Quarter 2019</h1>
                                <p>Roll out wallet faucet.</p>
                            </li>
                            <li id="2019e">
                                <img src="assets/images/roadmap/2.png" width="256" height="256" />
                                <h1>2nd Quarter 2019</h1>
                                <p>Multiple deal Signings with phone manufacturers.</p>
                            </li>
                            <li id="2019f">
                                <img src="assets/images/roadmap/2.png" width="256" height="256" />
                                <h1>3rd Quarter 2019</h1>
                                <p>Tunez debit and gift cards.</p>
                            </li>
                            <li id="2019g">
                                <img src="assets/images/roadmap/2.png" width="256" height="256" />
                                <h1>4th Quarter 2019</h1>
                                <p>Listing more cryptocurrencies on TUNEZ app.</p>
                            </li>
                            <li id="2020">
                                <img src="assets/images/roadmap/2.png" width="256" height="256" />
                                <h1>1st Quater 2020</h1>
                                <p>Partnership with retail stores and viral marketing.</p>
                            </li>
                        </ul>
                        <div id="grad_top"></div>
                        <div id="grad_bottom"></div>
                        <a href="#" id="next">+</a>
                        <a href="#" id="prev">-</a>
                    </div>
                </div><!-- container fluid end -->

            </section> <!-- roadmap section end -->
        </div>
    </div>

    <div class="document-and-team-area" id="documents">
        <!-- docuemnt section start -->
        <section class="doceumnt-sec section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="section-title-item">
                            <small class="xs-section-title">Document</small>
                            <h2 class="section-title">The Documentation</h2>
                        </div>
                    </div>
                </div><!-- row end -->
                <div class="row">
                    <div class="col-lg-8 mx-auto wow fadeInUp" data-wow-duration="1.5s">
                        <div class="nav xs-tabs-menu" id="v-pills-tab" role="tablist" aria-orientation="horizontal">
                            <a class="active col-md" id="v-pills-app-tab" data-toggle="pill" href="#v-pills-app" role="tab"
                                aria-controls="v-pills-app" aria-selected="true">
                                <img src="assets/images/logo.png" alt="">
                                TunezWallet
                            </a>


                            <a style="padding: 40px 20px;" class="col-md" id="v-pills-tc-tab" data-toggle="pill" href="#v-pills-tc"
                                role="tab" aria-controls="v-pills-tc" aria-selected="false">
                                <i class="mdi mdi-file-document-outline"></i>
                                Terms and Conditions
                            </a>


                            <a class="col-md" id="v-pills-paper-tab" data-toggle="pill" href="#v-pills-paper" role="tab"
                                aria-controls="v-pills-paper" aria-selected="false">
                                <i class="icon-whitepaper"></i>
                                White Paper
                            </a>


                            <a class="col-md" id="v-pills-token-tab" data-toggle="pill" href="#v-pills-token" role="tab"
                                aria-controls="v-pills-token" aria-selected="false">
                                <i class="mdi mdi-chart-pie"></i>
                                Token Metrics
                            </a>
                        </div><!-- tab menu end -->

                        <div class="road-map-tab">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane tab_item_1 show active" id="v-pills-app" role="tabpanel"
                                    aria-labelledby="v-pills-app-tab">
                                    <div class="row">
                                        <div class="col-md-6 align-self-center">
                                            <div class="xs-tabs-content">
                                                <h3 class="xs-single-title">Download TunezWallet</h3>
                                                <!-- <span class="release_vertion">
                                                    Latest Release 1.49.0
                                                </span> -->

                                                <ul class="download-logo">
                                                    <!-- <li>
                                                        <img src="assets/images/documentation/windows_logo-1.png" alt="">

                                                    </li>
                                                    <li>
                                                        <img src="assets/images/documentation/windows_logo-2.png" alt="">
                                                    </li>
                                                    <li>
                                                        <img src="assets/images/documentation/mac_ico.png" alt="">
                                                    </li>
                                                    <li>
                                                        <img src="assets/images/documentation/linux_1.png" alt="">
                                                    </li> -->
                                                    <li>
                                                        <img src="assets/images/documentation/android_1.png" alt="">
                                                        <a href="#" class="btn btn-primary disabled">Coming Soon!!!</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="xs-tabs-img">
                                                <img src="assets/images/blockchain/app1.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- tab pane tab_item_1-->
                                <div class="tab-pane tab_item_2" id="v-pills-tc" role="tabpanel" aria-labelledby="v-pills-tc-tab">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="xs-tabs-img text-center">
                                                <img src="assets/images/documentation/whitepaper.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="xs-white-tabs-content">
                                                <h3 class="xs-single-title">Terms & Conditions</h3>
                                                <p>
                                                    A better way to present your money using fully featured digital
                                                    currency and
                                                    now available on the team xpeed studio for It is the fastest and
                                                    most scalable digital asset,
                                                </p>
                                                <a target="_blank" href="assets/images/documentation/Terms&Conditions.pdf"
                                                    class="btn btn-primary sm-btn">Read
                                                    Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- tab pane tab_item_2-->
                                <div class="tab-pane tab_item_3" id="v-pills-paper" role="tabpanel" aria-labelledby="v-pills-paper-tab">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="xs-tabs-img text-center">
                                                <img src="assets/images/documentation/whitepaper.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="xs-white-tabs-content">
                                                <h3 class="xs-single-title">Whitepaper</h3>
                                                <p>
                                                    A better way to present your money using fully featured digital
                                                    currency and
                                                    now available on the team xpeed studio for It is the fastest and
                                                    most scalable digital asset,
                                                </p>
                                                <a target="_blank" href="assets/images/documentation/Whitepaper.pdf"
                                                    class="btn btn-primary sm-btn">Read
                                                    Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- tab pane tab_item_3-->
                                <div class="tab-pane tab_item_4" id="v-pills-token" role="tabpanel" aria-labelledby="v-pills-token-tab">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="xs-tabs-img text-center">
                                                <img src="assets/images/documentation/whitepaper.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="xs-white-tabs-content">
                                                <h3 class="xs-single-title">Token Metrics</h3>
                                                <p>
                                                    A better way to present your money using fully featured digital
                                                    currency and
                                                    now available on the team xpeed studio for It is the fastest and
                                                    most scalable digital asset,
                                                </p><a target="_blank" href="assets/images/documentation/TOKEN_METRICS.pdf"
                                                    class="btn btn-primary sm-btn">Read
                                                    Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- tab pane tab_item_4-->
                            </div>
                        </div>
                    </div>
                </div><!-- row end -->
            </div><!-- container end -->
            <div class="documentaion-shap-img">
                <img class="d-shap-img-1 wow fadeInLeft" data-wow-duration="1.5s" id="leftglobe" src="assets/images/documentation/globe1.png"
                    alt="">
                <img class="d-shap-img-2 wow fadeInRight" data-wow-duration="1.5s" src="assets/images/documentation/globe2.png"
                    alt="">

            </div>
        </section> <!-- document section end -->

        <!-- team section start -->
        <section class="team-sec section-padding" id="team">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="section-title-item">
                            <small class="xs-section-title">Our experts</small>
                            <h2 class="section-title">Team Members</h2>
                        </div>
                    </div>
                </div><!-- row end -->
                <div class="row">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="1.5s">
                        <div class="single-team">
                            <div class="team-img">
                                <img src="assets/images/team/team_1.jpg" alt="">
                                <div class="team-social">
                                    <a href="#">
                                        <i class="icon icon-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3 class="xs-title md">James Carter</h3>
                                <p>CEO</p>
                            </div>
                        </div>
                    </div> <!-- Col End -->
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="2s">
                        <div class="single-team">
                            <div class="team-img">
                                <img src="assets/images/team/team_2.jpg" alt="">
                                <div class="team-social">
                                    <a href="#">
                                        <i class="icon icon-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3 class="xs-title md">Jenifar Lorany</h3>
                                <p>Marketing Head</p>
                            </div>
                        </div>
                    </div> <!-- Col End -->
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="2.5s">
                        <div class="single-team">
                            <div class="team-img">
                                <img src="assets/images/team/team_3.jpg" alt="">
                                <div class="team-social">
                                    <a href="#">
                                        <i class="icon icon-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3 class="xs-title md">Michel Ramos</h3>
                                <p>HR Head</p>
                            </div>
                        </div>
                    </div> <!-- Col End -->
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="3s">
                        <div class="single-team">
                            <div class="team-img">
                                <img src="assets/images/team/team_4.jpg" alt="">
                                <div class="team-social">
                                    <a href="#">
                                        <i class="icon icon-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3 class="xs-title md">Lorence Katie</h3>
                                <p>Lead Designer</p>
                            </div>
                        </div>
                    </div> <!-- Col End -->
                </div> <!-- Row End -->

            </div>
        </section> <!-- team section end -->
    </div>

    <div class="blog-and-footer-area">
        <div class="blog-and-social-area">
            <div class="section-title-item">
                <small class="xs-section-title">Media Coverage</small>
                <h2 class="section-title">Media</h2>
            </div>
            <!-- social list section start -->
            <section class="social-list-sec section-padding" style="">
                <div class="container">
                    <div class="row">
                        <div class="col-lg col-6 col-md-3 wow fadeInUp" data-wow-duration=".5s">
                            <div class="single-social-list facebook">
                                <i class="fa fa-facebook"></i>
                                <h3 class="xs-title sm">Facebook</h3>
                                <a href="#">
                                    <span class="icon icon-arrow-right"></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg col-6 col-md-3 wow fadeInUp" data-wow-duration="1s">
                            <div class="single-social-list twitter">
                                <i class="fa fa-twitter"></i>
                                <h3 class="xs-title sm">Twitter</h3>
                                <a href="#">
                                    <span class="icon icon-arrow-right"></span>
                                </a>
                            </div>
                        </div><!-- single-social-list-->
                        <div class="col-lg col-6 col-md-3 wow fadeInUp" data-wow-duration="1.5s">
                            <div class="single-social-list github">
                                <i class="fa fa-github-alt"></i>
                                <h3 class="xs-title sm">Github</h3>
                                <a href="#">
                                    <span class="icon icon-arrow-right"></span>
                                </a>
                            </div>
                        </div><!-- single-social-list-->
                        <!-- <div class="col-lg col-6 col-md-3 wow fadeInUp" data-wow-duration="2s">
                            <div class="single-social-list slack">
                                <i class="fa fa-slack"></i>
                                <h3 class="xs-title sm">Slack</h3>
                                <a href="#">
                                    <span class="icon icon-arrow-right"></span>
                                </a>
                            </div>
                        </div> -->
                        <div class="col-lg col-6 col-md-3 wow fadeInUp" data-wow-duration="2.5s">
                            <div class="single-social-list bitcoin">
                                <i class="fa fa-btc"></i>
                                <h3 class="xs-title sm">BitTalk</h3>
                                <a href="#">
                                    <span class="icon icon-arrow-right"></span>
                                </a>
                            </div>
                        </div><!-- single-social-list-->
                        <div class="col-lg col-6 col-md-3 wow fadeInUp" data-wow-duration="3s">
                            <div class="single-social-list youtube">
                                <i class="fa fa-youtube-play"></i>
                                <h3 class="xs-title sm">Youtube</h3>
                                <a href="#">
                                    <span class="icon icon-arrow-right"></span>
                                </a>
                            </div>
                        </div><!-- single-social-list-->
                        <div class="col-lg col-6 col-md-3 wow fadeInUp" data-wow-duration="3.5s">
                            <div class="single-social-list telegram">
                                <i class="fa fa-telegram"></i>
                                <h3 class="xs-title sm">Telegram</h3>
                                <a href="#">
                                    <span class="icon icon-arrow-right"></span>
                                </a>
                            </div>
                        </div>

                    </div> <!-- Row End -->

                </div>
            </section> <!-- social list section end -->
        </div>

        <!-- footer section start -->
        <footer class="xs-footer-sec">
            <div class="container">
                <div class="footer-area">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="footer-widget">
                                <div class="footer-logo">
                                    <a href="index.html">
                                        <img width="200px" src="assets/images/logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div><!-- col end -->
                        <div class="col-lg-2 offset-lg-1 col-sm-6">
                            <div class="footer-widget">
                                <h4 class="widget-title">Company</h4>
                                <ul>
                                    <li><a href="#"> About us</a></li>
                                    <li><a href="#"> Our Services</a></li>
                                    <li><a href="#"> Timeline</a></li>
                                    <li><a href="#"> On Media</a></li>
                                </ul>
                            </div>
                        </div><!-- col end -->
                        <div class="col-lg-2 col-sm-6">
                            <div class="footer-widget support">
                                <h4 class="widget-title">Support</h4>
                                <ul>
                                    <li><a href="#"> Contact Us</a></li>
                                    <li><a href="#"> FAQ</a></li>
                                    <li><a href="#"> Support</a></li>
                                    <li><a href="#"> Token</a></li>
                                </ul>
                            </div>
                        </div><!-- col end -->
                        <div class="col-lg-3 offset-lg-1 col-sm-6">
                            <div class="footer-widget">
                                <h4 class="widget-title">Contact</h4>
                                <ul>
                                    <li>Email: info@tunezwallet.com</li>
                                </ul>
                            </div>
                        </div><!-- col end -->
                    </div><!-- row end -->
                </div><!-- footer area end -->

                <!-- copyright area -->
                <div class="footer-copyright">
                    <p>
                        Copyright © 2018 TunezWallet
                    </p>
                </div>

            </div><!-- container end -->
        </footer> <!-- footer section end -->
    </div>
    <!-- footer section start -->


    <!--back to top start-->
    <div class="BackTo">
        <a href="#" class="fa fa-angle-up" aria-hidden="true"></a>
    </div>
    <!--back to top end-->


    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/jquery.timelinr-0.9.7.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/navigation.js"></script>
    <script src="assets/js/jquery.appear.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/particles.min.js"></script>
    <script src="assets/js/smooth-scroling.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>
<!-- footer section end -->