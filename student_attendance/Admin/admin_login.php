<?php
 include "connect.php";
 session_start();
?>

<html lang="en">
<head>
  <title>Sudent Attendance System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>

    <style>
        body
        {
            margin:0;
            padding: 0;
            font-family: sans-serif;
            background-image: linear-gradient(to right,#ff5722,#ff9800);
        }
        .box
        {
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 420px;
            padding: 40px;
            position: absolute;
            text-align: center;
            background-color: #ffe6cc;
        }
        .box input[type="text"],.box input[type="password"]
        {
            display: block;
            width: 200px;
            margin: 20px auto;
            text-align: center;
            border-radius: 20px;
            padding:12px 14px;
            color: white;
            outline: none;
            background:none;
            transition: .25s;
            border:2px solid #07082b;
            font-size: 15px;
            
        }
        .box h1
        {
            text-transform: uppercase;
            font-weight: 500;
        }
        .box h1:hover
        {
            color: #178f53; 
            transition: 2s;
        }
        .box input[type="submit"]
        {
            border-radius: 20px;
            height:30px;
            
            color: black;
            background:none;
            
            text-align: center;
            width: 200px;
            text-transform: uppercase;
            border:2px solid #07082b;
            cursor: pointer;

        }
        .box input[type="text"]:hover,.box input[type="password"]:hover
        {
            border:2px solid #178f53; 
            width:400px;
            transition: .5s;
        }
        .box input[type="submit"]:hover
        {
            transition: 2s;
            background-color: #178f53;
        }
        
    </style>
</head>
<body class="login">
    
<form class="box" action="" method="post"> 
    <h1>
        login
</h1>
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" value="Login" name="submit">
</form>
        </div>
       <?php
       {
        $count=0;
           if(isset($_POST['submit']))
           {
            $sql="select * from admin where username='$_POST[username]' && password='$_POST[password]';";
            $query=mysqli_query($link,$sql);
            $count=mysqli_num_rows($query);
            if($count==0)
            {
           ?> 

        <!-----<div class="alert alert-danger" role="alert">
  Invalid Username or Password
</div>-------->
<div class="container">
    <div class="col-sm-6">
<div class="alert alert-danger">
Invalid Username or Password
</div>
</div>
</div>
<script type="text/javascript">
$(document).ready(function () {
 
window.setTimeout(function() {
    $(".alert").fadeTo(1000, 0).slideUp(0, function(){
        $(this).remove(); 
    });
}, 1000);
});
</script>
<?php
 }
 else
 {
             $_SESSION["username"]=$_POST["username"];
         header("location:plain_page.php");
         
         }
         }
       }
         ?>   
   </body>
</html>