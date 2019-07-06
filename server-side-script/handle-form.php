<?php
/* Declare variable $success and assign it with value false.
Use this variable as condition to keep user input in the
form as long as form is not properly filled out. */
$success = false;
/* Declare variable $err. Use this variable to collect error
messages along the way. $err can be a string or array -
whatever you decide. */
$err = null;
/* if submit button is clicked: */
if(isset($_GET["submit-button"])){
/* Validate full name (either collect a value of full name from
$_GET or pass corresponding error message to $err) */
    if(!empty($_GET["full-name"])){
        $full_name = $_GET["full-name"];
    } else {
        $err .= "<p>Your Name?</p>";
    }
/* Validate email (either collect a value of email from
$_GET or pass corresponding error message to $err) */
    if(!empty($_GET["email"])){
        $valid = filter_var($_GET["email"], FILTER_VALIDATE_EMAIL);
        if($valid) {
            $email = $_GET["email"];
        } else {
            $err .= "<p class=\"error\">Entered email is invalid!</p>";
        }
    } else {
            $err .= "<p>Email?</p>";
    }
/* Validate message (either collect a value from $_GET or pass
corresponding error message to $err) */
    if(!empty($_GET["message"])){
        $message = $_GET["message"];
    } else {
        $err .= "<p>Message?</p>";
    }
/* If full name, email and message are not empty: */
    if(!empty($full_name) && !empty($email) && !empty($message)) {

/* Turn $success to true and create feedback */
        $success = true;
        $feedback = "<p class=\"feedback\">Hello {$full_name}. Thank you for your message:</p><p>{$message}</p><p>We are going to email you at {$email} if any change happens in your program</p>";
/* End if */
    }
/* End if submit button is clicked. */
}
?>
