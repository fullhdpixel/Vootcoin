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
	
	<script type="text/javascript">
		$(document).ready(function() {
			$('#content').fullpage({
				'verticalCentered': false,
				'css3': true,
				'sectionsColor': ['#F0F2F4', '#fff', '#fff', '#fff'],
				'navigation': true,
				'navigationPosition': 'left',
				'navigationTooltips': ['Home', 'Section2', 'Section3', 'Section4'],

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
<body>

<nav class="navbar-default navbar-static-top navbar-trans" role="navigation">
	 <div class="container-fluid">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		</div>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav nav-justified">
				<li id="active"><a href="./index.html"><i class="fa fa-home fa-fw"></i> Home</a></li>
				<li><a href="./community.html"><i class="fa fa-group fa-fw"></i> Community</a></li>
				<li><a href="./text.html">VeriSMS</a></li>
				<li><a href="./verifund.html">VeriFund</a></li>
				<li><a href="./interest.html">Interest</a></li>
				<li><a href="./paperwallet.html">Paper Wallet</a></li>
				<li><a href="./verisend.html">VeriSend</a></li>
				<li><a href="./veribit.html">VeriBit</a></li>
				<li><a href="./incubator.html">Incubator</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Exchanges <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="http://www.bitonyx.com/market/trade/VRC-BTC" target="_blank">Bitonyx</a></li>
						<li><a href="https://www.bittrex.com/Market/?MarketName=BTC-VRC" target="_blank">Bittrex</a></li>
						<li><a href="https://bter.com/trade/vrc_btc" target="_blank">Bter</a></li>
						<li><a href="https://coinnext.com/trade/VRC/BTC" target="_blank">Coinnext</a></li>
						<li><a href="https://www.cryptsy.com/markets/view/209" target="_blank">Cryptsy</a></li>
						<li><a href="https://c-cex.com/?p=vrc-btc&amp;rf=08CAB0B01CBED626" target="_blank">C-cex </a></li>
						<li><a href="https://www.icurrex.com/market/18" target="_blank">Icurrex</a></li>
						<li><a href="https://www.mintpal.com/market/VRC/BTC" target="_blank">Mintpal</a></li>
						<li><a href="https://poloniex.com/exchange/btc_vrc" target="_blank">Poloniex</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>	

<!-- Intro -->	  
<div id="intro">

</div>

<div id="content">
	<div id="staticImg">
		<div class="imgsContainer">
			<img src="http://placehold.it/350x670" alt="iphone" id="iphone-green" />
		</div>
	</div>

	<div class="section" id="section0">
		<img src="http://placehold.it/1920x1080" alt="iphone" />
	</div>
	<div class="section" id="section1">
		<div class="wrap">
			<div class="imgsContainer">
				<img src="http://placehold.it/350x670" alt="iphone" id="iphone2" />
				<img src="http://placehold.it/350x670" alt="iphone" id="iphone3" />
				<img src="http://placehold.it/350x670" alt="iphone" id="iphone4" />
			</div>

			<div class="box">
				<h2></h2>
			</div>
		</div>
	</div>

	<div class="section moveDown" id="section2">
		<div class="wrap">
			<div class="imgsContainer">
				<img src="http://placehold.it/350x670" alt="iphone" id="iphone-yellow" />
				<img src="http://placehold.it/350x670" alt="iphone" id="iphone-red" />
				<img src="http://placehold.it/670x350" alt="iphone" id="iphone-blue" />
			</div>

			<div class="box">
				<h2></h2>
			</div>
		</div>
	</div>
	<div class="section moveDown" id="section3">
		<div class="wrap">
			<div class="box">
				<h2></h2>
			</div>
		</div>
		<div class="imgsContainer">
			<img src="http://placehold.it/350x670" alt="iphone" id="iphone-two" />
		</div>
	</div>
</div>

<div id="footer">

</div>



</body>
</html>