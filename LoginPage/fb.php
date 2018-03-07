<?php
	session_start();
	require_once('dbconfig/connect.php');
	$_SESSION['email']="";
	//phpinfo();
	/*if(isset($_POST['email'])){
        $_SESSION['email'] = $_POST['email'];
    }
     if(isset($_POST['epassword'])){
        $_SESSION['epassword'] = $_POST['epassword'];}*/
	?>
<!DOCTYPE html>
<html>
<head>
<title>Sign Up Page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#bdc3c7">
	<form method="POST" > <!--action="2pac/right.php"-->
		<center>
			<div class="inner_container">
				<label><b>Name</b></label>
				<input type="text" placeholder="Enter name" name="username" required>
				<label><b>email</b></label>
				<input type="email" placeholder="Enter email" name="email" required>
				<label><b>email password</b></label>
				<input type="password" placeholder="Enter password of email" name="epassword" required>
				<label><b>Feedback:</b></label>
				<input type="text" placeholder="Enter feedback" name="feedback" required>

				<button name="submit" class="sign_up_btn" type="submit">Submit feedback</button>
			</div>
		</center>
	</form>
</body>
</html>
<?php

			if(isset($_POST['submit']))
			{ 
				if(isset($_POST['email']))
				{
				$_SESSION['email'] = $_POST['email'];}
				if(isset($_POST['epassword']))
				{
					$_SESSION['epassword'] = $_POST['epassword'];}
				if(isset($_POST['feedback']))
				{
				$_SESSION['feedback'] = $_POST['feedback'];}




				@$username=$_POST['username'];
				@$feedback=$_POST['feedback'];

				$query = "insert into feedback values('$username','$feedback')";
							$query_run = mysqli_query($con,$query);
							if($query_run)
							{
								echo '<script type="text/javascript">alert("thank you")</script>';
								//$_SESSION['username'] = $username;
								//$_SESSION['password'] = $password;
								header( "Location: 2pac/send_animesh.php");
								//header( "Location: 2pac/frame.php");
							}
							else
							{
								echo '<p class="bg-danger msg-block">Unsuccessful due to server error. Please try later</p>';
							}
			}
?>
		