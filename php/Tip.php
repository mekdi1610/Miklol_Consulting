<?php

include_once 'Connection.php';
class Tip
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
	public function addtip($title, $description)
	{
		$sql = "INSERT INTO `tip`(`title`, `description`) VALUES(?,?)";
		$result = $this->con->prepare($sql)->execute([$title, $description]);
		if ($result) {
			echo "<script>alert('Added Successfully!');
				document.location = '/tip.php' </script>";
		} else {
			echo "<script>alert('Adding Failed! Please check your connection');
				document.location = '/tip.php' </script>";
		}
	}
	public function updatetip($ID, $title, $description)
	{
		$sql = "UPDATE `tip` SET `title` =?, `description` =? WHERE `ID` =?";
		$result = $this->con->prepare($sql)->execute([$title, $description, $ID]);
		if ($result) {
				echo "<script>alert('Updated Successfully!');
				document.location = '/tip.php' </script>";
			} else {
				echo "<script>alert('Update Failed! Please check your coonection.');
				document.location = '/tip.php' </script>";
			}
	}
	//View all the recurring and previous tips
	public function viewtip()
	{
        $accept = array(); $tipID = []; $title = []; $description = []; 
		$stmt = $this->con->query("SELECT `ID`, `title` , `description` FROM `tip`");
		while ($row = $stmt->fetch()) {
			array_push($tipID, $row[0]);
			array_push($title, $row[1]);
			array_push($description, $row[2]);
		}
		array_push($accept, $tipID, $title, $description);
		return $accept;
	}
	  //Remove bank account
	  public function removetip($ID)
	  {
		  $sql = "DELETE FROM `tip` WHERE `ID` =?";
		  $result = $this->con->prepare($sql)->execute([$ID]);
		  if ($result) {
			  echo "<script>alert('Removed Successfully!');
				  document.location = '/index.php' </script>";
		  } else {
			  echo "<script>alert('Remove Failed!, Please check your connection.);
				  document.location = '/index.php' </script>";
		  }
	  }
	
}
