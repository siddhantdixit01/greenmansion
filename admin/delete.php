<?php
	include '../conn.php';
	$id=$_GET['id'];
	$sql="delete from admin where id='$id'";
	if ($conn->query($sql)===TRUE) {
		echo "Admin deleted Successfully!!!";
	}
?><br/>
<a href="account.php">Go Back</a>