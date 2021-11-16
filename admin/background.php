<?php
include 'side-menu.php'
?>
<div class="main">

<!-- MAIN CONTENT -->
<div class="main-content">
    <div class="container-fluid">
    <div class="panel panel-headline">
        <div class="row"> 
            <div class="col-md-6 pa-5">
						<div class="panel-heading">
							<h3 class="panel-title">Background</h3>
							<!-- <p class="panel-subtitle">Period: Oct 14, 2016 - Oct 21, 2016</p> -->
                           
						</div>
            </div>
            <div class="col-md-6 pa-5">
                        <div class="panel-heading">
                        <div class=" navbar-btn-right">
					<a class="btn btn-success update-pro" href="" title="Upgrade to Pro" ><i class="fa fa-plus"></i> <span>Add New Background</span></a>
				        </div></div>
            </div>
        </div>
                        <div class="panel-body">
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
<script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="assets/vendor/chartist/js/chartist.min.js"></script>
<script src="assets/scripts/klorofil-common.js"></script>


<script>
$(function() {
var data, options;

// headline charts
data = {
labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
series: [
    [23, 29, 24, 40, 25, 24, 35],
    [14, 25, 18, 34, 29, 38, 44],
]
};

options = {
height: 300,
showArea: true,
showLine: false,
showPoint: false,
fullWidth: true,
axisX: {
    showGrid: false
},
lineSmooth: false,
};

new Chartist.Line('#headline-chart', data, options);


// visits trend charts
data = {
labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
series: [
    {
        name: 'series-real',
        data: [200, 380, 350, 320, 410, 450, 570, 400, 555, 620, 750, 900],
    },
    {
        name: 'series-projection',
        data: [240, 350, 360, 380, 400, 450, 480, 523, 555, 600, 700, 800],
    }
]
};

options = {
fullWidth: true,
lineSmooth: false,
height: "270px",
low: 0,
high: 'auto',
series: {
    'series-projection': {
        showArea: true,
        showPoint: false,
        showLine: false
    },
},
axisX: {
    showGrid: false,

},
axisY: {
    showGrid: false,
    onlyInteger: true,
    offset: 0,
},
chartPadding: {
    left: 20,
    right: 20
}
};

new Chartist.Line('#visits-trends-chart', data, options);


// visits chart
data = {
labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
series: [[6384, 6342, 5437, 2764, 3958, 5068, 7654]]
};

options = {
height: 300,
axisX: {
    showGrid: false
},
};

new Chartist.Bar('#visits-chart', data, options);


// real-time pie chart
var sysLoad = $('#system-load').easyPieChart({
size: 130,
barColor: function(percent) {
    return "rgb(" + Math.round(200 * percent / 100) + ", " + Math.round(200 * (1.1 - percent / 100)) + ", 0)";
},
trackColor: 'rgba(245, 245, 245, 0.8)',
scaleColor: false,
lineWidth: 5,
lineCap: "square",
animate: 800
});

var updateInterval = 3000; // in milliseconds

setInterval( function() {
var randomVal;
randomVal = getRandomInt(0, 100);

sysLoad.data('easyPieChart').update(randomVal);
sysLoad.find('.percent').text(randomVal);
}, updateInterval);

function getRandomInt(min, max) {
return Math.floor(Math.random() * (max - min + 1)) + min;
}

});
</script>

</body>

<!-- Mirrored from demo.thedevelovers.com/dashboard/klorofil-v2.0/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Jul 2021 18:56:10 GMT -->
</html>