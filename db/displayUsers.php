<?php
		
	session_start();
	if(!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]!=true){
		header("Location:../index.php?login=unsuccessfull");
	}

	include_once "dbh.inc.php";

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Webcoursera</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<?php
	$course=$_GET['course'];
	if($course){
		//$fullUrl=substr("http://$_SERVER[HTTP_REFERER]",37);
		//header("Location:../".$fullUrl."");
		$query="SELECT email FROM courses WHERE course=?;";
		$stmt=mysqli_prepare($conn,$query);
		mysqli_stmt_bind_param($stmt,"s",$course);
		mysqli_stmt_execute($stmt);
		$result=mysqli_stmt_get_result($stmt);
		$n=mysqli_num_rows($result);
		echo"<div class='users'>";
		echo"<h3>Users</h3>";
		echo"<ul>";
		while($row=mysqli_fetch_assoc($result)){
			$query1="SELECT Name FROM user WHERE email=?;";
			$stmt1=mysqli_prepare($conn,$query1);
			mysqli_stmt_bind_param($stmt1,"s",$row['email']);
			mysqli_stmt_execute($stmt1);
			$result1=mysqli_stmt_get_result($stmt1);
			$name=mysqli_fetch_assoc($result1);
			echo '<li>'.$name["Name"].'</li>';
			
		}
		echo"</ul>";
		echo"<p class=number'>Total Number of users enrolled in ".$course." course : ".$n."</p>";
		echo"</div>";
	}
	else{

		$query="SELECT Name FROM user;";
		$stmt=mysqli_prepare($conn,$query);
		mysqli_stmt_execute($stmt);
		$result=mysqli_stmt_get_result($stmt);
		$n=mysqli_num_rows($result);
		echo"<div class='users'>";
		echo"<h3>Users</h3>";
		echo"<ul>";
		while($row=mysqli_fetch_assoc($result)){
			echo '<li>'.$row["Name"].'</li>';
		}
		echo"</ul>";
		echo"<p class=number'>Total Number of registered users : ".$n."</p>";
		echo"</div>";

		}

	?>


</body>
</html>






