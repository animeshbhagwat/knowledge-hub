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
</style>
</head>
<body background="images.jpg">
<h3>Entrepreneurship</h3>
<p>
	Who doesnt want to be his own boss? Scintillating but challenging career option after B.tech. We say it challenging because with minimal work experience, at times it gets very challenging to survive in cut throat competition coming from established and experienced business set ups. Not putting damper on your thoughts though. If you believe in yourself and has proven some actual results during your studying years then give your entrepreneurial skills a go. After all established businesses have also taken the leap and started from somewhere.
</p>
<div align = "left"> <button class = "button" onclick="back()"><-back</button></div>
<script>
function back() {
window.top.location.href='frame.php'}
</script>
</body>
</html>