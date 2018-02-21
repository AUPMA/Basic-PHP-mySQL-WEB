<?php

/* Connection to database */
	$conn =mysqli_connect("sql107.epizy.com","epiz_21438498","rootmaster","epiz_21438498_blog");

	/* Check connection */
	if(mysqli_connect_error()) {
		echo "Connection failed";
		printf("Error : %s",mysqli_connect_error());
	}

?>
