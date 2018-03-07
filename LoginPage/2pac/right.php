<?php
	session_start();
	if(!isset($_SESSION['username'])||!isset($_SESSION['password']) )
	{
		header( "Location: redirect.php");
	}
?>
<!DOCTYPE html>
<html>
<style>
.btn-group .button {
    background-color: #4CAF50; /* Green */
    border: 5px solid green;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
    float: left;
}
.btn-group .button:not(:last-child) {
    border-right: none; 
}
.btn-group .button:hover {
    background-color: #3e8e41;
}
body {
    background: url("frame.jpg");
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size:cover;
}

</style>
<!--   <body bgcolor="#00ffcc">
<i><font color="#980606">Choose Path:</font></i></br>
<div class="btn-group">
<button class = "button" onclick="myMS()">MS</button>
<button class = "button"  onclick="myMBA()">MBA</button>
<button class = "button"  onclick="mymtech()">M Tech</button>
<button class = "button"  onclick="myentre()">Entrepreneurship</button>
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

</script>
-->
</body>
</html>
