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
	<h2>Embedded System</h2>
<p>
<h3>What are embedded systems?</h3>
	As its name suggests, Embedded means something that is attached to another thing. An embedded system can be thought of as a computer hardware system having software embedded in it. An embedded system can be an independent system or it can be a part of a large system. An embedded system is a microcontroller or microprocessor based system which is designed to perform a specific task. For example, a fire alarm is an embedded system; it will sense only smoke.<br>

<h3>Characteristics of an Embedded System</h3>
Single-functioned − An embedded system usually performs a specialized operation and does the same repeatedly. For example: A pager always functions as a pager.<br>

Tightly constrained − All computing systems have constraints on design metrics, but those on an embedded system can be especially tight. Design metrics is a measure of an implementation's features such as its cost, size, power, and performance. It must be of a size to fit on a single chip, must perform fast enough to process data in real time and consume minimum power to extend battery life.<br>

Reactive and Real time − Many embedded systems must continually react to changes in the system's environment and must compute certain results in real time without any delay. Consider an example of a car cruise controller; it continually monitors and reacts to speed and brake sensors. It must compute acceleration or de-accelerations repeatedly within a limited time; a delayed computation can result in failure to control of the car.<br>

Microprocessors based − It must be microprocessor or microcontroller based.<br>

Memory − It must have a memory, as its software usually embeds in ROM. It does not need any secondary memories in the computer.<br>

Connected − It must have connected peripherals to connect input and output devices.<br>

HW-SW systems − Software is used for more features and flexibility. Hardware is used for performance and security.
<br>
<h3>Basic Structure of an Embedded System</h3>
<center>
<img src="es.jpg"></center>
<br>
Sensor − It measures the physical quantity and converts it to an electrical signal which can be read by an observer or by any electronic instrument like an A2D converter. A sensor stores the measured quantity to the memory.<br>

A-D Converter − An analog-to-digital converter converts the analog signal sent by the sensor into a digital signal.<br>

Processor & ASICs − Processors process the data to measure the output and store it to the memory.<br>

D-A Converter − A digital-to-analog converter converts the digital data fed by the processor to analog data<br>

Actuator − An actuator compares the output given by the D-A Converter to the actual (expected) output stored in it and stores the approved output.<br>
</p>
</body>
</html>