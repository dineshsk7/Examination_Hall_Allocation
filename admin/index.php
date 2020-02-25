<?php  
    if(isset($_POST['login']))
  {
    require_once('../model/databse.php');
    require_once('../model/functions.php');
    $password = $_POST['password'];
    if(isValidAdminPass($password))
    {
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
      <p>All the best!</p>
    </div>

  </div>
</div>
</body>
</html>