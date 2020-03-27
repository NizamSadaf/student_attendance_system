<?php
include "connect.php";
session_start();
unset($_SESSION["username"]);
header("location:teacher_login.php");
?>
