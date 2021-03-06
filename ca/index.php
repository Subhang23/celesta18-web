<!--A Design by W3layouts
   Author: W3layout
   Author URL: http://w3layouts.com
   License: Creative Commons Attribution 3.0 Unported
   License URL: http://creativecommons.org/licenses/by/3.0/
   -->
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Campus Ambassador | Celesta</title>
	<!-- Meta Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="../images/CLST_logo.ico">
	<meta charset="utf-8">
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- // Meta Tags -->
	<!--booststrap-->
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
	<!--//booststrap end-->
	<!-- font-awesome icons -->
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<!-- //font-awesome icons -->
	<link href="css/owl.carousel.css" rel="stylesheet">
	<!--stylesheets-->
	<link href="css/style.css" rel='stylesheet' type='text/css' media="all">
	<!--//stylesheets-->
	<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Nova Flat' rel='stylesheet'>
	<!-- jquery -->
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="shortcut icon" href="images/logo_bbb.svg">
	<script type="text/javascript">

			var TxtRotate = function(el, toRotate, period) {
			this.toRotate = toRotate;
			this.el = el;
			this.loopNum = 0;
			this.period = parseInt(period, 10) || 2000;
			this.txt = '';
			this.tick();
			this.isDeleting = false;
			};

			TxtRotate.prototype.tick = function() {
			var i = this.loopNum % this.toRotate.length;
			var fullTxt = this.toRotate[i];

			if (this.isDeleting) {
				this.txt = fullTxt.substring(0, this.txt.length - 1);
			} else {
				this.txt = fullTxt.substring(0, this.txt.length + 1);
			}

			this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

			var that = this;
			var delta = 300 - Math.random() * 100;

			if (this.isDeleting) { delta /= 2; }

			if (!this.isDeleting && this.txt === fullTxt) {
				delta = this.period;
				this.isDeleting = true;
			} else if (this.isDeleting && this.txt === '') {
				this.isDeleting = false;
				this.loopNum++;
				delta = 500;
			}

			setTimeout(function() {
				that.tick();
			}, delta);
			};

			window.onload = function() {
			var elements = document.getElementsByClassName('txt-rotate');
			for (var i=0; i<elements.length; i++) {
				var toRotate = elements[i].getAttribute('data-rotate');
				var period = elements[i].getAttribute('data-period');
				if (toRotate) {
				new TxtRotate(elements[i], JSON.parse(toRotate), period);
				}
			}
			// INJECT CSS
			var css = document.createElement("style");
			css.type = "text/css";
			css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
			document.body.appendChild(css);
			};

	</script>
	

  
<link rel="stylesheet" href="css/style2.css">
		
</head>

<body>
	<!-- banner -->
	<header>
		<section class="main_section_agile">
			<div class="agileits_w3layouts_banner_nav">
				<div class="header-bar">
					<div class="container">
					<nav class="navbar navbar-expand-lg navbar-light fixed-top">
						
						<!-- <div class="container-fluid navbar-container">
							<img class="navbar-brand" src="../images/logo_bbb.svg" alt="logo" id="logo">
						</div> -->
						<div>
							
							<!-- <h1><span id="ca-header">CAMPUS AMBASSADOR</span></h1> -->

							<link href="https://fonts.googleapis.com/css?family=Raleway:200,100,400" rel="stylesheet" type="text/css" />
							<h1><span id="ca-header">CA&nbsp;<span
								class="txt-rotate"
								data-period="1000"
								data-rotate='[ "CELESTA", "REMASTERED"]'></span>
							</span></h1>
						</div>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						
						<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent" >
							<ul class="navbar-nav">
								<li class="nav-item">
									<a href="register.html" class="nav-link">Register</a>
								</li>
							</ul>
							<ul class="navbar-nav">
								<li class="nav-item">
									<a href="judging.html" class="nav-link">Judging Criteria</a>
								</li>
							</ul>
							<ul class="navbar-nav">
								<li class="nav-item">
									<a href="#bottom" class="nav-link">Contact Us</a>
								</li>
							</ul>
							<ul class="navbar-nav">
								<li class="nav-item">
									<a href="../index.php" class="nav-link">Celesta Home</a>
								</li>
							</ul>
						</div>
						
					</nav>				
					</div>
				</div>
			 <!-- //Navigation -->
			</div>
		</section>
	</header>
	<section class="banner_top">
		<div class="slider">
		
			<div class="wrapper">
			
				<div>
					<!-- Slideshow 3 -->
					<ul class="rslides" id="slider">
						<li>
						<svg class="intro" viewbox="0 0 200 86">
						<text text-anchor="start" x="10" y="30" class="text text-stroke" clip-path="url(#text1)">CELESTA</text>
						<text text-anchor="start" x="10" y="50" class="text text-stroke" clip-path="url(#text2)">CAMPUS</text>
						<text text-anchor="start" x="10" y="70" class="text text-stroke" clip-path="url(#text3)">AMBASSADOR.</text>
						<text text-anchor="start" x="10" y="30" class="text text-stroke text-stroke-2" clip-path="url(#text1)">CELESTA</text>
						<text text-anchor="start" x="10" y="50" class="text text-stroke text-stroke-2" clip-path="url(#text2)">CAMPUS</text>
						<text text-anchor="start" x="10" y="70" class="text text-stroke text-stroke-2" clip-path="url(#text3)">AMBASSADOR.</text>
						<defs>
							<clipPath id="text1">
							<text text-anchor="start" x="10" y="30" class="text">CELESTA</text>
							</clipPath>
							<clipPath id="text2">
							<text text-anchor="start" x="10" y="50" class="text">CAMPUS</text>
							</clipPath>
							<clipPath id="text3">
							<text text-anchor="start" x="10" y="70" class="text">AMBASSADOR.</text>
							</clipPath>
						</defs>
						</svg>
						<div>
						
						</div>
						<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
							<script  src="js/index.js"></script>
						</li>
					</ul>
					<!-- Slideshow 3 Pager -->
					<!-- <ul id="slider3-pager">
						<li>
							<a href="#"><img src="images/bg_img.jpg" data-selector="img" id="backimg" alt=""></a>
						</li>

					</ul> -->
				</div>
			</div>
		</div>
	</section>
	<!-- //banner -->
	<!-- /services -->
	<section class="w3-services">
		<div class="container">
			<div class="wthree_head_section">
				<h2 class="w3l_header">What is Celesta?</h2>
				<p>Celesta is the annual Techno-Management Fest of IIT Patna. It's objective is to promote technical and managerial enthusiasm amongst the young and bright minds of our nation and to provide a platform to transform their innovative ideas into a meaningful reality.</p>
			</div>
			<div class="row w3-services-grids">
				<div class="col-lg-12 w3-services-right-grid">
					<div class="row w3-icon-grid-gap1">
					<div class="col-md-6 w3-icon-grid1">
							<i class="fas fa-book"></i>
							<div class="Supp">
								<h3>Two whole days of FUN</h3>
								<!-- TODO Add text -->
								<!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit..</p> -->
							</div>
						</div>
						<div class="col-md-6 w3-icon-grid1">
							<i class="fas fa-paint-brush"></i>
							<div class="Supp">
								<h3>Exciting Prizes and Goodies</h3>
								<!-- TODO Add text -->
								<!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit..</p> -->
							</div>
						</div>
						
					</div>
					<div class="row w3-icon-grid-gap1">
						<div class="col-md-6 w3-icon-grid1">
							<i class="fas fa-graduation-cap"></i>
							<div class="Supp">
								<h3>Informational Workshops</h3>
								<!-- TODO Add text -->
								<!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit..</p> -->
							</div>
						</div>
						<div class="col-md-6 w3-icon-grid1">
							<i class="fas fa-calendar"></i>
							<div class="Supp">
								<!-- TODO Add text -->
								<h3>Interesting Events</h3>
								<!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit..</p> -->
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- //services -->
	<!-- what we do -->
	<section class="what_you">
		<div class="container">
			<div class="wthree_head_section">
				<h4 class="w3l_header">About Campus Ambassador Program</h3>
				<!-- TODO Add text -->
				<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p> -->
			</div>

			<div class="row about-info-grids">
				<div class="col-md-4 offset-md-2 about-info about-info1">
					<i class="far fa-gem"></i>
					<h4>WHAT IS CAMPUS AMBASSADOR?</h4>
					<div class="h4-underline"></div>
					<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p> -->
				</div>
				<div class="col-md-4 about-info about-info2">
					<!-- <i class="fas fa-book"></i>
					<h4>Certified Tutors</h4> -->
					<div class="h4-underline"></div>
					<p>The promulgation of the fest is assigned to the campus ambassadors. They serve as a liaison between their college and our campus i.e, as a nodal point for any kind of communication or promotion. This is a deeply rewarding opportunity both on a personal level and also in terms of career prospects as, being a campus ambassador helps in pesonality development besides, enhancing your managerial skills.</p>
				</div>
			</div>
			<div class="bord"></div><br>
			<h3 class="w3l_header">What You Get</h3><br>
			<div class="row about-info-grids">
				<div class="col-md-4 about-info about-info1">
					<i class="fas fa-university"></i>
					<h4>Certificate</h4>
					<div class="h4-underline"></div>
					<p>Official certificate from Celesta, IIT Patna.</p>
				</div>
				<div class="col-md-4 about-info about-info2">
					<i class="fas fa-graduation-cap"></i>
					<h4>Workshops</h4>
					<div class="h4-underline"></div>
					<p>Free passes to renowned technical workshops.</p>
				</div>
				<div class="col-md-4 about-info about-info3">
					<i class="fas fa-folder"></i>
					<h4>Goodies</h4>
					<div class="h4-underline"></div>
					<p>Chance to win Celesta T-shirt, goodies and other perks.</p>
				</div>
			</div>
		</div>
	</section>
	<div class="container">
			<div class="wthree_head_section highlighter">
				<h3 class="w3l_header">Your Work</h3>
				<p>Represent CELESTA in your college and encourage people to be a part of this Techno-Management fest.</p>
			</div>

	<!-- //what we do -->
	<!-- features -->
	<!-- <section class="features">
		<div class="container">
			<div class="wthree_head_section">
				<h3 class="w3l_header">Statistics</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
		</div>
			<div class="row about-main">
				<div class="col-md-10 offset-md-1 justify-content-center">
					stats
					<div class="">
						<div class="row stats_inner">
							<div class="col-md-3 col-sm-6 col-xs-6 stat-grids">
								<p class="counter-agileits-w3layouts">76</p>
								<div class="stats-text-wthree">
									<h3>CA's Registered</h3>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-6 stat-grids">
								<p class="counter-agileits-w3layouts">45</p>
								<div class="stats-text-wthree">
									<h3>Featured Programs</h3>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-6 stat-grids">
								<p class="counter-agileits-w3layouts">740</p>
								<div class="stats-text-wthree">
									<h3>Points Earned</h3>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-6 stat-grids">
								<p class="counter-agileits-w3layouts">598</p>
								<div class="stats-text-wthree">
									<h3>Public Reach</h3>
								</div>
							</div>

						</div>
					</div>
					//stats

				</div>
				<div class="col-md-5 about-left">
					<img src="images/g1.jpg" class="img-fluid" alt="">
				</div>
			</div>
		</div>
	</section> -->
	<section class="typo">
		<div class="container justify-content-center">
			<div class="bs-docs-example">
				<h1 class="w3l_header">
					CA Leaderboard
				</h1>
				<table class="table table-striped col-md-8">
					<colgroup>
						<col align="right">
						<col align="right">
						<col align="right">
					</colgroup>
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Celesta ID</th>
							<th>Points</th>
						</tr>
					</thead>
					<tbody>
					<?php
					include '../apiLe/dbConfig.php';
					function SQLInjFilter(&$unfilteredString){
						$unfilteredString = mb_convert_encoding($unfilteredString, 'UTF-8', 'UTF-8');
						$unfilteredString = htmlentities($unfilteredString, ENT_QUOTES, 'UTF-8');
						// return $unfilteredString;
					}
					$sql = "SELECT name,CA.regID AS ID,(SELECT count(*) FROM users P2 WHERE P2.caID = CA.regID AND P2.isCA=0)*20 + (SELECT COALESCE(SUM(score),0) AS score FROM cascore P3 WHERE P3.pID = CA.regID) + 20 AS Score FROM users CA WHERE CA.isCA<>0 AND CA.name NOT LIKE 'test%' AND CA.confID IS NOT NULL ORDER BY Score DESC,name LIMIT 15";
					if($link =mysqli_connect($servername, $username, $password, $dbname)){
						$result = mysqli_query($link,$sql);
					if(!$result || mysqli_num_rows($result)<1){
						$error="Error fetching result.";
							errorLog(mysqli_errno($link)." ".mysqli_error($link)." ".$error);
						echo "<tr><td>-</td><td>-</td><td>-</td><td>-</td></tr>";
					}
					else{
						$index = 1;
						while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
						echo "<tr><td>".$index."</td><td>".$row['name']."</td><td>CLST".$row['ID']."</td><td>".$row['Score']."</td></tr>";
							$index++;
						}
					}
					}else{
						echo "Error connecting to database.";
					}

	    			?>
					</tbody>
				</table>
			</div>
		</div>
	</section>
				</div>
	<!-- //features -->

	<!-- Footer -->
	<footer>
		<section class="copyright-wthree">
			<div class="container">
				<div class="row">
					<div class="col-sm-4 w3ls_footer_grid_left">
						<h5 class="sub-head"><a name = "bottom">Reach to us at</a></h5>
						<p class="coloring-text-gray">	Indian Institute of Technology Patna, Bihta
							<span>Patna-801106 (Bihar)</span>
						</p>
					</div>
					<div class="col-sm-4 w3ls_footer_grid_left">
						<h5 class="sub-head">Ring us at</h5>
						<p>
							<span class="coloring-text-gray">+91 9955532583</span>
						</p>
					</div>
					<div class="col-sm-4 w3ls_footer_grid_left">
						<h5 class="sub-head">Write to us at</h5>
						<p>
							<a href="mailto:mpr@celesta.org.in">mpr@celesta.org.in</a>
						</p>
					</div>
				</div>
				<div class="w3l-social">
					<ul>
						<li>
							<a href="https://www.facebook.com/CelestaIITP/" class="fab fa-facebook"></a>
						</li>
						<li>
							<a href="https://twitter.com/celesta_iitp" class="fab fa-twitter"></a>
						</li>
						<li>
							<a href="https://www.instagram.com/celestaiitp_official/" class="fab fa-instagram"></a>
						</li>
						<li>
							<a href="https://www.linkedin.com/in/celesta-iit-patna-3722b6166" class="fab fa-linkedin-in"></a>
						</li>
					</ul>
				</div>
			</div>
		</section>
	</footer>
	<!-- //Footer -->

	<!--js working-->
	<script src="js/jquery.min.js"></script>
	<!--//js working-->
	<!-- requried-jsfiles-for owl -->
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function () {
			$("#owl-demo2").owlCarousel({
				items: 1,
				lazyLoad: false,
				autoPlay: true,
				navigation: false,
				navigationText: false,
				pagination: true,
			});
		});
	</script>
	<!-- //requried-jsfiles-for owl -->


	<!-- Slider script -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			$("#slider").responsiveSlides({
				auto: true,
				nav: true,
				manualControls: '#slider3-pager',
			});
		});
	</script>
	<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
	<script>
		$('.counter-agileits-w3layouts').countUp();
	</script>
	<!-- //stats -->

	<!-- smooth scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

		});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- //smooth scrolling -->
	<!-- scrolling script -->
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
			});
			$("a[href='#bottom']").click(function() {
				$("html, body").animate({ scrollTop: $(document).height() }, "slow");
				return false;
			});​
		});
	</script>
	<!-- //scrolling script -->

	<!--bootstrap working-->
	<script src="js/bootstrap.min.js"></script>
	<?php include 'gAnalytics.php'; ?>
</body>

</html>
