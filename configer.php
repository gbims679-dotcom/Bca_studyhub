<?php
// db_connect.php

$host = 'localhost';
$db = 'bca_study_hub';
$user = 'root';
$pass = '';

// Create a connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
}
?>
