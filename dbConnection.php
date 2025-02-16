<?php
$databaseHost = 'localhost';
$databaseName = 'carrental';
$databaseUsername = 'root';
$databasePassword = '';

// Opening a new connection to the MySQL server
$con = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

// Check connection
if ($con -> connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>