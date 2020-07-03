<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A trusted local construction company in Erie, PA. Providing valued remodeling services by creating long-lasting partnerships with our clients. Contact us today">
    <title>{{ $title }}</title>

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    
    <!-- Font stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,700&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="fonts/icomoon/style.css" media="print" onload="this.media='all'">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.min.css" media="print" onload="this.media='all'">

    <!-- Google Analytics -->
    <script async defer src="https://www.googletagmanager.com/gtag/js?id=UA-111714213-2"></script>
    <script async defer>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());        
        gtag('config', 'UA-111714213-2');
    </script>
    <!-- End Google Analytics -->
    <!-- Schema -->
    <script type="application/ld+json" async defer>
        {
          "@context" : "http://schema.org",
          "@type" : "LocalBusiness",
          "name" : "RizzardiConstruction",
          "telephone" : "+1 (814) 688-0382",
          "email" : "patrick.d.rizzardi@gmail.com",
          "address" : {
            "@type" : "PostalAddress",
            "streetAddress" : "2027 W 25th St.",
            "addressLocality" : "Erie,",
            "addressRegion" : "PA",
            "addressCountry" : "United States"
          },
          "image" : [ "https://rizzardiconstruction.com/images/myPics/kitchen.jpg", "https://rizzardiconstruction.com/images/myPics/bathroom.jpg", "https://rizzardiconstruction.com/images/myPics/house.jpg", "https://rizzardiconstruction.com/images/myPics/deck.jpg", "https://rizzardiconstruction.com/images/myPics/siding.jpg", "https://rizzardiconstruction.com/images/hero_1.jpg" ]
        }
        </script>
    <!-- End of Schema -->
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
                <div class="banner row">
                    <div class="col-12 text-right">
                        <a href="tel:814-688-0382"><span class="icon-phone-square"></span> (814) 688-0382</a>
                        <a href="mailto:info@rizzardiconstruction.com"><span class="icon-envelope"></span> info@rizzardiconstruction.com</a>
                    </div>
                </div>             
                <div class="row align-items-center position-relative">
                    <div class="col-md-3 ">
                        <div class="site-logo">
                            <img src="/images/myPics/small-logo.webp" alt="Rizzardi Construction, Kitchen Remodel, Bathroom Remodel, Contractor">
                        </div>
                    </div>
                    <div class="col-md-9  text-right">
                        <span class="d-inline-block d-lg-none site-menu-toggle-btn"><a href="#" class="text-white site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3 text-white"></span></a></span>
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
                                
                                ><a href="about" class="nav-link">Our Team</a>
                                </li> --}}
                                <li 

                                @if (Request::is('services'))                                
                                class="active"
                                @endif
                                
                                ><a href="services" class="nav-link">Services</a>
                                </li>
                                {{-- <li 

                                @if (Request::is('projects'))                                
                                class="active"
                                @endif
                                
                                ><a href="projects" class="nav-link">Projects</a>
                                </li>
                                <li 

                                @if (Request::is('blog'))                                
                                class="active"
                                @endif
                                
                                ><a href="blog" class="nav-link">Blog</a>
                                </li> --}}
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
                <p>Rizzardi Construction is a fast-growing remodeling and contracting company with 10+ years of home improvement experience serving Erie County
                    homeowners and realtor companies. We are fully licensed and insured.
                </p>
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
                    </div> --}}
                    <div class="row">
                        <div class="col-lg-6">
                            <h2 class="footer-heading mb-4">Quick Links</h2>
                            <ul class="list-unstyled">
                                <li><a href="/">Home</a></li>
                                <li><a href="services">Services</a></li>
                                <li><a href="terms">Terms of Service</a></li>
                                <li><a href="privacy">Privacy Policy</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li>PA#157125</li>
                            </ul>
                        </div>
                        <div class="col-lg-6">                       
                            <div style="width: 100%"><iframe width="100%" height="300" src="https://maps.google.com/maps?width=100%&amp;height=300&amp;hl=en&amp;coord=42.1051869, -80.0949297&amp;q=2027%20W%2025th%20St%2C%20Erie%2C%20PA%2016502+(Rizzardi%20Construction)&amp;ie=UTF8&amp;t=&amp;z=16&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" onload="this.media='all'"><a href="http://www.gps.ie/">Find GPS coordinates</a></iframe></div><br />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
                <div class="border-top pt-5">
                    <p>
                        Copyright &copy;
                           <?php echo date('Y'); ?>
                        All rights reserved | Rizzardi Construction
                    </p>
                </div>
            </div>

        </div>
    </div>
</footer>

</div>

<!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="js/main.js"></script>
<!-- End of Scripts -->

</body>

</html>