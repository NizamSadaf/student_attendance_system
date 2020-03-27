<?php
include "connect.php";
include "navbar.php";
session_start();
?>
<style>
form
  {
    margin:30%;
    margin-top: 25%; 
  }
input
{
  width: 100%;
  height:30px;
  margin-top:5px; 
}
select
{
  width: 100%;
  height:30px;
  margin-top:5px; 
}
</style>
<html>
<head>

</head>
<body>
<form action="" method="post">
  <select name="course_id">
  <?php
  $name=$_SESSION["name"];
  $query=mysqli_query($link,"select * from routine where full_name='$name'");
  while($row=mysqli_fetch_array($query))
  {
    $course_id=$row["course_id"];
    ?>
    <option value="<?php echo $course_id;?>"><?php echo $course_id;?></option>
    <?php
  }
  ?>
  </select>
  <input type="text" name="date" placeholder="yy-mm-dd">
  <input name="submit" type="submit" value="Submit">
</form>
<?php
  if(isset($_POST["submit"]))
  {
       $_SESSION["course_id"]=$_POST["course_id"];
       $_SESSION["date"]=$_POST["date"];
       header("location:attendance_list.php");
  }
?>

</table>
</body>
</html>