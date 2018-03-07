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
<h3>Job/Campus Placement</h3>
<p>
	This is the best option if you have no interest in pursuing further studies. Campus Placements is a common phenomenon in most good engineering institutes. Apply for the placement offers that are available in the campus and more important prepare well for them. Try to stick to those jobs which interest you while keeping in mind the field of engineering you would later on want to make your mark in. Campus placements for engineering students are on the rise every year with high packages being offered to those candidates with above average performance during their college days.
</p>
<div align = "left"> <button class = "button" onclick="back()"><-back</button></div>
<script>
function back() {
window.top.location.href='frame.php'}
</script>
</body>
</html>