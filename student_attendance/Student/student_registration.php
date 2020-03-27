<?php
include "connect.php";
    ?>
<html>
<header>
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
          <button type="button" class="btn btn-primary">
            join
          </button>
        </div>
        <div class="col-md-7  right">
          <h2>
            Register Here
          </h2>
          <div class="register-form">
            <div class="form-group">
              <form name="form" action="" method="post">
              	<input type="text" class="form-control" name="sid" placeholder="Student Id" required>
                <input type="text" class="form-control" name="fullname" placeholder="Fullname" required>
                <input type="text" class="form-control" name="semester" placeholder="Semester" required>
                <input type="phone" class="form-control" name="phone"placeholder="Phone" required>
                <input type="email" class="form-control" name="email" placeholder="Email" required>
                <input type="text" class="form-control" name="address"placeholder="Address" required>
                <input type="submit" class="btn btn-primary" name="submit" value="Register ">
              </form>
               
            </div>
            <?php
       if(isset($_POST['submit']))
       {
         mysqli_query($link,"insert into student values('$_POST[sid]','$_POST[fullname]','$_POST[semester]','$_POST[phone]','$_POST[email]','$_POST[address]')");
         mysqli_query($link,"insert into student_attendance(student_name,semester,status) values('$_POST[fullname]','$_POST[semester]','Absent')"); 
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