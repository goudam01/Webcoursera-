<?php
  
  include_once "../../python.php";

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CSS</title>
  <link rel="stylesheet" type="text/css" href="../../main.css">
  <link rel="stylesheet" type="text/css" href="main.css">
    <script src="../../main.js"></script>
</head>
<body>
  <div class="main">
	<table class="referalaural">
  <tr>
    <th style="width:25%">Property</th>
    <th style="width:43%">Description</th>
    <th style="width:27%">Values</th>
    <th>CSS</th>
  </tr>
  <tr>
    <td>azimuth</td>
    <td>Sets where the sound should come from</td>
    <td><i>angle</i><br>
      left-side<br>
      far-left<br>
      left<br>
      center-left<br>
      center<br>
      center-right<br>
      right<br>
      far-right<br>
      right-side<br>
      behind<br>
      leftwards<br>
      rightwards</td>
    <td>2</td>
  </tr>
  <tr>
    <td>cue</td>
    <td>Sets the cue properties
      in one declaration</td>
    <td><i>cue-before<br>
      cue-after</i></td>
    <td>2</td>
  </tr>
  <tr>
    <td>cue-after</td>
    <td>Specifies a sound to be played after speaking an element's
      content</td>
    <td>none<br>
      <i>url</i></td>
    <td>2</td>
  </tr>
  <tr>
    <td>cue-before</td>
    <td>Specifies a sound to be played before speaking an element's
      content</td>
    <td>none<br>
      <i>url</i></td>
    <td>2</td>
  </tr>
  <tr>
    <td>elevation</td>
    <td>Sets where the sound should come from</td>
    <td>angle<br>
      below<br>
      level<br>
      above<br>
      higher<br>
      lower</td>
    <td>2</td>
  </tr>
  <tr>
    <td>pause</td>
    <td>Sets the pause properties
      in one declaration</td>
    <td><i>pause-before<br>
      pause-after</i></td>
    <td>2</td>
  </tr>
  <tr>
    <td>pause-after</td>
    <td>Specifies a pause after speaking an element's content</td>
    <td><i>time<br>
      %</i></td>
    <td>2</td>
  </tr>
  <tr>
    <td>pause-before</td>
    <td>Specifies a pause before speaking an element's content</td>
    <td><i>time<br>
      %</i></td>
    <td>2</td>
  </tr>
  <tr>
    <td>pitch</td>
    <td>Specifies the speaking voice</td>
    <td><i>frequency</i><br>
      x-low<br>
      low<br>
      medium<br>
      high<br>
      x-high</td>
    <td>2</td>
  </tr>
  <tr>
    <td>pitch-range</td>
    <td>Specifies the variation in the speaking voice. (Monotone
      voice or animated voice?)</td>
    <td><i>number</i></td>
    <td>2</td>
  </tr>
  <tr>
    <td>play-during</td>
    <td>Specifies a sound to be played while speaking an element's
      content</td>
    <td>auto<br>
      none<br>
      <i>url</i><br>
      mix<br>
      repeat</td>
    <td>2</td>
  </tr>
  <tr>
    <td>richness</td>
    <td>Specifies the richness of the speaking voice. (Rich voice
      or thin voice?)</td>
    <td><i>number</i></td>
    <td>2</td>
  </tr>
  <tr>
    <td>speak</td>
    <td>Specifies whether content will render aurally</td>
    <td>normal<br>
      none<br>
      spell-out</td>
    <td>2</td>
  </tr>
</table>
</div>

</body>
</html>