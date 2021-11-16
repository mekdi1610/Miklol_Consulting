<?php

// Define some constants
define( "RECIPIENT_NAME", "Elango" );
define( "RECIPIENT_EMAIL", "youremail@mail.com" );


// Read the form values
$success = false;
$optselect = isset( $_POST['optselect '] ) ? preg_replace( "/[^\s\S\.\-\_\@a-zA-Z0-9]/", "", $_POST['optselect'] ) : "";
$firstname = isset( $_POST['firstname'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['firstname'] ) : "";
$secondname = isset( $_POST['phone'] ) ? preg_replace( "/[^\s\S\.\-\_\@a-zA-Z0-9]/", "", $_POST['phone'] ) : "";
$message = isset( $_POST['message'] ) ? preg_replace( "/[^\s\S\.\-\_\@a-zA-Z0-9]/", "", $_POST['message'] ) : "";

// If all values exist, send the email
if ( $userName && $senderEmail && $senderPhone && $message) {
  $recipient = RECIPIENT_NAME . " <" . RECIPIENT_EMAIL . ">";
  $headers = "Option: " . $optselect . "";
  $msgBody = " First-Name: ". $firstname .  " Second-Name: ". $phone .  " Message: ". $message . "";
  $success = mail( $recipient, $headers, $msgBody );

  //Set Location After Successsfull Submission
  header('Location: index1.html?message=Successfull');
}

else{
	//Set Location After Unsuccesssfull Submission
  	header('Location: index1.html?message=Failed');	
}

?>