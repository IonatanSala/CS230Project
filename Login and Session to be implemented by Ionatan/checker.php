<?php
if(isset($_SESSION['login_user'])){
	include('includes/logout_button.html');
}
else{
	include('includes/login_button.html');
}
?>