<?php
$name = $_POST['your-name'];
$email = $_POST['your-email'];
$number = $_POST['your-number'];
$groupSize = $_POST['your-group-size'];

$to = "kbwatts@gmail.com";
$subject = "[MK2015] Submitted Message";
$message = "$firstname just sent a message: \n\n Contact details: \n\n Email: $email \n\n Phone number: $number \n\n Group Size: $groupSize";
$from = "$email";
$headers = "From:" . $email;
mail($to,$subject,$message,$headers);
echo "Mail Sent.";
?>