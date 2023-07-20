@extends('layouts.app')
@section('content')

            <div class="container">
                <div class="h-page-6-getjobs-wrap">
                    <div class="row mt-5">

                        <div class="col-lg-7 col-md-12 hide-in-mobile">
                            <div class="h-page-6-getjobs-left">

                                <div class="twm-media">

                                   
                                    <div class=""><img src="{{ asset('images/boy-large.png')}}"alt=""></div>
                                    <div class="twm-media-bg-circle2"></div>
                                    <div class="twm-media-bg-circle3">
                                        <div class="rotate-center">
                                            <span class="ring1"></span>
                                            <span class="ring2"></span>

                                            <span class="ring3"></span>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="col-lg-5 col-md-12">
                            <div class="h-page-6-getjobs-right">
                                <!-- TITLE START-->
                                <div class="section-head left wt-small-separator-outer">
                                    <div class="wt-small-separator site-text-primary">
                                        <div> </div>
                                    </div>
                                    <h2 class="wt-title"><span class="site-text-primary" style="text-align: center;">Technology Management
                                            Solutions<span> </h2>
                                                <div style="font-size: 17px;">  <p >Technology Management Solutions (TMS) is a digital product engineering company;
                                                    we help our clients design and build innovative products and solutions for
                                                    modern digital experience. Working with our clients at various stages from
                                                    conception to commercialization of software products.
            
                                                </p>

                                                <p> We partner in providing technical and non-technical expertise. Our engagement
                                                    models are designed to accelerate the process to shorten the product development
                                                    life cycle.Headquartered in New Jersey, we operate onsite and offshore centers to cater to clients across industries, including Financial Services, Retail, Medical, Entertainment, Manufacturing, and Automotive. Our deep industry knowledge and global presence enable us to deliver high-quality solutions that drive business growth and surpass customer expectations.

                                                    Choose TMS as your trusted digital product engineering partner and embark on a journey of innovation and success. <a href="contact" class="site-text-orange">Contact us</a> today to discuss how we can transform your ideas into reality.
                                                </p>
                                            </div>

                                   
                                    

                                </div>
                                <!-- TITLE END-->
                                <!-- <div class="twm-read-more">
                                <a href="about-1.html" class="site-button">Know More About Us</a>
                            </div>                -->

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- intro end -->

<!-- Our product RPE START -->
{{-- <div class="section-full p-t30 p-b90 site-bg-white twm-companies-wrap twm-companies-wrap-h-page-7 pos-relative">
<div class="twm-companies-wrap-bg-block2"></div>

<div class="section-head center wt-small-separator-outer content-white">
    <div class="wt-small-separator site-text-primary">
        <div>Our Product</div>
    </div>
    <h2 class="wt-title">"Resume Parser Engine"</h2>
</div> --}}

<!-- Our product RPE END -->
            <!-- HOW IT WORK SECTION START -->
            {{-- <div class="section-full p-t120 p-b90 site-bg-white twm-how-it-work-area2">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-12">
                            <!-- TITLE START-->
                            <div class="section-head left wt-small-separator-outer">
                                <div class="wt-small-separator site-text-primary">
                                    <div>How It Works:</div>
                                </div>
                                <h2 class="wt-title">Resume Parser System</h2>
                                <h3 class="wt-title">Follow our steps we will help you.</h3>

                            </div>
                            <ul class="description-list">
                                <li>
                                    <i class="feather-check"></i>
                                    You Shall Have All Candidate Data In One Place
                                </li>
                                <li>
                                    <i class="feather-check"></i>
                                    Maintains A Standard Format
                                </li>
                                <li>
                                    <i class="feather-check"></i>
                                    Efficient Data Entry & Reduced Margin Of Error
                                </li>
                                <li>
                                    <i class="feather-check"></i>
                                    Saves You Time
                                </li>
                            </ul>
                            <!-- TITLE END-->
                        </div>
                        <div class="col-lg-7 col-md-12">
                            <div class="twm-w-process-steps-2-wrap">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="twm-w-process-steps-2">
                                            <div class="twm-w-pro-top bg-clr-sky-light bg-sky-light-shadow">
                                                <span class="twm-large-number text-clr-sky">01</span>
                                                <div class="twm-media">
                                                    <span><img src="{{('images/work-process/icon1.png')}}" alt="icon1"></span>
                                                </div>
                                                <h4 class="twm-title">Register<br>Your Account</h4>
                                                <!-- <p>You need to create an account to find the best and preferred job.</p> -->
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="twm-w-process-steps-2">
                                            <div class="twm-w-pro-top bg-clr-yellow-light bg-yellow-light-shadow">
                                                <span class="twm-large-number text-clr-yellow">02</span>
                                                <div class="twm-media">
                                                    <span><img src="{{('images/work-process/icon4.png')}}" alt="icon1"></span>
                                                </div>
                                                <h4 class="twm-title">Import<br>
                                                    Data Files</h4>
                                                <!-- <p>You need to create an account to find the best and preferred job.</p> -->
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="twm-w-process-steps-2">
                                            <div class="twm-w-pro-top bg-clr-pink-light bg-pink-light-shadow">
                                                <span class="twm-large-number text-clr-pink">03</span>
                                                <div class="twm-media">
                                                    <span><img src="{{('images/work-process/icon3.png')}}" alt="icon1"></span>
                                                </div>
                                                <h4 class="twm-title">Extract<br>Your Data </h4>
                                                <!-- <p>You need to create an account to find the best and preferred job.</p> -->
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="twm-w-process-steps-2">
                                            <div class="twm-w-pro-top bg-clr-green-light bg-clr-light-shadow">
                                                <span class="twm-large-number text-clr-green">04</span>
                                                <div class="twm-media">
                                                    <span><img src="{{('images/work-process/icon3.png')}}" alt="icon1"></span>
                                                </div>
                                                <h4 class="twm-title">Get<br>Structure Resumes</h4>
                                                <!-- <p>You need to create an account to find the best and preferred job.</p> -->
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="twm-how-it-work-section">

                    </div>
                </div>

            </div> --}}
            <!-- HOW IT WORK SECTION END -->

            <!-- EXPLORE NEW LIFE START -->
            {{-- <div class="section-full p-t120 p-b120 twm-explore-area bg-cover" style="background-image: url{{('images/background/bg-1jpg')}};">
                <div class="container">

                    <div class="section-content">
                        <div class="row">

                            <div class="col-lg-4 col-md-12">
                                <div class="twm-explore-media-wrap">
                                    <div class="twm-media">
                                        <img src="{{('images/gir-large.png')}}" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-8 col-md-12">
                                <div class="twm-explore-content-outer">
                                    <div class="twm-explore-content">

                                        <div class="twm-l-line-1"></div>
                                        <div class="twm-l-line-2"></div>

                                        <div class="twm-r-circle-1"></div>
                                        <div class="twm-r-circle-2"></div>

                                        <div class="twm-title-small">Explore New Technologies</div>
                                        <div class="twm-title-large">
                                            <h2> Be a part of Revolution. </h2>
                                            <H3>Get your free Resume Parser Demo Today!</H3>
                                            <!-- <p>Gknkx</p> -->
                                        </div>
                                        <div class="twm-upload-file">
                                            <button type="button" class="site-button">Upload Your Resume Here <i
                                                    class="feather-upload"></i></button>
                                        </div>


                                    </div>
                                    <div class="twm-bold-circle-right"></div>
                                    <div class="twm-bold-circle-left"></div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div> --}}
            <!-- EXPLORE NEW LIFE END -->

            <!-- Jobs Category START -->
            <div class="section-full p-t20 p-b90 site-bg-white job-categories-home-5-wrap twm-bdr-bottom-1">
                <div class="container">

                    <!-- TITLE START-->
                    <div class="section-head center wt-small-separator-outer">
                        <div class="wt-small-separator site-text-primary">
                            <div>Services We Provide</div>
                        </div>
                        <h4 class="wt-title hide-in-mobile" style="font-size:40px; font-weight: 300;">Find the worth of your demand under one-roof.</h4>
                    </div>
                    <!-- TITLE END-->

                </div>

                <div class="section-content twm-jobs-grid-h5-section-outer hide-in-mobile">
                    <div class="twm-jobs-grid-h5-section overlay-wraper"
                        style="background-image: url{{ asset('images/home-5/cate-bg.jpg')}};">
                        <div class="overlay-main site-bg-primary opacity-09"></div>

                        <div class="swiper-container category-5-slider">
                            <div class="swiper-wrapper">



                             
                                 <!--4-->
                                 <div class="swiper-slide">
                                      <a href="{{ route ('software')}}">
                                    <div class="job-categories-home-5">
                                        <div class="twm-media cat-bg-clr-4">
                                            <div class="flaticon-dashboard"></div>
                                        </div>
                                        <div class="twm-content">
                                            <a href="{{ route ('software')}}">Software Applications</a>
                                            <div class="twm-jobs-available"></div>

                                        </div>
                                    </div>
                                </a>
                                </div>

                                      <!--10-->
                                      <div class="swiper-slide">
                                          <a href="{{ route ('iot')}}">
                                        <div class="job-categories-home-5">
                                            <div class="twm-media cat-bg-clr-2">
                                                <div class="flaticon-coding"></div>
                                            </div>
                                            <div class="twm-content">
                                                <a href="{{ route ('iot')}}">IOT <br>Integration</a>
                                                <div class="twm-jobs-available"></div>
    
                                            </div>
                                        </div>
                                    </a>
                                    </div>

                                <!--3-->
                                {{-- <div class="swiper-slide">
                                      <a href="{{ route ('software')}}">
                                    <div class="job-categories-home-5">
                                        <div class="twm-media cat-bg-clr-2">
                                            <div class="flaticon-bars"></div>
                                        </div>
                                        <div class="twm-content">
                                            <a href="{{ route ('software')}}">Data Warehouse and engineering</a>
                                            <div class="twm-jobs-available"></div>

                                        </div>
                                    </div>
                                </a>
                                </div>  --}}
                                   <!--2-->
                                   <div class="swiper-slide">
                                      <a href="{{ route ('staffing')}}">
                                    <div class="job-categories-home-5">
                                        <div class="twm-media cat-bg-clr-3">
                                            <div class="flaticon-customer-support"></div>
                                        </div>
                                        <div class="twm-content">
                                            <a href="{{ route ('staffing')}}">Staffing <br> Services</a>
                                            <div class="twm-jobs-available"></div>

                                        </div>
                                    </div>
                                </a>
                                </div>

                               




                                <!--7-->
                                <div class="swiper-slide">
                                      <a href="{{ route ('ai_ml')}}">
                                <div class="job-categories-home-5">
                                    <div class="twm-media cat-bg-clr-2">
                                        <div class="flaticon-user"></div>
                                    </div>                                   
                                    <div class="twm-content">
                                        <a href="{{ route ('ai_ml')}}">AI and ML Advancement</a>
                                        <div class="twm-jobs-available"></div>
                                        
                                    </div>                               
                                </div>
                            </a>
                              </div>

                                <!--8-->
                                <div class="swiper-slide">
                                      <a href="{{ route ('di_bi')}}">
                                    <div class="job-categories-home-5">
                                        <div class="twm-media cat-bg-clr-4">
                                            <div class="flaticon-repair"></div>
                                        </div>
                                        <div class="twm-content">
                                            <a href="{{ route ('di_bi')}}">BI & Data Intelligence </a>
                                            <div class="twm-jobs-available"></div>

                                        </div>
                                    </div>
                                </a>
                                </div>
                                <!-- Add Pagination -->
                                {{-- <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div> --}}
                            </div>

                        </div>
                    </div>

                </div>
                <!-- job categories and Recruiters END -->

                {{-- services view inmobile strat --}}
                <div class="section-full p-t30 p-b30 site-bg-gray twm-job-categories-area2 hide-in-desktop">
                    <!-- TITLE START-->
                    <!-- <div class="section-head center wt-small-separator-outer">
                        <div class="wt-small-separator site-text-primary">
                           <div>Jobs by Categories</div>                                
                        </div>
                        <h2 class="wt-title">Choose Your Desire Category</h2>
                    </div>                   -->
                    <!-- TITLE END--> 
                    
                    <div class="container">
    
                        <div class="twm-job-categories-section-2">
                           
                            <div class="job-categories-style1 m-b30">
                                <div class="row">
                                
                                    <!-- COLUMNS 1 --> 
                                    <div class="col-lg-4 col-md-5">
                                      
                                        <a href="{{ route ('staffing')}}">
                                        <div class="job-categories-block-2 m-b30">
                                            <div class="twm-media">
                                              <div><img src="{{ asset('images/servicesimg/S.permanent.png')}}" alt=""></div>
                                            </div>                                   
                                            <div class="twm-content">
                                                <div class="twm-jobs-available"><h3 class="site-text-primary mt-2">Staffing Management </h3></div>
                                              
                                                {{-- <a href=""><p>Help find career employees for technology and business requirements that match the skills required and organizational values.</p></a> --}}
                                            </div>                             
                                        </div>
                                    </a>
                                    </div>
    
                                    <div class="col-lg-4 col-md-5">
                                         <a href="{{ route ('iot')}}">
                                        <div class="job-categories-block-2 m-b30">
                                            <div class="twm-media">
                                              <div><img src="{{ asset('images/servicesimg/iot2.png')}}" alt=""></div>
                                            </div>                                   
                                            <div class="twm-content">
                                                <div class="twm-jobs-available"><h3 class="site-text-primary mt-2">IOT Integration</h3></div>
                                              
                                                {{-- <a href=""><p>Help find career employees for technology and business requirements that match the skills required and organizational values.</p></a> --}}
                                            </div>                               
                                        </div></a>
                                    </div>

                                    <div class="col-lg-4 col-md-5">
                                         <a href="{{ route ('ai_ml')}}">
                                        <div class="job-categories-block-2 m-b30">
                                            <div class="twm-media">
                                              <div><img src="{{ asset('images/servicesimg/ai2.png')}}" alt=""></div>
                                            </div>                                   
                                            <div class="twm-content">
                                                <div class="twm-jobs-available"><h3 class="site-text-primary mt-2">Artificial intelligence and Machine Learning  </h3></div>
                                              
                                                {{-- <a href=""><p>Help find career employees for technology and business requirements that match the skills required and organizational values.</p></a> --}}
                                            </div>                               
                                        </div></a>
                                    </div>

                                    <div class="col-lg-4 col-md-5">
                                         <a href="{{ route ('di_bi')}}">
                                        <div class="job-categories-block-2 m-b30">
                                            <div class="twm-media">
                                              <div><img src="{{ asset('images/servicesimg/BI.png')}}" alt=""></div>
                                            </div>                                   
                                            <div class="twm-content">
                                                <div class="twm-jobs-available"><h3 class="site-text-primary mt-2">Data & Business Intelligence</h3></div>
                                              
                                                {{-- <a href=""><p>Help find career employees for technology and business requirements that match the skills required and organizational values.</p></a> --}}
                                            </div>                               
                                        </div></a>
                                    </div>

                                    <div class="col-lg-4 col-md-5">
                                         <a href="{{ route ('dw_eng')}}">
                                        <div class="job-categories-block-2 m-b30">
                                            <div class="twm-media">
                                              <div><img src="{{ asset('images/servicesimg/dw3.png')}}" alt=""></div>
                                            </div>                                   
                                            <div class="twm-content">
                                                <div class="twm-jobs-available"><h3 class="site-text-primary mt-2">Data Warehouse & Intelligence</h3></div>
                                              
                                                {{-- <a href=""><p>Help find career employees for technology and business requirements that match the skills required and organizational values.</p></a> --}}
                                            </div>                               
                                        </div></a>
                                    </div>

                                    <div class="col-lg-4 col-md-5">
                                         <a href="{{ route ('software')}}">
                                        <div class="job-categories-block-2 m-b30">
                                            <div class="twm-media">
                                              <div><img src="{{ asset('images/servicesimg/API.png')}}" alt=""></div>
                                            </div>                                   
                                            <div class="twm-content">
                                                <div class="twm-jobs-available"><h3 class="site-text-primary mt-2">Software Application Development</h3></div>
                                              
                                                {{-- <a href=""><p>Help find career employees for technology and business requirements that match the skills required and organizational values.</p></a> --}}
                                            </div>                               
                                        </div></a>
                                    </div>
                                    
                                    
                                                                       
    
                                </div>
                            </div>
    
                            <!-- <div class="text-center job-categories-btn">
                                <a href="job-list.html" class=" site-button">All Categories</a>
                            </div> -->
    
                        </div>
    
                    </div>
    
                </div>
                {{-- services view in desktop ends --}}

                <!-- TOP COMPANIES START -->
                <div class="section-full p-t120 p-b90 site-bg-white twm-companies-wrap twm-companies-wrap-h-page-7 pos-relative"
                    style="margin-top: 180px;">
                    <div class="twm-companies-wrap-bg-block2"></div>
                    <!-- TITLE START-->
                    <div class="section-head center wt-small-separator-outer content-white">
                        <div class="wt-small-separator site-text-primary">
                            <div>Top Companies</div>
                        </div>
                        <h2 class="wt-title">Trusted by top-tier companies world-wide</h2>
                    </div>
                    <!-- TITLE END-->

                    <div class="container  block-background-white">
                        <div class="twm-companies-h-page-7">
                            <div class="section-content">
                                <div class="owl-carousel home-client-carousel3 owl-btn-vertical-center">

                                    <div class="item">
                                        <div class="ow-client-logo">
                                            <div class="client-logo client-logo-media">
                                                <a href=""><img src="{{ asset('images/client-logo/alight.png')}}"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="ow-client-logo">
                                            <div class="client-logo client-logo-media">
                                                <a href=""><img src="{{ asset('images/client-logo/conduent.png')}}"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="ow-client-logo">
                                            <div class="client-logo client-logo-media">
                                                <a href=""><img src="{{ asset('images/client-logo/dtcc.png')}}"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="ow-client-logo">
                                            <div class="client-logo client-logo-media">
                                                <a href=""><img src="{{ asset('images/client-logo/Ebix.png')}}"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="ow-client-logo">
                                            <div class="client-logo client-logo-media">
                                                <a href=""><img src="{{ asset('images/client-logo/mastercard.png')}}"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="ow-client-logo">
                                            <div class="client-logo client-logo-media">
                                                <a href=""><img src="{{ asset('images/client-logo/scholastic.png')}}"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="ow-client-logo">
                                            <div class="client-logo client-logo-media">
                                                <a href=""><img src="{{ asset('images/client-logo/synchrony.png')}}"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                    </div>

                                 
                                    <div class="item">
                                        <div class="ow-client-logo">
                                            <div class="client-logo client-logo-media">
                                                <a href=""><img src="{{ asset('images/client-logo/uzio.png')}}"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="twm-company-approch2-outer">
                                <div class="twm-company-approch2">
                                    <div class="row">

                                        <!--block 1-->
                                        <div class="col-lg-4 col-md-4">
                                            <div class="counter-outer-two">
                                                <div class="icon-content">
                                                    <div class="tw-count-number site-text-primary">
                                                        <span class="counter">5</span>M+
                                                    </div>
                                                    <p class="icon-content-info">Million daily active users</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!--block 2-->
                                        <div class="col-lg-4 col-md-4">
                                            <div class="counter-outer-two">
                                                <div class="icon-content">
                                                    <div class="tw-count-number site-text-primary">
                                                        <span class="counter">9</span>K+
                                                    </div>
                                                    <p class="icon-content-info">Open job positions</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!--block 3-->
                                        <div class="col-lg-4 col-md-4">
                                            <div class="counter-outer-two">
                                                <div class="icon-content">
                                                    <div class="tw-count-number site-text-primary">
                                                        <span class="counter">2</span>M+
                                                    </div>
                                                    <p class="icon-content-info">Million stories shared</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- TOP COMPANIES END -->


            </div>
            <!-- Jobs Category end-->
            
            <!-- Newsletter Subscriber SECTION START -->
              <div class="section-full twm-hpage-6-subs-wrap bg-cover "  style="background-image: url('{{ asset('images/home-6/subscribe-bg.jpg') }}');;">
                <div class="container">

                    <div class="section-content">
                        <div class="row">

                            <div class="col-lg-7 col-md-12">
                                <div class="twm-hpage-6-getintouch">
                                    <div class="callus-bg-box">
                                        <div class="callus-bg-box-shadow"></div>
                                    </div>
                                    <div class="twm-hpage-6-getintouch-title">
                                        <h2 class="wt-title">
                                            Elevate your business with<span> expert consultation </span>
                                        </h2>
                                        <div class="wt-title-small"> </div>
                                     
                                    </div>
                                    <div class="twm-hpage-6-callus">
                                        <div class="callus-icon">
                                            <i class="flaticon-phone"></i>
                                        </div>
                                        <div class="callus-content">
                                            <div class="callus-number"><a href="tel:201-254-7297" class="site-text-white"><p>201-254-7297</p></a></div> 
                                            <div class="callus-email"><a class="site-text-white" href="mailto:info@linktms.com"><p>info@linktms.com</p></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-5 col-md-12">
                               <div class="twm-hpage-6-subscribe-wrap">
                                   <div class="hpage-6-nw-form-corner-wrap">
                                        <div class="twm-hpage-6-subscribe">
                                            <h3 class="twm-sub-title">Connect with us today</h3>
                                            {{-- <div class="twm-sub-discription">
                                                With the latest industry insights and growth strategies. Act now to propel your business forward.
                                            </div> --}}
                                          <!-- TITLE END-->
                                          <form class="cons-contact-form" method="POST" action="{{ route('contact.store') }}">
                                            @csrf
                                            <div class="row">
    
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <input type="text" name="name" class="form-control"
                                                            value="{{ old('name') }}" placeholder="Name">
                                                        @error('name')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
    
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <input type="email" name="email" class="form-control"
                                                            value="{{ old('email') }}" placeholder="Email">
                                                        @error('email')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
    
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <input type="tel" name="phone" class="form-control"
                                                            value="{{ old('phone') }}" placeholder="Phone">
                                                        @error('phone')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                        <style>
                                                            input::-webkit-outer-spin-button,
                                                            input::-webkit-inner-spin-button {
                                                                display: none;
                                                            }
    
                                                            input[type=number] {
                                                                -moz-appearance: textfield;
                                                            }
                                                        </style>
                                                    </div>
                                                </div>
    
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <input type="text" name="subject" class="form-control"
                                                            value="{{ old('subject') }}" placeholder="Subject">
                                                        @error('subject')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
    
                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <textarea name="message" class="form-control" placeholder="Message">{{ old('message') }}</textarea>
                                                        @error('message')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
    
                                                <div class="col-md-12">
                                                    <button type="button" class="site-button" onclick="submitForm()">Submit
                                                        Now</button>
                                                </div>
    
    
                                            </div>
                                        </form>
                                        <script>
                                            function submitForm() {
                                                // Disable the submit button to prevent multiple clicks
                                                const submitButton = document.querySelector('.site-button');
                                                submitButton.disabled = true;
    
                                                // Get the form data
                                                const formData = new FormData(document.querySelector('.cons-contact-form'));
    
                                                // Make an AJAX request using Axios
                                                axios.post('{{ route('contact.store') }}', formData)
                                                    .then(response => {
                                                        // Handle the success response
                                                        if (response.data.success) {
                                                            // Display success message (assuming you return a 'success' flag from your Laravel controller)
                                                            showAlert('alert-success', response.data.success);
                                                            // Reset the form after a successful submission
                                                            document.querySelector('.cons-contact-form').reset();
                                                        } else {
                                                            // Display error message (assuming you return an 'error' flag from your Laravel controller)
                                                            showAlert('alert-danger', response.data.error);
                                                        }
                                                    })
                                                    .catch(error => {
                                                        // Handle the error response
                                                        showAlert('alert-danger', 'An error occurred while submitting the form.');
                                                    })
                                                    .finally(() => {
                                                        // Re-enable the submit button after the AJAX request is completed
                                                        submitButton.disabled = false;
                                                    });
                                            }
    
                                            function showAlert(className, message) {
                                                const alertDiv = document.createElement('div');
                                                alertDiv.className = `alert ${className}`;
                                                alertDiv.textContent = message;
    
                                                const form = document.querySelector('.cons-contact-form');
                                                form.parentNode.insertBefore(alertDiv, form);
    
                                                // Automatically remove the alert after 5 seconds
                                                setTimeout(() => {
                                                    alertDiv.remove();
                                                }, 5000);
                                            }
                                        </script>
                                        </div>
                                        <div class="hpage-6-nw-form-corner"></div>
                                    </div>
                               </div>
                            </div>

                        </div>
                    </div>
                   
                </div>
            </div>
            <!-- Newsletter Subscriber TABLE SECTION END -->
            @endsection