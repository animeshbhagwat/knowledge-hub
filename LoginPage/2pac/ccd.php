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
	<h2>Crypto Currency Development</h2>
<p>
<h2>What is cryptocurrency?</h2>
If you take away all the noise around cryptocurrencies and reduce it to a simple definition, you find it to be just limited entries in a database no one can change without fulfilling specific conditions. This may seem ordinary, but, believe it or not: this is exactly how you can define a currency.

Take the money on your bank account: What is it more than entries in a database that can only be changed under specific conditions? You can even take physical coins and notes: What are they else than limited entries in a public physical database that can only be changed if you match the condition than you physically own the coins and notes? Money is all about a verified entry in some kind of database of accounts, balances, and transactions.

How miners create coins and confirm transactions

Let‘s have a look at the mechanism ruling the databases of cryptocurrencies. A cryptocurrency like Bitcoin consists of a network of peers. Every peer has a record of the complete history of all transactions and thus of the balance of every account.

A transaction is a file that says, “Bob gives X Bitcoin to Alice“ and is signed by Bob‘s private key. It‘s basic public key cryptography, nothing special at all. After signed, a transaction is broadcasted in the network, sent from one peer to every other peer. This is basic p2p-technology. Nothing special at all, again.
<br>
<img src="ccd.png">
<br>
</p>
</body>
</html>