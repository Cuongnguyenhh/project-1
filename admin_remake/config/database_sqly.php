<?php

$servername = "localhost";
$username = "baowebpa_admin";
$password = "admin123Admin";
$db = "baowebpa_qlbanhang2";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>
