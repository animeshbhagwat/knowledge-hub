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
     background: url("book1.jpg");
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
<!--<body background="images.jpg"> background: url("book.jpg");-->
<h3>Follow your Passion and dream!</h3>
<p>
	If none of the options given attract you then it is time to abandon everything and to follow your dreams. Take the challenge and try to combine your profession with your passion. Music, dance, photography, painting or any other talent or passion of yours can be grown and changed into your profession. There will be some challenges faced by you if you follow this path, however, you will be left with no regrets about pursuing something you love to do.
	<h3> Nothing is as important as passion, no matter what you want to do with your life, be passionate.<br><center>-bon jovi</center></h3>

</p>
<div align = "left"> <button class = "button" onclick="back()"><-back</button></div>
<script>
function back() {
window.top.location.href='frame.php'}
</script>
</body>
</html>