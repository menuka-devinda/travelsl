<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
   <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="keywords" content="Sailor - Yacht Charter Booking HTML Template" />
	<meta name="description" content="Sailor - Yacht Charter Booking HTML Template" /> 
	<meta name="author" content="themeenergy.com">
	
	<title>Sailor - Home</title>
	
	<link rel="stylesheet" href="<?php echo base_url();?>css/style.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>css/fonts.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>css/lightSlider.min.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>css/animate.css" />

	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700|Raleway:400,500,600,700&amp;subset=latin,greek,cyrillic,vietnamese' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="images/favicon.ico" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- box-navy: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="home">
	<!-- Preloader -->
	<div class="preloader">
		<div>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!-- //Preloader -->
	
	<!-- Header -->
	<header class="header" role="banner">
		<div class="wrap">
			<!-- Logo -->
			<a href="<?php echo base_url();?>" title="Sailor" class="logo"><span class="icojam_anchor"></span> Travel Now Sri Lanka</a>
			<!-- //Logo -->
			
			<!-- Primary menu -->
			<nav class="main-nav" role="navigation">
				<ul class="jetmenu" id="jetmenu">
					<li><a href="javascript:void(0)" title="Book now" class="search-trigger">Book now</a></li>
			<!-- 		<li><a href="charters.html" title="Yacht Charter">Yacht Charter</a>
						<div class="megamenu full-width">
							<div class="wrap">
								<div class="row">
									<div class="col one-fourth">
										<a href="charters.html" title="Motor yachts">
											<img src="http://placehold.it/800x600" alt="" />
											<span>Motor yachts</span>
										</a>
									</div>
									
									<div class="col one-fourth">
										<a href="charters.html" title="Sailing yachts">
											<img src="http://placehold.it/800x600" alt="" />
											<span>Sailing yachts</span>
										</a>
									</div>
									
									<div class="col one-fourth">
										<a href="destinations.html" title="Destinations">
											<img src="http://placehold.it/800x600" alt="" />
											<span>Destinations</span>
										</a>
									</div>
									
									<div class="col one-fourth">
										<a href="sales.html" title="achts for sale">
											<img src="http://placehold.it/800x600" alt="" />
											<span>Yachts for sale</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</li> -->
					<li><a href="destinations.html" title="Sailing routes">Travelling routes</a>
						<ul class="dropdown">
							<li><a href="destinations.html" title="All destinations">All destinations</a></li>
							<li><a href="destinations-single.html" title="Destination single">Destination single</a></li>
							<li><a href="destinations-micro.html" title="Destination micro">Destination micro</a></li>
						</ul>
					</li>
					<li><a href="services.html" title="Services">Services</a></li>
					<li><a href="blog.html" title="News">News</a>
						<ul class="dropdown">
							<li><a href="blog.html" title="Blog">Blog</a></li>
							<li><a href="blog2.html" title="Blog 2">Blog 2</a></li>
							<li><a href="blog3.html" title="Blog 3">Blog 3</a></li>
							<li><a href="blog-single.html" title="Single post">Single post</a></li>
						</ul>
					</li>
					<li><a href="<?php echo base_url();?>index.php/contact/index" title="Contact">Contact</a></li>
					<!-- <li><a href="#" title="">Pages</a>
						<div class="megamenu full-width">
							<div class="wrap">
								<div class="row">
									<div class="col one-fourth">
										<p>Static templates</p>
										<ul>
											<li><a href="page-left-sidebar.html" title="Page with left sidebar">Page with left sidebar</a></li>
											<li><a href="page-right-sidebar.html" title="Page with right sidebar">Page with right sidebar</a></li>
											<li><a href="page-both-sidebars.html" title="Page with both sidebars">Page with both sidebars</a></li>
											<li><a href="page-no-sidebar.html" title="Page with no sidebars">Page with no sidebars</a></li>
										</ul>
									</div>
									<div class="col one-fourth">
										<p>Special pages</p>
										<ul>
											<li><a href="404.html" title="Error 404">Error 404</a></li>
											<li><a href="login.html" title="Login">Login</a></li>
											<li><a href="register.html" title="Register">Register</a></li>
											<li><a href="shortcodes.html" title="Shortcodes">Shortcodes</a></li>
										</ul>
									</div>
									<div class="col one-fourth">
										<p>Corporate pages</p>
										<ul>
											<li><a href="crew.html" title="Crew">Crew</a></li>
											<li><a href="services.html" title="Services">Services</a></li>
											<li><a href="contact.html" title="Contact">Contact</a></li>
											<li><a href="faq.html" title="Faq">Faq</a></li>
										</ul>
									</div>
									<div class="col one-fourth">
										<p>Special pages</p>
										<ul>
											<li><a href="charters.html" title="Charter yachts">Charter yachts</a></li>
											<li><a href="yacht-single.html" title="Yacht info + booking">Yacht info + booking</a></li>
											<li><a href="sales.html" title="Yachts for sale">Yachts for sale</a></li>
											<li><a href="yacht-sale-single.html" title="Yacht sale info">Yacht for sale info</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</li> -->
					<!-- <li><a href="http://themeforest.net/user/themeenergy/portfolio" title="Purchase">Purchase</a></li> -->
				</ul>
				
				<!-- Search -->
				<form class="advanced-search" action="charters.html">
					<div class="wrap">
						<div>
							<select>
								<option selected>Select location</option>
								<option>Caribbean</option>
								<option>Mediterranean</option>
								<option>Indian Ocean</option>
								<option>South Pacific</option>
								<option>South East Asia</option>
								<option>South America</option>
								<option>North America</option>
								<option>Northern Europe</option>
							</select>
						</div>
						<div>
							<input type="text" id="startDate" />
						</div>
						<div>
							<select>
								<option selected>Duration</option>
								<option>1 week</option>
								<option>2 weeks</option>
								<option>3 weeks</option>
								<option>4 weeks</option>
							</select>
						</div>
						<div>
							<select>
								<option selected>Cabins</option>
								<option>3 or less</option>
								<option>4 - 6</option>
								<option>6 or more</option>
							</select>
						</div>
						<div>
							<select>
								<option selected>Yacht type</option>
								<option>Motor yacht</option>
								<option>Sailing yacht</option>
							</select>
						</div>
						<div><input type="submit" id="as-submit" class="button gold full" value="Search yachts" /></div>
						<a href="javascript:void(0)" class="search-hide" title="Hide this box">Hide this box</a>
					</div>
				</form>
				<!-- //Search -->
			</nav>
			<!-- //Primary menu -->
		</div>
	</header>
	<!-- //Header -->
	