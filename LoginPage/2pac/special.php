<?php
	session_start();
	if(!isset($_SESSION['username'])||!isset($_SESSION['password']) )
	{
		header( "Location: redirect.php");
	}
?>
<!DOCTYPE html>
<html>
<frameset rows="140,*,70" frameborder="1" border="1" framespacing="1">
  <frame src="top.php" name="top">
<frameset cols="25,75" frameborder="2" border="2" framespacing="1">
<frame src="specialL.php" name="left"/>
<frame src="specialR.php" name="right"/>
</frameset>

  <frame src="bottom.php" name="bottom">
</html>