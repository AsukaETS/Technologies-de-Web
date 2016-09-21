<?php
	session_start();
	
	session_unset();
	
	session_destroy();
	
	$sessionActive=0;
	header("location:index.php");
?>
