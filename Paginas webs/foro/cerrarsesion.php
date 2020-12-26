<?php

	session_start();
	session_destroy();

    header('location:index.php');

	//header('location:index.php?msg=Su sessión ha finalizado');

?>