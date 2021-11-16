<?php

// Define some constants
define( "RECIPIENT_NAME", "Elango" );
define( "RECIPIENT_EMAIL", "iamelangodesigner@gmail.com" );


// Read the form values
$success = false;
$optselect = isset( $_POST['optselect'] ) ? preg_replace( "/[^\s\S\.\-\_\@a-zA-Z0-9]/", "", $_POST['optselect'] ) : "";
$firstname = isset( $_POST['firstname'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['email'] ) : "";
$phone = isset( $_POST['phone'] ) ? preg_replace( "/[^\s\S\.\-\_\@a-zA-Z0-9]/", "", $_POST['phone'] ) : "";

// If all values exist, send the email
if ( $userName && $senderEmail && $senderPhone && $message) {
  $recipient = RECIPIENT_NAME . " <" . RECIPIENT_EMAIL . ">";
  $headers = "Option: " . $optselect . "";
  $msgBody = " First-Name: ". $firstname .  " phobe: ". $phone . "";
  $success = mail( $recipient, $headers, $msgBody );

  //Set Location After Successsfull Submission
  header('Location: index.html?message=Successfull');
}

else{
	//Set Location After Unsuccesssfull Submission
  	header('Location: index.html?message=Failed');	
}

?>