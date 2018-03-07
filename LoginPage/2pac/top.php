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
<title>HTML Frames Example - Top Nav</title>
<style>
body {
	font-family:verdana,arial,sans-serif;
	font-size:10pt;
	margin:10px;
	background-color:#ea2626;
	}
	.btn-group .button {
    background-color: #4CAF50; /* Green */
    border: 5px solid green;
    color: white;
    padding: 10px 24px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 13px;
    cursor: pointer;
    float: center;
}
.btn-group .button:not(:last-child) {
    border-right: none; 
}
.btn-group .button:hover {
    background-color: #3e8e41;}
</style>
</head>
<body>
<center><b><h1 style="color: #FFDF00 ;">KNOWLEDGE HUB</h1></b></center>
<center><i><font color="#33cccc">Available Paths:</font></i>

<div align="center" class="btn-group">
<button class = "button" onclick="myMS()">MS</button>
<button class = "button"  onclick="myMBA()">MBA</button>
<button class = "button"  onclick="mymtech()">M Tech</button>
<button class = "button"  onclick="myentre()">Entrepreneurship</button>
<button class = "button"  onclick="myspecial()">Specialization</button>
<button class = "button"  onclick="myjob()">Jobs</button>
<button class = "button"  onclick="mydream()">Follow your dream</button>

</div>
<script>
function myMS() {
    window.top.location.href='ms.php'}

function myMBA() {
    window.top.location.href='mba.php'}
function mymtech() {
    window.top.location.href='mtech.php'}
function myentre() {
    window.top.location.href='entre.php'}
function myspecial() {
    window.top.location.href='special.php'}
function myjob() {
    window.top.location.href='job.php'}
function mydream() {
    window.top.location.href='dream.php'}


</script>
</center>
</body>
</html>