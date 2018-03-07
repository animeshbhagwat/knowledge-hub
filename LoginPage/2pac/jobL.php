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
		<h2 style="color:#069">Types of Jobs </h2>
<a class="one" href="service.php" target="right">Service Oriented</a>
<br>
<a class="one" href="product.php" target="right">Product Based</a>
<br>
<br>
<br>
<a class="one" href="../fb.php" target="right" style="color:#069">FEEDBACK</a>
<br>
</body>
</html>
