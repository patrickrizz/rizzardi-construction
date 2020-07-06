@extends('layouts.layout')
@section('content')

<div class="ftco-blocks-cover-1">
    <div class="ftco-cover-1 overlay" style="background-image: url('images/myPics/index/banner.jpg')">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <h1 class="line-bottom">Erie's full-scale construction firm <br>Focused on the details</h1>
                    <h2>Home improvment. Peace of mind. Dream big.</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="site-section quick-contact-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="quick-contact-form bg-white">
                    <h2>Get an estimate</h2>
                    <form action="" method="post">
                        <div class="row">                        
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control" placeholder="Name" name="name">
                            </div>
                            <div class="form-group col-md-4">
                                <input type="email" class="form-control" placeholder="Email" name="email">
                            </div>
                            <div class="form-group col-md-4">
                                <input type="tel" class="form-control" placeholder="Phone number" name="phone">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-12">
                                <textarea class="form-control" id="" cols="30" rows="5" placeholder="Message" name="message"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Send Message" class="btn btn-primary px-5">
                            </div>
                        </div>
                        <input type='hidden' name='_token' value="{{ csrf_token() }}" />
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
                <img class="responsive-image" src="/images/myPics/index/kitchen.jpg" alt="kitchen remodel">
            </div>
            <div class="content">
                <h3>Kitchen remodel<span></span></h3>
                {{-- <a href=""></a> --}}
            </div>
        </div>
        <div class="card">
            <div class="imgBx">
                <img src="/images/myPics/index/bathroom.jpg" alt="bathroom remodel">
            </div>
            <div class="content">
                <h3>Bathroom remodel<span></span></h3>
                {{-- <a href=""></a> --}}
            </div>
        </div>
        <div class="card">
            <div class="imgBx">
                <img src="/images/myPics/index/house.jpg" alt="remodeling">
            </div>
            <div class="content">
                <h3>House renovation<span></span></h3>
                {{-- <a href=""></a> --}}
            </div>
        </div>
        <!-- Row -->
        <div class="card">
            <div class="imgBx">
                <img src="/images/myPics/index/deck.jpg" alt="porch, decks">
            </div>
            <div class="content">
                <h3>Decks and Siding<span></span></h3>
                {{-- <a href=""></a> --}}
            </div>
        </div>
        <div class="card">
            <div class="imgBx">
                <img src="/images/myPics/index/window-service.jpg" alt="siding">
            </div>
            <div class="content">
                <h3>Doors and Windows<span></span></h3>
                {{-- <a href=""></a> --}}
            </div>
        </div>

    </div>
</section>
<!-- End of Projects -->
<div class="mb-0 how-it-works-banner overlay" style="background-image: url('images/myPics/index/kitchen-banner.jpg')">
    <div class="row justify-content-center text-center">
        <div class="col-7 text-center mb-5">
            <h2>How it works</h2>
            <p>Our process is simple. After we contact each other, we meet with you to see what construction or remodel project you would like done. Then we give you an estimate of the cost and how long it will take. Then we go to work. Last but not least, we make sure that you are satisfied with our results, make any improvements you request, and then we wrap up the project and continue our everlasting partnership</p>
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
                <h2 class="line-bottom">Why choose us</h2>
            </div>
            <div class="col-md-8 text-right">
                <nav class="custom-tab nav" role="tablist" class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a href="#nav-one" class="nav-item nav-link active" data-toggle="tab" role="tab" aria-controls="nav-one" aria-selected="true">Professional</a>
                    <a href="#nav-two" class="nav-item nav-link" data-toggle="tab" role="tab" aria-controls="nav-two" aria-selected="false">Satisfaction</a>
                    <a href="#nav-three" class="nav-item nav-link" data-toggle="tab" role="tab" aria-controls="nav-three" aria-selected="false">Response</a>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">
                        <div class="row">
                            <div class="col-md-7">
                                <img src="images/myPics/index/hero_1.jpg" alt="Professionals" class="img-fluid">
                            </div>
                            <div class="col-md-4 ml-auto">
                                <h2 class="line-bottom">Professional approach</h2>
                                <p>We don't just serve and build, we develop and maintain a life-long relationship with our clients. That is why partnership is emphasized within our company. We communicate with our clients daily to provide a first-class experience and to ensure the satisfaction you deserve </p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-two" role="tabpanel" aria-labelledby="nav-two-tab">
                        <div class="row">
                            <div class="col-md-7">
                                <img src="images/myPics/index/hero_2.jpg" alt="Quality Guarentee" class="img-fluid">
                            </div>
                            <div class="col-md-4 ml-auto">
                                <h2 class="line-bottom">Quality Satisfaction</h2>
                                <p>If you are not satisfied, we do it again. Our company always ensures quality by building a strong foundation. We check our work multiple times so that you can have the peace of mind, knowing your project is an investment and nothing less</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-three" role="tabpanel" aria-labelledby="nav-three-tab">
                        <div class="row">
                            <div class="col-md-7">
                                <img src="images/myPics/index/hero_3.jpg" alt="Response" class="img-fluid">
                            </div>
                            <div class="col-md-4 ml-auto">
                                <h2 class="line-bottom">Quick Response</h2>
                                <p>We are one of the leading construction companies in Erie, PA. Our clients deserve to discuss their future with no delays and no frustration. We guarantee a response within 48 hours from when you first make contact</p>
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