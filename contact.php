<?php require('php/front.php');  ?>
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
                           <h1>Contact Us</h1>
                        </div>
                        <div class="bread-cumb-inner">
                           <ul class="breadcrumb">
                              <li class="active"><a href="#">Home</a></li>
                              <li>Contact Us</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="contact-outer">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="contact-address">
                        <div class="heading">
                           <h2>Contact <span>Our Office</span></h2>
                           <p>If you have any querry for related Consulting… We are available</p>
                        </div>
                        <div class="location-inner">
                           <div class="row inner-loc">
                              <div class="col-sm-12 col-sm-6 col-md-6 col-lg-6 head">
                                 <h1><span>200+</span> Branches Worldwide.</h1>
                              </div>
                              <div class="top-col in col-sm-12 col-sm-6 col-md-6 col-lg-6">
                                 <div class="input-group tab">
                                    
                                 </div>
                              </div>
                           </div>
                          
                           <div class="row">
                              <div class= "top-col-1 ">
                                 <div id="washroomtypeselect1" >
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-sm-12">
                                       <div class="input-group left">
                                          <h2>Addis Ababa</h2>
                                          <p> <?php echo $contact['Address']; ?> </p>
                                       </div>
                                    </div>
                                    
                                 </div>
                                 
                              </div>
                           </div>
                        </div>
                        <div class="troll-free">
                           <ul>
                              <li><span>Toll Free:</span> <?php echo $contact['PhoneNo']; ?></li>
                              <li><span> Mail Us at:</span> Supportyou@Miklol.com</li>
                           </ul>
                        </div>
                     </div>
                     <div class="contact-form">
                        <div class="heading">
                           <h2>Send <span>Message Us</span></h2>
                        </div>
                        <div class="form">
                           <form  method="post"  action="sendemail.php" id="contact-form"  onSubmit=" location.href = 'success.html' + document.getElementById('username').value; return false;">
                              <div class="row">
                                 <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                       <input type="text" name="name" class="form-control"  placeholder="Name*" required data-error="NEW ERROR MESSAGE">
                                    </div>
                                 </div>
                                 <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                       <input type="text" name="phone" class="form-control"  placeholder="Phone*" required>
                                    </div>
                                 </div>
                                 <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                       <input type="email" name="email" class="form-control"  placeholder="Email*" required>
                                    </div>
                                 </div>
                                 <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group in-sec">
                                       <select name="dropdown" class="form-control select" >
                                          <option value="pre">Preffered Time</option>
                                          <option value="lo">Location</option>
                                          <option value="lo">Location</option>
                                          <option value="lo">Location</option>
                                          <option value="lo">Location</option>
                                          <option value="lo">Locationa</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                       <textarea name="message"  class="form-control mes" rows="2" placeholder="Message..." required></textarea>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-xs-12">
                                    <div class="form-group">
                                       <button type="submit" class="btn btn-default ">Submit</button>
                                    </div>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--Map Section-->
         <section class="map-section contact">
            <div class="container">
               <!--Map Outer-->
               <div class="map-outer">
                  <div class="google-map"
                     id="contact-google-map" 
                     data-map-lat="44.231172" 
                     data-map-lng="-76.485954" 
                     data-icon-path="image/icons/map-marker.png" 
                     data-map-title="Alabama, USA" 
                     data-map-zoom="12" 
                     data-markers='{
                     "marker-1": [42.231172, -84.485954, "<h4>Branch Office</h4><p>4/99 Alabama, USA</p>"],
                     "marker-2": [44.231172, -76.485954, "<h4>Branch Office</h4><p>4/99 Alabama, USA</p>"],
                     "marker-3": [40.880550, -78.393705, "<h4>Branch Office</h4><p>4/99 Pennsylvania, USA</p>"]
                     }'>
                  </div>
               </div>
            </div>
         </section>
         <!--End Map Section-->
        <?php include'footer.php' ?>
      <!--primary-mobile-nav end-->
       <script src="js/jquery-2.2.4.min.js"></script>
      <script src="js/bootstrap.js"> </script>
      <script src="js/bootstrap.min.js"> </script>
      
      <script src="js/main.js"> </script>
      <script type="text/javascript" src="js/validator.min.js"></script>
      <!-- script JS  -->
      <script src="js/nav-scripts.min.js"></script>
      <!-- thm video script -->
      <script src="js/html5lightbox.js.download"></script>
      <!--=========================================back-to-top================================-->
      
      <script type="text/javascript" src="owl/assets/owl.carousel.js"></script>
      <!--Google Map APi Key-->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHzPSV2jshbjI8fqnC_C4L08ffnj5EN3A"></script>
      <script src="js/gmaps.js"></script>
      <script src="js/map-script.js"></script>
      <!--End Google Map APi-->
       <script src="js/preload.js"></script>
   </body>
   </html>