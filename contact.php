<?php

if (isset($_POST['submitFromContact'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $query = $_POST['message'] ;
    $companyName = $_POST['companyName'];

    $message = "query: ". $query . " contact: " . $contact . "company name: " . $companyName . "name :". $name ;

    $subject = "Response from contact form on website";

    $mailTo = "shivamsaxena.w@gmail.com";
    $headers = "From: ".$email;
    
    mail($mailTo, $subject, $message, $headers);
    header("Location: index.html?mailsend");

}
?>