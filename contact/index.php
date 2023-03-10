<?php
	// Start session.
	session_start();
	
	// Set a key, checked in mailer, prevents against spammers trying to hijack the mailer.
	$security_token = $_SESSION['security_token'] = uniqid(rand());
	
	if ( ! isset($_SESSION['formMessage'])) {
		$_SESSION['formMessage'] = 'Fill in the form below to send me an email. Feel free to ask any question. I will try to respond in 24 hours.';	
	}
	
	if ( ! isset($_SESSION['formFooter'])) {
		$_SESSION['formFooter'] = ' ';
	}
	
	if ( ! isset($_SESSION['form'])) {
		$_SESSION['form'] = array();
	}
	
	function check($field, $type = '', $value = '') {
		$string = "";
		if (isset($_SESSION['form'][$field])) {
			switch($type) {
				case 'checkbox':
					$string = 'checked="checked"';
					break;
				case 'radio':
					if($_SESSION['form'][$field] === $value) {
						$string = 'checked="checked"';
					}
					break;
				case 'select':
					if($_SESSION['form'][$field] === $value) {
						$string = 'selected="selected"';
					}
					break;
				default:
					$string = $_SESSION['form'][$field];
			}
		}
		return $string;
	}
?><!DOCTYPE html>

	<head>
		<meta charset="utf-8" />

		
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="robots" content="index, follow" />
		<meta name="generator" content="RapidWeaver" />
		
	<meta name="twitter:card" content="summary">
	<meta name="twitter:title" content="Contact | CMD student">
	<meta name="twitter:url" content="http://ginosponton.com/contact/index.php">
	<meta property="og:type" content="website">
	<meta property="og:site_name" content="CMD student">
	<meta property="og:title" content="Contact | CMD student">
	<meta property="og:url" content="http://ginosponton.com/contact/index.php">
		

	  <meta name="viewport" content="width=device-width" />

	  <title>Contact | CMD student</title>

		<!-- CSS reset -->
	  <link rel="stylesheet" type="text/css" media="all" href="../rw_common/themes/Geometric/consolidated-6.css?rwcache=696776305" />
		

		<!-- CSS for the Foundation.js framework that handles the responsive layout for the theme -->
	  

		<!-- Targets specific 3rd-party addons to make sure they work in the responsive environment of this theme. -->
	  

	  <!-- Theme's main CSS file -->
	  

	  <!-- Loads Font Awesome v4.0.3 CSS from CDN -->
	  

		<!-- RapidWeaver Color Picker Stylesheet -->
		

	  <!-- Theme specific media queries -->
		


		<script>
			/* Handles styling for custom banners using RapidWeaver's Resources area. */
			var banner1 = "../resources/banner1.jpg";
			var banner2 = "../resources/banner2.jpg";
			var banner3 = "../resources/banner3.jpg";
			var banner4 = "../resources/banner4.jpg";
			var banner5 = "../resources/banner5.jpg";
			var banner6 = "../resources/banner6.jpg";
			var banner7 = "../resources/banner7.jpg";
			var banner8 = "../resources/banner8.jpg";
			var banner9 = "../resources/banner9.jpg";
			var banner10 = "../resources/banner10.jpg";
			var banner11 = "../resources/banner11.jpg";
			var banner12 = "../resources/banner12.jpg";
			var banner13 = "../resources/banner13.jpg";
			var banner14 = "../resources/banner14.jpg";
			var banner15 = "../resources/banner15.jpg";
			var stk_banner_1 = "../rw_common/themes/Geometric/images/banners/stock1.jpg";
			var stk_banner_2 = "../rw_common/themes/Geometric/images/banners/stock2.jpg";
			var stk_banner_3 = "../rw_common/themes/Geometric/images/banners/stock3.jpg";
			var stk_banner_4 = "../rw_common/themes/Geometric/images/banners/stock4.jpg";
			var stk_banner_5 = "../rw_common/themes/Geometric/images/banners/stock5.jpg";
			var stk_banner_6 = "../rw_common/themes/Geometric/images/banners/stock6.jpg";
			var stk_banner_7 = "../rw_common/themes/Geometric/images/banners/stock7.jpg";
			var stk_banner_8 = "../rw_common/themes/Geometric/images/banners/stock8.jpg";
			var stk_banner_9 = "../rw_common/themes/Geometric/images/banners/stock9.jpg";
			var stk_banner_10 = "../rw_common/themes/Geometric/images/banners/stock10.jpg";
			var stk_banner_11 = "../rw_common/themes/Geometric/images/banners/stock11.jpg";
			var stk_banner_12 = "../rw_common/themes/Geometric/images/banners/stock12.jpg";
			var stk_banner_13 = "../rw_common/themes/Geometric/images/banners/stock13.jpg";
			var stk_banner_14 = "../rw_common/themes/Geometric/images/banners/stock14.jpg";
			var stk_banner_15 = "../rw_common/themes/Geometric/images/banners/stock15.jpg";
			var stk_banner_16 = "../rw_common/themes/Geometric/images/banners/stock16.jpg";
			var stk_banner_17 = "../rw_common/themes/Geometric/images/banners/stock17.jpg";
			var stk_banner_18 = "../rw_common/themes/Geometric/images/banners/stock18.jpg";
			var stk_banner_19 = "../rw_common/themes/Geometric/images/banners/stock19.jpg";
			var stk_banner_20 = "../rw_common/themes/Geometric/images/banners/stock20.jpg";
			var stk_banner_21 = "../rw_common/themes/Geometric/images/banners/stock21.jpg";
			var stk_banner_22 = "../rw_common/themes/Geometric/images/banners/stock22.jpg";
			var stk_banner_23 = "../rw_common/themes/Geometric/images/banners/stock23.jpg";
			var stk_banner_24 = "../rw_common/themes/Geometric/images/banners/stock24.jpg";
			var stk_banner_25 = "../rw_common/themes/Geometric/images/banners/stock25.jpg";
		</script>

		<!-- RapidWeaver's Javascript File -->
	  <script src="../rw_common/themes/Geometric/javascript.js?rwcache=696776305"></script>

		<!-- jQuery 1.8 is included in the theme internally -->
	  <script src="../rw_common/themes/Geometric/js/jquery.min.js?rwcache=696776305"></script>

	  <!-- Elixir specific javascript, along with jQuery Easing and a few other elements -->
	  <script src="../rw_common/themes/Geometric/js/elixir.js?rwcache=696776305"></script>

		<!-- Theme variations -->
		<script src="../rw_common/themes/Geometric/js/banner/banner6.js?rwcache=696776305"></script>
		<script src="../rw_common/themes/Geometric/js/navigation/nav_toggle_three_bars.js?rwcache=696776305"></script>
		<script src="../rw_common/themes/Geometric/js/sidebar/sidebar_hidden.js?rwcache=696776305"></script>
		

		<!-- Plugins insert their additional code here -->
		

	  <!-- User defined custom javascript -->
		

	  <!-- User definied custom CSS -->
		


	</head>


	<body>

		<!-- Geometric v1.1.2 -->

		<div id="mobile_navigation_toggle">
			<i id="mobile_navigation_toggle_icon" class="fa"></i>
		</div>
		<nav id="mobile_navigation">
			<ul><li><a href="../" rel="">Home</a></li><li><a href="../schoolprojects/" rel="" class="parent">School Projects</a></li><li><a href="../nft/" rel="">NFT</a></li><li><a href="../micrometric/" rel="">MicroMetric</a></li><li><a href="../sokoban/" rel="">Sokoban</a></li><li><a href="./" rel="" class="current">Contact</a></li></ul>
		</nav>

		<div id="site_wrapper">
			<!-- Header Section -->
			<header id="header" class="wrapper row site_width">
				<div class="large-12 columns">

					<!-- Site Logo -->
					<div id="logo"><img src="../rw_common/images/d53f834b-d120-4dc6-98f6-25bfef8d9e34-1.jpg" width="350" height="223" alt="CMD student"/></div>

					<!-- Site Title & Slogan -->
					<h1 id="site_title">CMD student</h1>
					<h2 id="site_slogan">Avans Hogeschool</h2>


					<!-- Main Navigation -->
					<nav id="main_navigation">
						<ul><li><a href="../" rel="">Home</a></li><li><a href="../schoolprojects/" rel="" class="parent">School Projects</a></li><li><a href="../nft/" rel="">NFT</a></li><li><a href="../micrometric/" rel="">MicroMetric</a></li><li><a href="../sokoban/" rel="">Sokoban</a></li><li><a href="./" rel="" class="current">Contact</a></li></ul>
					</nav>

					<!-- Main Navigation Children -->
					<nav id="secondary_navigation">
						<ul><li><a href="../" rel="">Home</a></li><li><a href="../schoolprojects/" rel="" class="parent">School Projects</a></li><li><a href="../nft/" rel="">NFT</a></li><li><a href="../micrometric/" rel="">MicroMetric</a></li><li><a href="../sokoban/" rel="">Sokoban</a></li><li><a href="./" rel="" class="current">Contact</a></li></ul>
					</nav>

				</div>
			</header>

			<!-- Divider with Page Icon -->
			<div id="divider_icon"></div>

			<!-- Banner -->
			<div id="banner">
				<img class="banner_image" src="" alt="banner image" />
			</div>

			<div class="clearer"></div>

			<!-- ExtraContent Area 1 -->
			<div id="extraContent1">
				<div id="extrContent1_row" class="row site_width">
					<div id="extrContent1_columns" class="large-12 columns">
						<div id="extraContainer1"></div>
					</div>
				</div>
			</div>

			<div class="clearer"></div>

			<!-- ExtraContent Area 2 -->
			<div id="extraContent2">
				<div id="extrContent2_row" class="row site_width">
					<div id="extrContent2_columns" class="large-12 columns">
						<div id="extraContainer2"></div>
					</div>
				</div>
			</div>

			<div class="clearer"></div>

			<!-- Main Content area and Sidebar -->
			<div id="content_wrapper">
				<div class="row site_width">

					<!-- Main Content -->
					<div id="content" class="large-8 columns">
<div class="message-text"><?php echo $_SESSION['formMessage']; unset($_SESSION['formMessage']); ?></div><br />

<form class="rw-contact-form" action="./files/mailer.php" method="post" enctype="multipart/form-data">
	 <div>
		<label>Your Name</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element0'); ?>" name="form[element0]" size="40"/><br /><br />

		<label>Your Email</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element1'); ?>" name="form[element1]" size="40"/><br /><br />

		<label>Subject</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element2'); ?>" name="form[element2]" size="40"/><br /><br />

		<label>Message</label> *<br />
		<textarea class="form-input-field" name="form[element3]" rows="8" cols="38"><?php echo check('element3'); ?></textarea><br /><br />

		<div style="display: none;">
			<label>Spam Protection: Please don't fill this in:</label>
			<textarea name="comment" rows="1" cols="1"></textarea>
		</div>
		<input type="hidden" name="form_token" value="<?php echo $security_token; ?>" />
		
		<input class="form-input-button" type="submit" name="submitButton" value="Submit" />
	</div>
</form>

<br />
<div class="form-footer"><?php echo $_SESSION['formFooter']; unset($_SESSION['formFooter']); ?></div><br />

<?php unset($_SESSION['form']); ?>
</div>

					<!-- Sidebar -->
					<aside id="sidebar" class="large-4 columns">
						<h4></h4>
						
						<div id="archives">
							
						</div>
					</aside>

				</div>

				<div class="clearer"></div>

			</div>

			<!-- ExtraContent Area 3 -->
			<div id="extraContent3">
				<div id="extrContent3_row" class="row site_width">
					<div id="extrContent3_columns" class="large-12 columns">
						<div id="extraContainer3"></div>
					</div>
				</div>
			</div>

			<div class="clearer"></div>

			<!-- ExtraContent Area 4 & Footer-->
			<footer>
				<div id="extraContent4">
					<div class="row site_width">
						<div class="large-12 columns">
							<div id="extraContainer4"></div>
						</div>
					</div>
				</div>

				<div id="inner_footer">
					<div id="breadcrumb"></div>

					<!-- Social Badges -->
					<div id="social_badges"></div>

					<!-- RapidWeaver Footer info -->
					<div id="copyright">&copy; 2023 Gino Sponton - Avans Hogeschool Breda</div>
				</div>

			</footer>

		<!-- Scroll to Top button -->
		<div id="to_the_top">
			<i class="fa fa-angle-up"></i>
		</div>


		</div>  <!-- #site_wrapper -->

		<script>
			$elixir(window).load(function() {

			  if(!(/Android|iPhone|iPad|iPod|BlackBerry|Windows Phone/i).test(navigator.userAgent || navigator.vendor || window.opera)){
			      skrollr.init({
			          forceHeight: false
			      });
			  }

			});
		</script>

	</body>

</html lang="en">
