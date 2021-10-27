<?php

	session_start();

	$fullUrl=$fullUrl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	
	if(!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]!=true || $_SESSION["ajax"]!=true){
		if(strpos($fullUrl,"ajax.php")){
		header("Location:../index.php?login=unsuccessfull");
		}elseif(strpos($fullUrl,"references")){

		header("Location:../../../index.php?login=unsuccessfull");
		}
		else{

		header("Location:../../index.php?login=unsuccessfull");

		}
		}

?>
<html>
<head>
	<title>AJAX</title>

	<link rel="stylesheet" href="main.css">
	<script src="main.js"></script>
</head> 
<body>


	<header>
		<h1 class="heading">AJAX</h1>
		

		
	<div class="dropdown">
		  <button id="button1"class="button button1" onclick="button1Property()">Recorded sessions</button>
		  <div id="button1Dropdown" class="sessions">
		  <?php
		  	$fullUrl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		  	if(strpos($fullUrl,"references")){

		  		echo"<a href='../../recSessions/AJAXrecSessions.php?id=all'>All</a>";
		  		echo"<a href='../../recSessions/AJAXrecSessions.php?id=under30'>Under 30 minutes</a>";
		  		echo"<a href='../../recSessions/AJAXLrecSessions.php?id=30_60'>30-60 minutes</a>";
		  		echo"<a href='../../recSessions/AJAXrecSessions.php?id=1_2'>1-2 hours</a>";
		  		echo"<a href='../../recSessions/AJAXrecSessions.php?id=over2'>Over 2 hours</a>";
		  	}
		  	else{

		  		echo"<a href='../recSessions/AJAXrecSessions.php?id=all'>All</a>";
		  		echo"<a href='../recSessions/AJAXrecSessions.php?id=under30'>Under 30 minutes</a>";
		  		echo"<a href='../recSessions/AJAXrecSessions.php?id=30_60'>30-60 minutes</a>";
		  		echo"<a href='../recSessions/AJAXrecSessions.php?id=1_2'>1-2 hours</a>";
		  		echo"<a href='../recSessions/AJAXrecSessions.php?id=over2'>Over 2 hours</a>";
		  	}
		 
		  	?>
		  </div>
		</div>
	<?php
		if(strpos($fullUrl,"references")){
			echo'<a id="button2" class="button button2" href="../../refBooks/AJAXrefBooks.php">Reference books</a>';
		}elseif(strpos($fullUrl,"refBooks")){
			echo'<a id="button2" class="button button2" href="AJAXrefBooks.php">Reference books</a>';
		}else{
			
			echo'<a id="button2" class="button button2" href="../refBooks/AJAXrefBooks.php">Reference books</a>';
		}

		?>
	
	
	
</header>
	<nav class="left">
	 <h3>AJAX References</h3>
	 <ul>
	 <?php
	 if(strpos($fullUrl,"references")){
	 echo'<li><a class="ref" href="intro.php">AJAX Intro</a></li>';
	 echo'<li><a class="ref" href="xmlhttp.php">AJAX XMLHttp</a></li>';
	 echo'<li><a class="ref" href="request.php">AJAX Request</a></li>';
	 echo'<li><a class="ref" href="xmlfile.php">AJAX XML File</a></li>';
	 echo'<li><a class="ref" href="response.php">AJAX PHP</a></li>';
	}
	elseif(strpos($fullUrl,"recSessions")|| strpos($fullUrl,"refBooks")){
		echo'<li><a class="ref" href="../references/ajaxRef/intro.php">AJAX Intro</a></li>';
	 echo'<li><a class="ref" href="../references/ajaxRef/xmlhttp.php">AJAX XMLHttp</a></li>';
	 echo'<li><a class="ref" href="../references/ajaxRef/request.php">AJAX Request</a></li>';
	 echo'<li><a class="ref" href="../references/ajaxRef/xmlfile.php">AJAX XML File</a></li>';
	 echo'<li><a class="ref" href="../references/ajaxRef/php.php">AJAX PHP</a></li>';

	}
	 ?>	
	</ul>
</nav>
<div class="menu" onclick="menuFunction(this)">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
</div>


<div id="menu" class="right">
<ul>
	
	<?php
	if(strpos($fullUrl,"references")){

		echo'<li><a class="home" href="../../../index.php">Home</a></li>';
		echo'<li><a class="users" href="../../../db/displayUsers.php?course=ajax" >Enrolled users</a></li>';
		echo'<li><a class="logout" href="../../../logout.php">Logout</a></li>';
		echo'<li><a class="unenroll" href="../../../db/unenrollCourse.php?course=ajax">Unenroll</a></li>';
		echo'<li><a class="deletecAccount" href="../../../db/deleteAccount.php">Delete Account</a></li>';
	}else{

		echo'<li><a class="home" href="../../index.php">Home</a></li>';
		echo'<li><a class="users" href="../../db/displayUsers.php?course=ajax" >Enrolled users</a></li>';
		echo'<li><a class="logout" href="../../logout.php">Logout</a></li>';
		echo'<li><a class="unenroll" href="../../db/unenrollCourse.php?course=ajax">Unenroll</a></li>';
		echo'<li><a class="deletecAccount" href="../../db/deleteAccount.php">Delete Account</a></li>';
	}
	?>
	</ul>
</div>



</body>
</html>


