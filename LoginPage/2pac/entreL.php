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
		<h2 style="color:#069">Steps </h2>
<a class="one" href="startup.php" target="right">Idea to Startup</a>
<br>
<a class="one" href="fund.php" target="right">Funding</a>
<br>
<a class="one" href="mentor.php" target="right">Mentors</a>
<br>
<br>
<br>
<a class="one" href="../fb.php" target="right" style="color:#069">FEEDBACK</a>
<br>
</body>
</html>
