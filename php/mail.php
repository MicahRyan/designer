<?php

if(isset($_POST["yourName"])){
$yourName = $_POST["yourName"];
$yourEmail = $_POST["yourEmail"];
$yourNumber = $_POST["yourNumber"];
$yourWebsite = $_POST["yourWebsite"];
$yourBudget = $_POST["yourBudget"];
$startDate = $_POST["startDate"];
$yourMessage = $_POST["yourMessage"];

$msg = "

Name: $yourName
Email: $yourEmail
Number: $yourNumber
Website: $yourWebsite
Budget: $yourBudget
Start Date: $startDate
Message:
$yourMessage";

$to = "contact@micahryan.com";
$subject = "Web Design Contact Form";
$message = $msg;
$headers = "Web Design Contact Form";
mail($to,$subject,$message,$headers);

}else{

}
?>
