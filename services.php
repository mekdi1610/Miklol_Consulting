<?php 
require('php/front.php'); 
$front = new FrontEnd();
$contact=$front->contact();
$service=$front->services();
?>
<!doctype html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>Miklol Consulting & Research</title>
       <link type="text/css" rel="stylesheet" href="homepage2/css/style1.css" />
    <link rel="stylesheet" type="text/css" href="homepage2/css/navbar.css" />
      <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
      <link type="text/css" rel="stylesheet" href="css/responsive.css"/>
      <link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
      <link href="css/inner-page-style.css" rel="stylesheet" type="text/css" />
      <!-- Libraries CSS Files -->
      <link href="css/font-awesome.css" rel="stylesheet">
      <link href="css/flaticon.css" rel="stylesheet">
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
                  <div class="featured-image" style="background:url(image/key.jpg); background-position: center; background-size: cover;">
                     <div class="container">
                        <div class="row">
                           <div class="heading">
                              <h1>Services</h1>
                           </div>
                           <div class="bread-cumb-inner">
                              <ul class="breadcrumb">
                                 <li class="active"><a href="#">Home</a></li>
                                 <li><a>Service</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="our-services-section">
               <div class="container">
                  <div class="row">
                  <?php while ($row = $service->fetch()){ ?>
                     <div style="height:318px;" class="col-md-4 col-xs-12 col-sm-6">
                        <div class="service-1">
                           <div class="image-1">
                              <img src="image/service/1.png" class="img-responsive" alt="product-image">
                              <div class="overlay-1">
                                 <div class="text-1">
                                    <span class="flaticon-powerpoint service"></span>
                                    <p> <?php echo $row['Title']; ?></p>
                                 </div>
                              </div>
                           </div>
                           <div class="txt-inner">
                              <span class="flaticon-powerpoint service-in"></span>
                              <div class="text-in-inner">
                                 <h2><?php echo $row['Title']; ?></h2>
                                 <p>Committed to clients success, our professionals risks and opportunities.</p>
                                 <h6> <a href="">Read More<i class="fas fa-arrow-right"></i></a></h6>
                              </div>
                           </div>
                        </div>
                     </div>
                     <?php } ?>
                  </div>
               </div>
            </div>
             <div class="last-section">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                        <div class="inner-content">
                           <h1>Request a <span>call Back</span></h1>
                           <p>Thank you for your interest in DelWare. Please fill out the form below to ask a question. We will get back to you with 1-2 business days.</p>
                        </div>
                     </div>
                     <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                        <div class="form-outer">
                           <form method="post" action="sendemail.php" id="contact-form">
                              <div class="row">
                                 <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                                    <div class="form-group topin in">
                                       <select id="comparison" name="optselect" class="form-control select">
                                          <option value="Finance & Restructuring">Finance & Restructuring</option>
                                          <option value="Strategic Planning">Strategic Planning</option>
                                          <option value="Marketing & Sales">Marketing & Sales</option>
                                          <option value="Strategic Communications">Strategic Communications</option>
                                          <option value="Trades & Stocks">Trades & Stocks</option>
                                          <option value="Audit & Assurance">Audit & Assurance</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                                    <div class="form-group topin">
                                       <input  name="firstname" type="text" placeholder="First name*" class="form-control" required="required">
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                                    <div class="form-group">
                                       <input  name="phone" type="text" placeholder="Phone Number*" class="form-control" required="required">
                                    </div>
                                 </div>
                                 <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                                    <div class="form-group">
                                       <button  class="btn btn-default">Send Now</button>
                                    </div>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
           <?php include'footer.php' ?>
      <!--primary-mobile-nav end-->
        <script src="js/jquery-2.2.4.min.js"></script>
      <script src="js/bootstrap.js"> </script>
      <script src="js/bootstrap.min.js"> </script>
      <!-- script JS  -->
      <script src="js/nav-scripts.min.js"></script>
      <!-- thm video script -->
      <script src="js/html5lightbox.js.download"></script>

      <script type="text/javascript" src="owl/assets/owl.carousel.js"></script>
      <!--Google Map APi Key-->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHzPSV2jshbjI8fqnC_C4L08ffnj5EN3A"></script>
      <script src="js/gmaps.js"></script>
      <script src="js/map-script.js"></script>
      <!--End Google Map APi-->
      <script src="js/main.js"> </script> 
      <script src="js/preload.js"></script>
   </body>
</html>