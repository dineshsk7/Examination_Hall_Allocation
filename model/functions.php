<?php
	function isValidAdminID($reg_no)
	{
		global $db;
		$valid = false;
		$query = 'Select * from staff where reg_no = :ID';
		$statement = $db->prepare($query);
		$statement->bindValue(':ID', $reg_no);
		$statement->execute();
		if($statement->rowCount() == 1)
		{
			$valid = true;
		}
		else
		{
			$valid = false;
		}
		return $valid;
	}

	function isValidAdminPass($password)
	{
		global $db;
		$valid = false;
		$query = 'Select * from staff where admin_pass = :password';
		$statement = $db->prepare($query);
		$statement->bindValue(':password', $password);
		$statement->execute();
		if($statement->rowCount() == 1)
		{
			$valid = true;
		}
		else
		{
			$valid = false;
		}
		return $valid;
	}

	function isValidStudentLogin($reg_no)
	{
		global $db;
		$valid = false;
		$query = 'Select * from result where s_id = :reg_no';
		$statement = $db->prepare($query);
		$statement->bindValue(':reg_no', $reg_no);
		$statement->execute();
		if($statement->rowCount() == 1)
		{
			$valid = true;
		}
		else
		{
			$valid = false;
		}
		return $valid;
	} 
	function getCount($value)
	{
		global $db;
		$count = $db->query("SELECT * FROM $value");
		$total = $count->rowCount();

		$count = $db->query("SELECT s_id FROM $value where s_id = ''");
		$erase = $count->rowCount();

		return $total-$erase;
	}
	function getResult($value)
	{
		global $db;
		$count = $db->query("SELECT * FROM result WHERE class = '$value'");
		$total = $count->rowCount();

		return $total;
	}

?>