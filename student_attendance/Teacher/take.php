<?php
include "connect.php";
include "navbar.php";
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style>
    *
    {
      margin:0;
      padding: 0;
    }
    table
    {
      width: 100%;
    }
    td,th
    {
      text-align: center;
      padding: 5px;
    }
    a
    {
      outline: none;
      border:none;
      text-decoration: none;
    }
    a:active
    {
      color: yellow;
    }
  </style>
</head>
<body>
<table>
    <tr>  
      <th>Student Id</th>
      <th>Student Name</th>
       <th>Course Id</th>
      <th>Subject Name</th>
      <th>Date</th>
      <th>Present</th>
      <th>Absent</th>
  <th>Status</th>
      </tr>
      <?php
      $date=$_SESSION["date"];
      $course_id=$_SESSION["course_id"];
       $query1=mysqli_query($link,"select * from student_attendance where date='$date' && course_id='$course_id'");
       while($row=mysqli_fetch_array($query1))
       {
        ?>
        <tr>
      <td> <?php echo $row["id"]; ?></td>
      <td> <?php echo $row["student_name"]; ?></td>
      <td> <?php echo $row["course_id"]; ?></td>
      <td> <?php echo $row["subject_name"]; ?></td>
      <td> <?php echo $row["date"]; ?></td>
      <td><a href="present.php?id=<?php echo $row["id"]; ?>">Present</a></td>
      <td><a href="absent.php?id=<?php echo $row["id"]; ?>">Absent</a></td>
      <td> <?php echo $row["status"]; ?></td>
  </tr>
  <?php
       }
      ?>
</body>
</html>