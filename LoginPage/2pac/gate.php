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
<title>TOEFL</title>
<h1>GATE Examination</h1>
<p>
A national level examination, GATE (Graduate Aptitude Test in Engineering) is a qualifying exam for admissions to post-graduate programs (e.g., M.E., M.Tech, direct Ph.D.) in Indian institutes of higher education with financial assistance provided by MHRD and other Government agencies. GATE scores may also be used by Public and Private Sector.


The exam tests the comprehensive understanding of candidate in various undergraduate subjects including Engineering/Technology/Architecture and post-graduate level subjects in Science.
 
The exam, which is conducted online, encompasses 23 papers. The exam papers will have questions for which numerical answers must be keyed in by the candidate using the virtual keypad. However, the rest of the questions are of Multiple Choice Question (MCQ) type.
Pattern
Since a candidate is allowed to appear in ONLY ONE of the 23 papers for which GATE examination is being held, the candidate has to make the choice of the paper he/she wishes to write carefully.


The candidate is expected to appear in a paper appropriate to the discipline of his/her qualifying degree. However, the candidate is, free to choose any paper according to his/her admission plan, keeping in mind the eligibility criteria of the institutions in which he/she wishes to seek admission. For more details regarding the admission criteria in any particular institute, the candidate is advised to refer to the websites of that institute.
 

In all the papers, there will be a total of 65 questions carrying 100 marks, out of which 10 questions carrying a total of 15 marks are in General Aptitude (GA).


In the papers bearing the codes AE, AG, BT, CE, CH, CS, EC, EE, IN, ME, MN, MT, PI, TF and XE, the Engineering Mathematics will carry around 15% of the total marks, the General Aptitude section will carry 15% of the total marks and the remaining 70% percentage of the total marks is devoted to the subject of the paper.


In the papers bearing the codes AR, CY, EY, GG, MA, PH and XL, the General Aptitude section will carry 15% of the total marks and the remaining 85% of the total marks is devoted to the subject of the paper.
</p>

<br><b>GATE would contain questions of two different types in various papers:</b></br>


(i) Multiple Choice Questions (MCQ) carrying 1 or 2 marks each in all papers and sections. These questions are objective in nature, and each will have a choice of four answers, out of which the candidate has to mark the correct answer(s).

(ii) Numerical Answer Questions of 1 or 2 marks each in all papers and sections. For these questions the answer is a real number, to be entered by the candidate using the virtual keypad. No choices will be shown for this type of questions.

<br><b>Design of Questions</b></br>

The questions in a paper may be designed to test the following abilities:


(i) Recall: These are based on facts, principles, formulae or laws of the discipline of the paper. The candidate is expected to be able to obtain the answer either from his/her memory of the subject or at most from a one-line computation.
 
<br><b>Marking Scheme:</b></br>
 <p>
For 1-mark multiple-choice questions, 1/3 marks will be deducted for a wrong answer. Likewise, for 2-marks multiple-choice questions, 2/3 marks will be deducted for a wrong answer. There is no negative marking for numerical answer type questions.
 
General Aptitude (GA) Questions:
 
In all papers, GA questions carry a total of 15 marks. The GA section includes 5 questions carrying 1 mark each (sub-total 5 marks) and 5 questions carrying 2 marks each (sub-total 10 marks).
 </p>
<br><b>Question Papers other than GG, XE and XL:</b></br>
 <p>
These papers would contain 25 questions carrying 1 mark each (sub-total 25 marks) and 30 questions carrying 2 marks each (sub-total 60 marks). The question paper will consist of questions of multiple choice and numerical answer type.
For numerical answer questions, choices will not be given. Candidates have to enter the answer (which will be a real number, signed or unsigned, e.g. 25.06, -25.06, 25, -25 etc.) using a virtual keypad. An appropriate range will be considered while evaluating the numerical answer type questions so that the candidate is not penalized due to the usual round-off errors.
 
GG (Geology and Geophysics) Paper:
 
Apart from the General Aptitude (GA) section, the GG question paper consists of two parts: Part A and Part B. Part A is common for all candidates. Part B contains two sections: Section 1 (Geology) and Section 2 (Geo-physics). Candidates will have to attempt questions in Part A and either Section 1 or Section 2 in Part B.
Part A consists of 25 multiple-choice questions carrying 1-mark each (sub-total 25 marks and some of these may be numerical answer type questions). Each section in Part B (Section 1 and Section 2) consists of 30 multiple choice questions carrying 2 marks each (sub-total 60 marks and some of these may be numerical answer type questions).
 
XE Paper (Engineering Sciences):
 
In XE paper, Engineering Mathematics section (Section A) is compulsory. This section contains 11 questions carrying a total of 15 marks: 7 questions carrying 1 mark each (sub-total 7 marks), and 4 questions carrying 2 marks each (sub-total 8 marks). Some questions may be of numerical answer type questions.
Each of the other sections of the XE paper (Sections B through G) contains 22 questions carrying a total of 35 marks: 9 questions carrying 1 mark each (sub-total 9 marks) and 13 questions carrying 2 marks each (sub-total 26 marks). Some questions may be of numerical answer type.
 
XL Paper (Life Sciences):
 
In XL paper, Chemistry section (Section H) is compulsory. This section contains 15 questions carrying a total of 25 marks: 5 questions carrying 1 mark each (sub-total 5 marks) and 10 questions carrying 2-marks each (sub-total 20 marks). Some questions may be of numerical answer type.
Each of the other sections of the XL paper (Sections I through M) contains 20 questions carrying a total of 30 marks: 10 questions carrying 1 mark each (sub-total 10 marks) and 10 questions carrying 2 marks each (sub-total 20 marks). Some questions may be of numerical answer type.
</p> 
<br><b>Note on Negative Marking for Wrong Answers</b></br>
 <p>
For a wrong answer chosen for the multiple choice questions, there would be negative marking. For 1-mark multiple choice questions, 1/3 mark will be deducted for a wrong answer. Likewise, for 2-mark multiple choice questions, 2/3 mark will be deducted for a wrong answer. However, there is no negative marking for a wrong answer in numerical answer type questions.
</p>
</body>
</html>
