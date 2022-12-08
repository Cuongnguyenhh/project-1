<?php

$servername = "baowebpa_qlbanhang2";
$username = "baowebpa_admin";
$password = "";
$db = "admin123Admin";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>
