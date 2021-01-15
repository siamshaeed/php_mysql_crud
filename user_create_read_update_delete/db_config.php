<?php 
 define('HOST', 'localhost');
 define('USER', 'root');
 define('PASS', '');
 define('DB', 'croud_sample_new');

	// database connect
	$db_conn = new mysqli(HOST, USER, PASS, DB);

	if($db_conn ->connect_errno){
		echo "database go connections fail" . mysqli_connect_error();
	}
?>