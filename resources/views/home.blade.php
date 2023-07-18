
@extends('layouts.app')
@section('content')
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


        <!-- CONTENT START -->
        <div class="page-content">

            <!--Banner Start-->
            <div class="twm-home-6-banner-section" style="margin-bottom: -5px">
                <div class="container">
                    <div class="row">
                        {{-- left section for mobile view  --}}
                        <div class="col-xl-6 col-lg-6 col-md-12 hide-in-desktop">
                            <div class="twm-bnr-left-section">

                                <div class="twm-bnr-title-small">
                                    <div class="bnr-title-bedge">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    
                                    <span class="site-text-primary">Discover. Engage. Succeed</span>
                                </div>
                                <h2>Fuel Your Bussiness
                                    With <span class="site-text-primary">Talent</span>
                                 </div>
                                </h2>
                                {{-- <div class="twm-bnr-search-bar">
                                    <form>
                                        <div class="row">
                                           
                                            <div class="form-group col-xl-4 col-lg-12 col-md-12">
                                                <label>Type</label>
                                                <select class="wt-search-bar-select selectpicker"  data-live-search="true" title="" id="j-All_Category" data-bv-field="size">
                                                    <option disabled selected value="">Select Category</option>
                                                    <option>All Category</option>
                                                    <option>Web Designer</option>
                                                    <option>Developer</option>
                                                    <option>Acountant</option>
                                                </select>
                                            </div>

                                            
                                            <div class="form-group col-xl-5 col-lg-12 col-md-12">
                                                <label>Location</label>
                                                <div class="twm-inputicon-box">
                                                    <input name="username" type="text" required class="form-control" placeholder="Search...">
                                                    <i class="twm-input-icon fas fa-map-marker-alt"></i>
                                                </div>
                                            </div>

                                           
                                            <div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-6">
                                                <button type="button" class="site-button">Find Job</button>
                                            </div>

                                        </div>
                                    </form>
                                </div>  --}}
                            </div>
                        
                        
                        <!--Left Section-->
                        <div class="col-xl-6 col-lg-6 col-md-12 hide-in-mobile">
                            <div class="twm-bnr-left-section">

                                <div class="twm-bnr-title-small">
                                    <div class="bnr-title-bedge">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    
                                    <span class="site-text-primary">Discover. Engage. Succeed</span>
                                </div>
                                <div class="twm-bnr-title-large">
                                   Fuel Your
                                    <div class="site-text-primary">Bussiness</div>
                                    With <span class="site-text-white">Talent</span>
                                 </div>
                                <div class="twm-bnr-discription">Transform Your Business In The Age Of Digital Innovation.
                                    
                                </div>
                                {{-- <span class="site-text-white">Talent</span> --}}
                                {{-- <div class="twm-bnr-title-light">Unleash Innovation and Growth</div> --}}

                                {{-- <div class="twm-bnr-search-bar">
                                    <form>
                                        <div class="row">
                                           
                                            <div class="form-group col-xl-4 col-lg-12 col-md-12">
                                                <label>Type</label>
                                                <select class="wt-search-bar-select selectpicker"  data-live-search="true" title="" id="j-All_Category" data-bv-field="size">
                                                    <option disabled selected value="">Select Category</option>
                                                    <option>All Category</option>
                                                    <option>Web Designer</option>
                                                    <option>Developer</option>
                                                    <option>Acountant</option>
                                                </select>
                                            </div>

                                            
                                            <div class="form-group col-xl-5 col-lg-12 col-md-12">
                                                <label>Location</label>
                                                <div class="twm-inputicon-box">
                                                    <input name="username" type="text" required class="form-control" placeholder="Search...">
                                                    <i class="twm-input-icon fas fa-map-marker-alt"></i>
                                                </div>
                                            </div>

                                           
                                            <div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-6">
                                                <button type="button" class="site-button">Find Job</button>
                                            </div>

                                        </div>
                                    </form>
                                </div>  --}}

                            
                            </div>
                        </div>

                        <!--right Section-->
                        <div class="col-xl-6 col-lg-6 col-md-12 twm-bnr-right-section hide-in-mobile">
                            <div class="twm-bnr-right-content">
                                <div class="bnr-media">
                                    <img src="{{asset('images/main-slider/slider1/r-img2.png')}}" alt="#">
                                </div>
                                <div class="bnr-bg-circle">
                                    <span></span>
                                    
                                </div>
                                <div class="bnr-bg-icons hide-in-mobile">
                                    <div class="icon-plus1 bounce"><i class="fa fa-plus"></i></div>
                                    <div class="icon-plus2 bounce2"><i class="fa fa-plus"></i></div>
                                    {{-- <div class="icon-plus3 bounce"><i class="fa fa-plus"></i></div> --}}
                                    {{-- <div class="icon-ring1 bounce2"></div> --}}
                                    <div class="icon-ring2 bounce"></div>
                                    <div class="icon-ring3 bounce2"></div>

                                    <div class="bnr-block-1 bounce hide-in-mobile">
                                        <div class="bnr-block-1-content">
                                            <div class="media"><img src="{{asset('images/home-6/bag.png')}}" alt=""></div>
                                            <h3 class="title">Innovation</h3>
                                        </div>
                                    </div>
                                    <div class="bnr-block-2 bounce2 hide-in-mobile">
                                        
                                        <div class="bnr-block-2-content">
                                            {{-- <div class="bnr-block-2-bag">
                                                <span><img src="images/home-6/bag.png" alt=""></span>
                                            </div> --}}
                                            <div class="bnr-block-2-content-top">
                                               <h3 class="title">Growth  &nbsp;</h3>
                                               <div class="media"><img src="{{asset('images/home-6/graph-icon.png')}}" alt=""></div>  
                                            </div>
                                            <div class="bnr-block-2-content-bottom"></div>
                                            
                                        </div>
                                    </div>
                                    <div class="bnr-block-3 bounce hide-in-mobile">
                                        <img src="{{asset('images/main-slider/slider1/icon-2.png')}}" alt="#">
                                    </div>
                                     

                                </div>
                                
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--Banner End-->

            {{-- banner start 2 --}}
            {{-- <div class="twm-home1-banner-section site-bg-gray bg-cover" style="background-image:url(images/main-slider/slider1/bg1.jpg)">
                <div class="row">
                    
                    <!--Left Section-->
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="twm-bnr-left-section">
                            <div class="twm-bnr-title-small">We Have <span class="site-text-primary">208,000+</span> Live Jobs</div>
                            <div class="twm-bnr-title-large">Find the <span class="site-text-primary">job</span> that fits your life</div>
                            <div class="twm-bnr-discription">Type your keyword, then click search to find your perfect job.</div>

                            <div class="twm-bnr-search-bar">
                                <form>
                                    <div class="row">
                                        <!--Title-->
                                        <div class="form-group col-xl-3 col-lg-6 col-md-6">
                                            <label>What</label>
                                            <div class="dropdown bootstrap-select wt-search-bar-select"><select class="wt-search-bar-select selectpicker" data-live-search="true" title="" id="j-Job_Title" data-bv-field="size">
                                                <option disabled="" selected="" value="">Select Category</option>
                                                <option selected="">Job Title</option>
                                                <option>Web Designer</option>
                                                <option>Developer</option>
                                                <option>Acountant</option>
                                            </select><button type="button" tabindex="-1" class="btn dropdown-toggle btn-light" data-bs-toggle="dropdown" role="combobox" aria-owns="bs-select-1" aria-haspopup="listbox" aria-expanded="false" title="Job Title" data-id="j-Job_Title"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Job Title</div></div> </div></button><div class="dropdown-menu "><div class="bs-searchbox"><input type="search" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-1" aria-autocomplete="list"></div><div class="inner show" role="listbox" id="bs-select-1" tabindex="-1"><ul class="dropdown-menu inner show" role="presentation"></ul></div></div></div>
                                        </div>

                                        <!--All Category-->
                                        <div class="form-group col-xl-3 col-lg-6 col-md-6">
                                            <label>Type</label>
                                            <div class="dropdown bootstrap-select wt-search-bar-select"><select class="wt-search-bar-select selectpicker" data-live-search="true" title="" id="j-All_Category" data-bv-field="size">
                                                <option disabled="" selected="" value="">Select Category</option>
                                                <option selected="">All Category</option>
                                                <option>Web Designer</option>
                                                <option>Developer</option>
                                                <option>Acountant</option>
                                            </select><button type="button" tabindex="-1" class="btn dropdown-toggle btn-light" data-bs-toggle="dropdown" role="combobox" aria-owns="bs-select-2" aria-haspopup="listbox" aria-expanded="false" title="All Category" data-id="j-All_Category"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">All Category</div></div> </div></button><div class="dropdown-menu "><div class="bs-searchbox"><input type="search" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-2" aria-autocomplete="list"></div><div class="inner show" role="listbox" id="bs-select-2" tabindex="-1"><ul class="dropdown-menu inner show" role="presentation"></ul></div></div></div>
                                        </div>

                                        <!--Location-->
                                        <div class="form-group col-xl-3 col-lg-6 col-md-6">
                                            <label>Location</label>
                                            <div class="twm-inputicon-box">
                                                <input name="username" type="text" required="" class="form-control" placeholder="Search...">
                                                <i class="twm-input-icon fas fa-map-marker-alt"></i>
                                            </div>
                                        </div>

                                        <!--Find job btn-->
                                        <div class="form-group col-xl-3 col-lg-6 col-md-6">
                                            <button type="button" class="site-button">Find Job</button>
                                        </div>

                                    </div>
                                </form>
                            </div>

                            <div class="twm-bnr-popular-search">
                                <span class="twm-title">Popular Searches:</span>
                                <a href="job-list.html">Developer</a> ,
                                <a href="job-list.html">Designer</a> ,
                                <a href="job-list.html">Architect</a> ,
                                <a href="job-list.html">Engineer</a> ...
                            </div>
                        </div>
                    </div>

                    <!--right Section-->
                    <div class="col-xl-6 col-lg-6 col-md-12 twm-bnr-right-section">
                        <div class="twm-bnr-right-content">

                            <div class="twm-img-bg-circle-area">
                                <div class="twm-img-bg-circle1 rotate-center"><span></span></div>
                                <div class="twm-img-bg-circle2 rotate-center-reverse"><span></span></div>
                                <div class="twm-img-bg-circle3"><span></span></div>
                            </div>

                            <div class="twm-bnr-right-carousel">
                                <div class="owl-carousel twm-h1-bnr-carousal owl-loaded">
                                    
                                    
                                <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1362px, 0px, 0px); transition: all 0s ease 0s; width: 4088px;"><div class="owl-item cloned" style="width: 681.25px;"><div class="item">
                                      <div class="slide-img">
                                        <img src="images/main-slider/slider1/r-img1.png" alt="#">
                                      </div>
                                    </div></div><div class="owl-item cloned" style="width: 681.25px;"><div class="item">
                                      <div class="slide-img">
                                        <div class="slide-img">
                                            <img src="images/main-slider/slider1/r-img2.png" alt="#">
                                          </div>
                                      </div>
                                    </div></div><div class="owl-item animated owl-animated-in fadeIn active" style="width: 681.25px;"><div class="item">
                                      <div class="slide-img">
                                        <img src="images/main-slider/slider1/r-img1.png" alt="#">
                                      </div>
                                    </div></div><div class="owl-item animated owl-animated-in fadeIn" style="width: 681.25px;"><div class="item">
                                      <div class="slide-img">
                                        <div class="slide-img">
                                            <img src="images/main-slider/slider1/r-img2.png" alt="#">
                                          </div>
                                      </div>
                                    </div></div><div class="owl-item cloned" style="width: 681.25px;"><div class="item">
                                      <div class="slide-img">
                                        <img src="images/main-slider/slider1/r-img1.png" alt="#">
                                      </div>
                                    </div></div><div class="owl-item animated owl-animated-in fadeIn cloned" style="width: 681.25px;"><div class="item">
                                      <div class="slide-img">
                                        <div class="slide-img">
                                            <img src="images/main-slider/slider1/r-img2.png" alt="#">
                                          </div>
                                      </div>
                                    </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>

                                <div class="twm-bnr-blocks-position-wrap">
                                    <!--icon-block-1-->
                                    <div class="twm-bnr-blocks twm-bnr-blocks-position-1">
                                        <div class="twm-icon">
                                            <img src="images/main-slider/slider1/icon-1.png" alt="">
                                        </div>
                                        <div class="twm-content">
                                            <div class="tw-count-number text-clr-sky">
                                                <span class="counter">12</span>K+
                                            </div>
                                            <p class="icon-content-info">Companies Jobs</p>
                                        </div>
                                    </div>

                                    <!--icon-block-2-->
                                    <div class="twm-bnr-blocks twm-bnr-blocks-position-2">
                                        <div class="twm-icon">
                                            <img src="images/main-slider/slider1/icon-2.png" alt="">
                                        </div>
                                        <div class="twm-content">
                                            <div class="tw-count-number text-clr-pink">
                                                <span class="counter">98</span> +
                                            </div>
                                            <p class="icon-content-info">Job For Countries </p>
                                        </div>
                                    </div>

                                    <!--icon-block-3-->
                                    <div class="twm-bnr-blocks-3 twm-bnr-blocks-position-3">
                                        <div class="twm-pics">
                                            <span><img src="images/main-slider/slider1/user/u-1.jpg" alt=""></span>
                                            <span><img src="images/main-slider/slider1/user/u-2.jpg" alt=""></span>
                                            <span><img src="images/main-slider/slider1/user/u-3.jpg" alt=""></span>
                                            <span><img src="images/main-slider/slider1/user/u-4.jpg" alt=""></span>
                                            <span><img src="images/main-slider/slider1/user/u-5.jpg" alt=""></span>
                                            <span><img src="images/main-slider/slider1/user/u-6.jpg" alt=""></span>
                                        </div>
                                        <div class="twm-content">
                                            <div class="tw-count-number text-clr-green">
                                                <span class="counter">3</span>K+
                                            </div>
                                            <p class="icon-content-info">Jobs Done</p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            

                            <!--Samll Ring Left-->
                            <div class="twm-small-ring-l slide-top-animation"></div>
                            <div class="twm-small-ring-2 slide-top-animation"></div>

                            

                        </div>
                    </div>

                </div>
                <div class="twm-gradient-text">
                    Jobs
                </div>
            </div> --}}
            {{-- banner end 2 --}}


            <!-- GET JOBS SECTION START -->
            <div class="section-full site-bg-white h-page6-getjobs-wrap">
                <div class="h-page6-client-slider-outer hide-in-mobile">
                    <div class="container">
                        <div class="h-page6-client-slider">
                            <div class="row">
                                <div class="col-xl-4 col-lg-12">
                                    <div class="h-page-6-client-slide-title">
                                        Trusted by top-tier<span class="site-text-primary"> clients globally</span>
                                    </div>
                                </div>

                                <div class="col-xl-8 col-lg-12">
                                    <div class="owl-carousel home-client-carousel6 owl-btn-vertical-center">
                                        
                                        <div class="item">
                                            <div class="ow-client-logo">
                                                <div class="client-logo client-logo-media">
                                                <a href=""><img src="{{asset('images/client-logo/alight.png')}}" alt=""></a></div>
                                            </div>
                                        </div>
                                        
                                        <div class="item">
                                            <div class="ow-client-logo">
                                                <div class="client-logo client-logo-media">
                                                <a href=""><img src="{{asset('images/client-logo/conduent.png')}}" alt=""></a></div>
                                            </div>
                                        </div>
                                        
                                        <div class="item">
                                            <div class="ow-client-logo">
                                                <div class="client-logo client-logo-media">
                                                <a href=""><img src="{{asset('images/client-logo/uzio.png')}}" alt=""></a></div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="ow-client-logo">
                                                <div class="client-logo client-logo-media">
                                                <a href=""><img src="{{asset('images/client-logo/mastercard.png')}}" alt=""></a></div>
                                            </div>
                                        </div>
                                        
                                        <div class="item">
                                            <div class="ow-client-logo">
                                                <div class="client-logo client-logo-media">
                                                <a href=""><img src="{{asset('images/client-logo/Ebix.png')}}" alt=""></a></div>
                                            </div>
                                        </div>
                                        
                                        <div class="item">
                                            <div class="ow-client-logo">
                                                <div class="client-logo client-logo-media">
                                                <a href=""><img src="{{asset('images/client-logo/dtcc.png')}}" alt=""></a></div>
                                            </div>
                                        </div>
                                        
                                        <div class="item">
                                            <div class="ow-client-logo">
                                                <div class="client-logo client-logo-media">
                                                <a href=""><img src="{{asset('images/client-logo/scholastic.png')}}" alt=""></a></div>
                                            </div>
                                        </div>
                                        
                                        <div class="item">
                                            <div class="ow-client-logo">
                                                <div class="client-logo client-logo-media">
                                                <a href=""><img src="{{asset('images/client-logo/synchrony.png')}}" alt=""></a></div>
                                            </div>
                                        </div>
                                        
                                        <div class="item">
                                            <div class="ow-client-logo">
                                                <div class="client-logo client-logo-media">
                                                <a href=""><img src="{{asset('images/client-logo/uzio.png')}}" alt=""></a></div>
                                            </div>
                                        </div>
                                        
                                      
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="h-page-6-getjobs-wrap">
                        <div class="row">
                            
                            <div class="col-lg-7 col-md-12">
                                <div class="h-page-6-getjobs-left">

                                <div class="twm-media">
                                    <div  class="hide-in-desktop">
                                    <img src="{{asset('images/testimonials/pic-4.png')}}" alt="#">
                                </div>
                                <div  class="hide-in-mobile"> <img src="{{asset('images/home-6/get-job-pic.png')}}" alt="#"></div>
                                   
                                    <div class="twm-media-bg-circle"></div>
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
                                        <h2 class="wt-title"><span class="site-text-primary">Technology Management Solutions<span> 
                                            
                                           
                                        </h2>
                                        <p>Technology Management Solutions (TMS) is a leading digital product engineering company specializing in designing and building innovative solutions for modern digital experiences. With a focus on collaboration and expertise, we support our clients throughout the entire product development lifecycle, from conception to commercialization.

                                        </p>
                                        <p>As a trusted partner, we provide a comprehensive range of technical and non-technical expertise to accelerate the product development process. Our strategic engagement models are tailored to shorten the development life cycle, ensuring faster time-to-market and greater success.Choose TMS as your trusted digital product engineering partner and embark on a journey of innovation and success.
                                        </p>
                                    </div>
                                    <!-- TITLE END-->
                                    <div class="twm-read-more">
                                        <a href="{{ route ('about')}}" class="site-button">Know More About Us</a>
                                    </div>               
                                    
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                
            </div>   
            <!-- GET JOBS SECTION SECTION END -->



 
     <!-- HOW IT WORK SECTION START1 -->
 <div class="section-full p-t120 p-b90 twm-how-it-work-area" style="background-image:  url('{{ asset('images/home-7/hiw-bg.jpg') }}');">
                        
    <div class="container">

        <!-- TITLE START-->
        <div class="section-head center wt-small-separator-outer  content-white">
            <div class="wt-small-separator">
               <div>Working Process to Boost Your Business</div>                                
            </div>
            <h2 class="wt-title">Follow Our Steps </h2>
            
        </div>                  
       
        <!-- TITLE END-->

        <div class="twm-how-it-work-section3">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="twm-w-process-steps-h-page-7">
                        <div class="twm-w-pro-top">
                            <div class="twm-media">
                                <span><img src="{{asset('images/work-process/icon1.png')}}" alt="icon1"></span>
                            </div>
                            <span class="twm-large-number  text-clr-sky">01</span>
                        </div>
                        <h2 class="twm-title">Strategy</h2>
                        <p>We analyze your business requirements, goals, and challenges to develop a tailored strategy that perfectly aligns with your unique needs, unlocking the path to your success.</p>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="twm-w-process-steps-h-page-7">
                        <div class="twm-w-pro-top">
                            <div class="twm-media">
                                <span><img src="{{asset('images/work-process/icon2.png')}}" alt="icon1"></span>
                            </div>
                            <span class="twm-large-number text-clr-pink">02</span>
                        </div>
                        <h2 class="twm-title"> Design</h2>
                        <p> We leverage industry expertise and innovative thinking to design compelling business proposals that showcase the unique value and benefits we bring to your organization.</p>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="twm-w-process-steps-h-page-7">
                        <div class="twm-w-pro-top">
                            <div class="twm-media">
                                <span><img src="{{asset('images/work-process/icon3.png')}}" alt="icon1"></span>
                            </div>
                            <span class="twm-large-number  text-clr-green">03</span>
                        </div>
                        <h2 class="twm-title">Collaboration</h2>
                        <p>Our collaborative partnerships prioritize continuous support and open communication, ensuring seamless implementation that fuels your business growth and success.</p>
                    </div>
                </div>
            <h3 class=" site-text-white mt-5"> Our proven results and tailored solutions make us the ideal strategic partner.Choose <span class="site-text-primary">TMS </span> for business growth. <a href="contact" class="site-text-orange">Contact us</a>  now to unlock success.</h3>

            </div>
        </div>                  
    </div>
</div>   
<!-- HOW IT WORK SECTION END1 -->

  <!-- Jobs Category START -->
  <div class="section-full p-t90 p-b90 site-bg-white job-categories-home-5-wrap twm-bdr-bottom-1">
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

    <div class="section-content twm-jobs-grid-h5-section-outer ">
        <div class="twm-jobs-grid-h5-section overlay-wraper"
            style="background-image: url{{asset('images/home-5/cate-bg.jpg')}};">
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

</div>
<!-- Jobs Category end-->
   


            <!-- TESTIMONIAL SECTION START -->
            <div class="section-full p-t120 p-b90 site-bg-white twm-testimonial-v-area">
                
                <div class="container">

                    <div class="section-content"> 
                        <div class="twm-testimonial-v-section">
                            <div class="row">

                                <div class="col-xl-5 col-lg-12 col-md-12">
                                    <div class="twm-explore-content-outer2">
                                        <div class="twm-explore-top-section">
                                            
                                            <!-- TITLE START-->
                                            <div class="section-head left wt-small-separator-outer">
                                                <div class="wt-small-separator site-text-primary">
                                                    <div>Testimonials </div>                                
                                                </div>
                                                <h2> Discover success <span class="site-text-orange">stories</span> from our valued partners.</h2>
                                                <h4> Experience our exceptional work culture.</h4>
                                               
                                                
                                            </div>
                                            <!-- TITLE END-->
                                            {{-- <div class="twm-read-more">
                                                <a href="{{ route ('about')}}" class="site-button">Show All Quotes</a>
                                            </div> --}}
                                        </div>

                                        
                                    </div>
                                </div>

                                <div class="col-xl-7 col-lg-12 col-md-12">
                                    <div class="v-testimonial-wrap">
                                        <div class="v-testi-dotted-pic">
                                            <img src="{{asset('images/home-6/testimonial/dotted-block.png')}}" alt="#">
                                        </div>
                                        <!-- Swiper -->
                                        <div class="swiper-container v-testimonial-slider">
                                            <div class="swiper-wrapper">
                                                <!-- block 1 -->
                                                <!-- -->

                                                <div class="swiper-slide">
                                                    <div class="testimonials-v">
                                                        <div class="twm-testi-media">
                                                            <img src="{{asset('images/home-6/testimonial/pic1.jpg')}}" alt="#">
                                                        </div>
                                                        <div class="testimonial-v-content">
                                                            <div class="t-testimonial-top">
                                                                <div class="t-quote"><i class="fa fa-quote-left"></i></div>
                                                                <div class="t-rating">
                                                                    <span><i class="fa fa-star"></i></span>
                                                                    <span><i class="fa fa-star"></i></span>
                                                                    <span><i class="fa fa-star"></i></span>
                                                                    <span><i class="fa fa-star"></i></span>
                                                                    <span><i class="fa fa-star"></i></span>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="t-discription">"TMS exceeded our expectations with their innovative digital solutions. Their expertise and dedication have significantly transformed our business." 
                                                            </div>

                                                            <div class="twm-testi-detail">
                                                                <div class="twm-testi-name"> Jia Davis</div>
                                                                <div class="twm-testi-position">TMS</div>
                                                            </div>
                                                        </div>   
                                                    </div>
                                                </div>
                                                <!--block 2-->
                                                <div class="swiper-slide">
                                                    <div class="testimonials-v">
                                                        <div class="twm-testi-media">
                                                            <img src="{{asset('images/home-6/testimonial/pic2.jpg')}}" alt="#">
                                                        </div>
                                                        <div class="testimonial-v-content">
                                                            <div class="t-testimonial-top">
                                                                <div class="t-quote"><i class="fa fa-quote-left"></i></div>
                                                                <div class="t-rating">
                                                                    <span><i class="fa fa-star"></i></span>
                                                                    <span><i class="fa fa-star"></i></span>
                                                                    <span><i class="fa fa-star"></i></span>
                                                                    <span><i class="fa fa-star"></i></span>
                                                                    <span><i class="fa fa-star"></i></span>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="t-discription">"TMS has revolutionized our digital experience, delivering a user-friendly solution that has transformed our business. Highly recommend their expertise."
                                                            </div>
        
                                                            <div class="twm-testi-detail">
                                                                <div class="twm-testi-name">Jennifer Roberts</div>
                                                                <div class="twm-testi-position"> Designer</div>
                                                            </div>
                                                        </div>   
                                                    </div>
                                                </div>
                                                <!--block 3-->
                                                <div class="swiper-slide">
                                                    <div class="testimonials-v">
                                                        <div class="twm-testi-media">
                                                            <img src="{{asset('images/home-6/testimonial/pic3.jpg')}}" alt="#">
                                                        </div>
                                                        <div class="testimonial-v-content">
                                                            <div class="t-testimonial-top">
                                                                <div class="t-quote"><i class="fa fa-quote-left"></i></div>
                                                                <div class="t-rating">
                                                                    <span><i class="fa fa-star"></i></span>
                                                                    <span><i class="fa fa-star"></i></span>
                                                                    <span><i class="fa fa-star"></i></span>
                                                                    <span><i class="fa fa-star"></i></span>
                                                                    <span><i class="fa fa-star"></i></span>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="t-discription">"Working with TMS has been a game-changer for our company. Their innovative approach and technical expertise have exceeded our expectations."
                                                            </div>
        
                                                            <div class="twm-testi-detail">
                                                                <div class="twm-testi-name">Mark Thompson</div>
                                                                <div class="twm-testi-position">UI/UX Designer</div>
                                                            </div>
                                                        </div>   
                                                    </div>
                                                </div>
                                                <!--block 4-->
                                                <div class="swiper-slide">
                                                    <div class="testimonials-v">
                                                        <div class="twm-testi-media">
                                                            <img src="{{asset('images/home-6/testimonial/pic1.jpg')}}" alt="#">
                                                        </div>
                                                        <div class="testimonial-v-content">
                                                            <div class="t-testimonial-top">
                                                                <div class="t-quote"><i class="fa fa-quote-left"></i></div>
                                                                <div class="t-rating">
                                                                    <span><i class="fa fa-star"></i></span>
                                                                    <span><i class="fa fa-star"></i></span>
                                                                    <span><i class="fa fa-star"></i></span>
                                                                    <span><i class="fa fa-star"></i></span>
                                                                    <span><i class="fa fa-star"></i></span>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="t-discription">"TMS is a reliable and trusted partner in our digital journey. Their professionalism and commitment to our success are commendable."
                                                            </div>

                                                            <div class="twm-testi-detail">
                                                                <div class="twm-testi-name">Lisa Johnson</div>
                                                              
                                                            </div>
                                                        </div>   
                                                    </div>
                                                </div>
                                                
                                                
                                            </div>
                                            <!-- Add Pagination -->
                                            <div class="swiper-pagination"></div>
                                        </div>
                                    </div>
                                    
                                </div>

                            </div>
                        </div>
                    </div>                              
                </div>
                
            </div>
            <!-- TESTIMONIAL SECTION END -->
            

    
  <!-- TOP COMPANIES START -->
  <div class="section-full p-t120 p-b0 site-bg-white twm-companies-wrap twm-companies-wrap-h-page-7 pos-relative">
    <div class="twm-companies-wrap-bg-block"></div> 
   <!-- TITLE START-->
   <div class="section-head center wt-small-separator-outer content-white">
       <div class="wt-small-separator site-text-primary">
          <div>Global Companies</div>                                
       </div>
       <h2 class="wt-title">Top-tier enterprise partners</h2>
   </div>                  
   <!-- TITLE END-->
<!-- companylogos start -->
   <div class="container ">
       <div class="twm-companies-h-page-7">
           <div class="section-content">
               <div class="owl-carousel home-client-carousel3 owl-btn-vertical-center">
               
                   <div class="item">
                       <div class="ow-client-logo">
                           <div class="client-logo client-logo-media">
                           <a href=""><img src="{{asset('images/client-logo2/w1.png')}}" alt=""></a></div>
                       </div>
                   </div>
                   
                   <div class="item">
                       <div class="ow-client-logo">
                           <div class="client-logo client-logo-media">
                           <a href=""><img src="{{asset('images/client-logo2/w2.png')}}" alt=""></a></div>
                       </div>
                   </div>
                   
                   <div class="item">
                       <div class="ow-client-logo">
                           <div class="client-logo client-logo-media">
                           <a href=""><img src="{{('assetimages/client-logo2/w3.png')}}" alt=""></a></div>
                       </div>
                   </div>
                   
                   <div class="item">
                       <div class="ow-client-logo">
                           <div class="client-logo client-logo-media">
                           <a href=""><img src="{{asset('images/client-logo2/w4.png')}}" alt=""></a></div>
                       </div>
                   </div>
                   
                   <div class="item">
                       <div class="ow-client-logo">
                           <div class="client-logo client-logo-media">
                           <a href=""><img src="{{asset('images/client-logo2/w5.png')}}" alt=""></a></div>
                       </div>
                   </div>
                   
                   <div class="item">
                       <div class="ow-client-logo">
                           <div class="client-logo client-logo-media">
                           <a href=""><img src="{{asset('images/client-logo2/w6.png')}}" alt=""></a></div>
                       </div>
                   </div>
                   
                   <div class="item">
                       <div class="ow-client-logo">
                           <div class="client-logo client-logo-media">
                           <a href=""><img src="{{asset('images/client-logo2/w1.png')}}" alt=""></a></div>
                       </div>
                   </div>
                   
                   <div class="item">
                       <div class="ow-client-logo">
                           <div class="client-logo client-logo-media">
                           <a href=""><img src="{{asset('images/client-logo2/w2.png')}}" alt=""></a></div>
                       </div>
                   </div>
                   
                   <div class="item">
                       <div class="ow-client-logo">
                           <div class="client-logo client-logo-media">
                           <a href=""><img src="{{asset('images/client-logo2/w3.png')}}" alt=""></a></div>
                       </div>
                   </div>
                   
                   <div class="item">
                       <div class="ow-client-logo">
                           <div class="client-logo client-logo-media">
                           <a href=""><img src="{{asset('images/client-logo2/w5.png')}}" alt=""></a></div>
                       </div>
                   </div>
                   
               </div>
           </div>
       </div>
   </div>

</div>
<!-- company logos end -->
<!-- TOP COMPANIES END -->
            <!-- SUBSCRIBE SECTION START -->
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


        </div>
        <!-- CONTENT END -->

        @endsection