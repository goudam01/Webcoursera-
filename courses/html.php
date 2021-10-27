<?php

	session_start();

	$fullUrl=$fullUrl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	
	if((!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]!=true) || $_SESSION["html"]!=true){
		if(strpos($fullUrl,"html.php")){
		header("Location:../index.php?login=unsuccessfull");
		}
		elseif(strpos($fullUrl,"references")){

		header("Location:../../../index.php?login=unsuccessfull");
		}else{
				header("Location:../../index.php?login=unsuccessfull");
		}
}

?>
<html>
<head>
	<title>HTML</title>

	<link rel="stylesheet" href="main.css">
	<script src="main.js"></script>
</head> 
<body>


	<header>
		<h1 class="heading">HTML</h1>
		

		
	<div class="dropdown">
		  <button id="button1"class="button button1" onclick="button1Property()">Recorded sessions</button>
		  <div id="button1Dropdown" class="sessions">
		  <?php
		  	$fullUrl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		  	if(strpos($fullUrl,"references")){

		  		echo"<a href='../../recSessions/HTMLrecSessions.php?id=all'>All</a>";
		  		echo"<a href='../../recSessions/HTMLrecSessions.php?id=under30'>Under 30 minutes</a>";
		  		echo"<a href='../../recSessions/HTMLrecSessions.php?id=30_60'>30-60 minutes</a>";
		  		echo"<a href='../../recSessions/HTMLrecSessions.php?id=1_2'>1-2 hours</a>";
		  		echo"<a href='../../recSessions/HTMLrecSessions.php?id=over2'>Over 2 hours</a>";
		  	}
		  	else{

		  		echo"<a href='../recSessions/HTMLrecSessions.php?id=all'>All</a>";
		  		echo"<a href='../recSessions/HTMLrecSessions.php?id=under30'>Under 30 minutes</a>";
		  		echo"<a href='../recSessions/HTMLrecSessions.php?id=30_60'>30-60 minutes</a>";
		  		echo"<a href='../recSessions/HTMLrecSessions.php?id=1_2'>1-2 hours</a>";
		  		echo"<a href='../recSessions/HTMLrecSessions.php?id=over2'>Over 2 hours</a>";
		  	}
		 
		  	?>
		  </div>
		</div>
		<?php
		if(strpos($fullUrl,"references")){
			echo'<a id="button2" class="button button2" href="../../refBooks/HTMLrefBooks.php">Reference books</a>';
		}elseif(strpos($fullUrl,"refBooks")){
			echo'<a id="button2" class="button button2" href="HTMLrefBooks.php">Reference books</a>';
		}else{
			
			echo'<a id="button2" class="button button2" href="../refBooks/HTMLrefBooks.php">Reference books</a>';
		}

		?>
	
</header>
	<nav class="left">
	 <h3>HTML References</h3>
	 <ul>
	 <?php
	 if(strpos($fullUrl,"references")){
	 echo'<li><a class="ref" href="taglist.php">HTML Tag List</a></li>';
	 echo'<li><a class="ref" href="attributes.php">HTML Attributes</a></li>';
	 echo'<li><a class="ref" href="globalattributes.php">HTML Global Attributes</a></li>';
	 echo'<li><a class="ref" href="browsersupport.php">HTML Browser Support</a></li>';
	 echo'<li><a class="ref" href="event.php">HTML Event</a></li>';
	}
	elseif(strpos($fullUrl,"recSessions")|| strpos($fullUrl,"refBooks")){
		echo'<li><a class="ref" href="../references/htmlRef/taglist.php">HTML Tag List</a></li>';
	 echo'<li><a class="ref" href="../references/htmlRef/attributes.php">HTML Attributes</a></li>';
	 echo'<li><a class="ref" href="../references/htmlRef/globalattributes.php">HTML Global Attributes</a></li>';
	 echo'<li><a class="ref" href="../references/htmlRef/browsersupport.php">HTML Browser Support</a></li>';
	 echo'<li><a class="ref" href="../references/htmlRef/event.php">HTML Event</a></li>';

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
		echo'<li><a class="users" href="../../../db/displayUsers.php?course=html" >Enrolled users</a></li>';
		echo'<li><a class="logout" href="../../../logout.php">Logout</a></li>';
		echo'<li><a class="unenroll" href="../../../db/unenrollCourse.php?course=html">Unenroll</a></li>';
		echo'<li><a class="deletecAccount" href="../../../db/deleteAccount.php">Delete Account</a></li>';
	}else{

		echo'<li><a class="home" href="../../index.php">Home</a></li>';
		echo'<li><a class="users" href="../../db/displayUsers.php?course=html" >Enrolled users</a></li>';
		echo'<li><a class="logout" href="../../logout.php">Logout</a></li>';
		echo'<li><a class="unenroll" href="../../db/unenrollCourse.php?course=html">Unenroll</a></li>';
		echo'<li><a class="deletecAccount" href="../../db/deleteAccount.php">Delete Account</a></li>';
	}
	?>
	</ul>
</div>

</body>
</html>


