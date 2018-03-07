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
body {
    background: url("bg.jpg");
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size:cover;
}
</style>
</head>
<body>
	<h2>Product Based Job</h2>
<p>
<h3>What is Product Based Company?</h3><br>
The company which has developed a general software application and selling that application as product to different customers.<br>

Example : Operating system is a product and company who has created that operating system is the product based company.<br>
Product-based company examples are Microsoft, Google and Yahoo. They fulfill product requirements of the general consumer. <br>

The language of these companies is that quality is the King!<br>
<h3>Product Based Companies</h3>
-Creative work.<br>
-Enough time to learn and understand.<br>
-Creativity is important not the time spent in office or the hours spent on computer<br>
-Better learning<br>
-Better pay because of small team and larger sale of product.<br>

</p>
</body>
</html>