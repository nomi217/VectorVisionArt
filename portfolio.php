<?php
include 'admin-area/db/connection.php';
include 'assets/functions/showportfolio.php';
?>

<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Vector Vision | Portfolio</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/vendor.css">
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <link rel="stylesheet" href="assets/css/butthonstyle.css">
    <link rel="stylesheet" type="text/css" href="assets/css/footer.css">
    <!-- Portfolio -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/portfolio/css/themify-icons.css">
 <!-- main css -->
    <link rel="stylesheet" href="assets/portfolio/css/portfolio-style.css">
<link rel="stylesheet" href="assets/portfolio/vendors/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/portfolio/vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/portfolio/vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/portfolio/vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="assets/portfolio/vendors/linericon/style.css">
    <!-- script
    ================================================== -->
    <script src="assets/js/modernizr.js"></script>
    <script src="assets/js/pace.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="icon" href="assets/images/logo/Vector's-Logo-withouttext.png" type="image/x-icon">

</head>

<body id="top">
<header class="s-header">

        <div class="header-logo">
            <a class="site-logo" href="index.php">
                <img src="assets/images/logo/Vector's Logo Update.png" alt="Homepage">
            </a>
        </div>

        <nav class="header-nav">

            <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>

            <div class="header-nav__content">
                <h3>Navigation</h3>
                
                <ul class="header-nav__list">
                    <li><a href="index.php" title="home">Home</a></li>
                </ul>
    
                <p align="justify">Hi! We're <a href='index.php'>VECTOR VISION</a>  and everything we do is to help you and your organization succeed. We want to help you grow your marketing, sales, business, and career. </p>
    
                <ul class="header-nav__social">
                    <li>
                        <a href="https://www.facebook.com/vectorvisionart"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/Vectorvisionart?s=09"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/vectorvisionart"><i class="fa fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="https://www.behance.net/vectorvisi554e"><i class="fa fa-behance"></i></a>
                    </li>
                    <li>
                        <a href="https://dribbble.com/vectorvisionart"><i class="fa fa-dribbble"></i></a>
                    </li>
                </ul>

            </div> <!-- end header-nav__content -->

        </nav>  <!-- end header-nav -->

        <a class="header-menu-toggle" href="#0">
            <span class="header-menu-text">Menu</span>
            <span class="header-menu-icon"></span>
        </a>

    </header> <!-- end s-header -->

  <!--================ Start Banner Area =================-->
  <section class="banner_area" id="home" >
      <div class="banner_inner d-flex align-items-center">
          <div class="container">
              <div class="banner_content text-center">
                  <h2>Portfolio</h2>
                  <div class="page_link">
                      <a href="index.php">Home</a>
                      <a href="portfolio.php">Portfolio</a>
                  </div>
              </div>
          </div>
      </div>

  </section>
  <!--================ End Banner Area =================-->


<!--================ Start Portfolio Area =================-->
    <section class="portfolio_area section-margin pb-0" id="portfolio" style="margin-top: -1px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main_title">
                        <p class="top_text" style="padding-top: 40px">Our Portfolio<span></span></p>
                        <h2>Check Our Recent <br>
                            Client Work </h2>
                    </div>
                </div>
            </div>

            <div class="filters portfolio-filter" style="margin-left: 180px">
                <ul>
                    <li class="active" data-filter="*">all</li>
                    <li data-filter=".popular">popular</li>
                    <li data-filter=".latest"> latest</li>
                    <li data-filter=".following">following</li>
                    <li data-filter=".upcoming">upcoming</li>
                </ul>
            </div>

            <div class="filters-content">
                <div class="row portfolio-grid">
                    <div class="grid-sizer col-md-3 col-lg-3"></div>
                    
                    <div class="col-lg-6 col-md-6 all following">
                        <div class="single_portfolio">
                        
                                <?php
                    showportf();
                    ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--================ End Portfolio Area =================-->




    <!-- footer
    ================================================== -->
    <footer>

        <div class="row footer-main">

            <div class="col-six tab-full left footer-desc" align="justify">

                <div class="footer-logo"></div>
                Hi! We're VECTOR VISION and everything we do is to help you and your organization succeed. We
                want to help you grow your marketing, sales, business, and career. 

            </div>

            <div class="col-six tab-full right footer-subscribe">

                <h4>Get Notified</h4>
                <p align="justify">Get awesome design content in your inbox every week</p>

                <div class="subscribe-form">
                    <form id="mcform" class="group" method="post" action="action/subscribe.php">
                        <input type="email" value="" name="email" class="email" id="email" placeholder="Email Address" required="">
                        <input type="submit" name="subscribe" value="Subscribe">
                        <label for="email" class=""></label>
                    </form>
                </div>

            </div>

        </div> <!-- end footer-main -->

        <div class="row footer-bottom">

            <div class="col-twelve">
                <div class="copyright">
                    <span>© Copyright Vector Vision 2020</span> 
                </div>

                <div class="gotop" id="gotop">
                    <a class="smoothscroll" title="Back to Top" href="#top" style="float: right;margin-right: -200px">Back to Top<i class="icon-arrow-up" aria-hidden="true"></i></a>
                </div>
            </div>

        </div> <!-- end footer-bottom -->

    </footer> <!-- end footer -->


    <!-- photoswipe background
    ================================================== -->
     <!-- end photoSwipe background -->


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
            <div class="line-scale-pulse-out">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>


    <!-- Java Script
    ================================================== -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/app.js"></script>
    <!-- Portfolio -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/portfolio/js/jquery-3.2.1.min.js"></script>
    <script src="assets/portfolio/js/popper.js"></script>
    <script src="assets/portfolio/js/bootstrap.min.js"></script>
    <script src="assets/portfolio/js/stellar.js"></script>
    <script src="assets/portfolio/vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="assets/portfolio/vendors/isotope/isotope-min.js"></script>
    <script src="assets/portfolio/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/portfolio/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets/portfolio/js/mail-script.js"></script>
    <!--gmaps Js-->
    <script src="assets/portfolio/js/theme.js"></script>

</body>

</html>
