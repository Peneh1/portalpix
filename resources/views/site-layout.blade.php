<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Portal Pix
The Free & Most flexible Portal for you and your customers">
    <meta name="author" content="Joel Kasirer">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="portalPix.com" /> <!-- website name -->
	<meta property="og:site" content="https://portalpix.com" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="Portal Pix
The Free & Most flexible Portal for you and your customers" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>{{$title}} - Portal Pix</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">

            <!-- Text Logo - Use this if you don't have a graphic logo -->

            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href="/"><img src="images/logo.svg" alt="alternative"></a> 
            
            <!-- Mobile Menu Toggle Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-awesome fas fa-bars"></span>
                <span class="navbar-toggler-awesome fas fa-times"></span>
            </button>
            <!-- end of mobile menu toggle button -->

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="/#header">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="/#features">FEATURES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="/#details">DETAILS</a>
                    </li>

                    <!-- Dropdown Menu -->          
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle page-scroll" href="/#video" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">VIDEO</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="article-details"><span class="item-text">ARTICLE DETAILS</span></a>
                            <div class="dropdown-items-divide-hr"></div>
                            <a class="dropdown-item" href="terms-conditions"><span class="item-text">TERMS CONDITIONS</span></a>
                            <div class="dropdown-items-divide-hr"></div>
                            <a class="dropdown-item" href="privacy-policy"><span class="item-text">PRIVACY POLICY</span></a>
                        </div>
                    </li>
                    <!-- end of dropdown menu -->

                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="/#pricing">PRICING</a>
                    </li>
                </ul>
                <span class="nav-item">
                    <a class="btn-outline-sm" href="log-in">LOG IN</a>
                </span>
            </div>
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->
	{{--veiw here--}}
	@yield('content')
	  <!-- Footer -->
      <svg class="ex-footer-frame" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 1920 79"><defs><style>.cls-2{fill:#5f4def;}</style></defs><title>footer-frame</title><path class="cls-2" d="M0,72.427C143,12.138,255.5,4.577,328.644,7.943c147.721,6.8,183.881,60.242,320.83,53.737,143-6.793,167.826-68.128,293-60.9,109.095,6.3,115.68,54.364,225.251,57.319,113.58,3.064,138.8-47.711,251.189-41.8,104.012,5.474,109.713,50.4,197.369,46.572,89.549-3.91,124.375-52.563,227.622-50.155A338.646,338.646,0,0,1,1920,23.467V79.75H0V72.427Z" transform="translate(0 -0.188)"/></svg>
      <div class="footer">
          <div class="container">
              <div class="row">
                  <div class="col-md-4">
                      <div class="footer-col first">
                          <h4>About Tivo</h4>
                          <p class="p-small">We're passionate about offering some of the best business growth services for start more words</p>
                      </div>
                  </div> <!-- end of col -->
                  <div class="col-md-4">
                      <div class="footer-col middle">
                          <h4>Important Links</h4>
                          <ul class="list-unstyled li-space-lg p-small">
                              <li class="media">
                                  <i class="fas fa-square"></i>
                                  <div class="media-body">Our business partners <a class="white" href="#your-link">startupguide.com</a></div>
                              </li>
                              <li class="media">
                                  <i class="fas fa-square"></i>
                                  <div class="media-body">Read our <a class="white" href="terms-conditions.html">Terms & Conditions</a>, <a class="white" href="privacy-policy.html">Privacy Policy</a></div>
                              </li>
                          </ul>
                      </div>
                  </div> <!-- end of col -->
                  <div class="col-md-4">
                      <div class="footer-col last">
                          <h4>Contact</h4>
                          <ul class="list-unstyled li-space-lg p-small">
                              <li class="media">
                                  <i class="fas fa-map-marker-alt"></i>
                                  <div class="media-body">22 Innovative, San Francisco, CA 94043, US</div>
                              </li>
                              <li class="media">
                                  <i class="fas fa-envelope"></i>
                                  <div class="media-body"><a class="white" href="mailto:contact@Tivo.com">contact@Tivo.com</a> <i class="fas fa-globe"></i><a class="white" href="#your-link">www.Tivo.com</a></div>
                              </li>
                          </ul>
                      </div> 
                  </div> <!-- end of col -->
              </div> <!-- end of row -->
          </div> <!-- end of container -->
      </div> <!-- end of footer -->  
      <!-- end of footer -->
	 <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © {{date('Y')}} <a href="https://peneh.com">Peneh Tech</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->   
    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>