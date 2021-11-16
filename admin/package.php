<?php
session_start(); //Start the session
if(!isset($_SESSION["UserName"])){ //If session not registered
header("location:Login/login.php"); // Redirect to login.php page
}
else //Continue to current page
header( 'Content-Type: text/html; charset=utf-8' );



    include_once('../php/Package.php');
    include 'side-menu.php';

    $packageObj = new Package();

    $accept = $packageObj->viewPackage();

    
    if (isset($_POST['Add'])) {     
        $title = $_POST["title"];  
        $description = $_POST["description"]; 
        $price = $_POST["price"]; 
       $saved= $packageObj->addPackage($title,$description,$price);
      
        exit();
      }
        else if(isset($_POST['Update'])){
			$ID = $_POST["idUpdate"]; 
			$title = $_POST["titleUpdate"];  
			$description = $_POST["descriptionUpdate"]; 
            $price = $_POST["priceUpdate"]; 
			
		   $packageObj->updatePackage($ID, $title, $description);
		  
        }
        else if(isset($_POST['Remove'])){
			$ID = $_POST["idRemove"]; 
			$packageObj->removePackage($ID);
        }
      
?>
<style>
    .containerrr {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
 
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.containerrr:hover  {
  
  
  
 
  bottom: 0;
  left: 0;
  opacity: 1;
  border:1px solid rgba(255,201,5);
}

.containerrr:hover .middle {
  opacity: 1;
  background-color: rgba(0, 0, 0);
}
    </style>
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="panel panel-headline">
                <div class="row">
                    <div class="col-md-6 pa-5">
                        <div class="panel-heading">
                            <h3 class="panel-title">Packages</h3>
                            <!-- <p class="panel-subtitle">Period: Oct 14, 2016 - Oct 21, 2016</p> -->

                        </div>
                    </div>
                    <div class="col-md-6 pa-5">
                        <div class="panel-heading">
                            <div class=" navbar-btn-right">
                                <a class="btn btn-success" href="#add" data-toggle="modal" name="Set"
                                    title="Add Package" onclick="openAdd()" title="Upgrade to Pro"><i
                                        class="fa fa-plus"></i> <span>New Package</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
				<table class="table table-hover">
						<thead>
							<tr><th>#</th><th>Title</th><th>Description</th><th>Price</th>
						</thead>
						<tbody>
                        <?php
                                            $PackageID = $accept[0];
											$title = $accept[1];
											$description = $accept[2];
                                            $price = $accept[3];
                for ($i = 0; $i < sizeof($PackageID); $i++) {
					echo '<tr>';
							echo "<td>".$PackageID[$i]."</td>";
                            echo '<td>'.$title[$i].'</td>';
                            echo '<td>'.$description[$i].'</td>';
                            echo '<td>'.$price[$i].'</td>';
							echo '<td><a href="#modal2" data-toggle="modal" name="Set" data-id="'.$PackageID[$i].'" data-title="'.$title[$i].'" data-description="'.$description[$i].'" data-price="'.$price[$i].'" class="modal-trigger"><i class="fa fa-edit" onclick="openModal2()"></i></a></td>';
							echo '<td><a href="#modal3" data-toggle="modal" name="Set" data-id="'.$PackageID[$i].'" data-title="'.$title[$i].'" class="modal-trigger"><i class="fa fa-remove" onclick="openModal3()"></i></a></td>';
                           echo '</tr>';
                 } 
				 ?>
				 </tbody>
				</table>
				


                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- END MAIN CONTENT -->

    <div class="modal" id="add" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Add Package</h3>

                    </div>

                    <div class="panel-body">
                        <form method="post" enctype="multipart/form-data" action="package.php">

                            <input type="text" class="form-control" name="title" placeholder="Title"><br>

                            <textarea class="form-control" name="description" placeholder="Description"
                                rows="4"></textarea><br>
                            <input type="text" class="form-control" name="price" placeholder="Price"><br>

                            <div class="navbar-btn-right">
                               
                                <button class="btn btn-success" type="submit" name="Add">Save</button>
                                <button class="btn btn-danger" onclick="closeAdd()">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MAIN -->

<div class="modal" id="modal2" tabindex="-1" role="dialog" aria-hidden="true" style="display:none;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Update Package</h3>

                    </div>

                    <div class="panel-body">
                        <form method="post" enctype="multipart/form-data" action="stories.php">
						<input type="text" id="ID" class="form-control" placeholder="ID" name="idUpdate" readonly><br>

                            <input type="text" id="title" class="form-control" name="titleUpdate" placeholder="Title"><br>

                            <textarea class="form-control" id="description" name="descriptionUpdate" placeholder="Description"
                                rows="4"></textarea><br>
                                <input type="text" class="form-control" id="price" name="priceUpdate" placeholder="Price"><br>

                            <div class="navbar-btn-right">
                               
                                <button class="btn btn-success" type="submit" name="Update">Save</button>
                                <button class="btn btn-danger" onclick="closeAdd()">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MAIN -->

<div class="modal" id="modal3" tabindex="-1" role="dialog" aria-hidden="true" style="display:none;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Remove Package</h3>

                    </div>

                    <div class="panel-body">
                        <form method="post" enctype="multipart/form-data" action="stories.php">
						<input type="text" id="ID" class="form-control" placeholder="ID" name="idRemove" readonly><br>

                          
                           <div class="navbar-btn-right">
                               
                                <button class="btn btn-danger" type="submit" name="Remove">Remove</button>
                                <button class="btn btn-success" onclick="closeAdd()">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MAIN -->



<div class="clearfix"></div>
<footer>
    <div class="container-fluid">
        <p class="copyright">&copy; 2017 <a href="https://www.themeineed.com/" target="_blank">Theme I Need</a>. All
            Rights Reserved.</p>
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
        series: [{
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
        series: [
            [6384, 6342, 5437, 2764, 3958, 5068, 7654]
        ]
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
            return "rgb(" + Math.round(200 * percent / 100) + ", " + Math.round(200 * (1.1 -
                percent / 100)) + ", 0)";
        },
        trackColor: 'rgba(245, 245, 245, 0.8)',
        scaleColor: false,
        lineWidth: 5,
        lineCap: "square",
        animate: 800
    });

    var updateInterval = 3000; // in milliseconds



    function getRandomInt(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }

});

      //To display all the values from database on the update dialog box
      $(document).on("click", ".modal-trigger", function() {
        var ID = $(this).data('id');
        var title = $(this).data('title');
        var description = $(this).data('description');
        var price = $(this).data('price');
        
        $(".modal-content #ID").val(ID);
        $("#title").val(title);
        $("#description").val(description);
        $("#price").val(price);
        //document.getElementById("photo").src=photo;
      });
    

function openAdd() {
    var add = document.getElementById("add");
    add.style.display = "block";
}

function openModal() {
    var modal = document.getElementById("modal");
    modal.style.display = "block";
}

function openModal2() {
    var modal = document.getElementById("modal2");
    modal.style.display = "block";
}

function closeAdd2() {
    var modal = document.getElementById("modal2");
    add.style.display = "none";
}

function openModal3() {
    var modal = document.getElementById("modal3");
    modal.style.display = "block";
}

function closeAdd3() {
    var modal = document.getElementById("modal3");
    add.style.display = "none";
}
</script>

</body>

<!-- Mirrored from demo.thedevelovers.com/dashboard/klorofil-v2.0/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Jul 2021 18:56:10 GMT -->

</html>