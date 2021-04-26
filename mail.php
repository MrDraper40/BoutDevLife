<?php
//get data from form  
$first_name = $_POST['first-name'];
$last_name = $_POST['last-name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "coreydraper9@gmail.com";
$subject = "Mail From BoutDevLife";
$txt ="Name = ". $first_name . "\r\n Name = " . $last_name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@boutdevlife.online" . "\r\n" .
"CC: coreydraper9@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>