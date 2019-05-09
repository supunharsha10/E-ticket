<?php
	session_start();

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html>

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="Styles/homepage.css"/>
	<link rel="stylesheet" href="Styles/styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<head>
	<title> Homepage </title>
	<meta name="viewport"content="width=device-width, initial-scale=1">
	<link rel="stylesheet"href="http://www.w3schools.com/lib/w3.css">
	<link rel="stylesheet" href="style/homepage.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
	
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/Banner.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/fly-movies.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/black.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	
	
	

		<!-- Navigation bar-->
		<div class="navbar">
			<a href="Home.php">All</a>
			<a href="musicalSub.php">Musical</a>
			<a href="concertSub.php">Concert</a>
			<a href="sportsSub.php">Sports</a>
			<a href="moviesSub.php">Movies</a>
			<a href="#other">Other</a>
		</div>
		<br>

		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php
						echo $_SESSION['success'];
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<div style="	color: #3c763d;
			background: #dff0d8;
			border: 1px solid #3c763d;
			margin: 0px; padding:3px;" >
		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<p style="margin:4px;"><br>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p><br>
		  <a href="index.php?logout='1'" style="color: white; background-color:red; 	font-family: Franklin Gothic Heavy; padding:5px; text-decoration:none;">LOGOUT</a> </p>
		<?php endif ?>
	</div>
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
		<div class="column"><br><br><br><br>Subscribe to the Newsletter<br><input style= "width:100%; height:25px" type = "text" placeholder = "Email"><br><a style="float:right;"class="hover" href="submit.html" >Submit</a></div>
		

	</div>
	</footer>
	
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>
	
	
	

<script >
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = "block";
    setTimeout(showSlides, 4000); // Change image every 2 seconds
}

</script>


</body>
</html>
