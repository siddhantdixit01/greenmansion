<!DOCTYPE html>
<html>
<head>
	<title>TheGreenMansion-Reservation</title>
	<link rel="stylesheet" type="text/css" href="css/style-pages.css">
</head>
<?php
		include "conn.php";
		if(isset($_POST['submit']))
		{
			$name=$_POST['name'];
			$email=$_POST['email'];
			$phone=$_POST['phone'];
			$dat=$_POST['date'];
			$quantity=$_POST['quantity'];
			$msg=$_POST['msg'];

			$sql = "INSERT INTO reservation(name, email, phone, date, quantity, message) VALUES ('$name','$email','$phone','$dat','$quantity','$msg');";
			if ($conn->query($sql) === TRUE) {
			    $msg="Reservation query has been recieved, you will get an email once reservation is confirmed.";
			} else {
			    echo "Please check your details";
			}
		}
	?>
<body>
	<?php 
	include('header.php');
	?>
	<div class="reserve">
		<div class="reservation">
			<h1>Make Online Reservation</h1>
			<p>Booking a table online is easy and takes just a couple of minutes.</p><br/>
			<div class="r-box1">
				<form method="post" name="reserve" onsubmit="validate()">
					<input type="text" name="name" class="r-form" placeholder="Full Name" required>
					<input type="email" name="email" class="r-form" placeholder="E-mail" required>
					<input type="text" name="phone" class="r-form" placeholder="+91 | Phone Number" required>
					<input type="date" id="datepicker" name="date" class="r-form" placeholder="Date" required>
					<select class="form-control" name="quantity">
						<option value="0">How Many?</option>
						<option value="1">1 Person</option>
						<option value="2">2 People</option>
						<option value="3">3 People</option>
						<option value="4">4 People</option>
						<option value="5">5 People</option>
						<option value="6">6 People</option>
						<option value="7">7 People</option>
						<option value="8">8 People</option>
						<option value="9">9 People</option>
						<option value="10">10 People</option>
					</select>
					<textarea class="r-form" name="msg" cols="30" rows="10" placeholder="Your Message"></textarea>
					<input type="submit" class="submitt" value="Submit" name="submit" />		
				</form>
			</div>
			<div class="r-box2">
				<div class="box">
					<h1>Opening Hours</h1>
					<p>Monday - Saturday<br>
					<span>11:00 AM - 9:00 PM</span><br><br>
					Saturday - Sunday<br>
					<span>11:00 AM - 5:00 PM</span></p>
				</div>
			</div>
			<div class="clear"></div>
		</div>	
		<div class="msg">
			<?php if(isset($_POST['submit'])){ echo $msg; } ?>
		</div>
	</div>	
	<?php include 'footer.php' ; ?>
	<script type="text/javascript">
		function validate() {
			var x=document.forms["reserve"]["phone"].value;
			if(x<=1000000000 || x>=10000000000)
			{
				alert("Enter valid phone number.");
				return false;
			}
			//-----------------DATE?----------
			var y=document.forms["reserve"]["quantity"].value;
			if(y<=0)
			{
				alert("Select valid number of seats.");
				return false;
			}
		}
	</script>
</body>
</html>