<?php

include_once 'Connection.php';
class Info
{
	public $con = "";
	public function __construct()
	{
		//Call the Connection class
		$conObj = new Connection();
		$this->con = $conObj->connect();
	}
	// destructor  
	function __destruct()
	{
	}
	
	public function updateInfo($about, $mission, $vision)
	{
		if($mission=="" && $vision==""){
			$sql = "UPDATE info SET `about` =? WHERE `ID` =?";
		$result = $this->con->prepare($sql)->execute([$about, 1]);
		if ($result) {
				echo "<script>alert('Updated Successfully!');
				document.location = '/admin/about.php' </script>";
			} else {
				echo "<script>alert('Update Failed! Please check your coonection.');
				document.location = '/admin/about.php' </script>";
			}
		}
		if($about=="" && $vision==""){
			$sql = "UPDATE info SET `mission` =? WHERE `ID` =?";
		$result = $this->con->prepare($sql)->execute([$mission, 1]);
		if ($result) {
				echo "<script>alert('Updated Successfully!');
				document.location = '/admin/mission.php' </script>";
			} else {
				echo "<script>alert('Update Failed! Please check your coonection.');
				document.location = '/admin/mission.php' </script>";
			}
		}
		if($mission=="" && $about==""){
			$sql = "UPDATE info SET `vision` =? WHERE `ID` =?";
		$result = $this->con->prepare($sql)->execute([$vision, 1]);
		if ($result) {
				echo "<script>alert('Updated Successfully!');
				document.location = '/admin/vision.php' </script>";
			} else {
				echo "<script>alert('Update Failed! Please check your connection.');
				document.location = '/admin/vision.php' </script>";
			}
		}
		
	}
	public function updateValues($values)
	{
		$sql = "UPDATE info SET `value` =? WHERE `ID` =?";
		$result = $this->con->prepare($sql)->execute([$values, 1]);
		if ($result) {
				echo "<script>alert('Updated Successfully!');
				document.location = '/admin/values.php' </script>";
			} else {
				echo "<script>alert('Update Failed! Please check your connection.');
				document.location = '/admin/values.php' </script>";
			}
		}
	public function updateStatistics($stat)
	{
		$sql = "UPDATE info SET `Statistics` =? WHERE `ID` =?";
		$result = $this->con->prepare($sql)->execute([$stat, 1]);
		if ($result) {
				echo "<script>alert('Updated Successfully!');
				document.location = '/admin/stat.php' </script>";
			} else {
				echo "<script>alert('Update Failed! Please check your connection.');
				document.location = '/admin/stat.php' </script>";
			}
		}
	//View all the recurring and previous tips
	public function viewInfo()
	{
        $accept = array(); $infoID = []; $about = []; $mission = []; $vision = []; $value = []; $stat = [];
		$stmt = $this->con->query("SELECT `ID`, `About` , `Mission`, `Vision`, `Value`, `Statistics` FROM `info`");
		while ($row = $stmt->fetch()) {
			array_push($infoID, $row[0]);
			array_push($about, $row[1]);
			array_push($mission, $row[2]);
			array_push($vision, $row[3]);
			array_push($value, $row[4]);
			array_push($stat, $row[5]);
		}
		array_push($accept, $infoID, $about, $mission, $vision, $value, $stat);
		return $accept;
	}
}
