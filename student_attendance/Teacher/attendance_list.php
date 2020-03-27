<?php
include "connect.php";
session_start();
?>

<html>
<head>
  
<body>
 <?php
 $course_id=$_SESSION["course_id"];
 $date=$_SESSION["date"];
  $sql="select id,fullname,subject_name,student.semester from student inner join subject on student.semester=subject.semester where course_id='$course_id';";
  $query=mysqli_query($link,$sql);
  $count=0;$i;
  $count=mysqli_num_rows($query);
  
  while($row=mysqli_fetch_array($query))
 
  {
    
    $id=$_SESSION["id"]=$row["id"];
    $snm=$_SESSION["fullname"]=$row["fullname"];
    $sbnm=$_SESSION["subject_name"]=$row["subject_name"];
    $sem=$_SESSION["semester"]=$row["semester"];
    mysqli_query($link,"insert into student_attendance values('$id','$snm','$course_id','$sbnm','$sem','$date','')");
  }
  header("location:take.php");
  ?>
</body>
</html>