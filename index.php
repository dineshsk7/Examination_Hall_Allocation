<?php
  session_start();
  if(isset($_SESSION['admin']))
  {
    header('Location: admin/index.php');
  }

  if(isset($_POST['submit']))
  {
    require('model/databse.php');
    require('model/functions.php');
    $username = ucfirst($_POST['reg_no']);
    if(isValidAdminID($username))
    {
      $_SESSION['admin'] = $username; 
      header('Location: admin/index.php');
    }
    else if(isValidStudentLogin($username))
    {
      $_SESSION['student'] = $username;
      header('Location: student/result.php');  
    }
    else
    {?>
      <script>alert("invalid entry");</script>
   <?php }
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
<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="images/icon.JPG" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form action="" method="POST">
      <input type="text" id="login" class="fadeIn second" name="reg_no" placeholder="Register Number">
      <input type="submit" class="fadeIn fourth" value="submit" name="submit">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <p>All the best!</p>
    </div>

  </div>
</div>
</body>
</html>