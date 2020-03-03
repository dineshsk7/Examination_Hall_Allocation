<?php
    session_start();
    if(!isset($_SESSION['adminlogin']))
    {
        header('Location: ..');
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
        
    }
    .ah{
        width:40%;
        margin-left:10%;
        box-sizing:border-box;
        font-size:50px;
        text-align: center;
        padding-left: 10%;
        margin-top: 40px;
    }
    .s{
        width:40%;
        margin-right: 10%;
        box-sizing:border-box;
        font-size:50px;
        text-align: center;
        padding-right: 10%;
        margin-top: 40px;

    }
    .i{
        width:40%;
        margin-right: 10%;
        margin-left:10%;
        box-sizing:border-box;
        font-size:50px;
        margin-bottom: 10%;
        text-align: center;
    }
    button{
        box-sizing: border-box;
        width: 150px;
        height: 70px;
    }
    h1{
        text-align: center;
        font-family: sans-serif;
        font-weight: 600px;
        font-size: 40px;
    }
    p{
        font-size: 20px;
    }
    b{
        font-size: 25px;
    }
</style>
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
</div>
</body>
</html>
