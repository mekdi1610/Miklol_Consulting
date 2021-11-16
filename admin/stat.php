<?php
session_start(); //Start the session
if(!isset($_SESSION["UserName"])){ //If session not registered
header("location:Login/login.php"); // Redirect to login.php page
}
else //Continue to current page
header( 'Content-Type: text/html; charset=utf-8' );



include 'side-menu.php';
include_once('../php/Info.php');


//Call the Info class
$infoObj = new Info();

$accept = $infoObj->viewInfo();
$StatisticsInfo=$accept[5];

//Update Info
if (isset($_POST['Update'])) {
  
  $Statistics = $_POST["Statistics"];
  $infoObj->updateStatistics($Statistics);
}
?>

<!-- MAIN -->
<div class="main">

    <!-- MAIN CONTENT -->
    <div class="main-content">

        <div class="container-fluid">
            <div class="panel panel-headline col-md-10">
                <div class="row">
                    <div class="col-md-6 pa-5">
                        <div class="panel-heading">
                            <h3 class="panel-title">Statistics Page Description</h3>
                            <!-- <p class="panel-subtitle">Period: Oct 14, 2016 - Oct 21, 2016</p> -->

                        </div>
                    </div>
                    <div class="col-md-6 pa-5">
                        <div class="panel-heading">
                            <div class=" navbar-btn-right">
                                <a class="btn btn-success update-pro" href="#add" data-toggle="modal" name="Set"
                                    title="Edit Statistics section" onclick="openAdd()"><i class="fa fa-edit"></i> <span>Edit
                                        Statistics Section</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <h4></h4>
                    <?php
                    echo "<p>$StatisticsInfo[0]</p>";
                        ?>
                    </div>
            </div>
        </div>
        <div class="modal" id="add" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Edit Statistics Section</h3>

                        </div>

                        <div class="panel-body">
                            <form method="post" enctype="multipart/form-data" action="stat.php">

                                <textarea class="form-control" placeholder="textarea" rows="4" name="Statistics"><?php
                    echo $StatisticsInfo[0];
                        ?></textarea><br>

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
</div>

</div>


</div>
<!-- END MAIN CONTENT -->
</div>
<!-- END MAIN -->


<!-- END WRAPPER -->

<!-- Javascript -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="assets/scripts/klorofil-common.js"></script>
<script>
function openAdd() {
    var add = document.getElementById("add");
    add.style.display = "block";
}

function openModal() {
    var modal = document.getElementById("modal");
    modal.style.display = "block";
}
function closeAdd(){
        var modal=document.getElementById("add");
        add.style.display="none";
      }
</script>
<div class="clearfix"></div>
<footer>
    <div class="container-fluid">
        <p class="copyright">&copy; 2017 <a href="https://www.themeineed.com/" target="_blank">Theme I Need</a>. All
            Rights Reserved.</p>
    </div>
</footer>
</div>
</body>

<!-- Mirrored from demo.thedevelovers.com/dashboard/klorofil-v2.0/panels.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Jul 2021 18:57:03 GMT -->

</html>