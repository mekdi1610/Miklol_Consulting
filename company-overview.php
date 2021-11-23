<?php 
require('php/front.php'); 
$front = new FrontEnd();
$contact=$front->contact();
$service=$front->services();
$about=$front->about();
?>
<!doctype html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>Delware | Just another Steel Themes Sites site</title>
      <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
      <link type="text/css" rel="stylesheet" href="css/responsive.css"/>
      <link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
      <link href="css/inner-page-style.css" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" type="text/css" href="css/flaticon.css" />
      <!-- Libraries CSS Files -->
      <link href="css/font-awesome.css" rel="stylesheet">
      <!-----navbar----css-------->
      <link rel="stylesheet" type="text/css" href="css/navbar.css" />
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
      <!--Favicon-->
      <link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon">
      <link rel="icon" href="image/favicon.ico" type="image/x-icon">
      </head>
   <body>
      <?php include 'header.php'; ?> 
         <!----------------------------------------wapper-end--------------------------------------------->
         <main id="main">
            <div class="page-header  text-dark parallax has-image">
               <div class="page-header-content">
                  <div  class="featured-image" style="background:url(image/key.jpg); background-position: center; background-size: cover; ">
                     <div class="container">
                        <div class="row">
                           <div class="heading">
                              <h1>Company Overview</h1>
                           </div>
                           <div class="bread-cumb-inner">
                              <ul class="breadcrumb">
                                 <li class="active"><a href="#">Home</a></li>
                                 <li><a href="#">About Us</a></li>
                                 <li>Company Overview</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="welcome-about-us">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <div class="image">
                           <img src="image/5.jpg" class="img-responsive" alt="about-us" width="770" height="430" />
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="content-outer-about">
                           <div class="content-inner in">
                              <h2><a>Mission</a></h2>
                              <p><?php echo $about['Mission']; ?></p>
                           </div>
                           <div class="content-inner in">
                              <h2><a>Vision</a></h2>
                              <p><?php echo $about['Vision']; ?></p>
                           </div>
                           <div class="content-inner">
                              <h2><a>Value</a></h2>
                              <p><?php echo $about['Value']; ?></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="welcome-about-two">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="content-about-about-two">
                           <div class="content-inner">
                              <div class="heading">
                                 <h1>WE are <span> Consulting </span> and <span> Research </span> Institiute.</h1>
                              </div>
                              <p></p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="content-about-about-two">
                           <div class="content-inner">
                              <p><?php echo $about['About']; ?>
                              </p>
                              <p>Our clients make significant and & realize their most important goals who
                                 loves or pursues our desires to obtain pains of  because is pain, but because
                                 occasionally desires to obtain.
                              </p>
                              <div class="main">
                                 <h2>Nathan Missoray, <span>CEO & Founder</span></h2>
                              </div>
                              <div class="image">
                                 <img src="image/company-overview/about-sign.png" class="img-responsive" alt="sign" width="151" height="64" />
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div style="background:url(image/6.jpg); background-size:cover; " class="work-process">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="heading text-center">
                           <h1>Our Work <span>Process</span></h1>
                        </div>
                        <p class="para text-center">Delware Consulting understands that to help meet client challenges and
                           opportunities successfully in a global economy
                        </p>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="process-inner in">
                           <div class="image">
                              <img src="image/company-overview/svg/mountain.svg" class="logo" style="width:50px;" alt="logo" />
                           </div>
                           <div class="process-content">
                              <h2>Share Your Goal</h2>
                              <p>How all this mistaken our idea  complete system.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="process-inner in">
                           <div class="image">
                              <img src="image/company-overview/svg/gear.svg" class="logo" style="width:50px;" alt="logo" />
                           </div>
                           <div class="process-content">
                              <h2>Find a Challenges</h2>
                              <p>Denouncing pleasure praising expound actual.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="process-inner">
                           <div class="image">
                              <img src="image/company-overview/svg/solution.svg" class="logo" style="width:50px;" alt="logo" />
                           </div>
                           <div class="process-content">
                              <h2>Get a Solution</h2>
                              <p> There anyone all loves desires  obtain pain itself.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="media-section">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="video-holder" style="background-image:url(image/company-overview/video-bg.jpg);">
                           <div class="overlay-gallery">
                              <div class="icon-holder">
                                 <div class="icon">
                                    <a class="html5lightbox bg" title="Solution Video Gallery" href="https://www.youtube.com/watch?v=b9B1nOyzNvI"><img src="image/company-overview/svg/play-button.svg" alt="Play Button" class="btn" style="width:50px;"></a>   
                                 </div>
                              </div>
                           </div>
                           <span class="contact"><a href="#"><img src="image/company-overview/svg/phone-call.svg" class="logo" alt="logo" style="width:18px;" /> 1 (857) 899-0009</a></span>
                        </div>
                     </div>
                     <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <div class="in col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <div class="progress-content">
                              <div class="progress-outer">
                                 <h5>85%</h5>
                                 <div class="progress">
                                    <div class="progress-bar progress-bar-info progress-bar-striped active" style="width:85%; ;"></div>
                                    <div class="progress-value"></div>
                                 </div>
                                 <div class="content-inner">
                                    <h2>Quality Assurance</h2>
                                    <p>This mistaken idea of denouncing pleasure and praising.</p>
                                 </div>
                              </div>
                              <div class="progress-outer">
                                 <h5>74%</h5>
                                 <div class="progress">
                                    <div class="progress-bar progress-bar-info progress-bar-striped active" style="width:74%; ;"></div>
                                    <div class="progress-value"></div>
                                 </div>
                                 <div class="content-inner">
                                    <h2>Planning & Stratergye</h2>
                                    <p>This mistaken idea of denouncing pleasure and praising.</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="in col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <div class="progress-content">
                              <div class="progress-outer">
                                 <h5>96%</h5>
                                 <div class="progress">
                                    <div class="progress-bar progress-bar-info progress-bar-striped active" style="width:96%;;"></div>
                                    <div class="progress-value"></div>
                                 </div>
                                 <div class="content-inner">
                                    <h2>Process Consulting</h2>
                                    <p>This mistaken idea of denouncing pleasure and praising.</p>
                                 </div>
                              </div>
                              <div class="progress-outer">
                                 <h5>53%</h5>
                                 <div class="progress">
                                    <div class="progress-bar progress-bar-info progress-bar-striped active" style="width:53%; "></div>
                                    <div class="progress-value"></div>
                                 </div>
                                 <div class="content-inner">
                                    <h2>Information Security</h2>
                                    <p>This mistaken idea of denouncing pleasure and praising.</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div  class="responibility">
               <div class="container">
                  <div class="row heading-group">
                     <div class="col-lg-12">
                        <div class="heading">
                           <h1>Corporate <span>Responsibility</span></h1>
                        </div>
                        <p class="para">Delware Consulting understands that to help meet client challenges and opportunities successfully in a global economy</p>
                     </div>
                  </div>
                  <div class="row ">
                     <div class="tab-content-inner">
                        <ul class="nav nav-pills content-inner">
                           <li  class="column education active">
                              <a data-toggle="pill" href="#home">
                                 <div class="image">
                                    <img src="image/company-overview/svg/rating.svg"  class="logo" alt="logo" style="width:40px; margin-left:auto; margin-right:auto; display:block;" />
                                 </div>
                                 <h2>Education</h2>
                              </a>
                           </li>
                           <li class="column environment">
                              <a data-toggle="pill" href="#menu1">
                                 <div class="image">
                                    <img src="image/company-overview/svg/recycle.svg"  class="logo" alt="logo" style="width:40px; margin-left:auto; margin-right:auto; display:block;" />
                                 </div>
                                 <h2>Environment</h2>
                              </a>
                           </li>
                           <li class="column community">
                              <a data-toggle="pill" href="#menu2">
                                 <div class="image">
                                    <img src="image/company-overview/svg/solution.svg"  class="logo" alt="logo" style="width:40px; margin-left:auto; margin-right:auto; display:block;" />
                                 </div>
                                 <h2>Community</h2>
                              </a>
                           </li>
                        </ul>
                        <div class="tab-content">
                           <div id="home" class="tab-pane fade in active">
                              <p class="paragraph">Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a
                                 complete account of the system, and expound the actual teachings of the great explorer of the truth,
                                 the master-builder of human happiness. 
                              </p>
                              <p><a href="#">KNOW MORE</a></p>
                           </div>
                           <div id="menu1" class="tab-pane fade">
                              <p class="paragraph">Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a
                                 complete account of the system, and expound the actual teachings of the great explorer of the truth,
                                 the master-builder of human happiness. 
                              </p>
                              <p><a href="#">KNOW MORE</a></p>
                           </div>
                           <div id="menu2" class="tab-pane fade">
                              <p class="paragraph">Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a
                                 complete account of the system, and expound the actual teachings of the great explorer of the truth,
                                 the master-builder of human happiness. 
                              </p>
                              <p><a href="#">KNOW MORE</a></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="counter">
               <div class="container">
                  <div class="row">
                     <div class="count-lg col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="employees" >
                           <p><span class="counter-count">90</span> <i class="fas fa-plus"></i></p>
                           <p class="employee-p">Countries Served</p>
                        </div>
                     </div>
                     <div class="count-lg col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="customer">
                           <p><span class="counter-count">12</span> <a class="txt">K</a><i class="fas fa-plus in"></i></p>
                           <p class="employee-p">Consultants Worldwide</p>
                        </div>
                     </div>
                     <div class="count-lg col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="design">
                           <p><span class="counter-count">72</span> <i class="fas fa-plus"></i></p>
                           <p class="employee-p">Rewards and Accolades</p>
                        </div>
                     </div>
                     <div class="count-lg col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="order">
                           <p><span class="counter-count">20</span><i class="fas fa-plus"></i></p>
                           <p class="employee-p">Years in consulting</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
       
            <div class="opportunity">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 package-one">
                        <div class="inner-section">
                           <h2>For Business Process</h2>
                           <p>Call Us at <span><?php  echo $contact['PhoneNo']; ?> </span>or click below to get a quote</p>
                           <h6><a href="#" class="btn-1">Get a quote</a></h6>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 package-two">
                        <div class="inner-section">
                           <h2>Looking for a Job?</h2>
                           <p> We seeking a <span>motivated and passionate</span> person to join us</p>
                           <h6><a href="#" class="btn-2">Open Positions</a></h6>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
           <?php include'footer.php' ?> 
            <!------sec------------------------------------footerlast-end--------------------------------------->  
         </main>
      </div>
      
            <!--primary-mobile-nav-->
      <div class="primary-mobile-nav header-v1" id="primary-mobile-nav" role="navigation">
         <a href="#" class="close-canvas-mobile-panel">×</a>
         <ul id="primary-menu2" class="menu">
            <li class="dropdown-item current-menu-item menu-item-has-children">
               <a href="#">Home</a>
               <ul class="sub-menu">
                  <li><a href="index.html">Home 1</a></li>
                  <li><a href="home-page-2.html">Home 2</a></li>
                  <li><a href="home-page-3.html">Home 3</a></li>
                  <li><a href="home-page-4.html">Home 4</a></li>
                  <li><a href="home-page-5.html">Home 5</a></li>
                  <li><a href="home-page-6.html">Home 6</a></li>
               </ul>
            </li>
            <li class="dropdown-item  menu-item-has-children">
               <a href="#">About</a>
               <ul class="sub-menu">
                  <li><a href="company-overview.html">Company Overview</a></li>
                  <li><a href="mission&valves.html">Mission & Values</a></li>
                  <li><a href="faq.html">FAQ</a></li>
                  <li><a href="our-career.html">Our Career</a></li>
                  <li><a href="testimonial.html">Testimonials</a></li>
                  <li><a href="office-location.html">Office Location</a></li>
                  <li><a href="our-history.html">Our History</a></li>
               </ul>
            </li>
            <li class="dropdown-item  menu-item-has-children">
               <a href="#">Services</a>
               <ul class="sub-menu">
                  <li><a href="services.html">Services</a></li>
                  <li><a href="services-single.html">Services Single</a></li>
               </ul>
            </li>
            <li class="dropdown-item  menu-item-has-children">
               <a href="#">Our Cases</a>
               <ul class="sub-menu">
                  <li><a href="case-studies-1.html">Our Case 1</a></li>
                  <li><a href="case-studies-2.html">Our Case 2</a></li>
                  <li><a href="case-studies-3.html">Our Case 3</a></li>
                  <li><a href="case-studies-4.html">Our Case 4</a></li>
               </ul>
            </li>
            <li class="dropdown-item  menu-item-has-children">
               <a href="#">Blog</a>
               <ul class="sub-menu">
                  <li><a href="blog-default.html">Blog Default</a></li>
                  <li><a href="blog-fullwidth.html">Blog FullWidth</a></li>
                  <li><a href="bolg-masonary.html">Blog Masonry</a></li>
                  <li><a href="blog-with-sidebar.html">Blog With Sidebar</a></li>
                  <li><a href="blog-snigle-post.html">Single Post</a></li>
               </ul>
            </li>
            <li class="dropdown-item menu-item-has-children">
               <a href="#">Shop</a>
               <ul class="sub-menu">
                  <li><a href="shop-1.html">Checkout</a></li>
                  <li><a href="shop-2.html">My Account</a></li>
                  <li><a href="shop-3.html">Our Shop</a></li>
                  <li><a href="shop-4.html">Product Single</a></li>
                  <li><a href="shop-5.html">Shopping Cart</a></li>
               </ul>
            </li>
            <li><a href="contact.html">Contact</a></li>
         </ul>
      </div>
      <div id="off-canvas-layer" class="off-canvas-layer"></div>
      <!--primary-mobile-nav end-->
       <script src="js/jquery-2.2.4.min.js"></script>
      <script src="js/bootstrap.js"> </script>
      <script src="js/bootstrap.min.js"> </script>
       <!-- thm video script -->
      <script src="js/html5lightbox.js"></script>
      <script src="js/nav-scripts.min.js"></script>
      <script src="js/main.js"> </script>
       <script src="js/preload.js"></script>
      
   </body>
   </html>
     