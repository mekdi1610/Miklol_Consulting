<?php  
//Configration of Database : These information will be changed when it is deployed
class Config{
    private $serverName="localhost";
    private $userName="root";
    private $password="";
    private $database="miklol_consulting";
    // private $password="LINUX@1991v6";
    // private $database="unity_gardening";
    public function getServerName(){
        return $this->serverName;
    }
    public function getUserName(){
        return $this->userName;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getDatabase(){
        return $this->database;
    }
}
