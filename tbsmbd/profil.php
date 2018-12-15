<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 	
	session_start();
	if(!isset($_SESSION['user'])) header('Location: index.php');
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>RED Market an E-commerce Online Shopping Telkom University</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Smart Bazaar Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Custom Theme files -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/animate.min.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" />
	<!-- menu style -->
	<!-- //Custom Theme files -->
	<!-- font-awesome icons -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome icons -->
	<!-- js -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<script src="js/jquery-scrolltofixed-min.js" type="text/javascript"></script>
	<!-- fixed nav js -->
	<script>
		$(document).ready(function() {

			// Dock the header to the top of the window when scrolled past the banner. This is the default behaviour.

			$('.header-two').scrollToFixed();
			// previous summary up the page.

			var summaries = $('.summary');
			summaries.each(function(i) {
				var summary = $(summaries[i]);
				var next = summaries[i + 1];

				summary.scrollToFixed({
					marginTop: $('.header-two').outerHeight(true) + 10,
					zIndex: 999
				});
			});
		});
	</script>
	<!-- //js -->
	<!-- web-fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Lovers+Quarrel' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Offside' rel='stylesheet' type='text/css'>
	<!-- web-fonts -->
	<!-- start-smooth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {

			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
			};

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->
	<style>
		.profpict {
			margin-top: 5px;
			margin-bottom: 5px;
		}

		.ktm:hover {
			box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
		}

		.ktm {
			border: 1px solid #ddd;
			border-radius: 4px;
			padding: 5px;
			width: 2020px;
		}
	</style>
</head>

<body>
	<!-- header -->
	<div class="header">
		<?php include('kepala.php'); ?>
		<div class="header-two">
			<!-- header-two -->
			<div class="container-fluid">
				<div class="header-logo">
					<h1><a href="index.php"><span>Red</span>Market <i></i></a>
					<h6>Your stores. Your place.</h6>
				</div>
				<div class="header-search">
					<form action="#" method="post">
						<input type="search" name="Search" placeholder="Search for a Product..." required="">
						<button type="submit" class="btn btn-default" aria-label="Left Align">
							<i class="fa fa-search" aria-hidden="true"> </i>
						</button>
					</form>
				</div>
				<div class="header-cart">
					<div class="my-account">
						<a href="contact.php"><i class="fa fa-map-marker" aria-hidden="true"></i> CONTACT US</a>
					</div>
					<div class="cart">
						<form action="#" method="post" class="last">
							<input type="hidden" name="cmd" value="_cart" />
							<input type="hidden" name="display" value="1" />
							<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
						</form>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div><!-- //header-two -->
		<div class="header-three"><!-- header-three -->
			<div class="container">
				<div class="menu">
					<div class="cd-dropdown-wrapper">
						<a class="cd-dropdown-trigger" href="#0">Store Categories</a>
						<nav class="cd-dropdown">
							<a href="#0" class="cd-close">Close</a>
							<ul class="cd-dropdown-content">
								<li><a href="offers.php">Today's Offers</a></li>
								<li class="has-children">
									<a href="#">Electronics</a>
									<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
										<li class="see-all"><a href="products.php">All Electronics</a></li>
										<li class="has-children">
											<a href="#">MOBILE PHONES</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#">All Electronics</a></li>
												<li class="has-children">
													<a href="#0">SmartPhones</a>
													<ul class="is-hidden">
														<li class="go-back"><a href="#"> </a></li>
														<li><a href="products.php">Android</a></li>
														<li><a href="products.php">Windows</a></li>
														<li><a href="products.php">Black berry</a></li>
													</ul>
												</li>
												<li> <a href="products.php">IPhones</a> </li>
												<li><a href="products.php">Tablets</a></li>
												<li><a href="products.php">IPad</a></li>
												<li><a href="products.php">Feature Phones</a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">LARGE APPLIANCES</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#">All Electronics </a></li>
												<li><a href="products.php">Refrigerators</a></li>
												<li><a href="products.php">Washing Machine</a></li>
												<li><a href="products.php">Office Technology</a></li>
												<li><a href="products.php">Air conditioner</a></li>
												<li><a href="products.php">Home Automation</a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">ENTERTAINMENT</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#">All Electronics</a></li>
												<li><a href="products.php">Tv & Accessories</a></li>
												<li><a href="products.php">Digital Camera</a></li>
												<li><a href="products.php">Gaming</a></li>
												<li><a href="products.php">Home Audio & Theater</a></li>
												<li class="has-children">
													<a href="#">Computer</a>
													<ul class="is-hidden">
														<li class="go-back"><a href="#"> </a></li>
														<li><a href="products.php">Laptop </a></li>
														<li><a href="products.php">Gaming PC</a></li>
														<li><a href="products.php">Monitors</a></li>
														<li><a href="products.php">Networking</a></li>
														<li><a href="products.php">Printers & Supplies</a></li>
														<li><a href="products.php">Accessories</a></li>
													</ul>
												</li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">HOME APPLIANCES</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#0">All Electronics </a></li>
												<li class="has-children"><a href="#">Kitchen appliances</a>
													<ul class="is-hidden">
														<li class="go-back"><a href="#0"> </a></li>
														<li><a href="products.php">Rice Cookers</a></li>
														<li><a href="products.php">Mixer Juicer</a></li>
														<li><a href="products.php">Grinder</a></li>
														<li><a href="products.php">Blenders & Choppers</a></li>
														<li><a href="products.php">Microwave Oven</a></li>
														<li><a href="products.php">Food Processors</a></li>
													</ul>
												</li>
												<li><a href="products.php">Purifiers</a></li>
												<li><a href="products.php">Geysers</a></li>
												<li><a href="products.php">Gas Stove</a></li>
												<li><a href="products.php">Vacuum Cleaner</a></li>
												<li><a href="products.php">Sewing Machine</a></li>
												<li><a href="products.php">Heaters & Fans</a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">SMALL DEVICES</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#0">All Electronics </a></li>
												<li><a href="products.php">Wifi Dongle</a></li>
												<li><a href="products.php">Router & Modem</a></li>
												<li class="has-children"><a href="#">Storage Devices</a>
													<ul class="is-hidden">
														<li class="go-back"><a href="#0"> </a></li>
														<li><a href="products.php">Cloud Storage</a></li>
														<li><a href="products.php">Hard Disk</a></li>
														<li><a href="products.php">SSD</a></li>
														<li><a href="products.php">Pen Drive</a></li>
														<li><a href="products.php">Memory card</a></li>
														<li><a href="products.php">Security Devices</a></li>
													</ul>
												</li>
												<li><a href="products.php">Office Supplies</a></li>
												<li><a href="products.php">Cut the Cable</a></li>
												<li><a href="products.php">Auto Electronics</a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">PERSONAL CARE</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#0">All Electronics </a></li>
												<li><a href="products.php">Epilator</a></li>
												<li><a href="products.php">Hair Styler</a></li>
												<li><a href="products.php">Trimmer & Shaver</a></li>
												<li><a href="products.php">Health Care</a></li>
												<li><a href="products.php">cables</a></li>
											</ul>
										</li>
									</ul> <!-- .cd-secondary-dropdown -->
								</li> <!-- .has-children -->
								<li class="has-children">
									<a href="#">Fashion Store</a>
									<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
										<li class="see-all"><a href="products1.php">All Fashion Stores</a></li>
										<li class="has-children">
											<a href="#">GIRLS' CLOTHING</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#">All Fashion Stores</a></li>
												<li><a href="products1.php">Ethnic wear </a></li>
												<li><a href="products1.php">Maternity wear</a></li>
												<li><a href="products1.php">inner & nightwear </a></li>
												<li><a href="products1.php">casual wear </a></li>
												<li><a href="products1.php">formal wear</a></li>
												<li><a href="products1.php">Sports wear</a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">BOYS' CLOTHING</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#">All Fashion Stores</a></li>
												<li><a href="products1.php">Jeans</a></li>
												<li><a href="products1.php">Casual wear</a></li>
												<li><a href="products1.php">Shorts</a></li>
												<li><a href="products1.php">T-Shirts & Polos</a></li>
												<li><a href="products1.php">Trousers & Chinos</a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">JACKETS</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#">All Fashion Stores</a></li>
												<li><a href="products1.php">Blazers</a></li>
												<li><a href="products1.php">Bomber jackets</a></li>
												<li><a href="products1.php">Denim Jackets</a></li>
												<li><a href="products1.php">Duffle Coats</a></li>
												<li><a href="products1.php">Leather Jackets</a></li>
												<li><a href="products1.php">Parkas</a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">ACCESSORIES </a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#">All Fashion Stores</a></li>
												<li><a href="products1.php">Watches </a></li>
												<li><a href="products1.php">Eyewear </a></li>
												<li><a href="products1.php">Jewellery </a></li>
												<li class="has-children">
													<a href="#">Footwear </a>
													<ul class="is-hidden">
														<li class="go-back"><a href="#"> </a></li>
														<li><a href="products1.php">Ethnic</a></li>
														<li><a href="products1.php">Casual wear</a></li>
														<li><a href="products1.php">Sports Shoes</a></li>
														<li><a href="products1.php">Boots</a></li>
													</ul>
												</li>
												<li><a href="products1.php">Stoles & Scarves</a></li>
												<li><a href="products1.php">Handbags</a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">BEAUTY</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#">All Fashion Stores</a></li>
												<li><a href="products1.php">Perfumes & Deos</a></li>
												<li><a href="products1.php">Lipsticks & Nail Polish</a></li>
												<li><a href="products1.php">Beauty Gift Hampers</a></li>
												<li><a href="products1.php">Personal Grooming</a></li>
												<li><a href="products1.php">Travel bags</a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="products1.php">PERSONAL CARE</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#">All Fashion Stores</a></li>
												<li><a href="products1.php">Face Care</a></li>
												<li><a href="products1.php">Nail Care</a></li>
												<li><a href="products1.php">Hair Care</a></li>
												<li><a href="products1.php">Body Care</a></li>
												<li><a href="products1.php">Bath & Spa</a></li>
											</ul>
										</li>
									</ul> <!-- .cd-secondary-dropdown -->
								</li> <!-- .has-children -->
								<li class="has-children">
									<a href="products2.php">Kids Fashion & Toys</a>
									<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
										<li class="see-all"><a href="products2.php">All Kids Fashions</a></li>
										<li class="has-children">
											<a href="products2.php">KIDS CLOTHING</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#">All Kids Fashions</a></li>
												<li><a href="products2.php">Ethnic wear </a></li>
												<li><a href="products2.php">inner & Sleepwear </a></li>
												<li><a href="products2.php">Dresses & Frocks </a></li>
												<li><a href="products2.php">Winter wear</a></li>
												<li><a href="products2.php">Diaper & Accessories</a></li>
											</ul>
										</li>
										<li class="has-children"><a href="#">KIDS FASHION</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#">All Kids Fashions</a></li>
												<li><a href="products2.php">Footwear</a></li>
												<li><a href="products2.php">Sunglasses </a></li>
												<li><a href="products2.php">School & Stationery</a></li>
												<li><a href="products2.php">Jewellery</a></li>
												<li><a href="products2.php">Hair bands & Clips</a></li>
											</ul>
										</li>
										<li class="has-children"><a href="#">Baby Care</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#">All Kids Fashions</a></li>
												<li><a href="products2.php">Lotions, Oil & Powder </a></li>
												<li><a href="products2.php">Soaps, Shampoo </a></li>
												<li><a href="products2.php">Bath Towels</a></li>
												<li class="has-children">
													<a href="#">Feeding</a>
													<ul class="is-hidden">
														<li class="go-back"><a href="#"> </a></li>
														<li><a href="products2.php">Baby Food </a></li>
														<li><a href="products2.php">Bottle Feeding </a></li>
														<li><a href="products2.php">Breast Feeding</a></li>
													</ul>
												</li>
												<li><a href="products2.php">Toddlers' Rooms</a></li>
											</ul><!-- .cd-secondary-dropdown -->
										</li> <!-- .has-children -->
										<li class="has-children"><a href="#">TOYS & GAMES </a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#">All Kids Fashions</a></li>
												<li><a href="products2.php">Art & Crafts</a></li>
												<li><a href="products2.php">Educational Toys </a></li>
												<li><a href="products2.php">Baby Toys</a></li>
												<li><a href="products2.php">Outdoor Play </a></li>
												<li><a href="products2.php">Musical Instruments</a></li>
											</ul>
										</li>
										<li>
											<ul class="is-hidden">
												<li class="go-back"><a href="#">All Kids Fashions</a></li>
												<li><a href="products2.php">Toy Tips & Trends</a></li>
												<li><a href="products2.php">Preschool Toys</a></li>
												<li><a href="products2.php">Musical Instruments</a></li>
												<li><a href="products2.php">Bikes & Ride-Ons</a></li>
												<li><a href="products2.php">Video Games</a></li>
												<li><a href="products2.php">PC & Digital Gaming</a></li>
											</ul>
										</li>
									</ul><!-- .cd-secondary-dropdown -->
								</li> <!-- .has-children -->
								<li class="has-children">
									<a href="#">Home, Furniture & Patio</a>
									<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
										<li class="see-all"><a href="products3.php">All Products</a></li>
										<li class="has-children">
											<a href="#">Kitchen Uses</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products3.php">Dinner Sets </a></li>
												<li><a href="products3.php">Cookware & Bakeware </a></li>
												<li><a href="products3.php">Containers & Jars </a></li>
												<li><a href="products3.php">Kitchen Tools </a></li>
												<li><a href="products3.php">Food Storage</a></li>
												<li><a href="products3.php">Casseroles</a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Furniture </a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products3.php">Bedroom </a></li>
												<li><a href="products3.php">Dining Room </a></li>
												<li><a href="products3.php">Kids' Furniture </a></li>
												<li><a href="products3.php">Living Room</a></li>
												<li><a href="products3.php">Office</a></li>
												<li><a href="products3.php">Mattresses</a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Home Decor </a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products3.php">Lighting</a></li>
												<li><a href="products3.php">Painting</a></li>
												<li><a href="products3.php">Curtains & Blinds</a></li>
												<li><a href="products3.php">Patio Furniture</a></li>
												<li><a href="products3.php">Wardrobes & Cabinets</a></li>
												<li><a href="products3.php">Mattresses</a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Gardening & Lawn </a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"> </a></li>
												<li><a href="products3.php">Gardening </a></li>
												<li><a href="products3.php">Landscaping </a></li>
												<li><a href="products3.php">Sheds</a></li>
												<li><a href="products3.php">Outdoor Storage  </a></li>
												<li><a href="products3.php">Garden & Ideas </a></li>
												<li><a href="products3.php">Patio Tips</a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Garage Storage</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products3.php">Baskets & Bins </a></li>
												<li><a href="products3.php">Garage Door Openers</a></li>
												<li><a href="products3.php">Free Standing Shelves </a></li>
												<li><a href="products3.php">Floor cleaning</a></li>
												<li><a href="products3.php">Tool Kits</a></li>
											</ul>
										</li>
									</ul><!-- .cd-secondary-dropdown -->
								</li> <!-- .has-children -->
								<li class="has-children">
									<a href="#">Sports, Fitness & Outdoor</a>
									<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
										<li class="see-all"><a href="products4.php">All Products</a></li>
										<li class="has-children">
											<a href="#">Single Sports </a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products4.php">Bikes </a></li>
												<li><a href="products4.php">Fishing  </a></li>
												<li><a href="products4.php">Cycling </a></li>
												<li><a href="products4.php">Musical Instruments</a></li>
												<li><a href="products4.php">Archery </a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Team Sports</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products4.php">Cricket </a></li>
												<li><a href="products4.php">Badminton </a></li>
												<li><a href="products4.php">Swimming Gear </a></li>
												<li><a href="products4.php">Sports Apparel </a></li>
												<li><a href="products4.php">Indoor games</a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Fitness </a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products4.php">Fitness Accessories </a></li>
												<li><a href="products4.php">Exercise Machines </a></li>
												<li><a href="products4.php">Ellipticals </a></li>
												<li><a href="products4.php">Home Gyms</a></li>
												<li><a href="products4.php">Exercise Bikes</a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Camping </a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products4.php"> Airbeds</a></li>
												<li><a href="products4.php">Tents </a></li>
												<li><a href="products4.php">Gazebo's & Shelters</a></li>
												<li><a href="products4.php">Coolers </a></li>
												<li><a href="products4.php">Canopies</a></li>
												<li><a href="products4.php">Sleeping Bags</a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Camping Tools</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products4.php">Shooting </a></li>
												<li><a href="products4.php">Knives & Tools </a></li>
												<li><a href="products4.php">Optics & Binoculars </a></li>
												<li><a href="products4.php">Lights & Lanterns </a></li>
												<li><a href="products4.php">Hunting Clothing </a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Other</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products4.php">Riding Gears & More </a></li>
												<li><a href="products4.php">Body Massagers </a></li>
												<li><a href="products4.php">Health Monitors </a></li>
												<li><a href="products4.php">Health Drinks </a></li>
											</ul>
										</li>
									</ul><!-- .cd-secondary-dropdown -->
								</li> <!-- .has-children -->
								<li class="has-children">
									<a href="#">Grocery store</a>
									<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
										<li class="see-all"><a href="products5.php">All Products</a></li>
										<li class="has-children">
											<a href="#">Veggies & Fruits </a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products5.php">Vegetables </a></li>
												<li><a href="products5.php">Fruits </a></li>
												<li><a href="products5.php">Dry Fruits</a></li>
												<li><a href="products5.php">Snacks & Cookies </a></li>
												<li><a href="products5.php">Breakfast & Cereal</a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Packet Food</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products5.php">Beverages </a></li>
												<li><a href="products5.php">Baking </a></li>
												<li><a href="products5.php">Emergency Food </a></li>
												<li><a href="products5.php">Candy & Gum </a></li>
												<li><a href="products5.php">Meals & Pasta </a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Shop All Pets </a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products5.php">Dogs </a></li>
												<li><a href="products5.php">Fish </a></li>
												<li><a href="products5.php">Cats</a></li>
												<li><a href="products5.php">Birds </a></li>
												<li><a href="products5.php">Pet Food </a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Household Essentials </a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products5.php">Laundry Room </a></li>
												<li><a href="products5.php">Paper & Plastic</a></li>
												<li><a href="products5.php">Pest Control </a></li>
												<li><a href="products5.php">Batteries </a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Food Shops </a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products5.php">Fresh Food</a></li>
												<li><a href="products5.php">Food Gifts </a></li>
												<li><a href="products5.php">Frozen Food </a></li>
												<li><a href="products5.php">Organic </a></li>
												<li><a href="products5.php">Gluten Free </a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Tips </a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products5.php">Pets Growth</a></li>
												<li><a href="products5.php">Recipes </a></li>
												<li><a href="products5.php">Snacks</a></li>
												<li><a href="products5.php">Nutrition</a></li>
											</ul>
										</li>
									</ul><!-- .cd-secondary-dropdown -->
								</li> <!-- .has-children -->
								<li class="has-children">
									<a href="#">Photo, Gifts & Office Supplies</a>
									<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
										<li class="see-all"><a href="products6.php">All Products</a></li>
										<li class="has-children">
											<a href="#">Trending Now </a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products6.php">Best Priced</a></li>
												<li><a href="products6.php">Chocolates </a></li>
												<li><a href="products6.php">Gift Cards </a></li>
												<li><a href="products6.php">Fashion & Accessories </a></li>
												<li><a href="products6.php">Decorative Plants </a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Photos </a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products6.php">Shelf animation </a></li>
												<li><a href="products6.php">3D-rendered </a></li>
												<li><a href="products6.php">gift builder </a></li>
												<li><a href="products6.php">Frames</a></li>
												<li><a href="products6.php">Wall Decor</a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Gifts </a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products6.php">Personalized Gifts </a></li>
												<li><a href="products6.php">Flowers </a></li>
												<li><a href="products6.php">Cards & Toys</a></li>
												<li><a href="products6.php">Show pieces </a></li>
												<li><a href="products6.php">Photo Books</a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Favourite Brands </a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products6.php">Archies </a></li>
												<li><a href="products6.php">Jewel Fuel </a></li>
												<li><a href="products6.php">Ferns N Petals </a></li>
												<li><a href="products6.php">Happily Unmarried</a></li>
												<li><a href="products6.php">Chumbak</a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Office</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products6.php">Calendars</a></li>
												<li><a href="products6.php">Mousepads</a></li>
												<li><a href="products6.php">Phone Cases</a></li>
												<li><a href="products6.php">Tablet & Laptop Cases</a></li>
												<li><a href="products6.php">Mounted Photos</a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Combos </a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products6.php">Chocolates </a></li>
												<li><a href="products6.php">Dry Fruits</a></li>
												<li><a href="products6.php">Sweets</a></li>
												<li><a href="products6.php">Snacks</a></li>
												<li><a href="products6.php">Cakes</a></li>
											</ul>
										</li>
									</ul><!-- .cd-secondary-dropdown -->
								</li>
								<li class="has-children">
									<a href="#">Health, Beauty & Pharmacy</a>
									<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
										<li class="see-all"><a href="products7.php">All Products</a></li>
										<li class="has-children">
											<a href="#">Health</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products7.php">Home Health Care </a></li>
												<li><a href="products7.php">Sports Nutrition </a></li>
												<li><a href="products7.php">Vision </a></li>
												<li><a href="products7.php">Vitamins </a></li>
												<li><a href="products7.php">Diet & Nutrition </a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Health Tips</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products7.php">Diet</a></li>
												<li><a href="products7.php">Exercise Tips  </a></li>
												<li><a href="products7.php">Vitamin Balance</a></li>
												<li><a href="products7.php">Health Insurance</a></li>
												<li><a href="products7.php">Funeral</a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Beauty </a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products7.php">Massage & Spa </a></li>
												<li><a href="products7.php">Face Wash</a></li>
												<li><a href="products7.php">Facial Cleanser</a></li>
												<li><a href="products7.php">Makeup </a></li>
												<li><a href="products7.php">Beauty Tips</a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Pharmacy </a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products7.php">Home Delivery </a></li>
												<li><a href="products7.php">History & Reports </a></li>
												<li><a href="products7.php">Transfer Prescriptions </a></li>
												<li><a href="products7.php">Health CheckUp</a></li>
												<li><a href="products7.php">Mobile App</a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Pharmacy Center </a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products7.php">Diabetes Shop </a></li>
												<li><a href="products7.php">Medicine Cabinet </a></li>
												<li><a href="products7.php">Vitamin Selector</a></li>
												<li><a href="products7.php">Pharmacy Help</a></li>
											</ul>
										</li>
									</ul><!-- .cd-secondary-dropdown -->
								</li>
								<li class="has-children">
									<a href="#">Automotive</a>
									<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
										<li class="see-all"><a href="products8.php">All Products</a></li>
										<li class="has-children">
											<a href="#">All Motors </a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products8.php">Bikes </a></li>
												<li><a href="products8.php">Yachts </a></li>
												<li><a href="products8.php">Scooters </a></li>
												<li><a href="products8.php">Autos</a></li>
												<li><a href="products8.php">Bus</a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Accessories </a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products8.php">Vehicle Electronics</a></li>
												<li><a href="products8.php">Stereos & Monitors</a></li>
												<li><a href="products8.php">Bluetooth Devices</a></li>
												<li><a href="products8.php">GPS Navigation</a></li>
												<li><a href="products8.php">Speakers & Tweeters</a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Safety & Security </a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products8.php">Anti-Theft Devices </a></li>
												<li><a href="products8.php">Helmets</a></li>
												<li><a href="products8.php">Sensors</a></li>
												<li><a href="products8.php">Auto Repair Tools </a></li>
												<li><a href="products8.php">Antifreeze & Coolants </a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Car Interiors</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products8.php">Stereos </a></li>
												<li><a href="products8.php">Floor Mats </a></li>
												<li><a href="products8.php">Seat Covers</a></li>
												<li><a href="products8.php">Chargers </a></li>
												<li><a href="products8.php">Audio Finder </a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Exterior Accessories </a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products8.php">Wheel covers </a></li>
												<li><a href="products8.php">Car Lighting </a></li>
												<li><a href="products8.php">Polish & Waxes</a></li>
												<li><a href="products8.php">Cargo Management</a></li>
												<li><a href="products8.php">Car Decoration </a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Car Care</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products8.php">Auto Tips & Advice </a></li>
												<li><a href="products8.php">Car Washes & Cleaners </a></li>
												<li><a href="products8.php">Car Wax & Polish</a></li>
												<li><a href="products8.php">Cleaning Tools</a></li>
												<li><a href="products8.php">Detailing Kits </a></li>
											</ul>
										</li>
									</ul><!-- .cd-secondary-dropdown -->
								</li>
								<li class="has-children">
									<a href="#">Books, Music & Movies</a>
									<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
										<li class="see-all"><a href="products9.php">All Products</a></li>
										<li class="has-children">
											<a href="#">Books</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li class="has-children"><a href="#">Exam books </a>
													<ul class="is-hidden">
														<li class="go-back"><a href="#"> </a></li>
														<li><a href="products9.php">CAT/MAT/XAT</a></li>
														<li><a href="products9.php">Civil Services</a></li>
														<li><a href="products9.php">AFCAT</a></li>
														<li><a href="products9.php">New Releases</a></li>
													</ul>
												</li>
												<li><a href="products9.php">Academic Text </a></li>
												<li><a href="products9.php">Romance Books </a></li>
												<li><a href="products9.php">Journals </a></li>
												<li><a href="products9.php">Children's & Teen Books </a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Music</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products9.php">New Releases </a></li>
												<li><a href="products9.php">Country Music </a></li>
												<li><a href="products9.php">Musical Instruments </a></li>
												<li><a href="products9.php">Collections</a></li>
												<li><a href="products9.php">Boxed Sets </a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Music Combo</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products9.php">Pop </a></li>
												<li><a href="products9.php">Preorders </a></li>
												<li><a href="products9.php">Album Songs</a></li>
												<li><a href="products9.php">Top 50 CDs </a></li>
												<li><a href="products9.php">Music DVDs </a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Movies</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products9.php">New Releases </a></li>
												<li><a href="products9.php">Children & Family </a></li>
												<li><a href="products9.php">Action</a></li>
												<li><a href="products9.php">Classic Movies </a></li>
												<li><a href="products9.php">Bollywood Movies </a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Movies Combo</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products9.php">Hollywood Movies </a></li>
												<li><a href="products9.php">Digital Movies </a></li>
												<li><a href="products9.php">Boxed Sets</a></li>
												<li><a href="products9.php">Animated</a></li>
												<li><a href="products9.php">Adventure</a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">TV Shows</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products9.php">Serials</a></li>
												<li><a href="products9.php">Best Programs</a></li>
												<li><a href="products9.php">Celebrations</a></li>
												<li><a href="products9.php">Top Shows</a></li>
											</ul>
										</li>
									</ul><!-- .cd-secondary-dropdown -->
								</li>
								<li><a href="sitemap.php">Full Site Directory </a></li>
							</ul> <!-- .cd-dropdown-content -->
						</nav> <!-- .cd-dropdown -->
					</div> <!-- .cd-dropdown-wrapper -->
				</div>
				<div class="move-text">
					<div class="marquee"><a href="offers.php"> New collections are available here...... <span>Get extra 10% off on everything | no extra taxes </span> <span> Try shipping pass free for 15 days with unlimited</span></a></div>
					<script type="text/javascript" src="js/jquery.marquee.min.js"></script>
					<script>
					  $('.marquee').marquee({ pauseOnHover: true });
					  //@ sourceURL=pen.js
					</script>
				</div>
			</div>
		</div>
	</div>
	<!-- //header -->
	<!--  about-page -->
	<div class="about">
		<div id="SITE_CONTAINER" data-santa-render-status="CLIENT">
			<div class="noop visual-focus-on" data-santa-version="1.3304.0">
				<div>
					<style type="text/css" data-styleid="theme_fonts">
						.font_0 {
							font: normal normal normal 88px/1.4em avenir-lt-w01_85-heavy1475544, sans-serif;
							color: #FFFFFF;
						}

						.font_1 {
							font: normal normal normal 16px/1.4em din-next-w01-light, din-next-w02-light, din-next-w10-light, sans-serif;
							color: #474A59;
						}

						.font_2 {
							font: normal normal normal 45px/1.4em avenir-lt-w01_85-heavy1475544, sans-serif;
							color: #070A0E;
						}

						.font_3 {
							font: normal normal normal 90px/1.4em avenir-lt-w01_85-heavy1475544, sans-serif;
							color: #070A0E;
						}

						.font_4 {
							font: normal normal normal 38px/1.4em avenir-lt-w01_85-heavy1475544, sans-serif;
							color: #070A0E;
						}

						.font_5 {
							font: normal normal normal 25px/1.4em avenir-lt-w01_35-light1475496, sans-serif;
							color: #070A0E;
						}

						.font_6 {
							font: normal normal normal 20px/1.4em avenir-lt-w01_85-heavy1475544, sans-serif;
							color: #070A0E;
						}

						.font_7 {
							font: normal normal normal 17px/1.4em avenir-lt-w01_35-light1475496, sans-serif;
							color: #070A0E;
						}

						.font_8 {
							font: normal normal normal 15px/1.4em avenir-lt-w01_35-light1475496, sans-serif;
							color: #070A0E;
						}

						.font_9 {
							font: normal normal normal 13px/1.4em avenir-lt-w01_35-light1475496, sans-serif;
							color: #070A0E;
						}

						.font_10 {
							font: normal normal normal 12px/1.4em din-next-w01-light, din-next-w02-light, din-next-w10-light, sans-serif;
							color: #474A59;
						}
					</style>
					<style type="text/css" data-styleid="theme_colors">
						.color_0 {
							color: #FFFFFF;
						}

						.backcolor_0 {
							background-color: #FFFFFF;
						}

						.color_1 {
							color: #FFFFFF;
						}

						.backcolor_1 {
							background-color: #FFFFFF;
						}

						.color_2 {
							color: #000000;
						}

						.backcolor_2 {
							background-color: #000000;
						}

						.color_3 {
							color: #ED1C24;
						}

						.backcolor_3 {
							background-color: #ED1C24;
						}

						.color_4 {
							color: #0088CB;
						}

						.backcolor_4 {
							background-color: #0088CB;
						}

						.color_5 {
							color: #FFCB05;
						}

						.backcolor_5 {
							background-color: #FFCB05;
						}

						.color_6 {
							color: #727272;
						}

						.backcolor_6 {
							background-color: #727272;
						}

						.color_7 {
							color: #B0B0B0;
						}

						.backcolor_7 {
							background-color: #B0B0B0;
						}

						.color_8 {
							color: #FFFFFF;
						}

						.backcolor_8 {
							background-color: #FFFFFF;
						}

						.color_9 {
							color: #727272;
						}

						.backcolor_9 {
							background-color: #727272;
						}

						.color_10 {
							color: #B0B0B0;
						}

						.backcolor_10 {
							background-color: #B0B0B0;
						}

						.color_11 {
							color: #FFFFFF;
						}

						.backcolor_11 {
							background-color: #FFFFFF;
						}

						.color_12 {
							color: #EDEFF5;
						}

						.backcolor_12 {
							background-color: #EDEFF5;
						}

						.color_13 {
							color: #A0A09F;
						}

						.backcolor_13 {
							background-color: #A0A09F;
						}

						.color_14 {
							color: #474A59;
						}

						.backcolor_14 {
							background-color: #474A59;
						}

						.color_15 {
							color: #070A0E;
						}

						.backcolor_15 {
							background-color: #070A0E;
						}

						.color_16 {
							color: #F4B5BB;
						}

						.backcolor_16 {
							background-color: #F4B5BB;
						}

						.color_17 {
							color: #EA8F98;
						}

						.backcolor_17 {
							background-color: #EA8F98;
						}

						.color_18 {
							color: #DF3143;
						}

						.backcolor_18 {
							background-color: #DF3143;
						}

						.color_19 {
							color: #95212D;
						}

						.backcolor_19 {
							background-color: #95212D;
						}

						.color_20 {
							color: #4A1016;
						}

						.backcolor_20 {
							background-color: #4A1016;
						}

						.color_21 {
							color: #BBC8DD;
						}

						.backcolor_21 {
							background-color: #BBC8DD;
						}

						.color_22 {
							color: #94A3BA;
						}

						.backcolor_22 {
							background-color: #94A3BA;
						}

						.color_23 {
							color: #6A7B98;
						}

						.backcolor_23 {
							background-color: #6A7B98;
						}

						.color_24 {
							color: #2E4975;
						}

						.backcolor_24 {
							background-color: #2E4975;
						}

						.color_25 {
							color: #17253B;
						}

						.backcolor_25 {
							background-color: #17253B;
						}

						.color_26 {
							color: #AFC7F4;
						}

						.backcolor_26 {
							background-color: #AFC7F4;
						}

						.color_27 {
							color: #86A8E9;
						}

						.backcolor_27 {
							background-color: #86A8E9;
						}

						.color_28 {
							color: #2163DE;
						}

						.backcolor_28 {
							background-color: #2163DE;
						}

						.color_29 {
							color: #164294;
						}

						.backcolor_29 {
							background-color: #164294;
						}

						.color_30 {
							color: #0B214A;
						}

						.backcolor_30 {
							background-color: #0B214A;
						}

						.color_31 {
							color: #B1F4E4;
						}

						.backcolor_31 {
							background-color: #B1F4E4;
						}

						.color_32 {
							color: #89E9D1;
						}

						.backcolor_32 {
							background-color: #89E9D1;
						}

						.color_33 {
							color: #28DEB1;
						}

						.backcolor_33 {
							background-color: #28DEB1;
						}

						.color_34 {
							color: #1B9476;
						}

						.backcolor_34 {
							background-color: #1B9476;
						}

						.color_35 {
							color: #0D4A3B;
						}

						.backcolor_35 {
							background-color: #0D4A3B;
						}
					</style>
					<style type="text/css" data-styleid="s_DtaksTPAWidgetSkin">
						.s_DtaksTPAWidgetSkin {
							overflow: hidden;
						}

						.s_DtaksTPAWidgetSkin iframe {
							position: absolute;
							width: 100%;
							height: 100%;
							overflow: hidden;
						}

						.s_DtaksTPAWidgetSkinpreloaderOverlay {
							position: absolute;
							top: 0;
							left: 0;
							color: #373737;
							width: 100%;
							height: 100%;
						}

						.s_DtaksTPAWidgetSkinpreloaderOverlaycontent {
							width: 100%;
							height: 100%;
						}

						.s_DtaksTPAWidgetSkinunavailableMessageOverlay {
							position: absolute;
							top: 0;
							left: 0;
							color: #373737;
							width: 100%;
							height: 100%;
						}

						.s_DtaksTPAWidgetSkinunavailableMessageOverlaycontent {
							width: 100%;
							height: 100%;
							background: rgba(255, 255, 255, 0.9);
							font-size: 0;
							margin-top: 5px;
						}

						.s_DtaksTPAWidgetSkinunavailableMessageOverlaytextContainer {
							color: #373737;
							font-family: "Helvetica Neue", "HelveticaNeueW01-55Roma", "HelveticaNeueW02-55Roma", "HelveticaNeueW10-55Roma", Helvetica, Arial, sans-serif;
							font-size: 14px;
							display: inline-block;
							vertical-align: middle;
							width: 100%;
							margin-top: 10px;
							text-align: center;
						}

						.s_DtaksTPAWidgetSkinunavailableMessageOverlayreloadButton {
							display: inline-block;
						}

						.s_DtaksTPAWidgetSkinunavailableMessageOverlay a {
							color: #0099FF;
							text-decoration: underline;
							cursor: pointer;
						}

						.s_DtaksTPAWidgetSkinunavailableMessageOverlayiconContainer {
							display: none;
						}

						.s_DtaksTPAWidgetSkinunavailableMessageOverlaydismissButton {
							display: none;
						}

						.s_DtaksTPAWidgetSkinunavailableMessageOverlaytextTitle {
							font-family: "Helvetica Neue", "HelveticaNeueW01-55Roma", "HelveticaNeueW02-55Roma", "HelveticaNeueW10-55Roma", Helvetica, Arial, sans-serif;
							display: none;
						}

						.s_DtaksTPAWidgetSkinunavailableMessageOverlay[data-state~="hideIframe"] .s_DtaksTPAWidgetSkinunavailableMessageOverlay_buttons {
							opacity: 1;
						}

						.s_DtaksTPAWidgetSkinunavailableMessageOverlay[data-state~="hideOverlay"] {
							display: none;
						}
					</style>
					<style type="text/css" data-styleid="hc1">
						.hc1screenWidthBackground {
							position: absolute;
							top: 0;
							right: 0;
							bottom: 0;
							left: 0;
						}

						.hc1[data-state~="fixedPosition"] {
							position: fixed !important;
							left: auto !important;
							z-index: 50;
						}

						.hc1[data-state~="fixedPosition"].hc1_footer {
							top: auto;
							bottom: 0;
						}

						.hc1bg {
							position: absolute;
							top: 0;
							right: 0;
							bottom: 0;
							left: 0;
						}

						.hc1inlineContent {
							position: absolute;
							top: 0;
							right: 0;
							bottom: 0;
							left: 0;
						}

						.hc1centeredContent {
							position: absolute;
							top: 0;
							right: 0;
							bottom: 0;
							left: 0;
						}
					</style>
					<style type="text/css" data-styleid="style-it2zq6n1">
						.style-it2zq6n1screenWidthBackground {
							position: absolute;
							top: 0;
							right: 0;
							bottom: 0;
							left: 0;
						}

						.style-it2zq6n1[data-state~="fixedPosition"] {
							position: fixed !important;
							left: auto !important;
							z-index: 50;
						}

						.style-it2zq6n1[data-state~="fixedPosition"].style-it2zq6n1_footer {
							top: auto;
							bottom: 0;
						}

						.style-it2zq6n1_bg {
							position: absolute;
							top: 0;
							right: 0;
							bottom: 0;
							left: 0;
							background-color: rgba(237, 239, 245, 1);
							border-top: 0px solid rgba(71, 74, 89, 1);
							border-bottom: 0px solid rgba(71, 74, 89, 1);
						}

						.style-it2zq6n1[data-state~="mobileView"] .style-it2zq6n1bg {
							left: 10px;
							right: 10px;
						}

						.style-it2zq6n1bg {
							position: absolute;
							top: 0px;
							right: 0;
							bottom: 0px;
							left: 0;
							background-color: rgba(237, 239, 245, 1);
							border-radius: 0;
						}

						.style-it2zq6n1inlineContent {
							position: absolute;
							top: 0;
							right: 0;
							bottom: 0;
							left: 0;
						}

						.style-it2zq6n1centeredContent {
							position: absolute;
							top: 0;
							right: 0;
							bottom: 0;
							left: 0;
						}
					</style>
					<style type="text/css" data-styleid="pc1">
						.pc1screenWidthBackground {
							position: absolute;
							top: 0;
							right: 0;
							bottom: 0;
							left: 0;
						}

						.pc1[data-state~="fixedPosition"] {
							position: fixed !important;
							left: auto !important;
							z-index: 50;
						}

						.pc1[data-state~="fixedPosition"].pc1_footer {
							top: auto;
							bottom: 0;
						}

						.pc1bg {
							position: absolute;
							top: 0;
							right: 0;
							bottom: 0;
							left: 0;
						}

						.pc1inlineContent {
							position: absolute;
							top: 0;
							right: 0;
							bottom: 0;
							left: 0;
						}

						.pc1centeredContent {
							position: absolute;
							top: 0;
							right: 0;
							bottom: 0;
							left: 0;
						}
					</style>
					<style type="text/css" data-styleid="style-it2yzpdn">
						.style-it2yzpdn>ul {
							display: table;
							width: 100%;
							box-sizing: border-box;
						}

						.style-it2yzpdn li {
							display: table;
							width: 100%;
						}

						.style-it2yzpdn a span {
							pointer-events: none;
						}

						.style-it2yzpdn_noLink {
							cursor: default !important;
						}

						.style-it2yzpdn_counter {
							margin: 0 10px;
							opacity: 0.6;
						}

						.style-it2yzpdnmenuContainer {
							padding: 0;
							margin: 0;
							position: relative;
						}

						.style-it2yzpdnmenuContainer .style-it2yzpdn_emptySubMenu {
							display: none !important;
						}

						.style-it2yzpdn_item {
							padding-left: 0px;
							padding-right: 0px;
							margin: 0;
							position: relative;
							display: block;
							cursor: pointer;
							list-style: none;
						}

						.style-it2yzpdn_item:last-child {
							border-bottom: 0;
						}

						.style-it2yzpdn_item.style-it2yzpdn_hover:not(.style-it2yzpdn_noLink)>.style-it2yzpdn_label {
							color: #BBC8DD;
						}

						.style-it2yzpdn_item.style-it2yzpdn_hover>.style-it2yzpdn_subMenu {
							opacity: 1;
							transition: all 0.4s ease 0s;
							display: block;
						}

						.style-it2yzpdn_item.style-it2yzpdn_selected>.style-it2yzpdn_label,
						.style-it2yzpdn_item.style-it2yzpdn_selectedContainer>.style-it2yzpdn_label {
							color: #FFFFFF;
						}

						.style-it2yzpdn_label {
							font: normal normal normal 20px/1.4em avenir-lt-w01_85-heavy1475544, sans-serif;
							color: #BBC8DD;
							display: inline;
							white-space: nowrap;
							overflow: hidden;
						}

						.style-it2yzpdn_subMenu {
							z-index: 999;
							min-width: 100%;
							opacity: 0;
							display: none;
							position: absolute;
							transition: all 0.4s ease 0s;
							background-color: rgba(71, 74, 89, 1);
						}

						.style-it2yzpdn_subMenu .style-it2yzpdn_label {
							font: normal normal normal 20px/1.4em avenir-lt-w01_85-heavy1475544, sans-serif;
						}

						.style-it2yzpdn_subMenu:before {
							content: " ";
							display: block;
							width: 0px;
							height: 100%;
							position: absolute;
							top: 0;
						}

						.style-it2yzpdn[data-state~="items-align-left"] .style-it2yzpdn_item {
							text-align: left;
						}

						.style-it2yzpdn[data-state~="items-align-center"] .style-it2yzpdn_item {
							text-align: center;
						}

						.style-it2yzpdn[data-state~="items-align-right"] .style-it2yzpdn_item {
							text-align: right;
						}

						.style-it2yzpdn[data-state~="subItems-align-left"] .style-it2yzpdn_subMenu>.style-it2yzpdn_item {
							text-align: left;
							padding-left: 0px;
							padding-right: 0px;
						}

						.style-it2yzpdn[data-state~="subItems-align-center"] .style-it2yzpdn_subMenu>.style-it2yzpdn_item {
							text-align: center;
							padding-left: 0px;
							padding-right: 0px;
						}

						.style-it2yzpdn[data-state~="subItems-align-right"] .style-it2yzpdn_subMenu>.style-it2yzpdn_item {
							text-align: right;
							padding-left: 0px;
							padding-right: 0px;
						}

						.style-it2yzpdn[data-state~="subMenuOpenSide-right"] .style-it2yzpdn_subMenu {
							left: 100%;
							float: left;
							margin-left: 0px;
						}

						.style-it2yzpdn[data-state~="subMenuOpenSide-right"] .style-it2yzpdn_subMenu:before {
							left: 0;
							margin-left: calc(-1 * 0px);
						}

						.style-it2yzpdn[data-state~="subMenuOpenSide-left"] .style-it2yzpdn_subMenu {
							right: 100%;
							float: right;
							margin-right: 0px;
						}

						.style-it2yzpdn[data-state~="subMenuOpenSide-left"] .style-it2yzpdn_subMenu:before {
							right: 0;
							margin-right: calc(-1 * 0px);
						}

						.style-it2yzpdn[data-open-direction~="subMenuOpenDir-down"] .style-it2yzpdn_subMenu {
							top: 0;
						}

						.style-it2yzpdn[data-open-direction~="subMenuOpenDir-up"] .style-it2yzpdn_subMenu {
							bottom: 0;
						}

						.style-it2yzpdnmenuContainer_with-validation-indication select:not([data-preview~="focus"]):invalid {
							border: solid 2px rgba(249, 249, 249, 1);
							background-color: rgba(255, 255, 255, 1);
						}

						.style-it2yzpdnmenuContainer select {
							border-radius: 5px;
							-webkit-appearance: none;
							-moz-appearance: none;
							font: normal normal normal 20px/1.4em avenir-lt-w01_85-heavy1475544, sans-serif;
							background-color: rgba(255, 255, 255, 1);
							color: #BBC8DD;
							border: solid 2px rgba(249, 249, 249, 1);
							margin: 0;
							padding: 0 45px;
							cursor: pointer;
							position: relative;
							max-width: 100%;
							min-width: 100%;
							min-height: 10px;
							height: 100%;
							text-overflow: ellipsis;
							white-space: nowrap;
							display: block;
						}

						.style-it2yzpdnmenuContainer select option {
							text-overflow: ellipsis;
							white-space: nowrap;
							overflow: hidden;
						}

						.style-it2yzpdnmenuContainer select.style-it2yzpdnmenuContainer_placeholder-style {
							color: #070A0E;
						}

						.style-it2yzpdnmenuContainer select:-moz-focusring {
							color: transparent;
							text-shadow: 0 0 0 #000;
						}

						.style-it2yzpdnmenuContainer select::-ms-expand {
							display: none;
						}

						.style-it2yzpdnmenuContainer select:focus::-ms-value {
							background: transparent;
						}

						.style-it2yzpdnmenuContainer select:not(.style-it2yzpdnmenuContainer_mobileCollection):hover,
						.style-it2yzpdnmenuContainer select:not(.style-it2yzpdnmenuContainer_mobileCollection)[data-preview~="hover"] {
							border: solid 2px rgba(249, 249, 249, 1);
							background-color: rgba(255, 255, 255, 1);
						}

						.style-it2yzpdnmenuContainer select:not(.style-it2yzpdnmenuContainer_mobileCollection):focus,
						.style-it2yzpdnmenuContainer select:not(.style-it2yzpdnmenuContainer_mobileCollection)[data-preview~="focus"] {
							border: solid 2px rgba(249, 249, 249, 1);
							background-color: rgba(255, 255, 255, 1);
						}

						.style-it2yzpdnmenuContainer select:not(.style-it2yzpdnmenuContainer_mobileCollection)[data-error="true"],
						.style-it2yzpdnmenuContainer select:not(.style-it2yzpdnmenuContainer_mobileCollection)[data-preview~="error"] {
							border: solid 2px rgba(249, 249, 249, 1);
							background-color: rgba(255, 255, 255, 1);
						}

						.style-it2yzpdnmenuContainer select:not(.style-it2yzpdnmenuContainer_mobileCollection):disabled,
						.style-it2yzpdnmenuContainer select:not(.style-it2yzpdnmenuContainer_mobileCollection)[data-disabled="true"],
						.style-it2yzpdnmenuContainer select:not(.style-it2yzpdnmenuContainer_mobileCollection)[data-preview~="disabled"] {
							border-width: 2px;
							border-color: rgba(204, 204, 204, 1);
							color: #FFFFFF;
							background-color: rgba(204, 204, 204, 1);
						}

						.style-it2yzpdnmenuContainer select:not(.style-it2yzpdnmenuContainer_mobileCollection):disabled+.style-it2yzpdnmenuContainerarrow,
						.style-it2yzpdnmenuContainer select:not(.style-it2yzpdnmenuContainer_mobileCollection)[data-disabled="true"]+.style-it2yzpdnmenuContainerarrow,
						.style-it2yzpdnmenuContainer select:not(.style-it2yzpdnmenuContainer_mobileCollection)[data-preview~="disabled"]+.style-it2yzpdnmenuContainerarrow {
							border-width: 2px;
							border-color: rgba(204, 204, 204, 1);
							color: #FFFFFF;
							border: none;
						}

						.style-it2yzpdnmenuContainerarrow {
							position: absolute;
							pointer-events: none;
							top: 0;
							box-sizing: border-box;
							padding-left: 20px;
							padding-right: 20px;
							height: inherit;
							display: -webkit-box;
							display: -webkit-flex;
							display: flex;
							-webkit-box-align: center;
							-webkit-align-items: center;
							align-items: center;
						}

						.style-it2yzpdnmenuContainerarrow .style-it2yzpdnmenuContainer_svg_container {
							width: 12px;
						}

						.style-it2yzpdnmenuContainerarrow .style-it2yzpdnmenuContainer_svg_container svg {
							height: 100%;
							fill: rgba(237, 239, 245, 1);
						}

						.style-it2yzpdnmenuContainer_left-direction {
							text-align-last: left;
						}

						.style-it2yzpdnmenuContainer_left-direction .style-it2yzpdnmenuContainerarrow,
						.style-it2yzpdnmenuContainer_left-direction select:hover+.style-it2yzpdnmenuContainerarrow,
						.style-it2yzpdnmenuContainer_left-direction select[data-preview~="hover"]+.style-it2yzpdnmenuContainerarrow,
						.style-it2yzpdnmenuContainer_left-direction select:focus+.style-it2yzpdnmenuContainerarrow,
						.style-it2yzpdnmenuContainer_left-direction select[data-preview~="focus"]+.style-it2yzpdnmenuContainerarrow,
						.style-it2yzpdnmenuContainer_left-direction[data-preview~="focus"] .style-it2yzpdnmenuContainerarrow,
						.style-it2yzpdnmenuContainer_left-direction select[data-error="true"]+.style-it2yzpdnmenuContainerarrow,
						.style-it2yzpdnmenuContainer_left-direction select[data-preview~="error"]+.style-it2yzpdnmenuContainerarrow {
							border-left: 0;
						}

						.style-it2yzpdnmenuContainer_left-direction .style-it2yzpdnmenuContainerarrow {
							right: 0;
						}

						.style-it2yzpdnmenuContainer_right-direction {
							text-align-last: right;
						}

						.style-it2yzpdnmenuContainer_right-direction .style-it2yzpdnmenuContainerarrow,
						.style-it2yzpdnmenuContainer_right-direction select:hover+.style-it2yzpdnmenuContainerarrow,
						.style-it2yzpdnmenuContainer_right-direction select[data-preview~="hover"]+.style-it2yzpdnmenuContainerarrow,
						.style-it2yzpdnmenuContainer_right-direction select:focus+.style-it2yzpdnmenuContainerarrow,
						.style-it2yzpdnmenuContainer_right-direction select[data-preview~="focus"]+.style-it2yzpdnmenuContainerarrow,
						.style-it2yzpdnmenuContainer_right-direction[data-preview~="focus"] .style-it2yzpdnmenuContainerarrow,
						.style-it2yzpdnmenuContainer_right-direction select[data-error="true"]+.style-it2yzpdnmenuContainerarrow,
						.style-it2yzpdnmenuContainer_right-direction select[data-preview~="error"]+.style-it2yzpdnmenuContainerarrow {
							border-right: 0;
						}

						.style-it2yzpdnmenuContainer_right-direction .style-it2yzpdnmenuContainerarrow {
							left: 0;
						}

						.style-it2yzpdnmenuContainer_center-direction {
							text-align-last: left;
							text-align-last: center;
						}

						.style-it2yzpdnmenuContainer_center-direction .style-it2yzpdnmenuContainerarrow,
						.style-it2yzpdnmenuContainer_center-direction select:hover+.style-it2yzpdnmenuContainerarrow,
						.style-it2yzpdnmenuContainer_center-direction select[data-preview~="hover"]+.style-it2yzpdnmenuContainerarrow,
						.style-it2yzpdnmenuContainer_center-direction select:focus+.style-it2yzpdnmenuContainerarrow,
						.style-it2yzpdnmenuContainer_center-direction select[data-preview~="focus"]+.style-it2yzpdnmenuContainerarrow,
						.style-it2yzpdnmenuContainer_center-direction[data-preview~="focus"] .style-it2yzpdnmenuContainerarrow,
						.style-it2yzpdnmenuContainer_center-direction select[data-error="true"]+.style-it2yzpdnmenuContainerarrow,
						.style-it2yzpdnmenuContainer_center-direction select[data-preview~="error"]+.style-it2yzpdnmenuContainerarrow {
							border-left: 0;
						}

						.style-it2yzpdnmenuContainer_center-direction .style-it2yzpdnmenuContainerarrow {
							right: 0;
						}

						.style-it2yzpdnmenuContainer_mobileMenuContainer {
							border: 0;
						}

						.style-it2yzpdnmenuContainer_mobileMenuContainer .style-it2yzpdnmenuContainerarrow .style-it2yzpdnmenuContainer_svg_container .style-it2yzpdnmenuContainericon {
							fill: #BBC8DD;
						}
					</style>
					<style type="text/css" data-styleid="txtNew">
						.txtNew {
							word-wrap: break-word;
							text-align: start;
							pointer-events: none;
						}

						.txtNew_override-left * {
							text-align: left !important;
						}

						.txtNew_override-right * {
							text-align: right !important;
						}

						.txtNew_override-center * {
							text-align: center !important;
						}

						.txtNew_override-justify * {
							text-align: justify !important;
						}

						.txtNew>* {
							pointer-events: auto;
						}

						.txtNew li {
							font-style: inherit;
							font-weight: inherit;
							line-height: inherit;
							letter-spacing: normal;
						}

						.txtNew ol,
						.txtNew ul {
							padding-left: 1.3em;
							padding-right: 0;
							margin-left: 0.5em;
							margin-right: 0;
							line-height: normal;
							letter-spacing: normal;
						}

						.txtNew ul {
							list-style-type: disc;
						}

						.txtNew ol {
							list-style-type: decimal;
						}

						.txtNew ul ul,
						.txtNew ol ul {
							list-style-type: circle;
						}

						.txtNew ul ul ul,
						.txtNew ol ul ul {
							list-style-type: square;
						}

						.txtNew ul ol ul,
						.txtNew ol ol ul {
							list-style-type: square;
						}

						.txtNew ul[dir="rtl"],
						.txtNew ol[dir="rtl"] {
							padding-left: 0;
							padding-right: 1.3em;
							margin-left: 0;
							margin-right: 0.5em;
						}

						.txtNew ul[dir="rtl"] ul,
						.txtNew ul[dir="rtl"] ol,
						.txtNew ol[dir="rtl"] ul,
						.txtNew ol[dir="rtl"] ol {
							padding-left: 0;
							padding-right: 1.3em;
							margin-left: 0;
							margin-right: 0.5em;
						}

						.txtNew p {
							margin: 0;
							line-height: normal;
							letter-spacing: normal;
						}

						.txtNew h1 {
							margin: 0;
							line-height: normal;
							letter-spacing: normal;
						}

						.txtNew h2 {
							margin: 0;
							line-height: normal;
							letter-spacing: normal;
						}

						.txtNew h3 {
							margin: 0;
							line-height: normal;
							letter-spacing: normal;
						}

						.txtNew h4 {
							margin: 0;
							line-height: normal;
							letter-spacing: normal;
						}

						.txtNew h5 {
							margin: 0;
							line-height: normal;
							letter-spacing: normal;
						}

						.txtNew h6 {
							margin: 0;
							line-height: normal;
							letter-spacing: normal;
						}

						.txtNew a {
							color: inherit;
						}
					</style>
					<style type="text/css" data-styleid="s_VOwPageGroupSkin"></style>
					<style type="text/css" data-styleid="p1">
						.p1bg {
							position: absolute;
							top: 0;
							right: 0;
							bottom: 0;
							left: 0;
						}

						.p1[data-state~="mobileView"] .p1bg {
							left: 10px;
							right: 10px;
						}

						.p1inlineContent {
							position: absolute;
							top: 0;
							right: 0;
							bottom: 0;
							left: 0;
						}
					</style>
					<style type="text/css" data-styleid="wp2">
						.wp2_zoomedin {
							cursor: url(https://static.parastorage.com/services/skins/2.1229.80/images/wysiwyg/core/themes/base/cursor_zoom_out.png), url(https://static.parastorage.com/services/skins/2.1229.80/images/wysiwyg/core/themes/base/cursor_zoom_out.cur), auto;
							overflow: hidden;
							display: block;
						}

						.wp2_zoomedout {
							cursor: url(https://static.parastorage.com/services/skins/2.1229.80/images/wysiwyg/core/themes/base/cursor_zoom_in.png), url(https://static.parastorage.com/services/skins/2.1229.80/images/wysiwyg/core/themes/base/cursor_zoom_in.cur), auto;
						}

						.wp2link {
							display: block;
							overflow: hidden;
						}

						.wp2img {
							overflow: hidden;
						}

						.wp2imgimage {
							position: static;
							box-shadow: #000 0 0 0;
							-webkit-user-select: none;
							-moz-user-select: none;
							-ms-user-select: none;
							user-select: none;
						}
					</style>
					<style type="text/css" data-styleid="b3">
						.b3 button.b3link {
							width: 100%;
						}

						.b3[data-state~="shouldUseFlex"] .b3link,
						.b3[data-state~="shouldUseFlex"] .b3labelwrapper {
							text-align: initial;
							display: -webkit-box;
							display: -webkit-flex;
							display: flex;
							-webkit-box-align: center;
							-webkit-align-items: center;
							align-items: center;
						}

						.b3[data-state~="shouldUseFlex"][data-state~="center"] .b3link,
						.b3[data-state~="shouldUseFlex"][data-state~="center"] .b3labelwrapper {
							-webkit-box-pack: center;
							-webkit-justify-content: center;
							justify-content: center;
						}

						.b3[data-state~="shouldUseFlex"][data-state~="left"] .b3link,
						.b3[data-state~="shouldUseFlex"][data-state~="left"] .b3labelwrapper {
							-webkit-box-pack: start;
							-webkit-justify-content: flex-start;
							justify-content: flex-start;
						}

						.b3[data-state~="shouldUseFlex"][data-state~="right"] .b3link,
						.b3[data-state~="shouldUseFlex"][data-state~="right"] .b3labelwrapper {
							-webkit-box-pack: end;
							-webkit-justify-content: flex-end;
							justify-content: flex-end;
						}

						.b3link {
							border-radius: 0;
							position: absolute;
							top: 0;
							right: 0;
							bottom: 0;
							left: 0;
							transition: border-color 0.4s ease 0s, background-color 0.4s ease 0s;
						}

						.b3label {
							font: normal normal normal 13px/1.4em avenir-lt-w01_35-light1475496, sans-serif;
							transition: color 0.4s ease 0s;
							color: #FFFFFF;
							display: inline-block;
							margin: calc(-1 * 1px) 1px 0;
							position: relative;
							white-space: nowrap;
						}

						.b3[data-state~="shouldUseFlex"] .b3label {
							margin: 0;
						}

						.b3[data-disabled="false"] .b3link {
							background-color: transparent;
							border: solid rgba(255, 255, 255, 1) 1px;
							cursor: pointer !important;
						}

						.b3[data-disabled="false"]:active[data-state~="mobile"] .b3link,
						.b3[data-disabled="false"]:hover[data-state~="desktop"] .b3link,
						.b3[data-disabled="false"][data-preview~="hover"] .b3link {
							background-color: rgba(255, 255, 255, 1);
							border-color: rgba(223, 49, 67, 1);
						}

						.b3[data-disabled="false"]:active[data-state~="mobile"] .b3label,
						.b3[data-disabled="false"]:hover[data-state~="desktop"] .b3label,
						.b3[data-disabled="false"][data-preview~="hover"] .b3label {
							color: #DF3143;
						}

						.b3[data-disabled="true"] .b3link,
						.b3[data-preview~="disabled"] .b3link {
							background-color: rgba(204, 204, 204, 1);
							border-color: rgba(204, 204, 204, 1);
						}

						.b3[data-disabled="true"] .b3label,
						.b3[data-preview~="disabled"] .b3label {
							color: #FFFFFF;
						}
					</style>
					<style type="text/css" data-styleid="style-it437nea1">
						.style-it437nea1 {
							background-color: transparent;
							box-sizing: border-box !important;
							position: relative;
							min-height: 50px;
						}

						.style-it437nea1[data-shouldhideoverflowcontent="true"] .style-it437nea1inlineContent {
							overflow: hidden;
						}

						.style-it437nea1navigationArrows[data-show-navigation-arrows="false"] {
							display: none;
						}

						.style-it437nea1dotsMenuWrapper[data-show-navigation-dots="false"] {
							display: none;
						}

						.style-it437nea1bg {
							position: absolute;
							top: 0;
							right: 0;
							bottom: 0;
							left: 0;
						}

						.style-it437nea1inlineContent {
							position: absolute;
							top: 0;
							right: 0;
							bottom: 0;
							left: 0;
						}

						.style-it437nea1inlineContentParent {
							position: absolute;
							top: 0;
							right: 0;
							bottom: 0;
							left: 0;
						}

						.style-it437nea1inlineContentParent.style-it437nea1_hide-overflow {
							overflow: hidden;
						}

						.style-it437nea1dotsMenuWrapper {
							display: -webkit-box;
							display: -webkit-flex;
							display: flex;
							-webkit-box-align: center;
							-webkit-align-items: center;
							align-items: center;
							position: absolute;
							width: 100%;
							pointer-events: none;
						}

						.style-it437nea1_navigation-arrows {
							position: absolute;
							width: 100%;
						}

						.style-it437nea1_navigation-dot {
							pointer-events: auto;
							position: relative;
							display: inline-block;
							cursor: pointer;
							border-radius: 50%;
							background-color: rgba(46, 73, 117, 1);
						}

						.style-it437nea1prevButton {
							-webkit-transform: scale(-1);
							transform: scale(-1);
						}

						.style-it437nea1_navigation-dot.style-it437nea1_selected {
							background-color: transparent;
							border: 2px solid rgba(46, 73, 117, 1);
						}

						.style-it437nea1_btn {
							position: absolute;
							cursor: pointer;
						}

						.style-it437nea1_btn:hover {
							opacity: .6;
						}

						.style-it437nea1_btn svg {
							fill: rgba(46, 73, 117, 1);
						}
					</style>
					<style type="text/css" data-styleid="style-it437nj7">
						.style-it437nj7_zoomedin {
							cursor: url(https://static.parastorage.com/services/skins/2.1229.80/images/wysiwyg/core/themes/base/cursor_zoom_out.png), url(https://static.parastorage.com/services/skins/2.1229.80/images/wysiwyg/core/themes/base/cursor_zoom_out.cur), auto;
							overflow: hidden;
							display: block;
						}

						.style-it437nj7_zoomedout {
							cursor: url(https://static.parastorage.com/services/skins/2.1229.80/images/wysiwyg/core/themes/base/cursor_zoom_in.png), url(https://static.parastorage.com/services/skins/2.1229.80/images/wysiwyg/core/themes/base/cursor_zoom_in.cur), auto;
						}

						.style-it437nj7link {
							display: block;
							border-radius: 50%;
							border: 8px solid rgba(237, 239, 245, 1);
							background-color: rgba(237, 239, 245, 1);
							overflow: hidden;
						}

						.style-it437nj7img {
							border-radius: 50%;
							overflow: hidden;
						}

						.style-it437nj7imgimage {
							position: static;
							box-shadow: #000 0 0 0;
							-webkit-user-select: none;
							-moz-user-select: none;
							-ms-user-select: none;
							user-select: none;
						}
					</style>
					<style type="text/css" data-styleid="style-jfsfe6ud">
						.style-jfsfe6ud button.style-jfsfe6udlink {
							width: 100%;
						}

						.style-jfsfe6ud[data-state~="shouldUseFlex"] .style-jfsfe6udlink,
						.style-jfsfe6ud[data-state~="shouldUseFlex"] .style-jfsfe6udlabelwrapper {
							text-align: initial;
							display: -webkit-box;
							display: -webkit-flex;
							display: flex;
							-webkit-box-align: center;
							-webkit-align-items: center;
							align-items: center;
						}

						.style-jfsfe6ud[data-state~="shouldUseFlex"][data-state~="center"] .style-jfsfe6udlink,
						.style-jfsfe6ud[data-state~="shouldUseFlex"][data-state~="center"] .style-jfsfe6udlabelwrapper {
							-webkit-box-pack: center;
							-webkit-justify-content: center;
							justify-content: center;
						}

						.style-jfsfe6ud[data-state~="shouldUseFlex"][data-state~="left"] .style-jfsfe6udlink,
						.style-jfsfe6ud[data-state~="shouldUseFlex"][data-state~="left"] .style-jfsfe6udlabelwrapper {
							-webkit-box-pack: start;
							-webkit-justify-content: flex-start;
							justify-content: flex-start;
						}

						.style-jfsfe6ud[data-state~="shouldUseFlex"][data-state~="right"] .style-jfsfe6udlink,
						.style-jfsfe6ud[data-state~="shouldUseFlex"][data-state~="right"] .style-jfsfe6udlabelwrapper {
							-webkit-box-pack: end;
							-webkit-justify-content: flex-end;
							justify-content: flex-end;
						}

						.style-jfsfe6udlink {
							border-radius: 20px;
							position: absolute;
							top: 0;
							right: 0;
							bottom: 0;
							left: 0;
							transition: border-color 0.4s ease 0s, background-color 0.4s ease 0s;
							box-shadow: 0.00px 3.00px 0px 0px rgba(86, 111, 184, 0.6);
						}

						.style-jfsfe6udlabel {
							font: normal normal normal 14px/1.4em clarendon-w01-medium-692107, clarendon-w02-medium-693834, serif;
							transition: color 0.4s ease 0s;
							color: #FFFFFF;
							display: inline-block;
							margin: calc(-1 * 0px) 0px 0;
							position: relative;
							white-space: nowrap;
						}

						.style-jfsfe6ud[data-state~="shouldUseFlex"] .style-jfsfe6udlabel {
							margin: 0;
						}

						.style-jfsfe6ud[data-disabled="false"] .style-jfsfe6udlink {
							background-color: rgba(234, 143, 152, 1);
							border: solid rgba(43, 104, 156, 1) 0px;
							cursor: pointer !important;
						}

						.style-jfsfe6ud[data-disabled="false"]:active[data-state~="mobile"] .style-jfsfe6udlink,
						.style-jfsfe6ud[data-disabled="false"]:hover[data-state~="desktop"] .style-jfsfe6udlink,
						.style-jfsfe6ud[data-disabled="false"][data-preview~="hover"] .style-jfsfe6udlink {
							background-color: rgba(62, 86, 158, 1);
							border-color: rgba(83, 110, 183, 1);
						}

						.style-jfsfe6ud[data-disabled="false"]:active[data-state~="mobile"] .style-jfsfe6udlabel,
						.style-jfsfe6ud[data-disabled="false"]:hover[data-state~="desktop"] .style-jfsfe6udlabel,
						.style-jfsfe6ud[data-disabled="false"][data-preview~="hover"] .style-jfsfe6udlabel {
							color: #FFFFFF;
						}

						.style-jfsfe6ud[data-disabled="true"] .style-jfsfe6udlink,
						.style-jfsfe6ud[data-preview~="disabled"] .style-jfsfe6udlink {
							background-color: rgba(204, 204, 204, 1);
							border-color: rgba(204, 204, 204, 1);
						}

						.style-jfsfe6ud[data-disabled="true"] .style-jfsfe6udlabel,
						.style-jfsfe6ud[data-preview~="disabled"] .style-jfsfe6udlabel {
							color: #FFFFFF;
						}
					</style>
					<style type="text/css" data-styleid="style-it437nf7">
						.style-it437nf7borderNode {
							border: 0px solid rgba(149, 33, 45, 1);
							position: absolute;
							top: 0;
							right: 0;
							bottom: 0;
							left: 0;
							pointer-events: none;
						}

						.style-it437nf7inlineContent {
							position: absolute;
							top: 0;
							right: 0;
							bottom: 0;
							left: 0;
						}

						.style-it437nf7inlineContentParent {
							position: absolute;
							width: 100%;
							height: 100%;
						}

						.style-it437nf7[data-shouldhideoverflowcontent="true"] {
							overflow: hidden;
						}
					</style>
					<style type="text/css" data-styleid="lb1">
						.lb1itemsContainer {
							position: absolute;
							width: 100%;
							height: 100%;
							white-space: nowrap;
						}

						.lb1itemsContainer>li:last-child {
							margin: 0 !important;
						}

						.lb1[data-state~="mobileView"] .lb1itemsContainer {
							position: absolute;
							width: 100%;
							height: 100%;
							white-space: normal;
						}

						.lb1 a {
							display: block;
							height: 100%;
						}

						.lb1imageItemlink {
							cursor: pointer;
						}

						.lb1imageItemimageimage {
							position: static;
							box-shadow: #000 0 0 0;
							-webkit-user-select: none;
							-moz-user-select: none;
							-ms-user-select: none;
							user-select: none;
						}
					</style>
					<style type="text/css" data-styleid="style-jfsfaqj8">
						.style-jfsfaqj8 button.style-jfsfaqj8link {
							width: 100%;
						}

						.style-jfsfaqj8[data-state~="shouldUseFlex"] .style-jfsfaqj8link,
						.style-jfsfaqj8[data-state~="shouldUseFlex"] .style-jfsfaqj8labelwrapper {
							text-align: initial;
							display: -webkit-box;
							display: -webkit-flex;
							display: flex;
							-webkit-box-align: center;
							-webkit-align-items: center;
							align-items: center;
						}

						.style-jfsfaqj8[data-state~="shouldUseFlex"][data-state~="center"] .style-jfsfaqj8link,
						.style-jfsfaqj8[data-state~="shouldUseFlex"][data-state~="center"] .style-jfsfaqj8labelwrapper {
							-webkit-box-pack: center;
							-webkit-justify-content: center;
							justify-content: center;
						}

						.style-jfsfaqj8[data-state~="shouldUseFlex"][data-state~="left"] .style-jfsfaqj8link,
						.style-jfsfaqj8[data-state~="shouldUseFlex"][data-state~="left"] .style-jfsfaqj8labelwrapper {
							-webkit-box-pack: start;
							-webkit-justify-content: flex-start;
							justify-content: flex-start;
						}

						.style-jfsfaqj8[data-state~="shouldUseFlex"][data-state~="right"] .style-jfsfaqj8link,
						.style-jfsfaqj8[data-state~="shouldUseFlex"][data-state~="right"] .style-jfsfaqj8labelwrapper {
							-webkit-box-pack: end;
							-webkit-justify-content: flex-end;
							justify-content: flex-end;
						}

						.style-jfsfaqj8link {
							border-radius: 0;
							position: absolute;
							top: 0;
							right: 0;
							bottom: 0;
							left: 0;
							transition: border-color 0.4s ease 0s, background-color 0.4s ease 0s;
						}

						.style-jfsfaqj8label {
							font: normal normal normal 10px/1.4em lulo-clean-w01-one-bold, sans-serif;
							transition: color 0.4s ease 0s;
							color: #59514D;
							display: inline-block;
							margin: calc(-1 * 2px) 2px 0;
							position: relative;
							white-space: nowrap;
						}

						.style-jfsfaqj8[data-state~="shouldUseFlex"] .style-jfsfaqj8label {
							margin: 0;
						}

						.style-jfsfaqj8[data-disabled="false"] .style-jfsfaqj8link {
							background-color: transparent;
							border: solid rgba(123, 115, 111, 1) 2px;
							cursor: pointer !important;
						}

						.style-jfsfaqj8[data-disabled="false"]:active[data-state~="mobile"] .style-jfsfaqj8link,
						.style-jfsfaqj8[data-disabled="false"]:hover[data-state~="desktop"] .style-jfsfaqj8link,
						.style-jfsfaqj8[data-disabled="false"][data-preview~="hover"] .style-jfsfaqj8link {
							background-color: rgba(123, 115, 111, 1);
							border-color: transparent;
						}

						.style-jfsfaqj8[data-disabled="false"]:active[data-state~="mobile"] .style-jfsfaqj8label,
						.style-jfsfaqj8[data-disabled="false"]:hover[data-state~="desktop"] .style-jfsfaqj8label,
						.style-jfsfaqj8[data-disabled="false"][data-preview~="hover"] .style-jfsfaqj8label {
							color: #FFFFFF;
						}

						.style-jfsfaqj8[data-disabled="true"] .style-jfsfaqj8link,
						.style-jfsfaqj8[data-preview~="disabled"] .style-jfsfaqj8link {
							background-color: rgba(204, 204, 204, 1);
							border-color: rgba(204, 204, 204, 1);
						}

						.style-jfsfaqj8[data-disabled="true"] .style-jfsfaqj8label,
						.style-jfsfaqj8[data-preview~="disabled"] .style-jfsfaqj8label {
							color: #FFFFFF;
						}
					</style>
					<style type="text/css" data-styleid="style-it437nft">
						.style-it437nft {
							border-bottom: 7px solid rgba(223, 49, 67, 1);
							height: 0 !important;
							min-height: 0 !important;
						}
					</style>
					<style type="text/css" data-styleid="siteBackground">
						.siteBackground {
							width: 100%;
							position: absolute;
						}

						.siteBackgroundbgBeforeTransition {
							position: absolute;
							top: 0;
						}

						.siteBackgroundbgAfterTransition {
							position: absolute;
							top: 0;
						}
					</style>
					<style type="text/css" data-styleid="loginDialog">
						.loginDialog {
							position: fixed;
							width: 100%;
							height: 100%;
							z-index: 99;
							font-family: Arial, sans-serif;
							font-size: 1em;
							color: #9C9C9C;
						}

						.loginDialogblockingLayer {
							background-color: rgba(85, 85, 85, 0.75);
							position: fixed;
							top: 0;
							right: 0;
							bottom: 0;
							left: 0;
							visibility: visible;
							zoom: 1;
							overflow: auto;
						}

						.loginDialogdialog {
							background-color: rgba(170, 170, 170, 0.7);
							width: 455px;
							position: fixed;
							padding: 20px;
						}

						.loginDialog_wrapper {
							background-color: rgba(255, 255, 255, 1);
							padding: 45px 40px 0 40px;
						}

						.loginDialogxButton {
							position: absolute;
							top: -14px;
							right: -14px;
							cursor: pointer;
							background: transparent url(https://static.parastorage.com/services/skins/2.1229.80/images/wysiwyg/core/themes/base/viewer_login_sprite.png) no-repeat right top;
							height: 30px;
							width: 30px;
						}

						.loginDialogxButton:hover {
							background-position: right -80px;
						}

						.loginDialogheader {
							padding-bottom: 25px;
							line-height: 30px;
						}

						.loginDialogfavIcon {
							float: left;
							margin: 7px 7px 0 0;
							width: 16px;
							height: 16px;
						}

						.loginDialogtitle {
							font-size: 20px;
							font-weight: bold;
							color: #555555;
						}

						.loginDialog[data-state~="mobile"] {
							position: absolute;
							width: 100%;
							height: 100%;
							z-index: 99;
							font-family: Arial, sans-serif;
							font-size: 1em;
							color: #9C9C9C;
							top: 0;
						}

						.loginDialog[data-state~="mobile"] .loginDialogheader {
							padding-bottom: 10px;
							line-height: 30px;
						}

						.loginDialog[data-state~="mobile"] .loginDialogfavIcon {
							display: none;
						}

						.loginDialog[data-state~="mobile"] .loginDialogtitle {
							font-size: 14px;
						}

						.loginDialog[data-state~="mobile"] .loginDialogdialog {
							width: 260px;
							padding: 10px;
							position: absolute;
						}

						.loginDialog[data-state~="mobile"] .loginDialog_footer {
							margin-top: 0;
							padding-bottom: 10px;
						}

						.loginDialog[data-state~="mobile"] .loginDialogcancel {
							font-size: 14px;
							line-height: 30px;
						}

						.loginDialog[data-state~="mobile"] .loginDialog_wrapper {
							padding: 14px 12px 0 12px;
						}

						.loginDialog[data-state~="mobile"] .loginDialogsubmitButton {
							height: 30px;
							width: 100px;
							font-size: 14px;
						}

						.loginDialog_forgot {
							text-align: left;
							font-size: 12px;
						}

						.loginDialog_forgot a {
							color: #0198ff;
							border-bottom: 1px solid #0198ff;
						}

						.loginDialog_forgot a:hover {
							color: #0044ff;
							border-bottom: 1px solid #0044ff;
						}

						.loginDialog_error {
							font-size: 12px;
							color: #d74401;
							text-align: right;
						}

						.loginDialog_footer {
							width: 100%;
							margin-top: 27px;
							padding-bottom: 40px;
						}

						.loginDialogcancel {
							color: #9C9C9C;
							font-size: 18px;
							text-decoration: underline;
							line-height: 36px;
						}

						.loginDialogcancel:hover {
							color: #9c3c3c;
						}

						.loginDialogpasswordInput label {
							font-size: 14px;
						}

						.loginDialogpasswordInput label[data-type="password"] {
							font-size: 14px;
							line-height: 30px;
							height: 30px;
						}

						.loginDialogsubmitButton {
							float: right;
							cursor: pointer;
							border: solid 2px #0064a8;
							height: 36px;
							width: 143px;
							background: transparent url(https://static.parastorage.com/services/skins/2.1229.80/images/wysiwyg/core/themes/base/viewer_login_sprite.png) repeat-x right -252px;
							color: #ffffff;
							font-size: 24px;
							font-weight: bold;
							box-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
						}

						.loginDialogsubmitButton:hover {
							background-position: right -352px;
							border-color: #004286;
						}

						.loginDialog[data-state="normal"] .loginDialogerror {
							display: none;
						}

						.loginDialog[data-state="error"] .loginDialogerror {
							display: block;
							font-size: 12px;
							color: #d74401;
							text-align: right;
						}

						.loginDialog[data-state="error"] .loginDialogpasswordInput {
							border-color: #d74401;
						}

						.loginDialogpasswordInput {
							font-size: 1em;
						}

						.loginDialogpasswordInput label {
							float: none;
							font-size: 17px;
							line-height: 25px;
							color: #585858;
						}

						.loginDialogpasswordInput[data-state~="mobile"] label {
							float: none;
							font-size: 14px;
							line-height: 20px;
							color: #585858;
						}

						.loginDialogpasswordInputinput {
							padding: 0 15px;
							width: 100%;
							height: 42px;
							font-size: 19px;
							line-height: 42px;
							color: #0198ff;
							margin: 0 -3px;
							background: transparent url(https://static.parastorage.com/services/skins/2.1229.80/images/wysiwyg/core/themes/base/viewer_login_sprite.png) repeat-x right -170px;
							border: solid 1px #a1a1a1;
							box-sizing: border-box;
						}

						.loginDialogpasswordInput[data-state~="mobile"] .loginDialogpasswordInputinput {
							padding: 0 15px;
							width: 100%;
							height: 30px;
							font-size: 14px;
							line-height: 30px;
							color: #0198ff;
							margin: 0 -3px;
							background: transparent url(https://static.parastorage.com/services/skins/2.1229.80/images/wysiwyg/core/themes/base/viewer_login_sprite.png) repeat-x right -170px;
							border: solid 1px #a1a1a1;
							box-sizing: border-box;
						}

						.loginDialogpasswordInputinput[data-type="password"] {
							font-size: 38px;
						}

						.loginDialogpasswordInput[data-state~="mobile"] .loginDialogpasswordInputinput[data-type="password"] {
							font-size: 14px;
						}

						.loginDialogpasswordInputerrorMessage {
							display: block;
							font-size: 12px;
							color: #d74401;
							text-align: right;
							height: 15px;
						}

						.loginDialogpasswordInput:not([data-state~="invalid"]) .loginDialogpasswordInputerrorMessage {
							visibility: hidden;
						}

						.loginDialogpasswordInput[data-state~="invalid"] .loginDialogpasswordInputerrorMessage {
							visibility: visible;
						}

						.loginDialogpasswordInput[data-state~="invalid"] input {
							border-color: #d74401;
						}

						.loginDialogpasswordInput[data-state~="invalid"] .loginDialogpasswordInputinput {
							border-color: #ff0000;
						}
					</style>
					<style type="text/css" data-styleid="strc1">
						.strc1inlineContent {
							position: absolute;
							top: 0;
							right: 0;
							bottom: 0;
							left: 0;
						}

						.strc1[data-responsive] {
							display: -ms-grid;
							display: grid;
							-webkit-box-pack: center;
							-webkit-justify-content: center;
							justify-content: center;
							grid-template-columns: 1fr;
							-ms-grid-columns: 1fr;
						}

						.strc1[data-responsive]>.strc1inlineContent {
							display: -webkit-box;
							display: -webkit-flex;
							display: flex;
						}

						.strc1[data-responsive]>* {
							position: relative;
							grid-row-start: 1;
							grid-column-start: 1;
							grid-row-end: 2;
							grid-column-end: 2;
							-ms-grid-row-span: 1;
							-ms-grid-column-span: 1;
							margin: 0 auto;
						}
					</style>
					<style type="text/css">
						.testStyles {
							position: absolute;
							display: none;
							z-index: 1
						}
					</style>
					<div class="testStyles"></div>
				</div>
				<div id="SITE_BACKGROUND" class="siteBackground" style="position: absolute; top: 0px; height: 1239px; width: 1343px;">
					<div id="SITE_BACKGROUND_previous_noPrev" class="siteBackgroundprevious" style="width: 100%; height: 100%;">
						<div id="SITE_BACKGROUNDpreviousImage" class="siteBackgroundpreviousImage"></div>
						<div id="SITE_BACKGROUNDpreviousVideo" class="siteBackgroundpreviousVideo"></div>
						<div id="SITE_BACKGROUND_previousOverlay_noPrev" class="siteBackgroundpreviousOverlay"></div>
					</div>
					<div id="SITE_BACKGROUND_current_s2vg5_desktop_bg" data-position="fixed" class="siteBackgroundcurrent" style="top: 0px; background-color: rgb(7, 10, 14); position: fixed; width: 100%; height: 100%;">
						<div id="SITE_BACKGROUND_currentImage_s2vg5_desktop_bg" data-type="bgimage" data-height="120%" class="siteBackgroundcurrentImage" style="position: absolute; top: 0px; width: 100%; opacity: 0.36; background-size: auto; background-position: center top; background-repeat: repeat; height: 120%; background-image: url(&quot;https://static.wixstatic.com/media/5dde22_506bb3e57f7d48229ccc2a12fe5c9bd9~mv2.jpg/v1/fill/w_900,h_614,al_c,q_85/5dde22_506bb3e57f7d48229ccc2a12fe5c9bd9~mv2.webp&quot;); transform: translate3d(0px, -1.32957px, 0px);"
							data-image-css="{&quot;backgroundSize&quot;:&quot;auto&quot;,&quot;backgroundPosition&quot;:&quot;center top&quot;,&quot;backgroundRepeat&quot;:&quot;repeat&quot;,&quot;height&quot;:&quot;120%&quot;}"></div>
						<div id="SITE_BACKGROUNDcurrentVideo" class="siteBackgroundcurrentVideo"></div>
						<div id="SITE_BACKGROUND_currentOverlay_s2vg5_desktop_bg" class="siteBackgroundcurrentOverlay" style="position: absolute; top: 0px; width: 100%; height: 100%;"></div>
					</div>
				</div>
				<div class="SITE_ROOT" id="SITE_ROOT" style="width: 980px; top: 0px; padding-bottom: 40px;">
					<div id="masterPage" data-ref="masterPage" style="width: 980px; position: static; top: 0px; height: 500px;">
						<header data-is-mobile="false" data-site-width="980" data-state="" class="hc1" id="SITE_HEADER" style="width: 980px; position: absolute; min-width: 980px; margin-left: 0px; top: 0px; height: 5px; left: 0px;">
							<div id="SITE_HEADERscreenWidthBackground" class="hc1screenWidthBackground" style="width: 1343px; left: -181.5px;"></div>
							<div id="SITE_HEADERcenteredContent" class="hc1centeredContent">
								<div id="SITE_HEADERbg" class="hc1bg"></div>
								<div id="SITE_HEADERinlineContent" class="hc1inlineContent"></div>
							</div>
						</header>
						<div data-is-mobile="false" data-site-width="980" class="pc1" data-state="" id="PAGES_CONTAINER" style="left: 180px; width: 980px; position: absolute; min-width: 980px; margin-left: 0px; top: 5px; height: 1024px;">
							<div id="PAGES_CONTAINERscreenWidthBackground" class="pc1screenWidthBackground" style="left: -181.5px; width: 1343px;"></div>
							<div id="PAGES_CONTAINERcenteredContent" class="pc1centeredContent">
								<div id="PAGES_CONTAINERbg" class="pc1bg"></div>
								<div id="PAGES_CONTAINERinlineContent" class="pc1inlineContent">
									<div class="s_VOwPageGroupSkin" id="SITE_PAGES" style="left: 0px; width: 980px; position: absolute; top: 0px; height: 1024px;">
										<div data-ismobile="false" data-is-mesh-layout="false" class="p1" id="s2vg5" style="left: 0px; width: 980px; position: absolute; min-width: 980px; min-height: 1024px; top: 0px; height: 1024px;">
											<div id="s2vg5bg" class="p1bg"></div>
											<div id="s2vg5inlineContent" class="p1inlineContent">
												<div data-packed="true" class="txtNew" id="comp-it437nmg" style="left: 138px; width: 703px; position: absolute; top: 91px;">
													<h1 class="font_0" style="line-height:1.2em; text-align:center;"><?php echo $_SESSION['user']; ?></h1></div>
				<div data-packed="true" class="txtNew" id="comp-jfseknlm" style="left: 184px; width: 180px; position: absolute; top: 61px;">
					<h2 class="font_2" style="font-size:31px;"><span style="font-size:31px;"><span class="color_16"><span style="font-family:futura-lt-w01-light,sans-serif;">profil penjual</span></span></span></h2></div>
				<div data-exact-height="23" data-content-padding-horizontal="0" data-content-padding-vertical="0" title="" class="wp2" id="comp-jfseuvg1" style="left: 552px; position: absolute; top: 182px; width: 23px; height: 23px;">
					<div id="comp-jfseuvg1link" class="wp2link" style="width: 23px; height: 23px;">
						<div data-style="" class="wp2img" id="comp-jfseuvg1img" style="position: relative; width: 23px; height: 23px;"><img id="comp-jfseuvg1imgimage" alt="" data-type="image" src="./Mysite_files/5dde22_8b57b2eb1c9e4d529050fdcb4a6f2960_mv2.png" style="width: 23px; height: 23px; object-fit: cover;"></div>
					</div>
				</div>
				<div data-packed="true" class="txtNew" id="comp-it437nmk" style="left: 406px; width: 154px; position: absolute; top: 179px;">
					<h5 class="font_5" style="text-align:center;"><span class="color_22"><span style="letter-spacing:0.25em;">Verified</span></span></h5></div>
				<div role="region" aria-label="Slideshow" data-true-fullwidth="false" class="style-it437nea1" id="comp-it437ne7" style="left: 0px; width: 980px; position: absolute; min-width: 980px; margin-left: 0px; top: 399px; height: 514px;">
					<div id="comp-it437ne7bg" class="style-it437nea1bg"></div>
					<div id="comp-it437ne7shownOnAllSlides" class="style-it437nea1shownOnAllSlides"></div>
					<div class="style-it437nea1inlineContentParent" tabindex="-1" id="comp-it437ne7inlineContentParent" style="left: -182px; width: 100%;">
						<div aria-live="polite" id="comp-it437ne7inlineContent" class="style-it437nea1inlineContent" style="left: 182px; width: 100%p">
							<div data-flexibleboxheight="false" data-parent-id="comp-it437ne7" data-min-height="514" class="style-it437nf7" id="comp-it437nec" style="left: 0px; width: 980px; position: absolute; min-width: 980px; margin-left: 0px; top: 0px; height: 514px;">
								<div data-enable-video="true" data-bg-effect-name="" class="style-it437nf7balata" id="comp-it437necbalata" style="position: absolute; top: 0px; height: 100%; overflow: hidden; pointer-events: auto; left: -182px; width: 1343px; clip: rect(0px, 1343px, 514px, 0px);">
									<div class="bgColor" id="comp-it437necbalatabgcolor" style="width: 100%; height: 100%; background-color: rgb(237, 239, 245); position: absolute;">
										<div id="comp-it437necbalatabgcoloroverlay" class="bgColoroverlay" style="width: 100%; height: 100%; position: absolute;"></div>
									</div>
								</div>
								<div id="comp-it437necborderNode" class="style-it437nf7borderNode"></div>
								<div id="comp-it437necinlineContentParent" class="style-it437nf7inlineContentParent" style="overflow: visible; left: -182px; width: 1343px;">
									<div id="comp-it437necinlineContent" class="style-it437nf7inlineContent" style="left: 182px; width: 980px;">
										<div data-hide-prejs="true" class="lb1" id="comp-it437nfg" style="left: 798px; width: 167px; position: absolute; top: 18px; height: 32px;">
											<ul aria-label="Social bar" id="comp-it437nfgitemsContainer" class="lb1itemsContainer">
												<li class="lb1imageItem" id="comp-it437nfg0image" style="width: 32px; height: 32px; margin-bottom: 0px; margin-right: 13px; display: inline-block;">
													<a id="comp-it437nfg0imagelink" class="lb1imageItemlink" style="cursor: default;">
														<div data-image-info="{&quot;imageData&quot;:{&quot;type&quot;:&quot;Image&quot;,&quot;id&quot;:&quot;dataItem-jfse4941&quot;,&quot;metaData&quot;:{&quot;isPreset&quot;:false,&quot;schemaVersion&quot;:&quot;2.0&quot;,&quot;isHidden&quot;:false},&quot;title&quot;:&quot;Facebook Social Icon&quot;,&quot;uri&quot;:&quot;e316f544f9094143b9eac01f1f19e697.png&quot;,&quot;width&quot;:200,&quot;height&quot;:200,&quot;alt&quot;:&quot;Facebook Social Icon&quot;},&quot;displayMode&quot;:&quot;fill&quot;}"
														  data-style="position:absolute;width:32;height:32" class="lb1imageItemimage" id="comp-it437nfg0imageimage" style="width: 32px; height: 32px; position: absolute;"><img id="comp-it437nfg0imageimageimage" alt="Facebook Social Icon" data-type="image" src="./Mysite_files/e316f544f9094143b9eac01f1f19e697.png" style="width: 32px; height: 32px; object-fit: cover;"></div>
													</a>
												</li>
												<li class="lb1imageItem" id="comp-it437nfg1image" style="width: 32px; height: 32px; margin-bottom: 0px; margin-right: 13px; display: inline-block;">
													<a id="comp-it437nfg1imagelink" class="lb1imageItemlink" style="cursor: default;">
														<div data-image-info="{&quot;imageData&quot;:{&quot;type&quot;:&quot;Image&quot;,&quot;id&quot;:&quot;dataItem-jfse3ski&quot;,&quot;metaData&quot;:{&quot;isPreset&quot;:false,&quot;schemaVersion&quot;:&quot;2.0&quot;,&quot;isHidden&quot;:false},&quot;title&quot;:&quot;vektor line3&quot;,&quot;uri&quot;:&quot;5dde22_3bcf4a1be5a74a4180d756276c2ab455~mv2.png&quot;,&quot;width&quot;:492,&quot;height&quot;:492,&quot;alt&quot;:&quot;vektor line3&quot;},&quot;displayMode&quot;:&quot;fill&quot;}"
														  data-style="position:absolute;width:32;height:32" class="lb1imageItemimage" id="comp-it437nfg1imageimage" style="width: 32px; height: 32px; position: absolute;"><img id="comp-it437nfg1imageimageimage" alt="vektor line3" data-type="image" src="./Mysite_files/5dde22_3bcf4a1be5a74a4180d756276c2ab455_mv2.png" style="width: 32px; height: 32px; object-fit: cover;"></div>
													</a>
												</li>
												<li class="lb1imageItem" id="comp-it437nfg2image" style="width: 32px; height: 32px; margin-bottom: 0px; margin-right: 13px; display: inline-block;">
													<a id="comp-it437nfg2imagelink" class="lb1imageItemlink" style="cursor: default;">
														<div data-image-info="{&quot;imageData&quot;:{&quot;type&quot;:&quot;Image&quot;,&quot;id&quot;:&quot;dataItem-jfse2dn31&quot;,&quot;metaData&quot;:{&quot;isPreset&quot;:false,&quot;schemaVersion&quot;:&quot;2.0&quot;,&quot;isHidden&quot;:false},&quot;title&quot;:&quot;Phone-PNG-File&quot;,&quot;uri&quot;:&quot;5dde22_33106227224b4ac5a67add4efad13a07~mv2_d_1969_1969_s_2.png&quot;,&quot;width&quot;:1969,&quot;height&quot;:1969,&quot;alt&quot;:&quot;Phone-PNG-File&quot;},&quot;displayMode&quot;:&quot;fill&quot;}"
														  data-style="position:absolute;width:32;height:32" class="lb1imageItemimage" id="comp-it437nfg2imageimage" style="width: 32px; height: 32px; position: absolute;"><img id="comp-it437nfg2imageimageimage" alt="Phone-PNG-File" data-type="image" src="./Mysite_files/5dde22_33106227224b4ac5a67add4efad13a07_mv2_d_1969_1969_s_2.png" style="width: 32px; height: 32px; object-fit: cover;"></div>
													</a>
												</li>
												<li class="lb1imageItem" id="comp-it437nfg3image" style="width: 32px; height: 32px; margin-bottom: 0px; margin-right: 13px; display: inline-block;">
													<a id="comp-it437nfg3imagelink" class="lb1imageItemlink" style="cursor: default;">
														<div data-image-info="{&quot;imageData&quot;:{&quot;type&quot;:&quot;Image&quot;,&quot;id&quot;:&quot;dataItem-jfsejsu2&quot;,&quot;metaData&quot;:{&quot;isPreset&quot;:false,&quot;schemaVersion&quot;:&quot;2.0&quot;,&quot;isHidden&quot;:false},&quot;title&quot;:&quot;ID_Card-512&quot;,&quot;uri&quot;:&quot;5dde22_6aedd3428bf84819aa31e11b45338b12~mv2.png&quot;,&quot;width&quot;:512,&quot;height&quot;:512,&quot;alt&quot;:&quot;ID_Card-512&quot;},&quot;displayMode&quot;:&quot;fill&quot;}"
														  data-style="position:absolute;width:32;height:32" class="lb1imageItemimage" id="comp-it437nfg3imageimage" style="width: 32px; height: 32px; position: absolute;"><img id="comp-it437nfg3imageimageimage" alt="ID_Card-512" data-type="image" src="./Mysite_files/5dde22_6aedd3428bf84819aa31e11b45338b12_mv2.png" style="width: 32px; height: 32px; object-fit: cover;"></div>
													</a>
												</li>
											</ul>
										</div>
										<div id="comp-jfsf9puo" data-align="center" data-disabled="false" data-margin="0" data-should-use-flex="true" data-width="110" data-height="33" class="style-jfsfaqj8" data-state="desktop shouldUseFlex center" style="left: 435px; position: absolute; top: 95px; height: 33px; min-height: 14px; width: 110px;">
											<div id="comp-jfsf9puolink" class="g-transparent-a style-jfsfaqj8link"><span id="comp-jfsf9puolabel" class="style-jfsfaqj8label">Follow</span></div>
										</div>
										<div data-packed="true" class="txtNew" id="comp-it437nfo" style="left: 15px; width: 428px; position: absolute; top: 143px;">
											<h4 class="font_4"><span style="letter-spacing:0.1em;">ABOUT ME</span></h4></div>
										<div class="style-it437nft" id="comp-it437nfr" style="left: 15px; width: 53px; position: absolute; top: 188px; height: 7px;">
											<div id="comp-it437nfrline" class="style-it437nftline"></div>
										</div>
										<div data-packed="true" class="txtNew" id="comp-jfseziuc" style="left: 15px; width: 310px; position: absolute; top: 200px;">
											<h5 class="font_5" style="font-size:16px;"><span style="font-size:16px;">FIF // S1 Teknik Informatika</span></h5></div>
										<div data-packed="true" class="txtNew" id="comp-it437nfe" style="left: 15px; width: 432px; position: absolute; top: 249px;">
											<p class="font_7" style="line-height:1.4em; text-align:justify;">I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I’m a great
												place for you to tell a story and let your users know a little more about you.</p>
										</div>
										<div data-packed="true" class="txtNew" id="comp-it437nf9" style="left: 517px; width: 428px; position: absolute; top: 249px;">
											<p class="font_7" style="line-height:1.4em; text-align:justify;">I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I’m a great
												place for you to tell a story and let your users know a little more about you.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div data-show-navigation-arrows="true" data-navigation-button-margin="64" id="comp-it437ne7navigationArrows" class="style-it437nea1_navigation-arrows style-it437nea1navigationArrows" style="top: calc(50% - 9.1px);">
						<div class="reset-button style-it437nea1_btn style-it437nea1nextButton" id="comp-it437ne7nextButton" style="width: 43.3333px; right: -117.5px;"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 39 11" enable-background="new 0 0 39 11"><polygon points="33.5,0 32.8,0.7 37.1,5 0,5 0,6 37.1,6 32.8,10.3 33.5,11 39,5.5 "></polygon></svg></div>
						<div class="reset-button style-it437nea1_btn style-it437nea1prevButton" id="comp-it437ne7prevButton" style="width: 43.3333px; left: -117.5px;"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 39 11" enable-background="new 0 0 39 11"><polygon points="33.5,0 32.8,0.7 37.1,5 0,5 0,6 37.1,6 32.8,10.3 33.5,11 39,5.5 "></polygon></svg></div>
					</div>
				</div>
				<div data-exact-height="260" data-content-padding-horizontal="16" data-content-padding-vertical="16" title="" class="style-it437nj7" id="comp-it437nj5" style="left: 358px; position: absolute; top: 234px; width: 264px; height: 260px;">
					<div id="comp-it437nj5link" class="style-it437nj7link" style="width: 248px; height: 244px;">
						<div data-style="" class="style-it437nj7img" id="comp-it437nj5img" style="position: relative; width: 248px; height: 244px;"><img id="comp-it437nj5imgimage" alt="" data-type="image" src="./Mysite_files/profpict.jpg" style="width: 248px; height: 244px; object-fit: cover;"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	</div>
	</div>
	<nav class="style-it2yzpdn" data-state="subMenuOpenSide-right items-align-left subItems-align-left notMobile" id="comp-it1g9psp" data-param-border="0" data-param-separator="0" data-param-padding="0" style="top: 24px; left: 65px; width: 211px; position: fixed; z-index: 50; height: 96px;"
	  data-open-direction="subMenuOpenDir-down">
	</nav>
	</div>
	</div>
	<div class="siteAspectsContainer">
	</div>
	</div>
	<div id="abot" class="about-text" style="background-color:white;">
		<p>&nbsp;</p>
		<div class="col-md-3 ftr-top-left about-text-grids">
			<i class="fa fa-shopping-basket" aria-hidden="true"></i>
			<h4>10 Million+ <br>Products</h4>
		</div>
		<div class="col-md-3 ftr-top-left about-text-grids">
			<i class="fa fa-users" aria-hidden="true"></i>
			<h4>50,000 <br> Sellers </h4>
		</div>
		<div class="col-md-3 ftr-top-left about-text-grids">
			<i class="fa fa-credit-card" aria-hidden="true"></i>
			<h4>5 Million <br>Shipments</h4>
		</div>
		<div class="col-md-3 ftr-top-left about-text-grids">
			<i class="fa fa-globe" aria-hidden="true"></i>
			<h4>4000+ <br>Cities</h4>
		</div>
		<div class="clearfix"> </div>
	</div>

	</div>
	</div>
	<!-- //about-page -->
	<!-- footer-top -->
	<div class="w3agile-ftr-top" >
		<div class="container">
			<div class="ftr-toprow">
				<div class="col-md-4 ftr-top-grids">
					<div class="ftr-top-left">
						<i class="fa fa-truck" aria-hidden="true"></i>
					</div>
					<div class="ftr-top-right">
						<h4>FREE DELIVERY</h4>
						<p>Free ongkir with terms & conditions</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 ftr-top-grids">
					<div class="ftr-top-left">
						<i class="fa fa-user" aria-hidden="true"></i>
					</div>
					<div class="ftr-top-right">
						<h4>CUSTOMER CARE</h4>
						<p>We are very concerned about the needs of sellers & buyers</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 ftr-top-grids">
					<div class="ftr-top-left">
						<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
					</div>
					<div class="ftr-top-right">
						<h4>GOOD QUALITY</h4>
						<p>Provide products with good quality and warranty </p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //footer-top -->
	<!-- subscribe -->
	<div class="subscribe" style="background-color:white;">
		<div class="container">
			<div class="col-md-6 social-icons w3-agile-icons">
				<h4 style="color:white">Keep in touch</h4>
				<ul>
					<li><a href="#" class="fa fa-facebook icon facebook"> </a></li>
					<li><a href="#" class="fa fa-twitter icon twitter"> </a></li>
					<li><a href="#" class="fa fa-google-plus icon googleplus"> </a></li>
					<li><a href="#" class="fa fa-dribbble icon dribbble"> </a></li>
					<li><a href="#" class="fa fa-rss icon rss"> </a></li>
				</ul>
				<ul class="apps">
					<li>
						<h4 style="color:white">Download Our app : </h4> </li>
					<li><a href="#" class="fa fa-apple"></a></li>
					<li><a href="#" class="fa fa-windows"></a></li>
					<li><a href="#" class="fa fa-android"></a></li>
				</ul>
			</div>
			<div class="col-md-6 subscribe-right">
				<h4 style="color:white" >Sign up for email and get 25%off!</h4>
				<form action="#" method="post">
					<input type="text" name="email" placeholder="Enter your Email..." required="">
					<input type="submit" value="Subscribe">
				</form>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //subscribe -->
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-info w3-agileits-info">
				<div class="col-md-4 address-left agileinfo">
					<div class="footer-logo header-logo">
						<h2><a href="index.php"><span>Red</span>Market <i></i></a>
						<h6>Your stores. Your place.</h6>
					</div>
					<ul>
						<li><i class="fa fa-map-marker"></i> Kelompok 4 , IF - 40-08, Telkom University.</li>
						<li><i class="fa fa-mobile"></i> 082116399291 </li>
						<li><i class="fa fa-phone"></i> +222 11 4444 </li>
						<li><i class="fa fa-envelope-o"></i> <a href="yudisa72@gmail.com"> yudisa72@gmail.com</a></li>
					</ul>
				</div>
				<div class="col-md-8 address-right">
					<div class="col-md-4 footer-grids">
						<h3>Company</h3>
						<ul>
							<li><a href="about.php">About Us</a></li>
							<li><a href="marketplace.php">Marketplace</a></li>
							<li><a href="values.php">Core Values</a></li>
							<li><a href="privacy.php">Privacy Policy</a></li>
						</ul>
					</div>
					<div class="col-md-4 footer-grids">
						<h3>Services</h3>
						<ul>
							<li><a href="contact.php">Contact Us</a></li>
							<li><a href="login.php">Returns</a></li>
							<li><a href="faq.php">FAQ</a></li>
							<li><a href="sitemap.php">Site Map</a></li>
							<li><a href="login.php">Order Status</a></li>
						</ul>
					</div>
					<div class="col-md-4 footer-grids">
						<h3>Payment Methods</h3>
						<ul>
							<li><i class="fa fa-laptop" aria-hidden="true"></i> Net Banking</li>
							<li><i class="fa fa-money" aria-hidden="true"></i> Cash On Delivery</li>
							<li><i class="fa fa-pie-chart" aria-hidden="true"></i>EMI Conversion</li>
							<li><i class="fa fa-gift" aria-hidden="true"></i> E-Gift Voucher</li>
							<li><i class="fa fa-credit-card" aria-hidden="true"></i> Debit/Credit Card</li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //footer -->
	<div class="copy-right">
		<div class="container">
			<p>© 2018 Red Market. All rights reserved | Design by : Kelompok 4 Model Bisnis Digital.</a></p>
		</div>
	</div>
 	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
        w3ls.render();

        w3ls.cart.on('w3sb_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) {
        			items[i].set('shipping', 0);
        			items[i].set('shipping2', 0);
        		}
        	}
        });
    </script>
	<!-- //cart-js -->
	<!-- menu js aim -->
	<script src="js/jquery.menu-aim.js"> </script>
	<script src="js/main.js"></script> <!-- Resource jQuery -->
	<!-- //menu js aim -->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>
