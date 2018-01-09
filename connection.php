<?php
	try
	{
	$db = "mysql:dbname=save_files;host=localhost";
	$server = "root";
	$password = "";

	$con = new pdo($db,$server,$password);
	$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	}

	catch(PdoException $e)
	{
		echo "connection failed".$e->getMessage();
	}



?>