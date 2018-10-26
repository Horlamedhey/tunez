<!-- get_header('Page Name','Title')-->
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge,chrome=1">
    <meta name="theme-color" content="#865603" />
    <title>TunezWallet</title>
    <meta name="description" content="Introducing a platform for mass adoption of cryptocurrencies.">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=1, shrink-to-fit=no' name='viewport' />

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
                        <img src="assets/images/logo.png" alt="sidebar tunez-logo">
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
                            <button id="register" class="btn btn-primary" type="submit">register</button>
                            <button id="login" class="btn btn-primary" type="submit">login</button>
                            <button style="visibility: hidden;" id="confirm" class="btn btn-primary" type="submit"></button>
                            <button style="visibility: hidden;" id="conlog" class="btn btn-primary" type="submit"></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="z-index: 999999; display: none; position: fixed; top: 100px; width: 100%; text-align: center;" id="alert" class="alert alert-warning alert-dismissible fade show" role="alert">
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
                        <img width="90px" src="assets/images/logo.png" alt="tunez-logo">
                        TunezWallet
                    </a>
                    <div class="nav-toggle"></div>
                </div>

                <div class="bg-dark nav-menus-wrapper xs-menu">
                    <ul class="header-right align-to-right" style="display: flex; line-height: 43px;">

                        <!-- <li>
                            <a href="#" class="text-light navSidebar-button-reg">
                                <i class="fa fa-user-plus"></i>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="text-light navSidebar-button-log">
                                <i class="fa fa-sign-in"></i>
                            </a>
                        </li> -->
                        <style>
                            @media(max-width: 990px){
                                .dash {
                                    display: none!important;
                                }
                            }
                        </style>
                        <li class="dash d-lg-inline-block">
                            <a class="text-light" href="dashboard.php">
                                <i class="fa fa-line-chart"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav-menu align-to-right">
                        <li class="text-light active"><a class="text-light" href="#">Home</a></li>
                        <li><a href="#featured" class="scrolls text-light">Features</a></li>
                        <li><a href="#how_work" class="scrolls text-light">Airdrop | Ico</a></li>
                        <li><a href="#documents" class="scrolls text-light">Documentations</a></li>
                        <li><a href="#team" class="scrolls text-light">Team</a></li>
                        <li><a href="#blog" class="scrolls text-light">Media</a></li>
                        <li>
                            <a href="#" class="text-light navSidebar-button-reg">Register</a>
                        </li>
                        <li>
                            <a href="#" class="text-light navSidebar-button-log">Login</a>
                        </li>
                        <li class="d-sm-inline-block d-lg-none">
                            <a href="dashboard.php" class="text-light">Dashboard</a>
                        </li>
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
                                    Tunez app is the first crypto app to combine three separate mainstream industries in one single piece.
                                </p>
                            </div>
                        </div>

                        <div class="banner-img-item">
                            <img style="max-width: 100%; height: auto; border-radius: 5px;" class="banner-img" src="assets/images/banner/blockchain3.png"
                                alt="Ethereum-crypto">
                            <img style="max-width: 100px;" class="banner-ico banner-ico-1" src="assets/images/logo.png"
                                alt="tunez-logo">
                            <img style="max-width: 100px;" class="banner-ico banner-ico-2" src="assets/images/logo.png"
                                alt="tunez-logo">
                            <img style="max-width: 100px;" class="banner-ico banner-ico-3" src="assets/images/logo.png"
                                alt="tunez-logo">
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
                                <div class="align-self-center col-lg-8">
                                    <div class="work-video" style="z-index: 1;">
                                        <img src="assets/images/how-works/anim1.jpeg" alt="tunez-project-explainer">
                                        <a href="https://www.youtube.com/watch?v=rAPkTSl871s" class="video-btn xs-video"
                                            data-effect="mfp-zoom-in">
                                            <i class="icon icon-play-button2"></i>
                                            <span class="btn-hover-anim"></span>
                                        </a>
                                    </div>
                                </div><!-- col end -->
                            </div><!-- col end -->
                            <div class="col-md-5 offset-md-1 wow fadeInUp" data-wow-duration="2s">
                                <div class="blockcain-top-content">
                                    <p>
                                        We appealing to people to use cryptocurrencies through what they like doing best.
                                    </p>
                                    <p>Almost everybody owning a mobile phone has a social media app and music player app on their mobile device. We are aiming to chip in Tunez crypto wallet to every mobile device through TUNEZ app. We are also building an application for the unbanked as we would be integrating a faucet that pays you for your activities on our app in a decentralized manner in TUNEZ TOKENs. </p>
                                    <p>Artist get paid in a decentralized manner through a smart-contract for revenue generated by their music, we charge only 1% from them. Unlike other music store, artist on TUNEZ get 99% of revenue generated by their music.</p>
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
                                    </div>
                                </div><!-- col end -->
                                <div class="col-md-4 wow fadeInUp" data-wow-duration="1.5s">
                                    <div class="single-feaured-item">
                                        <i class="mdi mdi-television-guide"></i>
                                        <h3 class="feature-title">
                                            Outstanding UI/UX
                                        </h3>
                                    </div>
                                </div><!-- col end -->
                                <div class="col-md-4 wow fadeInUp" data-wow-duration="2s">
                                    <div class="single-feaured-item">
                                        <i class="mdi mdi-lock-outline"></i>
                                        <h3 class="feature-title">
                                            Semi-Decentralized
                                        </h3>
                                    </div>
                                </div><!-- col end -->
                                <div class="col-md-4 wow fadeInUp" data-wow-duration="2.5s">
                                    <div class="single-feaured-item">
                                        <i class="mdi mdi-cloud-download"></i>
                                        <h3 class="feature-title">
                                            Streaming and Downloading
                                        </h3>
                                    </div>
                                </div><!-- col end -->
                                <div class="col-md-4 wow fadeInUp" data-wow-duration="2.5s">
                                    <div class="single-feaured-item">
                                        <i class="mdi mdi-share-variant"></i>
                                        <h3 class="feature-title">
                                            Sharing of Resources
                                        </h3>
                                    </div>
                                </div><!-- col end -->
                                <div class="col-md-4 wow fadeInUp" data-wow-duration="2.5s">
                                    <div class="single-feaured-item">
                                        <i class="mdi mdi-currency-usd"></i>
                                        <h3 class="feature-title">
                                            Rewarding Participation
                                        </h3>
                                    </div>
                                </div><!-- col end -->
                            </div><!-- row end -->
                        </div><!-- main-fetured-item end -->

                        <div class="featured-poligonal-img wow fadeInUp" data-wow-duration="1.5s">
                            <img class="poligonal-img" src="assets/images/feature/poligonal.png" alt="tunez-features">
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
                                    <img src="assets/images/blockchain/app.png" alt="tunez-app">
                                </div>
                            </div><!-- col end -->
                            <div class="col-md-6 col-lg-5 offset-lg-1 wow fadeInUp" data-wow-duration="2s">
                                <div class="blockcain-content">
                                    <small class="xs-section-title">Entertainment solution</small>
                                    <h3 class="column-title">TunezWallet for Entertainment</h3>
                                    <p>
                                        Tunez is a platform designed to be a tool for mass adoption. Tunez is a crypto wallet, music and music video player and store and an encrypted chat messenger. Users can stream and download music using Tunez token as a payment for these services. Users funds are kept in a cold wallet to keep them save. We also have a faucet that incentivizes you for your activities on the app.
                                    </p>
                                    <div class="align-self-center col-lg-8">
                                        <div class="work-video" style="z-index: 1;">
                                            <img src="assets/images/how-works/anim.jpeg" alt="tunez-app-explainer">
                                            <a href="https://www.youtube.com/watch?v=1qyY0ZjROuo" class="video-btn xs-video"
                                                data-effect="mfp-zoom-in">
                                                <i class="icon icon-play-button2"></i>
                                                <span class="btn-hover-anim"></span>
                                            </a>
                                        </div>
                                    </div><!-- col end -->
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
                                        <img src="assets/images/blockchain/app1.png" alt="tunez-app-demo">
                                    </div>
                                </div>
                                <div class="col-sm wow fadeInUp" data-wow-duration="2s">
                                    <div class="client-logo">
                                        <img src="assets/images/blockchain/app2.png" alt="tunez-app-demo">
                                    </div>
                                </div>
                                <div class="col-sm wow fadeInUp" data-wow-duration="2.5s">
                                    <div class="client-logo">
                                        <img src="assets/images/blockchain/app3.png" alt="tunez-app-demo">
                                    </div>
                                </div>
                                <div class="col-sm wow fadeInUp" data-wow-duration="3s">
                                    <div class="client-logo">
                                        <img src="assets/images/blockchain/app4.png" alt="tunez-app-demo">
                                    </div>
                                </div>
                                <div class="col-sm wow fadeInUp" data-wow-duration="3.5s">
                                    <div class="client-logo">
                                        <img src="assets/images/blockchain/app5.png" alt="tunez-app-demo">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> <!-- client logo section end -->
            </div>
            <div class="blockcain-and-logo-area">
                <!-- blockcain business section start -->
                <section class="blockcain-business-sec">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-lg-6 wow fadeInUp" data-wow-duration="1.5s">
                                <div class="blockcain-img">
                                    <img src="assets/images/blockchain/app5.png" alt="tunez-app-wallet">
                                </div>
                            </div><!-- col end -->
                            <div class="col-md-6 col-lg-5 offset-lg-1 wow fadeInUp" data-wow-duration="2s">
                                <div class="blockcain-content">
                                    <small class="xs-section-title">Accessibility solution</small>
                                    <h3 class="column-title">Tunez Debit and Gift cards</h3>
                                    <p>
                                        To give the Tunez token more value, we would be partnering with debit card providers to issue Tunez debit cards. The biggest advantage of Tunez Card is making payment and using ATM to withdraw cash in any fiat currency at anywhere in the world, using cryptos.
                                    </p>
                                    <p>We are also going to attempt to issue gift cards. Gift cards would be purchased in any tunez legalized store all around the world. Gift cards are generally redeemable only for purchases at the relevant retail premises and cannot be cashed out, and in some situations may be subject to an expiry date or fees.</p>
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
                            <div class="row owl-carousel" id="client-slider1">
                                <div class="col-sm wow fadeInUp" data-wow-duration="1.5s">
                                    <div class="client-logo">
                                        <img src="assets/images/blockchain/app6.png" alt="tunez-card">
                                    </div>
                                </div>
                                <div class="col-sm wow fadeInUp" data-wow-duration="3s">
                                    <div class="client-logo">
                                        <img src="assets/images/blockchain/app7.png" alt="tunez-card">
                                    </div>
                                </div>
                                <div class="col-sm wow fadeInUp" data-wow-duration="3.5s">
                                    <div class="client-logo">
                                        <img src="assets/images/blockchain/app8.png" alt="tunez-card">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> <!-- client logo section end -->
            </div>
        </div>

    </div>
    <div class="how-work-and-token-area" style="overflow-x: hidden;">
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
                <div class="row mb-3">
                    <div class="col-md-6 wow fadeInUp " data-wow-duration="1.5s">
                        <h3 class="xs-single-title">Airdrop</h3>
                        <p>Earn some Tunez for free by participating in our airdrop campaign today! Remember it is limited to just 10,000 people.</p>
                        <p><a class="navSidebar-button-reg btn-sm btn-secondary text-white" style="cursor: pointer;">Join the Airdrop Campaing Here.</a></p>
                    </div><!-- col end -->
                    <div class="col-md-6 wow fadeInUp " data-wow-duration="1.5s">
                        <h3 class="xs-single-title">Bounty</h3>
                        <p>Access our <a target="_blank" href="https://bitcointalk.org/index.php?topic=5057538.0" class="btn-sm btn-secondary text-white" style="cursor: pointer;">Bounty Program here!</a> to earn free Tunez by participating in our bounty campaign!</p>
                    </div><!-- col end -->
                </div>
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
                                <li>
                                    <strong> Contract address</strong>
                                    <div class="input-group input-group-sm mb-1">
                                        <input value="0x6a33c2c807124eae26f6188877c15675d3889ca3" type="text" class="form-control bg-dark text-white" aria-label="contract" id="contractinput">
                                        <div class="input-group-append">
                                        <button id="contractbtn" class="btn btn-secondary" type="button">Copy</button>
                                        </div>
                                    </div>
                                    <!-- <p>0x6a33c2c807124eae26f6188877c15675d3889ca3</p> -->
                                </li>
                            </ul>
                        </div>
                    </div><!-- col end -->
                    <div class="col-lg-4 align-self-center col-md-12 wow fadeInUp" data-wow-duration="2.5s">
                        <div class="work-video">
                            <img src="assets/images/how-works/demo.jpeg" alt="tunez-app-demo-video">
                            <a href="https://www.youtube.com/watch?v=AbjePK7Hm3M" class="video-btn xs-video"
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
                                            <img src="assets/images/token/label_img1.png" alt="airdrop/bounty-percentage">
                                            <span class="chart-bg1">12.92 %</span> Airdrop/Bounty
                                        </li>
                                        <li>
                                            <img src="assets/images/token/label_img3.png" alt="marketing-percentage">
                                            <span class="chart-bg3">3.75 %</span> Marketing and Team
                                        </li>
                                        <li>
                                            <img src="assets/images/token/label_img4.png" alt="ICO percentage">
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
                                            <img src="assets/images/token/label_img1.png" alt="legal-ops-percentage">
                                            <span class="chart-bg4">5 %</span> Legal Operation
                                        </li>
                                        <li>
                                            <img src="assets/images/token/label_img2.png" alt="operational-cost-percentage">
                                            <span class="chart-bg3">5 %</span> Operational Cost
                                        </li>
                                        <li>
                                            <img src="assets/images/token/label_img3.png" alt="tunez-app-dev-percentage">
                                            <span class="chart-bg1">40 %</span> Product Development
                                        </li>
                                        <li>
                                            <img src="assets/images/token/label_img2.png" alt="marketing percentage">
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
                                <h1>November 7th, 2018</h1>
                                <p>ICO starts.</p>
                            </li>
                            <li id="2018f">
                                <img src="assets/images/roadmap/2.png" width="256" height="256" />
                                <h1>December 7th, 2018</h1>
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
                                <img src="assets/images/logo.png" alt="tunez-app-showcase">
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
                                                        <img src="assets/images/documentation/android_1.png" alt="tunez-android-app-download">
                                                        <a href="#" class="btn btn-primary disabled">Coming Soon!!!</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="xs-tabs-img">
                                                <img src="assets/images/blockchain/app1.png" alt="tunez-app-demo">
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- tab pane tab_item_1-->
                                <div class="tab-pane tab_item_2" id="v-pills-tc" role="tabpanel" aria-labelledby="v-pills-tc-tab">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="xs-tabs-img text-center">
                                                <img src="assets/images/documentation/whitepaper.png" alt="tunez-terms and conditions">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="xs-white-tabs-content">
                                                <h3 class="xs-single-title">Terms & Conditions</h3>
                                                <p>
                                                    Do note that citizens of USA, Canada and China are not allowed to participate in this ICO. Read our terms and conditions for more info.
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
                                                <img src="assets/images/documentation/whitepaper.png" alt="tunez-whitepaper">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="xs-white-tabs-content">
                                                <h3 class="xs-single-title">Whitepaper</h3>
                                                
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
                                                <img src="assets/images/documentation/whitepaper.png" alt="tunez-token-metrics">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="xs-white-tabs-content">
                                                <h3 class="xs-single-title">Token Metrics</h3>
                                                <a target="_blank" href="assets/images/documentation/TOKEN_METRICS.pdf"
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
                    alt="tunez-anime">
                <img class="d-shap-img-2 wow fadeInRight" data-wow-duration="1.5s" src="assets/images/documentation/globe2.png"
                    alt="tunez-anime1">

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
                                <img src="assets/images/team/team_1.jpg" alt="tunez-ceo">
                                <div class="team-social">
                                    <a target="_blank" href="https://www.linkedin.com/in/vijay-patil-230528173/">
                                        <i class="icon icon-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3 class="xs-title md">Vijay Patil</h3>
                                <p>Ceo</p>
                            </div>
                        </div>
                    </div> <!-- Col End -->
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="2s">
                        <div class="single-team">
                            <div class="team-img">
                                <img src="assets/images/team/team_2.jpg" alt="tunez-operations-director">
                                <div class="team-social">
                                    <a target="_blank" href="https://www.linkedin.com/in/shruti-joshi-139386167/">
                                        <i class="icon icon-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3 class="xs-title md">Shruti Joshi</h3>
                                <p>Marketing and Operations Director</p>
                            </div>
                        </div>
                    </div> <!-- Col End -->
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="2.5s">
                        <div class="single-team">
                            <div class="team-img">
                                <img src="assets/images/team/team_3.jpeg" alt="tunes-CRM">
                                <div class="team-social">
                                    <a target="_blank" href="https://www.linkedin.com/in/akshay-ahuja-a878a7b6/">
                                        <i class="icon icon-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3 class="xs-title md">Akshay Ahuja</h3>
                                <p>Community Relations Manager</p>
                            </div>
                        </div>
                    </div> <!-- Col End -->
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="3s">
                        <div class="single-team">
                            <div class="team-img">
                                <img src="assets/images/team/team_4.jpg" alt="tunez-developer">
                                <div class="team-social">
                                    <a target="_blank" href="https://www.linkedin.com/in/joseph-amey-b05a8b160">
                                        <i class="icon icon-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3 class="xs-title md">Joseph Amey</h3>
                                <p>Lead Developer</p>
                            </div>
                        </div>
                    </div> <!-- Col End -->
                </div> <!-- Row End -->

            </div>
        </section> <!-- team section end -->
    </div>

    <div style="padding-top: 60px;" id="blog" class="blog-and-footer-area">
        <div class="blog-and-social-area">
            <div class="section-title-item">
                <h2 class="section-title">Social Media Links</h2>
            </div>
            <!-- social list section start -->
            <section style="padding-top: 0;" class="social-list-sec section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg col-6 col-md-3 wow fadeInUp" data-wow-duration=".5s">
                            <div class="single-social-list facebook">
                                <i class="fa fa-facebook"></i>
                                <h3 class="xs-title sm">Facebook</h3>
                                <a target="_blank" href="https://web.facebook.com/TunezWallet/">
                                    <span class="icon icon-arrow-right"></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg col-6 col-md-3 wow fadeInUp" data-wow-duration="1s">
                            <div class="single-social-list twitter">
                                <i class="fa fa-twitter"></i>
                                <h3 class="xs-title sm">Twitter</h3>
                                <a target="_blank" href="https://twitter.com/Tunez_wallet">
                                    <span class="icon icon-arrow-right"></span>
                                </a>
                            </div>
                        </div><!-- single-social-list-->
                        <div class="col-lg col-6 col-md-3 wow fadeInUp" data-wow-duration="1.5s">
                            <div class="single-social-list github">
                                <i class="fa fa-github-alt"></i>
                                <h3 class="xs-title sm">Github</h3>
                                <a target="_blank" href="https://github.com/TunezProject">
                                    <span class="icon icon-arrow-right"></span>
                                </a>
                            </div>
                        </div><!-- single-social-list-->
                        <div class="col-lg col-6 col-md-3 wow fadeInUp" data-wow-duration="2s">
                            <div class="single-social-list slack">
                                <i class="fa fa-instagram"></i>
                                <h3 class="xs-title sm">Instagram</h3>
                                <a target="_blank" href="https://instagram.com/tunezproject">
                                    <span class="icon icon-arrow-right"></span>
                                </a>
                            </div>
                        </div><!-- single-social-list-->
                        <div class="col-lg col-6 col-md-3 wow fadeInUp" data-wow-duration="2.5s">
                            <div class="single-social-list bitcoin">
                                <i class="fa fa-btc"></i>
                                <h3 class="xs-title sm">BitcoinTalk</h3>
                                <a target="_blank" href="https://bitcointalk.org/index.php?topic=5057536.0">
                                    <span class="icon icon-arrow-right"></span>
                                </a>
                            </div>
                        </div>
                        <!-- single-social-list-->
                        <div class="col-lg col-6 col-md-3 wow fadeInUp" data-wow-duration="3s">
                            <div class="single-social-list youtube">
                                <i class="fa fa-youtube-play"></i>
                                <h3 class="xs-title sm">Youtube</h3>
                                <a target="_blank" href="https://www.youtube.com/channel/UCLVxEwLZj-JFYR_S2LvuviQ">
                                    <span class="icon icon-arrow-right"></span>
                                </a>
                            </div>
                        </div><!-- single-social-list-->
                        <div class="col-lg col-6 col-md-3 wow fadeInUp" data-wow-duration="3.5s">
                            <div class="single-social-list telegram">
                                <i class="fa fa-telegram"></i>
                                <h3 class="xs-title sm">Telegram</h3>
                                <a target="_blank" href="https://t.me/tunez_chat">
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
                        <div class="col-lg-4 col-sm-6">
                            <div class="footer-widget">
                                <div class="footer-logo"
                                    style="display: flex; justify-content: center;">
                                    <a href="index.html">
                                        <img width="200px" src="assets/images/logo.png" alt="tunez-logo">
                                    </a>
                                </div>
                            </div>
                        </div><!-- col end -->
                        <div class="col-lg-4 col-sm-6">
                            <div class="footer-widget support text-center" style="margin-top:30px;">
                                <h4 class="widget-title">Support</h4>
                                <ul>
                                    <li><a data-toggle="modal" data-target="#support" href="#"> Contact Us</a></li>
                                    <li><a data-toggle="modal" data-target="#faq" href="#"> FAQ</a></li>
                                </ul>
                            </div>
                        </div><!-- col end -->
                        <!-- Modal -->
                        <div class="modal fade" id="faq" tabindex="-1" role="dialog" aria-labelledby="faq" aria-hidden="true">
                            <div class="modal-dialog modal-full" role="document">
                                <div class="modal-content bg-dark">
                                    <div class="modal-header">
                                        <h5 class="modal-title">FAQ</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span class="text-white" aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body p-4">
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="list-group" id="list-tab" role="tablist">
                                                <a class="list-group-item list-group-item-action active" id="list-buy-list" data-toggle="list" href="#list-buy" role="tab" aria-controls="buy">How do I buy Tunez tokens?</a>
                                                <a class="list-group-item list-group-item-action" id="list-tunez-list" data-toggle="list" href="#list-tunez" role="tab" aria-controls="tunez">What is TUNEZ?</a>
                                                <a class="list-group-item list-group-item-action" id="list-exchange-list" data-toggle="list" href="#list-exchange" role="tab" aria-controls="exchange">When would Tunez be listed on exchanges?</a>
                                                <a class="list-group-item list-group-item-action" id="list-decentralized-list" data-toggle="list" href="#list-decentralized" role="tab" aria-controls="decentralized">Is the Tunez platfrom decentralized?</a>
                                                <a class="list-group-item list-group-item-action" id="list-partnership-list" data-toggle="list" href="#list-partnership" role="tab" aria-controls="partnership">Are we going to be partnering with other projects?</a>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="tab-content"
                                                     id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="list-buy" role="tabpanel" aria-labelledby="list-buy-list">You are to contribute to our contract address as displayed on our official website.</div>
                                                <div class="tab-pane fade" id="list-tunez" role="tabpanel" aria-labelledby="list-tunez-list">The Tunez token (TUNEZ) is a ERC20 token based on the Ethereum blockchain.</div>
                                                <div class="tab-pane fade" id="list-exchange" role="tabpanel" aria-labelledby="list-exchange-list">We would list on three exchanges immediately after ICO.</div>
                                                <div class="tab-pane fade" id="list-decentralized" role="tabpanel" aria-labelledby="list-decentralized-list">Initially, the TUNEZ platform will not be completely decentralized and will only work partially on the Ethereum blockchain. In the second phase it will be totally decentralized.</div>
                                                <div class="tab-pane fade" id="list-partnership" role="tabpanel" aria-labelledby="list-partnership-list">Yes of course we would be partnering. Post ICO we would build partnerships with artist and brands.</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--faq end-->

                        <!--support start-->
                        <div class="modal fade" id="support" tabindex="-1" role="dialog" aria-labelledby="supportLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content bg-dark">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                        <button id="closeSupport" type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                        <div class="form-group">
                                            <label for="sender-mail" class="col-form-label">From:</label>
                                            <input type="email" class="form-control" id="sender-mail">
                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label">Message:</label>
                                            <textarea class="form-control" id="message-text"></textarea>
                                        </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button id="sendSupport" type="button" class="btn btn-primary">Send message</button>
                                    </div>
                                </div>
                            </div>
                        </div><!--support end-->
                        <div class="col-sm-6 col-lg-4" style="display: block; margin: auto;">
                            <div class="footer-widget support" style="margin-top: 30px;">
                                <h4 class="widget-title text-center">Exchange Target</h4>
                                <div class="row">
                                    <div class="col-6">
                                        <ul>
                                            <li><img src="assets/images/footer/livecoin.jpg" alt="tunez-exchange-target-livecoin"></li>
                                            <li><img src="assets/images/footer/coinhub.jpg" alt="tunez-exchange-target-coinhub"></li>
                                            <li><img src="assets/images/footer/idex.jpg" alt="tunez-exchange-target-idex"></li>
                                        </ul>
                                    </div>
                                    <div class="col-6">
                                        <ul>
                                            <li><img src="assets/images/footer/kucoin.jpg" alt="tunez-exchange-target-kucoin"></li>
                                            <li><img src="assets/images/footer/mercatox.jpg" alt="tunez-exchange-target-mercatox"></li>
                                            <li><img src="assets/images/footer/tokenjar.jpg" alt="tunez-exchange-target-tokenjar"></li>
                                        </ul>
                                    </div>
                                </div>
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
    <script>
        $('#sendSupport').click(() => {
            let email = $('#sender-mail').val(),
                message = $('#message-text').val()
            if (email === '' || message === '') {
                $('#alert').css('display', 'block');
                // $('#sendSupport').html('sending...');
                $('#alertbox').html('<strong>Please fill all fields!</strong>');
                setTimeout(() => {
                    $('#alert').css('display', 'none');
                }, 2000);
            } else if (!/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email)) {
                $('#alert').css('display', 'block');
                $('#alertbox').html('<strong>Please input a valid email address!</strong>');
                setTimeout(() => {
                    $('#alert').css('display', 'none');
                }, 2000);
              } else {
                $('#sendSupport').html('sending...');
                $.ajax({
                    type: 'POST',
                    url: 'contact.php',
                    data: {
                        email: email,
                        message: message
                    },
                    success: function(response) {
                        $('#sendSupport').html('send message');
                        if (/Success/.test(response)) {
                            $('#sender-mail').val('');
                            $('#message-text').val('');
                            $('#closeSupport').trigger('click');
                            $('#alert').css('display', 'block');
                            $('#alertbox').html(`<strong>${response}</strong>`);
                            setTimeout(() => {
                                $('#alert').css('display', 'none');
                            }, 2000);
                        } else if (/not/.test(response)){
                            $('#alert').css('display', 'block');
                            $('#alertbox').html(`<strong>${response}</strong>`);
                            setTimeout(() => {
                                $('#alert').css('display', 'none');
                            }, 2000);
                        }
                    }
                })
            }
        });
    </script>

</body>

</html>
<!-- footer section end -->