<!DOCTYPE html>
<html>
<head>
	<title>TheGreenMansion</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container">
		<div class="header">
			<div class="logo">
				<a href="index.php">
					<img src="images/logo-top.png" width="400px" height="42px">
				</a>
			</div>
			<div class="menu">
				<ul>
					<li><a href="index.php" >HOME</a></li>
					<li><a href="menu.php">MENU</a></li>
					<li><a href="team.php">TEAM</a></li>
					<li><a href="gallery.php">GALLERY</a></li>
					<li><a href="reservation.php">RESERVATION</a></li>
					<li><a href="contact.php">CONTACT US</a></li>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
		<div class="content">
			<h1>Welcome</h1>
			<h4>To </h4><br/>
			<h3>THE GREEN MANSION</h3>
			<p>
				Give your tastebuds a treat!
			</p><br>
			<a href="reservation.php" class="reser">BOOK A TABLE</a>
		</div>
	</div>
	<div class="about">
		<div class="contain">
			<div class="about1">
				<h1 class="about-head">About Us</h1>
				<p>The Green Mansion is the home to some of the most authentic tasting North Indian cuisines. We are a trusted name when it comes to a North Indian fine dining experience. Our dishes are created using the finest ingredients, fresh herbs and spices, and lots of skills. You can enjoy your favourite food, in a relaxing and comfortable ambience. Punjabi By Nature is an all time favourite restaurant among one and all. Walk in through our doors to a whole new and delicious world of wholesome meals. From various platters, delicious kebabs and flavour packed chicken and mutton preparations, we bring you the real taste of North Indian delights. Savour your taste buds now!</p>
			</div>
			<div class="about2">
				<img src="images/about-main.jpg" class="about-img">
				<img src="images/about-inset.jpg"  class="about-img2">
			</div>
			<div class="clear"></div>
		</div>	
	</div>
	<div class="design">
		<div class="design-box">
			<h1>Culinary</h1>
			<h3>Delight</h3><br>
			<p>We promise an intimate and relaxed dining experience that offers something different to local and foreign patrons and ensures you enjoy a memorable food experience every time.</p><br>
			<a href="reservation.php">MAKE A RESERVATION</a>
		</div>
		<img src="images/design1.jpg" class="design-img">
		<img src="images/design2.jpg" class="design-img">
	</div>
		<div class="food-menu">
		<div class="menu-img">
			<img src="images/home-menu1.jpg">
			<img src="images/home-menu2.jpg">
			<img src="images/home-menu3.jpg">
			<img src="images/home-menu4.jpg">
		</div>
		<div class="menu-box">
			<h1>Discover</h1>
			<h3>Our Menu</h3><br>
			<p>For those with pure food indulgence in mind, come next door and sate your desires with our ever changing internationally and seasonally inspired small plates.  We love food, lots of different food, just like you.</p><br>
			<a href="menu.php">VIEW THE FULL MENU</a>
		</div>
		<div class="clear"></div>
	</div>
	<?php
		include 'footer.php';
	?>
</body>
</html>