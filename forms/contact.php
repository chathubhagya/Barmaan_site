<?php
//get data from form and store in variables
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$subject = "New Contact Form Submission: " . $subject;
$to = "info@barmaan.co";    
$txt = "Name: " . $name . "\r\nEmail: " . $email . "\r\nPhone Number: " . $number . "\r\nSubject: " . $subject . "\r\nMessage: " . $message;
$headers = "From:no-reply@barmaan.co" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL) {
    mail($to,$subject,$txt,$headers);
}
//redirectto contact page with success message
header("Location:/contact.html?mailsend");
exit()

?>