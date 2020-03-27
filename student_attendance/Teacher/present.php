<?php
include "connect.php";
session_start();
$id=$_GET["id"];
$date=$_SESSION["date"];
mysqli_query($link,"update student_attendance set status='Present' where id='$id' && date='$date'");
header("location:take.php");
?>