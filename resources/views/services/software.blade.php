@extends('layouts.app')
@section('content')

    <!-- INNER PAGE BANNER -->
  <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(images/banner/1.jpg);">
    <div class="overlay-main site-bg-white opacity-01"></div>
    <div class="container">
        <div class="wt-bnr-inr-entry">
            
            <div>
                <ul class="wt-breadcrumb breadcrumb-style-2" style="margin-bottom: 50px;">
                    <li><a href="index.html">Home</a></li>
                    <li>Services</li>
                </ul>
            </div>
            <div class="banner-title-outer">
                <h2><div class="banner-title-name site-text-primary">
                    Software Application Development
            </div></h2>
                
            </div>
            <!-- BREADCRUMB ROW -->


            <!-- BREADCRUMB ROW END -->
        </div>
    </div>
</div>
<!-- INNER PAGE BANNER END -->


              <!-- FEATURed services SECTION START -->
              <div class="section-full p-t120 p-b90 site-bg-gray twm-job-categories-area2">
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
                                    <div class="job-categories-block-2 m-b30">
                                        <div class="twm-media">
                                          <div><img src="{{ asset('images/servicesimg/mobile-app.png')}}" alt=""></div>
                                        </div>                                   
                                        <div class="twm-content">
                                            <div class="twm-jobs-available"><h3 class="site-text-primary mt-2">Mobile App Development</h3></div>
                                          
                                            <a href=""><p>We build native mobile applications for cross platform and hybrid applications. Expertise includes iOS, Android and Windows platforms. Framework include Xamarin, RactNative, Flutter, Phonegap etc.</p></a>
                                        </div>                               
                                    </div>
                                </div>

                                <!-- COLUMNS 2 --> 
                                <div class="col-lg-4 col-md-5">
                                    <div class="job-categories-block-2 m-b30">
                                        <div class="twm-media">
                                            <div><img src="{{ asset('images/servicesimg/cloud-network.png')}}" alt=""></div>
                                            <div class=""></div>
                                        </div>                                   
                                        <div class="twm-content">
                                            <div class="twm-jobs-available"><h3 class="site-text-primary mt-2">Cloud Application Development</h3></div>
                                          
                                            <a href=""><p>Our expertise includes DevOps tools like Kubernetes, Docker, Gitlab CI/CD for automated management across public, private and hybrid cloud.</p></a>
                                        </div>                               
                                    </div>
                                </div>
                                
                                <!-- COLUMNS 3 --> 
                                <div class="col-lg-4 col-md-5">
                                    <div class="job-categories-block-2 m-b30">
                                        <div class="twm-media">
                                            <div><img src="{{ asset('images/servicesimg/API.png')}}" alt=""></div>
                                        </div>                                   
                                        <div class="twm-content">
                                            <div class="twm-jobs-available"><h3 class="site-text-primary mt-2">API Integration</h3></div>
                                          
                                            <a href=""><p>We are the experts in designing and developing software technology products that help your business to grow and offer our clients that are tailored to meet their unique requirements .</p></a>
                                        </div>                               
                                    </div>
                                </div>
                                
                                                                   

                            </div>
                        </div>

                        <!-- <div class="text-center job-categories-btn">
                            <a href="job-list.html" class=" site-button">All Categories</a>
                        </div> -->

                    </div>

                </div>

            </div>
            <!-- FEATURED  services SECTION END -->
           
            <!-- Why choose Us SECTION START -->
            {{-- <div class="section-full p-t50 p-b90 site-bg-gray twm-about-1-area">
                        
                <div class="container">
                    <div class="twm-about-1-section-wrap">
                        <div class="row">
                            
                            <div class="col-lg-6 col-md-12">
                                <div class="twm-about-1-section">
                                    <div class="twm-media">
                                        <img src="images/servicesimg/young-woman-cover-her-face-with-digital-tablet-isolated-whit-removebg-preview.png" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <div class="twm-about-1-section-right">
                                    <!-- TITLE START-->
                                        <div class="section-head left wt-small-separator-outer">
                                            <div class="wt-small-separator site-text-primary">
                                                <div>Why Choose Us</div>                                
                                            </div>
                                            <h2 class="wt-title">Millions of jobs approaches. Find the best services 
                                                 that’s right for you.</h2>
                                            
                                        </div>
                                    <!-- TITLE END-->
                                        <ul class="description-list">
                                            <li class="mb-3">
                                                <i class="feather-check "></i>
                                                <h4>Free quotes and consultation</h4>
                                               
                                            </li>
                                            <li class="mb-3">
                                                <i class="feather-check"></i>
                                                <h4>We listen, suggest, and update</h4>

                                            </li>
                                            <li class="mb-3">
                                                <i class="feather-check"></i>
                                                <h4>Fixed prices and no surprises</h4>
                                            </li>
                                            <li class="mb-3">
                                                <i class="feather-check"></i>
                                               <h4>We have a proven methodology</h4>
                                            </li>
                                        </ul>                  
                                    
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="twm-about-1-bottom-wrap">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <!--icon-block-1-->
                                <div class="twm-card-blocks">
                                    <div class="twm-icon pink">
                                        <img src="images/main-slider/slider2/icon-2.png" alt="">
                                    </div>
                                    <div class="twm-content">
                                        <div class="tw-count-number text-clr-pink">
                                            <span class="counter">98</span> +
                                        </div>
                                        <p class="icon-content-info">Job For Countries </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <!--icon-block-2-->
                                <div class="twm-card-blocks-2">
                                    <div class="twm-pics">
                                        <span><img src="images/main-slider/slider2/user/u-1.jpg" alt=""></span>
                                        <span><img src="images/main-slider/slider2/user/u-2.jpg" alt=""></span>
                                        <span><img src="images/main-slider/slider2/user/u-3.jpg" alt=""></span>
                                        <span><img src="images/main-slider/slider2/user/u-4.jpg" alt=""></span>
                                        <span><img src="images/main-slider/slider2/user/u-5.jpg" alt=""></span>
                                        <span><img src="images/main-slider/slider2/user/u-6.jpg" alt=""></span>
                                    </div>
                                    <div class="twm-content">
                                        <div class="tw-count-number text-clr-green">
                                            <span class="counter">3</span>K+
                                        </div>
                                        <p class="icon-content-info">Jobs Done</p>
                                    </div>
                                </div> 
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <!--icon-block-3-->
                                <div class="twm-card-blocks">
                                    <div class="twm-icon">
                                        <img src="images/main-slider/slider2/icon-1.png" alt="">
                                    </div>
                                    <div class="twm-content">
                                        <div class="tw-count-number text-clr-sky">
                                            <span class="counter">12</span>K+
                                        </div>
                                        <p class="icon-content-info">Companies Jobs</p>
                                    </div>
                                </div>
                            </div>

                            
                            

                        </div>
                    </div>
                </div>

           
           
            </div>    --}}
            <!-- Why Choose Us SECTION END -->

            <!-- slient feautures Work START -->
         
               <!-- OUR BLOG START -->
               <div class="section-full p-t70 p-b90 site-bg-gray bg-cover overlay-wraper" style="background-image:url(images/background/bg-1.jpg)">
                <div class="overlay-main site-bg-primary opacity-01"></div>
                <div class="container">
                   
                    <!-- TITLE START-->
                    <div class="section-head center wt-small-separator-outer">
                        <div class="wt-small-separator site-text-primary">
                           <div class="site-text-orange">How We Work</div>                                
                        </div>
                        <h2 class="wt-title site-text-primary">Our Slient Features</h2>
                        
                    </div>                  
                    <!-- TITLE END-->


                    <div class="section-content">
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-5 col-md-12 m-b30">
                                <!--Block one-->
                                <div class="blog-post twm-blog-post-2-outer">
                                    <div class="wt-post-media">
                                        <a href=""><img src="{{ asset('images/servicesimg/software development1.jpg')}}" alt=""></a>
                                    </div>                                    
                                    <div class="wt-post-info">
                                        <div class="wt-post-meta ">
                                            <ul>
                                                <li class="post-date">TMS</li>
                                            </ul>
                                        </div>
                                                                     
                                    <div class="wt-post-title ">
                                        <h4 class="post-title">
                                            <a href="">
                                                Software Product Development
                                            </a>
                                        </h4>
                                    </div>
                                   
                                    <div class="wt-post-readmore ">
                                        <p class="site-text-white">We build software which used by companies to solve different business problems. We offer a broad range of out-of-the-box solutions that can be customized and configured to match specific business needs.</p>
                                    </div>                                        
                                </div>                                
                                </div>
                            </div>
                            
                            <div class="col-lg-7 col-md-12">

                                <div class="twm-blog-post-wrap-right">
                                    <!--Block two-->
                                    <div class="blog-post twm-blog-post-1-outer shadow-none  m-b10  ">
                                        <div class="wt-post-info">

                                          
                                                                        
                                            <div class="wt-post-title ">
                                                <h4 class="site-tittle-primary">
                                                   Software Product Development
                                                </h4>
                                            </div>
                                            <!-- <div class="wt-post-text ">
                                                <p>
                                                    We provide full stack software engineering services for developing software technology products. Some of our key services are listed as below
                                                </p>
                                            </div> -->
                                            <!-- <div class="wt-post-readmore ">
                                                <a href="blog-single.html" class="site-button-link site-text-primary">Read More</a>
                                            </div>  -->

                                        </div>                                
                                    </div>

                                    <!--Block three-->
                                    <div class="blog-post twm-blog-post-1-outer shadow-none  m-b3">
                                        <div class="wt-post-info">
                                           

                                          
                                                                        
                                            <div class="wt-post-title post-date ">
                                                <h4 class="site-tittle-primary">
                                                    Mobile App Development
                                                </h4>
                                            </div>
                                            <!-- <div class="wt-post-text ">
                                                <p>
                                                    We provide full stack software engineering services for developing software technology products. Some of our key services are listed as below
                                                </p>
                                            </div> -->
                                            <!-- <div class="wt-post-readmore ">
                                                <a href="blog-single.html" class="site-button-link site-text-primary">Read More</a>
                                            </div>  -->

                                        </div>                                
                                    </div>

                                    <!--Block four-->
                                    <div class="blog-post twm-blog-post-1-outer shadow-none  m-b30">
                                        <div class="wt-post-info">

                                          
                                                                        
                                            <div class="wt-post-title ">
                                                <h4 class="site-tittle-primary">
                                                    Software Quality Assurance (QA)
                                                </h4>
                                            </div>
                                            <!-- <div class="wt-post-text ">
                                                <p>
                                                    We provide full stack software engineering services for developing software technology products. Some of our key services are listed as below
                                                </p>
                                            </div> -->
                                            <!-- <div class="wt-post-readmore ">
                                                <a href="blog-single.html" class="site-button-link site-text-primary">Read More</a>
                                            </div>  -->

                                        </div>   
                                        
                                                                         
                                    </div>
                                    


                                    <div class="blog-post twm-blog-post-1-outer shadow-none  m-b30">
                                        <div class="wt-post-info">

                                          
                                                                        
                                            <div class="wt-post-title ">
                                                <h4 class="site-tittle-primary">
                                                    DevOps Engineering Cross Platform App
                                                </h4>
                                            </div>
                                            <!-- <div class="wt-post-text ">
                                                <p>
                                                    We provide full stack software engineering services for developing software technology products. Some of our key services are listed as below
                                                </p>
                                            </div> -->
                                            <!-- <div class="wt-post-readmore ">
                                                <a href="blog-single.html" class="site-button-link site-text-primary">Read More</a>
                                            </div>  -->

                                        </div>                                
                                    </div>

                                  
                                </div>

                            </div>                                                        
                                                        
                        </div>
                    </div>
                   
                </div>
            </div>
            <!-- OUR BLOG END -->

            <!-- slient feautures Work END -->
   <!-- TOP COMPANIES START -->
   <div class="section-full p-t70  site-bg-white twm-companies-wrap">
                  
    <!-- TITLE START-->
    <div class="section-head center wt-small-separator-outer">
        <div class="wt-small-separator site-text-primary">
           <div class="site-text-orange">Top Companies</div>                                
        </div>
        <h2 class="wt-title">Get hired in top companies</h2>
    </div>                  
    <!-- TITLE END-->

    <div class="container">
        <div class="section-content">
            <div class="owl-carousel home-client-carousel2 owl-btn-vertical-center">
            
                <div class="item">
                    <div class="ow-client-logo">
                        <div class="client-logo client-logo-media">
                            <a href=""><img src="images/client-logo/alight.png"
                                    alt=""></a>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="ow-client-logo">
                        <div class="client-logo client-logo-media">
                            <a href=""><img src="images/client-logo/conduent.png"
                                    alt=""></a>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="ow-client-logo">
                        <div class="client-logo client-logo-media">
                            <a href=""><img src="images/client-logo/dtcc.png"
                                    alt=""></a>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="ow-client-logo">
                        <div class="client-logo client-logo-media">
                            <a href=""><img src="images/client-logo/Ebix.png"
                                    alt=""></a>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="ow-client-logo">
                        <div class="client-logo client-logo-media">
                            <a href=""><img src="images/client-logo/mastercard.png"
                                    alt=""></a>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="ow-client-logo">
                        <div class="client-logo client-logo-media">
                            <a href=""><img src="images/client-logo/uzio.png"
                                    alt=""></a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
  

</div>
<!-- TOP COMPANIES END -->
      
  <!-- contact form SECTION START -->
  <div class="section-full twm-hpage-6-subs-wrap bg-cover " style="background-image: url(images/home-6/subscribe-bg.jpg)">
    <div class="container">

        <div class="section-content">
            <div class="row">

                <div class="col-lg-7 col-md-12">
                    <div class="twm-hpage-6-getintouch">
                        <div class="callus-bg-box">
                            <div class="callus-bg-box-shadow"></div>
                        </div>
                        <div class="twm-hpage-6-getintouch-title">
                            <div class="wt-title-small">Latest Updates</div>
                            <h2 class="wt-title">
                                Get your <span>Free</span>
                                 consultation
                            </h2>
                        </div>
                        <div class="twm-hpage-6-callus">
                            <div class="callus-icon">
                                <i class="flaticon-phone"></i>
                            </div>
                            <div class="callus-content">
                                <div class="callus-number">201-254-7297</div> 
                                <div class="callus-email">Info@tms.com</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-12">
                   <div class="twm-hpage-6-subscribe-wrap">
                       <div class="hpage-6-nw-form-corner-wrap">
                            <div class="twm-hpage-6-subscribe">
                                <div class="contact-form-outer">

                                    <!-- TITLE START-->
                                    <div class="section-head left wt-small-separator-outer">
                                        <h2 class="wt-title" style="color:#002860 ;">Send Us a Message</h2>
                                        <p>Drop your details and we will get back to you.</p>
                                    </div>
                                    <!-- TITLE END--> 

                                    <form  class="cons-contact-form" method="post" action="#" ">
                                        <div class="row">

                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group mb-3">
                                                    <input name="username" type="text" required class="form-control" placeholder="Name">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group mb-3">
                                                <input name="email" type="text" class="form-control" required placeholder="Email">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group mb-3">
                                                    <input name="phone" type="text" class="form-control" required placeholder="Phone">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group mb-3">
                                                    <input name="subject" type="text" class="form-control" required placeholder="Subject">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                <textarea name="message" class="form-control" rows="3" placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-12">
                                                <button type="submit" class="site-button"
                                                style="color: #011736; background-color: #002860;">Submit Now</button>
                                            </div>
                                            
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="hpage-6-nw-form-corner"></div>
                        </div>
                   </div>
                </div>

            </div>
        </div>
       
    </div>
</div>
<!-- contact formSECTION END -->
   @endsection