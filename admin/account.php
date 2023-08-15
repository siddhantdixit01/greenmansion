<!DOCTYPE html>
<html>
<head>
	<title>Admin-reservation</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<?php
		include ("../conn.php");
		if(isset($_POST['submit']))
		{
			$name=$_POST['name'];
			$email=$_POST['email'];
			$password=$_POST['password'];
			$sql = "INSERT INTO admin(name, email, password) VALUES ('$name','$email','$password')";
			if ($conn->query($sql) === TRUE) {
			    echo "New Admin is added.";
			} else {
			    echo "Please check your details";
			}
		}
	?>
</head>
<body>
	<?php
			include('header.php');
	?>
	<div class="container">
		<?php
			include('sidebar.php')
		?>
		<div class="content">
			<div class="content1">
				<h2>Account Information</h2>
				<table>
					<tr>
						<th>Name</th>
						<th>E-mail</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
					<?php
						include("../conn.php");
						$sql="select id,name,email from admin";
						$result=mysqli_query($conn,$sql);
						while($row=mysqli_fetch_array($result))
						{
					?>
					<tr>
						<td><?php echo($row[1]);?></td>
						<td><?php echo($row[2]);?></td>
						<td><a style="color: black;" href="edit.php?id=<?php echo($row[0]);?>">Edit</a></td>
						<td><a style="color: black;" href="delete.php?id=<?php echo($row[0]);?>">Delete</a></td>
					</tr>
					<?php
						}
					?>
				</table>
				<button onclick="openfun()">Add New Admin</button>
			<div class="insert" id="form">
				<form method="post">
					<h3>Add new ADMIN</h3>
					<input type="text" name="name" placeholder="Name" required>
					<input type="email" name="email" placeholder="E-mail" required>
					<input type="password" name="password" placeholder="Password" required><br/><br/>
					<input type="submit" name="submit" value="Submit">
					<button onclick="closefun()">Close Form</button>
				</form>
			</div>
			<script type="text/javascript">
				function openfun() {
				  document.getElementById("form").style.display = "block";
				}

				function closefun() {
				  document.getElementById("form").style.display = "none";
				}
			</script>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</body>
</html>