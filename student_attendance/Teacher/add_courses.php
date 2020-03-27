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
		form,#form1
		{
			text-align: center;
			display: block;
			margin-top: 30px;
		}
		input
		{
			margin: 10px ;
			padding:10px;
			width: 200px;
		}
		#form1 input[type="text"]
		{
			width: 400px;
			text-align: center;
		}
		
	</style>
</head>
<body>
<form method="post">
	<input type="text" name="course_no" placeholder="course_no">
	<input type="submit" name="submit" value="submit">
</form>
<?php
if(isset($_POST["submit"]))
{
	$name=$_SESSION["name"];

	$course_no=$_POST["course_no"];
	$query=mysqli_query($link,"select * from subject where course_id='$course_no'");
	$row=mysqli_fetch_array($query);
	$cnm=$row["subject_name"];
	$sem=$row["semester"];

?>
<form id="form1" method="post">
<input type="text" name="name" value="<?php echo $name; ?>" readonly><br>
<input type="text" name="course_no" value="<?php echo $course_no; ?>" readonly><br>
<input type="text" name="subject_name" value="<?php echo $cnm; ?>" readonly><br>
<input type="text" name="semester" value="<?php echo $sem; ?>" readonly><br>
<input type="text" name="time" placeholder="Class Time"><br>
<input type="text" name="days" placeholder="Saturday|Sunday|Monday|Tuesday|Wednesday|Thursday"><br>

<input type="submit" name="submit1">	
</form>

<?php
}
if(isset($_POST["submit1"]))
{
	mysqli_query($link,"insert into routine values ('$_POST[name]','$_POST[course_no]','$_POST[subject_name]','$_POST[semester]','$_POST[time]','$_POST[days]')");
}

?>	
</body>
</html>