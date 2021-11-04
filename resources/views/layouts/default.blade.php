<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Real Villa - Real Estate HTML5 Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lebi Holding Group - Programme Africa Loement</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" />

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:300,500,600,700%7CRoboto:300,400,500,700">

    <!-- CSS Global Compulsory (Do not remove)-->
    <link rel="stylesheet" href="{{asset('css/font-awesome/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/flaticon/flaticon.css')}}" />
    <link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap.min.css')}}" />

    <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature)-->
    <link rel="stylesheet" href="{{asset('css/select2/select2.css')}}" />
    <link rel="stylesheet" href="{{asset('css/range-slider/ion.rangeSlider.css')}}" />
    <link rel="stylesheet" href="{{asset('css/owl-carousel/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/magnific-popup/magnific-popup.css')}}" />

    <!-- Template Style -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />

  </head>

<body>

<!--=================================
header -->
<header class="header">
  <div class="topbar">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="d-block d-md-flex align-items-center text-center">
            <div class="me-3 d-inline-block">
              <a href="tel:1-800-555-1234"><i class="fa fa-phone me-2 fa fa-flip-horizontal"></i>(+225) 22 49 76 16 </a>
            </div>
            <div class="me-auto d-inline-block">
            <span class="mr-2 text-white">infos@lebiholdinggroup.com</span>
            </div>
            <div class="social d-inline-block">
              <ul class="list-unstyled">
                <li><a href="#"> <i class="fab fa-facebook-f"></i> </a></li>
                <li><a href="#"> <i class="fab fa-twitter"></i> </a></li>
                <li><a href="#"> <i class="fab fa-linkedin"></i> </a></li>
                <li><a href="#"> <i class="fab fa-pinterest"></i> </a></li>
                <li><a href="#"> <i class="fab fa-instagram"></i> </a></li>
              </ul>
            </div>
            <div class="login d-inline-block">
              <a data-bs-toggle="modal" data-bs-target="#loginModal" href="#">Connexion<i class="fa fa-user ps-2"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-light bg-white navbar-static-top navbar-expand-lg header-sticky">
        <div class="container-fluid">
          <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse"><i class="fas fa-align-left"></i></button>
          <a class="navbar-brand" href="index.html">
            <img class="img-fluid" src="images/lebiholding-logo.png" alt="logo">
          </a>
          <div class="navbar-collapse collapse justify-content-center">
            <ul class="nav navbar-nav">
				<li><a class="nav-link" href="index.php">Accueil</a></li>
				<li class="nav-item dropdown">
				    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						L'entreprise <i class="fas fa-chevron-down fa-xs"></i>
					</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="{{'/about'}} ">Présentation</a></li>
						<li><a class="dropdown-item" href="{{'/motpdg'}}">Mot du PDG</a></li>
					</ul>
				</li>
				<li><a class="nav-link" href="{{'/detail-property'}} "> Vendre</a></li>
                <li><a class="nav-link" href="{{'/detail-property'}} "> Louer</a></li>
				<li class="nav-item dropdown">
				  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Nos Projets <i class="fas fa-chevron-down fa-xs"></i>
				  </a>
				  <ul class="dropdown-menu">
					<li><a class="dropdown-item" href="{{'/contact'}}">Projet 1</a></li>
					<li><a class="dropdown-item" href="{{'/contact'}}">Projet 2</a></li>
				  </ul>
				</li>
				<li class="nav-item dropdown">
				  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Galeries <i class="fas fa-chevron-down fa-xs"></i>
				  </a>
				  <ul class="dropdown-menu">
					<li><a class="dropdown-item" href="{{'/contact'}}">Images</a></li>
					<li><a class="dropdown-item" href="{{'/contact'}}">Vidéos</a></li>
				  </ul>
				</li>
			    <li><a class="nav-link" href="{{'/contact'}}">Contact</a></li>
			</ul>
		  </div>
		  <div class="add-listing d-none d-sm-block">
		    <a class="btn btn-primary btn-md" href="#"> <i class="fa fa-plus-circle"></i>Souscrire </a>
		  </div>
		</div>
    </nav>
</header>
@yield('content')


<footer class="footer bg-dark space-pt">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6">
        <div class="footer-contact-info">
          <h5 class="text-primary mb-4">About real villa</h5>
          <p class="text-white mb-4">Real Villa helped thousands of clients to find the right property for their needs.</p>
          <ul class="list-unstyled mb-0">
            <li> <b> <i class="fas fa-map-marker-alt"></i></b><span>214 West Arnold St. New York, NY 10002</span> </li>
            <li> <b><i class="fas fa-microphone-alt"></i></b><span>(123) 345-6789</span> </li>
            <li> <b><i class="fas fa-headset"></i></b><span>support@realvilla.demo</span> </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
        <div class="footer-link">
          <h5 class="text-primary mb-4">Useful links</h5>
          <ul class="list-unstyled mb-0">
            <li> <a href="#">Commercial </a> </li>
            <li> <a href="#">House </a> </li>
            <li> <a href="#">Office </a> </li>
            <li> <a href="#">Residential </a> </li>
            <li> <a href="#">Residential Tower </a> </li>
          </ul>
          <ul class="list-unstyled mb-0">
            <li> <a href="#">Beverly Hills </a> </li>
            <li> <a href="#">Los angeles </a> </li>
            <li> <a href="#">Mission Viejo </a> </li>
            <li> <a href="#">Newport  </a> </li>
            <li> <a href="#">Beach Pasadena </a> </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
        <div class="footer-recent-List">
          <h5 class="text-primary mb-4">Recently listed properties</h5>
          <ul class="list-unstyled mb-0">
            <li>
              <div class="footer-recent-list-item">
                <img class="img-fluid" src="images/property/list/01.jpg" alt="">
                <div class="footer-recent-list-item-info">
                  <h6 class="text-white"><a class="category font-md mb-2" href="property-detail-style-01.html">Awesome family home</a></h6>
                  <a class="address mb-2 font-sm" href="#">Vermont dr. hephzibah</a>
                  <span class="price text-white">$3,456,235 </span>
                </div>
              </div>
            </li>
            <li>
              <div class="footer-recent-list-item">
                <img class="img-fluid" src="images/property/list/02.jpg" alt="">
                <div class="footer-recent-list-item-info">
                  <h6 class="text-white"><a class="category font-md mb-2" href="property-detail-style-01.html">Lawn court villa</a></h6>
                  <a class="address mb-2 font-sm" href="#">Newport st. mebane, nc</a>
                  <span class="price text-white">$1,265,456 </span>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
        <h5 class="text-primary mb-4">Subscribe us</h5>
        <div class="footer-subscribe">
          <p class="text-white">Sign up to our newsletter to get the latest news and offers.</p>
          <form>
            <div class="mb-3">
              <input type="email" class="form-control" placeholder="Enter email">
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Get notified</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4 text-center text-md-start">
          <a href="index.html"><img class="img-fluid footer-logo" src="images/logo-light.svg" alt=""> </a>
        </div>
        <div class="col-md-4 text-center my-3 mt-md-0 mb-md-0">
          <a id="back-to-top" class="back-to-top" href="#"><i class="fas fa-angle-double-up"></i> </a>
        </div>
        <div class="col-md-4 text-center text-md-end">
          <p class="mb-0 text-white"> &copy;Copyright <span id="copyright"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span> <a href="#"> Real villa </a> All Rights Reserved </p>
        </div>
      </div>
    </div>
  </div>
</footer>

<!--=================================
Javascript -->

  <!-- JS Global Compulsory (Do not remove)-->
  <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
  <script src="{{asset('js/popper/popper.min.js')}}"></script>
  <script src="{{asset('js/bootstrap/bootstrap.min.js')}}"></script>

  <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
  <script src="{{asset('js/jquery.appear.js')}}"></script>
  <script src="{{asset('js/counter/jquery.countTo.js')}}"></script>
  <script src="{{asset('js/select2/select2.full.js')}}"></script>
  <script src="{{asset('js/range-slider/ion.rangeSlider.min.js')}}"></script>
  <script src="{{asset('js/owl-carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('js/jarallax/jarallax.min.js')}}"></script>
  <script src="{{asset('js/jarallax/jarallax-video.min.js')}}"></script>
  <script src="{{asset('js/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

  <!-- Template Scripts (Do not remove)-->
  <script src="{{asset('js/custom.js')}}"></script>

</body>

</html>
