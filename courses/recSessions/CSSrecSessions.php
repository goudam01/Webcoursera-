<?php
	include '../css.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CSS-Recorded Sessions</title>
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
			
				echo "<li><embed style='width:700px; height:400px;'src='https://www.youtube.com/embed/1PnVor36_40'><a href='https://www.youtube.com/watch?v=1PnVor36_40'>Learn CSS in 20 Minutes</a></embed></li>";
				echo "<li><embed style='width:700px; height:400px;'src='https://www.youtube.com/embed/sqJ6xZ9mUwE'><a href='https://www.youtube.com/watch?v=sqJ6xZ9mUwE'>CSS - What is selectors? | Web Development Course</a></embed></li>";
				echo "<li><embed style='width:700px; height:400px;'src='https://www.youtube.com/embed/jx5jmI0UlXU'><a href='https://www.youtube.com/watch?v=jx5jmI0UlXU'>Learn CSS Position In 9 Minutes</a></embed></li>";
				}
			if(strpos($fullUrl,"id=30_60")==true || strpos($fullUrl,"id=all")==true){
				echo "<li><embed style='width:700px; height:400px;'src='https://www.youtube.com/embed/4nC4VXHlys8'><a href='https://www.youtube.com/watch?v=4nC4VXHlys8'>Properties in CSS | Web Development Course | CSS Lecture 2</a></embed></li>";
				echo "<li><embed style='width:700px; height:400px;'src='https://www.youtube.com/embed/OJEQaVT45XA'><a href='https://www.youtube.com/watch?v=OJEQaVT45XA'>Responsive Admin Dashboard Page HTML And CSS</a></embed></li>";
				echo "<li><embed style='width:700px; height:400px;'src='https://www.youtube.com/embed/20QiX8rmHnU'><a href='https://www.youtube.com/watch?v=20QiX8rmHnU'>I've been challenged to a CSS Battle rematch | Can I beat him again???</a></embed></li>";
				}
			if(strpos($fullUrl,"id=1_2")==true || strpos($fullUrl,"id=all")==true){
				echo "<li><embed style='width:700px; height:400px;'src='https://www.youtube.com/embed/yfoY53QXEnI'><a href='https://www.youtube.com/watch?v=yfoY53QXEnI'>CSS Crash Course For Absolute Beginners</a></embed></li>";
				echo "<li><embed style='width:700px; height:400px;'src='https://www.youtube.com/embed/ieTHC78giGQ'><a href='https://www.youtube.com/watch?v=ieTHC78giGQ'>CSS Full Course - Includes Flexbox and CSS Grid Tutorials</a></embed></li>";
				echo "<li><embed style='width:700px; height:400px;'src='https://www.youtube.com/embed/wNX7lWzchow'><a href='https://www.youtube.com/watch?v=wNX7lWzchow'>CSS Tutorial for Beginners - Getting Started</a></embed></li>";
				}
			if(strpos($fullUrl,"id=over2")==true || strpos($fullUrl,"id=all")==true){
				echo "<li><embed style='width:700px; height:400px;'src='https://www.youtube.com/embed/D-h8L5hgW-w'><a href='https://www.youtube.com/watch?v=D-h8L5hgW-w'>HTML and CSS Tutorial for 2021 - COMPLETE Crash Course!</a></embed></li>";
				echo "<li><embed style='width:700px; height:400px;'src='https://www.youtube.com/embed/GAZVvpjxYQY'><a href='https://www.youtube.com/watch?v=GAZVvpjxYQY'>HTML And CSS Tutorial For Beginners | Complete HTML & CSS Course In One Tutorial</a></embed></li>";
				echo "<li><embed style='width:700px; height:400px;'src='https://www.youtube.com/embed/Ucv7eC5RLg0'><a href='https://www.youtube.com/watch?v=Ucv7eC5RLg0'>CSS Crash Course For Absolute Beginners | CSS Tutorial For Beginners | Learn CSS | Simplilearn</a></embed></li>";
				}
			
			?>
		 </ul>

	</div>

</body>
</html>