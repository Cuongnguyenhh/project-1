<?php
session_start();
unset($_SESSION['email']);
unset($_SESSION['avt']);
unset($_SESSION['type']);
unset($_SESSION['id']);
unset($_SESSION['log_ss']);
unset($_SESSION['phone_num']);
unset($_SESSION['adr_user']);
unset($_SESSION['display_name']);
header('location: ../index.php');
?>