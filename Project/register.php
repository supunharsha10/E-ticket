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

	<div class="container" style="text-align:left ">
		<h2 id="page" style="font-family: century gothic; color:red"><u>Create an Account</u></h2><br><br>
		<p style="font-family:century gothic; color:purple; font-size:20px; text-align:center">
		</p><br>

		<form method="post" action="register.php">

				<?php include('errors.php'); ?>

				<div class="input-group">
					<label>Firstname:</label><br>
					<input type="text" name="fname" value="<?php echo $fname; ?>">
					</div>
				<div class="input-group">
				<label>Lastname:</label><br>
				<input type="text" name="lname" value="<?php echo $lname; ?>">
				</div>
				<div class="input-group">
					<label>Username:</label><br>
					<input type="text" name="username" value="<?php echo $username; ?>">
				</div>
				<div class="input-group">
			<label>Email</label><br>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
				<div class="input-group">
					<label>Address:</label><br>
					<textarea rows="2" cols="60" name="address"></textarea>
				</div>
				<div class="input-group">
					<label>Password:</label><br>
					<input type="password" name="password_1">
				</div>
				<div class="input-group">
					<label>Confirm password:</label><br>
					<input type="password" name="password_2">
				</div>
				<div class="input-group">
				<label>Contact Number:</label><br>
				<input type="text" name="contact" value="<?php echo $username; ?>">
			</div><br><br>
				<label> <input type="checkbox" checked="checked" name="terms">I have read and accept the Terms and Conditions,Returns,Refunds and replacement policy/Privacy Policy</label><br><br>
				<label> <input type="checkbox" checked="checked" name="email">Receive Bloomer emails and be the first to know about exclusive offers,promotions and more!</label><br>
				<br>
				<div class="input-group">
					<button type="submit" class="btn" name="reg_user">Create my account</button>
				</div>
				<p style="color:white;">
					Already a member? <a href="login.php" style="color:red">Sign in</a>
				</p>
			</form>
</div>
<br>
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
