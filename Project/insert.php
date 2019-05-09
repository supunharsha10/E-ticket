<?php
session_start();

if (empty($_POST['name']))
		{ 
 // Setting error message
$_SESSION['error'] = "*Please fill all forms to buy ticket";
 header("location: Buy.php"); // Redirecting to first page 
	} else {

		$name= $_POST['name'];
	}
if (empty($_POST['pmethod']))
		{ 
 // Setting error message
$_SESSION['error'] = "*Please fill all forms to buy ticket";
 header("location: Buy.php"); // Redirecting to first page 
	} else {

		$pmethod= $_POST['pmethod'];
	}	
	
	
	if (empty($_POST['tprice']))
		{ 
 // Setting error message
$_SESSION['error'] = "*Please fill all forms to buy ticket";
 header("location: Buy.php"); // Redirecting to first page 
	} else {

		$tprice= $_POST['tprice'];
	}
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "info";
 
//Creating connection for mysqli
 
$conn = new mysqli($server, $user, $pass, $dbname);
 
//Checking connection
 
if($conn->connect_error){
 die("Connection failed:" . $conn->connect_error);
}
 
$name = mysqli_real_escape_string($conn, $_POST['name']);
$pmethod = mysqli_real_escape_string($conn, $_POST['pmethod']);
$tprice = mysqli_real_escape_string($conn, $_POST['tprice']);
 
$sql = "INSERT INTO infom (name, pmethod, tprice) VALUES ('$name', '$pmethod', '$tprice')";
 
if($conn->query($sql) === TRUE){
 echo "Thank you! Dear $name , your order complete and payment successful";
}
else
{
 echo "Error" . $sql . "<br/>" . $conn->error;
}
$conn->close();

?>