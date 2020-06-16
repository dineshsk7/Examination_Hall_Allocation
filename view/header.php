<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>dineshsk7|blog</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<!-- Header -->
<div id="top-nav" class="navbar navbar-inverse navbar-static-top" style="background-color: background-color: #2d3436;
background-image: linear-gradient(315deg, #2d3436 0%, #000000 74%);">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-toggle"></span>
      </button>
       <div class="dropdown">
    <button class="btn dropdown-toggle" data-toggle="collapse" data-target = "#dropdown"style="color: white;background-color: black;" type="button" data-toggle="#dropdown">Admin
    <span class="caret"></span></button>
    <ul class="collapse" 
    id="dropdown" style="color: white;">
      <li><a href="all_hall.php" style="color: white;">Hall Details</a></li>
      <li><a href="view_file.php" style="color: white;">Result Details</a></li>
    </ul>
  </div>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right" style="padding-top: .5em;">
        <li><form action="../logout/index.php" method="POST">
             <button type="submit" class="btn btn-link" style="color: white;" name="logout" value="Logout"><i class="glyphicon glyphicon-lock"></i> Logout</button></form></li>
      </ul>
    </div>
  </div><!-- /container -->
</div>
</head>