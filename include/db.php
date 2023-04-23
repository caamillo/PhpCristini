<?php
// Basic connection settings
$databaseHost = 'localhost';
$databaseUsername = 'ubuntu';
$databasePassword = '';
$databaseName = 'scuola';

// Connect to the database
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
?>