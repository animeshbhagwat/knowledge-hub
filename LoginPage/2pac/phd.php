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
<title>PhD</title>
<body>
<h1>PhD</h1>
<p>
a PhD stands for 'Doctor of Philosophy', sometimes referred to as a 'doctorate'. It is the highest level of degree that a student can achieve. At some institutions, including Oxford University, a Doctor of Philosophy is known as a DPhil. It is distinct from professional doctorates such as an Engineering Doctorate (EngD). 
</p>
<br><b>PhD Entry requirements</b></br>
<p>
An undergraduate degree is a minimum requirement and many will also require a master's degree (such as an MA, MSc or MRes). Some funded PhD's will be on a 1+3 basis, which is one year of a master's plus three years of PhD funding.

<br><b>How to apply for a PhD</b></br>
<p>
Prospective PhD students are usually expected to submit a research proposal to the department they wish to undertake their study in. Some departments will encourage students to discuss their ideas with an academic working in that field first. The proposal will outline what they intend their research to investigate, how it relates to other research in their field and what methods they intend to use to carry out their research. Some PhD's however, particularly in the sciences, are advertised as studentships where the research aims are more prescriptive.
</p>
<br><b>How long is the course?</b></br>
<p>
A PhD usually lasts three years (four for a New Route PhD - see below), or rather, any available funding usually lasts for that time. Students may be able to take extra time in order to complete their thesis but this will usually be at their own expense. For part-time, self-funded students, a PhD can take up to seven years.
</p>
<br><b>What's involved</b></br>
<p>
A PhD usually culminates in a dissertation of around 80,000-100,000 words, based on research carried out over the course of their study. The research must be original and aim to create new knowledge or theories in their specialist area, or build on existing knowledge or theories. Many departments initially accept students on an MPhil basis and then upgrade them to PhD status after the first year or two, subject to satisfactory progress. Students who are not considered to be doing work appropriate for PhD level can instead submit a shorter thesis and gain an MPhil.

There is little taught element in a PhD - students are expected to work independently, supported by their department and a supervisor. There may be seminars to attend and/or lab work to complete, depending on the subject. During their study, students will try and get academic papers published and present their work at conferences, which will allow them to get feedback on their ideas for their dissertation.

New Route PhD
Introduced in 2001, the New Route PhD is a four-year programme that combines taught elements, including professional and transferable skills, with the student's research. There are now hundreds of NRPhD students studying a variety of subjects at a consortium of universities across the UK. Check www.newroutephd.ac.uk for further information and a list of participating universities. 
</p>
<br><b>Career prospects for PhD Students</b></br>
<p>
PhD graduates who go on to work in academia usually start off by undertaking postdoctoral research and then a fellowship or lectureship. Other career options will depend on what the PhD was in - commercial research is an option for some, and many are able to use their specialist knowledge and research skills in areas of business and finance.  
</p>
</body>
</html>
