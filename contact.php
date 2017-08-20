<?php

// if the url field is empty
if(isset($_POST['url']) && $_POST['url'] == ''){

	// put your email address here
	$youremail = 'diana.changkuon@nowcomms.asia, vivienne.ho@now.com.sg';

	// prepare a "pretty" version of the message
	// Important: if you added any form fields to the HTML, you will need to add them here also
	$body = "This is the form that was just submitted:
	First Name:  $_POST[first_name]
	Last Name:  $_POST[last_name]
	Company:  $_POST[company]
	E-Mail: $_POST[email]
	Message: $_POST[message]";

	// Use the submitters email if they supplied one
	// (and it isn't trying to hack your form).
	// Otherwise send from your email address.
	if( $_POST['email'] && !preg_match( "/[\r\n]/", $_POST['email']) ) {
	  $headers = "From: $_POST[email]";
	} else {
	  $headers = "From: $youremail";
	}

	// finally, send the message
	mail($youremail, 'Dell EMC Partner Summit 2017 Contact Form', $body, $headers );

}

// otherwise, let the spammer think that they got their message through

?>
<!DOCTYPE HTML>
<html lang="en" class="no-js">
<head>
	<meta charset='UTF-8'>
	<!-- www.phpied.com/conditional-comments-block-downloads/ -->
	<!--[if IE]><![endif]-->

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

	<link rel="shortcut icon" href="/favicon.ico">
	<link rel="apple-touch-icon" href="/apple-touch-icon.png">


	<link rel="stylesheet" href="css/screen.css" />

	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->	

	<title>Thank you!</title>

</head>
<body>

	<div class="pageWrap">

		<header>
			<hgroup class="wrap">
				<nav class="main_nav">
					<ul>
						<li><a href="agenda.html">Agenda</a></li>
						<li><a href="speakers.html">Speakers</a></li>
						<li><a href="venue.html">Venue &amp; Location</a></li>
						<li><a href="faq.html">FAQ</a></li>
						<li><a href="contact.html">Contact Us</a></li>
					</ul>
				</nav>
				<div class="brand">
					<a href="index.html"><img src="images/dellemc.png" alt="Dell EMC Partner Program"></a>
				</div>
				<div class="title">
					<img src="images/title.png" alt="REALIZE EXTRAORDINARY">
					<p class="level-1">SOUTH ASIA PARTNER SUMMIT 2017</p>
					<p class="level-2">
						<span>4 - 7 October 2017</span>
						<span>Ho Chi Minh City, Vietnam</span>
					</p>
					<p class="level-3">Sheraton Saigon Hotel &amp; Tower</p>
				</div>
			</hgroup>
		</header>

		<section class="black">

			<div class="wrap">
				<h1>Thank you. Your form has been sent to us.</h1>
				<p style="text-align:center;">We'll get back to you as soon as possible.</p>
			</div>

		</section>

		<footer>
			<p>&copy; 2017 Dell EMC</p>
		</footer>

	</div>

</body>
</html>