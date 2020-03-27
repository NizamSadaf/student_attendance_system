<?php
include "connect.php";
    ?>
<html>
<header>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </header>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <style>
  *
{
    margin:0;
    padding: 0;
}
.registration
{
  background-image: linear-gradient(to right,#ff5722,#ff9800);
  margin-top: 100px !important;
}
.register-left
{
  text-align: center ;
  padding: 30px ;
  color: #fff ;
}
.register-left p
{
  
  padding: 20px 20px 0;
  
}
.register-left  .btn-primary
{
  border-radius: 1.5em;
  background-color: #f8f8f8;
  color: #555;
    width:80px;
    padding: 10px; 
    border: none;
    margin-top: 20px;
    font-weight: 600;
}
.register-left  .btn-primary:hover
{
  background-color: #000;
  color: #fff;
}
.right 
{
  border-top-left-radius: 10% 50%;
  border-bottom-left-radius: 10% 50%;
  background-color: #f8f8f8;

}
.right input
{
  margin-bottom: 5px;
  border: none;
  outline: none;
}
.right h2
{
  text-align: center;
  padding-top: 10px;
}
.register-form
{
  padding: 30px;
}
.right  .btn-primary
{
  float: right;
  border-radius: 1.5em;
  background-color: #ff9800;
  color: #555;
    width:80px;
    padding: 10px; 
    border: none;
    margin-top: 20px;
    font-weight: 600;
}
.right  .btn-primary:hover
{
  background-color: #ff5722;
} 
  </style>
</head>
<body class="registration">
<div class="container">
  <div class="row">
    <div class="col-md-10 offset=md-1">
      <div class="row">
        <div class="col-md-5  register-left">
          <h3>
            Welcome To IST
          </h3>
          <p>
            Education is the backbone of knowledge
          </p>
          <a href="#"><button type="button" class="btn btn-primary">
            Join
          </button></a>
        </div>
        <div class="col-md-7  right">
          <h2>
            Registration Form
          </h2>
          
          <div class="register-form">
            <div class="form-group">
              <form name="form" action="" method="post">
           <input type="text" class="form-control" name="tid" placeholder="Teacher Id" required>
          <input type="text" class="form-control" name="fullname" placeholder="Fullname" required>
          <input type="phone" class="form-control" name="age"placeholder="Age" required>
           <input type="phone" class="form-control" name="phone"placeholder="Phone" required>
           <input type="text" class="form-control" name="address"placeholder="Address" required>
          <input type="text" class="form-control" name="username" placeholder="Username" required>
          <input type="password" class="form-control" name="password" placeholder="Password" required>
          <input type="email" class="form-control" name="email" placeholder="Email" required>
         
         <input type="submit" class="btn btn-primary" name="submit" value="Register ">
            </form>
      
            </div>
            <?php
       if(isset($_POST['submit']))
       {
         mysqli_query($link,"insert into teacher values('$_POST[tid]','$_POST[fullname]','$_POST[age]','$_POST[phone]','$_POST[address]','$_POST[username]','$_POST[password]','$_POST[email]','No');"); 
       ?>
       <script type="text/javascript">
         alert("Successfully Registered!! Wait For Confirmation");
       </script>
       <?php
       }

       ?>
          </div>
        
        </div>
      </div>
      
    </div>
    
  </div>
  
</div>
        
       

       
        </body>
</html>