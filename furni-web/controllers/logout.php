<?php
session_start();
unset($_SESSION['email']);
unset($_SESSION['avt']);
unset($_SESSION['type']);
unset($_SESSION['id']);
header('location:../index.php');
?>