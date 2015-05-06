<!doctype html>

<html lang="en">
<body>
	<!-- Write welcome message, including php to echo out the session variable [firstname] -->
	<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>

	<!-- Button to sign out. Directs to logout page on click. -->
	<button onclick="location.href='logout.php'" type="signup">Logout!</button>
</body>
</html>