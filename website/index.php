<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
	<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>Markus Neilson</title>

		<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

		<!-- CSS stylesheets -->
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/bgstretcher.css">

		<!-- Modernizr -->
		<script src="js/vendor/modernizr-2.6.2.min.js"></script>

		<!-- jQuerey library -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script>
			window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')
		</script>

		<!-- BG Backstretcher -->
		<script type="text/javascript" src="js/bgstretcher.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				// Initialize Backgound Stretcher
				$('.image-area').bgStretcher({
					images : ['images/1.jpg', 'images/2.jpg', 'images/3.jpg', 'images/4.jpg', 'images/5.jpg'],
					imageWidth : 1600,
					imageHeight : 900,
					slideShowSpeed : 4000,
					transitionEffect : 'fade',
					sequenceMode : 'normal',
					anchoring : 'left center',
					anchoringImg : 'left center'
				});
			});
		</script>

	</head>

	<body>
		<!--[if lt IE 7]>
		<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->

		<!-- HEADER -->
		<span itemscope itemtype="http://schema.org/LocalBusiness"><header>
			<div class="header">
				<!-- LOGO BOX -->
				<div class="logoheader">
					<a href="http://markusneilson.com"><img itemprop="image" src="images/logo.gif"/></a>
				</div>
			</div>
		</header>

		<!-- IMAGE AREA -->
		<section class="image-area">
			<div class="push"></div>
			<!-- BOXES -->
			<ul class="boxes">
				<!-- EMAIL FORM BOX -->
				<div class="email_form">
					<?php

					if (isset($_POST['submit'])) {
						//execute the code
						$email = $_POST['email'];
						$message = $_POST['message'];
						$message = wordwrap($message, 70, "\r\n");
						$name = $_POST['name'];
						$subject = $name . " sent a message from your website";

						if (strlen($email) <= 0) {
							echo "You need to enter a valid email";
						} else {
							if (strlen($name) <= 0) {
								echo "Please let us know your name";
							} else {
								if (strlen($name) <= 0) {
									echo "You should enter a message";
								} else {
									if (filter_var($email, FILTER_VALIDATE_EMAIL) == true) {
										//continue with the code
										mail('info@markusneilson.com', $subject, $message. "\nFrom: " . $email);
										echo "Your message has sent, "."\n"."the team at Maruks Neilson will reply shortly.";
									} else {
										echo "Please fill out all of the feilds.";
									}
								}
							}
						}

					}
					?>
					<h1>Contact Us</h1>
					<form action="index.php" method="post" class="form">

						<p class="name">
							<input type="text" name="name" id="name" placeholder="NAME" />
						</p>
						<p class="email">
							<input type="email" name="email" id="email" placeholder="EMAIL" />
						</p>
						<p class="message">
							<textarea name="message" id="message"> </textarea>
						</p>
						<p class="submit">
							<input type="submit" id="submit" name="submit" value="SEND" />
						</p>

					</form>

				</div>

				<!-- CONTACT DETAILS BOX -->
				<li id="contact" class="contact_details">
					<p itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
<span itemprop="streetAddress">PO Box 169</span>
						<br/>
<span itemprop="addressLocality">North Carlton</span>
						<br/>
<span itemprop="addressRegion">VIC</span>&nbsp;  
<span itemprop="postalCode">3054</span>
						<br/>
<span itemprop="addressCountry">Australia</span>
						<br/>
					</p>
					<p>
						<a style="text-transform: lowercase;" href="mailto:info@markusneilson.com"><meta itemprop="email" content="info@markusneilson.com">
						<br/>
						info@markusneilson.com</style></a>
					</p>
					<p>
						<a href="tel://043 844 4777">
						<br/>
						M <span itemprop="telephone">+61 438 444 777</span></a>
					</p>
				</li>
			</ul>


		</section>
		
							<!-- FOOTER -->
			<footer>
				<div class="footer">
					<div class="menu_contact">
						<a href="#contact">Contact</a>
					</div>
					<div class="menu_facebook">
						<a style="margin .1em .1em .1em 1em; text-transform: lowercase;"
						href="https://www.facebook.com/pages/Markus-Neilson/221677824648071?fref=ts" target="_blank"> f</style></a>
					</div>
				</div>
			</footer>
		
<meta itemprop="name" content="Markus Neilson">
<meta itemprop="url" content="http://markusneilson.com"></span>

		<script src="js/plugins.js"></script>
		<script src="js/main.js"></script>

		<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
		<!--		<script>
		var _gaq = [['_setAccount', 'UA-XXXXX-X'], ['_trackPageview']]; ( function(d, t) {
		var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
		g.src = '//www.google-analytics.com/ga.js';
		s.parentNode.insertBefore(g, s)
		}(document, 'script'));
		</script> -->
	</body>
</html>