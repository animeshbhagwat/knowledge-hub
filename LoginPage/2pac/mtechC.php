<?php
	session_start();
	//if(!isset( $_SESSION['id'] ) )
	if(!isset($_SESSION['username'])||!isset($_SESSION['password']) )
	{
		//echo '<script type="text/javascript">alert("plz login")</script>';
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
<title>M.Tech</title>
<h1>M.Tech</h1>
<p>
This is generally a 2-year (2.5 years for M.Sc.Eng.) specialization program in a specific branch of engineering or a technical field. Students typically enter the M.Eng./M.Tech./M.Sc.Eng./M.Sc.Tech. programs after completing a 4-year undergraduate program in engineering resulting in the award of a Bachelor of Engineering or Bachelor of Technology degree, or a 5-year program in Science or Applied Sciences resulting in the award of a Master of Science degree.

</p>
<div align = "left"> <button class = "button" onclick="back()"><-back</button></div>
<script>
function back() {
window.top.location.href='frame.php'}
</script>
</html>
