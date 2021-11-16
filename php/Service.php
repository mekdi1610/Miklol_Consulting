<?php

include_once 'Connection.php';
class Service
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
	public function addService($title)
	{
		$sql = "INSERT INTO `service`(`title`) VALUES(?)";
		$result = $this->con->prepare($sql)->execute([$title]);
		if ($result) {
			echo "<script>alert('Added Successfully!');
				document.location = '/admin/services.php' </script>";
				
		} else {
			echo "<script>alert('Adding Failed! Please check your connection');
				document.location = '/admin/services.php' </script>";
		}
	}
	public function updateService($ID, $title)
	{
	
		$sql = "UPDATE `service` SET `title` =? WHERE `ID` =?";
		$result = $this->con->prepare($sql)->execute([$title, $ID]);
		if ($result) {
				echo "<script>alert('Updated Successfully!');
				document.location = '/admin/services.php' </script>";
			} else {
				echo "<script>alert('Update Failed! Please check your coonection.');
				document.location = '/admin/services.php' </script>";
			}
	}

	public function removeService($ID)
	{
	
		$sql = "DELETE from `service` WHERE `ID` =?";
		$result = $this->con->prepare($sql)->execute([$ID]);
		if($result){
			echo "<script>alert('Removed Successfully!');
			document.location = '/admin/services.php'</script>";
		}
		else{
			echo "<script> alert('Removing Failed! Please check your connection.');
			document.location = '/admin/services.php'</script>";
		}
	}
	//View all the recurring and previous tips
	public function viewService()
	{
        $accept = array(); $serviceID = []; $title = [];
		$stmt = $this->con->query("SELECT `ID`, `title` FROM `service`");
		while ($row = $stmt->fetch()) {
			array_push($serviceID, $row[0]);
			array_push($title, $row[1]);
		}
		array_push($accept, $serviceID, $title);
		return $accept;
	}
	
}
