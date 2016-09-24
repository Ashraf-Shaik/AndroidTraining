<?php 
#defining the name of server where the database in located
#if database is located on the same machine use localhost
#if database is located on the other machine use ipaddress of that machine
$servername = "localhost";
#name of the mysql database user
$username = "root";
#password for the mysql database user 
$password = "";
#Database name which you want use
$dbname = "fdp_svne";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 