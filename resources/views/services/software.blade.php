@extends('layouts.app')
@section('content')
<style>
   
    /* Create three equal columns that floats next to each other */
    .column {
      
      display: none; /* Hide columns by default */
    }
    
    /* Clear floats after rows */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }
    
    /* Content */
    .content {
      background-color: white;
      padding: 10px;
    }
    
    /* The "show" class is added to the filtered elements */
    .show {
      display: block;
    }
    /* Style the buttons */
    .btn {
              border: none;
              outline: none;
              padding: 12px 16px;
              background-color: rgb(245, 241, 241);
             
              cursor: pointer;
              margin: 10px;
              border-radius: 10px;
          }
          
          /* Add a grey background color on mouse-over */
          .btn:hover {
              background-color: #ff9137;
              color: white;
          }
          
          /* Add a dark background color to the active button */
          .btn.active {
              background-color: #fd7e14;
              color: white;
          }
  
</style>




    <!-- INNER PAGE BANNER -->
  {{-- <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url('{{ asset('images/banner/1.jpg') }}');">
    <div class="overlay-main site-bg-white opacity-01"></div>
    <div class="container">
        <div class="wt-bnr-inr-entry">
            
            <div>
                <ul class="wt-breadcrumb breadcrumb-style-2" style="margin-bottom: 50px;">
                    <li><a href="index.html">Home</a></li>
                    <li>Services</li><li>Software Development</li>
                </ul>
            </div>
            <div class="banner-title-outer">
                <h2 class="banner-title-name site-text-primary">
                    Software Development Services
            </h2>
                
            </div>
         
        </div>
    </div>
</div> --}}
<!-- INNER PAGE BANNER END -->
<div class="container">
    <div class="h-page-6-getjobs-wrap">
        <div class="row">

            <div class="col-lg-5 col-md-12 hide-in-mobile">
                <div class="h-page-6-getjobs-left">

                    <div class="">     
                        <div class=" opacity-09"><img src="{{ asset('images/servicesimg/software.gif')}}" alt=""></div>
                       
                    </div>


                </div>
            </div>

            <div class="col-lg-7 col-md-12">
                <div class="h-page-6-getjobs-right">
                    <!-- TITLE START-->
                    <div class="section-head left wt-small-separator-outer">
                        <div class="wt-small-separator site-text-primary">
                           
                        </div>
                        <h2 class="wt-title"><span class="site-text-primary" style="text-align: center;">Software Development Services</span></h2>
                                    <div style="font-size: 17px;">   <p class="lead">
                                        At <span class="site-text-orange h5">TMS</span>, we specialize in delivering high-quality software solutions tailored to meet the unique needs of businesses across various industries. Our team of experienced developers and designers combine their expertise with the latest technologies to create robust, scalable, and user-friendly software applications. With a focus on innovation and efficiency, we strive to empower businesses with cutting-edge software solutions that drive growth and streamline operations.
                                    </p>
                                  
                                   
                                </div>

                                <div class="h5 site-text-primary">"Building innovative solutions for your business, empowering your digital success."</div> 
                        

                    </div>
                    
                    <!-- TITLE END-->
                    <!-- <div class="twm-read-more">
                    <a href="about-1.html" class="site-button">Know More About Us</a>
                </div>                -->

                </div>
            </div>
           
        </div>
    </div>
    {{-- <div class="section-full p-t0 p-b0 site-bg-white twm-counter-page-5-wrap">
                       
        <div class="container">
            <div class="twm-company-approch5-outer">
                <div class="twm-company-approch5 bg-dots-darker" style="background-image: url('http://127.0.0.1:8000/images/background/bg-1.jpg');">
                    <div class="row">

                        <!--block 1-->
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="counter-outer-two">
                                <div class="icon-content">
                                    <div class="tw-count-number site-text-white">
                                        <span class="counter">25</span>k+</div>
                                    <p class="icon-content-info">Completed Cases</p>
                                </div>
                            </div>
                        </div>

                        <!--block 2-->
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="counter-outer-two">
                                <div class="icon-content">
                                    <div class="tw-count-number site-text-white">
                                        <span class="counter">17</span>+</div>
                                    <p class="icon-content-info">Our Office</p>
                                </div>
                            </div>
                        </div>

                        <!--block 3-->
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="counter-outer-two">
                                <div class="icon-content">
                                    <div class="tw-count-number site-text-white">
                                        <span class="counter">86</span>+</div>
                                    <p class="icon-content-info">Skilled People</p>
                                </div>
                            </div>
                        </div>

                        <!--block 4-->
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="counter-outer-two">
                                <div class="icon-content">
                                    <div class="tw-count-number site-text-white">
                                        <span class="counter">28</span>+</div>
                                    <p class="icon-content-info">Happy Client</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</div>
{{-- all jobs tab portfolio start --}}

<!-- Portfolio Gallery Grid -->
<div class="row">

 <div class="section-full p-t10 p-b150 site-bg-white job-categories-home-5-wrap twm-bdr-bottom-1">
    <div class="container">
       
        <!-- TITLE START-->
        {{-- <div class="section-head wt-small-separator-outer">
            <div class="wt-small-separator  ">
                                             
            </div>
         
            <p class="lead">
                At <span class="site-text-orange h5">TMS</span>, we specialize in delivering high-quality software solutions tailored to meet the unique needs of businesses across various industries. Our team of experienced developers and designers combine their expertise with the latest technologies to create robust, scalable, and user-friendly software applications. With a focus on innovation and efficiency, we strive to empower businesses with cutting-edge software solutions that drive growth and streamline operations.
            </p>
            <div class="h5 site-text-primary">"Building innovative solutions for your business, empowering your digital success."</div> 
        </div>                   --}}
        <!-- TITLE END-->
        <div id="myBtnContainer" class=" m-lr100" >
            <button class="btn active" onclick="filterSelection('all')">Show all</button>
            <button class="btn" onclick="filterSelection('e-commerce')">E-commerce Website</button>
            <button class="btn" onclick="filterSelection('business')">Business Website</button>
            <button class="btn" onclick="filterSelection('blogging')">Blogging Site</button>
            <button class="btn" onclick="filterSelection('landing')">Landing Page</button>
            <button class="btn" onclick="filterSelection('automotive')">Automotive Software</button>
            <button class="btn" onclick="filterSelection('hrm')">HRM</button>
            <button class="btn" onclick="filterSelection('lms')">LMS</button>
            <button class="btn" onclick="filterSelection('erp')">ERP</button>
            <button class="btn" onclick="filterSelection('crm')">CRM </button> 
           
            <button class="btn" onclick="filterSelection('analytics')">Analytics and Tracking Tools</button>
          
        </div>

    </div>

    <div class="section-content twm-jobs-grid-h5-section-outer p-t20">
        <div class=" overlay-wraper" >
            <div class="overlay-main site-bg-light opacity-05"></div>
            
            <div class="swiper-container category-5-slider swiper-initialized swiper-horizontal swiper-pointer-events swiper-grid">
                <div class="swiper-wrapper" id="swiper-wrapper-e5d893ca32b1134a" aria-live="polite" style="width: 3096px;">

                  <!--1-->  
                  <div class="swiper-slide column all" onclick="filterSelection('e-commerce')" role="group" aria-label="1 / 24" style="width: 228px; margin-right: 30px;">
                    <div class="job-categories-block-2 ">
                        <div class="twm-media ">
                           
                            <div><img src="{{ asset('images/servicesimg/online-shop.png')}}" alt=""></div>
                        </div>                                   
                        <div class="twm-content">
                            
                            <a class="h5">E-Commerce Website</a>
                        </div>                               
                    </div>
                  </div>

                  <!--2-->  
                  <div class="swiper-slide column all" onclick="filterSelection('business')" role="group" aria-label="2 / 24" style="width: 228px; margin-right: 30px;">
                    <div class="job-categories-block-2 ">
                        <div class="twm-media "> <div><img src="{{ asset('images/servicesimg/business-web.png')}}" alt=""></div>
                        </div>                                   
                        <div class="twm-content">
                            
                            <a class="h5">Business Website</a>
                        </div>                               
                    </div>
                  </div>

                  <!--3-->  
                  <div class="swiper-slide column all" onclick="filterSelection('blogging')" role="group" aria-label="3 / 24" style="width: 228px; margin-right: 30px;">
                    <div class="job-categories-block-2 ">
                        <div class="twm-media ">
                           <div><img src="{{ asset('images/servicesimg/blogging.png')}}" alt=""></div>
                        </div>                                   
                        <div class="twm-content">
                            
                            <a class="h5">Blogging Website</a>
                        </div>                               
                    </div>
                  </div>

                  <!--4-->  
                  <div class="swiper-slide column all" onclick="filterSelection('landing')" role="group" aria-label="4 / 24" style="width: 228px; margin-right: 30px;">
                    <div class="job-categories-block-2 ">
                        <div class="twm-media ">
                           <div><img src="{{ asset('images/servicesimg/landing-page.png')}}" alt=""></div>
                        </div>                                   
                        <div class="twm-content">
                            
                            <a class="h5">Landing Page <br>Website</a>
                        </div>                               
                    </div>
                  </div>

                  <!--5-->  
                  <div class="swiper-slide column all" onclick="filterSelection('lms')" role="group" aria-label="5 / 24" style="width: 228px; margin-right: 30px;">
                    <div class="job-categories-block-2 ">
                        <div class="twm-media ">
                           <div><img src="{{ asset('images/servicesimg/learning.png')}}" alt=""></div>
                        </div>                                   
                        <div class="twm-content">
                            
                            <a class="h5">LMS <br>Software</a>
                        </div>                               
                    </div>
                  </div>

                  <!--6-->  
                  <div class="swiper-slide column all" onclick="filterSelection('erp')" role="group" aria-label="6 / 24" style="width: 228px; margin-right: 30px;">
                    <div class="job-categories-block-2 ">
                        <div class="twm-media ">
                           <div><img src="{{ asset('images/servicesimg/erp.png')}}" alt=""></div>
                        </div>                                   
                        <div class="twm-content">
                            
                            <a class="h5">ERP <br>Software</a>
                        </div>                               
                    </div>
                  </div>

                  <!--7-->  
                  <div class="swiper-slide column all" onclick="filterSelection('automotive')" role="group" aria-label="7 / 24" style="width: 228px; margin-right: 30px;">
                    <div class="job-categories-block-2 ">
                        <div class="twm-media ">
                           <div><img src="{{ asset('images/servicesimg/automated.png')}}" alt=""></div>
                        </div>                                   
                        <div class="twm-content">
                            
                            <a class="h5">Automotive <br>Software</a>
                        </div>                               
                    </div>
                  </div>

                  <!--8-->  
                  <div class="swiper-slide column all" onclick="filterSelection('crm')" role="group" aria-label="8 / 24" style="width: 228px; margin-right: 30px;">
                    <div class="job-categories-block-2 ">
                        <div class="twm-media ">
                           <div><img src="{{ asset('images/servicesimg/crm.png')}}" alt=""></div>
                        </div>                                   
                        <div class="twm-content">
                            
                            <a class="h5">CRM <br>Software</a>
                        </div>                               
                    </div>
                  </div>

                  <!--9 HRM-->  
                  <div class="swiper-slide column all"  onclick="filterSelection('hrm')" role="group" aria-label="9 / 24" style="width: 228px; margin-right: 30px;">
                    <div class="job-categories-block-2 ">
                        <div class="twm-media ">
                           <div><img src="{{ asset('images/servicesimg/hrm.png')}}" alt=""></div>
                        </div>                                   
                        <div class="twm-content">
                            
                            <a class="h5">HRM <br>Software</a>
                        </div>                               
                    </div>
                  </div>

                  <!--10-->  
                  <div class="swiper-slide column all" onclick="filterSelection('analytics')" role="group" aria-label="10 / 24" style="width: 228px; margin-right: 30px;">
                    <div class="job-categories-block-2 ">
                        <div class="twm-media ">
                           <div><img src="{{ asset('images/servicesimg/analytics.png')}}" alt=""></div>
                        </div>                                   
                        <div class="twm-content">
                            
                            <a class="h5">Analytics and Tracking Tools</a>
                        </div>                               
                    </div>
                  </div>

                 

                </div>
               
  
              <div class="column e-commerce">
                <div class="content"> 
                    <div class="job-categories-block-2 m-b30 ">
                     
                        {{-- <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 ">
                                <img src="{{ asset('images/servicesimg/automated.png')}}" alt="">
                    
                              </span>
                            </div>
                            <div class="flex-grow-1">
                              <h4 class="mb-0">Playback Flexibility</h4>
                            </div>
                        </div> --}}
                        <div class="twm-content">
                            
                            <div class="blog-post-single-outer">
                                <div class="blog-post-single ">                                    

                                    <div class="wt-post-info">
                                        <div class="wt-post-title ">
                                         <a>
                                            <div class="post-title"><img src="{{ asset('images/servicesimg/online-shop.png')}}" alt="icon-img" class="m-2">E-commerce Website Development</div>
                                        </a>
                                        </div>
                                     
                                        <div class="wt-post-discription">
                                            <div class="row bg-white container  pt-lg-3 pb-lg-3 ">
                                                <div class="col-lg-4">
                                                   
                                                    <div class="twm-ep-detail-tags">
                                                        <button class="de-info twm-bg-green"><i class="fa fa-check"></i>  Customized Design</button>
                                                        <button class="de-info twm-bg-green"><i class="fa fa-check"></i>  Product Catalog Management</button>
                                                        <button class="de-info twm-bg-green"><i class="fa fa-check"></i>  Secure Payment Integration</button>
                                                        <button class="de-info twm-bg-green"><i class="fa fa-check"></i>  Order and Inventory Management</button>
                                                        <button class="de-info twm-bg-green"><i class="fa fa-check"></i> Marketing and Conversion Optimization</button>
                                                        <button class="de-info twm-bg-green"><i class="fa fa-check"></i>  Analytics and Reporting</button>
                                                    </div> 
                                                </div>
                                                <div class="col-lg-8">
                                                    <p class="text text-start site-text-black">
                                                        
                                                        At <span class="site-text-orange h5">TMS</span>, we specialize in creating tailored e-commerce websites that meet the unique needs of businesses. Our expert team leverages industry-leading platforms, including <span class="site-text-green h6">Magento, Shopify, WooCommerce, BigCommerce</span> and custom-built solutions, to develop visually stunning online stores. With a focus on responsive design and user experience, we ensure seamless functionality across all devices, maximizing customer engagement and conversions.We prioritize secure payment integration, partnering with trusted gateways like PayPal and Stripe to ensure safe and convenient transactions for your customers. Our solutions streamline order processing, fulfillment, and inventory management, allowing you to track orders, manage stock levels, and generate invoices effortlessly.
                                                    </p>

                                                   
                                                </div>
                                                
                                            </div>
                                            
                                           
                                        </div> 
                                           {{-- contact here --}}
                                           <div class="row mt-3">
                                            <div class="col-lg-10 text-start">
                                               
                                                <a href="contact" class="pt-2 ">
                                                    <h5> Unlock your business's online potential with our professional e-commerce website development services.Contact us today to discuss your requirements and establish a robust online presence for your business.</h5></a> 
                                            </div>
                                            <div class="col-lg-2 ">
                                               
                                                <div class="twm-read-more">
                                                    <a href="contact" class="site-button button-lg">Contact Us</a>
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
             {{-- ecomm end --}}
             <div class="column business">
                <div class="content"> 
                    <div class="job-categories-block-2 m-b30 ">
                     
                        {{-- <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 ">
                                <img src="{{ asset('images/servicesimg/automated.png')}}" alt="">
                    
                              </span>
                            </div>
                            <div class="flex-grow-1">
                              <h4 class="mb-0">Playback Flexibility</h4>
                            </div>
                        </div> --}}
                        <div class="twm-content">
                            
                            <div class="blog-post-single-outer">
                                <div class="blog-post-single ">                                    

                                    <div class="wt-post-info">
                                        <div class="wt-post-title ">
                                         <a>
                                            <div class="post-title"><img src="{{ asset('images/servicesimg/business-web.png')}}" alt="icon-img" class="m-2">Business Website</div>
                                        </a>
                                        </div>
                                     
                                        <div class="wt-post-discription">
                                            <div class="row bg-white container  pt-lg-3 pb-lg-3 ">
                                                <div class="col-lg-4">
                                                   
                                                    <div class="twm-ep-detail-tags">
                                                        <button class="de-info twm-bg-green"><i class="fa fa-check"></i>  Customized Design</button><button class="de-info twm-bg-green"><i class="fa fa-check"></i> Integration of interactive elements</button>
                                                        <button class="de-info twm-bg-green"><i class="fa fa-check"></i>  Effective branding</button>
                                                        <button class="de-info twm-bg-green"><i class="fa fa-check"></i>  Secure Payment Integration</button>
                                                        <button class="de-info twm-bg-green"><i class="fa fa-check"></i>  Seamless navigation</button>
                                                        
                                                        <button class="de-info twm-bg-green"><i class="fa fa-check"></i>  Optimized for search engines (SEO)</button>
                                                    </div> 
                                                </div>
                                                <div class="col-lg-8">
                                                    <p class="text text-start site-text-black">
                                                        
                                                        At <span class="site-text-orange h5">TMS</span>, we specialize in creating professional business websites that effectively represent your brand and drive online success. Our expert team understands the unique requirements of businesses across industries and crafts customized websites to meet your specific goals. From visually appealing designs to seamless user experiences, we ensure your website captivates visitors and encourages engagement. With a focus on responsive design, your website will adapt perfectly to any device, providing a consistent experience for your audience. Our business websites are equipped with essential features such as intuitive navigation, clear messaging, and compelling calls-to-action. Additionally, we optimize your website for search engines, ensuring maximum visibility and driving organic traffic. Partner with us to establish a robust online presence that sets your business apart.
                                                    </p>

                                                   
                                                </div>
                                                
                                            </div>
                                            
                                           
                                        </div> 
                                        {{-- contact here --}}
                                        <div class="row mt-3">
                                         <div class="col-lg-10 text-start">
                                            
                                             <a href="contact" class="pt-2 ">
                                                 <h5> Unlock your business's online potential with our professional e-commerce website development services.Contact us today to discuss your requirements and establish a robust online presence for your business.</h5></a> 
                                         </div>
                                         <div class="col-lg-2 ">
                                            
                                             <div class="twm-read-more">
                                                 <a href="contact" class="site-button button-lg">Contact Us</a>
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
             {{-- business end --}}
             <div class="column blogging">
                <div class="content"> 
                    <div class="job-categories-block-2 m-b30 ">
                     
                        {{-- <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 ">
                                <img src="{{ asset('images/servicesimg/automated.png')}}" alt="">
                    
                              </span>
                            </div>
                            <div class="flex-grow-1">
                              <h4 class="mb-0">Playback Flexibility</h4>
                            </div>
                        </div> --}}
                        <div class="twm-content">
                            
                            <div class="blog-post-single-outer">
                                <div class="blog-post-single ">                                    

                                    <div class="wt-post-info">
                                        <div class="wt-post-title ">
                                         <a>
                                            <div class="post-title"><img src="{{ asset('images/servicesimg/blogging.png')}}" alt="icon-img" class="m-2">Blogging Website Development</div>
                                        </a>
                                        </div>
                                     
                                        <div class="wt-post-discription">
                                            <div class="row bg-white container  pt-lg-3 pb-lg-3 ">
                                                <div class="col-lg-4">
                                                   
                                                    <div class="twm-ep-detail-tags">
                                                        <button class="de-info twm-bg-green"><i class="fa fa-check"></i>  Clean and attractive blog layouts</button>
                                                        <button class="de-info twm-bg-green"><i class="fa fa-check"></i>  Easy content publishing and management</button>
                                                        <button class="de-info twm-bg-green"><i class="fa fa-check"></i>  Social sharing integration</button>
                                                        <button class="de-info twm-bg-green"><i class="fa fa-check"></i>  Commenting system for reader engagement</button>
                                                        <button class="de-info twm-bg-green"><i class="fa fa-check"></i> Search functionality for content discovery</button>
                                                        <button class="de-info twm-bg-green"><i class="fa fa-check"></i>  Mobile-friendly design and responsiveness</button>
                                                    </div> 
                                                </div>
                                                <div class="col-lg-8">
                                                    <p class="text text-start site-text-black">
                                                        
                                                        Elevate your online presence and engage your audience with our professional blogging website development services. We create dynamic and user-friendly blogging platforms that empower you to share your expertise, insights, and stories. Our team focuses on creating visually captivating blog layouts that reflect your brand identity and captivate readers. With easy-to-use content management systems, you can effortlessly publish and manage blog posts, allowing you to consistently provide fresh and valuable content to your audience. We also integrate essential features such as social sharing buttons, enabling readers to easily share your blog posts on various platforms. Additionally, our blogging websites are designed to be search engine-friendly, helping your content rank higher in search results and attract organic traffic.
                                                    </p>

                                                   
                                                </div>
                                                
                                            </div>
                                            
                                           
                                        </div> 
                                          {{-- contact here --}}
                                        <div class="row mt-3">
                                         <div class="col-lg-10 text-start">
                                            
                                             <a href="contact" class="pt-2 ">
                                                 <h5> Unlock your business's online potential with our professional e-commerce website development services.Contact us today to discuss your requirements and establish a robust online presence for your business.</h5></a> 
                                         </div>
                                         <div class="col-lg-2 ">
                                            
                                             <div class="twm-read-more">
                                                 <a href="contact" class="site-button button-lg">Contact Us</a>
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
             {{-- blogging end --}}
             <div class="column landing">
                <div class="content"> 
                    <div class="job-categories-block-2 m-b30 ">
                     
                        {{-- <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 ">
                                <img src="{{ asset('images/servicesimg/automated.png')}}" alt="">
                    
                              </span>
                            </div>
                            <div class="flex-grow-1">
                              <h4 class="mb-0">Playback Flexibility</h4>
                            </div>
                        </div> --}}
                        <div class="twm-content">
                            
                            <div class="blog-post-single-outer">
                                <div class="blog-post-single ">                                    

                                    <div class="wt-post-info">
                                        <div class="wt-post-title ">
                                         <a>
                                            <div class="post-title"><img src="{{ asset('images/servicesimg/landing-page.png')}}" alt="icon-img" class="m-2">Landing-Page Website Development</div>
                                        </a>
                                        </div>
                                     
                                        <div class="wt-post-discription">
                                            <div class="row bg-white container  pt-lg-3 pb-lg-3 ">
                                                <div class="col-lg-4">
                                                   
                                                    <div class="twm-ep-detail-tags">
                                                        <button class="de-info twm-bg-green"><i class="fa fa-check"></i>  Eye-catching design and visuals</button>
                                                        <button class="de-info twm-bg-green"><i class="fa fa-check"></i>  SA/B testing for optimization</button>
                                                        <button class="de-info twm-bg-green"><i class="fa fa-check"></i>  Clear and persuasive call-to-action (CTA)</button>
                                                       
                                                        <button class="de-info twm-bg-green"><i class="fa fa-check"></i>  Fast loading times for better user experience</button>
                                                        <button class="de-info twm-bg-green"><i class="fa fa-check"></i>Integration with analytics and tracking tools</button>
                                                        <button class="de-info twm-bg-green"><i class="fa fa-check"></i>  Mobile optimization for seamless performance</button>
                                                    </div> 
                                                </div>
                                                <div class="col-lg-8">
                                                    <p class="text text-start site-text-black">
                                                        
                                                        At <span class="site-text-orange h5">TMS</span>,Make a lasting impression and maximize conversions with our landing page website development services. We specialize in creating visually stunning and high-converting landing pages that drive user action. Our team collaborates closely with you to understand your campaign objectives and design landing pages that effectively communicate your message and value proposition. We pay careful attention to every element of the landing page, from compelling headlines and persuasive copy to attractive visuals and clear call-to-action buttons. By optimizing loading speed and ensuring mobile responsiveness, we provide a seamless user experience that encourages visitors to take the desired action. Partner with us to create landing pages that captivate your audience, increase conversions, and maximize your campaign's success.
                                                    </p>

                                                   
                                                </div>
                                                
                                            </div>
                                            
                                           
                                        </div> 
                                          {{-- contact here --}}
                                        <div class="row mt-3">
                                         <div class="col-lg-10 text-start">
                                            
                                             <a href="contact" class="pt-2 ">
                                                 <h5> Unlock your business's online potential with our professional e-commerce website development services.Contact us today to discuss your requirements and establish a robust online presence for your business.</h5></a> 
                                         </div>
                                         <div class="col-lg-2 ">
                                            
                                             <div class="twm-read-more">
                                                 <a href="contact" class="site-button button-lg">Contact Us</a>
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
             {{-- landing end --}}
             <div class="column automotive">
                <div class="content"> 
                    <div class="job-categories-block-2 m-b30 ">
                     
                        {{-- <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 ">
                                <img src="{{ asset('images/servicesimg/automated.png')}}" alt="">
                    
                              </span>
                            </div>
                            <div class="flex-grow-1">
                              <h4 class="mb-0">Playback Flexibility</h4>
                            </div>
                        </div> --}}
                        <div class="twm-content">
                            
                            <div class="blog-post-single-outer">
                                <div class="blog-post-single ">                                    

                                    <div class="wt-post-info">
                                        <div class="wt-post-title ">
                                         <a>
                                            <div class="post-title"><img src="{{ asset('images/servicesimg/automated.png')}}" alt="icon-img" class="m-2">Automative Software Development</div>
                                        </a>
                                        </div>
                                     
                                        <div class="wt-post-discription">
                                            <div class="row bg-white container  pt-lg-3 pb-lg-3 ">
                                                <div class="col-lg-4">
                                                   
                                                    <div class="twm-ep-detail-tags">
                                                        <button class="de-info twm-bg-green"><i class="fa fa-check"></i>  Inventory management and optimization</button>
                                                        <button class="de-info twm-bg-green"><i class="fa fa-check"></i>  Customer relationship management</button>
                                                        <button class="de-info twm-bg-green"><i class="fa fa-check"></i>  Integration with automotive diagnostic tools</button>
                                                        <button class="de-info twm-bg-green"><i class="fa fa-check"></i>  Data analytics for performance monitoring</button>
                                                        <button class="de-info twm-bg-green"><i class="fa fa-check"></i> Scalable and customizable software solutions</button>
                                                        <button class="de-info twm-bg-green"><i class="fa fa-check"></i>  Analytics and Reporting</button>
                                                    </div> 
                                                </div>
                                                <div class="col-lg-8">
                                                    <p class="text text-start site-text-black">
                                                        
                                                        At <span class="site-text-orange h5">TMS</span>, our automotive software development services cater to the unique needs of the automotive industry, helping businesses streamline their operations and drive efficiency. We specialize in developing custom software solutions tailored to automotive businesses, including vehicle management systems, inventory tracking, customer relationship management, and more. Our software solutions enable you to effectively manage vehicle inventory, track sales and service records, and enhance customer interactions. By leveraging the latest technologies, we create robust and scalable software applications that streamline processes, improve productivity, and drive business growth. Partner with us to harness the power of technology and gain a competitive edge in the automotive industry.
                                                    </p>

                                                   
                                                </div>
                                                
                                            </div>
                                            
                                           
                                        </div> 
                                          {{-- contact here --}}
                                        <div class="row mt-3">
                                         <div class="col-lg-10 text-start">
                                            
                                             <a href="contact" class="pt-2 ">
                                                 <h5> Unlock your business's online potential with our professional e-commerce website development services.Contact us today to discuss your requirements and establish a robust online presence for your business.</h5></a> 
                                         </div>
                                         <div class="col-lg-2 ">
                                            
                                             <div class="twm-read-more">
                                                 <a href="contact" class="site-button button-lg">Contact Us</a>
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
             {{-- automotive end --}}
             <div class="column hrm">
                <div class="content"> 
                    <div class="job-categories-block-2 m-b30 ">
                     
                        {{-- <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 ">
                                <img src="{{ asset('images/servicesimg/automated.png')}}" alt="">
                    
                              </span>
                            </div>
                            <div class="flex-grow-1">
                              <h4 class="mb-0">Playback Flexibility</h4>
                            </div>
                        </div> --}}
                        <div class="twm-content">
                            
                            <div class="blog-post-single-outer">
                                <div class="blog-post-single ">                                    

                                    <div class="wt-post-info">
                                        <div class="wt-post-title ">
                                         <a>
                                            <div class="post-title"><img src="{{ asset('images/servicesimg/hrm.png')}}" alt="icon-img" class="m-2">Human Resource Management System</div>
                                        </a>
                                        </div>
                                     
                                        <div class="wt-post-discription">
                                            <div class="row bg-white container  pt-lg-3 pb-lg-3 ">
                                                <div class="col-lg-4">
                                                   
                                                    <div class="twm-ep-detail-tags">
                                                        <button class="de-info twm-bg-green"><i class="fa fa-check"></i>  Performance tracking and evaluation</button>
                                                        <button class="de-info twm-bg-green"><i class="fa fa-check"></i>  Employee self-service portal</button>
                                                        <button class="de-info twm-bg-green"><i class="fa fa-check"></i>  Employee onboarding and offboarding </button>
                                                        <button class="de-info twm-bg-green"><i class="fa fa-check"></i>  Leave and attendance management</button>
                                                        <button class="de-info twm-bg-green"><i class="fa fa-check"></i> Reporting and analytics for HR insights</button>
                                                        <button class="de-info twm-bg-green"><i class="fa fa-check"></i>  Compliance management (policies, training, etc.)</button>
                                                    </div> 
                                                </div>
                                                <div class="col-lg-8">
                                                    <p class="text text-start site-text-black">
                                                        
                                                        Simplify your HR processes and optimize workforce management with our human resource management system. Our HRMS solutions provide a comprehensive platform to streamline HR tasks, from employee onboarding and attendance tracking to performance management and payroll processing. With our user-friendly interface and automation capabilities, you can save time and reduce administrative burdens. Our HRMS also facilitates seamless communication and collaboration among HR teams and employees, enhancing efficiency and engagement. Additionally, our system provides valuable insights through analytics and reporting, empowering you to make data-driven decisions and improve HR strategies. Trust our HRMS solutions to transform your HR operations and support the growth of your organization.
                                                    </p>

                                                   
                                                </div>
                                                
                                            </div>
                                            
                                           
                                        </div> 
                                          {{-- contact here --}}
                                        <div class="row mt-3">
                                         <div class="col-lg-10 text-start">
                                            
                                             <a href="contact" class="pt-2 ">
                                                 <h5> Unlock your business's online potential with our professional e-commerce website development services.Contact us today to discuss your requirements and establish a robust online presence for your business.</h5></a> 
                                         </div>
                                         <div class="col-lg-2 ">
                                            
                                             <div class="twm-read-more">
                                                 <a href="contact" class="site-button button-lg">Contact Us</a>
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
             {{-- hrm end --}}
             <div class="column lms">
                <div class="content"> 
                    <div class="job-categories-block-2 m-b30 ">
                     
                        {{-- <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 ">
                                <img src="{{ asset('images/servicesimg/automated.png')}}" alt="">
                    
                              </span>
                            </div>
                            <div class="flex-grow-1">
                              <h4 class="mb-0">Playback Flexibility</h4>
                            </div>
                        </div> --}}
                        <div class="twm-content">
                            
                            <div class="blog-post-single-outer">
                                <div class="blog-post-single ">                                    

                                    <div class="wt-post-info">
                                        <div class="wt-post-title ">
                                         <a>
                                            <div class="post-title"><img src="{{ asset('images/servicesimg/learning.png')}}" alt="icon-img" class="m-2"> Learning Management System</div>
                                        </a>
                                        </div>
                                     
                                        <div class="wt-post-discription">
                                            <div class="row bg-white container  pt-lg-3 pb-lg-3 ">
                                                <div class="col-lg-4">
                                                   
                                                    <div class="twm-ep-detail-tags">
                                                        <button class="de-info twm-bg-green"><i class="fa fa-check"></i>  Course creation and management</button>
                                                        <button class="de-info twm-bg-green"><i class="fa fa-check"></i>  Student enrollment and trackingt</button>
                                                        <button class="de-info twm-bg-green"><i class="fa fa-check"></i>  Progress tracking and reporting</button>
                                                        <button class="de-info twm-bg-green"><i class="fa fa-check"></i>  Assessment and quiz functionality</button>
                                                        <button class="de-info twm-bg-green"><i class="fa fa-check"></i> Gamification features for increased engagement</button>
                                                        <button class="de-info twm-bg-green"><i class="fa fa-check"></i>  Interactive learning tools (videos,forums, etc.)</button>
                                                    </div> 
                                                </div>
                                                <div class="col-lg-8">
                                                    <p class="text text-start site-text-black">
                                                        Empower your organization with our advanced Learning Management System (LMS) that revolutionizes training and development. Our LMS is a comprehensive platform designed to deliver, manage, and track online learning programs. Whether you need to train employees, educate students, or provide professional development courses, our LMS provides a centralized and user-friendly solution. With a wide range of features and functionalities, you can create engaging courses, deliver interactive content, and track learner progress. Our LMS supports various types of content, including videos, quizzes, assessments, and multimedia presentations, ensuring an immersive learning experience. Benefit from robust reporting and analytics capabilities to gain insights into learner performance, track course completion rates, and measure the effectiveness of your training programs.
                                                    </p>

                                                   
                                                </div>
                                                
                                            </div>
                                            
                                           
                                        </div> 
                                          {{-- contact here --}}
                                        <div class="row mt-3">
                                         <div class="col-lg-10 text-start">
                                            
                                             <a href="contact" class="pt-2 ">
                                                 <h5> Unlock your business's online potential with our professional e-commerce website development services.Contact us today to discuss your requirements and establish a robust online presence for your business.</h5></a> 
                                         </div>
                                         <div class="col-lg-2 ">
                                            
                                             <div class="twm-read-more">
                                                 <a href="contact" class="site-button button-lg">Contact Us</a>
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
             {{-- lms end --}}
             <div class="column erp">
                <div class="content"> 
                    <div class="job-categories-block-2 m-b30 ">
                     
                        {{-- <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 ">
                                <img src="{{ asset('images/servicesimg/automated.png')}}" alt="">
                    
                              </span>
                            </div>
                            <div class="flex-grow-1">
                              <h4 class="mb-0">Playback Flexibility</h4>
                            </div>
                        </div> --}}
                        <div class="twm-content">
                            
                            <div class="blog-post-single-outer">
                                <div class="blog-post-single ">                                    

                                    <div class="wt-post-info">
                                        <div class="wt-post-title ">
                                         <a>
                                            <div class="post-title"><img src="{{ asset('images/servicesimg/erp.png')}}" alt="icon-img" class="m-2">Enterprise Resource Planning System</div>
                                        </a>
                                        </div>
                                     
                                        <div class="wt-post-discription">
                                            <div class="row bg-white container  pt-lg-3 pb-lg-3 ">
                                                <div class="col-lg-4">
                                                   
                                                    <div class="twm-ep-detail-tags">
                                                        <button class="de-info twm-bg-green"><i class="fa fa-check"></i>  Integrated modules for seamless data flow</button>
                                                        <button class="de-info twm-bg-green"><i class="fa fa-check"></i>  Financial management and accounting</button>
                                                        <button class="de-info twm-bg-green"><i class="fa fa-check"></i>  Inventory and supply chain management</button>
                                                        <button class="de-info twm-bg-green"><i class="fa fa-check"></i>  Production planning and scheduling</button>
                                                        <button class="de-info twm-bg-green"><i class="fa fa-check"></i> CRM functionality for customer management</button>
                                                        <button class="de-info twm-bg-green"><i class="fa fa-check"></i>  Business intelligence and reporting capabilities</button>
                                                    </div> 
                                                </div>
                                                <div class="col-lg-8">
                                                    <p class="text text-start site-text-black">
                                                        Streamline your business processes and improve operational efficiency with our enterprise resource planning (ERP) system. Our ERP solutions integrate different aspects of your business, including finance, inventory, procurement, manufacturing, and customer relationship management. By providing a centralized platform for data management and collaboration, our ERP system enables seamless communication and coordination across departments, enhancing productivity and reducing costs. With real-time data visibility and automated workflows, you can make informed decisions and optimize resource utilization. From financial management and accounting to inventory and supply chain management, our ERP system offers comprehensive functionalities tailored to your business needs. Gain deeper insights into your operations with business intelligence and reporting capabilities, empowering you to identify trends, streamline processes, and drive business growth.
                                                    </p>

                                                   
                                                </div>
                                                
                                            </div>
                                            
                                           
                                        </div> 
                                          {{-- contact here --}}
                                        <div class="row mt-3">
                                         <div class="col-lg-10 text-start">
                                            
                                             <a href="contact" class="pt-2 ">
                                                 <h5> Unlock your business's online potential with our professional e-commerce website development services.Contact us today to discuss your requirements and establish a robust online presence for your business.</h5></a> 
                                         </div>
                                         <div class="col-lg-2 ">
                                            
                                             <div class="twm-read-more">
                                                 <a href="contact" class="site-button button-lg">Contact Us</a>
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
             {{-- erp end --}}
             <div class="column crm">
                <div class="content"> 
                    <div class="job-categories-block-2 m-b30 ">
                     
                        {{-- <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 ">
                                <img src="{{ asset('images/servicesimg/automated.png')}}" alt="">
                    
                              </span>
                            </div>
                            <div class="flex-grow-1">
                              <h4 class="mb-0">Playback Flexibility</h4>
                            </div>
                        </div> --}}
                        <div class="twm-content">
                            
                            <div class="blog-post-single-outer">
                                <div class="blog-post-single ">                                    

                                    <div class="wt-post-info">
                                        <div class="wt-post-title ">
                                         <a>
                                            <div class="post-title"><img src="{{ asset('images/servicesimg/crm.png')}}" alt="icon-img" class="m-2">Customer Relationship Management System</div>
                                        </a>
                                        </div>
                                     
                                        <div class="wt-post-discription">
                                            <div class="row bg-white container  pt-lg-3 pb-lg-3 ">
                                                <div class="col-lg-4">
                                                   
                                                    <div class="twm-ep-detail-tags">
                                                        <button class="de-info twm-bg-green"><i class="fa fa-check"></i>  Contact and lead management</button>
                                                        <button class="de-info twm-bg-green"><i class="fa fa-check"></i>  Opportunity and pipeline tracking</button>
                                                        <button class="de-info twm-bg-green"><i class="fa fa-check"></i>  Sales automation and workflow management</button>
                                                        <button class="de-info twm-bg-green"><i class="fa fa-check"></i>  Customer communication and engagement tools</button>
                                                        <button class="de-info twm-bg-green"><i class="fa fa-check"></i> Analytics and insights on customer behavior</button>
                                                        <button class="de-info twm-bg-green"><i class="fa fa-check"></i>  Integration with marketing automation tools</button>
                                                    </div> 
                                                </div>
                                                <div class="col-lg-8">
                                                    <p class="text text-start site-text-black">
                                                        Strengthen your customer relationships and enhance sales with our customer relationship management (CRM) system. Our CRM solutions enable you to effectively manage customer interactions, track leads, automate sales processes, and analyze customer data. By centralizing customer information and interactions, our CRM system provides a holistic view of your customers, allowing you to deliver personalized experiences and build long-term relationships. Streamline your sales processes with lead management, opportunity tracking, and sales automation features. Improve customer engagement through effective communication tools and targeted marketing campaigns. With analytics and insights on customer behavior, you can identify trends, preferences, and buying patterns, enabling you to tailor your offerings and marketing strategies. By integrating your CRM system with other business tools, such as marketing automation platforms, you can further optimize your customer engagement and sales processes.
                                                    </p>

                                                   
                                                </div>
                                                
                                            </div>
                                            
                                           
                                        </div> 
                                          {{-- contact here --}}
                                        <div class="row mt-3">
                                         <div class="col-lg-10 text-start">
                                            
                                             <a href="contact" class="pt-2 ">
                                                 <h5> Unlock your business's online potential with our professional e-commerce website development services.Contact us today to discuss your requirements and establish a robust online presence for your business.</h5></a> 
                                         </div>
                                         <div class="col-lg-2 ">
                                            
                                             <div class="twm-read-more">
                                                 <a href="contact" class="site-button button-lg">Contact Us</a>
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
             {{--crm end --}}
             <div class="column analytics">
                <div class="content"> 
                    <div class="job-categories-block-2 m-b30 ">
                     
                        {{-- <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 ">
                                <img src="{{ asset('images/servicesimg/automated.png')}}" alt="">
                    
                              </span>
                            </div>
                            <div class="flex-grow-1">
                              <h4 class="mb-0">Playback Flexibility</h4>
                            </div>
                        </div> --}}
                        <div class="twm-content">
                            
                            <div class="blog-post-single-outer">
                                <div class="blog-post-single ">                                    

                                    <div class="wt-post-info">
                                        <div class="wt-post-title ">
                                         <a>
                                            <div class="post-title"><img src="{{ asset('images/servicesimg/analytics.png')}}" alt="icon-img" class="m-2">Analytics and Tracking Tools</div>
                                        </a>
                                        </div>
                                     
                                        <div class="wt-post-discription">
                                            <div class="row bg-white container  pt-lg-3 pb-lg-3 ">
                                                <div class="col-lg-4">
                                                   
                                                    <div class="twm-ep-detail-tags">
                                                        <button class="de-info twm-bg-green"><i class="fa fa-check"></i>  Website traffic analysis and reporting</button>
                                                        <button class="de-info twm-bg-green"><i class="fa fa-check"></i>  Conversion tracking and goal setting</button>
                                                        <button class="de-info twm-bg-green"><i class="fa fa-check"></i>  User behavior analysis</button> <button class="de-info twm-bg-green"><i class="fa fa-check"></i> eg: clicks, navigation, etc.</button>
                                                     
                                                        <button class="de-info twm-bg-green"><i class="fa fa-check"></i> A/B testing for optimization</button>
                                                        <button class="de-info twm-bg-green"><i class="fa fa-check"></i>  Customizable dashboards and data visualization</button>
                                                    </div> 
                                                </div>
                                                <div class="col-lg-8">
                                                    <p class="text text-start site-text-black">
                                                        Unlock valuable insights and make data-driven decisions with our comprehensive analytics and tracking tools. We offer cutting-edge solutions that empower businesses to collect, analyze, and interpret data to drive growth and optimize performance. Our analytics tools provide real-time visibility into key metrics, allowing you to monitor website traffic, user behavior, and conversion rates. With advanced tracking capabilities, you can identify trends, uncover patterns, and gain a deeper understanding of your audience. Our intuitive dashboards and customizable reports provide actionable insights, enabling you to make informed decisions and fine-tune your marketing strategies. Whether you need to optimize your website, improve campaign performance, or enhance customer engagement, our analytics and tracking tools are your gateway to data-driven success.
                                                    </p>

                                                   
                                                </div>
                                                
                                            </div>
                                            
                                           
                                        </div> 
                                          {{-- contact here --}}
                                        <div class="row mt-3">
                                         <div class="col-lg-10 text-start">
                                            
                                             <a href="contact" class="pt-2 ">
                                                 <h5> Unlock your business's online potential with our professional e-commerce website development services.Contact us today to discuss your requirements and establish a robust online presence for your business.</h5></a> 
                                         </div>
                                         <div class="col-lg-2 ">
                                            
                                             <div class="twm-read-more">
                                                 <a href="contact" class="site-button button-lg">Contact Us</a>
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
             {{-- analytics end --}}
        </div>
    </div>
  
</div>
 
<!-- END GRID -->
</div>
<script>
filterSelection("all") // Execute the function and show all columns
function filterSelection(c) {
var x, i;
x = document.getElementsByClassName("column");
if (c == "all") ;
// Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
for (i = 0; i < x.length; i++) {
w3RemoveClass(x[i], "show");
if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
}
}

// Show filtered elements
function w3AddClass(element, name) {
var i, arr1, arr2;
arr1 = element.className.split(" ");
arr2 = name.split(" ");
for (i = 0; i < arr2.length; i++) {
if (arr1.indexOf(arr2[i]) == -1) {
  element.className += " " + arr2[i];
}
}
}

// Hide elements that are not selected
function w3RemoveClass(element, name) {
var i, arr1, arr2;
arr1 = element.className.split(" ");
arr2 = name.split(" ");
for (i = 0; i < arr2.length; i++) {
while (arr1.indexOf(arr2[i]) > -1) {
  arr1.splice(arr1.indexOf(arr2[i]), 1);
}
}
element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
btns[i].addEventListener("click", function(){
var current = document.getElementsByClassName("active");
current[0].className = current[0].className.replace(" active", "");
this.className += " active";
});
}
</script>
{{-- all jons portfolio end --}}

            <!-- Why choose Us SECTION START -->
             {{-- <div class="section-full p-t100 p-b90  m-t100 site-bg-gray twm-about-1-area">
                        
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

           
           
            </div>     --}}
            <!-- Why Choose Us SECTION END -->

            <!-- slient feautures Work START -->
         
               <!-- OUR BLOG START -->
               <div class="section-full p-t70 p-b90 site-bg-gray">
               
                <div class="container bg-gradient site-bg-gray">
                   
                    <!-- TITLE START-->
                    <div class="section-head center wt-small-separator-outer">
                        <div class="wt-small-separator site-text-primary">
                           <div class="site-text-orange">Why Choose Us</div>                                
                        </div>
                        <h2 class="site-text-primary"> Our Slient Features</h2>
                        
                    </div>                  
                    <!-- TITLE END-->


                    <div class="section-content"> 
                       
                        <div class="row d-flex justify-content-center">
                            <p class="lead site-text-black pb-3">
                            Our impressive features, including unparalleled performance, intuitive user interfaces, seamless integration capabilities, robust security measures, scalability, comprehensive analytics, reliable support, and customization options, set us apart as the preferred choice for businesses seeking to optimize their operations and achieve remarkable results. </p>  
                            <div class="col-lg-6 col-md-12 m-b30">
                                <div class="twm-blog-post-wrap-right">
                                    <!--Block two-->
                                    <div class="blog-post twm-blog-post-1-outer shadow-none  m-b10 shadow">
                                        <div class="wt-post-info">

                                            <div class="wt-post-meta ">
                                                <ul>
                                                    <li class="post-date">  <div class="wt-post-title ">
                                                        <h4 class="site-text-white">
                                                            User-Centric Design
                                                        </h4>
                                                    </div>
                                                </li>
                                                    
                                                </ul>
                                            </div>
                                                                        
                                           
                                             <div class="wt-post-text ">
                                                <p>
                                                    We prioritize user experience in our software development process. By employing user-centric design principles, we create intuitive and engaging interfaces that ensure a seamless and enjoyable user experience, resulting in increased user satisfaction and engagement.
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
                                            <div class="wt-post-meta ">
                                                <ul>
                                                    <li class="post-date">  <div class="wt-post-title ">
                                                        <h4 class="site-text-white">
                                                            Advanced Technology Stack
                                                        </h4>
                                                    </div>
                                                </li>
                                                    
                                                </ul>
                                            </div>
                                                  
                                            <div class="wt-post-text ">
                                                <p>
                                                    We leverage the latest and most cutting-edge technologies to develop robust and future-proof software solutions. Our expertise in a wide range of technologies enables us to choose the best stack for your specific project requirements.
                                                </p>
                                            </div>
                                            <!-- <div class="wt-post-readmore ">
                                                <a href="blog-single.html" class="site-button-link site-text-primary">Read More</a>
                                            </div>  -->

                                        </div>                                
                                    </div>

                               
                                </div>
                            </div>
                            
                            <div class="col-lg-6 col-md-12">

                                <div class="twm-blog-post-wrap-right">
                                    <!--Block two-->
                                    <div class="blog-post twm-blog-post-1-outer shadow-none  m-b10  ">
                                        <div class="wt-post-info">

                                            <div class="wt-post-meta ">
                                                <ul>
                                                    <li class="post-date">  <div class="wt-post-title ">
                                                        <h4 class="site-text-white">
                                                            User-Centric Design
                                                        </h4>
                                                    </div>
                                                </li>
                                                    
                                                </ul>
                                            </div>
                                                                        
                                           
                                             <div class="wt-post-text ">
                                                <p>
                                                    We prioritize user experience in our software development process. By employing user-centric design principles, we create intuitive and engaging interfaces that ensure a seamless and enjoyable user experience, resulting in increased user satisfaction and engagement.
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
                                            <div class="wt-post-meta ">
                                                <ul>
                                                    <li class="post-date">  <div class="wt-post-title ">
                                                        <h4 class="site-text-white">
                                                            Advanced Technology Stack
                                                        </h4>
                                                    </div>
                                                </li>
                                                    
                                                </ul>
                                            </div>
                                                  
                                            <div class="wt-post-text ">
                                                <p>
                                                    We leverage the latest and most cutting-edge technologies to develop robust and future-proof software solutions. Our expertise in a wide range of technologies enables us to choose the best stack for your specific project requirements.
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
            </div>
            <!-- OUR BLOG END -->

            <!-- slient feautures Work END -->

            {{-- testimonial start --}}
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
                                            
                                        </div>

                                        
                                    </div>
                                </div>

                                <div class="col-xl-7 col-lg-12 col-md-12">
                                    <div class="v-testimonial-wrap">
                                        <div class="v-testi-dotted-pic">
                                            <img src="http://127.0.0.1:8000/images/home-6/testimonial/dotted-block.png" alt="#">
                                        </div>
                                        <!-- Swiper -->
                                        <div class="swiper-container v-testimonial-slider swiper-initialized swiper-vertical swiper-pointer-events swiper-backface-hidden">
                                            <div class="swiper-wrapper" id="swiper-wrapper-7ae655dac77dead1" aria-live="off" style="transform: translate3d(0px, -1530px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" role="group" aria-label="3 / 4" style="height: 235px; margin-bottom: 20px;">
                                                    <div class="testimonials-v">
                                                        <div class="twm-testi-media">
                                                            <img src="http://127.0.0.1:8000/images/home-6/testimonial/pic3.jpg" alt="#">
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
                                                </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="3" role="group" aria-label="4 / 4" style="height: 235px; margin-bottom: 20px;">
                                                    <div class="testimonials-v">
                                                        <div class="twm-testi-media">
                                                            <img src="http://127.0.0.1:8000/images/home-6/testimonial/pic1.jpg" alt="#">
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
                                                <!-- block 1 -->
                                                <!-- -->

                                                <div class="swiper-slide swiper-slide-duplicate-active" data-swiper-slide-index="0" role="group" aria-label="1 / 4" style="height: 235px; margin-bottom: 20px;">
                                                    <div class="testimonials-v">
                                                        <div class="twm-testi-media">
                                                            <img src="http://127.0.0.1:8000/images/home-6/testimonial/pic1.jpg" alt="#">
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
                                                <div class="swiper-slide swiper-slide-duplicate-next" data-swiper-slide-index="1" role="group" aria-label="2 / 4" style="height: 235px; margin-bottom: 20px;">
                                                    <div class="testimonials-v">
                                                        <div class="twm-testi-media">
                                                            <img src="http://127.0.0.1:8000/images/home-6/testimonial/pic2.jpg" alt="#">
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
                                                <div class="swiper-slide" data-swiper-slide-index="2" role="group" aria-label="3 / 4" style="height: 235px; margin-bottom: 20px;">
                                                    <div class="testimonials-v">
                                                        <div class="twm-testi-media">
                                                            <img src="http://127.0.0.1:8000/images/home-6/testimonial/pic3.jpg" alt="#">
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
                                                <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="3" role="group" aria-label="4 / 4" style="height: 235px; margin-bottom: 20px;">
                                                    <div class="testimonials-v">
                                                        <div class="twm-testi-media">
                                                            <img src="http://127.0.0.1:8000/images/home-6/testimonial/pic1.jpg" alt="#">
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
                                                
                                                
                                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-active" data-swiper-slide-index="0" role="group" aria-label="1 / 4" style="height: 235px; margin-bottom: 20px;">
                                                    <div class="testimonials-v">
                                                        <div class="twm-testi-media">
                                                            <img src="http://127.0.0.1:8000/images/home-6/testimonial/pic1.jpg" alt="#">
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
                                                </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-next" data-swiper-slide-index="1" role="group" aria-label="2 / 4" style="height: 235px; margin-bottom: 20px;">
                                                    <div class="testimonials-v">
                                                        <div class="twm-testi-media">
                                                            <img src="http://127.0.0.1:8000/images/home-6/testimonial/pic2.jpg" alt="#">
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
                                                </div></div>
                                            <!-- Add Pagination -->
                                            <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-vertical swiper-pagination-horizontal"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" aria-current="true"></span></div>
                                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                                    </div>
                                    
                                </div>

                            </div>
                        </div>
                    </div>                              
                </div>
                
            </div>
            {{-- testimonial end --}}
   <!-- TOP COMPANIES START -->
   <div class="section-full p-t70  site-bg-white twm-companies-wrap">
                  
    <!-- TITLE START-->
    <div class="section-head center wt-small-separator-outer">
        <div class="wt-small-separator site-text-primary">
           <div class="site-text-orange">Top Companies</div>                                
        </div>
        <h2 class="wt-title site-text-primary">Trusted by top-tier companies world-wide</h2>
    </div>                  
    <!-- TITLE END-->

    <div class="container">
        <div class="section-content">
            <div class="owl-carousel home-client-carousel2 owl-btn-vertical-center">
            
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
                            <a href=""><img src="{{ asset('images/client-logo/uzio.png')}}"
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
   <div class="section-full twm-hpage-6-subs-wrap bg-cover" style="background-image: url('{{ asset('images/home-6/subscribe-bg.jpg') }}');">
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