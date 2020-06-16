<?php
    session_start();
    if(!isset($_SESSION['student']))
    {
        header('Location: ..');
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
    </div>

    <!-- Login Form -->
    <div class="text-center">
      <h2 style="color: grey;">Re-Enter Your Regno</h2>
    </div>
    <form action="final_one.php" method="POST">
      <input type="text"  class="fadeIn second" name="s_id">
      <input type="submit" class="fadeIn fourth" value="Enter" name="enter">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
    <form class="text-center" action="../logout/index.php" method="POST">
        <input type="submit" style= "color: black;background-color: white;" name="back" value="back">
    </form>

    </div>
     <p>All the best!</p>
  </div>
</div>
</body>
</html>