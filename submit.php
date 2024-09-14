<?php

$first = $_POST["first"];
$last_name = $_POST["last"];
$email= $_POST["email"];
$pass= $_POST["password"];
$date= $_POST["date"];  
$year= $_POST["year-level"];


//echo "checkbox".json_encode($_POST["checkbox"]);

echo "first name: ".$first ."<br>";
echo "last name: ".$last_name ."<br>";
echo "email: ".$email ."<br>";
echo "password: ".$pass ."<br>";
echo "date: " .$date ."<br>";

echo "yearlevel: ".$year ."<br>";

?>