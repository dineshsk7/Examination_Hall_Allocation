<?php 
$hall_id = $_POST['hall_id'];
$hall_strength = $_POST['hall_strength'];
$block_id = $_POST['block_id'];
    require_once('../model/databse.php');

if(empty($hall_id) || empty($hall_strength)){
    $error = "Invalid product data. Check all fields and try again.";
    include('../errors/error.php');
}
else {
	global $db;
		$query = 'Select * from block where b_id = :ID';
		$statement = $db->prepare($query);
		$statement->bindValue(':ID', $hall_id);
		$statement->execute();
		if($statement->rowCount() == 1)
		{
			   $error = "Already exist";
    include('../errors/error.php');
		}
		else
		{
	$hall=explode("-", $hall_id)[0];
    $query = "INSERT INTO block
              VALUES
                 ('$hall_id', '$hall', '$hall_strength')";
    $db->exec($query);

    // Display the Product List page
    include('hall.php');
}
}
?>