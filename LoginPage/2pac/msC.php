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

<title>MS</title>
<h1>MS</h1>
<p>
A Master of Science is a master's degree in the field of science awarded by universities in many countries, or a person holding such a degree.In contrast to the Master of Arts degree, the Master of Science degree is typically granted for studies in sciences, engineering, and medicine, and is usually for programs that are more focused on scientific and mathematical subjects; however, different universities have different conventions and may also offer the degree for fields typically considered within the humanities and social sciences. While it ultimately depends upon the specific program, earning a Master of Science degree typically includes writing a thesis.
</p>
<div align = "left"> <button class = "button" onclick="back()"><-back</button></div>
<script>
function back() {
window.top.location.href='frame.php'}
</script>
</html>
