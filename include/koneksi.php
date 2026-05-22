<?php
// inisiasi session
session_start();
// koneksi database
$servername = "localhost";
$username 	= "root";
$password 	= "root";
$dbname 	= "taruna_bangsa";
// Create connection
$conn 		= new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>