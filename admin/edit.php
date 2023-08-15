<?php
	include '../conn.php';
	$id=$_GET['id'];
	$sql="select * from admin where id='$id'";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($result);
?>
<body>
	<form method="post">
		<label for="name">Name:</label>
		<input type="text" name="name" value="<?php echo $row['name'];?>"><br/>
		<label for="email">E-mail:</label>
		<input type="email" name="email" value="<?php echo $row['email'];?>"><br/>
		<label for="password">Password:</label>
		<input type="text" name="password" value="<?php echo $row['password'];?>"><br/>
		<input type="submit" name="submit" value="Submit">
	</form>
	<?php
		if(isset($_POST['submit'])){
			mysqli_query($conn,"UPDATE admin set name='" . $_POST['name'] . "',email='" . $_POST['email'] ."', password='" . $_POST['password'] . "' WHERE id='" . $id . "'");
			header("location:account.php");
		}
	?>
</body>