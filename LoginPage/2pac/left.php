<?php
	session_start();
	if(!isset($_SESSION['username'])||!isset($_SESSION['password']) )
	{
		header( "Location: redirect.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
<style>
a.one:link {color:#ff0000;}
a.one:visited {color:#0000ff;}
a.one:hover {color:#ffcc00;
			 font-size:150%;
			 background:#ffa500;}
</style>
</head>
<body>
	<body bgcolor="#ffffcc">
<h3 style="color:#069">Exams and Details</h3>
<a class="one" href="gre.php" target="right">GRE</a>
<br>
<a class="one" href="toefl.php" target="right">TOEFL</a>
<br>
<a class="one" href="gmat.php" target="right">GMAT</a>
<br>
<a class="one" href="cat.php" target="right">CAT</a>
<br>
<a class="one" href="gate.php" target="right">GATE</a>
<br>
<a class="one" href="phd.php" target="right">Ph.D</a>
<br>
<br>
<br>
<a class="one" href="../fb.php" target="right" style="color:#069">FEEDBACK</a>
<br>
</body>
</html>

