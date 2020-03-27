<?php
include "connect.php";
include "navbar.php";
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		*
		{
			margin: 0;
			padding: 0;
		}
		table
		{
			background-color:#D3D3D3;
	  margin-top: 15%;
	  margin-left: 15%;
	  width: 75%;
		}
		th
	   {
		background-color: #4CAF50;
		color: #fff;
	  }
		td,th
		{
			text-align: center;
		}
		tr:hover
		{
			background-color: 	#A9A9A9;
			cursor: pointer;
		}
	</style>
</head>
<body>
<table>
	<tr>
	<th>Course Id</th>
	<th>Course Name</th>
	<th>Semester</th>
	<th>Time</th>
	<th>Day</th>
</tr>
    <?php
    $name=$_SESSION["name"];
    $query=mysqli_query($link,"select * from routine where full_name='$name'");
  while($row=mysqli_fetch_array($query))
  {
     echo "<tr>";
     echo "<td>"; echo $row["course_id"]; echo "</td>";
     echo "<td>"; echo $row["course_name"]; echo "</td>";
     echo "<td>"; echo $row["semester"]; echo "</td>";
     echo "<td>"; echo $row["time"]; echo "</td>";
     echo "<td>"; echo $row["day"]; echo "</td>";
     echo "</tr>";
   
  }
?>
</table>
</body>
</html>