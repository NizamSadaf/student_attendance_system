<html>
<title>
	Student Attendance System 
	</title>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body {margin: 0;}

ul.topnav {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #111;
}

ul.topnav li {float: left;}

ul.topnav li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

ul.topnav li a:hover:not(.active) 
{
	background-color: #fff;
	color:#111;
}

.active 
{
	background-color: green;
	color: #111;
   
}



@media screen and (max-width: 600px) {
  ul.topnav li.right, 
  ul.topnav li {float: none;}
}
</style>
</head>
	<body>
		<ul class="topnav">
  <li><a class="<?php echo (basename($_SERVER['PHP_SELF'])=='teacher_info.php') ?  'active' : '' ?>" href="teacher_info.php">Teacher Info</a></li>
  <li><a class="<?php echo (basename($_SERVER['PHP_SELF'])=='student_info.php') ?  'active' : '' ?>" href="student_info.php">Student Info</a></li>
  <li><a href="logout.php">Logout</a></li>
  
</ul>

	</body>
</html>