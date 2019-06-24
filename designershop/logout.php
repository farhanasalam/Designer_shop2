<?php
session_start();
 $_SESSION['log_id'] = '';
 $_SESSION['role_id'] = '';
 session_destroy();
 header('location:home.php');
?>
