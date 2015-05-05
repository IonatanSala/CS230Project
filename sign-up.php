<?php include('includes/header.php'); ?>

<br><br><br><br>
  <?php

$dbconn = pg_connect("host=webcourse.cs.nuim.ie dbname=cs230 user= cs230teamd2 password= ohNgohTo")
or die('Could not connect: ' . pg_last_error());

?>

		<section id="sign-up-form">
			<h2>Register</h2>
			<hr>
			<form method="post" action="registered.php">
				<label for="userFirstName"> <i class="fa fa-user "></i> First Name: <input type="text" name="f_name" id="userFirstName"></label>
                <label for="userSurname"> <i class="fa fa-user "></i> Surname: <input type="text" name="l_name" id="userSurname"></label>
                <label for="username"> <i class="fa fa-user "></i> Username: <input type="text" name="username" id="username"></label>
                <label for="userEmail"> <i class="fa fa-envelope-o "></i> Email: <input type="email" name="email" id="userEmail"></label>
                <label for="userPassword"> <i class="fa fa-lock "></i> Password: <input type="password" name="password" id="userPassword"></label>
				<input type="submit" value="Register">
			</form>
		</section>



<?php include('includes/footer.php'); ?>
