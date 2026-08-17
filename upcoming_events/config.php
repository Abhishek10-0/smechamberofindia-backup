<?php


$servername = "127.0.0.1";
$username = "smedii4y_smechamberofindia";
$password = "Sneha@2021";
$dbname = "smedii4y_smechamberofindia";  // sme_event_news

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); 
}


?>