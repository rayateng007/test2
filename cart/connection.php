<?php
	$link=mysqli_connect("localhost", "root", "", "mart");
	/* check connection */
	if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    	exit();
	}
?>