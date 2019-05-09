<?php
// Session starts here.
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<style>
		.rectangle {
  height: 200px;
  width: 1200px;
  background-color: #F44649;
		
}
	.div2 {
    width: 1915px;
    height: 300px;    
    padding: 50px;
    border: 4px solid hsla(0,0%,0%,1.00);
}
	hr { 
    display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 3px;
	}
	
	
		


	</style>
	<title> BuyTicket </title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="Styles/homepage.css"/> 
	
	<link rel="stylesheet" href="Styles/styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
	
	
	


	<br>
	

<body>



<div align="center">
<style>
h1{
font-size: 60px;
color:whitesmoke;

}
</style>
	<div class="rectangle" align="center" > <br/> <br/> <br/> <h1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp*Please fill all forms to buy ticket</h1></div>
</div>
<br/>

<br/>
<br/>

	
 <br/>
 <br/>
<form action="insert.php" method="post">


<style>

label{

		display: inline-block;
		color : blue;
		margin:auto;
		width:220px;
}
	p.solid {
		border-style: solid;
		width:500px;
		margin:auto;
		
		}	
		
	input {
		
		width:220px;
	}	


</style>
<fieldset>
<p class="solid"><br>
&nbsp&nbsp&nbsp<label>Name</label><input type="text" name="name" id="name">
<span id="error"> </span><br/><br/>
&nbsp&nbsp&nbsp<label>Payment Method ( Cash or Card )</label><input type="text" name="pmethod" id="pmethod">
<span id="error"> </span><br/><br/>
&nbsp&nbsp&nbsp<label>Ticket Price </label><input type="text" name="tprice" id="tprice">
<span id="error"> </span><br/><br/>
&nbsp&nbsp&nbsp<input type="submit" value="Submit">  <?php
 if (!empty($_SESSION['error'])) {
 echo $_SESSION['error'];
 }
 
 ?><br><br>
 </p>
</fieldset>
  <br/>
 </form> 
  <br/>
<br/>
<hr>

</div>
 
</body>
	
	
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>
	