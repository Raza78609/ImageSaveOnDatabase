<?php 
include('db/connection.php');

if(isset($_POST['btn']))
{
	$name = $_FILES['file']['name'];
	$type = $_FILES['file']['type'];
	$data = file_get_contents($_FILES['file']['tmp_name']);
	$query = $con->prepare("insert into tbl_save values('',?,?,?)");
	$query->bindParam('1',$name);
	$query->bindParam('2',$type);
	$query->bindParam('3',$data);
	if($query->execute())
	{
		header('location:index.php');
	}
}

?>