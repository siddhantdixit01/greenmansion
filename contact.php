<!DOCTYPE html>
<html>
<head>
	<title>TheGreenMansion-Reservation</title>
	<link rel="stylesheet" type="text/css" href="css/style-pages.css">
</head>
<body>
	<?php 
	include('header.php');
	?>
	<div class="contactus">
		<div class="contact1">
			<h2>Contact Us</h2>
			<div class="contact">
				<h2>Get In Touch With Us</h2>
				<p>If you have questions or comments, please get a hold of us in whichever way is most convenient. Ask away. There is no reasonable question that our team can not answer.</p><br>
				<h4>Office Address</h4>
				<p>27h / 1a, Chak-Daud Nagar, Naini, Prayagraj.</p>
				<p>+91 8299172714</p>
				<p>support@greenmansion.com</p>
			</div>
			<div class="contact">
				<form method="post">
					<input type="text" name="name" class="r-form" placeholder="Full Name" required>
					<input type="email" name="email" class="r-form" placeholder="E-mail" required>
					<input type="text" name="subject" class="r-form" placeholder="Subject">
					<textarea required class="r-form" name="msg" cols="30" rows="10" placeholder="Your Message"></textarea>
					<input type="submit" class="submitt" value="Send" name="submit"/>
				</form>
			</div>
			<div class="clear"></div>
		</div>	
	</div>
	
	<?php
		include 'footer.php' ;
		include "conn.php";
		if(isset($_POST['submit']))
		{
			$name=$_POST['name'];
			$email=$_POST['email'];
			$sub=$_POST['subject'];
			$msg=$_POST['msg'];

			$sql = "INSERT INTO contact(name, email, subject, message) VALUES ('$name','$email','$sub','$msg');";
			if ($conn->query($sql) === TRUE) {
			    echo "Record inserted successfully <br/>";
			} else {
			    echo "Please check your details";
			}
		}

	?>
</body>
</html>