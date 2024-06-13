<?php

if (empty($_POST["name"])) {
    header("Location: si.php");
    die("Name is required");
}

if (empty($_POST["contact_number"])) {
    die("contact number is required");
}

if (strlen($_POST["contact_number"] !==10 &&  ! preg_match("/[0-9]/", $_POST["contact_number"]))) {
    die("contact number bust be a 10 numbers");
}

if ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Valid email is required");
}

if (strlen($_POST["password"]) < 8) {
    die("Password must be at least 8 characters");
}

if ( ! preg_match("/[a-z]/i", $_POST["password"])) {
    die("Password must contain at least one letter");
}

if ( ! preg_match("/[0-9]/", $_POST["password"])) {
    die("Password must contain at least one number");
}

if ($_POST["password"] !== $_POST["rptpassword"]) {
    die("Passwords must match");
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/database.php";

$sql = "INSERT INTO users (name, contact_number, email, password_hash)
        VALUES (?, ?, ?, ?)";
        
$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("ssss",
                  $_POST["name"],
                  $_POST["contact_number"],
                  $_POST["email"],
                  $password_hash);
                  
if ($stmt->execute()) {
       
    header("Location: login.php");

    return false;
    
} else {
    
    if ($mysqli->errno === 1062) {
        die("email already taken");
    } else {
        die($mysqli->error . " " . $mysqli->errno);
    }
}








