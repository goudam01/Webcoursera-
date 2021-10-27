<?php

	
	session_start();

	unset($_SESSION['loggedin']);
	unset($_SESSION['email']);
	unset($_SESSION["html"]);
	unset($_SESSION["css"]);
	unset($_SESSION["ajax"]);
	unset($_SESSION["java"]);
	unset($_SESSION["python"]);
	unset($_SESSION["javascript"]);
	
	header("Location:index.php");

