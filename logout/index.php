<?php
	session_start();
	if(isset($_POST['logout']) or isset($_POST['back']))
	{
		if(isset($_SESSION['admin'])) unset($_SESSION['admin']);
		if(isset($_SESSION['adminlogin'])) unset($_SESSION['adminlogin']);
		if(isset($_SESSION['student'])) unset($_SESSION['student']);
		header('Location: ..');
	}
?>