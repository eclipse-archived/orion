<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
/*******************************************************************************
 * Copyright (c) 2009-2010 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    
 *******************************************************************************/
 $email = $_POST['email'];
 mail('nathan@eclipse.org', 'OrionHub Invite', $email);
?>

<!doctype html>
<html class="no-js" lang="en"> 
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Orion: Tools for the web, on the web</title>
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Place favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">


  <!-- CSS: implied media="all" -->
  <link rel="stylesheet" href="http://www.eclipse.org/eclipse.org-common/themes/Nova/css/reset.css?v=2">
  <link rel="stylesheet" href="style.css?v=2">
 

  <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
  <script src=""></script>

</head>

<body>

  <div id="container">
    <header>
		<ul>
			<li><a href="community.html">Join the Community</a></li>
			<li>Already Using Orion? <a class="yellow bold">Sign In</a></li>
		</ul>

    </header>
    <div id="main" role="main">
		<hr class="clear"/>
		<a href="index.html"><img id="tagline" src="images/tagline.png"/></a>
		<div id='thankyou'>
			<h1>Thank you for Signing up for OrionHub.</h1>
			<p>You'll receive an email shortly containing instruction on how to connect to OrionHub.</p>
			<a class="yellow bold" href="index.html">Back to Orion</a>
		</div>
    </div>
    <footer>
		<ul>
			<li><a href="/">Home</a></li>
			<li><a href="/legal/privacy.php">Privacy Policy</a></li>
			<li><a href="/legal/termsofuse.php">Terms of Use</a></li>
			<li><a href="/legal/copyright.php">Copyright Agent</a></li>
			<li><a href="/legal/">Legal</a></li>
			<li><a href="/org/foundation/contact.php">Contact Us</a></li>
		</ul>
		<span id="copyright">Copyright &copy; 2011 The Eclipse Foundation. All Rights Reserved.</span>
    </footer>
  </div> <!--! end of #container -->


  <!-- JavaScript at the bottom for fast page loading -->




  <script>
    var _gaq=[['_setAccount','UA-910670-2'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
</body>
</html>

	
	<?
	$html = ob_get_clean();

	# Generate the web page
	print $html;
?>