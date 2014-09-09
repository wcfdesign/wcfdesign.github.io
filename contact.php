<!DOCTYPE HTML>
<!--
	Twenty 1.0 by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Contact WCF</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<link rel="stylesheet" type="text/css" href="css/wcf.css">
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-noscript.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>
	<body class="contact loading">
	
		<!-- Header -->
			<header id="header">
				<h1 id="logo"><a href="index.html">Westmoreland<span> Contract Furniture</span></a></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.html">Welcome</a></li>
						<li><a href="services.html">Services</a></li>
						<li><a href="manufactuers.html">Manufactuers</a></li>
						<!-- <li class="submenu">
							<a href="manufactuers.html">Manufactuers</a>
							<ul>
								<li><a href="left-sidebar.html">All</a></li>
								<li><a href="right-sidebar.html">Most Popular</a></li>
								<li class="submenu">
									<a href="">Submenu</a>
									<ul>
										<li><a href="#">Dolore Sed</a></li>
										<li><a href="#">Consequat</a></li>
										<li><a href="#">Lorem Magna</a></li>
										<li><a href="#">Sed Magna</a></li>
										<li><a href="#">Ipsum Nisl</a></li>
									</ul>
								</li>
							</ul>
						</li> -->
						<li class="current"><a href="contact.html">Contact Us</a></li>
					</ul>
				</nav>
			</header>
	

			<section class="">
					
						
						
						<div class="row">
							<div class="6u">
							
								<section id="contact">
								<h3><strong>Contact Us</strong></h3>

								<h4><img src="images/contact_phone.png"><a href="tel:+17248387748">724-838-7748</a></h4>
								<h4><img src="images/contact_fax.png">724-552-0388</h4>
								<h4><img src="images/contact_location.png">1572 Woodward Dr Ext, Greensburg, PA 15601</h4>

								<div id="contact_form">
								<h3><strong>Send Us a Message</strong></h3>
								
								
								<form id="contact_wcf" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
									<div class="style4 special small">
										
											<!-- name -->
											<input type="text" name="name" placeholder="Name" />

											<!-- email -->
											<input type="text" name="email" placeholder="Email" />


											<input type="text" name="subject" placeholder="Subject" />


											<textarea name="message" placeholder="Message" rows="7"></textarea>
										
									
											<!-- <ul class="buttons">
												<li><input type="submit" value="Submit"></li>
											</ul> -->
											<footer class="major center_align">
												<!-- <ul class="buttons">
													<li><a href="#" onclick="document.getElementById['contact_wcf'].submit();"class="button">SEND MESSAGE</a></li>
												</ul> -->
												<input type="submit">
												
											</footer>
									</div>
								</form>
								</section>
							</div> <!-- /6u -->

							<?php

if(isset($_POST)) {
	
	$to = "jocelyn.palacki@gmail.com";
	$subject = $_POST['subject'];
	$name_field = $_POST['name'];
	$email_field = $_POST['email'];
	$message = $_POST['message'];

	$headers = 'From: WCFdesign.com'."\r\n" ;
    $headers .='Reply-To: '. $to . "\r\n" ;
    $headers .='X-Mailer: PHP/' . phpversion();
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
	 
	$body = "From:".$name_field."\n E-Mail:".$email_field."\n Message:\n".$message;
 
	echo "Data has been submitted to $to!";
	
	//Submit form
	mail($to, $subject, $body, $headers);


}else {
 echo "There was an error!";
}


?>
						
			
							


							
							<div class="6u">

								
								<section>
								<img style="position:fixed;" src="images/coo_chair_sm.jpg">
								</section>


							</div>
						</div>
			</section>					

		<!-- Footer -->
			<footer id="footer" style="z-index: 1; position:relative;">
				<div id="footerLogo">
					<img src="images/wcf_footer.png">
				</div>
			
				<ul class="icons">
					<li><a href="#" class="icon circle fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="https://www.facebook.com/WCFdesign/info" class="icon circle fa-facebook"><span class="label">Facebook</span></a></li>
					<li><a href="#" class="icon circle fa-google-plus"><span class="label">Google+</span></a></li>
				</ul>
				
				<span class="copyright">&copy; 2014 Westmoreland Contract Furniture. All rights reserved. Made with love by: <a href="http://www.brockstonedesign.com">Brock Stone Design</a></span>
			
			</footer>

	</body>
</html>