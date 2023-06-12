<!DOCTYPE html>
<html lang="en">
<head>

	<!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />    
    <meta name="description" content="" />
    
    <!-- FAVICONS ICON -->
    <link rel="icon" href="images/logo_tms.png" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="images/logo_tms.png" />
    
    <!-- PAGE TITLE HERE -->
    <title>TMS | index</title>
    
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}"><!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}"><!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/feather.css') }}"><!-- FEATHER ICON SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.min.css') }}"><!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.min.css') }}"><!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/lc_lightbox.css') }}"><!-- Lc light box popup -->     
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-select.min.css') }}"><!-- BOOTSTRAP SLECT BOX STYLE SHEET  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dataTables.bootstrap5.min.css') }}"><!-- DATA table STYLE SHEET  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/select.bootstrap5.min.css') }}"><!-- DASHBOARD select bootstrap  STYLE SHEET  -->     
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dropzone.css') }}"><!-- DROPZONE STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/scrollbar.css') }}"><!-- CUSTOM SCROLL BAR STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/datepicker.css') }}"><!-- DATEPICKER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/flaticon.css') }}"> <!-- Flaticon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/swiper-bundle.min.css') }}"><!-- Swiper Slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}"><!-- MAIN STYLE SHEET -->   
<style>
    .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
</style>
<style>
    @media (max-width: 767px) {
        .hide-in-mobile {
            display: none;
        }
    }

    @media (min-width: 768px) {
        .hide-in-desktop {
            display: none;
        }
    }
</style>

</head>

<body>

    <!-- LOADING AREA START ===== -->
    <div class="loading-area">
        <div class="loading-box"></div>
        <div class="loading-pic">
            <div class="wrapper">
                <div class="cssload-loader"></div>
            </div>
        </div>
    </div>
    <!-- LOADING AREA  END ====== -->

	<div class="page-wraper">


  <!-- HEADER START -->
  <header  class="site-header header-style-3 mobile-sider-drawer-menu">

    <div class="sticky-header main-bar-wraper  navbar-expand-lg">
        <div class="main-bar">  
                            
            <div class="container-fluid clearfix"> 
        
                <div class="logo-header">
                    <div class="logo-header-inner logo-header-one">
                        <a href="/">
                            <img src="{{ asset('images/logo_tms.png') }}" alt="">

                        </a>
                    </div>
                </div>  
                
                <!-- NAV Toggle Button -->
                <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar icon-bar-first"></span>
                    <span class="icon-bar icon-bar-two"></span>
                    <span class="icon-bar icon-bar-three"></span>
                </button> 

                <!-- MAIN Vav -->
                <div class="nav-animation header-nav navbar-collapse collapse d-flex justify-content-center">

                    <ul class=" nav navbar-nav">
                        <li class="has-child"><a href="{{ route('home') }}">Home</a>  </li>

                        <li class="has-child"><a href="{{ route('about') }}">About Us</a> </li>
                        <li class="has-child"><a href="#">Services</a>
                        
                            <ul class="sub-menu mt-3">
                                <li><a href="{{ route('staffing') }}">Staffing Services</a></li>
                                <li><a href="{{ route('iot') }}">IOT Integration</a></li> 
                                <li><a href="{{ route('software') }}">Software Application</a></li>
                                <li><a href="{{ route('ai_ml') }}">Artificial Intelligence and Machine Learning </a></li>
                                <li><a href="{{ route('di_bi') }}">Data Intelligence & Business Intelligence</a></li>
                                <li><a href="{{ route('dw_eng') }}">Data Warehouse & Engineering</a></li>
                               
                                
                            </ul>  
                                                                                          
                        </li>
                        {{-- <li><a href="{{ route('resume_parser') }}">Resume Parser</a></li> --}}
                          <li><a href="{{ route('career') }}">Career</a></li>
                                                        
                       
                    </ul>

                    

                </div>
                
                <!-- Header Right Section-->
                <div class="extra-nav header-2-nav">
                    <!-- <div class="extra-cell">
                        <div class="header-search">
                            <a href="#search" class="header-search-icon"><i class="feather-search"></i></a>
                        </div>                                
                    </div> -->
                    <div class="extra-cell">
                        <div class="header-nav-btn-section">
                            <!-- <div class="twm-nav-btn-left">
                                <a class="twm-nav-sign-up" data-bs-toggle="modal" href="#sign_up_popup" role="button">
                                    <i class="feather-log-in"></i> Sign Up
                                </a>
                            </div> -->
                            <div class="twm-nav-btn-right">
                                <a href="{{ route('contact.index') }}" class="twm-nav-post-a-job mb-3"><i class="flaticon-telephone"></i>Contact Us</a>
                              
                            </div>
                        </div>
                    </div> 
                        
                </div>                            
            
                                            
                
            </div>    
        
        
        </div>

    </div>



    
     


    
</header>
<!-- HEADER END -->

@yield('content')

        <!-- FOOTER START -->
        <footer class="footer-light ftr-light-with-bg site-bg-cover" style="background-image: url(images/ftr-bg.jpg);">
            <div class="container">

                <!-- FOOTER BLOCKES START -->  
                <div class="footer-top">
                    <div class="row p-r10">

                        <div class="col-lg-3 col-md-12 pb-5">
                            
                            <div class="widget widget_about">
                                <div class="logo-footer clearfix">
                                     <a href="/"><img src="{{ asset('images/logo_tms.png') }}" alt="" class="center"  style="justify-content:center;"></a>
                                </div>
                                <h3>Technology Management Solutions</h3>
                               
                                
                             
                            </div>                            
                            
                        </div> 

                        <div class="col-lg-9 col-md-12">
                            <div class="row">
                               
                             
                            
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="widget widget_services ftr-list-center">
                                        <h3 class="widget-title">Our Services</h3>
                                        <ul>
                                            <li><a href="{{ route('staffing') }}">Staffing Services</a></li>
                                            <li><a href="{{ route('iot') }}">IOT Integration</a></li> 
                                            <li><a href="{{ route('ai_ml') }}">AI and Ml</a></li>
                                            <li><a href="{{ route('di_bi') }}">Data Intelligence & BI</a></li>
                                            <li><a href="{{ route('dw_eng') }}">Data Warehouse & Engineering</a></li>
                                            <li><a href="{{ route('software') }}">Software Application</a></li>
                                                
                                        </ul>
                                    </div>
                                </div>


                                <div class="col-lg-3 col-md-6 col-sm-6">  
                                    <div class="widget widget_services ftr-list-center">
                                        <h3 class="widget-title">Quick Links</h3>
                                        <ul>
                                            <li><a href="{{ route('home') }}">Home</a></li>
                                            <li><a href="{{ route('about') }}">About Us</a></li>
                                             <li><a href="{{ route('career') }}">Career</a></li>
                                            <!-- <li><a href="blog.html">Blog</a></li> -->
                        {{-- <li><a href="{{ route('resume_parser') }}">Resume Parser</a></li> --}}

                                            {{-- <li><a href="{{ route('about') }}">Resume Parser</a></li> --}}
                                            <!-- <li><a href="contact.html">Contact Us</a></li> -->
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">  
                                    <div class="widget widget_services ftr-list-center">
                                        <h3 class="widget-title">Our Address</h3>
                                        <ul class="ftr-list">
                                            <li><p><span>Corporate Headquarters</span><br> <a href="https://www.google.com/maps?q=TMS LLC 8 Campus Drive Parsippany-Troy Hills New Jersey 07054 United States">
                                                    <p><strong class="site-text-primary">TMS LLC</strong><br>
                                                        8 Campus Drive, Parsippany-Troy Hills, New Jersey 07054, United States </p>
                                                  </a>                                                          </a>

                                            </p></li>
                                            <!-- <li><p><span>Email :</span> info@linktms.com</p></li>
                                            <li><p><span>Call :</span>201-254-7297</p></li> -->
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">  
                                    <div class="widget widget_services ftr-list-center">
                                        <h3 class="widget-title">Contact Us</h3>
                                        <ul class="ftr-list">
                                            <!-- <li><p><span>Corporate Headquarters:</span><br>TMS LLC
                                                8 Campus Drive, Parsippany-Troy Hills,<br> New Jersey, United States<br> 07054</p></li> -->
                                            <li><span><b> Email :</b></span><a href="mailto:info@linktms.com"><p>info@linktms.com</p></a></li>
                                            <li><p><span><b>Call :</b></span><a href="tel:201-254-7297">201-254-7297</a></p></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>  

                        </div> 

                    </div>
                </div>
                <!-- FOOTER COPYRIGHT -->
                <div class="footer-bottom">
                
                    <div class="footer-bottom-info">
                        <div class="footer-copy-right">
                            <span class="copyrights-text">Copyright . All Rights Reserved.</span>
                        </div>
                        <ul class="social-icons">
                            <li><a href="javascript:void(0);" class="fab fa-facebook-f"></a></li>
                            <li><a href="javascript:void(0);" class="fab fa-twitter"></a></li>
                            <li><a href="javascript:void(0);" class="fab fa-instagram"></a></li>
                            <li><a href="javascript:void(0);" class="fab fa-youtube"></a></li>
                        </ul>
                    </div>
                    
                </div>

            </div>
    
        </footer>
        <!-- FOOTER END -->

        <!-- BUTTON TOP START -->
		<button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>

        <!--Model Popup Section Start-->
            <!--Signup popup -->
            <div class="modal fade twm-sign-up" id="sign_up_popup" aria-hidden="true" aria-labelledby="sign_up_popupLabel" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <form>

                            <div class="modal-header">
                                <h2 class="modal-title" id="sign_up_popupLabel">Sign Up</h2>
                                <p>Sign Up and get access to all the features.</p>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <div class="modal-body">
                                <div class="twm-tabs-style-2">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">

                                    <!--Signup Candidate-->  
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#sign-candidate" type="button"><i class="fas fa-user-tie"></i>Candidate</button>
                                    </li>
                                    <!--Signup Employer-->
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#sign-Employer" type="button"><i class="fas fa-building"></i>Employer</button>
                                    </li>
                                    
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                    <!--Signup Candidate Content-->  
                                    <div class="tab-pane fade show active" id="sign-candidate">
                                        <div class="row">

                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="username" type="text" required="" class="form-control" placeholder="Usearname*">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="email" type="text" class="form-control" required="" placeholder="Password*">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="phone" type="text" class="form-control" required="" placeholder="Email*">
                                                </div>
                                            </div>
            
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="phone" type="text" class="form-control" required="" placeholder="Phone*">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <div class=" form-check">
                                                        <input type="checkbox" class="form-check-input" id="agree1">
                                                        <label class="form-check-label" for="agree1">I agree to the <a href="javascript:;">Terms and conditions</a></label>
                                                        <p>Already registered?
                                                            <button class="twm-backto-login" data-bs-target="#sign_up_popup2" data-bs-toggle="modal" data-bs-dismiss="modal">Log in here</button>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="site-button">Sign Up</button>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <!--Signup Employer Content--> 
                                    <div class="tab-pane fade" id="sign-Employer">
                                        <div class="row">

                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="username" type="text" required="" class="form-control" placeholder="Usearname*">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="email" type="text" class="form-control" required="" placeholder="Password*">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="phone" type="text" class="form-control" required="" placeholder="Email*">
                                                </div>
                                            </div>
            
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="phone" type="text" class="form-control" required="" placeholder="Phone*">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <div class=" form-check">
                                                        <input type="checkbox" class="form-check-input" id="agree2">
                                                        <label class="form-check-label" for="agree2">I agree to the <a href="javascript:;">Terms and conditions</a></label>
                                                        <p>Already registered?
                                                            <button class="twm-backto-login" data-bs-target="#sign_up_popup2" data-bs-toggle="modal" data-bs-dismiss="modal">Log in here</button>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="site-button">Sign Up</button>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                    </div>
                                </div> 
                            </div>

                            <div class="modal-footer">
                                <span class="modal-f-title">Login or Sign up with</span>
                                <ul class="twm-modal-social">
                                    <li><a href="javascript.html" class="facebook-clr"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="javascript.html" class="twitter-clr"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="javascript.html" class="linkedin-clr"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="javascript.html" class="google-clr"><i class="fab fa-google"></i></a></li>
                                </ul>
                            </div>

                        </form>
                    </div>
                </div>
                
            </div>
            <!--Login popup -->
            <div class="modal fade twm-sign-up" id="sign_up_popup2" aria-hidden="true" aria-labelledby="sign_up_popupLabel2" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                    
                        <form>
                            <div class="modal-header">
                                <h2 class="modal-title" id="sign_up_popupLabel2">Login</h2>
                             
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="twm-tabs-style-2">
                                    <ul class="nav nav-tabs" id="myTab2" role="tablist">

                                        <!--Login Candidate-->  
                                        <li class="nav-item">
                                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#login-candidate" type="button"><i class="fas fa-user-tie"></i>Candidate</button>
                                        </li>
                                        <!--Login Employer-->
                                        <li class="nav-item">
                                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#login-Employer" type="button"><i class="fas fa-building"></i>Employer</button>
                                        </li>
                                    
                                    </ul>
                                    
                                    <div class="tab-content" id="myTab2Content">
                                        <!--Login Candidate Content-->  
                                        <div class="tab-pane fade show active" id="login-candidate">
                                            <div class="row">

                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <input name="username" type="text" required="" class="form-control" placeholder="Usearname*">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <input name="email" type="text" class="form-control" required="" placeholder="Password*">
                                                    </div>
                                                </div>
                                                
                                                
                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <div class=" form-check">
                                                            <input type="checkbox" class="form-check-input" id="Password3">
                                                            <label class="form-check-label rem-forgot" for="Password3">Remember me <a href="javascript:;">Forgot Password</a></label>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <button type="submit" class="site-button">Log in</button>
                                                    <div class="mt-3 mb-3">Don't have an account ? 
                                                        <button class="twm-backto-login" data-bs-target="#sign_up_popup" data-bs-toggle="modal" data-bs-dismiss="modal">Sign Up</button>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <!--Login Employer Content--> 
                                        <div class="tab-pane fade" id="login-Employer">
                                            <div class="row">

                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <input name="username" type="text" required="" class="form-control" placeholder="Usearname*">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <input name="email" type="text" class="form-control" required="" placeholder="Password*">
                                                    </div>
                                                </div>
                                                
                                                
                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <div class=" form-check">
                                                            <input type="checkbox" class="form-check-input" id="Password4">
                                                            <label class="form-check-label rem-forgot" for="Password4">Remember me <a href="javascript:;">Forgot Password</a></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-12">
                                                    <button type="submit" class="site-button">Log in</button>
                                                    <div class="mt-3 mb-3">Don't have an account ? 
                                                        <button class="twm-backto-login" data-bs-target="#sign_up_popup" data-bs-toggle="modal" data-bs-dismiss="modal">Sign Up</button>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    
                                    </div>
                                </div> 
                            </div>
                            <div class="modal-footer">
                                <span class="modal-f-title">Login or Sign up with</span>
                                <ul class="twm-modal-social">
                                    <li><a href="#" class="facebook-clr"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" class="twitter-clr"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" class="linkedin-clr"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#" class="google-clr"><i class="fab fa-google"></i></a></li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <!--Model Popup Section End-->


 	</div>



<!-- JAVASCRIPT  FILES ========================================= --> 
<script  src="{{ asset('js/jquery-3.6.0.min.js') }}"></script><!-- JQUERY.MIN JS -->
<script  src="{{ asset('js/popper.min.js') }}"></script><!-- POPPER.MIN JS -->
<script  src="{{ asset('js/bootstrap.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
<script  src="{{ asset('js/magnific-popup.min.js') }}"></script><!-- MAGNIFIC-POPUP JS -->
<script  src="{{ asset('js/waypoints.min.js') }}"></script><!-- WAYPOINTS JS -->
<script  src="{{ asset('js/counterup.min.js') }}"></script><!-- COUNTERUP JS -->
<script  src="{{ asset('js/waypoints-sticky.min.js') }}"></script><!-- STICKY HEADER -->
<script  src="{{ asset('js/isotope.pkgd.min.js') }}"></script><!-- MASONRY  -->
<script  src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script><!-- MASONRY  -->
<script  src="{{ asset('js/owl.carousel.min.js') }}"></script><!-- OWL  SLIDER  -->
<script  src="{{ asset('js/theia-sticky-sidebar.js') }}"></script><!-- STICKY SIDEBAR  -->
<script  src="{{ asset('js/lc_lightbox.lite.js') }}" ></script><!-- IMAGE POPUP -->
<script  src="{{ asset('js/bootstrap-select.min.js') }}"></script><!-- Form js -->
<script  src="{{ asset('js/dropzone.js') }}"></script><!-- IMAGE UPLOAD  -->
<script  src="{{ asset('js/jquery.scrollbar.js') }}"></script><!-- scroller -->
<script  src="{{ asset('js/bootstrap-datepicker.js') }}"></script><!-- scroller -->
<script  src="{{ asset('js/jquery.dataTables.min.js') }}"></script><!-- Datatable -->
<script  src="{{ asset('js/dataTables.bootstrap5.min.js') }}"></script><!-- Datatable -->
<script  src="{{ asset('js/chart.js') }}"></script><!-- Chart -->
<script  src="{{ asset('js/bootstrap-slider.min') }}"></script><!-- Price range slider -->
<script  src="{{ asset('js/swiper-bundle.min') }}"></script><!-- Swiper JS -->
<script  src="{{ asset('js/custom.js') }}"></script><!-- CUSTOM FUCTIONS  -->

</body>


</html>
