<?php

include("connection.php");

echo $_POST["full_name"]; //get user id
echo $_POST["phone"];

#echo $_POST["from_location_id"]; //get route id
#echo $_POST["to_location_id"];
#echo $_POST["dept_time"];        
#echo $_POST["is_weekday"];      //get schedule id
#echo $_POST["date"];            //get drives id
echo $_POST["drives_id"];


$full_name = $_POST["full_name"]; //get user id
$phone = $_POST["phone"];


#$from_location_id = $_POST["from_location_id"]; //get route id
#$to_location_id = $_POST["to_location_id"];
#$dept_time = $_POST["dept_time"];        
#$is_weekday = $_POST["is_weekday"];      //get schedule id
#$date = $_POST["date"];                 //get drives id
#$drives_id;
$drives_id = $_POST["drives_id"];


$query = $mysqli->prepare("INSERT INTO tikets(full_name, phone, drives_id) VALUES (?,?)");// -> in the eqivalant of . in JAVA

$query->bind_param("ssi", $name, $phone, $drives_id);
$query->execute();

header('loccation:index.php'); //redirect me to this file

?>