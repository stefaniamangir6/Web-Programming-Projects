<?php
$dbServerName = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'DocumentsDB';
$connection = mysqli_connect($dbServerName, $dbUsername, $dbPassword, $dbName);
if ($connection === false) {
    die("ERROR: Could not connect." . mysqli_connect_error());
}