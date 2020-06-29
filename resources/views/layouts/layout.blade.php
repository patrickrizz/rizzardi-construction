<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta description="A tusted local construction company in Erie, PA. Providing value construction services by creating long masting partnerships with our clients">
    
    <title>Remodeling and Construction | Rizzardi</title>

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.min.css">

    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-111714213-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        
        gtag('config', 'UA-111714213-2');
    </script>
    <!-- End Google Analytics -->


</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="site-wrap" id="home-section">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        <header class="site-navbar site-navbar-target" role="banner">
            <div class="container">                
                <div class="row align-items-center position-relative">
                    <div class="col-md-3 ">
                        <div class="site-logo">
                            <a href="/"><strong>Rizzardi</strong>Construction</a>
                        </div>
                    </div>
                    <div class="col-md-9  text-right">

                        <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>

                        <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav ml-auto ">
                                <li 

                                @if (Request::is('/'))                                
                                class="active"
                                @endif

                                ><a href="/" class="nav-link">Home</a></li>
                                {{-- <li 

                                @if (Request::is('about'))                                
                                class="active"
                                @endif
                                
                                ><a href="about" class="nav-link">About</a></li>
                                <li 

                                @if (Request::is('services'))                                
                                class="active"
                                @endif
                                
                                ><a href="services" class="nav-link">Services</a></li>
                                <li 

                                @if (Request::is('projects'))                                
                                class="active"
                                @endif
                                
                                ><a href="projects" class="nav-link">Projects</a></li>
                                <li 

                                @if (Request::is('blog'))                                
                                class="active"
                                @endif
                                
                                ><a href="blog" class="nav-link">Blog</a></li> --}}
                                <li 

                                @if (Request::is('contact'))                                
                                class="active"
                                @endif
                                
                                ><a href="contact" class="nav-link">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

@yield('content')

<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <h2 class="footer-heading mb-4">About Us</h2>
                <p>Skilled construction worker with over 10 years’ experience in performing reparative and preventative maintenance in home and commercial industries. Adept at overhauling, repair, and installation of physical structures, plumbing, and electrical systems.</p>
            </div>
            <div class="col-lg-8 ml-auto">
              {{--  <div class="row">
                     <div class="col-lg-3">
                        <h2 class="footer-heading mb-4">Quick Links</h2>
                        <ul class="list-unstyled">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Testimonials</a></li>
                            <li><a href="#">Terms of Service</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3">
                        <h2 class="footer-heading mb-4">Quick Links</h2>
                        <ul class="list-unstyled">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Testimonials</a></li>
                            <li><a href="#">Terms of Service</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div> --}}
                    <div class="col-lg-6">
                        <h2 class="footer-heading mb-4">Quick Links</h2>                       
                        <div style="width: 100%"><iframe width="100%" height="300" src="https://maps.google.com/maps?width=100%&amp;height=300&amp;hl=en&amp;coord=42.09595,80.11912&amp;q=Erie%2C%20PA+(Rizzardi%20Remodeling)&amp;ie=UTF8&amp;t=k&amp;z=15&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="yes" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/draw-radius-circle-map/">Radius map tool</a></iframe></div><br />
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
                <div class="border-top pt-5">
                    <p>
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> 
                        All rights reserved | Rizzardi Construction
                    </p>
                </div>
            </div>

        </div>
    </div>
</footer>

</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/aos.js"></script>

<script src="js/main.js"></script>

</body>

</html>