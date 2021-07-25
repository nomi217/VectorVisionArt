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
    <title>Vector Vision</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/vendor.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/butthonstyle.css">
    <link rel="stylesheet" type="text/css" href="assets/css/footer.css">
    <link rel="stylesheet" type="text/css" href="assets/css/img-slider.css">

    <!-- script
    ================================================== -->
    <script src="assets/js/modernizr.js"></script>
    <script src="assets/js/pace.min.js"></script>

    <!-- favicons
    ================================================== -->
  
    <link rel="icon" href="assets/images/Vector-icon.png" type="image/x-icon">
    </style>
</head>

<body id="top">

    <!-- header
    ================================================== -->
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
                    <li class="current"><a class="smoothscroll"  href="#home" title="home">Home</a></li>
                    <li><a class="smoothscroll"  href="#about" title="about">About</a></li>
                    <li><a class="smoothscroll"  href="#services" title="services">Services</a></li>
                    <li><a class="smoothscroll"  href="#works" title="works">Works</a></li>
                    <li><a class="smoothscroll"  href="#clients" title="clients">Clients</a></li>
                    <li><a class="smoothscroll"  href="#contact" title="contact">Contact</a></li>
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


    <!-- home
    ================================================== -->
    <section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="assets/images/hero-bg.jpg" data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <div class="overlay"></div>
        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main">

                <h3>Welcome to Vector Vision</h3>

                <h1>
                    We are innove we <br/>
                    create great stuff.
                </h1>

                <div class="home-content__buttons">
                    <a href="#contact" class="smoothscroll btn btn--stroke">
                        Start a Project
                    </a>
                    <a href="#about" class="smoothscroll btn btn--stroke">
                        More About Us
                    </a>
                </div>

            </div>

            <div class="home-content__scroll">
                <a href="#about" class="scroll-link smoothscroll">
                    <span>Scroll Down</span>
                </a>
            </div>

             <!-- <div class="home-content__line"></div>  -->

        </div> <!-- end home-content -->


        <ul class="home-social">
            <li>
                <a href="https://www.facebook.com/vectorvisionart"><i class="fa fa-facebook" aria-hidden="true"></i><span>Facebook</span></a>
            </li>
            <li>
                <a href="https://twitter.com/Vectorvisionart?s=09"><i class="fa fa-twitter" aria-hidden="true"></i><span>Twiiter</span></a>
            </li>
            <li>
                <a href="https://www.instagram.com/vectorvisionart"><i class="fa fa-instagram" aria-hidden="true"></i><span>Instagram</span></a>
            </li>
            <li>
                <a href="https://www.behance.net/vectorvisi554e"><i class="fa fa-behance" aria-hidden="true"></i><span>Behance</span></a>
            </li>
            <li>
                <a href="https://dribbble.com/vectorvisionart"><i class="fa fa-dribbble" aria-hidden="true"></i><span>Dribbble</span></a>
            </li>
        </ul> 
        <!-- end home-social -->

    </section> <!-- end s-home -->


    <!-- about
    ================================================== -->
    <section id='about' class="s-about">

        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead subhead--dark">Hello There</h3>
                <h1 class="display-1 display-1--light">We Are Vector Vision</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row about-desc" data-aos="fade-up">
            <div class="col-full">
                <p align="justify">
               Hi! We're VECTOR VISION and everything we do is to help you and your organization succeed. We
				want to help you grow your marketing, sales, business, and career.
				we provide inclusive services of Web Design, Website Development, Graphic designing and IT
				services. Having the team of expert designers, marketing professionals, web developers that can
				drive your business towards the desired destination and take you where you want. We have
				learnt that the great designs team work at once; it needs patience, effective teamwork and
				creativity to bring something that is just awesome!
 
                </p>
            </div>
        </div> <!-- end about-desc -->

        <div class="row about-stats stats block-1-4 block-m-1-2 block-mob-full" data-aos="fade-up">
                
            <div class="col-block stats__col ">
                <div class="stats__count">27</div>
                <h5>Awards Received</h5>
            </div>
            <div class="col-block stats__col">
                <div class="stats__count">2</div>
                <h5>Year of Experienced</h5>
            </div>
            <div class="col-block stats__col">
                <div class="stats__count">70</div>
                <h5>Projects Completed</h5>
            </div>
            <div class="col-block stats__col">
                <div class="stats__count">67</div>
                <h5>Happy Clients</h5> 
            </div>

        </div> <!-- end about-stats -->

        <!-- <div class="about__line"></div> -->

    </section> <!-- end s-about -->


    <!-- services
    ================================================== -->
    <section id='services' class="s-services">

        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">What We Do</h3>
                <h1 class="display-2">We’ve got everything you need to launch and grow your business</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row services-list block-1-2 block-tab-full" align="justify">

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i class="icon-paint-brush"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">Brand Identity</h3>
                    <p align="justify">The creation of a coherent, powerful and creative brand image allows the company to differentiate from
					the competition and increase brand awareness.
					The real competitive advantage is not a single factor, but the sum of many. It’s like several diamonds
					and even the small ones are extremely valuable.

                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
			<i class="icon-lego-block"></i>                </div>
                <div class="service-text">
                    <h3 class="h2">Web Development</h3>
                    <p align="justify">Cutting-edge technologies and battle-tested solutions are used for web development at Vector Vision.
					Vector Vision is the best web development company, has a gifted and resourceful team of web
					developers who render a broad scope of customized solutions to large reputable businesses and startups
					through execution. </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i class="icon-mobile"></i>
                </div>  
                <div class="service-text">
                    <h3 class="h2">Android App Development</h3>
                    <p align="justify">We help companies from around the world find experts for Android app development outsourcing.
						Android developers at Vector Vision serve clients across a variety of industries including travel &
						hospitality, telecom, retail, media, healthcare, fintech, education, etc. You will get full-cycle Android
						mobile app development services.
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i><img src="assets/images/monitor.png" style="color: #39b54a" width="55px" height="55px"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">Web Design</h3>
                    <p align="justify">Having a unique & responsive website design is very important part of branding and promoting
					method of your business.Creating websites is much pious task of originality. We seek,in every project, attractive, accessibility, usability,so that the information is disseminated in an intuitive and effortless manner.
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i class="icon-cube"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">Graphic Design</h3>
                    <p align="justify">Graphic designing is the art of communicating and conveying a message through an effective
						combination of images, icons, logos, and words.When we deliver
						our message with the help of a visual medium such as making a poster or an ad, we
						are communicating through graphic design.
                    </p>
                </div>
            </div>
    
            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon"><i class="icon-group"></i></div>
                <div class="service-text">
                    <h3 class="h2">Illustration</h3>
                    <p align="justify">We deliver a wide range of services in illustration and motion graphics and we help creative thinkers
					connect with illustrators and motion graphic artists –so they we transform their ideas into powerful
					visual content. Our illustration services include line art sketches, gaming characters, website
					illustrations, comic illustration etc.
                    </p>
                </div>
            </div>

        </div> <!-- end services-list -->

    </section> <!-- end s-services -->


    <!-- works
    ================================================== -->
    <section id='works' class="s-works">

        <div class="intro-wrap">
                
            <div class="row section-header has-bottom-sep light-sep" data-aos="fade-up">
                <div class="col-full">
                    <h3 class="subhead">Recent Works</h3>
                    <h1 class="display-2 display-2--light">We love what we do, check out some of our latest works</h1>
                </div>
            </div> <!-- end section-header -->

        </div> <!-- end intro-wrap -->

        <div class="row works-content">
            <div class="col-full masonry-wrap">
                <div class="masonry"><!--start masnory-->
                    <?php
                    showportf();
                    ?>

                </div> <!-- end masonry -->
            </div> <!-- end col-full -->
        </div> <!-- end works-content -->
        <button class="btnshow"><a href="#" onclick="alert('Coming Soon');" style="color: #fff"> See More</a></button>

    </section> <!-- end s-works -->


    <!-- clients
    ================================================== -->
    <section id="clients" class="s-clients">

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Our Clients</h3>
                <h1 class="display-2">Vector Vision has been honored to
                partner up with these clients</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row clients-outer" data-aos="fade-up">
            <div class="col-full">
                <div class="clients">
                    
                    <a href="#0" title="" class="clients__slide"><img src="assets/images/logo/netware.png" style="min-width: 350px;height: 300px" /></a>

                </div> <!-- end clients -->
            </div> <!-- end col-full -->
        </div> <!-- end clients-outer -->

        <div class="row clients-testimonials" data-aos="fade-up">
            <div class="col-full">
                <div class="testimonials">

                    <div class="testimonials__slide">

                        <p align="justify" style="font-size: 20px;"><q>As you navigate our website, I hope you can learn about the qualities and services that make our
						company an outstanding and unique provider of essential IT related services in this vast digital market.
						I am <b>Arslan Amjad</b> and I am honoured to be the founder of Vector Vision. I feel very privileged to be writing
						this message as the Founder and I am committed to growing the company and win the trust, confidence,
						and heart of our customers.
						Our company stands firm on the four pillars which are, <b>Excellence, Creativity, Quality, and Client
						Satisfaction</b>.
						We aim to be a digital services group that people need and our clients' trust. we look forward to your
						support..</q></p>

                        <img src="assets/images/arslan.jpg" alt="Founder Image" class="testimonials__avatar">
                        <div class="testimonials__info">
                            <span class="testimonials__name">Arslan Amjad</span> 
                            <span class="testimonials__pos">Founder, Vector Vision</span>
                        </div>

                    </div>

                    <div class="testimonials__slide">
                        
                    <p align="justify" style="font-size: 20px;"><q>Vector Vision is a well-balanced digital-based solution provider. Our motivation comes from
					our most valuable assets – our people, our technology, and relentless focus on creative work
					for our customers.
					I am <b>Nauman Khalid</b> and I would like to welcome you to the vector vision website. As the co-founder
					of Vector vision, I appreciate that you have allowed us to provide you the best services of
					ours. <b>Innovation</b> has remained the cornerstone of our company. An effective approach and
					efficient work merged with innovative ideas provide a great opportunity to produce the best
					thing for a client.</q>
					</p>

                        <img src="assets/images/nomi2.jpg" alt="Co Founder Image" class="testimonials__avatar">
                        <div class="testimonials__info">
                            <span class="testimonials__name">Nauman Khalid</span> 
                            <span class="testimonials__pos">Co Founder, Vector Vision</span>
                        </div>

                    </div>

                    </div>

                </div><!-- end testimonials -->
                
            </div> <!-- end col-full -->
        </div> <!-- end client-testimonials -->

    </section> <!-- end s-clients -->


    <!-- contact
    ================================================== -->
    <section id="contact" class="s-contact">

        <div class="overlay"></div>
        <!-- <div class="contact__line"></div> -->

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Contact Us</h3>
                <h1 class="display-2 display-2--light">Reach out for a new project or just say hello</h1>
            </div>
        </div>

        <div class="row contact-content" data-aos="fade-up">
            
            <div class="contact-primary">

                <h3 class="h6">Send Us A Message</h3>

                <form method="post" action="action/contact.php" id="contactform" name="contactform">
                    <fieldset>
    
                    <div class="form-field">
                        <input name="contactName" type="text" id="contactName" placeholder="Full Name" value="" required=""  class="full-width">
                    </div>
                    <div class="form-field">
                        <input name="contactEmail" type="email" id="contactEmail" placeholder="Your Email" pattern="^[a-zA-Z]+[0-9a-zA-Z_\.]*@[a-zA-Z]+\.[a-z]+$" title="Email Format will be everything@gmail.com"value="" required="" class="full-width">
                    </div>
                    <div class="form-field">
                        <input name="contactSubject" type="text" id="contactSubject" placeholder="Subject" value="" class="full-width">
                    </div>
                    <div class="form-field">
                        <textarea name="contactMessage" id="contactMessage" placeholder="Your Message" rows="10" cols="50" required=""  class="full-width"></textarea>
                    </div>
                    <div class="form-field">
                        <button class="full-width btn--primary" name="contact_us" id="contact_us">Submit</button>

                        <div class="submit-loader">
                            <div class="text-loader">Sending...</div>
                            <div class="s-loader">
                                <div class="bounce1"></div>
                                <div class="bounce2"></div>
                                <div class="bounce3"></div>
                            </div>
                        </div>
                         <div class="message_box" style="margin:10px 0px;">
                    </div>

                    </fieldset>
                </form>

            </div> <!-- end contact-primary -->

            <div class="contact-secondary">
                <div class="contact-info">

                    <h3 class="h6 hide-on-fullwidth">Contact Info</h3>

                    <div class="cinfo">
                        <h5>Where to Find Us</h5>
                        <p>
                            Lahore, Pakistan<br>
                        </p>
                    </div>

                    <div class="cinfo">
                        <h5>Email Us At</h5>
                        <p>
                            contact@vectorvisionart.com<br>
                            info@vectorvisionart.com <br>
                            vectorvisionart@gmail.com
                        </p>
                    </div>

                    <div class="cinfo">
                        <h5>Call Us At</h5>
                        <p>
                            Phone: (+92) 320 0852366<br>
                            Mobile: (+92) 332 1526216<br>
                        </p>
                    </div>

                    <ul class="contact-social">
                        <li>
                            <a href="https://www.facebook.com/vectorvisionart"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/Vectorvisionart?s=09"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/vectorvisionart"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="https://www.behance.net/vectorvisi554e"><i class="fa fa-behance" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="https://dribbble.com/vectorvisionart"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                        </li>
                    </ul> <!-- end contact-social -->

                </div> <!-- end contact-info -->
            </div> <!-- end contact-secondary -->

        </div> <!-- end contact-content -->

    </section> <!-- end s-contact -->


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
    <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">

            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title=
                    "Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title=
                    "Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title=
                "Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>

        </div>

    </div> <!-- end photoSwipe background -->


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
</body>

</html>
