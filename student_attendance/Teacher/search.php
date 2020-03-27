<?php
 include "connect.php";
 session_start();
 $id=$_SESSION["id"];
 $query=mysqli_query($link,"select * from student_attendance where id='$id'");
 echo "<table>";
    echo "<tr>";  
      echo "<th>"; echo "Student Id"; echo "</th>";
      echo "<th>"; echo "Student Name"; echo "</th>";
      echo "<th>"; echo "Subject Id"; echo "</th>";
      
  echo "<th>"; echo "Status"; echo "</th>";
    echo  "</tr>";
 while ($row=mysqli_fetch_array($query)) 
 {
   echo "<tr>";
   echo "<td>"; echo $row["id"]; echo "</td>";
   echo "<td>"; echo $row["student_name"]; echo "</td>";
   echo "<td>"; echo $row["subject_name"]; echo "</td>";
   echo "<td>"; echo $row["status"]; echo "</td>";
  echo "</tr>";
 }
 echo "</table>";
?>