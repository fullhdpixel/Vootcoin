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
	
	<!-- Bootstrap -->
	<link href="./lib/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<script src="./lib/js/bootstrap.min.js" type="text/javascript"></script>
	
	<!-- Fontawesome -->
	<link href="./css/font-awesome.css" rel="stylesheet" type="text/css">

	<!-- Animate -->
	<link href="./css/style.css" rel="stylesheet" type="text/css">
	
	<title></title>
	
	<!-- JS imports -->
	<script type="text/javascript" src="./js/fullPage.js"></script>
	<script type="text/javascript" src="./js/script.js"></script>
	<script type="text/javascript" src="./js/slimscroll.min.js"></script>
	<script type="text/javascript" src="./js/smoothscroll.min.js"></script>
	
	<script type="text/javascript">
		$(document).ready(function() {		
			$('#content').fullpage({
				'verticalCentered': true,
				'autoScrolling': true,
				'css3': true,
				'sectionsColor': ['#F0F2F4', '#fff', '#fff', '#fff'],
				'navigation': false,
				'loopBottom': true,
				'easing': 'easeInQuart',
				'sectionsColor': ['white', 'black', 'white', 'black', '#white'],
				'navigationPosition': 'left',
				'navigationTooltips': ['Home', 'Section1', 'Section2', 'Section3'],

				'afterLoad': function(anchorLink, index){
					if(index == 2){
						$('#iphone3, #iphone2, #iphone4').addClass('active');
					}
				},

				'onLeave': function(index, nextIndex, direction){
					if (index == 3 && direction == 'down'){
						$('.section').eq(index -1).removeClass('moveDown').addClass('moveUp');
					}
					else if(index == 3 && direction == 'up'){
						$('.section').eq(index -1).removeClass('moveUp').addClass('moveDown');
					}

					$('#staticImg').toggleClass('active', (index == 2 && direction == 'down' ) || (index == 4 && direction == 'up'));
					$('#staticImg').toggleClass('moveDown', index == 3 && direction == 'down');
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
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Exchanges<b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="https://bittrex.com/Market/?MarketName=BTC-VOOT" target="_blank">Bittrex</a></li>
					<li><a href="" target="_blank">Bluetrade</a></li>
					<li><a href="" target="_blank">Coins-e</a></li>
				</ul>
			</li>
		</ul>
	</div>
</nav>	

<div id="content">
	<section class="section" id="about">
	    <div class="slide" id="slide1" data-anchor="slide1">
			<div class="intro">
				<img src="./images/1.jpg" />
				<h1>Home</h1>
				<p>
					Main slide.
				</p>
			</div>
		</div>
	    <div class="slide" id="slide2" data-anchor="slide2">
			<img src="./images/2.jpg" />
			<h1>Slide 2</h1>
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
				<img src="./images/anon.png" />
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
				<h2>Downloads</h2>
				<div class="col-sm-6 col-md-3">
					<div class="caption text-center">
						<img src="./images/source.png" /img>
						<h3>Source</h3>
						<p>
							<a href="" class="btn btn-primary" role="button" target="_blank">Develop</a>
						</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="caption text-center">
						<img src="./images/windows.png" />
						<h3>Windows</h3>
						<p></p>
						<p>
							<a href="" class="btn btn-primary" role="button" target="_blank">Download</a>
						</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="caption text-center">
						<img src="./images/mac.png" />
						<h3>Mac</h3>
						<p>
							<a href="" class="btn btn-primary" role="button" target="_blank">Download</a>
						</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="caption text-center">
						<img src="./images/linux.png" />
						<h3>Voot mobile</h3>
						<p>
							<a href="" class="btn btn-primary" role="button" target="_blank">Download</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section moveDown" id="exchanges">
		<div class="intro">
			<div class="box">
				<h2>Exchanges</h2>
				<div class="col-sm-6 col-md-4">
					<div class="caption text-center">
						<img src="./images/source.png" />
						<h3>Bittrex</h3>
						<p>
							<a href="" class="btn btn-primary" role="button" target="_blank">Develop</a>
						</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="caption text-center">
						<img src="./images/windows.png" />
						<h3>Bluetrade</h3>
						<p></p>
						<p>
							<a href="" class="btn btn-primary" role="button" target="_blank">Download</a>
						</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="caption text-center">
						<img src="./images/mac.png" />
						<h3>Coins-e</h3>
						<p>
							<a href="" class="btn btn-primary" role="button" target="_blank">Download</a>
						</p>
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
	<section class="section" id="contact">
		<div class="intro">
			<div class="box">
				<h2>Contact us</h2>
				
				<div class="col-sm-6 col-md-4">
					<div class="caption text-center">
						<img src="./images/source.png" />
						<h3>Facebook</h3>
						<p>
							<img src="" />
						</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="caption text-center">
						<img src="./images/windows.png" />
						<h3>Twitter</h3>
						<p></p>
						<p>
							<img src="" />
						</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="caption text-center">
						<img src="" />
						<h3>Mail</h3>
						<p>
							<img scrc="" />
						</p>
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

<ul class="nav pull-right scroll-top">
    <li><a class="" href="#" title="Scroll to top"><i class="glyphicon glyphicon-chevron-up"></i></a></li>
</ul>

<script>
$('a').smoothScroll();
$('body').scrollSpy();

/* smooth scrolling for scroll to top */
$('.scroll-top').click(function() {
	$('body,html').animate({scrollTop:0},1000);
});
</script>

</body>
</html>