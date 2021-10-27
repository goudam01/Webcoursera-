<?php
	
	if($_SERVER["REQUEST_METHOD"]=="POST"){

	include_once 'dbh.inc.php';

	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$hashedPassword=password_hash($password, PASSWORD_DEFAULT);

	if(empty($name)){
		header("Location:../signup.php?nameError=empty&email=$email");
	}

	if(empty($email)){
		header("Location:../signup.php?emailError=empty&name=$name");
		exit();
	}

	
	elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){

		header("Location:../signup.php?emailError=notvalid&name=$name");
		exit();
	}

	elseif(empty($password)){
		header("Location:../signup.php?pass=empty&email=$email&name=$name");
		exit();
	}


	
	elseif(strlen($password)<8){
		header("location:../signup.php?pass=lessChar&email=$email&name=$name");
		exit();
	}	
	
	else{

		$query="INSERT INTO user(name,email,password) VALUES(?,?,?);";
		$stmt=mysqli_prepare($conn,$query);
		mysqli_stmt_bind_param($stmt,"sss",$name,$email,$hashedPassword);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);
		mysqli_close($conn);	
		header("Location:../signup.php?signup=success");
		exit();
	}
	}
	else{

		header("Location:../signup.php");
		exit();
	}
