<?php
include "navbar.php";
include "connect.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	form
	{
		margin-left: 35%;
		margin-top: 20px;
	}
	input[type="text"]
	{
		width: 200px;
		height: 30px;
		border-radius: 10px;
		outline: none;
		text-decoration: none;
	}
	input[type="submit"]
	{
		border-radius: 10px;
		height: 30px;
		cursor: pointer;
	}
	th
	{
		background-color: #4CAF50;
		color: #fff;
	}
	th,td
	{
		text-align: center;
	}
	tr:hover
		{
			background-color: 	#A9A9A9;
			cursor: pointer;
		}
	table
    {
    	background-color:#D3D3D3;
	  margin-left: 15%;
	  width:75%;
	}
</style>
<body>
<form method="post"> 
	<input type="text" name="course_id">
    <input type="submit" name="submit">
</form>
<?php
if(isset($_POST["submit"]))
{
	$course_id=$_POST["course_id"];
	$query=mysqli_query($link,"select distinct(id),student_name from student_attendance where course_id='$course_id' order by id asc");
	echo "<table>";
	echo "<tr>";
	echo "<th>";echo "Id"; echo "</th>";
	echo "<th>";echo "Student Name"; echo "</th>";
	echo "<th>";echo "Course Id"; echo "</th>";
	echo "<th>";echo "Present Days"; echo "</th>";
	/*echo "<th>";echo "Subject Name"; echo "</th>";
	echo "<th>";echo "Semester"; echo "</th>";*/
	echo "<th>";echo "Absent Days"; echo "</th>";
	echo "<th>";echo "Attendance Rate"; echo "</th>";
	echo "</tr>";
	while($row=mysqli_fetch_array($query))
	{
		$id= $row["id"];
		$name=$row["student_name"];
          $qry=mysqli_query($link,"select id,student_name,count(status) from student_attendance where status='Present' and id='$id' order by id asc");
          $qry1=mysqli_query($link,"select id,student_name,count(status) from student_attendance where status='Absent' and id='$id' order by id asc");
          $row1=mysqli_fetch_array($qry);
          $row2=mysqli_fetch_array($qry1);
          $present=$row1["count(status)"];
          $absent=$row2["count(status)"];
          $total= $present+$absent;
          $percentage=($present/$total)*100;
          echo "<td>"; echo $id; echo "</td>";
          echo "<td>"; echo $name; echo "</td>";
          echo "<td>"; echo $course_id; echo "</td>";
          echo "<td>"; echo $row1["count(status)"]; echo "</td>";
          echo "<td>"; echo $row2["count(status)"]; echo "</td>";
          echo "<td>"; echo round($percentage,2)."%"; echo "</td>";
              echo "</tr>";
	}
	echo "</table>";
}
?>
</body>
</html>