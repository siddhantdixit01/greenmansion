<!DOCTYPE html>
<html>
<head>
	<title>Admin-contact</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php
			include('header.php')
		?>
	<div class="container">
		<?php
			include('sidebar.php')
		?>
		<div class="content">
			<div class="content1">
				<h2>Contact Us</h2>
				<table>
					<tr>
						<th>Name</th>
						<th>Email</th>
						<th>Subject</th>
						<th>Message</th>
					</tr>

					<?php
						include("../conn.php");
						$sql="select * from contact";
						$result = mysqli_query($conn,$sql);			
						while ($row = mysqli_fetch_array($result)) {
					?>

					<tr>
						<td><?php printf($row[0]); ?></td>
						<td><?php echo($row[1]); ?></td>
						<td><?php echo ($row[2]); ?></td>
						<td><?php echo($row[3]); ?></td>
					</tr>

					<?php	    
						  }			  
					?>
				</table>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</body>
</html>