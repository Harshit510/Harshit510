<?php
   $name = $_POST['name'];
   $phone = $_POST['phone'];
   $email = $_POST['email'];
   $subject = $_POST['subject'];
   $message = $_POST['message'];

   $email_from = 'rharshit510@gmail.com';
   $email_subject = "New Form Submission";
   $email_body = "User Name: $name.\n".
                    "User Contact No. : $phone.\n".
                       "User Email : $email.\n".
                          "User Subject: $subject.\n".
                             "User Message: $message.\n";

    $to = "rharshit039@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply to : $email \r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("Location: index.html");
?>