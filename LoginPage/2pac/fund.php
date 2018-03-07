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
<h2>Startup Funding</h2>
<h3>Top 10 Sources Of Funding For Start-ups</h3>
<p>
1. Bootstrapping. Self-funding from your savings (if you have it) is always preferred. Advantages: no time going hat-in-hand to investors and you don’t have to relinquish any control in your company. For more on how to bootstrap, check out Bootstrap Business by Rich Christiansen, who has launched nearly 30 companies by that method.
</p><p>
2. Friends and family. Tap your inner circle before expanding your horizons. As a rule of thumb, professional investors like to see real skin in the game–your own, of that of people who trust you.
</p><p>
3. Small business grants. This bucket often gets overlooked, but it should be a major focus thanks to the Obama administration’s initiatives to foster new alternative-energy sources and other technological breakthroughs. Nabbing federal or state funds can be an exhausting gauntlet (check out “One Energy start-up’s Tireless Quest For Capital“), but at least the government doesn’t charge interest or demand control. One smart approach: Team with a professor at your local university. Grants associated with commercializing products are favored over ones allocated for academic study only. If a professor does the application with you and get to publish the results, that’s a win-win situation.
</p><p>
4. Loans or lines of credit. If your company needs only a temporary or small infusion of cash, try for a Small Business Administration loan (offered at a lower interest rate because it is guaranteed by the government) or a bank line of credit. Warning: Commercial banks are often dismissive of start-ups unless you have personal collateral at risk–say, your house. (For more on understanding what bankers really charge, check out “The True Cost Of Debt.”)
</p><p>
5. Incubators. A start-up incubator is a company, university or other organization that ponies up resources–laboratories, office space, consulting, cash, marketing–in exchange for equity in young companies when they are most vulnerable. (For more, check out “Getting The Most Out Of A Business Incubator.”)
</p><p>
6. Angel investors. For those looking for $25,000 to $250,000, angel networks can come in handy. Networking is critical here, and you need to find angels who understand your industry and share your passion. I’ve been on the selection committee of an angel group for years. To get started, go to www.AngelSoft.net and look up the group nearest you. (For more on raising money from angel investors, check out “Ten Ways To Attract Angel Funding” and “ Wooing And Choosing The Right Backer.”)
</p><p>
7. Venture capital. As a rule of thumb, don’t try this one in the earlier stages; in fact, don’t try it unless you need more than $1 million. VCs take their pound of flesh in equity and control. It’s not the most efficient route, either: Prepare to spend at least six months searching for and closing the deal. Start your search within your local network of entrepreneurs. After that, hit the National Venture Capital Association Web site.
</p><p>
8. Bartering. Exchanging goods or services as a substitute for cash can be a great way to run on a little wallet. Example: trading free office space by agreeing to be the property manager for the owner. This technique can also work with legal, accounting and engineering services. (For more, see “Nine Effective Bartering Techniques.”)
</p><p>
9. Form a partnership. A more established company may have a strategic interest in helping to develop your product—and be willing to advance funding to make it happen. I know several companies that develop customized social networks for large enterprises, with the expectation of using that funding and experience to compete in the consumer market some day. Licensing may not be as sexy as being a consumer brand, but it will cost you a lot less. (For more on navigating partnerships with large companies, check out “Top Tips: How Not To Bet Burned By The Big Boys.”)
</p><p>
10. Commit to a major customer. Some customers would be willing to cover your development costs in order to be able to buy your product before the rest of the world can. Their advantage: control over your production process (to make sure it meets their requirements) and the promise of dedicated support. Even large companies look to their best customers to fund new projects–this is the essence of good business development.
</p>
</body>
</html>
