@extends('layouts.default')
@section('content')

<body>

<!--=================================
Listing – grid view -->
<section class="space-ptb">
  <div class="container">

    <div class="row">

      <div class="col-lg-12">
        <div class="row mt-4">
          <div class="col-sm-6">
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
                  <h5 class="property-title"><a href="property-detail-style-01.html">Ample apartment at last floor </a></h5>
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
                  <a class="property-link" href="property-detail-style-01.html">See Details</a>
                  <ul class="property-listing-actions list-unstyled mb-0">
                    <li class="property-compare"><a data-bs-toggle="tooltip" data-placement="top" title="Compare" href="#"><i class="fas fa-exchange-alt"></i></a></li>
                    <li class="property-favourites"><a data-bs-toggle="tooltip" data-placement="top" title="Favourite" href="#"><i class="far fa-heart"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
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
                  <h5 class="property-title"><a href="property-detail-style-01.html">Awesome family home</a></h5>
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
                  <a class="property-link" href="property-detail-style-01.html">See Details</a>
                  <ul class="property-listing-actions list-unstyled mb-0">
                    <li class="property-compare"><a data-bs-toggle="tooltip" data-placement="top" title="Compare" href="#"><i class="fas fa-exchange-alt"></i></a></li>
                    <li class="property-favourites"><a data-bs-toggle="tooltip" data-placement="top" title="Favourite" href="#"><i class="far fa-heart"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
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
                  <h5 class="property-title"><a href="property-detail-style-01.html">Contemporary apartment</a></h5>
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
                  <a class="property-link" href="property-detail-style-01.html">See Details</a>
                  <ul class="property-listing-actions list-unstyled mb-0">
                    <li class="property-compare"><a data-bs-toggle="tooltip" data-placement="top" title="Compare" href="#"><i class="fas fa-exchange-alt"></i></a></li>
                    <li class="property-favourites"><a data-bs-toggle="tooltip" data-placement="top" title="Favourite" href="#"><i class="far fa-heart"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
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
                  <h5 class="property-title"><a href="property-detail-style-01.html">Family home for sale</a></h5>
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
                  <a class="property-link" href="property-detail-style-01.html">See Details</a>
                  <ul class="property-listing-actions list-unstyled mb-0">
                    <li class="property-compare"><a data-bs-toggle="tooltip" data-placement="top" title="Compare" href="#"><i class="fas fa-exchange-alt"></i></a></li>
                    <li class="property-favourites"><a data-bs-toggle="tooltip" data-placement="top" title="Favourite" href="#"><i class="far fa-heart"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
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
                  <h5 class="property-title"><a href="property-detail-style-01.html">Luxury villa with pool</a></h5>
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
                  <a class="property-link" href="property-detail-style-01.html">See Details</a>
                  <ul class="property-listing-actions list-unstyled mb-0">
                    <li class="property-compare"><a data-bs-toggle="tooltip" data-placement="top" title="Compare" href="#"><i class="fas fa-exchange-alt"></i></a></li>
                    <li class="property-favourites"><a data-bs-toggle="tooltip" data-placement="top" title="Favourite" href="#"><i class="far fa-heart"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
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
                  <h5 class="property-title"><a href="property-detail-style-01.html">184 lexington avenue</a></h5>
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
                  <a class="property-link" href="property-detail-style-01.html">See Details</a>
                  <ul class="property-listing-actions list-unstyled mb-0">
                    <li class="property-compare"><a data-bs-toggle="tooltip" data-placement="top" title="Compare" href="#"><i class="fas fa-exchange-alt"></i></a></li>
                    <li class="property-favourites"><a data-bs-toggle="tooltip" data-placement="top" title="Favourite" href="#"><i class="far fa-heart"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <ul class="pagination mt-3">
              <li class="page-item disabled me-auto">
                <span class="page-link b-radius-none">Prev</span>
              </li>
              <li class="page-item active" aria-current="page"><span class="page-link">1 </span> <span class="sr-only">(current)</span></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item ms-auto">
                <a class="page-link b-radius-none" href="#">Next</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Listing – grid view -->

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
            <div class="mb-0">
              <input type="email" class="form-control" placeholder="Enter email">
            </div>
            <button type="submit" class="btn btn-dark b-radius-left-none">Get notified</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
newsletter -->
@endsection
