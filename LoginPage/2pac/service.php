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
	<h2>Service Oriented Job</h2>
<p>
<h3>What is Service Based Company?</h3><br>
The company who develops custom software according to the requirement of their client is known as services based company.<br>

Example : If some one has some different requirement, for which the software is not available in the market then he/she will approach a company to develop that custom software/web application for his/her requirement.<br>

Examples of a service-based company are TCS, Infosys and Wipro. They fulfill software requirements for a client. <br>

The language of these companies is that the client is the King!<br>
<h3>Service Based Company</h3>
-Employees are treated as labours to get the job done.<br>
-No creativity.<br>
-No new learning (If you dont know you will be replaced, If you are a PHP guy you will not be given time to learn Android, you will be replaced by Android guy).<br>
-Monotonous life and work.<br> 

</p>
</body>
</html>