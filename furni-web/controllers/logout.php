<?php
session_start();
unset($_SESSION['email']);
unset($_SESSION['avt']);
unset($_SESSION['type']);
header('location:../index.php');
?>