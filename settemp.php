<?php
$con=mysqli_connect("localhost","root","raspberry","raspberryDB");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//date_defult_timezone_set("Asia/Taipei");

$now= date('YmdHis');
$temp = $_POST['temperature'];
$humidity = $_POST['humidity'];

mysqli_query($con,"INSERT INTO temp (datetime,temp,humidity)
  VALUES ($now,$temp,$humidity)");

mysqli_close($con);
 echo "close connection".", Date time=".$now.", Temperature=".$temp."  Humidity=".$humidity;
?>
