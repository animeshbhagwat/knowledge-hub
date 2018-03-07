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
		<h2 style="color:#069">Options </h2>
<a class="one" href="ai.php" target="right">Artificial Intelligence</a>
<br>
<a class="one" href="bd.php" target="right">Big Data </a>
<br>
<a class="one" href="cc.php" target="right">Cloud Computing </a>
<br>
<a class="one" href="ccd.php" target="right">Crypto-Currency Development </a>
<br>
<a class="one" href="dm.php" target="right">Data Mining </a>
<br>
<a class="one" href="es.php" target="right">Embeded Systems </a>
<br>
<a class="one" href="iot.php" target="right">Internet Of Things</a>
<br>
<a class="one" href="vr.php" target="right">Virtual Reality Developers</a>
<br>


<br>
<br>
<a class="one" href="../fb.php" target="right" style="color:#069">FEEDBACK</a>
<br>
</body>
</html>
