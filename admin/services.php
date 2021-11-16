<?php
    session_start(); //Start the session
    if(!isset($_SESSION["UserName"])){ //If session not registered
    header("location:Login/login.php"); // Redirect to login.php page
    }
    else //Continue to current page
    header( 'Content-Type: text/html; charset=utf-8' );

    include_once('../php/Service.php');
    include 'side-menu.php';

    $serviceObj = new Service();

    $accept = $serviceObj->viewService();

    
    if (isset($_POST['Add'])) {     
        $title = $_POST["title"];  
       $serviceObj->addService($title);
      
        exit();
      }
        else if(isset($_POST['Update'])){
            $id = $_POST["ID"];
            $title = $_POST["title"];
    
            $serviceObj->updateService($id,$title);

        }
        else if(isset($_POST['Remove'])){
            console.log("ppp");
            $id = $_POST["ID"];
           $serviceObj->removeService($id);
        }
      
?>
<style>
.box {
    /* color: #fff; */
    /* background: #2b3c4e; */
    font-family: 'Ubuntu', sans-serif;
    overflow: hidden;
    position: relative;
    transition: all 0.3s ease-in-out;
    border: 2px;
    height: 200px;
    padding: 10px;
    margin: 6px;
}

.box:hover {
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
}

.box img {
    width: 100%;
    height: auto;
    transition: all 0.3s ease;
}

.box:hover img {
    opacity: 0.6;
    filter: grayscale(100%);
}

.box .box-content {
    color: #fff;
    background: grey;
    text-align: right;
    width: 100%;
    padding: 15px 15px 15px 60px;
    transform: translateY(-50%) scaleY(0);
    position: absolute;
    top: 50%;
    right: 0;
    transition: all 0.3s ease-in-out;
}

.box:hover .box-content {
    transform: translateY(-50%) scaleY(1);
}

.box .title {
    font-size: 20px;
    font-weight: 800;
    letter-spacing: 1px;
    text-transform: uppercase;
    margin: 0 0 4px;
}

.box .post {
    font-size: 15px;
    font-style: italic;
    text-transform: capitalize;
    margin: 0 0 5px;
    display: block;
}

.box .icon {
    padding: 0;
    margin: 0;
    list-style: none;
    transform: translate(-100%, -50%);
    position: absolute;
    top: 50%;
    left: 0;
    transition: all 0.3s ease-in-out;
}

.box:hover .icon {
    transform: translate(0, -50%);
}

.box .icon li a {
    color: #222f3d;
    background: #fff;
    font-size: 20px;
    text-align: center;
    line-height: 40px;
    height: 40px;
    width: 40px;
    display: block;
    transition: all 0.3s ease;
}

.box .icon li a:hover {
    box-shadow: 0 0 5px #222f3d inset;
}

@media only screen and (max-width:990px) {
    .box {
        margin: 0 0 30px;
    }
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
                            <h3 class="panel-title">Services</h3>
                            <!-- <p class="panel-subtitle">Period: Oct 14, 2016 - Oct 21, 2016</p> -->

                        </div>
                    </div>
                    <div class="col-md-6 pa-5">
                        <div class="panel-heading">
                            <div class=" navbar-btn-right">
                                <a class="btn btn-success" href="#add" data-toggle="modal" name="Set"
                                    title="Add service" onclick="openAdd()" title="Upgrade to Pro"><i
                                        class="fa fa-plus"></i> <span>New Service</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-body">

                    <div class="row">

                        <?php
                                            $serviceID = $accept[0];
											$title = $accept[1];
                for ($i = 0; $i < sizeof($serviceID); $i++) {
             
echo '<div class="col-md-4 col-sm-6">';

echo '<div class="box">';

             echo '<h3 class="title">'.$title[$i].'</h3>';
echo '  <div class="box-content">';
echo '      <h3 class="title">Service</h3>';
echo '      <span class="post">"'.$title[$i].'"</span>';
echo '  </div>';
echo '  <ul class="icon">';
echo '   <li><a  name="Set" data-id="'.$serviceID[$i].'" data-title="'.$title[$i].'" class="modal-trigger" title="show" style="margin-left:auto; " onclick="openEdit()"><i class="fa fa-edit" ></i></a></li>';
echo '   <li><a   data-id='.$serviceID[$i].' data-title="'.$title[$i].'" class="modal-trigger-remove" title="show" style="margin-left:auto; " onclick="removeService()"><i class="fa fa-remove" > </i></a></li>';
echo ' </ul>';
echo '  </div>';
echo '  </div>';
            
                 } ?>


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
                        <h3 class="panel-title">Add Service</h3>

                    </div>

                    <div class="panel-body">
                        <form method="post" enctype="multipart/form-data" action="services.php">

                            <input type="text" class="form-control" name="title" placeholder="Title"><br>
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

    <div class="modal" id="update" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Edit Service</h3>

                    </div>

                    <div class="panel-body">
                        <form method="post" enctype="multipart/form-data" action="services.php">

                            <input type="text" id="ID" name="ID" class="form-control" ><br>
                            <input type="text" id="title" class="form-control" name="title" placeholder="Title"><br>
                            <div class="navbar-btn-right">

                                <button class="btn btn-success" type="submit" name="Update">Save</button>

                                <button class="btn btn-danger" onclick="closeAdd()">Cancel</button>
                                <button class="btn btn-danger" typr="submit" name="Remove">Delete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="remove" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Delete Service</h3>

                    </div>

                    <div class="panel-body">
                        <form method="post" enctype="multipart/form-data" action="services.php">

                            <input type="hidden" id="ID" name="ID" class="form-control" ><br>
                            Are you sure you want to delete <strong><input type="text" id="ServiceTitle" style="border:none; outline:none;" name="ServiceTitle"></strong><br>

                         
 
                            <div class="navbar-btn-right">

                                

                                <button class="btn btn-danger" onclick="closeAdd()">Cancel</button>
                                <button class="btn btn-success" type="submit" name="Remove">Delete</button>
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

function openAdd() {
    var add = document.getElementById("add");
    add.style.display = "block";
}

function openEdit() {
    var update = document.getElementById("update");
    update.style.display = "block";
}

function openModal() {
    var modal = document.getElementById("modal");
    modal.style.display = "block";
}

function closeAdd() {
    var modal = document.getElementById("add");
    add.style.display = "none";
}

function removeService(){
 
  
    var remove = document.getElementById("remove");
    remove.style.display = "block";
   
}


$(document).on("click", ".modal-trigger-remove", function() {
    var ID = $(this).data('id');
    var title = $(this).data('title');
console.log("Title",title)
    $(".modal-content #ID").val(ID);
    $("#ServiceTitle").val(title);
    console.log("Datas", ID)
  
});

$(document).on("click", ".modal-trigger", function() {
    var ID = $(this).data('id');
    var title = $(this).data('title');

    console.log("Datas", ID)
    $(".modal-content #ID").val(ID);
    $("#title").val(title);
   

    
});
</script>

</body>

<!-- Mirrored from demo.thedevelovers.com/dashboard/klorofil-v2.0/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Jul 2021 18:56:10 GMT -->

</html>