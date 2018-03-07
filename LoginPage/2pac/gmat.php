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
<title>GMAT</title>
<h1>GMAT Examination</h1>
<p>
The GMAT CAT includes Verbal, Quantitative, Integrated Reasoning and Analytical Writing questions. Data Sufficiency and Problem Solving questions are interspersed through the quantitative section. The verbal section comprises of Sentence Correction, Reading Comprehension, and Critical Reasoning questions.
</p>
<br></br> 
<table border="1">
<tr>
<th>Section</th>
<th>Questions</th>
<th>Duration</th>
</tr>
<tr>
<td>Integrated Reasoning</td>
<td>12 Questions</td>
<td>30 minutes</td>
</tr>
<tr>
<td>Analytical Writing</td>
<td>N.A.</td>
<td>30 minutes</td>
</tr>
<tr>
<td>Optional Rest Break</td>
<td></td>
<td>5 minutes</td>
</tr>
<tr>
<td>Quantitative Section</td>
<td>37 questions</td>
<td>75 minutes</td>
</tr>
<td>Optional Rest Break</td>
<td></td>
<td>5 minutes</td>
</tr>
<tr>
<td>Verbal Section</td>
<td>41 Questions</td>
<td>75 minutes</td>
<td>3 hours 30 minutes</td>
</tr>
</body>
</html>
