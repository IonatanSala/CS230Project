<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection =  pg_connect("host=webcourse.cs.nuim.ie dbname=cs230 user= cs230teamd2 password= ohNgohTo")
or die('Could not connect: ' . pg_last_error());

//Starting Session
session_start();

// Storing Session
$user_check = $_SESSION['login_user'];
$query = "SELECT * FROM users WHERE username = '$user_check'";

// SQL Query To Fetch Complete Information Of User
$ses_sql=pg_query($connection, $query);
$row = pg_fetch_assoc($ses_sql);
$login_session =$row['first_name'];

if(!isset($login_session)){ //If session not initalsed,
	pg_close($connection); // Closing Connection
	header('Location: index.php'); // Redirecting To Home Page
}
?>