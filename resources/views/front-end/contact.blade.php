@extends('layouts.default')

@section('content')
<!--=================================
Contact -->
<section class="space-ptb">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title">
          <h2>Contact Us</h2>
        </div>
      </div>
    </div>
    <div class="row align-items-center">
      <div class="col-lg-5">
        <div class="contact-address bg-light p-4">
          <div class="d-flex mb-3">
            <div class="contact-address-icon">
              <i class="flaticon-map text-primary font-xlll"></i>
            </div>
            <div class="ms-3">
              <h6>Address</h6>
              <p>214 West Arnold St. New York, NY 10002</p>
            </div>
          </div>
          <div class="d-flex mb-3">
            <div class="contact-address-icon">
              <i class="flaticon-email text-primary font-xlll"></i>
            </div>
            <div class="ms-3">
              <h6>Email</h6>
              <p>support@realvilla.demo</p>
            </div>
          </div>
          <div class="d-flex mb-3">
            <div class="contact-address-icon">
              <i class="flaticon-call text-primary font-xlll"></i>
            </div>
            <div class="ms-3">
              <h6>Phone Number</h6>
              <p>(123) 345-6789</p>
            </div>
          </div>
          <div class="d-flex mb-3">
            <div class="contact-address-icon">
              <i class="flaticon-fax text-primary font-xlll"></i>
            </div>
            <div class="ms-3">
              <h6>Fax</h6>
              <p>(456) 478-2589</p>
            </div>
          </div>
          <div class="social-icon-02">
            <div class="d-flex align-items-center">
              <h6 class="me-3">Social:</h6>
              <ul class="list-unstyled mb-0 list-inline">
                <li><a href="#"> <i class="fab fa-facebook-f"></i> </a></li>
                <li><a href="#"> <i class="fab fa-twitter"></i> </a></li>
                <li><a href="#"> <i class="fab fa-linkedin"></i> </a></li>
                <li><a href="#"> <i class="fab fa-pinterest"></i> </a></li>
                <li><a href="#"> <i class="fab fa-instagram"></i> </a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-7 mt-4 mt-lg-0">
        <div class="contact-form">
          <h4 class="mb-4">Need assistance? Please complete the contact form</h4>
          <form>
            <div class="row">
              <div class="mb-3 col-md-6">
                <input type="text" class="form-control" id="name" placeholder="Your name">
              </div>
              <div class="mb-3 col-md-6">
                <input type="email" class="form-control" id="inputEmail4" placeholder="Your email">
              </div>
              <div class="mb-3 col-md-6">
                <input type="text" class="form-control" id="phone" placeholder="Your phone">
              </div>
              <div class="mb-3 col-md-6">
                <input type="text" class="form-control" id="subject" placeholder="Subject">
              </div>
              <div class="mb-3 col-md-12">
                <textarea class="form-control" rows="4" placeholder="Your message"></textarea>
              </div>
              <div class="mb-3 col-md-12">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label pe-5" for="flexCheckDefault">
                 I consent to having this website store my submitted information so they can respond to my inquiry.
                </label>
              </div>
              </div>
              <div class="col-md-12">
                <a class="btn btn-primary" href="#">Send message</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Contact -->

<!--=================================
newsletter -->
<section class="py-5 bg-primary">
  <div class="container">
    <div class="row">
      <div class="col-md-5">
        <h3 class="text-white mb-0">Sign up to our newsletter to get the latest news and offers.</h3>
      </div>
      <div class="col-md-7 mt-3 mt-md-0">
        <div class="newsletter">
          <form>
            <div class="form-group mb-0">
              <input type="email" class="form-control" placeholder="Enter email">
            </div>
            <button type="submit" class="btn btn-dark b-radius-left-none">Get notified</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
<!--=================================
newsletter -->