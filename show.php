<?php

include('db/connection.php');

if(isset($_GET['id']))
{
	$id = $_GET['id'];
	$query = $con->prepare("select * from tbl_save where id='$id'");
	$query->setFetchMode(PDO::FETCH_ASSOC);
	$query->execute();
	$fetch = $query->fetch();
	header('Content-Type:'.$fetch['mime']);
	echo $fetch['data'];
}

?>

