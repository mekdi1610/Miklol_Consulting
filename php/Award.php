<?php

include_once 'Connection.php';
class Award
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
	public function addAward($path, $image)
	{
		 // set the name of the target directory
  // set the name of the target directory
  $uploadDir = "../picture-award/";
  $fileName = "../picture-award/".$path;	
		$sql = "INSERT INTO `Award`(`Photo`) VALUES(?)";
		$result = $this->con->prepare($sql)->execute([$fileName]);
		if ($result) {
			 move_uploaded_file($image, $fileName) or die("Cannot copy uploaded file"); //display success message
		
			echo "<script>alert('Added Successfully!');
				document.location = '../admin/award.php' </script>";
		} else {
			echo "<script>alert('Adding Failed! Please check your connection');
				document.location = '../admin/award.php' </script>";
		}
		  // copy the uploaded file to the directory
		 			
		  echo '<script language="javascript">';
			  echo 'alert("1 record added successfully.")';
			  echo '</script>';
		 header("location:../admin/award.php");     
	}
	public function updateAward($ID, $path, $image, $pathOld)
	{
		if($path!=""){
		$uploadDir = "../picture-award/";
		$fileName = "../picture-award/".$path;
		$sql = "UPDATE `Award` SET `Photo` =? WHERE `ID` =?";
		$result = $this->con->prepare($sql)->execute([$fileName, $ID]);
		if ($result) {
			move_uploaded_file($image, $fileName) or die("Cannot copy uploaded file"); //display success message
			unlink($pathOld);
				echo "<script>alert('Updated Successfully!');
				ddocument.location = '../admin/award.php' </script>";
			} else {
				echo "<script>alert('Update Failed! Please check your coonection.');
				document.location = '../admin/award.php' </script>";
			}
		}
		else{
			$sql = "UPDATE `Award` SET `Photo` =? WHERE `ID` =?";
			$result = $this->con->prepare($sql)->execute([$pathOld, $ID]);
			if ($result) {
				echo "<script>alert('Updated Successfully!');
				document.location = '../admin/award.php' </script>";
			} else {
				echo "<script>alert('Update Failed! Please check your coonection.');
				document.location = '../admin/award.php' </script>";
			}
		}
	}
	//View all the recurring and previous tips
	public function viewAward()
	{
        $accept = array(); $AwardID = []; $path=[];
		$stmt = $this->con->query("SELECT `ID`, `Photo` FROM `Award`");
		while ($row = $stmt->fetch()) {
			array_push($AwardID, $row[0]);
			array_push($path, $row[1]);
		}
		array_push($accept, $AwardID, $path);
		return $accept;
	}
	  //Remove Award
	  public function removeAward($ID, $path)
	  {
		  $sql = "DELETE FROM `Award` WHERE `ID` =?";
		  $result = $this->con->prepare($sql)->execute([$ID]);
		  if ($result) {
			unlink($path);
			  echo "<script>alert('Removed Successfully!');
				  document.location = '../admin/award.php' </script>";
		  } else {
			  echo "<script>alert('Remove Failed!, Please check your connection.);
				  document.location = '../admin/award.php' </script>";
		  }
	  }
	
}
