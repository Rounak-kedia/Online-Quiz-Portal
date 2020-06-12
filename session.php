<?php
session_start();
$_SESSION['LOGIN'] = $_GET['login'];
header('Location: login.php');

 ?>
