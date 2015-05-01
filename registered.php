<?php include('includes/header.php'); ?>

<br><br><br><br>
<?php

$dbconn = pg_connect("host=webcourse.cs.nuim.ie dbname=cs230 user= cs230teamd2 password= ohNgohTo")
or die('Could not connect: ' . pg_last_error());

?>

<?php


$firstName = $_GET["f_name"];
$lastName = $_GET["l_name"];
$username = $_GET["username"];
$password = $_GET["password"];
$email = $_GET["email"];


$sql =("INSERT INTO users (username,password,first_name,last_name,email)
VALUES ('$username', '$password', '$firstName', '$lastName', '$email')");


$ret = pg_query($dbconn, $sql);
if(!$ret){
    echo pg_last_error($dbconn);
} else {
    echo "Records created successfully\n";
}
pg_close($dbconn);





?>

<?php include('includes/footer.php'); ?>
