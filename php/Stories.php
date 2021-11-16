<?php

include_once 'Connection.php';
class Story
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
	public function addstory($title, $description)
	{
		$sql = "INSERT INTO `story`(`title`, `description`) VALUES(?,?)";
		$result = $this->con->prepare($sql)->execute([$title, $description]);
		if ($result) {
			echo "<script>alert('Added Successfully!');
				document.location = '/admin/stories.php' </script>";
		} else {
			echo "<script>alert('Adding Failed! Please check your connection');
				document.location = '/admin/stories.php' </script>";
		}
	}
	public function updateStory($ID, $title, $description)
	{
		echo $ID, $title, $description;
		$sql = "UPDATE `story` SET `title` =?, `description` =? WHERE `ID` =?";
		$result = $this->con->prepare($sql)->execute([$title, $description, $ID]);
		if ($result) {
			echo $ID, $title, $description;
				echo "<script>alert('Updated Successfully!');
				document.location = '/admin/stories.php' </script>";
			} else {
				echo "<script>alert('Update Failed! Please check your coonection.');
				document.location = '/admin/stories.php' </script>";
			}
	}
	//View all the recurring and previous tips
	public function viewstory()
	{
        $accept = array(); $storyID = []; $title = []; $description = []; 
		$stmt = $this->con->query("SELECT `ID`, `title` , `description` FROM `story`");
		while ($row = $stmt->fetch()) {
			array_push($storyID, $row[0]);
			array_push($title, $row[1]);
			array_push($description, $row[2]);
		}
		array_push($accept, $storyID, $title, $description);
		return $accept;
	}
	  //Remove bank account
	  public function removestory($ID)
	  {
		  $sql = "DELETE FROM `story` WHERE `ID` =?";
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
