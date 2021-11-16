<?php

include_once 'Connection.php';
class Package
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
	public function addPackage($title, $description, $price)
	{
		$sql = "INSERT INTO `package`(`title`, `description`, `price`) VALUES(?,?,?)";
		$result = $this->con->prepare($sql)->execute([$title, $description, $price]);
		if ($result) {
			echo "<script>alert('Added Successfully!');
				document.location = '/admin/package.php' </script>";
		} else {
			echo "<script>alert('Adding Failed! Please check your connection');
				document.location = '/admin/package.php' </script>";
		}
	}
	public function updatePackage($ID, $title, $description,$price)
	{
		
		$sql = "UPDATE `package` SET `title` =?, `description` =?, `price` =? WHERE `ID` =?";
		$result = $this->con->prepare($sql)->execute([$title, $description, $price, $ID]);
		if ($result) {
			
				echo "<script>alert('Updated Successfully!');
				document.location = '/admin/stories.php' </script>";
			} else {
				echo "<script>alert('Update Failed! Please check your coonection.');
				document.location = '/admin/stories.php' </script>";
			}
	}
	//View all the recurring and previous tips
	public function viewPackage()
	{
        $accept = array(); $packageID = []; $title = []; $description = []; $price = []; 
		$stmt = $this->con->query("SELECT `ID`, `title` , `description`, `price` FROM `package`");
		while ($row = $stmt->fetch()) {
			array_push($packageID, $row[0]);
			array_push($title, $row[1]);
			array_push($description, $row[2]);
            array_push($price, $row[3]);
		}
		array_push($accept, $packageID, $title, $description, $price);
		return $accept;
	}
	  //Remove bank account
	  public function removePackage($ID)
	  {
		  $sql = "DELETE FROM `package` WHERE `ID` =?";
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
