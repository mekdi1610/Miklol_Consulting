<?php 
$front = new FrontEnd();
$contact=$front->contact();

?>
<div class="preloader" id="preloader"></div>
      <div id="page" class="page-wrapper header-sticky header-v1 hide-topbar-mobile header-sticky">
         <div class="wapper">
            <!----------------------------------------wapper---------------------------------------------->
            <div class="top">
               <div  class="container">
                  <div class="row ">
                     <div class="col-lg-5 col-md-5 col-xs-12 col-sm-12 top-in">
                        <div class="top-left-inner">
                           <p class="icn">
                              <img src="image/svg1/ok-mark.svg" class="ok-mark" alt="img">
                           </p>
                           <p class="txt">We are a global management consulting firm.. <span>Know more..</span></p>
                        </div>
                     </div>
                     <div class="col-inner col-lg-7 col-md-7 col-xs-12 col-sm-12 top-in">
                        <div class="top-right-inner">
                           <p class="para in"> <a href="contact.php"> Get Support</a></p>
                           <p class="para in"> <a href="contact.php"> Feedbacks </a></p>
                           
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="top-header">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-2 col-md-2 col-xs-12 col-sm-12">
                        <div class="logo">
                            <a href="index.html"><img style="width: auto;" src="image/miklol.svg"  class="image-responsive" alt="logo" width="161" height="42" /></a>
                        </div>
                     </div>
                     <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                        <div class="right-header">
                           <div class="header-info">
                              <div class="info-inner ">
                                 <span class="icontop ">
                                    <img src="image/svg1/phone-call.svg" class="icon-top-head" alt="img">
                                 </span>
                                 <span class="iconcont"><?php echo $contact['PhoneNo']; ?><br><a>Any quries? Call us.</a></span>
                              </div>
                              <div class="info-inner ">
                                 <span class="icontop"><img src="image/svg1/placeholder.svg" class="icon-top-head" alt="img"></span>
                                 <span class="iconcont"><?php $adress= $contact['Address']; $text_line = explode("floor",$adress);

print $text_line[0]; ?><br><a> <?php print $text_line[1]; ?></a></span>

                              </div>
                              <div class="info-inner">
                                 <span class="button"><a href="#">Get a Quote</a></span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- masthead -->

            <header id="masthead" class="site-header clearfix">
               <div class="header-main">
                  <div class="container">
                     <div class="row">
                        <div class="site-logo col-md-3 col-sm-6 col-xs-6">
                           <a href="index.php" class="logo">
                              <img style="height: auto;" src="image/miklol.png" class="logo-dark show-logo"  alt="img"/>
                           </a>
                           <h1 class="site-title"><a href="#">FactoryPlus</a></h1>
                           <h2 class="site-description">Just another Steel Themes Sites site</h2>
                        </div>
                        <div class="site-menu col-md-12 col-sm-6 col-xs-6">
                           <div class="navbar-toggle toggle-navs">
                              <a href="#" class="navbars-icon selected-mobile">
                              <i class="fa fa-bars" aria-hidden="true"></i>
                              </a>
                           </div>
                           <nav id="site-navigation" class="main-nav primary-nav nav">
                           <ul id="primary-menu" class="menu">
                              <li class="dropdown-item">
                                 <a href="index.php">Home</a>
                                 
                              </li>
                              <li class="dropdown-item">
                                 <a href="company-overview.php">About</a>
                              </li>
                              <li class="dropdown-item current-menu-item">
                                 <a href="services.php">Services</a>
                              </li>
                              <li><a href="contact.php">Contact</a></li>
                           </ul>
                           <ul class="extra-menu-item menu-item-button-link pull-right">
                              <li class="in"><a><i class="fab fa-facebook-f"></i></a></li>
                              <li class="in"><a><i class="fab fa-twitter"></i></a></li>
                              <li class="in"><a><i class="fab fa-google-plus-g"></i></a></li>
                              <li class="in"><a><i class="fab fa-linkedin-in"></i></a></li>
                           </ul>
                        </nav>
                        </div>
                     </div>
                  </div>
               </div>
            </header>
            <!-- masthead end -->
         </div>
