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
	
	<script type="text/javascript">
		$(document).ready(function() {		
			$('#content').fullpage({
				'verticalCentered': false,
				'css3': true,
				'sectionsColor': ['#F0F2F4', '#fff', '#fff', '#fff'],
				'navigation': true,
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
				<li id="active"><a href="#section0">Home</a></li>
				<li><a href="#section1">Section1</a></li>
				<li><a href="#section2">Section2</a></li>
				<li><a href="#section3">Section3</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Exchanges <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li>Page1</li>
						<li>Page2</li>
						<li>Page3</li>
						<li>Page4</li>
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

<script>
$('body').slimScroll({
	position: 'right',
	height: '1050px',
	railVisible: true,
	alwaysVisible: true,
});

	$('a').smoothscroll();
</script>

</body>
</html>