<?php
session_start(); //Start the session
if(!isset($_SESSION["UserName"])){ //If session not registered
header("location:Login/login.php"); // Redirect to login.php page
}
else //Continue to current page
header( 'Content-Type: text/html; charset=utf-8' );



    include 'side-menu.php'
?>
			<!-- MAIN -->
            <div class="main">

<!-- MAIN CONTENT -->
<div class="main-content">
    <div class="container-fluid">
<div class="panel panel-profile">
<div class="clearfix">


<!-- TABBED CONTENT -->
<div class="custom-tabs-line tabs-line-bottom left-aligned">
    <ul class="nav" role="tablist">
        <li class="active"><a href="#tab-bottom-left1" role="tab" data-toggle="tab">All Projects</a></li>
        <li><a href="#tab-bottom-left1" role="tab" data-toggle="tab">Planting <span class="badge">7</span></a></li>
        <li><a href="#tab-bottom-left2" role="tab" data-toggle="tab">Garden Care <span class="badge">7</span></a></li>
        <li><a href="#tab-bottom-left3" role="tab" data-toggle="tab">Lawn Care  <span class="badge">7</span></a></li>
        <li><a href="#tab-bottom-left4" role="tab" data-toggle="tab">Weed Control <span class="badge">7</span></a></li>
    </ul>
</div>
<div class="tab-content">
    <div class="tab-pane fade in active" id="tab-bottom-left1">
    <div class="row">
            <div class="col-md-4">
                
                <div class="profile-header">
				<div class="overlay"></div>
				<div class="profile-main">
					<img src="assets/img/user-medium.png" class="img-circle" alt="Avatar">
					<h3 class="name">Samuel Gold</h3>
					<span class="online-status status-available">Available</span>
				</div></div>
                    
            
               
            </div>
            <div class="col-md-4">
                
                <div class="profile-header">
				<div class="overlay"></div>
				<div class="profile-main">
					<img src="assets/img/user-medium.png" class="img-circle" alt="Avatar">
					<h3 class="name">Samuel Gold</h3>
					<span class="online-status status-available">Available</span>
				</div></div>
                    
            
               
            </div>
            <div class="col-md-4">
                
                <div class="profile-header">
				<div class="overlay"></div>
				<div class="profile-main">
					<img src="assets/img/user-medium.png" class="img-circle" alt="Avatar">
					<h3 class="name">Samuel Gold</h3>
					<span class="online-status status-available">Available</span>
				</div></div>
                    
            
               
            </div>
    </div>
    </div>
    <div class="tab-pane fade" id="tab-bottom-left2">
    <div class="row">
            <div class="col-md-4">
                
                <div class="profile-header">
				<div class="overlay"></div>
				<div class="profile-main">
					<img src="assets/img/user-medium.png" class="img-circle" alt="Avatar">
					<h3 class="name">Samuel Golffd</h3>
					<span class="online-status status-available">Available</span>
				</div></div>
                    
            
               
            </div>
            <div class="col-md-4">
                
                <div class="profile-header">
				<div class="overlay"></div>
				<div class="profile-main">
					<img src="assets/img/user-medium.png" class="img-circle" alt="Avatar">
					<h3 class="name">Samuel Gold</h3>
					<span class="online-status status-available">Available</span>
				</div></div>
                    
            
               
            </div>
            <div class="col-md-4">
                
                <div class="profile-header">
				<div class="overlay"></div>
				<div class="profile-main">
					<img src="assets/img/user-medium.png" class="img-circle" alt="Avatar">
					<h3 class="name">Samuel Gold</h3>
					<span class="online-status status-available">Available</span>
				</div></div>
                    
            
               
            </div>
    </div>
    </div>
</div>
<!-- END TABBED CONTENT -->
</div>
<!-- END RIGHT COLUMN -->
</div>
</div>

    </div>
</div>
<!-- END MAIN CONTENT -->
</div>
<!-- END MAIN -->

<div class="clearfix"></div>
<footer>
<div class="container-fluid">
    <p class="copyright">&copy; 2017 <a href="https://www.themeineed.com/" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
</div>
</footer>
</div>
<!-- END WRAPPER -->

<!-- Javascript -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="assets/scripts/klorofil-common.js"></script>

</body>

<!-- Mirrored from demo.thedevelovers.com/dashboard/klorofil-v2.0/page-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Jul 2021 18:57:05 GMT -->
</html>