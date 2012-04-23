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

<body class="v2">

  <div id="container">
  
    <header>
		<ul>
			<li><a href="getstarted.php">Get Started</a></li>
			<li><a href="community.php">Join the Community</a></li>
			<li>Already Using Orion? <a href="http://orionhub.org" class="yellow bold">Sign In</a></li>
		</ul>

    </header>
    
    
    <div id="main" role="main">
		<hr class="clear"/>
		<a href="index.php"><img id="tagline" src="images/tagline2.png"/></a>
		<!-- <div id="navblock">
			<div id="tryit" class="roundedbox"><a class="bold">Try it</a></div>
			<div id="watchit" class="roundedbox">
				<a class="bold">Watch it</a>
				<div class="videowindow">
					<img src="images/videowindow.png" title="Orion Introduction" rel="#video1"/>
				</div>
				 <div class="videowindow">
					<img src="images/videowindow.png" title="Building Websites" rel="#video2"/>
				</div>
				<!--<div class="videowindow">
					<img src="images/videowindow.png" title="Server Side Integration" rel="#video3"/>
				</div> -->
			<!--</div>
			<div id="getstarted" class="roundedbox"><a class="bold" href="getstarted.php"/>Get Started</a></div>
			<div id="arrow"><img src="images/arrow.png"></div>
		</div> -->
	
		<!-- <div id="editorcontainer">
			<div id="editorNav">
				<div class="left">
					<img id="logosmall" src="images/logosmall.png"/>
					<div id="examples" class="box">
						<a id="altcss" class="first" title="Style the way you want">Alternate CSS</a>
						<a id="plaincss" class="first" style="display:none"; title="Style the way you want">Default CSS</a>
						<?php  /* <a id="jsbeautify" title="Re-Format messy code">JS Beautifier</a>*/?>
						<a id="largefile" title="15,000 Lines of code">A Very Large File</a>
					</div>
				</div>
			</div>
			<div id="editorDiv"></div>
		</div> -->
		<hr class="clear"/>
		<div id="signup">
			<img src="images/signup2.png"/>
			<form id="signupform" method="post" action="signup.php">
				<input id="signupemail" class="empty" type="text" name="email" value="email address"/>
				<input id="signupsubmit" <?php if ($queue) print 'class="queue"'; ?> type="submit" name="submit" value=""/>
			</form><hr class="clear"/>
			<p id="error" class="yellow">Please enter a valid email address.</p>
			<?php if ($queue) {?><p id="queue">We're currently reached our maximum, feel free to add your self to the next round.</p> <?php }?>
			<div id="social">
				<div id="twitter"><img src="images/twitter.png"><span><a href="http://twitter.com/#%21/orionhub">Follow us on Twitter</a></span></div>
				<div id="rss"><img src="images/rss.png"><span><a href="http://planetorion.org/news/feed/">Orion News Feed</a></span></div>	
				<div id="gplus"><g:plusone></g:plusone></div>
			</div>
		</div>
		 
		
		<hr class="clear"/>				
    </div>
    <div class="simple_overlay" id="video1">
		<iframe title="YouTube video player" width="480" height="390" src="http://www.youtube.com/embed/gOZWCCvItdU" frameborder="0" allowfullscreen></iframe>
    </div>
     <div class="simple_overlay" id="video2">
    	<iframe title="YouTube video player" width="480" height="390" src="http://www.youtube.com/embed/6sqHk5skyNE" frameborder="0" allowfullscreen></iframe>
    </div>
<!--    <div class="simple_overlay" id="video3">
		<iframe title="YouTube video player" width="480" height="390" src="http://www.youtube.com/embed/uAHhZjfdetU" frameborder="0" allowfullscreen></iframe>
    </div>
 -->        
   
    
 
  </div> <!--! end of #container -->

 <footer>
		<ul>
			<li><a href="/">Home</a></li>
			<li><a href="/legal/privacy.php">Privacy Policy</a></li>
			<li><a href="/legal/termsofuse.php">Terms of Use</a></li>
			<li><a href="/legal/copyright.php">Copyright Agent</a></li>
			<li><a href="/legal/">Legal</a></li>
			<li><a href="/org/foundation/contact.php">Contact Us</a></li>
			<li id="copyright">Copyright &copy; 2011 The Eclipse Foundation. All Rights Reserved.</li>
		</ul>
    </footer>
  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js"></script>
  <script src="//cdn.jquerytools.org/1.2.5/all/jquery.tools.min.js"></script>
  <script src="js/interface.js"></script>
  <script src="js/editor.js"></script>
  <script src="js/model.js"></script>
  <script src="js/rulers.js"></script>
  <script src="js/styler.js"></script>  
  <script src="js/undostack.js"></script>
  <script src="js/orion.js"></script>
  <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>



  <script>
    var _gaq=[['_setAccount','UA-910670-2'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
</body>
</html>
<?php  
/*<script src="//orion.eclipse.org/js/fileClient.js"></script>   
  <script src="//orion.eclipse.org/js/serviceregistry.js"></script>   
  <script src="//orion.eclipse.org/js/pluginregistry.js"></script>
  <script type="text/javascript" src="//orion.eclipse.org/openajax/release/all/OpenAjaxManagedHub-all.js"></script>
  <script type="text/javascript" src="//orion.eclipse.org/org.dojotoolkit/dojo/dojo.js.uncompressed.js"></script>  */ 

/* 			<table class="newsfeed">
				<tr>
					<td class="date">Mar 12 2011</td>
					<td class="content">
						<p class="bold">Some longer string that will wrap so i can see what content looks like in here</p><br/>
						Some longer string that will wrap so i can see what content looks like in here
					</td>
				</tr>
				<tr>
					<td class="date">Mar 12 2011</td>
					<td class="content">
						<p class="bold">Some longer string that will wrap so i can see what content looks like in here</p><br/>
						Some longer string that will wrap so i can see what content looks like in here
					</td>
				</tr>
				<tr>
					<td class="date">Mar 12 2011</td>
					<td class="content">
						<p class="bold">Some longer string that will wrap so i can see what content looks like in here</p><br/>
						Some longer string that will wrap so i can see what content looks like in here
					</td>
				</tr>								
			</table> */

?>