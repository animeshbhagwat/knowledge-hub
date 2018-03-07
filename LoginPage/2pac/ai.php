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
    background: url("bg.jpg");
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size:cover;
}
</style>
</head>
<body>
	<h2>Artifitial Intelligence</h2>
<p>
A branch of Computer Science named Artificial Intelligence pursues creating the computers or machines as intelligent as human beings.
<h3>What is Artificial Intelligence?</h3>
Artificial Intelligence is a way of making a computer, a computer-controlled robot, or a software think intelligently, in the similar manner the intelligent humans think.

<h3>Goals of AI</h3>
-To Create Expert Systems − The systems which exhibit intelligent behavior, learn, demonstrate, explain, and advice its users.
-To Implement Human Intelligence in Machines − Creating systems that understand, think, learn, and behave like humans.

<h3>What Contributes to AI?</h3>
Artificial intelligence is a science and technology based on disciplines such as Computer Science, Biology, Psychology, Linguistics, Mathematics, and Engineering. A major thrust of AI is in the development of computer functions associated with human intelligence, such as reasoning, learning, and problem solving.
Out of the following areas, one or multiple areas can contribute to build an intelligent system.<br>
<center>
<img align="middle" src = "ai.jpg" >
</center>
<br>
<h3>Applications of AI</h3>
-Gaming <br>
-Natural Language Processing<br>
-Expert Systems <br>
-Vision Systems<br>
-Speech Recognition <br>
-Handwriting Recognition <br>
-Intelligent Robots <br>
</body>
</html>