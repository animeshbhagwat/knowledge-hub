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
<title> CAT</title>
<body>
<h1>CAT Examination</h1>
<p>
Common Admission Test (CAT) is national-level management entrance examination conducted by the Indian Institutes of Management (IIM). CAT scores are used for admission to various management institutes across the country.
Eligibility.
The candidate must possess a Bachelor's Degree with at least 50% marks or equivalent CGPA (45% for SC, ST and PWD/DA category).
Percentage obtained in bachelors degree would be calculated on the basis of practice followed by the concerned university/institution. In case of grades or CGPA, the conversion would be based on the process defined by the concerned university or institution.
In absence of any percentage conversion scheme, candidate's CGPA will be divided by maximum possible CGPA and multiplying the result with 100.
Candidates appearing for the final year of bachelor's degree/equivalent qualification are also eligible to apply for CAT.</p>
<br>The CAT 2017 question paper will consist of the following sections:</br>
<br></br>
<table border="1">
<tr>
<th>Section</th>
<th>Questions</th>
<th>Duration</th>
</tr>
<tr>
<td>Quantitative Aptitude (QA)</td>
<td>34 Questions</td>
<td>60 minutes</td>
</tr>
<tr>
<td>Data Interpretation & Logical Reasoning (DILR)</td>
<td>32 Questions</td>
<td>60 minutes</td>
</tr>
<tr>
<td>Verbal and Reading Comprehension (VRC)</td>
<td>32 Questions</td>
<td>60 minutes</td>
</tr>
<tr>
<td>Total</td>
<td>100 questions</td>
<td>180 minutes</td>
</tr>
</body>
</html>