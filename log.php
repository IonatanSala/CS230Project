<?php include('includes/header.php') ?>




	<section id="log-container">
		<div>
			<h3>Log In with your username</h3>
			<hr>
			<form action="Login/login.php" method="post">
				<!--Username-->
				<input id="name" name="username" placeholder="Username" type="text" autocomplete="off">
				<!--Password-->
				<input id="password" name="password" placeholder="Password" type="password" autocomplete="off">
				<input name="login_submit" type="submit" value=" Log in " autocomplete="off">
			</form>
		</div>
	</section>












<?php include('includes/cart.php') ?>

<?php include('includes/footer.php') ?>