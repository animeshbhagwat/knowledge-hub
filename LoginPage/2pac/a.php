<?php
	session_start();
	if(!isset($_SESSION['username'])||!isset($_SESSION['password']) )
	{
		header( "Location: redirect.php");
	}
?>
<!DOCTYPE html>
<html>
<body>
<a href="gre.php" target="right">GRE</a>
<br>
<a href="toefl.php" target="right">TOEFL</a>
<br>
<a href="gmat.php" target="right">gmat</a>
<br>
<a href="cat.php" target="right">cat</a>
<br>
<a href="gate.php" target="right">Gate</a>
<br>
<a href="phd.php" target="right">Ph.D</a>
<br>
<?php
<button onclick="window.location.href='../logout.php'">Click me</button>
?></body>
</html>