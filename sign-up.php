<?php include('includes/header.php'); ?>

<br><br><br><br>
    
		<section id="sign-up-form">
			<h2>Register</h2>
			<hr>
			<form method="POST">
				<label for="userFirstName"> <i class="fa fa-user "></i> First Name: <input type="text" id="userFirstName"></label>
				<label for="userSurname"> <i class="fa fa-user "></i> Surname: <input type="text" id="userSurname"></label>
				<label for="username"> <i class="fa fa-user "></i> Username: <input type="text" id="username"></label>
				<label for="userEmail"> <i class="fa fa-envelope-o "></i> Email: <input type="email" id="userEmail"></label>
				<label for="userPassword"> <i class="fa fa-lock "></i> Password: <input type="password" id="userPassword"></label>
				<input type="submit" value="Register">
			</form>
		</section>

<?php include('includes/footer.php'); ?>
