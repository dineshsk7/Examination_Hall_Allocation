<?php
    session_start();
    if(!isset($_SESSION['adminlogin']))
    {
        header('Location: ..');
<<<<<<< HEAD
=======
    }
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Admin page</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<style>
    .container{
        width:100%;
        height:auto;
        display:flex;
        flex-direction: row;
        justify-content: space-around;
        flex-flow: wrap;
>>>>>>> 6a914f847e7a20cf0f65977b2292db335b297ef3
        
    }
    include('../view/header.php');
?>
<body>
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
    padding-bottom: 5em;
    padding-top: 5em;
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
<<<<<<< HEAD
<div class="container-fluid">
<div class="panel panel-default">
    <div class="panel-heading" style="background-color: #485461;
background-image: linear-gradient(315deg, #485461 0%, #28313b 74%);
"><h1 class="text-center" style="color: white;"> Blocks</h1></div>
        <div class="panel-body" style="background-color: #5b6467;
background-image: linear-gradient(315deg, #5b6467 0%, #8b939a 74%);
">
            <div class="row">
                <div class="text-center"><div class="col-sm-4"><form action="hall.php" method="POST">
             <button type="submit" class="btn btn-default" name="block_id" value="AH"><h2>AH</h2></button></form></div></div>
                <div class="text-center"><div class="col-sm-4"><form action="hall.php" method="POST">
             <button type="submit" class="btn btn-default" name="block_id" value="I"><h2>I</h2></button></form></div></div>
                <div class="text-center"><div class="col-sm-4"><form action="hall.php" method="POST">
             <button type="submit" class="btn btn-default" name="block_id" value="S"><h2>S</h2></button></form></div></div>
            </div>
            <div class="row" class="text-center">
                <div class="text-center"><div class="col-sm-6"><form action="hall.php" method="POST">
             <button type="submit" class="btn btn-default" name="block_id" value="R"><h2>R</h2></button></form></div></div>
                <div class="text-center"><div class="col-sm-6"><form action="hall.php" method="POST">
             <button type="submit" class="btn btn-default" name="block_id" value="V"><h2>V</h2></button></form></div></div>
            </div>

        </div>
</div>
=======
<body>
<div class="container-fluid">
    <h1 class="text-center">Admin</h1>
    <form class="text-right" action="../logout/index.php" method="POST">
            <input type="submit" name="logout" value="Logout">
    </form>
</div>
<div class="container">
    <div class="ah"><a href="hall.php"><button><b>AH</b></button></a><p>School of Computer Studies</p></div>
    <div class="s"><a href="../construction.php"><button><b>S</b></button></a><p>School of Commerce</p></div>
    <div class="ah"><a href="../construction.php"><button><b>V</b></button></a><p>Life science</p></div>
    <div class="s"><a href="../construction.php"><button><b>R</b></button></a><p>School of Management</p></div>
    <div class="i"><a href="../construction.php"><button><b>I</b></button></a><p>Maths/English</p></div>
>>>>>>> 6a914f847e7a20cf0f65977b2292db335b297ef3
</div>
</body>
</html>
