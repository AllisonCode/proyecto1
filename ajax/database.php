<?php
$servername = "50.62.209.53";
$username = "allison";
$password = "allison2018";
$database = "allison_autosal";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
mysqli_set_charset($conn,'utf8');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>