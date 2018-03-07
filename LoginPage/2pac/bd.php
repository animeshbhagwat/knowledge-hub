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
	<h2>Big Data</h2>
<p>
<h3>What is big data</h3>
Big data is a term that describes the large volume of data – both structured and unstructured – that inundates a business on a day-to-day basis. But it’s not the amount of data that’s important. It’s what organizations do with the data that matters. Big data can be analyzed for insights that lead to better decisions and strategic business moves.	
	<h3>Why Is Big Data Important</h3>
The importance of big data doesn’t revolve around how much data you have, but what you do with it. You can take data from any source and analyze it to find answers that enable 1) cost reductions, 2) time reductions, 3) new product development and optimized offerings, and 4) smart decision making.<br><br>
<center>
<img src="bd.jpg"></center>
<br>
Big data big potential<br>

The amount of data that’s being created and stored on a global level is almost inconceivable, and it just keeps growing. That means there’s even more potential to glean key insights from business information – yet only a small percentage of data is actually analyzed. What does that mean for businesses? How can they make better use of the raw information that flows into their organizations every day?
</p>

</body>
</html>