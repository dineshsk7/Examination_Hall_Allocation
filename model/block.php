<?php
	global $db;
	$block_id = $_POST['block_id'];
    $query = "SELECT * FROM block
              where block=$block_id";
    $class = $db->query($query);
?>