<?php
session_start();
require 'process-booking.php';

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = sprintf("SELECT * FROM booking_details
                    WHERE vehicle_number = '%s'",
                   $mysqli->real_escape_string($vehicle_number));
    
    $result = $mysqli->query($sql);
    
    $vehicle = $result->fetch_assoc();

    if ($vehicle) {
        if (password_verify($_POST["password"], $user["password_hash"])) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["user_id"] = $vehicle["UserID"];
            $_SESSION["vehicle_number"] = $vehicle["name"];
            $_SESSION["email"] = $vehicle["email"];
            
           
           
            header("Location: booking.php");
            exit;
        }
        
        echo "Incorrect password";
        exit;

    }
    $is_invalid = true;
    echo "Invalid username";
    exit;

}
?>