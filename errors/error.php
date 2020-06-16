<!DOCTYPE HTML>
<html>
<head>
<title>Admin page</title>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!-- Header -->
<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-toggle"></span>
      </button>
      <p class="navbar-brand"  style="color: white;">Welcome!&nbsp;<span class="glyphicon glyphicon-heart-empty"></span></p>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right" style="padding-top: .5em;">
        <li><form action="../logout/index.php" method="POST">
             <button type="submit" class="btn btn-link" style="color: white;" name="logout" value="Logout"><i class="glyphicon glyphicon-lock"></i> Logout</button></form></li>
      </ul>
    </div>
  </div><!-- /container -->
</div>
<!-- /Header -->
</head>

<style>
    .navbar-static-top {
  margin-bottom:20px;
}

i {
  font-size:16px;
}

.nav > li > a {
  color:#787878;
}
h2{
    padding-top:.5em;
    padding-bottom: .5em;
    padding-right:1em;
    padding-left:1em;
}
.row{
    padding-top: 5em;
    padding-bottom: 5em;
}
.btn{
    color: blue;
    border-radius: 10px;
    box-shadow: 0 0 20px black; 
}
.btn:hover{
    box-shadow: 0 0 5px black;
    border-radius: 15px;
}
.panel-heading{
  border-radius: 20px 20px 0 0;
}
.panel-body{
 border-radius: 0 0 20px 20px; 
}
.navbar-header,.navbar-collapse{
  padding-top: 10px;
  padding-bottom: 20px;
}
</style>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
    </div>

    <!-- Login Form -->
    <div class="text-center">
      <h2 style="color: grey;"><?php echo $error; ?></h2>
    </div>

    <!-- Remind Passowrd -->
    
  </div>
</div>
</body>
</html>