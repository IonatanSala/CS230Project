<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message

if (isset($_POST['login_submit'])) {

	if (empty($_POST['username']) || empty($_POST['password'])) {
		$error = "Username or Password is empty";
	}
	else{
		// Define $username and $password
		$username=$_POST['username'];
		$password=$_POST['password'];
		
		// Establishing Connection with Server by passing server_name, user_id and password as a parameter
		$connection =  pg_connect("host=webcourse.cs.nuim.ie dbname=cs230 user= cs230teamd2 password= ohNgohTo")
		or die('Could not connect: ' . pg_last_error());

		//Generate query, store result, and ensure that there is at least one row of matching info
		$query = "SELECT '*' FROM users WHERE password = '$password' AND username = '$username'";
		$result = pg_query($connection, $query);
		$rows = pg_num_rows($result);
		
		if ($rows > 0) {
			$_SESSION['login_user']=$username; // Initializing Session
			header("location: index.php"); // Redirecting To Other Page
		}
		else {
			$error = "Username or Password is invalid";
		}
		
		pg_close($connection); // Closing Connection
	}
}
?>