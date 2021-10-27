<?php
	include '../java.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>JAVA-Recorded Sessions</title>
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
			
				echo "<li><embed style='width:700px; height:400px;'src='https://www.youtube.com/embed/v=RLi1rOgTRbA'><a href='https://www.youtube.com/watch?v=RLi1rOgTRbA'>Learn Java in 25 minutes | Java Tutorial for Beginners</a></embed></li>";
				echo "<li><embed style='width:700px; height:400px;'src='https://www.youtube.com/embed/ByGOW9WC_DQ'><a href='https://www.youtube.com/watch?v=ByGOW9WC_DQ'>
				Java Programs for Practice | Learn Java Programming from Scratch | Edureka</a></embed></li>";
				echo "<li><embed style='width:700px; height:400px;'src='https://www.youtube.com/embed/mAtkPQO1FcA'><a href='https://www.youtube.com/watch?v=mAtkPQO1FcA'>Java In 5 Minutes | What Is Java Programming? | Java Programming For Beginners | Simplilearn</a></embed></li>";
				}
			if(strpos($fullUrl,"id=30_60")==true || strpos($fullUrl,"id=all")==true){
				echo "<li><embed style='width:700px; height:400px;'src='https://www.youtube.com/embed/XAowXcmQ-kA'><a href='https://www.youtube.com/watch?v=XAowXcmQ-kA'>JAVA - How To Design Login And Register Form In Java Netbeans</a></embed></li>";
				echo "<li><embed style='width:700px; height:400px;'src='https://www.youtube.com/embed/ha3-JKDYBoQ&list=PLKKfKV1b9e8ps6dD3QA5KFfHdiWj9cB1s&index=16'><a href='https://www.youtube.com/watch?v=ha3-JKDYBoQ&list=PLKKfKV1b9e8ps6dD3QA5KFfHdiWj9cB1s&index=16'>16. Arrays in Java | College Placement Course</a></embed></li>";
				echo "<li><embed style='width:700px; height:400px;'src='https://www.youtube.com/embed/pXk_0RX_d7c&list=PLKKfKV1b9e8ps6dD3QA5KFfHdiWj9cB1s&index=40'><a href='https://www.youtube.com/watch?v=pXk_0RX_d7c&list=PLKKfKV1b9e8ps6dD3QA5KFfHdiWj9cB1s&index=40'>Arraylist in Java | Java Placement Course | Lecture 37</a></embed></li>";
				}
			if(strpos($fullUrl,"id=1_2")==true || strpos($fullUrl,"id=all")==true){
				echo "<li><embed style='width:700px; height:400px;'src='https://www.youtube.com/embed/JPOzWljLYuU'><a href='https://www.youtube.com/watch?v=JPOzWljLYuU'>Java tutorial for complete beginners with interesting examples - Easy-to-follow Java programming</a></embed></li>";
				echo "<li><embed style='width:700px; height:400px;'src='https://www.youtube.com/embed/aqHhpahguVY'><a href='https://www.youtube.com/watch?v=aqHhpahguVY'>Java Tutorial for Beginners | Java Programming Tutorial | Java Basics | Java Training | Edureka</a></embed></li>";
				echo "<li><embed style='width:700px; height:400px;'src='https://www.youtube.com/embed/8GPPJpiLqHk'><a href='https://www.youtube.com/watch?v=8GPPJpiLqHk'>10 JavaScript Projects in 1 Hour - Coding Challenge</a></embed></li>";
				}
			if(strpos($fullUrl,"id=over2")==true || strpos($fullUrl,"id=all")==true){
				echo "<li><embed style='width:700px; height:400px;'src='https://www.youtube.com/embed/eIrMbAQSU34'><a href='https://www.youtube.com/watch?v=eIrMbAQSU34'>Java Tutorial for Beginners [2020]</a></embed></li>";
				echo "<li><embed style='width:700px; height:400px;'src='https://www.youtube.com/embed/n-xAqcBCws4'><a href='https://www.youtube.com/watch?v=n-xAqcBCws4'>Java Tutorial</a></embed></li>";
				echo "<li><embed style='width:700px; height:400px;'src='https://www.youtube.com/embed/Qgl81fPcLc8'><a href='https://www.youtube.com/watch?v=Qgl81fPcLc8'>Java Full Course [NEW]</a></embed></li>";
				}
			
			?>
		 </ul>

	</div>

</body>
</html>