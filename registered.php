<?php include('includes/header.php'); ?>


<?php

$dbconn = pg_connect("host=webcourse.cs.nuim.ie dbname=cs230 user= cs230teamd2 password= ohNgohTo")
or die('Could not connect: ' . pg_last_error());

?>


<?php


$firstName = $_POST["f_name"];
$lastName = $_POST["l_name"];
$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];


$sql =("INSERT INTO users (username,password,first_name,last_name,email)
VALUES ('$username', '$password', '$firstName', '$lastName', '$email')");


$ret = pg_query($dbconn, $sql);
if(!$ret){
    echo pg_last_error($dbconn);
} else { ?>

  <section class="registered">
      <div class="registration-content">
        <h3><span>Success!</span><br>Your registration has been succesfull! Please Log in.</h3>
      </div>
  </section>

<?php
}
pg_close($dbconn);
?>



<?php include('includes/footer.php'); ?>
