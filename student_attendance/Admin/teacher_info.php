<?php
include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
<style>
form
  {
    margin:30%;
    margin-top: 25%; 
  }
select {
  width: 100%;
  padding: 16px 20px;
  border: none;
  border-radius: 4px;
  background-color: #f1f1f1;
}
input
{
  width: 100%;
  height:30px;
  margin-top:5px; 
}
</style>
</head>
<body>
<form action="" method="post">
  <select id="category" name="category">
  <option value="Teacher Details">Teacher Details</option>
  </select>
  <input name="submit" type="submit" value="Submit"></input>
</form>
<?php
if(isset($_POST['submit']))
{
  
     header("location:teacher_details.php");
  
}
?>
</body>
</html>