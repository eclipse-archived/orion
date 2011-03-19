<?php if (file_exists('/home/data/httpd/writable/www.eclipse.org/orion_stop.txt')) $queue = TRUE; else $queue = FALSE;?>
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
  <link rel="shortcut icon" href="favicon.ico">
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
			<li><a href="community.php">Join the Community</a></li>
			<li>Already Using Orion? <a href="http://orionhub.org" class="yellow bold">Sign In</a></li>
		</ul>

    </header>
    <div id="main" role="main">
		<hr class="clear"/>
		<a href="index.php"><img id="tagline" src="images/tagline.png"/></a>
		<img id="gstagline" src="images/gstagline.png"/>
		
		<div id="getstartedcontent">
			<div class="roundedbox short">
				<div class="content">
					<h3>Sign-Up for OrionHub</h3>
					<p>OrionHub is currently in a limited beta stage, Sign-Up today to see what Orion is all about.</p>
					<a rel="#signupoverlay" class="yellow bold">Sign-Up Today</a>
				</div>
				<div class="icon"><img src="images/gshost.png"/></div>
			</div>
			<div class="or">- OR -</div>
			<div class="roundedbox">
				<div class="icon"><img src="images/gslocal.png"/></div>
				<div class="content">
					<h3>Download and Install Orion on your localhost</h3>
					<p>Get Orion installed and running on your own machine.</p>
					<a href="http://wiki.eclipse.org/Orion/How_Tos/Install_Orion_on_Localhost" class="yellow bold">Download Now</a>
				</div>
			</div>
			<div class="roundedbox">
				<div class="content">
					<h3>Getting Started with Orion</h3>
					<p>Check out our Getting Started guide with Orion as we show you our features and functionality.</p>
					<a href="http://wiki.eclipse.org/Orion/Getting_Started_with_Orion" class="yellow bold">Follow Along</a>
				</div>
				<div class="icon"><img src="images/gsstart.png"/></div>
			</div>				
			<div class="roundedbox">
				<div class="icon"><img src="images/gsembed.png"/></div>
				<div class="content">
					<h3>Embed Orion into your Application</h3>
					<p>We've embedded Orion into our <a class="bold" href="index.html">main page</a>, see how you can do the same.</p>
					<a href="http://aniefer.blogspot.com/2011/02/embedding-orion-editor_02.html" class="yellow bold">Find Out How</a>
				</div>
				
			</div>						
		</div>
	    <div class="simple_overlay" id="signupoverlay">
			<img src="images/signup.png"/>
			<form method="post" action="signup.php">
				<input id="signupemail" class="empty" type="text" name="email" value="email address"/>
				<input id="signupsubmit" <?php if ($queue) print 'class="queue"'; ?> type="submit" name="submit" value=""/>
			</form><hr class="clear"/>
			<p id="error" class="yellow" style="padding-left:150px;">Please enter a valid email address.</p>
			<?php if ($queue) {?><p id="queue" style="padding:10px 100px;">We're currently reached our maximum, feel free to add your self to the next round.</p> <?php }?>
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
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
  <script src="//cdn.jquerytools.org/1.2.5/all/jquery.tools.min.js"></script>  
  <script src="//ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>  
  <script src="js/interface.js"></script> 



  <script>
    var _gaq=[['_setAccount','UA-910670-2'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
</body>
</html>