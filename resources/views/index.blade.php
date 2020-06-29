@extends('layouts.layout')

@section('content')

<div class="ftco-blocks-cover-1">
    <div class="ftco-cover-1 overlay" style="background-image: url('images/myPics/construction.jpg')">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 ml-auto">
                <div class="col-lg-5">
                    <h1 class="line-bottom">Construction results delivered with perfection</h1>
                </div>                
                </div>
            </div>
        </div>
    </div>
</div>


<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-5 pr-md-5 mr-auto">
                <h2 class="line-bottom">Request a quote</h2>
                <p>
                    Quality work takes a dedicated contractor who builds a partnership with Every client
                </p>
            </div>
            <div class="col-md-6">
                <div class="quick-contact-form bg-white">
                    <h2></h2>
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name" name="name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subject" name="subject">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" name="email">
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" placeholder="Phone number" name="phone">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="" cols="30" rows="5" placeholder="Message" name="message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary px-5">
                        </div>
                        <input type='hidden' name='_token' value="{{ csrf_token() }}"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Projects -->
<section>
    <div class="cards">
        <h2>Construction Services</h2>
        <!-- Row -->
        <div class="card">
            <div class="imgBx">
                <img class="responsive-image" src="/images/myPics/kitchen.jpg" alt="kitchen remodel">
            </div>
            <div class="content">
                <h3>Kitchens remodel<span></span></h3>
                {{-- <a href=""></a> --}}
            </div>
        </div>
        <div class="card">
            <div class="imgBx">
                <img src="/images/myPics/bathroom.jpg" alt="bathroom remodel">
            </div>
            <div class="content">
                <h3>Bathrooms remodel<span></span></h3>
                {{-- <a href=""></a> --}}
            </div>
        </div>
        <div class="card">
            <div class="imgBx">
                <img src="/images/myPics/house.jpg" alt="remodeling">
            </div>
            <div class="content">
                <h3>House renovation<span></span></h3>
                {{-- <a href=""></a> --}}
            </div>
        </div>
        <!-- Row -->
        <div class="card">
            <div class="imgBx">
                <img src="/images/myPics/deck.jpg" alt="porch, decks">
            </div>
            <div class="content">
                <h3>Decks<span></span></h3>
                {{-- <a href=""></a> --}}
            </div>
        </div>
        <div class="card">
            <div class="imgBx">
                <img src="/images/myPics/siding.jpg" alt="siding">
            </div>
            <div class="content">
                <h3>Siding<span></span></h3>
                {{-- <a href=""></a> --}}
            </div>
        </div>

    </div>
</section>
<!-- End of Projects -->

<div class="container site-section mb-5">

    <div class="row justify-content-center text-center">
        <div class="col-7 text-center mb-5">
            <h2>How it works</h2>
            <p>Our proccess is simple. After we contact eachother, we meet with you to see what construction or remodel project you would like done.
                Then we give you an estimate of the cost and how long it will take. Then we go to work.
                Last but not least, we make sure that you are satisfied with our results, make any improvments you request, and then
                we wrap up the project and continue our everlasting partnership</p>
        </div>
    </div>
    <div class="how-it-works d-flex">
        <div class="step">
            <span class="number"><span>01</span></span>
            <span class="caption">Request quote</span>
        </div>
        <div class="step">
            <span class="number"><span>02</span></span>
            <span class="caption">Recieve estimate</span>
        </div>
        <div class="step">
            <span class="number"><span>03</span></span>
            <span class="caption">Work</span>
        </div>
        <div class="step">
            <span class="number"><span>04</span></span>
            <span class="caption">Verify satisfaction</span>
        </div>
        <div class="step">
            <span class="number"><span>05</span></span>
            <span class="caption">Finish Project</span>
        </div>

    </div>
</div>

 <div class="site-section">
            <div class="container">

                <div class="row mb-5">
                    <div class="col-md-4 mr-auto">
                        <h2 class="line-bottom">Construction companies leader in Erie, PA</h2>
                    </div>
                    <div class="col-md-8 text-right">
                        <nav class="custom-tab nav" role="tablist" class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a href="#nav-one" class="nav-item nav-link active" data-toggle="tab" role="tab" aria-controls="nav-one" aria-selected="true">Service</a>
                            <a href="#nav-two" class="nav-item nav-link" data-toggle="tab" role="tab" aria-controls="nav-two" aria-selected="false">Quality</a>
                            <a href="#nav-three" class="nav-item nav-link" data-toggle="tab" role="tab" aria-controls="nav-three" aria-selected="false">Partnership</a>
                        </nav>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">
                                <div class="row">
                                    <div class="col-md-7">
                                        <img src="images/hero_1.jpg" alt="Image" class="img-fluid">
                                    </div>
                                    <div class="col-md-4 ml-auto">
                                        <h2 class="line-bottom">Service</h2>
                                        <p>Ensuring that every expectation is exceeded by constant updates, communication, and a detailed checks and balance list.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-two" role="tabpanel" aria-labelledby="nav-two-tab">
                                <div class="row">
                                    <div class="col-md-7">
                                        <img src="images/hero_2.jpg" alt="Image" class="img-fluid">
                                    </div>
                                    <div class="col-md-4 ml-auto">
                                        <h2 class="line-bottom">Quality</h2>
                                        <p>Maintaining a strong foundation, but a delicate preception with our projects. We check our work multiple times so that 
                                            our customers Never have to worry.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-three" role="tabpanel" aria-labelledby="nav-three-tab">
                                <div class="row">
                                    <div class="col-md-7">
                                        <img src="images/hero_3.jpg" alt="Image" class="img-fluid">
                                    </div>
                                    <div class="col-md-4 ml-auto">
                                        <h2 class="line-bottom">Partnership</h2>
                                        <p>We don't just serve and build, we develop and maintain a first-class relationship with our clients. That's why partnership is emphisized on our site.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

{{-- <div class="site-section bg-light">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-4 mx-auto">
                        <h2 class="line-bottom text-center">Testimonials</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="testimonial-3">
                            <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure id accusantium similique temporibus nihil blanditiis adipisci aperiam, sapiente suscipit vero.</blockquote>
                            <div class="vcard d-flex align-items-center">
                                <div class="img-wrap mr-3">
                                    <img src="images/person_1.jpg" alt="Image" class="img-fluid">
                                </div>
                                <div>
                                    <span class="d-block">John Smith</span>
                                    <span class="position">Client From Facebook</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial-3">
                            <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure id accusantium similique temporibus nihil blanditiis adipisci aperiam, sapiente suscipit vero.</blockquote>
                            <div class="vcard d-flex align-items-center">
                                <div class="img-wrap mr-3">
                                    <img src="images/person_2.jpg" alt="Image" class="img-fluid">
                                </div>
                                <div>
                                    <span class="d-block">John Smith</span>
                                    <span class="position">Client From Facebook</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">
                <div class="row mb-4">

                    <div class="col-md-4 mx-auto">
                        <h2 class="line-bottom text-center">Our Projects</h2>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
                        <div class="project-item">

                            <img src="images/img_1.jpg" alt="Image" class="img-fluid">

                            <div class="project-item-overlay">
                                <a class="category" href="#">Renovate</a>
                                <span class="plus">
                                    <span class="icon-plus"></span>
                                </span>

                                <a href="#" class="project-title"><span>Renovate the house</span></a>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
                        <div class="project-item">

                            <img src="images/img_2.jpg" alt="Image" class="img-fluid">

                            <div class="project-item-overlay">
                                <a class="category" href="#">Renovate</a>
                                <span class="plus">
                                    <span class="icon-plus"></span>
                                </span>

                                <a href="#" class="project-title"><span>Renovate the house 2</span></a>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
                        <div class="project-item">

                            <img src="images/img_3.jpg" alt="Image" class="img-fluid">

                            <div class="project-item-overlay">
                                <a class="category" href="#">Renovate</a>
                                <span class="plus">
                                    <span class="icon-plus"></span>
                                </span>

                                <a href="#" class="project-title"><span>Renovate the house 2</span></a>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
                        <div class="project-item">

                            <img src="images/img_4.jpg" alt="Image" class="img-fluid">

                            <div class="project-item-overlay">
                                <a class="category" href="#">Renovate</a>
                                <span class="plus">
                                    <span class="icon-plus"></span>
                                </span>

                                <a href="#" class="project-title"><span>Renovate the house</span></a>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
                        <div class="project-item">

                            <img src="images/img_1.jpg" alt="Image" class="img-fluid">

                            <div class="project-item-overlay">
                                <a class="category" href="#">Renovate</a>
                                <span class="plus">
                                    <span class="icon-plus"></span>
                                </span>

                                <a href="#" class="project-title"><span>Renovate the house 2</span></a>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
                        <div class="project-item">

                            <img src="images/img_2.jpg" alt="Image" class="img-fluid">

                            <div class="project-item-overlay">
                                <a class="category" href="#">Renovate</a>
                                <span class="plus">
                                    <span class="icon-plus"></span>
                                </span>

                                <a href="#" class="project-title"><span>Renovate the house 2</span></a>
                            </div>

                        </div>
                    </div>



                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">
                <div class="row mb-4">

                    <div class="col-md-4 mx-auto">
                        <h2 class="line-bottom text-center">Our Blog</h2>
                    </div>

                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="post-entry-1 h-100">
                            <a href="single.html">
                                <img src="images/img_4.jpg" alt="Image" class="img-fluid">
                            </a>
                            <div class="post-entry-1-contents">

                                <h2><a href="single.html">We Are Leader In The Construction World</a></h2>
                                <span class="meta d-inline-block mb-3">July 17, 2019 <span class="mx-2">by</span> <a href="#">Admin</a></span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="post-entry-1 h-100">
                            <a href="single.html">
                                <img src="images/img_2.jpg" alt="Image" class="img-fluid">
                            </a>
                            <div class="post-entry-1-contents">

                                <h2><a href="single.html">We Are Leader In The Construction World</a></h2>
                                <span class="meta d-inline-block mb-3">July 17, 2019 <span class="mx-2">by</span> <a href="#">Admin</a></span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="post-entry-1 h-100">
                            <a href="single.html">
                                <img src="images/img_3.jpg" alt="Image" class="img-fluid">
                            </a>
                            <div class="post-entry-1-contents">

                                <h2><a href="single.html">We Are Leader In The Construction World</a></h2>
                                <span class="meta d-inline-block mb-3">July 17, 2019 <span class="mx-2">by</span> <a href="#">Admin</a></span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
@stop