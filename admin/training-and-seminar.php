<?php
session_start(); //Start the session
if(!isset($_SESSION["UserName"])){ //If session not registered
header("location:Login/login.php"); // Redirect to login.php page
}
else //Continue to current page
header( 'Content-Type: text/html; charset=utf-8' );



include_once('../php/Traning.php');
    include 'side-menu.php';

     $traningObj = new traning();

     $accept = $traningObj->viewtraning();
     
    
    if (isset($_POST['Add'])) {  
        
       
        $photo= $_FILES['data']['name'];  
        $image= $_FILES['data']["tmp_name"]; 
       
        $title = $_POST["title"];  
        $description = $_POST["description"];
        $status = $_POST["status"];
        $date = $_POST["date"];
        $time = $_POST["time"];
        $dateTime = $date." ".$time;
      $traningObj->addTraning($title, $description, $status, $photo, $image, $dateTime);

     
    
       exit();
      }
        else if(isset($_POST['Update'])){
            if(($_FILES['dataUpdate']['name'])!=null){
            $photo= $_FILES['dataUpdate']['name'];  
            $image= $_FILES['dataUpdate']['tmp_name']; 
            }
            else{
                $photo="";
                $image="";
            }

			$ID = $_POST["idUpdate"];
            $path = $_POST["Path"]; 
			$title = $_POST["titleUpdate"];  
			$description = $_POST["descriptionUpdate"]; 
            $upcoming = $_POST["statusUp"]; 
           
			
		   $traningObj->updateTraining($ID, $title, $description, $upcoming, $photo, $image, $path);
		  
        }
        else if(isset($_POST['Remove'])){
			$ID = $_POST["idDelete"]; 
            $path = $_POST["PathDelete"]; 
			$traningObj->removetraning($ID, $path);
        }
?>


<!-- MAIN -->
<div class="main">

    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="panel panel-profile">
                <div class="clearfix">


                    <!-- TABBED CONTENT -->
                    <div class="row">
                        <div class="col-md-9">
                            <div class="custom-tabs-line tabs-line-bottom left-aligned">
                                <ul class="nav" role="tablist">
                                    <li class="active"><a href="#tab-bottom-left1" role="tab" data-toggle="tab">Upcoming
                                            Events</a></li>
                                    <li><a href="#tab-bottom-left2" role="tab" data-toggle="tab">Passed Events</a></li>


                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 pt-0">
                            <div class="panel-heading">
                                <div class=" navbar-btn-right">
                                    <a class="btn btn-success" href="#add" data-toggle="modal" name="Set"
                                        title="Add traning" onclick="openAdd()" title="Upgrade to Pro"><i
                                            class="fa fa-plus"></i> <span>Add New Training</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content">
                    <div class="tab-pane fade in active" id="tab-bottom-left1">
                    <div class="row">
<?php

                    $traningID = $accept[0];
                    $title = $accept[1];
                    $description = $accept[2];
                    $status = $accept[3];
                    $path = $accept[4];
                    $date = $accept[5];
                    for ($i = 0; $i < sizeof($traningID); $i++) {
                    
                            if($status[$i] == "Upcoming"){
                       
                               echo '<div class="col-md-4">';

                                    echo '<div class="profile-header">';
                                   
                                    echo '<div class="profile-main">';
                                            echo '<img src='.$path[$i].' alt="Avatar" style="width: -webkit-fill-available; height: -webkit-fill-available;">';
                                            echo '<h3 class="name">'.$title[$i].'</h3>';
                                            
                                          
                                            
                                      
                                    echo '</div>';

                                    echo '</div>';
                                   
                                   echo '<div class="profile-detail">';
                                        echo '<div class="profile-info">';
                                            echo '<h4 class="heading">'.$title[$i].'</h4>';
                                            echo '<p>'.$description[$i].'</p>';
  echo '   <a  name="Set" data-id="'.$traningID[$i].'" data-title="'.$title[$i].'" data-description="'.$description[$i].'" data-status="'.$status[$i].'" data-path="'.$path[$i].'" data-date="'.$date[$i].'" class="modal-trigger" title="show" style="margin-left:auto; " onclick="openModal2()"><i class="fa fa-edit" ></i></a>';
                                            echo '<a href="#modal3" data-toggle="modal" name="Set" data-id="'.$traningID[$i].'" data-path="'.$path[$i].'" class="modal-trigger"><i class="fa fa-remove" onclick="openModal3()"></i></a>';
                                        echo '</div>';


                                   echo '</div>';
                                    



                               echo '</div>';

                            }
                    }
                    ?>   </div>
                        </div>
                        <!-- //////// -->

                        <div class="tab-pane fade" id="tab-bottom-left2">
                            <div class="row">
                            <?php

$traningID = $accept[0];
$title = $accept[1];
$description = $accept[2];
$status = $accept[3];
$path = $accept[4];
$date = $accept[5];
for ($i = 0; $i < sizeof($traningID); $i++) {
    if($status[$i] == "Passed"){
        echo '<div class="col-md-4">';

        echo '<div class="profile-header">';
       
        echo '<div class="profile-main">';
                echo '<img src='.$path[$i].' alt="Avatar" style="width: -webkit-fill-available; height: -webkit-fill-available;">';
                echo '<h3 class="name">'.$title[$i].'</h3>';
               
          
        echo '</div>';

        echo '</div>';
       
       echo '<div class="profile-detail">';
            echo '<div class="profile-info">';
                echo '<h4 class="heading">'.$title[$i].'</h4>';
                echo '<p>'.$description[$i].'</p>';
  echo '   <a  name="Set" data-id="'.$traningID[$i].'" data-title="'.$title[$i].'" data-description="'.$description[$i].'" data-status="'.$status[$i].'" data-path="'.$path[$i].'" data-date="'.$date[$i].'" class="modal-trigger" title="show" style="margin-left:auto; " onclick="openModal2()"><i class="fa fa-edit" ></i></a>';
                                            echo '<a href="#modal3" data-toggle="modal" name="Set" data-id="'.$traningID[$i].'" data-path="'.$path[$i].'" class="modal-trigger"><i class="fa fa-remove" onclick="openModal3()"></i></a>';
            echo '</div>';


       echo '</div>';
        



   echo '</div>';

}
}
?>   </div>
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
<div class="modal" id="modal" tabindex="-1" role="dialog" aria-hidden="true" style="display:none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Add traning</h3>

                </div>

                <div class="panel-body">
                    <form method="post" enctype="multipart/form-data" action="training-and-seminar.php">

                        <label style="font-weight:100"> Photo </label>
                        <input type="file" class="form-control" placeholder="Photo" name="data"><br>
                        <input type="text" class="form-control" placeholder="Title" name="title"><br>
                        <!-- <input type="date" id="date" class="form-control" placeholder="Date" name="Date"><br> -->
                        <select class="form-control" name="status">
                            <option value="none">Event Type</option>
                            <option value="Upcoming">Upcoming</option>
                            <option value="Passed">Passed</option>

                        </select><br>
                        <textarea class="form-control" name="description" placeholder="Description"
                            rows="4"></textarea><br>
                            <label style="font-weight:100"> Event Date </label>
                            <input type="date" class="form-control" placeholder="Date" name="date"><br>
                            <input type="time" class="form-control" placeholder="Time" name="time"><br>
                        


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
                        <h3 class="panel-title">Update Training</h3>

                    </div>

                    <div class="panel-body">
                        <form method="post" enctype="multipart/form-data" action="training-and-seminar.php">
                        <input type="text" id="ID" class="form-control" placeholder="ID" name="idUpdate" readonly><br>
						<label style="font-weight:100"> Photo </label>
                        <input type="file" id="photo" class="form-control" placeholder="Title" name="dataUpdate"><br>
                        <input type="text" id="path" class="form-control" placeholder="Path" name="Path" readonly><br>
                        <input type="text" id="titleUp" class="form-control" placeholder="Title" name="titleUpdate"><br>
                        <textarea class="form-control" id="description" name="descriptionUpdate" placeholder="descriptionUpdate"
                                rows="4"></textarea><br>
                                <select class="form-control" name="statusUp" id="statusUp">
                            <option value="none">Event Type</option>
                            <option value="Upcoming">Upcoming</option>
                            <option value="Passed">Passed</option>

                        </select><br>
                       
                          
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
                        <h3 class="panel-title">Remove Training</h3>

                    </div>

                    <div class="panel-body">
                        <form method="post" enctype="multipart/form-data" action="training-and-seminar.php">
						<input type="text" id="idDelete" class="form-control" placeholder="ID" name="idDelete" readonly><br>
                        <input type="text" id="pathDelete" class="form-control" placeholder="PathDelete" name="pathDelete" readonly><br>
                        
                          
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
(function() {
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
                name: 'series-traningion',
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
            'series-traningion': {
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
    var status = $(this).data('status');
    var path = $(this).data('path');
    var date = $(this).data('date');

    $(".modal-content #ID").val(ID);
    $("#idDelete").val(ID);
    $("#titleUp").val(title);
    $("#description").val(description);
    $("#statusUp").val(status);
    $(".modal-content #path").val(path);
    $("#pathDelete").val(path);
    $("#date").val(date);
    //document.getElementById("photo").src=photo;
});


function openAdd() {
    var modal = document.getElementById("modal");
    modal.style.display = "block";
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

<!-- Mirrored from demo.thedevelovers.com/dashboard/klorofil-v2.0/page-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Jul 2021 18:57:05 GMT -->

</html>