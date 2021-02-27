<?php
$to = "eventmode@gmail.com";

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$content = '
<html>
    <head>
          <title>Contact Form Eventmode</title>
    </head>
    <body style="color: #000">
          <p><b>Name: </b>'.$name.'</p>
          <p><b>Email: </b>'.$email.'</p>
          <p><b>Subject: </b>'.$subject.'</p>
          <p><b>Message: </b>'.$message.'</p>
    </body>
</html>';

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <'.$email.'>' . "\r\n";
$success = mail($to,$subject,$content,$headers);
if(!$success) {
    $errorMessage = error_get_last()['message'];
}
?>
