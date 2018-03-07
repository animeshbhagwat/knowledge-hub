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
<h3>Specialization</h3>
<p>
	For many who choose this category, has the potential to still fight and fight for creating, innovating and developing cutting edge technology for the betterment of lives. The choice all depends on the matter of your interest. For them we can't suggest a course because they define their own path to success but the future lies among the stated research and development feilds .
</p>
<div align = "left"> <button class = "button" onclick="back()"><-back</button></div>
<script>
function back() {
window.top.location.href='frame.php'}
</script>
</body>
</html>