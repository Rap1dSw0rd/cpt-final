<!DOCTYPE html>
<html class="ui-mobile">
<head>
	<!-----------------------------------
		Author: Luke Brown
		File: index.html
		Uploaded: 10/05/2015
	------------------------------------>
<meta property="og:site_name" content="Family Vape Shop">
<meta property="og:url" content="http://familyvapeshop.com/index.html">
<meta http-equiv="content-type" content="text/html" charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!-- Include meta tag to ensure proper rendering and touch zooming -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Website icon-->
<link rel="shortcut icon" href="./css/logo.ico">
<!-- Include jQuery Mobile stylesheets -->
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<!-- Custom Theme Roller CSS -->
<link rel="stylesheet" href="./css/themes/jquery.mobile.icons.min.css" />
<link rel="stylesheet" href="./css/themes/fvs.css" /> 
<!-- Custom CSS -->
<link rel="stylesheet" href="./css/tweak.css" />
<!-- Include the jQuery library -->
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<!-- Include the jQuery Mobile library -->
<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<!-- For the older browsers -->
<script type="text/javascript" src="./js/modernizr-1.5.js"></script>
<!-- Slideshow on homepage -->
<script type="text/javascript" src="./js/slideshow.js"></script>  
<title>Family Vape Shop</title>
<body class="ui-mobile-viewport ui-overlay-a">
<!---------------------------------------
				Page 1
---------------------------------------->
<div data-role="page" id="home" data-url="home">
	<div data-role="panel" id="panelContact" data-position="right" data-display="push">
		<?php include "./php/contact.php";?>
	</div>
	<div data-role="header">
		<?php include "./php/header.php";?>
		<?php include "./php/navbar.php";?>
	</div>
  <div data-role="main" class="ui-content">	
	<div id="slideshow-wrapper"><?php include "./php/slideshow.php"; ?></div>	
		<center><p>Welcome to Family Vape Shop!</p><center>
  </div>
	<?php include "./php/footer.php";?>
</div>
<!---------------------------------------
				Page 2
---------------------------------------->
<div data-role="page" id="products" data-url="products">
	<div data-role="panel" id="panelContact" data-position="right" data-display="push">
		<?php include "./php/contact.php";?>
	</div>	  
	<div data-role="header">
		<?php include "./php/header.php";?>
		<?php include "./php/navbar.php";?>
	</div>	
  <div data-role="main" class="ui-content"></div>
	<?php include "./php/footer.php";?>
</div> 
<!---------------------------------------
				Page 3
---------------------------------------->
<div data-role="page" id="form" data-url="form">
	<div data-role="panel" id="panelContact" data-position="right" data-display="push">
		<?php include "./php/contact.php";?>
	</div>   
	<div data-role="header">
		<?php include "./php/header.php";?>
		<?php include "./php/navbar.php";?>
	</div>
  <div data-role="main" class="ui-content">
		<?php include "./php/sanitize.php";?>
	<center><?php include "./php/form.php";?></center>
  </div>
	<?php include "./php/footer.php";?>
</div>
<!---------------------------------------
				Results Page
---------------------------------------->
<div data-role="page" id="results" data-url="results">
	<div data-role="panel" id="panelContact" data-position="right" data-display="push">
		<?php include "./php/contact.php";?>
	</div>   
	<div data-role="header">
		<?php include "./php/header.php";?>
		<?php include "./php/navbar.php";?>
	</div>
  <div data-role="main" class="ui-content">
	<div>
		<?php
		echoData($fname, $lname, $email, $comment, $niclvl, $vglvl);
		?>
	</div>
  </div>
	<?php include "./php/footer.php";?>	
</div>	
	
<div class="ui-loader ui-corner-all ui-body-a ui-loader-default"><span class="ui-icon-loading"></span><h1>loading</h1></div></body></html>