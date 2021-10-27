<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sign Up</title>
	<link rel="stylesheet" href="signup.css">
</head>
<body>

	<form method="POST" action="db/signup.inc.php">
		<h1>Sign Up</h1>
		<br/>
		<label for="name">Full Name</label>
		<?php 
			if(isset($_GET['name'])){
				$name=$_GET['name'];
				echo '<input type="text" id="name" name="name" value="'.$name.'"/>';
			}
			else{
				echo '<input type="text" id="name" name="name" placeholder="Full Name"/>';
			
				}
			?>

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
		<input type="password" id="password" name="password" placeholder="Password"/>
 		<br/>
		<input type="submit" value="Sign up">
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
			
			if(strpos($fullUrl,"pass=empty")==true){
				echo"<p class='passError'>Please enter a Password</p>";
				exit();
				
			}

			elseif(strpos($fullUrl,"pass=lessChar")==true){
				echo"<p class='passError'>8 characters minimum</p>";
				exit();
			}
			elseif(strpos($fullUrl, "signup=success")==true){
				header("Location:index.php?signup=sucess");
			}
	?>

</body>
</html>