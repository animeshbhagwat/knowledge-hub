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
	<h2 style="color:#069">Exams </h2>
<a class="one"  href="gate.php" target="right">Gate</a>
<br>
<a class="one"  href="phd.php" target="right">Ph.D</a>
<br>
<br>
<br>
<a class="one" href="../fb.php" target="right" style="color:#069">FEEDBACK</a>
<br>
</body>
</html>
