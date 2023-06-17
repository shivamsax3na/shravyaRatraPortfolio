<?php
include("config.php");
extract($_POST);
$query = "INSERT INTO `contactForm` (`name`, `email`, `contact`, `message`, `companyName`) VALUES ('". $name .", ". $email .", ". $contact .", ". $message .", ". $companyName ."')";
$result = $mysqli->query($query);    

if(!$result) {
    echo "Something went wrong".$mysqli->err;
}
echo "thanks we will get back to you";
$mysqli->close();
?>