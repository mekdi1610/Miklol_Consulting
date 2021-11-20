<?php

include_once 'Connection.php';
class FrontEnd
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
	

	public function contact()
	{
        $stmt = $this->con->query("SELECT * FROM `contact`");
        $stmt = $stmt->fetch();
        return $stmt;
		
		
		}
	public function services()
	{
		$stmt = $this->con->query("SELECT * FROM `service`");
        return $stmt;
	}
    public function about()
	{
		$stmt = $this->con->query("SELECT * FROM `info`");
        $stmt = $stmt->fetch();
        return $stmt;
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
