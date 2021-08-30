<?php
// Database configuration
$dbHost     = "gator4301.hostgator.com";
$dbUsername = "crteck_austin1";
$dbPassword = "godisgod";
$dbName     = "crteck_one";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>
