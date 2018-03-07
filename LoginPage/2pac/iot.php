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
	<h2>Internet Of Things</h2>
<p>
<h3>What Is The Internet Of Things?</h3>
Simply put, this is the concept of basically connecting any device with an on and off switch to the Internet (and/or to each other). This includes everything from cellphones, coffee makers, washing machines, headphones, lamps, wearable devices and almost anything else you can think of.  This also applies to components of machines, for example a jet engine of an airplane or the drill of an oil rig. As I mentioned, if it has an on and off switch then chances are it can be a part of the IoT.  The analyst firm Gartner says that by 2020 there will be over 26 billion connected devices... That's a lot of connections (some even estimate this number to be much higher, over 100 billion).  The IoT is a giant network of connected "things" (which also includes people).  The relationship will be between people-people, people-things, and things-things.<br>
<center>
<img src="iot.jpg"></center>
<h3>How Does This Impact You?</h3>
The new rule for the future is going to be, "Anything that can be connected, will be connected." But why on earth would you want so many connected devices talking to each other? There are many examples for what this might look like or what the potential value might be. Say for example you are on your way to a meeting; your car could have access to your calendar and already know the best route to take. If the traffic is heavy your car might send a text to the other party notifying them that you will be late. What if your alarm clock wakes up you at 6 a.m. and then notifies your coffee maker to start brewing coffee for you? What if your office equipment knew when it was running low on supplies and automatically re-ordered more?  What if the wearable device you used in the workplace could tell you when and where you were most active and productive and shared that information with other devices that you used while working?<br>
On a broader scale, the IoT can be applied to things like transportation networks: "smart cities" which can help us reduce waste and improve efficiency for things such as energy use; this helping us understand and improve how we work and live.
<h3>IoT Security & Privacy</h3>
As devices become more connected thanks to the IoT, security and privacy have become the primary concern among consumers and businesses. In fact, the protection of sensitive data ranked as the top concern (at 36% of those polled) among enterprises, according to the 2016 Vormetric Data Threat Report.<br>

Cyber attacks are also a growing threat as more connected devices pop up around the globe. Hackers could penetrate connected cars, critical infrastructure, and even people's homes. As a result, several tech companies are focusing on cyber security in order to secure the privacy and safety of all this data.
</p>
</body>
</html>