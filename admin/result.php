<?php
require('../model/databse.php');
if(empty($_POST['add_count']) || empty($_POST['b_id']) || empty($_POST['table_name'])){
	$error="Please enter the valid entries";
	include('../errors/error.php');
}else{
$add_count=$_POST['add_count'];
$b_id=$_POST['b_id'];
$table_name=$_POST['table_name']; 
global $db;
if(!empty($add_count) and !empty($b_id) and !empty($table_name) and is_numeric($add_count))
	{
		$list = $db->query("SELECT * FROM $table_name WHERE s_id != '' LIMIT $add_count");
		foreach ($list as $product) :
			$s_id = $product['s_id'];
			$s_name = $product['s_name'];
			    $query = "INSERT INTO result
              VALUES
                 ('$s_id', '$s_name', '$b_id')";
    $db->exec($query);
		

	endforeach;
$query = "
						UPDATE $table_name
						SET 
						s_id = '',
						s_name = ''
						where s_id !='' LIMIT $add_count;


				";
				$statement = $db->prepare($query);
				$statement->execute();
			include("add.php");							
		}
		else{
			$error="Please enter the valid entries";
			include('../errors/error.php');
		}
	}

