
<?php
include "navbar.php";
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Sudent Attendance System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<h1 style="margin-left:40%" class="btn btn-info btn-lg">
	
          <span class="glyphicon glyphicon-user">
          	</span>
	Welcome 
	<?php 
      $admin_username= $_SESSION["username"];
	  echo $admin_username;
	?>

</h1>
</body>
</html>