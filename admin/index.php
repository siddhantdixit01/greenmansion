<?php
   include("../conn.php");
   session_start();
   $error ="";
   if(isset($_POST['submit'])) {
      $myusername = mysqli_real_escape_string($conn,$_POST['email']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT name FROM admin WHERE email = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      if($count == 1) {
         $_SESSION['login_user'] = $row['name'];
         header("location: homepage.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }      
   }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin-login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php
			include('header.php');
	?>
	<div class="login">
		<h1>ADMIN LOGIN</h1>
		<form method="post">
			<input type="email" name="email" placeholder="E-mail Id"><br/><br/>
			<input type="password" name="password" placeholder="Password"><br/><br/>
			<input type="submit" name="submit" value="Submit"><br/><br/>
		</form>
		<?php if($error!=""){ echo $error; } ?>
	</div>
</body>
</html>