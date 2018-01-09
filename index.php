<!DOCTYPE html>
<html>
<head>
	<title>testing</title>
</head>
<body>

<form method="post" enctype="multipart/form-data" action="act_insert.php">
	<input type="file" name="file">
	<button name="btn">upload</button>
</form>
<p></p>

<ol>
	<?php
	include('db/connection.php');
	$query1 = $con->prepare('select * from tbl_save');
	$query1->setFetchMode(PDO::FETCH_ASSOC);
	$query1->execute();
	$fetch = $query1->fetchAll();
	foreach($fetch as $row):
	?>
	<li><a href="show.php?id=<?php echo $row['id'];?>"><?php echo  $row['name']; ?></a></li><br>
	<img src="data:<?php echo $row['mime']; ?>;base64,<?php echo base64_encode($row['data']); ?>" width="200">
	<?php endforeach; ?>
	
</ol>

</body>
</html>