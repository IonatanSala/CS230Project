<?php
if(isset($_SESSION['login_user'])){
	include('logout_button.php');
}
else{
	include('login_button.php');
}
?>