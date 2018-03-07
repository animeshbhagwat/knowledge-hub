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
	font-family:verdana,arial,sans-serif;
	font-size:10pt;
	margin:10px;
	background-color:#006699;
	color:white;
	}
	.button{
	background-color: #c0392b;
    color: white;
	margin-top:8px;
    padding:8px;
    width: 25%;
	font-size:15px;
	font-weight: bold;
	}
	.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}


</style>
</head>
<body>
<div align = "right"> <button class = "button" onclick="mylogout()">LOGOUT</button></div>
<script>
function mylogout() {
window.top.location.href='../logout.php'}
</script>
</html>
</body>
</html>