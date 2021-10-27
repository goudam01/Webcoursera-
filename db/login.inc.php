<?php

	session_start();

	if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]==true){

		header("Location:../index.php?login=success");
	}
	
	if($_SERVER["REQUEST_METHOD"]=="POST"){

		include_once 'dbh.inc.php';

		$email=$_POST['email'];
		$password=$_POST['password'];


	if(empty($email)){
		header("Location:../login.php?emailError=empty");
		exit();
	}

	elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){

		header("Location:../login.php?emailError=notvalid");
		exit();
	}
	
	elseif(empty($password)){
		header("Location:../login.php?pass=empty&email=$email");
		exit();
	}

	else{

		$query="SELECT email,password FROM user WHERE email=?;";
		$stmt=mysqli_prepare($conn,$query);
		mysqli_stmt_bind_param($stmt,"s",$email);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_store_result($stmt);
		if(! mysqli_stmt_num_rows($stmt)){

			header("Location:../login.php?login=invalid");
			exit();
		}

		mysqli_stmt_bind_result($stmt,$email,$hashedPassword);
		mysqli_stmt_fetch($stmt);

		if(!password_verify($password,$hashedPassword)){

				header("Location:../login.php?login=invalid");
				exit();
			}

		session_start();

		$_SESSION["loggedin"]=true;
		$_SESSION["email"]=$email;

		header("Location:../index.php?login=success");
		
	}
}
else{

	header("Location:../login.php");

}