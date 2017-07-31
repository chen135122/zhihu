<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('/css/normalize.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.css') }}">
        <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}">
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        <link rel="stylesheet" href="{{ asset('css/queries.css') }}">
        <link rel="stylesheet" href="{{ asset('css/etline-font.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/search-form.css') }}">
        <script src="{{ asset('js/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/retina.js') }}"></script>
        <script src="{{ asset('js/jquery.fancybox.pack.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/scripts.js') }}"></script>
        <script src="{{ asset('js/jquery.flexslider-min.js') }}"></script>
        <script src="{{ asset('js/classie.js') }}"></script>
        <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
        <script src="http://libs.baidu.com/html5shiv/3.7/html5shiv.min.js"></script>
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/img/pexels-photo-463684.ico') }}" media="screen" />
        <title>Laravel</title>
    <body id="top">
    <section class="hero">
        <section class="navigation fixed">
            <header style="border-bottom-style: none; padding: 35px 0px;">
                <div class="header-content">
                    <div class="logo"><a href=""></a></div>
                    <div class="header-nav">
                        <nav>
                            <ul class="primary-nav">
                                <li><a href="">Features</a></li>
                                <li><a href="">Assets</a></li>
                                <li><a href="">Blog</a></li>
                                <li><a href="">Download</a></li>
                                <li><form onsubmit="submitFn(this, event);">
                                        <div class="search-wrapper">
                                            <div class="input-holder">
                                                <input type="text" class="search-input" placeholder="Type to search" />
                                                <button class="search-icon" onclick="searchToggle(this, event);"><span></span></button>
                                            </div>
                                            <span class="close" onclick="searchToggle(this, event);"></span>
                                            <div class="result-container">

                                            </div>
                                        </div>
                                    </form></li>
                            </ul>

                            <ul class="member-actions" style="top: 26px;">
                                @if (Auth::check())
                                    <li><a href="{{ url('/home') }}" class="login">Home</a></li>
                                @else
                                    <li><a href="{{ url('/login') }}" class="login">Login</a></li>
                                    <li><a href="{{ url('/register') }}" class="btn-white btn-small">Register</a></li>
                                @endif
                            </ul>
                        </nav>
                    </div>
                    <div class="navicon" style="top: 34px;">
                        <a class="nav-toggle" href=""><span></span></a>
                    </div>
                </div>
            </header>
        </section>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="hero-content text-center">
                        <h1>Design, collaborate, win!</h1>
                        <p class="intro">Introducing “Sedna”. A responsive one page website, designed &amp; developed by
                            Peter Finlan, exclusively for Codrops.</p>
                        <a href="http://www.templatesy.com/demo/359/index.html#"
                           class="btn btn-fill btn-large btn-margin-right">Download</a> <a
                                href="http://www.templatesy.com/demo/359/index.html#" class="btn btn-accent btn-large">Learn
                            more</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="down-arrow floating-arrow"><a href="http://www.templatesy.com/demo/359/index.html#"><i
                        class="fa fa-angle-down"></i></a></div>
    </section>

    <section class="intro section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4 intro-feature">
                    <div class="intro-icon">
                        <span data-icon="" class="icon"></span>
                    </div>
                    <div class="intro-content">
                        <h5>Easily Customised</h5>
                        <p>Easily customise Sedna to suit your start up, portfolio or product. Take advantage of the layered
                            Sketch file and bring your product to life.</p>
                    </div>
                </div>
                <div class="col-md-4 intro-feature">
                    <div class="intro-icon">
                        <span data-icon="" class="icon"></span>
                    </div>
                    <div class="intro-content">
                        <h5>Modern Design</h5>
                        <p>Designed with modern trends and techniques in mind, Sedna will help your product stand out in an
                            already saturated market.</p>
                    </div>
                </div>
                <div class="col-md-4 intro-feature">
                    <div class="intro-icon">
                        <span data-icon="" class="icon"></span>
                    </div>
                    <div class="intro-content last">
                        <h5>Responsive Development</h5>
                        <p>Built using the latest web technologies like html5, css3, and jQuery, rest assured Sedna will
                            look smashing on every device under the sun.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="features section-padding" id="features">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-offset-7">
                    <div class="feature-list">
                        <h3>Sedna will drive your product forward</h3>
                        <p>Present your product, start up, or portfolio in a beautifully modern way. Turn your visitors in
                            to clients.</p>
                        <ul class="features-stack">
                            <li class="feature-item">
                                <div class="feature-icon">
                                    <span data-icon="" class="icon"></span>
                                </div>
                                <div class="feature-content">
                                    <h5>Universal &amp; Responsive</h5>
                                    <p>Sedna is universal and will look smashing on any device.</p>
                                </div>
                            </li>
                            <li class="feature-item">
                                <div class="feature-icon">
                                    <span data-icon="" class="icon"></span>
                                </div>
                                <div class="feature-content">
                                    <h5>User Centric Design</h5>
                                    <p>Sedna takes advantage of common design patterns, allowing for a seamless experience
                                        for users of all levels.</p>
                                </div>
                            </li>
                            <li class="feature-item">
                                <div class="feature-icon">
                                    <span data-icon="" class="icon"></span>
                                </div>
                                <div class="feature-content">
                                    <h5>Clean reusable code</h5>
                                    <p>Download and re-use the Sedna open source code for any other project you like.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="device-showcase">
            <div class="devices">
                <div class="ipad-wrap wp1 animated fadeInUp"></div>
                <div class="iphone-wrap wp2 animated fadeInUp"></div>
            </div>
        </div>
        <div class="responsive-feature-img"><img src="./Home_files/devices.png" alt="responsive devices"></div>
    </section>
    <section class="features-extra section-padding" id="assets">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="feature-list">
                        <h3>Designed with Sketch!</h3>
                        <p>Easily change/switch/swap every placeholder inside every image on Sedna with the included Sketch
                            files. You’ll have this template customised to suit your business in no time! </p>
                        <p>Nam vehicula malesuada lectus, interdum fringilla nibh. Duis aliquam vitae metus a pharetra.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec fermentum augue quis augue
                            ornare, eget faucibus felis pharetra. Proin condimentum et leo quis fringilla.
                        </p>
                        <a href="http://www.templatesy.com/demo/359/index.html#" class="btn btn-ghost btn-accent btn-small">What's
                            Sketch?</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="macbook-wrap wp3 animated fadeInRight"></div>
        <div class="responsive-feature-img"><img src="./Home_files/macbook-pro.png" alt="responsive devices"></div>
    </section>
    <section class="hero-strip section-padding">
        <div class="container">
            <div class="col-md-12 text-center">
                <h2>
                    Customise Sedna with the included <span class="sketch">Sketch <i class="version">3</i></span> file
                </h2>
                <p>Change/swap/edit every aspect of Sedna before you hit development with the included Sketch file.</p>
                <a href="http://www.templatesy.com/demo/359/index.html#" class="btn btn-ghost btn-accent btn-large">Download
                    now!</a>
                <div class="logo-placeholder floating-logo"><img src="./Home_files/sketch-logo.png" alt="Sketch Logo"></div>
            </div>
        </div>
    </section>
    <section class="blog-intro section-padding" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Showcase your smashing product with Sedna</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12 leftcol">
                    <h5>EXCLUSIVE TO CODROPS</h5>
                    <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                        aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                        est laborum.</p>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 rightcol">
                    <h5>SPREADING PIXELS AROUND THE WORLD</h5>
                    <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                        aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                        est laborum.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="blog text-center">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <article class="blog-post">
                        <figure>
                            <a href="./Home_files/blog-img-01.jpg" class="single_image">
                                <div class="blog-img-wrap">
                                    <div class="overlay">
                                        <i class="fa fa-search"></i>
                                    </div>
                                    <img src="./Home_files/blog-img-01.jpg" alt="Sedna blog image">
                                </div>
                            </a>
                            <figcaption>
                                <h2><a href="http://www.templatesy.com/demo/359/index.html#" class="blog-category"
                                       data-toggle="tooltip" data-placement="top" data-original-title="See more posts">Product</a>
                                </h2>
                                <p><a href="http://www.templatesy.com/demo/359/index.html#" class="blog-post-title">Getting
                                        started with Sedna <i class="fa fa-angle-right"></i></a></p>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="blog-post">
                        <figure>
                            <a href="./Home_files/blog-img-02.jpg" class="single_image">
                                <div class="blog-img-wrap">
                                    <div class="overlay">
                                        <i class="fa fa-search"></i>
                                    </div>
                                    <img src="./Home_files/blog-img-02.jpg" alt="Sedna blog image">
                                </div>
                            </a>
                            <figcaption>
                                <h2><a href="http://www.templatesy.com/demo/359/index.html#" class="blog-category"
                                       data-toggle="tooltip" data-placement="top" data-original-title="See more posts">Technology</a>
                                </h2>
                                <p><a href="http://www.templatesy.com/demo/359/index.html#" class="blog-post-title">Why IE8
                                        support is deminishing <i class="fa fa-angle-right"></i></a></p>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="blog-post">
                        <figure>
                            <a href="./Home_files/blog-img-03.jpg" class="single_image">
                                <div class="blog-img-wrap">
                                    <div class="overlay">
                                        <i class="fa fa-search"></i>
                                    </div>
                                    <img src="./Home_files/blog-img-03.jpg" class="single_image" alt="Sedna blog image">
                                </div>
                            </a>
                            <figcaption>
                                <h2><a href="http://www.templatesy.com/demo/359/index.html#" class="blog-category"
                                       data-toggle="tooltip" data-placement="top" data-original-title="See more posts">Product</a>
                                </h2>
                                <p><a href="http://www.templatesy.com/demo/359/index.html#" class="blog-post-title">Sedna
                                        tutorial: How to begin your <i class="fa fa-angle-right"></i></a></p>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <a href="http://www.templatesy.com/demo/359/index.html#" class="btn btn-ghost btn-accent btn-small">More
                    news</a>
            </div>
        </div>
    </section>
    <section class="testimonial-slider section-padding text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="flexslider">

                        <div class="flex-viewport" style="overflow: hidden; position: relative;">
                            <ul class="slides"
                                style="width: 1000%; transition-duration: 0s; transform: translate3d(-1140px, 0px, 0px);">
                                <li class="clone" aria-hidden="true" style="width: 1140px; float: left; display: block;">
                                    <div class="avatar"><img src="./Home_files/130.jpg" alt="Sedna Testimonial Avatar"
                                                             draggable="false"></div>
                                    <h2>"Nullam ac urna ornare, ultrices nisl ut, lacinia nisi."</h2>
                                    <p class="author">Blaz Robar, Pixel Guru</p>
                                </li>
                                <li class="flex-active-slide" style="width: 1140px; float: left; display: block;">
                                    <div class="avatar"><img src="./Home_files/avatar.jpg" alt="Sedna Testimonial Avatar"
                                                             draggable="false"></div>
                                    <h2>"Lorem ipsum dolor sit amet, nullam lucia nisi."</h2>
                                    <p class="author">Peter Finlan, Product Designer.</p>
                                </li>
                                <li class="" style="width: 1140px; float: left; display: block;">
                                    <div class="avatar"><img src="./Home_files/mani.jpg" alt="Sedna Testimonial Avatar"
                                                             draggable="false"></div>
                                    <h2>"Nunc vel maximus purus. Nullam ac urna ornare."</h2>
                                    <p class="author">Manoela Ilic, Founder @ Codrops.</p>
                                </li>
                                <li class="" style="width: 1140px; float: left; display: block;">
                                    <div class="avatar"><img src="./Home_files/130.jpg" alt="Sedna Testimonial Avatar"
                                                             draggable="false"></div>
                                    <h2>"Nullam ac urna ornare, ultrices nisl ut, lacinia nisi."</h2>
                                    <p class="author">Blaz Robar, Pixel Guru</p>
                                </li>
                                <li class="clone" aria-hidden="true" style="width: 1140px; float: left; display: block;">
                                    <div class="avatar"><img src="./Home_files/avatar.jpg" alt="Sedna Testimonial Avatar"
                                                             draggable="false"></div>
                                    <h2>"Lorem ipsum dolor sit amet, nullam lucia nisi."</h2>
                                    <p class="author">Peter Finlan, Product Designer.</p>
                                </li>
                            </ul>
                        </div>
                        <ol class="flex-control-nav flex-control-paging">
                            <li><a class="flex-active">1</a></li>
                            <li><a class="">2</a></li>
                            <li><a class="">3</a></li>
                        </ol>
                        <ul class="flex-direction-nav">
                            <li class="flex-nav-prev"><a class="flex-prev"
                                                         href="http://www.templatesy.com/demo/359/index.html#">Previous</a>
                            </li>
                            <li class="flex-nav-next"><a class="flex-next"
                                                         href="http://www.templatesy.com/demo/359/index.html#">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sign-up section-padding text-center" id="download">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h3>Get started with Sedna, absolutely free</h3>
                    <p>Grab your copy today, exclusively from Codrops</p>
                    <form class="signup-form" action="http://www.templatesy.com/demo/359/index.html#" method="POST"
                          role="form">
                        <div class="form-input-group">
                            <i class="fa fa-envelope"></i><input type="text" class="" placeholder="Enter your email"
                                                                 required="">
                        </div>
                        <div class="form-input-group">
                            <i class="fa fa-lock"></i><input type="text" class="" placeholder="Enter your password"
                                                             required="">
                        </div>
                        <button type="submit" class="btn-fill sign-up-btn">Sign up for free</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="to-top">
        <div class="container">
            <div class="row">
                <div class="to-top-wrap">
                    <a href="http://www.templatesy.com/demo/359/index.html#top" class="top"><i
                                class="fa fa-angle-up"></i></a>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="footer-links">
                        <ul class="footer-group">
                            <li><a href="http://www.templatesy.com/demo/359/index.html#">Features</a></li>
                            <li><a href="http://www.templatesy.com/demo/359/index.html#">Pricing</a></li>
                            <li><a href="http://www.templatesy.com/demo/359/index.html#">Sign up</a></li>
                            <li><a href="http://www.templatesy.com/demo/359/index.html#">Licence</a></li>
                            <li><a href="http://www.templatesy.com/demo/359/index.html#">Codrops</a></li>
                            <li><a href="http://www.templatesy.com/demo/359/index.html#">Peter Finlan</a></li>
                        </ul>
                        <p>Copyright © 2016 <a href="http://www.templatesy.com/demo/359/index.html#">Sedna</a><br>
                            <a href="http://www.templatesy.com/demo/359/index.html#">Licence</a> | Crafted with <span
                                    class="fa fa-heart pulse2"></span> by <a
                                    href="http://www.templatesy.com/demo/359/index.html#">Peter Finlan</a>.</p>
                    </div>
                </div>
                <div class="social-share">
                    <p>Share Sedna with your friends</p>
                    <a href="http://www.templatesy.com/demo/359/index.html#" class="twitter-share"><i
                                class="fa fa-twitter"></i></a> <a href="http://www.templatesy.com/demo/359/index.html#"
                                                                  class="facebook-share"><i class="fa fa-facebook"></i></a>
                </div>
            </div>
        </div>
    </footer>
    @yield('content')
    <script type="text/javascript">
        function searchToggle(obj, evt){
            var container = $(obj).closest('.search-wrapper');

            if(!container.hasClass('active')){
                container.addClass('active');
                evt.preventDefault();
            }
            else if(container.hasClass('active') && $(obj).closest('.input-holder').length == 0){
                container.removeClass('active');
                // clear input
                container.find('.search-input').val('');
                // clear and hide result container when we press close
                container.find('.result-container').fadeOut(100, function(){$(this).empty();});
            }
        }

        function submitFn(obj, evt){
            value = $(obj).find('.search-input').val().trim();

            _html = "Yup yup! Your search text sounds like this: ";
            if(!value.length){
                _html = "Yup yup! Add some text friend :D";
            }
            else{
                _html += "<b>" + value + "</b>";
            }

            $(obj).find('.result-container').html('<span>' + _html + '</span>');
            $(obj).find('.result-container').fadeIn(100);

            evt.preventDefault();
        }
    </script>
    </body>
</html>
