<?php 
session_start();
	session_unset();
	session_destroy();

	
	header('location:../CLASSIC_WATCH/log_in_page/already_user_page.php');
 ?>

 