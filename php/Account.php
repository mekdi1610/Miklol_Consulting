<?php
include_once 'Connection.php';
//Accepts username to check if it exists or not

class Account
{
    protected $userName, $password;
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
    //Login with valid credentials to different part of the system
    public function login($username,$password)
    {
        $stmt = $this->con->prepare("SELECT `UserName`, `Password` FROM `account` WHERE UserName=?");
        $stmt->execute([$username]);
        $row = $stmt->fetch();
        if (is_array($row)) {
            $pass = $row[1];
            //Since we cant decrypt a PASSWORD_BCRYPT, we fetch the password with a specfic username and compare the newly entered password with the retrieved
            // if (password_verify($passwords, $pass)) {
                if ($password== $pass) {
                session_start();
                $_SESSION["UserName"] = $row[0];
                $UserName = $row[0];
              
               
            
                echo '<script language="javascript">';
                echo 'alert("Welcomeeee! ' . $_SESSION["UserName"] . '"); document.location = "/admin/about.php"';
                echo '</script>';
            } else {
                echo "<script>alert('Invaild UserName or Password');
                document.location = '/admin/Login/login.php' </script>";
            }
        }
      
    }
    //Logout of the system
    public function logout()
    {
        session_start();
        unset($_SESSION["UserName"]);
        echo "<script>alert('GoodBye!');
        document.location = '/admin/Login/login.php' </script>";
    }

    //Send authorized email with an attached token if a user forgets his/her password
    public function forgotPassword($username)
    {
        $email='';
        //Retrieve email from database
        $stmt = $this->con->prepare("SELECT `Email` FROM `account` WHERE `UserName` = ?");
        $stmt->execute([$username]);
        while ($row = $stmt->fetch()) {
            $email = $row[0];
        }
        //Prepare the email
        $headers = "From: mekdi1610@gmail.com";
        $subject = "Forgot Password";
        //Prepare token
        $token = md5($email) . rand(10, 9999);
        $expFormat = mktime(
            date("H"),
            date("i"),
            date("s"),
            date("m"),
            date("d") + 1,
            date("Y")
        );
        $expDate = date("Y-m-d H:i:s", $expFormat);
        $link = '<a href="/Login/ResetPassword.php?key=' . $email . '&uname=' . $username . '&token=' . $token . '&expdate=' . $expDate . '">Click To Reset password</a>';
        //Send email
        echo $email, $subject, $link, $headers;
        if (mail($email, $subject, $link, $headers)) {
            echo "<script>alert('Please check your email to reset your password');
            document.location = '/Login.php' </script>";
        } else {
            echo "<script>alert('Sending Failed!');
            document.location = '/Account.php' </script>";
        }
    }

}
