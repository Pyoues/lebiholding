@extends('layouts.default')
@section('content')


<div class="modal login fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-0">
        <h5 class="modal-title" id="loginModalLabel">S'identhifier & s'inscrire</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <ul class="nav nav-tabs nav-tabs-02 justify-content-center" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="login-tab" data-bs-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="false">Se connecté</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="register-tab" data-bs-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="true">S'inscrire</a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
            <form class="row my-4 align-items-center">
              <div class="mb-3 col-sm-12">
                <input type="text" class="form-control" placeholder="Username">
              </div>
              <div class="mb-3 col-sm-12">
                <input type="Password" class="form-control" placeholder="Password">
              </div>
              <div class="col-sm-6 d-grid">
                <button type="submit" class="btn btn-primary">Sign up</button>
              </div>
              <div class="col-sm-6">
                <ul class="list-unstyled d-flex mb-1 mt-sm-0 mt-3">
                  <li class="me-1"><a href="#"><b>Already Registered User? Click here to login</b></a></li>
                </ul>
              </div>
            </form>
            <div class="login-social-media border ps-4 pe-4 pb-4 pt-0 rounded">
              <div class="mb-4 d-block text-center"><b class="bg-white ps-2 pe-2 mt-3 d-block">Login or Sign in with</b></div>
              <form class="row">
                <div class="col-sm-6">
                  <a class="btn facebook-bg social-bg-hover d-block mb-3" href="#"><span><i class="fab fa-facebook-f"></i>Login with Facebook</span></a>
                </div>
                <div class="col-sm-6">
                  <a class="btn twitter-bg social-bg-hover d-block mb-3" href="#"><span><i class="fab fa-twitter"></i>Login with Twitter</span></a>
                </div>
                <div class="col-sm-6">
                  <a class="btn google-bg social-bg-hover d-block mb-3 mb-sm-0" href="#"><span><i class="fab fa-google"></i>Login with Google</span></a>
                </div>
                <div class="col-sm-6">
                  <a class="btn linkedin-bg social-bg-hover d-block" href="#"><span><i class="fab fa-linkedin-in"></i>Login with Linkedin</span></a>
                </div>
              </form>
            </div>
          </div>
          <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
            <form class="row mt-4 mb-5 align-items-center">
              <div class="mb-3 col-sm-12">
                <input type="text" class="form-control" placeholder="Username">
              </div>
              <div class="mb-3 col-sm-12">
                <input type="email" class="form-control" placeholder="Email Address">
              </div>
              <div class="mb-3 col-sm-12">
                <input type="Password" class="form-control" placeholder="Password">
              </div>
              <div class="mb-3 col-sm-12">
                <input type="Password" class="form-control" placeholder="Confirm Password">
              </div>
              <div class="col-sm-6 d-grid">
                <button type="submit" class="btn btn-primary">Sign up</button>
              </div>
              <div class="col-sm-6">
                <ul class="list-unstyled d-flex mb-1 mt-sm-0 mt-3">
                  <li class="me-1"><a href="#"><b>Already Registered User? Click here to login</b></a></li>
                </ul>
              </div>
            </form>
            <div class="login-social-media border ps-4 pe-4 pb-4 pt-0 rounded">
              <div class="mb-4 d-block text-center"><b class="bg-white ps-2 pe-2 mt-3 d-block">Login or Sign in with</b></div>
              <form class="row">
                <div class="col-sm-6">
                  <a class="btn facebook-bg social-bg-hover d-block mb-3" href="#"><span><i class="fab fa-facebook-f"></i>Login with Facebook</span></a>
                </div>
                <div class="col-sm-6">
                  <a class="btn twitter-bg social-bg-hover d-block mb-3" href="#"><span><i class="fab fa-twitter"></i>Login with Twitter</span></a>
                </div>
                <div class="col-sm-6">
                  <a class="btn google-bg social-bg-hover d-block mb-3 mb-sm-0" href="#"><span><i class="fab fa-google"></i>Login with Google</span></a>
                </div>
                <div class="col-sm-6">
                  <a class="btn linkedin-bg social-bg-hover d-block" href="#"><span><i class="fab fa-linkedin-in"></i>Login with Linkedin</span></a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<section class="banner banner-property">
  <div class="owl-carousel owl-nav-top-right" data-animateOut="fadeOut" data-nav-arrow="false" data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1" data-space="0">
    <div class="item">
      <div class="property-offer">
        <div class="property-offer-item">
          <div class="property-offer-image bg-holder" style="background: url('images/bg-slider-property/01.jpg');">
            <div class="container">
              <div class="row justify-content-end">
                <div class="col-lg-5 col-md-8 col-sm-12">
                  <div class="property-details">
                    <div class="property-details-inner">
                      <h5 class="property-title"><a href="{{'/detail-property'}} ">Ample apartment at last floor </a></h5>
                      <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>Virginia drive temple hills</span>
                      <span class="property-agent-date"><i class="far fa-clock fa-md"></i>10 days ago</span>
                      <p class="mb-0 d-block mt-3">Use a past defeat as a motivator. Remind yourself you have nowhere to go except up as you.</p>
                      <div class="property-price">$150.00<span> / month</span> </div>
                      <ul class="property-info list-unstyled d-flex">
                        <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Bed<span>1</span></li>
                        <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bath<span>2</span></li>
                        <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>sqft<span>145m</span></li>
                      </ul>
                    </div>
                    <div class="property-btn">
                      <a class="property-link" href="property-detail-style-01.html">See Details</a>
                      <ul class="property-listing-actions list-unstyled mb-0">
                        <li class="property-compare"><a data-bs-toggle="tooltip" data-bs-placement="top" title="Compare" href="#"><i class="fas fa-exchange-alt"></i></a></li>
                        <li class="property-favourites"><a data-bs-toggle="tooltip" data-bs-placement="top" title="Favourite" href="#"><i class="far fa-heart"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="property-offer">
        <div class="property-offer-item">
          <div class="property-offer-image bg-holder" style="background: url('images/bg-slider-property/02.jpg');">
            <div class="container">
              <div class="row justify-content-end">
                <div class="col-lg-5 col-md-10 col-sm-12">
                  <div class="property-details">
                    <div class="property-details-inner">
                      <h5 class="property-title"><a href="{{'/detail-property'}}" >Luxury villa with pool</a></h5>
                      <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>West Indian St. Missoula</span>
                      <span class="property-agent-date"><i class="far fa-clock fa-md"></i>2 years ago</span>
                      <p class="mb-0 d-block mt-3">For those of you who are serious about having more, doing more, giving more and being more.</p>
                      <div class="property-price">$698.00<span> / month</span> </div>
                      <ul class="property-info list-unstyled d-flex">
                        <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Bed<span>5</span></li>
                        <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bath<span>4</span></li>
                        <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>sqft<span>1,658m</span></li>
                      </ul>
                    </div>
                    <div class="property-btn">
                      <a class="property-link" href="property-detail-style-01.html">See Details</a>
                      <ul class="property-listing-actions list-unstyled mb-0">
                        <li class="property-compare"><a data-bs-toggle="tooltip" data-bs-placement="top" title="Compare" href="#"><i class="fas fa-exchange-alt"></i></a></li>
                        <li class="property-favourites"><a data-bs-toggle="tooltip" data-bs-placement="top" title="Favourite" href="#"><i class="far fa-heart"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
banner -->

<!--search property -->
<section class="white-bg space-pb">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="property-search-field property-search-field-02 property-search-field-top-03">
          <h5 class="property-search-field-title bg-primary p-3 px-5 d-inline-block mb-0 text-white">Search your dream home</h5>
          <div class="property-search-item">
            <form class="row basic-select-wrapper">
              <div class="form-group col-lg-4 col-md-6">
                <label class="form-label">Property type</label>
                <select class="form-control basic-select">
                  <option>All Type</option>
                  <option>Villa</option>
                  <option>Apartment Building</option>
                  <option>Commercial</option>
                  <option>Office</option>
                  <option>Residential</option>
                  <option>Shop</option>
                  <option>Apartment</option>
                </select>
              </div>
              <div class="form-group col-lg-4 col-md-6">
                <label class="form-label">Status</label>
                <select class="form-control basic-select">
                  <option>For Rent</option>
                  <option>For Sale</option>
                </select>
              </div>
              <div class="form-group d-flex col-lg-4">
                <div class="form-group-search">
                  <label class="form-label">Location</label>
                  <div class="d-flex align-items-center"><i class="far fa-compass me-1"></i><input class="form-control" type="search" placeholder="Search Location"></div>
                </div>
              </div>
              <div class="advanced-search p-0" id="advanced-search">
                <div class="card card-body">
                  <div class="row">
                    <div class="form-group col-md-3">
                      <label class="form-label">Distance from location</label>
                      <select class="form-control basic-select">
                        <option>This area only</option>
                        <option>Within 1 mile</option>
                        <option>Within 3 miles</option>
                        <option>Within 5 miles</option>
                        <option>Within 10 miles</option>
                        <option>Within 15 miles</option>
                        <option>Within 30 miles</option>
                      </select>
                    </div>
                    <div class="form-group col-md-3">
                      <label class="form-label">Bedrooms</label>
                      <select class="form-control basic-select">
                        <option>No max</option>
                        <option>01</option>
                        <option>02</option>
                        <option>03</option>
                      </select>
                    </div>
                    <div class="form-group col-md-3">
                      <label class="form-label">Sort by</label>
                      <select class="form-control basic-select">
                        <option>Most popular</option>
                        <option>Highest price</option>
                        <option>Lowest price</option>
                        <option>Most reduced</option>
                      </select>
                    </div>
                    <div class="form-group col-md-3">
                      <label class="form-label">Floor</label>
                      <select class="form-control basic-select">
                        <option>Select Floor</option>
                        <option>01</option>
                        <option>02</option>
                        <option>03</option>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-3">
                      <label class="form-label">Min Area (sq ft)</label>
                      <input class="form-control" placeholder="Type (sq ft)">
                    </div>
                    <div class="form-group col-md-3">
                      <label class="form-label">Max Area (sq ft)</label>
                      <input class="form-control" placeholder="Type (sq ft)">
                    </div>
                    <div class="form-group col-md-6 property-price-slider ">
                      <label class="form-label">Select Price Range</label>
                      <input type="text" id="property-price-slider" name="example_name" value="" />
                    </div>
                    <div class="form-group col-md-12">
                      <div class="mt-0">
                        <button class="btn btn-primary align-items-center" type="submit"><i class="fas fa-search me-1"></i><span>Search</span></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
search property -->


<!--=================================
  Featured properties-->
<section class="space-pb">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="section-title text-center">
          <h2>Newly listed properties</h2>
          <p>Find your dream home from our Newly added properties</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-md-4">
        <div class="property-item">
          <div class="property-image bg-overlay-gradient-04">
            <img class="img-fluid" src="images/property/grid/01.jpg" alt="">
            <div class="property-lable">
              <span class="badge badge-md bg-primary">Bungalow</span>
              <span class="badge badge-md bg-info">Sale </span>
            </div>
            <span class="property-trending" title="trending"><i class="fas fa-bolt"></i></span>
            <div class="property-agent">
              <div class="property-agent-image">
                <img class="img-fluid" src="images/avatar/01.jpg" alt="">
              </div>
              <div class="property-agent-info">
                <a class="property-agent-name" href="#">Alice Williams</a>
                <span class="d-block">Company Agent</span>
                <ul class="property-agent-contact list-unstyled">
                  <li><a href="#"><i class="fas fa-mobile-alt"></i> </a></li>
                  <li><a href="#"><i class="fas fa-envelope"></i> </a></li>
                </ul>
              </div>
            </div>
            <div class="property-agent-popup">
              <a href="#"><i class="fas fa-camera"></i> 06</a>
            </div>
          </div>
          <div class="property-details">
            <div class="property-details-inner">
              <h5 class="property-title"><a href="{{'/detail-property'}} ">Ample apartment at last floor </a></h5>
              <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>Virginia drive temple hills</span>
              <span class="property-agent-date"><i class="far fa-clock fa-md"></i>10 days ago</span>
              <div class="property-price">$150.00<span> / month</span> </div>
              <ul class="property-info list-unstyled d-flex">
                <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Bed<span>1</span></li>
                <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bath<span>2</span></li>
                <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>sqft<span>145m</span></li>
              </ul>
            </div>
            <div class="property-btn">
              <a class="property-link" href="{{'/detail-property'}} ">See Details</a>
              <ul class="property-listing-actions list-unstyled mb-0">
                <li class="property-compare">
                  <a data-bs-toggle="tooltip" data-bs-placement="top" title="Compare" href="#"><i class="fas fa-exchange-alt"></i></a>
                </li>
                <li class="property-favourites">
                  <a data-bs-toggle="tooltip" data-bs-placement="top" title="Favourite" href="#"><i class="far fa-heart"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="property-item">
          <div class="property-image bg-overlay-gradient-04">
            <img class="img-fluid" src="images/property/grid/02.jpg" alt="">
            <div class="property-lable">
              <span class="badge badge-md bg-primary">Apartment</span>
              <span class="badge badge-md bg-info">New </span>
            </div>
            <div class="property-agent">
              <div class="property-agent-image">
                <img class="img-fluid" src="images/avatar/02.jpg" alt="">
              </div>
              <div class="property-agent-info">
                <a class="property-agent-name" href="#">John doe</a>
                <span class="d-block">Company Agent</span>
                <ul class="property-agent-contact list-unstyled">
                  <li><a href="#"><i class="fas fa-mobile-alt"></i> </a></li>
                  <li><a href="#"><i class="fas fa-envelope"></i> </a></li>
                </ul>
              </div>
            </div>
            <div class="property-agent-popup">
              <a href="#"><i class="fas fa-camera"></i> 12</a>
            </div>
          </div>
          <div class="property-details">
            <div class="property-details-inner">
              <h5 class="property-title"><a href="{{'/detail-property'}} ">Awesome family home</a></h5>
              <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>Vermont dr. hephzibah</span>
              <span class="property-agent-date"><i class="far fa-clock fa-md"></i>2 months ago</span>
              <div class="property-price">$326.00<span> / month</span> </div>
              <ul class="property-info list-unstyled d-flex">
                <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Bed<span>2</span></li>
                <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bath<span>3</span></li>
                <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>sqft<span>215m</span></li>
              </ul>
            </div>
            <div class="property-btn">
              <a class="property-link" href="{{'/detail-property'}} ">See Details</a>
              <ul class="property-listing-actions list-unstyled mb-0">
                <li class="property-compare"><a data-bs-toggle="tooltip" data-bs-placement="top" title="Compare" href="#"><i class="fas fa-exchange-alt"></i></a></li>
                <li class="property-favourites"><a data-bs-toggle="tooltip" data-bs-placement="top" title="Favourite" href="#"><i class="far fa-heart"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="property-item">
          <div class="property-image bg-overlay-gradient-04">
            <img class="img-fluid" src="images/property/grid/03.jpg" alt="">
            <div class="property-lable">
              <span class="badge badge-md bg-primary">Summer House</span>
              <span class="badge badge-md bg-info">Hot </span>
            </div>
            <span class="property-trending" title="trending"><i class="fas fa-bolt"></i></span>
            <div class="property-agent">
              <div class="property-agent-image">
                <img class="img-fluid" src="images/avatar/03.jpg" alt="">
              </div>
              <div class="property-agent-info">
                <a class="property-agent-name" href="#">Felica queen</a>
                <span class="d-block">Investment</span>
                <ul class="property-agent-contact list-unstyled">
                  <li><a href="#"><i class="fas fa-mobile-alt"></i> </a></li>
                  <li><a href="#"><i class="fas fa-envelope"></i> </a></li>
                </ul>
              </div>
            </div>
            <div class="property-agent-popup">
              <a href="#"><i class="fas fa-camera"></i> 03</a>
            </div>
          </div>
          <div class="property-details">
            <div class="property-details-inner">
              <h5 class="property-title"><a href="{{'/detail-property'}} ">Contemporary apartment</a></h5>
              <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>Newport st. mebane, nc</span>
              <span class="property-agent-date"><i class="far fa-clock fa-md"></i>6 months ago</span>
              <div class="property-price">$658.00<span> / month</span> </div>
              <ul class="property-info list-unstyled d-flex">
                <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Bed<span>3</span></li>
                <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bath<span>4</span></li>
                <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>sqft<span>3,189m</span></li>
              </ul>
            </div>
            <div class="property-btn">
              <a class="property-link" href="{{'/detail-property'}} ">See Details</a>
              <ul class="property-listing-actions list-unstyled mb-0">
                <li class="property-compare"><a data-bs-toggle="tooltip" data-bs-placement="top" title="Compare" href="#"><i class="fas fa-exchange-alt"></i></a></li>
                <li class="property-favourites"><a data-bs-toggle="tooltip" data-bs-placement="top" title="Favourite" href="#"><i class="far fa-heart"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="property-item">
          <div class="property-image bg-overlay-gradient-04">
            <img class="img-fluid" src="images/property/grid/04.jpg" alt="">
            <div class="property-lable">
              <span class="badge badge-md bg-primary">Duplex</span>
              <span class="badge badge-md bg-info">Hot </span>
            </div>
            <div class="property-agent">
              <div class="property-agent-image">
                <img class="img-fluid" src="images/avatar/04.jpg" alt="">
              </div>
              <div class="property-agent-info">
                <a class="property-agent-name" href="#">Sara lisbon</a>
                <span class="d-block">Construction</span>
                <ul class="property-agent-contact list-unstyled">
                  <li><a href="#"><i class="fas fa-mobile-alt"></i> </a></li>
                  <li><a href="#"><i class="fas fa-envelope"></i> </a></li>
                </ul>
              </div>
            </div>
            <div class="property-agent-popup">
              <a href="#"><i class="fas fa-camera"></i> 04</a>
            </div>
          </div>
          <div class="property-details">
            <div class="property-details-inner">
              <h5 class="property-title"><a href="{{'/detail-property'}} ">Family home for sale</a></h5>
              <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>Border st. nicholasville, ky</span>
              <span class="property-agent-date"><i class="far fa-clock fa-md"></i>12 months ago</span>
              <div class="property-price">$485.00<span> / month</span> </div>
              <ul class="property-info list-unstyled d-flex">
                <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Bed<span>2</span></li>
                <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bath<span>1</span></li>
                <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>sqft<span>2,356m</span></li>
              </ul>
            </div>
            <div class="property-btn">
              <a class="property-link" href="{{'/detail-property'}} ">See Details</a>
              <ul class="property-listing-actions list-unstyled mb-0">
                <li class="property-compare"><a data-bs-toggle="tooltip" data-bs-placement="top" title="Compare" href="#"><i class="fas fa-exchange-alt"></i></a></li>
                <li class="property-favourites"><a data-bs-toggle="tooltip" data-bs-placement="top" title="Favourite" href="#"><i class="far fa-heart"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="property-item">
          <div class="property-image bg-overlay-gradient-04">
            <img class="img-fluid" src="images/property/grid/05.jpg" alt="">
            <div class="property-lable">
              <span class="badge badge-md bg-primary">Penthouses</span>
              <span class="badge badge-md bg-info">Rent </span>
            </div>
            <span class="property-trending" title="trending"><i class="fas fa-bolt"></i></span>
            <div class="property-agent">
              <div class="property-agent-image">
                <img class="img-fluid" src="images/avatar/05.jpg" alt="">
              </div>
              <div class="property-agent-info">
                <a class="property-agent-name" href="#">Mellissa Doe</a>
                <span class="d-block">Founder & CEO</span>
                <ul class="property-agent-contact list-unstyled">
                  <li><a href="#"><i class="fas fa-mobile-alt"></i> </a></li>
                  <li><a href="#"><i class="fas fa-envelope"></i> </a></li>
                </ul>
              </div>
            </div>
            <div class="property-agent-popup">
              <a href="#"><i class="fas fa-camera"></i> 10</a>
            </div>
          </div>
          <div class="property-details">
            <div class="property-details-inner">
              <h5 class="property-title"><a href="{{'/detail-property'}} ">Luxury villa with pool</a></h5>
              <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>West Indian St. Missoula</span>
              <span class="property-agent-date"><i class="far fa-clock fa-md"></i>2 years ago</span>
              <div class="property-price">$698.00<span> / month</span> </div>
              <ul class="property-info list-unstyled d-flex">
                <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Bed<span>5</span></li>
                <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bath<span>4</span></li>
                <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>sqft<span>1,658m</span></li>
              </ul>
            </div>
            <div class="property-btn">
              <a class="property-link" href="{{'/detail-property'}} ">See Details</a>
              <ul class="property-listing-actions list-unstyled mb-0">
                <li class="property-compare"><a data-bs-toggle="tooltip" data-bs-placement="top" title="Compare" href="#"><i class="fas fa-exchange-alt"></i></a></li>
                <li class="property-favourites"><a data-bs-toggle="tooltip" data-bs-placement="top" title="Favourite" href="#"><i class="far fa-heart"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="property-item">
          <div class="property-image bg-overlay-gradient-04">
            <img class="img-fluid" src="images/property/grid/06.jpg" alt="">
            <div class="property-lable">
              <span class="badge badge-md bg-primary">Studio</span>
              <span class="badge badge-md bg-info">New </span>
            </div>
            <div class="property-agent">
              <div class="property-agent-image">
                <img class="img-fluid" src="images/avatar/06.jpg" alt="">
              </div>
              <div class="property-agent-info">
                <a class="property-agent-name" href="#">Michael Bean</a>
                <span class="d-block">Research</span>
                <ul class="property-agent-contact list-unstyled">
                  <li><a href="#"><i class="fas fa-mobile-alt"></i> </a></li>
                  <li><a href="#"><i class="fas fa-envelope"></i> </a></li>
                </ul>
              </div>
            </div>
            <div class="property-agent-popup">
              <a href="#"><i class="fas fa-camera"></i> 02</a>
            </div>
          </div>
          <div class="property-details">
            <div class="property-details-inner">
              <h5 class="property-title"><a href="{{'/detail-property'}} ">184 lexington avenue</a></h5>
              <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>Hamilton rd. willoughby, oh</span>
              <span class="property-agent-date"><i class="far fa-clock fa-md"></i>3 years ago</span>
              <div class="property-price">$236.00<span> / month</span> </div>
              <ul class="property-info list-unstyled d-flex">
                <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Bed<span>2</span></li>
                <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bath<span>2</span></li>
                <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>sqft<span>3,657m</span></li>
              </ul>
            </div>
            <div class="property-btn">
              <a class="property-link" href="{{'/detail-property'}} ">See Details</a>
              <ul class="property-listing-actions list-unstyled mb-0">
                <li class="property-compare"><a data-bs-toggle="tooltip" data-bs-placement="top" title="Compare" href="#"><i class="fas fa-exchange-alt"></i></a></li>
                <li class="property-favourites"><a data-bs-toggle="tooltip" data-bs-placement="top" title="Favourite" href="#"><i class="far fa-heart"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 text-center">
        <a class="btn btn-link" href="{{ '/list-property' }}"><i class="fas fa-plus"></i>Voir toutes les annonces</a>
      </div>
    </div>
  </div>
</section>
<!--=================================
Featured properties-->

<!--=================================
 offering the Best Real Estate-->
<section class="clearfix space-pb">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="section-title text-center">
          <h2>Découvrir Nos Meilleurs Offres</h2>
          <p>Check the listings of the best dealer on Real Villa and contact the agency or its agent by phone or contact form.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="owl-carousel owl-nav-top-right" data-animateOut="fadeOut" data-nav-arrow="true" data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1" data-space="0">
          <div class="item">
            <div class="property-offer">
              <div class="property-offer-item">
                <div class="property-offer-image bg-holder" style="background: url('images/property/big-img-01.jpg');">
                  <div class="row">
                    <div class="col-lg-6 col-md-10 col-sm-12">
                      <div class="property-details">
                        <div class="property-details-inner">
                          <h5 class="property-title"><a href="property-detail-style-01.html">Ample apartment at last floor </a></h5>
                          <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>Virginia drive temple hills</span>
                          <span class="property-agent-date"><i class="far fa-clock fa-md"></i>10 days ago</span>
                          <p class="mb-0 d-block mt-3">Use a past defeat as a motivator. Remind yourself you have nowhere to go except up as you.</p>
                          <div class="property-price">$150.00<span> / month</span> </div>
                          <ul class="property-info list-unstyled d-flex">
                            <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Bed<span>1</span></li>
                            <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bath<span>2</span></li>
                            <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>sqft<span>145m</span></li>
                          </ul>
                        </div>
                        <div class="property-btn">
                          <a class="property-link" href="property-detail-style-01.html">See Details</a>
                          <ul class="property-listing-actions list-unstyled mb-0">
                            <li class="property-compare"><a data-bs-toggle="tooltip" data-bs-placement="top" title="Compare" href="#"><i class="fas fa-exchange-alt"></i></a></li>
                            <li class="property-favourites"><a data-bs-toggle="tooltip" data-bs-placement="top" title="Favourite" href="#"><i class="far fa-heart"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="property-offer">
              <div class="property-offer-item">
                <div class="property-offer-image bg-holder" style="background: url('images/property/big-img-02.jpg');">
                  <div class="row">
                    <div class="col-lg-6 col-md-10 col-sm-12">
                      <div class="property-details">
                        <div class="property-details-inner">
                          <h5 class="property-title"><a href="property-detail-style-01.html">Luxury villa with pool</a></h5>
                          <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>West Indian St. Missoula</span>
                          <span class="property-agent-date"><i class="far fa-clock fa-md"></i>2 years ago</span>
                          <p class="mb-0 d-block mt-3">For those of you who are serious about having more, doing more, giving more and being more.</p>
                          <div class="property-price">$698.00<span> / month</span> </div>
                          <ul class="property-info list-unstyled d-flex">
                            <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Bed<span>5</span></li>
                            <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bath<span>4</span></li>
                            <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>sqft<span>1,658m</span></li>
                          </ul>
                        </div>
                        <div class="property-btn">
                          <a class="property-link" href="property-detail-style-01.html">See Details</a>
                          <ul class="property-listing-actions list-unstyled mb-0">
                            <li class="property-compare"><a data-bs-toggle="tooltip" data-bs-placement="top" title="Compare" href="#"><i class="fas fa-exchange-alt"></i></a></li>
                            <li class="property-favourites"><a data-bs-toggle="tooltip" data-bs-placement="top" title="Favourite" href="#"><i class="far fa-heart"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-5 bg-primary">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-9">
        <h2 class="text-white mb-0">Vous Désirez Acquérir Un Bien Immobilier</h2>
      </div>
      <div class="col-lg-3 text-lg-end mt-3 mt-lg-0">
        <a class="btn btn-white" href="#">Demandez une cotation</a>
      </div>
    </div>
  </div>
</section>

@endsection
