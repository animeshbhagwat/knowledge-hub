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
	<h2>Cloud computing</h2>
<p>
<h3>What is cloud computing?</h3>
Simply put, cloud computing is the delivery of computing services—servers, storage, databases, networking, software, analytics and more—over the Internet (“the cloud”). Companies offering these computing services are called cloud providers and typically charge for cloud computing services based on usage, similar to how you are billed for water or electricity at home.

<h3>Uses of cloud computing?</h3>
You are probably using cloud computing right now, even if you don’t realise it. If you use an online service to send email, edit documents, watch movies or TV, listen to music, play games or store pictures and other files, it is likely that cloud computing is making it all possible behind the scenes. The first cloud computing services are barely a decade old, but already a variety of organisations—from tiny startups to global corporations, government agencies to non-profits—are embracing the technology for all sorts of reasons. Here are a few of the things you can do with the cloud:<br>

*Create new apps and services<br>
*Store, back up and recover data<br>
*Host websites and blogs<br>
*Stream audio and video<br>
*Deliver software on demand<br>
*Analyse data for patterns and make predictions<br>


<h3>Types of cloud services</h3>
Types of cloud services: IaaS, PaaS, SaaS<br>
Most cloud computing services fall into three broad categories: infrastructure as a service (IaaS), platform as a service (PaaS) and software as a service (Saas). These are sometimes called the cloud computing stack, because they build on top of one another. Knowing what they are and how they are different makes it easier to accomplish your business goals.
<br>
1. Infrastructure-as-a-service (IaaS)
<br>
The most basic category of cloud computing services. With IaaS, you rent IT infrastructure—servers and virtual machines (VMs), storage, networks, operating systems—from a cloud provider on a pay-as-you-go basis. To learn more, see What is IaaS?
<br>
2. Platform as a service (PaaS)
<br>
Platform-as-a-service (PaaS) refers to cloud computing services that supply an on-demand environment for developing, testing, delivering and managing software applications. PaaS is designed to make it easier for developers to quickly create web or mobile apps, without worrying about setting up or managing the underlying infrastructure of servers, storage, network and databases needed for development. To learn more, see What is PaaS?
<br>
3. Software as a service (SaaS)
<br>
Software-as-a-service (SaaS) is a method for delivering software applications over the Internet, on demand and typically on a subscription basis. With SaaS, cloud providers host and manage the software application and underlying infrastructure and handle any maintenance, like software upgrades and security patching. Users connect to the application over the Internet, usually with a web browser on their phone, tablet or PC. To learn more, see What is SaaS?

<h3>How cloud computing works?</h3>
Cloud computing services all work a little differently, depending on the provider. But many provide a friendly, browser-based dashboard that makes it easier for IT professionals and developers to order resources and manage their accounts. Some cloud computing services are also designed to work with REST APIs and a command-line interface (CLI), giving developers multiple options.
<center><img src="cc.png"></center>
</p>
</body>
</html>