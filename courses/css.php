<?php

	session_start();

	$fullUrl=$fullUrl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	
	if(!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]!=true || $_SESSION["css"]!=true){
		if(strpos($fullUrl,"css.php")){
		header("Location:../index.php?login=unsuccessfull");
		}
		else{

		header("Location:../../index.php?login=unsuccessfull");

		}
		}

?>
<html>
<head>
	<title>CSS</title>

	<link rel="stylesheet" href="main.css">
	<script src="main.js"></script>
</head> 
<body>


	<header>
		<h1 class="heading">CSS</h1>
		

		
	<div class="dropdown">
		  <button id="button1"class="button button1" onclick="button1Property()">Recorded sessions</button>
		  <div id="button1Dropdown" class="sessions">
		  <?php
		  	$fullUrl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		  	if(strpos($fullUrl,"references")){

		  		echo"<a href='../../recSessions/CSSrecSessions.php?id=all'>All</a>";
		  		echo"<a href='../../recSessions/CSSrecSessions.php?id=under30'>Under 30 minutes</a>";
		  		echo"<a href='../../recSessions/CSSrecSessions.php?id=30_60'>30-60 minutes</a>";
		  		echo"<a href='../../recSessions/CSSrecSessions.php?id=1_2'>1-2 hours</a>";
		  		echo"<a href='../../recSessions/CSSrecSessions.php?id=over2'>Over 2 hours</a>";
		  	}
		  	else{

		  		echo"<a href='../recSessions/CSSrecSessions.php?id=all'>All</a>";
		  		echo"<a href='../recSessions/CSSrecSessions.php?id=under30'>Under 30 minutes</a>";
		  		echo"<a href='../recSessions/CSSrecSessions.php?id=30_60'>30-60 minutes</a>";
		  		echo"<a href='../recSessions/CSSrecSessions.php?id=1_2'>1-2 hours</a>";
		  		echo"<a href='../recSessions/CSSrecSessions.php?id=over2'>Over 2 hours</a>";
		  	}
		 
		  	?>
		  </div>
		</div>
	<?php
		if(strpos($fullUrl,"references")){
			echo'<a id="button2" class="button button2" href="../../refBooks/CSSrefBooks.php">Reference books</a>';
		}elseif(strpos($fullUrl,"refBooks")){
			echo'<a id="button2" class="button button2" href="CSSrefBooks.php">Reference books</a>';
		}else{
			
			echo'<a id="button2" class="button button2" href="../refBooks/CSSrefBooks.php">Reference books</a>';
		}

		?>
	
	
	
</header>
	<nav class="left">
	 <h3>CSS References</h3>
	 <ul>
	 <?php
	 if(strpos($fullUrl,"references")){
	 echo'<li><a class="ref" href="reference.php">CSS Reference</a></li>';
	 echo'<li><a class="ref" href="selectors.php">CSS Selectors</a></li>';
	 echo'<li><a class="ref" href="functions.php">CSS Functions</a></li>';
	 echo'<li><a class="ref" href="referenceaural.php">CSS Reference Aural</a></li>';
	 echo'<li><a class="ref" href="websafefonts.php">CSS Web Safe Fonts</a></li>';
	}
	elseif(strpos($fullUrl,"recSessions")|| strpos($fullUrl,"refBooks")){
		echo'<li><a class="ref" href="../references/cssRef/reference.php">CSS Reference</a></li>';
	 echo'<li><a class="ref" href="../references/cssRef/selectors.php">CSS Selectors</a></li>';
	 echo'<li><a class="ref" href="../references/cssRef/functions.php">CSS Functions</a></li>';
	 echo'<li><a class="ref" href="../references/cssRef/referenceaural.php">CSS Reference Aural</a></li>';
	 echo'<li><a class="ref" href="../references/cssRef/websafefonts.php">CSS Web Safe Fonts</a></li>';

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
		echo'<li><a class="users" href="../../../db/displayUsers.php?course=css" >Enrolled users</a></li>';
		echo'<li><a class="logout" href="../../../logout.php">Logout</a></li>';
		echo'<li><a class="unenroll" href="../../../db/unenrollCourse.php?course=css">Unenroll</a></li>';
		echo'<li><a class="deletecAccount" href="../../../db/deleteAccount.php">Delete Account</a></li>';
	}else{

		echo'<li><a class="home" href="../../index.php">Home</a></li>';
		echo'<li><a class="users" href="../../db/displayUsers.php?course=css" >Enrolled users</a></li>';
		echo'<li><a class="logout" href="../../logout.php">Logout</a></li>';
		echo'<li><a class="unenroll" href="../../db/unenrollCourse.php?course=css">Unenroll</a></li>';
		echo'<li><a class="deletecAccount" href="../../db/deleteAccount.php">Delete Account</a></li>';
	}
	?>
	</ul>
</div>

</body>
</html>


