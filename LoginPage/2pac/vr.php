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
	<h2>Virtual Reality</h2>
<p>
<h3>What is virtual reality</h3>
The definition of virtual reality comes, naturally, from the definitions for both ‘virtual’ and ‘reality’. The definition of ‘virtual’ is near and reality is what we experience as human beings. So the term ‘virtual reality’ basically means ‘near-reality’. This could, of course, mean anything but it usually refers to a specific type of reality emulation.
<img src="vr.png">
<h3>How is virtual reality achieved?</h3>
Although we talk about a few historical early forms of virtual reality elsewhere on the site, today virtual reality is usually implemented using computer technology. There are a range of systems that are used for this purpose, such as headsets, omni-directional treadmills and special gloves. These are used to actually stimulate our senses together in order to create the illusion of reality.<br>

This is more difficult than it sounds, since our senses and brains are evolved to provide us with a finely synchronised and mediated experience. If anything is even a little off we can usually tell. This is where you’ll hear terms such as immersiveness  and realism enter the conversation. These issues that divide convincing or enjoyable virtual reality experiences from jarring or unpleasant ones are partly technical and partly conceptual. Virtual reality technology needs to take our physiology into account. For example, the human visual field does not look like a video frame. We have (more or less) 180 degrees of vision and although you are not always consciously aware of your peripheral vision, if it were gone you’d notice. Similarly when what your eyes and the vestibular system in your ears tell you are in conflict it can cause motion sickness. Which is what happens to some people on boats or when they read while in a car.<br>

If an implementation of virtual reality manages to get the combination of hardware, software and sensory synchronicity just right it achieves something known as a sense of presence. Where the subject really feels like they are present in that environment.<br>

<h3>Why have virtual reality?</h3>
This may seems like a lot of effort, and it is! What makes the development of virtual reality worthwhile? The potential entertainment value is clear. Immersive films and video games are good examples. The entertainment industry is after all a multi-billion dollar one and consumers are always keen on novelty. Virtual reality has many other, more serious, applications as well.<br>

<h3>Features of virtual reality systems</h3>
There are many different types of virtual reality systems but they all share the same characteristics such as the ability to allow the person to view three-dimensional images. These images appear life-sized to the person.<br>

Plus they change as the person moves around their environment which corresponds with the change in their field of vision. The aim is for a seamless join between the person’s head and eye movements and the appropriate response, e.g. change in perception. This ensures that the virtual environment is both realistic and enjoyable.<br>

A virtual environment should provide the appropriate responses – in real time- as the person explores their surroundings. The problems arise when there is a delay between the person’s actions and system response or latency which then disrupts their experience. The person becomes aware that they are in an artificial environment and adjusts their behaviour accordingly which results in a stilted, mechanical form of interaction.<br>

The aim is for a natural, free-flowing form of interaction which will result in a memorable experience.<br>
<h3>Summary</h3>
Virtual reality is the creation of a virtual environment presented to our senses in such a way that we experience it as if we were really there. It uses a host of technologies to achieve this goal and is a technically complex feat that has to account for our perception and cognition. It has both entertainment and serious uses. The technology is becoming cheaper and more widespread. We can expect to see many more innovative uses for the technology in the future and perhaps a fundamental way in which we communicate and work thanks to the possibilities of virtual reality.


</p>
</body>
</html>