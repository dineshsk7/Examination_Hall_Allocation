<?php 
require('../model/databse.php');
if(!isset($_POST['enter'])){
	header('location:result.php');
}
$s_id=strtoupper($_POST['s_id']);
$query="SELECT * FROM result";
$results=$db->query($query);
    foreach ($results as $result) :
    if($result['s_id']==$s_id){ 
    	$reg_no=$result['s_id'];
    	$name=$result['s_name'];
    	$class=$result['class'];
}
    endforeach; ?>
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
    <div class="fadeIn first" style="background-color: #de4256;
background-image: linear-gradient(315deg, #de4256 0%, #b78e51 74%);color: white;  border-radius: 10px 10px 0 0;">
    	<p style="padding-top: 10px;padding-bottom: 10px;"><?php 
    		$firstname=explode(" ", $name);
    		echo "Hi ".ucfirst(strtolower($firstname[0]))."!";
    	 ?></p>
    </div>

    <!-- Login Form -->
    <div class="text-center">
 
    	<?php echo nl2br("Reg-No: ".$reg_no."\n Name: ".$name."\n Hall-No: ".$class);?>
</div>

    <!-- Remind Passowrd -->
    <div id="formFooter" style="background-color: #de4256;
background-image: linear-gradient(315deg, #de4256 0%, #b78e51 74%);color: white;">
    	<p>All the Best!</p>
    </div>

  </div>
</div>
</body>
</html>