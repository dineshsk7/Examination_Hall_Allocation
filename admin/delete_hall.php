<?php
// Get IDs
$hall_id = $_POST['hall_id'];
$block_id = $_POST['block_id'];

// Delete the product from the database
require_once('../model/databse.php');
$query = "DELETE FROM block
          WHERE b_id = '$hall_id'";
$db->exec($query);
// display the Product List page
include('hall.php');
?>