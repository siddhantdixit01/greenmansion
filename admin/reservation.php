<!DOCTYPE html>
<html>
<head>
	<title>Admin-reservation</title>
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
				<h2>Reservation</h2>
				<table>
					<tr>
						<th>Name</th>
						<th>Email</th>
						<th>Phone No.</th>
						<th>Date</th>
						<th>How Many?</th>
						<th>Message</th>
					</tr>

					<?php
						include("../conn.php");
						$sql="select * from reservation order by date";
						$result = mysqli_query($conn,$sql);			
						while ($row = mysqli_fetch_array($result)) {
					?>

					<tr>
						<td><?php printf($row[0]); ?></td>
						<td><?php echo($row[1]); ?></td>
						<td><?php echo ($row[2]); ?></td>
						<td><?php echo($row[3]); ?></td>
						<td><?php echo($row[4]); ?></td>
						<td><?php echo($row[5]); ?></td>
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