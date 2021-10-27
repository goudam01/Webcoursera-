<?php
	include '../javascript.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>JAVASCRIPT-Recorded Sessions</title>
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
			
				echo "<li><embed style='width:700px; height:400px;'src='https://www.youtube.com/embed/bWPMSSsVdPk'><a href='https://www.youtube.com/watch?v=bWPMSSsVdPk'>Learn HTML in 12 Minutes</a></embed></li>";
				echo "<li><embed style='width:700px; height:400px;'src='https://www.youtube.com/embed/hrZqiCUx6kg'><a href='https://www.youtube.com/watch?v=hrZqiCUx6kg'>HTML Tutorial for Beginners - Learn HTML in 30 Minutes</a></embed></li>";
				echo "<li><embed style='width:700px; height:400px;'src='https://www.youtube.com/embed/88PXJAA6szs'><a href='https://www.youtube.com/watch?v=88PXJAA6szs'>HTML Tutorial For Beginners | Learn HTML In 30 Minutes | Designing A Web Page Using HTML | Edureka</a></embed></li>";
				}
			if(strpos($fullUrl,"id=30_60")==true || strpos($fullUrl,"id=all")==true){
				echo "<li><embed style='width:700px; height:400px;'src='https://www.youtube.com/embed/XiQ9rjaa2Ow'><a href='https://www.youtube.com/watch?v=XiQ9rjaa2Ow'>HTML Crash Course In 30 Minutes</a></embed></li>";
				echo "<li><embed style='width:700px; height:400px;'src='https://www.youtube.com/embed/Rek0NWPCNOc'><a href='https://www.youtube.com/watch?v=Rek0NWPCNOc'>HTML Course | From Beginners to Advance Level | Lecture 1</a></embed></li>";
				echo "<li><embed style='width:700px; height:400px;'src='https://www.youtube.com/embed/PlxWf493en4'><a href='https://www.youtube.com/watch?v=PlxWf493en4'>HTML Tutorial - How to Make a Super Simple Website</a></embed></li>";
				}
			if(strpos($fullUrl,"id=1_2")==true || strpos($fullUrl,"id=all")==true){
				echo "<li><embed style='width:700px; height:400px;'src='https://www.youtube.com/embed/qz0aGYrrlhU'><a href='https://www.youtube.com/watch?v=qz0aGYrrlhU'>HTML Tutorial for Beginners: HTML Crash Course [2021]</a></embed></li>";
				echo "<li><embed style='width:700px; height:400px;'src='https://www.youtube.com/embed/UB1O30fR-EE'><a href='https://www.youtube.com/watch?v=UB1O30fR-EE'>HTML Crash Course For Absolute Beginners</a></embed></li>";
				echo "<li><embed style='width:700px; height:400px;'src='https://www.youtube.com/embed/FNGoExJlLQY'><a href='https://www.youtube.com/watch?v=FNGoExJlLQY'>HTML Crash Course for Absolute Beginners 2020 [Tutorial]</a></embed></li>";
				}
			if(strpos($fullUrl,"id=over2")==true || strpos($fullUrl,"id=all")==true){
				echo "<li><embed style='width:700px; height:400px;'src='https://www.youtube.com/embed/D-h8L5hgW-w'><a href='https://www.youtube.com/watch?v=D-h8L5hgW-w'>HTML and CSS Tutorial for 2021 - COMPLETE Crash Course!</a></embed></li>";
				echo "<li><embed style='width:700px; height:400px;'src='https://www.youtube.com/embed/pQN-pnXPaVg'><a href='https://www.youtube.com/watch?v=pQN-pnXPaVg'>HTML Full Course - Build a Website Tutorial</a></embed></li>";
				echo "<li><embed style='width:700px; height:400px;'src='https://www.youtube.com/embed/mU6anWqZJcc'><a href='https://www.youtube.com/watch?v=mU6anWqZJcc'>Learn HTML5 and CSS3 From Scratch - Full Course</a></embed></li>";
				}
			
			?>
		 </ul>

	</div>

</body>
</html>