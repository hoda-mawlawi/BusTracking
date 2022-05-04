
<?php

include("db_info.php");

$id = $_GET["route_id"]; //would let me retreive the code from the URL i.e: ?course_id=4


$query = $mysqli->prepare("SELECT dept_time, is_weekday FROM schedule WHERE route_id = ?;");
$query->bind_param("i", $id);
$query->execute();

$array = $query->get_result();

$response = [];

while($schedule = $array->fetch_assoc()){
    $response[] = $schedule;
}

$json_response = json_encode($response);
echo $json_response;

?>