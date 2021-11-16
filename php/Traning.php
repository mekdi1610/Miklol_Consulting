<?php

include_once 'Connection.php';
class Traning
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
	
	//Send tip about a potential member
	public function addTraning($title, $description, $status, $path, $image, $date)
	{
		
		$uploadDir = "../picture-traning/";
		$fileName = "../picture-traning/".$path;	
		$sql = "INSERT INTO `training`(`title`, `description`, `status`, `path`, `date`) VALUES(?,?,?,?,?)";
		$result = $this->con->prepare($sql)->execute([$title, $description, $status, $fileName, $date]);
		if ($result) {
			move_uploaded_file($image, $fileName) or die("Cannot copy uploaded file"); //display success message
		
			echo "<script>alert('Added Successfully!');
				document.location = '../admin/training-and-seminar.php' </script>";
		} else {
			echo "<script>alert('Adding Failed! Please check your connection');
				document.location = '../admin/training-and-seminar.php' </script>";
		}
	}
	public function updateTraining($ID, $title, $description, $status, $path, $image, $pathOld)
	{
		if($path!=""){
		$uploadDir = "../picture-traning/";
		$fileName = "../picture-traning/".$path;
		$sql = "UPDATE `training` SET `title` =?, `description` =?, `status` =?, `path` =? WHERE `ID` =?";
		$result = $this->con->prepare($sql)->execute([$title, $description, $status, $fileName, $ID]);
		if ($result) {
			move_uploaded_file($image, $fileName) or die("Cannot copy uploaded file"); //display success message
			unlink($pathOld);
				echo "<script>alert('Updated Successfully!');
				document.location = '../admin/training-and-seminar.php' </script>";
			} else {
				echo "<script>alert('Update Failed! Please check your coonection.');
				document.location = '../admin/training-and-seminar.php' </script>";
			}
		}
		else{
			$sql = "UPDATE `training` SET `title` =?, `description` =?, `status` =?, `path` =? WHERE `ID` =?";
			$result = $this->con->prepare($sql)->execute([$title, $description, $status, $pathOld, $ID]);
			if ($result) {
				echo "<script>alert('Updated Successfully!');
				document.location = '../admin/training-and-seminar.php' </script>";
			} else {
				echo "<script>alert('Update Failed! Please check your coonection.');
				document.location = '../admin/training-and-seminar.php' </script>";
			}
		}
	}
	//View all the recurring and previous tips
	public function viewTraning()
	{
        $accept = array(); $traningID = []; $title = []; $description = []; $status = []; $path=[]; $date=[];
		$stmt = $this->con->query("SELECT `ID`, `title` , `description`, `status`, `path`, `date` FROM `training`");
		while ($row = $stmt->fetch()) {
			array_push($traningID, $row[0]);
			array_push($title, $row[1]);
			array_push($description, $row[2]);
            array_push($status, $row[3]);
			array_push($path, $row[4]);
			array_push($date, $row[5]);
		}
		array_push($accept, $traningID, $title, $description, $status, $path, $date);
		return $accept;
	
		
	}
	  //Remove project
	  public function removeTraining($ID, $path)
	  {
		  $sql = "DELETE FROM `training` WHERE `ID` =?";
		  $result = $this->con->prepare($sql)->execute([$ID]);
		  if ($result) {
			unlink($path);
			  echo "<script>alert('Removed Successfully!');
				  document.location = '../admin/training-and-seminar.php' </script>";
		  } else {
			  echo "<script>alert('Remove Failed!, Please check your connection.);
				  document.location = '../admin/training-and-seminar.php' </script>";
		  }
	  }
	
}
