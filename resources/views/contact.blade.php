@extends('layouts.layout')

@section('content')

      <div class="ftco-blocks-cover-1">
      <div class="ftco-cover-1 overlay innerpage" style="background-image: url('images/hero_2.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 text-center">
              <h1>Contact Us</h1>
              <p></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    
    <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row justify-content-center text-center">
        <div class="col-7 text-center mb-5">
          <h2>Contact Us</h2>
          <p>Get your estimate today</p>
        </div>
      </div>
        <div class="row">
          <div class="col-lg-8 mb-5" >


            <form action="" method="post" name="contact-form">
              <div class="form-group row">
                <div class="col-md-12 mb-4 mb-lg-0">
                  <input type="text" class="form-control" placeholder="Full name" name="name">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12 mb-4 mb-lg-0">
                  <input type="text" class="form-control" placeholder="Subject" name="subject">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="email" class="form-control" placeholder="Email address" name="email">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="tel" class="form-control" placeholder="Phone number" name="phone">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <textarea class="form-control" placeholder="Write your message." cols="30" rows="10" name="message"></textarea>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6 mr-auto">
                  <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Submit">
                </div>
              </div>
              <input type='hidden' name='_token' value="{{ csrf_token() }}"/>
            </form>


          </div>
          <div class="col-lg-4 ml-auto">
            <div class="bg-white p-3 p-md-5">
              <h3 class="text-black mb-4">Contact Info</h3>
              <ul class="list-unstyled footer-link">
                <li class="d-block mb-3">
                  <span class="d-block text-black">Address:</span>
                  <span>2027 W 25th St. <br> Erie, PA. United States</span></li>
                <li class="d-block mb-3"><span class="d-block text-black">Phone:</span><span>+1 (814) 688-0382</span></li>
                <li class="d-block mb-3"><span class="d-block text-black">Email:</span><span>patrick.d.rizzardi@gmail.com</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    some test text
 @stop