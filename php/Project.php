<?php

include_once 'Connection.php';
class Project
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
	public function addproject($title, $description, $catagory)
	{
		 // set the name of the target directory
  // set the name of the target directory
		$sql = "INSERT INTO `project`(`title`, `description`, `category`) VALUES(?,?,?)";
		$result = $this->con->prepare($sql)->execute([$title, $description, $catagory]);
		if ($result) {
			echo "<script>alert('Added Successfully!');
				document.location = '../admin/recent-projects.php' </script>";
		} else {
			echo "<script>alert('Adding Failed! Please check your connection');
				document.location = '../admin/recent-projects.php' </script>";
		}
		  // copy the uploaded file to the directory
		 			
		  echo '<script language="javascript">';
			  echo 'alert("1 record added successfully.")';
			  echo '</script>';
		 header("location:../admin/recent-projects.php");     
	}
	public function updateproject($ID, $title, $description, $catagory)
	{
		$sql = "UPDATE `project` SET `title` =?, `description` =?, `category` =? WHERE `ID` =?";
		$result = $this->con->prepare($sql)->execute([$title, $description, $catagory, $ID]);
		if ($result) {
				echo "<script>alert('Updated Successfully!');
				ddocument.location = '../admin/recent-projects.php' </script>";
			} else {
				echo "<script>alert('Update Failed! Please check your coonection.');
				document.location = '../admin/recent-projects.php' </script>";
			}
		}
	//View all the recurring and previous tips
	public function viewproject()
	{
        $accept = array(); $projectID = []; $title = []; $description = []; $catagory = []; $path=[];
		$stmt = $this->con->query("SELECT `ID`, `title` , `description`, `category` FROM `project`");
		while ($row = $stmt->fetch()) {
			array_push($projectID, $row[0]);
			array_push($title, $row[1]);
			array_push($description, $row[2]);
            array_push($catagory, $row[3]);
		}
		array_push($accept, $projectID, $title, $description, $catagory);
		return $accept;
	}
	  //Remove project
	  public function removeProject($ID, $path)
	  {
		  $sql = "DELETE FROM `project` WHERE `ID` =?";
		  $result = $this->con->prepare($sql)->execute([$ID]);
		  if ($result) {
			unlink($path);
			  echo "<script>alert('Removed Successfully!');
				  document.location = '../admin/recent-projects.php' </script>";
		  } else {
			  echo "<script>alert('Remove Failed!, Please check your connection.);
				  document.location = '../admin/recent-projects.php' </script>";
		  }
	  }
	
}
