<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
 <style>
	<title> Ticketmator | Events </title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="Styles/button.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>#page{text-align:center;}</style>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="Styles/homepage.css"/>
	</style>
	</head>
<body>

	 <div style="background-color:black;"><h1 style =" color: blue; font-family: African; margin-top: 15px;">Ticketmator.lk</h1>
	<br>

		 <div class="topnav">
			<a style="background-color:purple"class="hover" href="register.php" >Register</a>
			<a style="background-color:green"class="hover" href="login.php" >LOGIN</a>
			<a class="hover" href="ContactUs.php">Contact Us</a>
			<a class="hover" href="Events.php">Events</a>
			<a class="hover" href="AboutUs.php">About Us</a>
			<a class= "hover" href="Home.php" >Home</a>
			 
			 
		</div>
	</div>
	
	<br>
	<hr>
	<br>

	<div class="container">
	<h2 id="page" style=" color:red"><u>Login Page</u></h2><br><br>

	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

			<br><br>
			<label>Username</label><br>
			<input type="text" name="username" ><br><br>

			<label>Password</label><br>
			<input type="password" name="password"><br>
			<br>

			<button type="submit" class="btn" name="login_user">Login</button>

		<p style="color:white;">
			Not yet a member? <a href="register.php" style="color:red;">Sign up</a>
		</p>
	</form>
</div>

<br><br>
	<hr><br>

	<footer>
	<div class="row">
		<div class="column">For assistant Call<br>0775553421<br><br><br>Address<br><br>Ticketmator.lk<br>No:-50/1,<br>Widyarathna Place,<br>Sapumalwaththa Road,<br>Malabe,Srilanka.</div> 
		<div class="column">Working Hours<br>9.00 a.m to 5.00 p.m</div>
		
	
		
		
		
		
		
		
		
		<div class="column">Email Us On<br><a class= "hover"target="_blank" href="https://accounts.google.com/ServiceLogin/identifier?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin" >Support@Ticketmator.lk</a><br><br><br>Follow Us On<br>
			<div>
			<a href="https://www.facebook.com/" class="fa fa-facebook" target="_blank"></a>
			<a href="https://accounts.google.com/ServiceLogin/identifier?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin" class="fa fa-google" target="_blank"></a>
			<a href="https://www.instagram.com/accounts/login/?hl=en" class="fa fa-instagram" target="_blank"></a>
			</div>
		
		
		
		<br><br>Subscribe Us On<br><a href="https://www.youtube.com/" class="fa fa-youtube"target="_blank"></a></div>
		<div class="column"><br><br><br><br>Subscribe to the Newsletter<br><input style= "width:100%; height:25px" type = "text" placeholder = "Email"><br><a style="float:right;"class="hover" href="register.php" >Submit</a></div>
		

	</div>
	</footer>

</body>
</html>
