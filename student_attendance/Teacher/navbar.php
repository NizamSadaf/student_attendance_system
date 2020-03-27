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
  background-image: linear-gradient(to right, #03fcc2 ,  #a5d6cb);
  
}

ul.topnav li {float: left;}

ul.topnav li a {
  display: block;
  color: black;
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
	background-color: aqua;
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
      <li><a class="<?php echo (basename($_SERVER['PHP_SELF'])=='plain_page.php') ?  'active' : '' ?>" href="plain_page.php">Home</a></li> 
     <li><a class="<?php echo (basename($_SERVER['PHP_SELF'])=='add_courses.php') ?  'active' : '' ?>" href="add_courses.php">Add Courses</a></li> 
  <li><a class="<?php echo (basename($_SERVER['PHP_SELF'])=='student_attendance.php') ?  'active' : '' ?>" href="student_attendance.php">Take Attendance</a></li>
  <li><a class="<?php echo (basename($_SERVER['PHP_SELF'])=='attendance_report.php') ?  'active' : '' ?>" href="attendance_report.php">Attendance Report</a></li>
  <li><a class="<?php echo (basename($_SERVER['PHP_SELF'])=='routine.php') ?  'active' : '' ?>" href="routine.php">Routine</a></li>
  <li><a href="logout.php">Logout</a></li>
  
</ul>

	</body>
</html>