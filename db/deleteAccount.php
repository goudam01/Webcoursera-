<?php
	session_start();
	if(!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]!=true){
		header("Location:../index.php?login=unsuccessfull");
	}
	

	include_once 'dbh.inc.php';
	$course=$_GET['course'];
	$email=$_SESSION['email'];
	$query="DELETE FROM user WHERE email=?;";
	$stmt=mysqli_prepare($conn,$query);
	mysqli_stmt_bind_param($stmt,"s",$email);
	mysqli_stmt_execute($stmt);

	$query="DELETE FROM courses WHERE email=?;";
	$stmt=mysqli_prepare($conn,$query);
	mysqli_stmt_bind_param($stmt,"s",$email);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	mysqli_close($conn);

	unset($_SESSION["html"]);
	unset($_SESSION["css"]);
	unset($_SESSION["ajax"]);
	unset($_SESSION["java"]);
	unset($_SESSION["python"]);
	unset($_SESSION["javascript"]);
	
	unset($_SESSION['loggedin']);
	unset($_SESSION['email']);
	header("Location:../index.php");
