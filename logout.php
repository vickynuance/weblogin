<?php include('header.php'); ?>
<?php include('action_page.php'); ?>
<?php
unset($_SESSION['f_name']);
session_destroy();

header("Location: login.php");
exit;
?>