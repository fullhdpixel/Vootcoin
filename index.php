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
				'css3': true,
				'sectionsColor': ['#F0F2F4', '#fff', '#fff', '#fff'],
				'navigation': false,
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
<body data-spy="scroll" data-offset="0" data-target="#myScrollspy">

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

<!-- Intro -->	  
<div id="intro">

</div>

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
				<h3><small>Everything a VootCoin user needs to meet his/her core security objectives more effectively.</small></h3>
			</div>
		</div>
		<div class="slide" id="slide1" data-anchor="slide1">
			<div class="">
				<div class="intro">
					<h2>Decentralized Anonymity</h2>
					<p>
						Crypto-currencies are based on a blockchain and non-anonymity; transactions are always signed by the coin owner and thus the transaction chain includes information of the coin origins. There have been suggestions to hide this information
						and one already supported but not implemented is CoinJoin based transaction grouping. Nitesend is a decentralized implementation of this proposal.
					</p>
				</div>
			</div>

			<div class="slide" id="slide2" data-anchor="slide2">
				<h1>Slide 2</h1>
				<!--
				<div class="imgsContainer">
					<img src="http://placehold.it/350x670" alt="iphone" id="iphone2" />
					<img src="http://placehold.it/350x670" alt="iphone" id="iphone3" />
					<img src="http://placehold.it/350x670" alt="iphone" id="iphone4" />
				</div>
				-->
			</div>
			<div class="slide" id="slide3" data-anchor="slide3">
				<h1>Slide 3</h1>
			</div>
			<div class="slide" id="slide4" data-anchor="slide4">
				<h1>Slide 4</h1>
			</div>
			<div class="slide" id="slide5" data-anchor="slide5">
				<h1>Slide 5</h1>
			</div>
		</div>
	</section>
	<section class="section moveDown" id="downloads">
		<div class="wrap">
			<!--
			<div class="imgsContainer">
				<img src="http://placehold.it/350x670" alt="iphone" id="iphone-yellow" />
				<img src="http://placehold.it/350x670" alt="iphone" id="iphone-red" />
				<img src="http://placehold.it/670x350" alt="iphone" id="iphone-blue" />
			</div>
			-->
			<div class="box">
				<h2></h2>
			</div>
		</div>
	</section>
	<section class="section moveDown" id="exchanges">
		<div class="wrap">
			<div class="box">
				<h2></h2>
			</div>
		</div>
		<!--
		<div class="imgsContainer">
			<img src="http://placehold.it/350x670" alt="iphone" id="iphone-two" />
		</div>
		-->
	</section>
	<section class="section" id="contact">
		<div class="wrap">
			<div class="box">
				<h2></h2>
			</div>
		</div>
		<!--
		<div class="imgsContainer">
			<img src="http://placehold.it/350x670" alt="iphone" id="iphone-two" />
		</div>
		-->
	</section>
</div>

<div id="footer">

</div>

<script>
/*
$('body').slimScroll({
	position: 'right',
	height: '1050px',
	railVisible: true,
	alwaysVisible: true,
});

$('a').smoothscroll();
*/
</script>

</body>
</html>