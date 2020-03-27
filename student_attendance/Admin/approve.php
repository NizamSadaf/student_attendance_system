<?php
include "connect.php";
$id=$_GET["id"];
mysqli_query($link,"update teacher set Status='Approved' where id='$id'");
header("location:teacher_details.php");
?>