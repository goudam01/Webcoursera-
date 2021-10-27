<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="login.css">
</head>
<body>
	<form method="POST" action="db/login.inc.php">
		<h1>Log in</h1>
		<label for="email">Email</label><br/>
		<?php
			if(isset($_GET['email'])){
				$email=$_GET['email'];
				echo '<input type="text" id="email" name="email" value="'.$email.'"/>';
			}
		else{
			echo'<input type="text" id="email" name="email" placeholder="Email"/>';
		}
		?>
        <br/>
        <label  for="Password">Password</label><br/>
		<input type="password" id="password" name="password" placeholder="Password" />
 		<br/>
		<input type="submit" value="Log in">
	</form>
	<?php
			$fullUrl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
			if(strpos($fullUrl,"emailError=empty")==true){
				echo"<p class='emailError'>Please enter an Email</p>";
				exit();
			}
			elseif(strpos($fullUrl,"emailError=notvalid")==true){
				echo"<p class='emailError'>Please enter a valid Email</p>";
				exit();
				
			}
			
			elseif(strpos($fullUrl,"pass=empty")==true){
				echo"<p class='passError'>Please enter a Password</p>";
				exit();
				
			}

			elseif(strpos($fullUrl,"login=invalid")==true){

				echo"<p class='loginError'>Invalid username or password</p>";
				exit();
			}
   ?> 		

</body>
</html>
