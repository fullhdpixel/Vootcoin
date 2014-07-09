<!DOCTYPE html>
<html>
<head>

	<!-- 
		Created by @fullhdpixel (Twitter) 
		W3C valid
	-->

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="author" content="Fullhdpixel" />
	<meta name="description" content="" />
	<meta name="keywords"  content="" />
	<meta name="Resource-type" content="Document" />
	
	<!-- Jquery -->
	<script src="./lib/js/jquery-2.1.1.min.js"></script>
	<script src="./lib/js/jquery-ui-1.10.4.min.js"></script>

	<!-- Main document -->
	<link href="./css/style.css" rel="stylesheet" type="text/css">
	<script src="./js/index.js"></script>
	
	<link rel="stylesheet" type="text/css" href="./css/fullPage.css" />
	<link rel="stylesheet" type="text/css" href="./css/general.css" />
	<link rel="stylesheet" type="text/css" href="./css/animate.css" />
	
	<!-- Bootstrap -->
	<link href="./lib/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<script src="./lib/js/bootstrap.min.js" type="text/javascript"></script>
	
	<!-- Fontawesome -->
	<link href="./css/font-awesome.css" rel="stylesheet" type="text/css">

	<!-- Animate -->
	<link href="./css/style.css" rel="stylesheet" type="text/css">
	
	<title>Vootcoin | Decentralized and Anonymous</title>
	
	<!-- JS imports -->
	<script type="text/javascript" src="./js/fullPage.js"></script>
	<script type="text/javascript" src="./js/script.js"></script>
	<script type="text/javascript" src="./js/slimscroll.min.js"></script>
	<script type="text/javascript" src="./js/smoothscroll.min.js"></script>
	
	<script type="text/javascript">
		$(document).ready(function() {
			/* Downloads */
			$('#dwnld').hide();
			$('#source, #win, #app, #mobile').hide();
		
			/* Exchanges */
			$('#exchange').hide();
			$('#exchange1, #exchange2, #exchange3, #exchange4').hide();
		
			/* Contact */
			$('#signup').hide();
			$('#contact h2, #contact h3').hide();
			$('#facebook, #twitter, #mail, #reddit').hide();
			
			$('#content').fullpage({
				'verticalCentered': true,
				'autoScrolling': false,
				'css3': true,
				'sectionsColor': ['#F0F2F4', '#fff', '#fff', '#fff'],
				'navigation': false,
				'loopBottom': true,
				'loopTop': true,
				'easing': 'easeInQuart',
				'sectionsColor': ['', '#2672EC', '#BF1E4B', '#2672EC', '#BF1E4B'],
				'navigationPosition': 'left',
				'navigationTooltips': ['Home', 'Section1', 'Section2', 'Section3'],

				'afterLoad': function(anchorLink, index){					
					/* Downloads */
					if(index == 3) {
						setTimeout(function() {
							$('#src, #windows, #mac, #linux').addClass('flip');
							$('#dwnld').fadeIn("slow", function() {});
							$('#exchange').slideDown(450, function() {});							
						}, 500);
						
						setTimeout(function() {
							$('#source, #win, #app, #mobile').fadeIn("slow", function() {});
						}, 550);
					}
					
					/* Exchanges */
					if(index == 4) {
						setTimeout(function() {
							$('#exchange').slideDown(450, function() {});
						}, 500);
						setTimeout(function() {
							$('#exchange1, #exchange2, #exchange3, #exchange4').fadeIn("slow", function() {});
						}, 550);
					}
					
					/* Contact */
					if(index == 5) {
						setTimeout(function() {
							$('#facebook, #twitter, #mail, #reddit').show();
							$('#contact h2, #contact h3').slideDown(450, function() {});
							$('#facebook, #twitter, #mail, #reddit').addClass('flip');
						}, 500);
						setTimeout(function() {
							$('#signup').fadeIn("slow", function() {});
						}, 550);
					}
				},

				'onLeave': function(index, nextIndex, direction){
					if (index == 3){
						setTimeout(function() {
							$('#source, #windows, #mac, #linux').removeClass('flip');
						}, 500);
					} else if (index == 4) {
						$('#exchange').fadeOut();
						$('#exchange1, #exchange2, #exchange3, #exchange4').fadeOut();						
					} else if(index == 5){
						$('#facebook, #twitter, #mail, #reddit').fadeOut();
						$('#contact h2, #contact h3').fadeOut();
						$('#facebook, #twitter, #mail, #reddit').removeClass('flip');
						$('#signup').fadeOut();
					}
				}
			});
		});
	</script>
</head>
<body data-spy="scroll" data-offset="0">

<nav class="navbar-default navbar-static-top navbar-trans" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>
	<div class="collapse navbar-collapse" id="myScrollspy">
		<ul class="nav navbar-nav nav-justified">
			<li id="active"><a href="#about">About</a></li>
			<li><a href="#features">Features</a></li>
			<li><a href="#downloads">Downloads</a></li>
			<li><a href="#exchanges">Exchanges</a></li>
			<li><a href="#contact">Contact</a></li>
		</ul>
	</div>
</nav>

<div id="content">
	<section class="homeslider section" id="about">
	    <div class="slide" id="slide1" data-anchor="slide1">
			<div class="intro">
				<img src="./images/1.jpg" alt="background1" />
				<h1>Specifications</h1>
				<p>
					PoW Algorithm: X11<br>
					PoW + PoS.<br>
					60 second block time<br>
					30 confirmations for blocks to mature.<br>
					Re-target difficulty each block.<br>
					PoW Total Blocks: 10080 PoW blocks.<br>
					PoW Payout: 10000 per block.<br>
					PoW Max Coins: 68,000,000<br>
					PoS Interest: 10%<br>
				</p>
			</div>
		</div>
	    <div class="slide" id="slide2" data-anchor="slide2">
			<img src="./images/2.jpg" />
			<h1>Decentralized Privacy Powered by NiteSend.</h1>
			<p>
				VootCoin powered by NiteSend provides high level anonymous layers to the transactions on the VootCoin network. With your privacy in mind, we have created a decentralized way of using digital currency.
			</p>
		</div>
		<div class="slide" id="slide3" data-anchor="slide3">
			<img src="./images/3.jpg" />
			<h1>Slide 3</h1>
		</div>
		<div class="slide" id="slide4" data-anchor="slide4">
			<img src="./images/4.jpg" />
			<h1>Slide 4</h1>
		</div>
	</section>
	<section class="section" id="features">
		<div class="container">
			<div class="row">
				<h2>Features</h2>
				<h3><small>Everything a VootCoin user needs to meet core security objectives more effectively.</small></h3>
			</div>
		</div>
		<div class="slide" id="slide1" data-anchor="slide1">
			<div class="container">
				<h2>Decentralized Anonymity</h2>
				<img class="bounceUp" src="./images/anon.png" />
				<p>
					Crypto-currencies are based on a blockchain and non-anonymity; transactions are always signed by the coin owner and thus the transaction chain includes information of the coin origins. There have been suggestions to hide this information
					and one already supported but not implemented is CoinJoin based transaction grouping. Nitesend is a decentralized implementation of this proposal.
				</p>
			</div>
		</div>
		<div class="slide" id="slide2" data-anchor="slide2">
			<div class="container">
				<h2>VootMarket</h2>
				<img src="./images./vootmarket.png" alt="VootMarket" />
				<p>
					VootMarket will be a fully operational decentralized marketplace using anonymous P2P payments in VootCoin. The marketplace will be a place to buy and sell goods from all over the world in a safe, open-source environment with an integrated escrow system based on a Web of Trust (WoT).
				</p>
			</div>
		</div>
		<div class="slide" id="slide3" data-anchor="slide3">
			<div class="container">
				<h2>VootPay</h2>
				<img src="./images/vootpay.png" alt="VootPay" />
				<p>
					VootPay is a Point of Sale system where merchants can sell items in return for VootCoin. Merchants will have a VootPay account which is paired with an exchange to place an automatic VootCoin sell order in exchange for Bitcoin. Merchants will be a major part of the Voot ecosystem.
				</p>
			</div>
		</div>
		<div class="slide" id="slide4" data-anchor="slide4">
			<div class="container">
				<h2>Secure Network</h2>
				<img src="./images/secure.png" alt="Secure Network" />
				<p>
					With TOR backbone integration, your Internet connection to the VootCoin network will be fully secured on the TOR platform with one easy-to-use client-based security, proxy and VPN services for users.
				</p>
			</div>
		</div>
	</section>
	<section class="section moveDown" id="downloads">
		<div class="intro">
			<div class="box">
				<h2 id="dwnld">Downloads</h2>
				<div class="col-sm-6 col-md-3">
					<div class="account-wall text-center" id="source">
						<img id="src" src="./images/source.png" /img>
						<h3>Source</h3>
						<p>
							<a href="https://github.com/MsCollec/vootcoin" class="btn btn-primary" role="button" target="_blank">Contribute</a>
						</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="account-wall text-center" id="win">
						<img id="windows" src="./images/windows2.png" />
						<h3>Windows</h3>
						<p></p>
						<p>
							<a href="https://mega.co.nz/#!QkcHEJYS!s9e03O7FntPcASdDE6I3OlsDcvC_4ZzGyzB-CL5i6Ms" class="btn btn-primary" role="button" target="_blank">Download</a>
						</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="account-wall text-center" id="app">
						<img id="mac" src="./images/apple.png" />
						<h3>Mac</h3>
						<p>
							<a href="https://mega.co.nz/#!JYpGUCJT!2fVoFWmY3jqQpc1ybVmcQCCFkHNv7TRPpBxrDbSrxfQ" class="btn btn-primary" role="button" target="_blank">Download</a>
						</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="account-wall text-center" id="mobile">
						<img id="" src="./images/.png" />
						<h3>Voot mobile</h3>
						<p>
							<a href="http://coinremote.com/sms" class="btn btn-primary" role="button" target="_blank">Learn more</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section" id="exchanges">
		<h2 id="exchange">Exchanges</h2>
		<div class="row row-centered">
			<div class="col-sm-6 col-md-3 col-centered" id="exchange1">
				<div class="account-wall">
					<img src="http://placehold.it/300x300" alt="...">
					<div class="caption">
						<h3>Exchange 1</h3>
					<p>
						<a href="#" class="btn btn-primary" role="button">Visit now</a>
					</p>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3 col-centered" id="exchange2">
				<div class="account-wall">
					<img src="http://placehold.it/300x300" alt="...">
					<div class="caption">
						<h3>Exchange 2</h3>
					<p>
						<a href="#" class="btn btn-primary" role="button">Visit now</a>
					</p>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3 col-centered" id="exchange3">
				<div class="account-wall">
					<img src="http://placehold.it/300x300" alt="...">
					<div class="caption">
						<h3>Exchange 3</h3>
					<p>
						<a href="#" class="btn btn-primary" role="button">Visit now</a>
					</p>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3 col-centered" id="exchange4">
				<div class="account-wall">
					<img src="http://placehold.it/300x300" alt="...">
					<div class="caption">
						<h3>Exchange 4</h3>
					<p>
						<a href="#" class="btn btn-primary" role="button">Visit now</a>
					</p>
					</div>
				</div>
			</div>
		</div>
	</section>
		<!--
		<div class="imgsContainer">
			<img src="http://placehold.it/350x670" alt="iphone" id="iphone-two" />
		</div>
		-->
	</section>
	<section class="section" id="contact">
		<div class="intro">
			<div class="box">
				<h2>Contact us</h2>
				
				<div class="col-sm-6 col-md-3">
					<div class="caption text-center">
						<h3>Facebook</h3>
						<p>
							<img id="facebook" src="./images/facebook.png" />
						</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="caption text-center">
						<h3>Twitter</h3>
						<p>
							<img id="twitter" src="./images/twitter.png" />
						</p>
						<!--
						<div id="twitter">
							<a class="twitter-timeline" href="https://twitter.com/search?q=%23vootcoin+%23vootcloud+%23vootmarket" data-widget-id="486872268488732675">Tweets about "#vootcoin #vootcloud #vootmarket"</a>
							<script>
							!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
							</script>
						</div>
						-->
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="caption text-center">
						<h3>Mail</h3>
						<p>
							<img id="mail" src="./images/mail.png" />
						</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="caption text-center">
						<h3>Reddit</h3>
						<p>
							<img id="reddit" src="./images/reddit.png" />
						</p>
						<!--
						<div id="reddit">
							<script src="http://www.reddit.com/r/vootcoin.embed?limit=5" type="text/javascript"></script>
						</div>
						-->
					</div>
				</div>
				<div class="row" id="signup">
					<div class="col-sm-2 col-md-4">
					</div>
					<div class="col-sm-8 col-md-4">
						<div class="account-wall">
							<form class="form-signin">
								<input type="email" class="form-control" placeholder="Email" required autofocus>
								<hr>
								<button class="btn btn-lg btn-primary btn-block" type="submit">
									Sign up
								</button>
							</form>
						</div>
					</div>
					<div class="col-sm-2 col-md-4">
					</div>
				</div>
			</div>
		</div>
		<!--
		<div class="imgsContainer">
			<img src="http://placehold.it/350x670" alt="iphone" id="iphone-two" />
		</div>
		-->
	</section>
</div>

<script>
$('a').smoothScroll();
$('body').scrollSpy();
</script>

</body>
</html>