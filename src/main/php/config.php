<?php
// Database configuration
$host = 'localhost';
$username = 'root';
$password = ''; // Your MySQL root password, if any
$database = 'stayfinder';

// Create a new MySQLi connection
$mysqli = new mysqli($host, $username, $password, $database);

// Check connection
if ($mysqli->connect_error) {
    die('Connection failed: ' . $mysqli->connect_error);
}
?>
