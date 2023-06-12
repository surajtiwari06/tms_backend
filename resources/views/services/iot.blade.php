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
                    Internet Of Things and It's Solutions
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
                                        <div><img src="{{ asset('images/servicesimg/iot1.png')}}" alt=""></div>
                                    </div>                                   
                                    <div class="twm-content">
                                        <div class="twm-jobs-available"><h3 class="site-text-primary mt-2">IOT Integration</h3></div>
                                      
                                        <a href=""><p>The IoT is rapidly growing across industrial world businesses that don’t embrace IoT solutions will fall behind their -competitors. We bring intelligence to all end points & integrate wide range of IoT sensors including Temperature Sensors. Humidity Sensors, Vibration sensors ,Level Sensors Pressure Sensors, Proximity Sensors. MEMS sensors, Gyroscope, Gas Sensors.</p></a>
                                    </div>                               
                                </div>
                            </div>

                            <!-- COLUMNS 2 --> 
                            <div class="col-lg-4 col-md-5">
                                <div class="job-categories-block-2 m-b30">
                                    <div class="twm-media">
                                        <div><img src="{{ asset('images/servicesimg/iot2.png')}}" alt=""></div>

                                        <div class=""></div>
                                    </div>                                   
                                    <div class="twm-content">
                                        <div class="twm-jobs-available"><h3 class="site-text-primary mt-2">IOT Gateways</h3></div>
                                      
                                        <a href=""><p>IoT Gateway is a solution for enabling IoT device communication, Normally IoT device -to-IoT device communications or IoT device to web communications. The gateway is a hardware device with compatible software that receives data from sensors and transmits data to the cloud . our solutions support Zigbee, WIFI , Cellular , RF , Bluetooth & LoraWan.</p></a>
                                    </div>                               
                                </div>
                            </div>
                            
                            <!-- COLUMNS 3 --> 
                            <div class="col-lg-4 col-md-5">
                                <div class="job-categories-block-2 m-b30">
                                    <div class="twm-media">
                                        <div><img src="{{ asset('images/servicesimg/iot3.png')}}" alt=""></div>

                                    </div>                                   
                                    <div class="twm-content">
                                        <div class="twm-jobs-available"><h3 class="site-text-primary mt-2">IoT Platform</h3></div>
                                      
                                        <a href=""><p>IoT platform is a multi-layer technology that enables installation , management, and automation of connected IoT devices .IoT platform connects your IoT hardware to cloud by using internet connectivity. We specialize in leading IOT platform providers like Google Cloud IoT, Cisco IoT Cloud Connect, Salesforce IoT Cloud, IBM Watson IoT, ThingWorx, Amazon AWS IoT Core.</p></a>
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
                                            <div class="site-text-orange">Why Choose Us</div>                                
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
                                <div class="wt-post-media m-t30">
                                    <a href=""><img src="{{ asset('images/servicesimg/iot_feature.jpg')}}" alt=""></a>
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
                                            Real-time Monitoring
                                        </a>
                                    </h4>
                                </div>
                               
                                <div class="wt-post-readmore ">
                                    <p class=" site-text-white">IoT devices enable real-time monitoring of various processes and operations, allowing for faster decision-making and greater efficiency.</p>
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
                                                IOT Sensor Technology
                                            </h4>
                                        </div>
                                        <div class="wt-post-text ">
                                            <p>
                                                IoT devices are equipped with sensors that collect real-time data and provide insights into various parameters such as temperature, humidity, and motion
                                            </p>
                                        </div>
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
                                                Security
                                            </h4>
                                        </div>
                                         <div class="wt-post-text ">
                                            <p>
                                                Built-in security features such as encryption, user authentication, and data validation to ensure that the devices and the data they transmit are secure.
                                            </p>
                                        </div>
                                        <!-- <div class="wt-post-readmore ">
                                            <a href="blog-single.html" class="site-button-link site-text-primary">Read More</a>
                                        </div>  -->

                                    </div>                                
                                </div>

                                <!--Block four-->
                               
                                


                                <div class="blog-post twm-blog-post-1-outer shadow-none  m-b30 owl-item">
                                    <div class="wt-post-info">
             
                                        <div class="wt-post-title ">
                                            <h4 class="site-tittle-primary">
                                                Improved Data Analysis
                                            </h4>
                                        </div>
                                         <div class="wt-post-text ">
                                            <p>
                                               IoT devices generate vast amounts of data that can be analyzed to provide insights into various operations and processes, allowing users to make more informed decisions.
                                            </p>
                                        </div> 
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
           <div>Top Companies</div>                                
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
      
   <!-- SUBSCRIBE SECTION START -->
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
                                <form class="cons-contact-form" method="POST" action="{{ route('contact.store') }}">
                                    @csrf
                                    <div class="row">

                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group mb-3">
                                                <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="Name">
                                                @error('name')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                             </div>
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group mb-3">
                                                <input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="Email">
                                                @error('email')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group mb-3">
                                                <input type="number" name="phone" class="form-control" value="{{ old('phone') }}" placeholder="Phone">
                                                @error('phone')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                <style>
                                                    input::-webkit-outer-spin-button,
                                                    input::-webkit-inner-spin-button {
                                                      display: none;
                                                    }
                                                    input[type=number] { -moz-appearance: textfield;}
                                                  </style>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group mb-3">
                                                <input type="text" name="subject" class="form-control" value="{{ old('subject') }}" placeholder="Subject">
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
                                            <button type="submit" class="site-button">Submit Now</button>
                                        </div>
                                        
                                    </div>
                                </form>
                            </div>
                            <div class="hpage-6-nw-form-corner"></div>
                        </div>
                   </div>
                </div>

            </div>
        </div>
       
    </div>
</div>
<!-- SUBSCRIBE SECTION END -->
 @endsection
