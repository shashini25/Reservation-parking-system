<?php
session_start();

$mysqli = require __DIR__ . "/database.php";

$vehicle_number = $_POST["vehicle_number"];
$location = $_POST["location"];
$date = $_POST["date"];
$checkin = $_POST["checkin"];
$checkout = $_POST["checkout"];

$start = strtotime($checkin);
$end = strtotime($checkout);
$period = ($end - $start) / 60;
//$period = date('H:i', mktime(0,$minutes));


$sql = "INSERT INTO booking_details (vehicle_number, location, date, checkin, checkout,period,UserID)
        VALUES (?, ?, ?, ?, ?, ?, ?)";
        
$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("sssssii",
                  $vehicle_number,
                  $location,
                  $date,
                  $checkin,
                  $checkout,
                  $period,
                  $_SESSION["user_id"]);
                  
if ($stmt->execute()) {
    echo $period; 
    //header("Location: login.php");

    return false;
    
} else {
    
    if ($mysqli->errno === 1062) {
        die("email already taken");
    } else {
        die($mysqli->error . " " . $mysqli->errno);
    }
}



?>