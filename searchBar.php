<?php
	session_start();
	if(!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]!=true){
		header("Location:../index.php?login=unsuccessfull");
	}

	$course=array("html","css","ajax","java","python","javascript");
	$recSessions=array("html recorded sessions","css recorded sessions","ajax recorded sessions","java recorded sessions","python recorded sessions","javascript recorded sessions");
	$refBooks=array("html reference books","css reference books","ajax reference books","java reference books","python reference books","javascript reference books");
	$search=$_POST['search'];
	$i=0;
	while ($course[$i]){
		if(strtolower($search)==$course[$i]){
			header("Location:courses/".$course[$i].".php");
			exit();
		}
		$i++;
	}
	$i=0;
	while ($recSessions[$i]){
		if(strtolower($search)==$recSessions[$i]){
			header("Location:courses/recSessions/".strtoupper(explode(" ", $recSessions[$i])[0])."recSessions.php?id=all");
			exit();
		}
		$i++;
	}
	
	$i=0;
	while ($refBooks[$i]){
		if(strtolower($search)==$refBooks[$i]){
			header("Location:courses/refBooks/".strtoupper(explode(" ", $refBooks[$i])[0])."refBooks.php");
			exit();
		}
		$i++;
	}
	header("Location:index.php");
