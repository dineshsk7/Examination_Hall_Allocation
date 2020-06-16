<?php
require('../model/databse.php');
$table_name = $_POST['table_name'];

global $db;

$message = ' ';

if(isset($_POST['add']))
{
	if($_FILES['computer_file']['name'])
	{
		$filename = explode(".", $_FILES['computer_file']['name']);
		if(end($filename)=="csv")
		{
$query = "
						UPDATE $table_name
						SET 
						s_id = '',
						s_name = ''
						where s_id !=''


				";
				$statement = $db->prepare($query);
				$statement->execute();
			$handle = fopen($_FILES['computer_file']['tmp_name'], "r");
			while($data = fgetcsv($handle))
			{

				$s_no = $db->quote($data[0]);
				$s_id = $db->quote($data[1]);
				$s_name = $db->quote($data[2]);
				$query = "
						UPDATE $table_name
						SET 
						s_id = $s_id,
						s_name = $s_name
						where s_no = $s_no


				";
				$statement = $db->prepare($query);
				$statement->execute();
			}
			fclose($handle);
			include("add.php");
		}
		else
		{
			$error = "Please Select  CSV File only";
			include("../errors/error.php");
		}
	}
	else
	{
		$error = "Please Select the File ";
			include("../errors/error.php");
	}
}

?>