<?php
	session_start();
	if(!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]!=true){
		header("Location:../index.php?login=unsuccessfull");
	}
	include_once 'dbh.inc.php';
	$course=$_GET['course'];
	$email=$_SESSION['email'];
	$query="INSERT INTO courses(email,course) VALUES(?,?);";
	$stmt=mysqli_prepare($conn,$query);
	mysqli_stmt_bind_param($stmt,"ss",$email,$course);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
	header("Location:../index.php?enroll=successfull");

