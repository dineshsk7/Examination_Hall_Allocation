<?php
require('../model/databse.php');
$table_name = $_POST['final'];
$final = $_POST['table_name'];
global $db;
		$list = $db->query("SELECT * FROM $final");
		foreach ($list as $product) :
				$data = [ 's_no' => $product['s_no'],'s_id' => $product['s_id'],'s_name' => $product['s_name']];
				$sql = "UPDATE $table_name SET s_id=:s_id,s_name=:s_name WHERE s_no=:s_no";
				$stmt = $db->prepare($sql)->execute($data); 
				$data = [ 's_id' => $product['s_id']];
				$query = "DELETE FROM result WHERE s_id =:s_id";
				$stmt = $db->prepare($query)->execute($data);	
	endforeach;
			include("add.php");							
