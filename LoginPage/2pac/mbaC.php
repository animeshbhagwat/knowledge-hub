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
    background: url("book.jpg");
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size:cover;
}
	.button{
	background-color: #000000;
    color: white;
	margin-top:10px;
    padding:10px;
    width: 15%;
	font-size:18px;
	font-weight: bold;
	}
	.button:active {
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

</style>
 </head>
<title>MBA</title>
<body>
<h1>MBA</h1>
<p>
MBA means Master in Business Administration. It is an internationally recognised degree. MBA course is versatile and it is used internationally. MBA is having huge demand in the business administration industry. Candidates who completed MBA course from top b schools will be able to get good packages since they will get placed in top level management companies. It is a 2 year course and has demand across the globe. MBA course demand is increasing because of increasing MNCs and industries across the world.
</p>
<div align = "left"> <button class = "button" onclick="back()"><-back</button></div>
<script>
function back() {
window.top.location.href='frame.php'}
</script>
  </body>
</html>
