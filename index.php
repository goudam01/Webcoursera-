<?php
	session_start();
	include_once 'db/dbh.inc.php';
	?>

<html>
<head>
	<title>Webcoursera</title>
	<link rel="stylesheet" href="main.css">
	<script src="main.js"></script>
</head>
<body>
	<header>
		<h1>Webcoursera</h1>
		<div class="dropdown">
			<button id="myBtn" class="button button1">Categories</button>
			<div id="myDropdown" class="dropDown-content">
				<div class="html">
					<a href="courses/references/htmlRef/taglist.php">HTML</a>
					<div class="page-content html-content">
						<a href="courses/references/htmlRef/taglist.php">Reference</a>
						<a href="courses/refBooks/HTMLrefBooks.php">Reference Book</a>
						<a href="courses/recSessions/HTMLrecSessions.php?id=all">Recorded Sessions</a>
					</div>
				</div>
				<div class="css">
					<a href="courses/references/cssRef/reference.php">CSS</a>
					<div class="page-content css-content">
						<a href="courses/references/cssRef/reference.php">Reference</a>
						<a href="courses/refBooks/CSSrefBooks.php">Reference Book</a>
						<a href="courses/recSessions/CSSrecSessions.php?id=all">Recorded Sessions</a>
					</div>
				</div>
				<div class="ajax">
					<a href="courses/references/ajaxRef/intro.php">AJAX</a>
					<div class="page-content ajax-content">
						<a href="courses/references/ajaxRef/intro.php">Reference</a>
						<a href="courses/refBooks/AJAXrefBooks.php">Reference Book</a>
						<a href="courses/recSessions/AJAXrecSessions.php?id=all">Recorded Sessions</a>
					</div>
				</div>
				<div class="java">
					<a href="courses/references/javaRef/tutorial.php">JAVA</a>
					<div class="page-content java-content">
						<a href="courses/references/javaRef/tutorial.php">Reference</a>
						<a href="courses/refBooks/JAVArefBooks.php">Reference Book</a>
						<a href="courses/recSessions/JAVArecSessions.php?id=all">Recorded Sessions</a>
					</div>
				</div>
				<div class="python">
					<a href="courses/python.php">PYTHON</a>
					<div class="page-content python-content">
						<a href="courses/references/pythonRef/filehandling.php">Reference</a>
						<a href="courses/refBooks/PYTHONrefBooks.php">Reference Book</a>
						<a href="courses/recSessions/PYTHONrecSessions.php?id=all">Recorded Sessions</a>
					</div>
				</div>
				<div class="javascript">
					<a href="courses/javascript.php">JAVASCRIPT</a>
					<div class="page-content javascript-content">
						<a href="courses/references/javascriptRef/classes.php">Reference</a>
						<a href="courses/refBooks/JAVASCRIPTrefBooks.php">Reference Book</a>
						<a href="courses/recSessions/JAVASCRIPTrecSessions.php?id=all">Recorded Sessions</a>
					</div>
				</div>
			</div>
		</div>

 		<div class="search-container">
 		<form action="searchBar.php" method="POST">
 			<input type="text" name="search" placeholder="Search..">
 			<button type="submit">Search</button>
 		</form>
 		</div>
 		
 		<?php
 			
		if(!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]!=true){

			echo'<button class="button button2" onclick="login()">Log in</button>';
			echo'<button class="button button3" onclick="signup()">Sign up</button>';
		}

		else{
			echo'<div class="menu" onclick="menuFunction(this)">';
  			echo'<div class="bar1"></div>';
  			echo'<div class="bar2"></div>';
  			echo'<div class="bar3"></div>';
			echo'</div>';

			echo'<div id="menu" class="right">';
			echo'<ul>';
		
			echo'<li><a class="users" href="db/displayUsers.php" >Users</a></li>';
			echo'<li><a class="logout" href="logout.php">Logout</a></li>';
			echo'<li><a class="deletecAccount" href="db/deleteAccount.php">Delete Account</a></li>';
			echo'</ul>';
			echo'</div>';
			}
		
		?>
	</header>


	<div class="main">
		<table>
			<tr>
				<?php
					if($_SESSION['email']){
					
					$email=$_SESSION['email'];
					$query="SELECT course FROM courses WHERE email=?;";
					$stmt=mysqli_prepare($conn,$query);
					mysqli_stmt_bind_param($stmt,"s",$email);
					mysqli_stmt_execute($stmt);
					$result=mysqli_stmt_get_result($stmt);
					while($row=mysqli_fetch_assoc($result)){
						if($row['course']=="html"){
							$_SESSION["html"]=true;	
						}
						if($row['course']=="css"){
							$_SESSION["css"]=true;	
						}
						if($row['course']=="ajax"){
							$_SESSION["ajax"]=true;	
						}
						if($row['course']=="java"){
							$_SESSION["java"]=true;	
						}
						if($row['course']=="python"){
							$_SESSION["python"]=true;	
						}
						if($row['course']=="javascript"){
							$_SESSION["javascript"]=true;	
						}
					}
				}

				if($_SESSION["html"]){

					echo'<td>HTML<br/><a href="courses/references/htmlRef/taglist.php">Learn HTML</a></td>';
						}
				else{

					echo'<td>HTML<br/><a href="db/enrollCourse.php?course=html">Enroll</a></td>';
				}	

				if($_SESSION["css"]){

					echo'<td>CSS<br/><a href="courses/references/cssRef/reference.php">Learn CSS</a></td>';	
				}
				else{
					echo'<td>CSS<br/><a href="db/enrollCourse.php?course=css">Enroll</a></td>';
				}
				
			echo'</tr>';
			echo'<tr>';
				if($_SESSION["ajax"]){
					    echo'<td>AJAX<br/><a href="courses/references/ajaxRef/intro.php">Learn AJAX</a></td>';
						}
				else{

						echo'<td>AJAX<br/><a href="db/enrollCourse.php?course=ajax">Enroll</a></td>';	
				}

				if($_SESSION["java"]){

						echo'<td>JAVA<br/><a href="courses/references/javaRef/tutorial.php">Learn JAVA</a></td>';	
				}
				else{
					echo'<td>JAVA<br/><a href="db/enrollCourse.php?course=java">Enroll</a></td>';
				}

			echo'</tr>';
			echo'<tr>';
				if($_SESSION["python"]){

					echo'<td>PYTHON<br/><a href="courses/references/pythonRef/tutorial.php">Learn PYTHON</a></td>';	
				}	
				else{
					echo'<td>PYTHON<br/><a href="db/enrollCourse.php?course=python">Enroll</a></td>';
				}
				
				if($_SESSION["javascript"]){

					echo'<td>JAVASCRIPT<br/><a href="courses/references/javascriptRef/tutorial.php">Learn JAVASCRIPT</a></td>';	
				}
				else{
					echo'<td>JAVASCRIPT<br/><a href="db/enrollCourse.php?course=javascript">Enroll</a></td>';
				}
				?>
			</tr>
		</table>
	</div>

	


	<footer>
		<div class="l1">
			<ul class="l1">
				<li><a href="footer/terms.html">Terms</a></li>
				<li><a href="footer/privacy.html">Privacy Policy</a></li>
				<li><a href="footer/help.html">Help and Support</a></li>
			</ul>
		</div>
		<div class="l2">
			<ul class="l2">
				<li><a href="footer/about.html">About Us</a></li>
				<li><a href="footer/contact.html">Contact Us</a></li>
			</ul>
		</div>
	</footer>

	<script>
	document.getElementById("myBtn").onclick=function() {myFunction()};
	function myFunction(){
			document.getElementById("myDropdown").classList.toggle("show");
	}

  	</script>	

</body>
</html>
