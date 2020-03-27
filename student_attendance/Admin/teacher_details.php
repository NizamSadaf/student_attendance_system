<?php
include "connect.php";
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style>
		*
		{
			padding: 0;
			margin: 0;
			font-family: sans-serif;
		}
		table
		{
			border-collapse: collapse;
			width: 100%;
		}
		td,th
		{
			padding: 3px;
			text-align: center;
			border: 1px solid #ddd;
        
		}
		tr:nth-child(even){background-color: #f2f2f2;}
		tr:hover
		{
			background-color: #ddd;
			cursor: pointer;
		}
		th
		{
			padding: 15px;
			text-align: center;
			background-color: #4CAF50;
			color: #fff;
			
		}
		a
		{
			outline: none;
			text-decoration: none;
		}
		a:hover
		{
			color: red;
		}
	</style>
</head>
<body>
<table>
	<tr>
	<th>Fullname</th>
	<th>Phone</th>
    <th>Address</th>
    <th>Email</th>
    
    <th>Approve</th>
    <th>Not Approve</th>
    <th>Status</th>
</tr>
    <?php
    $query=mysqli_query($link,"select * from teacher");
  while($row=mysqli_fetch_array($query))
  {
     echo "<tr>";
     echo "<td>"; echo $row["full_name"]; echo "</td>";
     echo "<td>"; echo $row["phone"]; echo "</td>";
     echo "<td>"; echo $row["address"]; echo "</td>";
     echo "<td>"; echo $row["email"]; echo "</td>";
    
     echo "<td>"; ?> <a href="approve.php?id=<?php echo $row["id"];?>">Approve</a><?php echo "</td>";
     echo "<td>"; ?> <a href="notapprove.php?id=<?php echo $row["id"];?>">Not Approve</a><?php echo "</td>";
      echo "<td>"; echo $row["status"]; echo "</td>";
     echo "</tr>";
   
  }
?>
</table>
</body>
</html>