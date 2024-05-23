<?php
// Database configuration
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'stayfinder';

// Create a new MySQLi connection
$mysqli = new mysqli($host, $username, $password, $database);

// Check connection
if ($mysqli->connect_error) {
    die('Connection failed: ' . $mysqli->connect_error);
}
?>
