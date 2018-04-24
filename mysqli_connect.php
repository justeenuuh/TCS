<?php
	define('DB_USER', 'civilengg' );
	define('DB_PASSWORD', 'ce1907');
	define('DB_HOST','localhost');
	define('DB_NAME', 'tcs');
	
	$dbc = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
	OR die('Could not connect  to MYSQL' . mysqli_connect_error());
	
?>