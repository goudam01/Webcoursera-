<?php
	include '../ajax.php';

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>AJAX-Recorded Sessions</title>
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="stylesheet" type="text/css" href="../main.css">
	<script src="../main.js"></script>
	<script src="main.js"></script>
</head>
<body>
	<?php
		$fullUrl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	?>
	<div class="recSessions">
		<ul>
		<?php
			if(strpos($fullUrl,"id=under30")==true || strpos($fullUrl,"id=all")==true){
			
				echo "<li><embed style='width:700px; height:400px;'src='https://www.youtube.com/embed/5MmEUWfuZFk'><a href='https://www.youtube.com/watch?v=5MmEUWfuZFk'>Learn Ajax in 15 mins with examples</a></embed></li>";
				echo "<li><embed style='width:700px; height:400px;'src='https://www.youtube.com/embed/fLJItEI7TE0'><a href='https://www.youtube.com/watch?v=fLJItEI7TE0'>Ajax Crash Course | 2020</a></embed></li>";
				echo "<li><embed style='width:700px; height:400px;'src='https://www.youtube.com/embed/5D25ZT-xtsI'><a href='https://www.youtube.com/watch?v=5D25ZT-xtsI'>jQuery Live -1 | jQuery AJAX Tutorial for Beginners | jQuery Tutorial | Fullstack Training | Edureka</a></embed></li>";
				}
			if(strpos($fullUrl,"id=30_60")==true || strpos($fullUrl,"id=all")==true){
				echo "<li><embed style='width:700px; height:400px;'src='https://www.youtube.com/embed/FJZEVmF3eDg'><a href='https://www.youtube.com/watch?v=FJZEVmF3eDg'>Ajax tutorial in hindi | JavaScript Tutorial In Hindi #35</a></embed></li>";
				echo "<li><embed style='width:700px; height:400px;'src='https://www.youtube.com/embed/rJesac0_Ftw'><a href='https://www.youtube.com/watch?v=rJesac0_Ftw'>JSON and AJAX Tutorial: With Real Examples</a></embed></li>";
				echo "<li><embed style='width:700px; height:400px;'src='https://www.youtube.com/embed/PLgp11Hu-N4DT59rXjR57hhy6pMH3I2yHU&index=6'><a href='https://www.youtube.com/watch?v=grAIVQr4UeA&list=PLgp11Hu-N4DT59rXjR57hhy6pMH3I2yHU&index=6'>06. Creation of Node JS Server with REST API for AJAX | AJAX Tutorial | UiBrains | NAVEEN SAGGAM</a></embed></li>";
				}
			if(strpos($fullUrl,"id=1_2")==true || strpos($fullUrl,"id=all")==true){
				echo "<li><embed style='width:700px; height:400px;'src='https://www.youtube.com/embed/82hnvUYY6QA'><a href='https://www.youtube.com/watch?v=82hnvUYY6QA'>AJAX Crash Course (Vanilla JavaScript)</a></embed></li>";
				echo "<li><embed style='width:700px; height:400px;'src='https://www.youtube.com/embed/Y4rG-zTNuro'><a href='https://www.youtube.com/watch?v=Y4rG-zTNuro'>Ajax Tutorial | Complete Ajax Tutorial | Ajax For Beginners</a></embed></li>";
				echo "<li><embed style='width:700px; height:400px;'src='https://www.youtube.com/embed/72ki4oAah8g'><a href='https://www.youtube.com/watch?v=72ki4oAah8g'>Ajax Tutorial For Beginners in Php</a></embed></li>";
				}
			if(strpos($fullUrl,"id=over2")==true || strpos($fullUrl,"id=all")==true){
				echo "<li><embed style='width:700px; height:400px;'src='https://www.youtube.com/embed/ejUQGl0PNfE'><a href='https://www.youtube.com/watch?v=ejUQGl0PNfE'>AJAX Tutorial For Beginners 2018 The Complete Tutorial to Learn AJAX</a></embed></li>";
				echo "<li><embed style='width:700px; height:400px;'src='https://www.youtube.com/embed/BdaMiHG_rmw'><a href='https://www.youtube.com/watch?v=BdaMiHG_rmw'>Python Django tutorial with Ajax and Javascript | Build a CRUD app + extra features</a></embed></li>";
				echo "<li><embed style='width:700px; height:400px;'src='https://www.youtube.com/embed/PLgp11Hu-N4DT59rXjR57hhy6pMH3I2yHU'><a href='https://www.youtube.com/watch?v=ACNGhBfNftA&list=PLgp11Hu-N4DT59rXjR57hhy6pMH3I2yHU'>01. Introduction to AJAX in JavaScript | AJAX Tutorial | UiBrains | NAVEEN SAGGAM</a></embed></li>";
				}
			
			?>
		 </ul>

	</div>

</body>
</html>