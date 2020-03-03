<?php  
  session_start();
  if(!isset($_SESSION['admin']))
  {
    header('Location: ..');
  }
  if(isset($_SESSION['adminlogin']))
  {
    header('Location: admin.php');
  }

    if(isset($_POST['login']))
  {
    require_once('../model/databse.php');
    require_once('../model/functions.php');
    $password = $_POST['password'];
    if(isValidAdminPass($password))
    {
      $_SESSION['adminlogin']=$password;
      header('Location: admin.php');
    }
  }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>dineshsk7|blog</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="../main.css">
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <h2 style="color: grey;">Enter Your Password</h2>
    </div>

    <!-- Login Form -->
    <form action="" method="POST">
      <input type="text" id="login" class="fadeIn second" name="password" placeholder="Password">
      <input type="submit" class="fadeIn fourth" value="submit" name="login">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
          <form class="text-center" action="../logout/index.php" method="POST">
        <input style= "color: black;background-color: white;" type="submit" name="back" value="back">
    </form>

    </div>

  </div>
</div>
</body>
</html>