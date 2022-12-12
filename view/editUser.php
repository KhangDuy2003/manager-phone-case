<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Edit user</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link id="callCss" rel="stylesheet" href="themes/bootshop/bootstrap.min.css" media="screen" />
	<link href="themes/css/base.css" rel="stylesheet" media="screen" />
	<!-- Bootstrap style responsive -->
	<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet" />
	<link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
	<!-- Google-code-prettify -->
	<link href="themes/js/google-code-prettify/prettify.css" rel="stylesheet" />
	<!-- fav and touch icons -->
	<link rel="shortcut icon" href="themes/images/ico/favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="144x144"
		href="themes/images/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114"
		href="themes/images/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="themes/images/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="themes/images/ico/apple-touch-icon-57-precomposed.png">
	<style type="text/css" id="enject"></style>
</head>

<body>
<div id="header">
<div class="container">
<div id="welcomeLine" class="row">
	
</div>
<!-- Navbar ================================================== -->
<div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>
  <div class="navbar-inner">
    <a class="brand" href="./home.php"><img src="themes/images/logo.png" alt="Bootsshop"/></a>
		<form class="form-inline navbar-search" method="post" action="./home.php" >
		<input id="srchFld" name="key_searching" class="srchTxt" type="text" />
		 
		  <button type="submit" id="submitButton" class="btn btn-primary">Go</button>
    </form>
    <ul id="topMenu" class="nav pull-right">
	 <li class=""><a href="./register.php">Register</a></li>
	 <li class="">
	 <a href="./login.php" style="padding-right:0"><span class="btn btn-large btn-success">Login</span></a>
	</li>
    </ul>
  </div>
</div>
</div>
</div>
	<!-- Header End====================================================================== -->
	<div id="mainBody">
		<div class="container">
			<div class="row">
				<!-- Sidebar ================================================== -->
				
				<!-- Sidebar end=============================================== -->
				<div class="span9">
					<ul class="breadcrumb">
						<li><a href="index.html">Home</a> <span class="divider">/</span></li>
						<li class="active">Registration</li>
					</ul>
					<h3> Registration</h3>
					<div class="well">

						<form class="form-horizontal" method="post" action="./action.php?post=True" >
							<h4>Your personal information</h4>
						
							<div class="control-group">
								<label class="control-label" for="inputLnam">Username <sup>*</sup></label>
								<div class="controls">

									<input name="username" value="<?php echo $profile["username"]; ?>" type="text" id="inputLnam" placeholder="Username">
									<input name="id" value="<?php echo $profile["id"]; ?>" type="hidden" id="inputLnam" placeholder="Username">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="input_email">Email <sup>*</sup></label>
								<div class="controls">
									<input type="text" name="email" value="<?php echo $profile["email"]; ?>" id="input_email" placeholder="Email">
								</div>
							</div>
						
							
							<div class="control-group">
								<label class="control-label" for="address">Address<sup>*</sup></label>
								<div class="controls">
									<input type="text" name="address" value="<?php echo $profile["address"]; ?>" id="address" placeholder="Adress" /> <span>Street
										address, P.O. box, company name, c/o</span>
								</div>
							</div>

							<div class="control-group">
								<label class="control-label" for="mobile">Mobile Phone<sup>*</sup></label>
								<div class="controls">
									<input type="text" value="<?php echo $profile["phone"]; ?>" name="phone" id="mobile" placeholder="Mobile Phone" />
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="mobile">Role<sup>*</sup></label>
								<div class="controls">
									<input type="text" value="<?php echo $profile["role"]; ?>" name="role" id="mobile" placeholder="Role" />
								</div>
							</div>

							<p><sup>*</sup>Required field </p>

							<div class="control-group">
								<div class="controls">
									<input type="hidden" name="email_create" value="1">
									<input type="hidden" name="is_new_customer" value="1">
									<input class="btn btn-large btn-success" type="submit" value="Register" />
								</div>
							</div>

						</form>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- MainBody End ============================= -->
	<!-- Footer ================================================================== -->
	<div id="footerSection">
		<div class="container">
			<div class="row">
				<div class="span3">
					<h5>ACCOUNT</h5>
					<a href="login.html">YOUR ACCOUNT</a>
					<a href="login.html">PERSONAL INFORMATION</a>
					<a href="login.html">ADDRESSES</a>
					<a href="login.html">DISCOUNT</a>
					<a href="login.html">ORDER HISTORY</a>
				</div>
				<div class="span3">
					<h5>INFORMATION</h5>
					<a href="contact.html">CONTACT</a>
					<a href="register.php">REGISTRATION</a>
					<a href="legal_notice.html">LEGAL NOTICE</a>
					<a href="tac.html">TERMS AND CONDITIONS</a>
					<a href="faq.html">FAQ</a>
				</div>
				<div class="span3">
					<h5>OUR OFFERS</h5>
					<a href="#">NEW PRODUCTS</a>
					<a href="#">TOP SELLERS</a>
					<a href="special_offer.html">SPECIAL OFFERS</a>
					<a href="#">MANUFACTURERS</a>
					<a href="#">SUPPLIERS</a>
				</div>
				<div id="socialMedia" class="span3 pull-right">
					<h5>SOCIAL MEDIA </h5>
					<a href="#"><img width="60" height="60" src="themes/images/facebook.png" title="facebook"
							alt="facebook" /></a>
					<a href="#"><img width="60" height="60" src="themes/images/twitter.png" title="twitter"
							alt="twitter" /></a>
					<a href="#"><img width="60" height="60" src="themes/images/youtube.png" title="youtube"
							alt="youtube" /></a>
				</div>
			</div>
			<p class="pull-right">&copy; Bootshop</p>
		</div><!-- Container End -->
	</div>
	<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<script src="themes/js/jquery.js" type="text/javascript"></script>
	<script src="themes/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="themes/js/google-code-prettify/prettify.js"></script>

	<script src="themes/js/bootshop.js"></script>
	<script src="themes/js/jquery.lightbox-0.5.js"></script>

	<!-- Themes switcher section ============================================================================================= -->
	<div id="secectionBox">
		<link rel="stylesheet" href="themes/switch/themeswitch.css" type="text/css" media="screen" />
		<script src="themes/switch/theamswitcher.js" type="text/javascript" charset="utf-8"></script>
		<div id="themeContainer">
			<div id="hideme" class="themeTitle">Style Selector</div>
			<div class="themeName">Oregional Skin</div>
			<div class="images style">
				<a href="themes/css/#" name="bootshop"><img src="themes/switch/images/clr/bootshop.png"
						alt="bootstrap business templates" class="active"></a>
				<a href="themes/css/#" name="businessltd"><img src="themes/switch/images/clr/businessltd.png"
						alt="bootstrap business templates" class="active"></a>
			</div>
			<div class="themeName">Bootswatch Skins (11)</div>
			<div class="images style">
				<a href="themes/css/#" name="amelia" title="Amelia"><img src="themes/switch/images/clr/amelia.png"
						alt="bootstrap business templates"></a>
				<a href="themes/css/#" name="spruce" title="Spruce"><img src="themes/switch/images/clr/spruce.png"
						alt="bootstrap business templates"></a>
				<a href="themes/css/#" name="superhero" title="Superhero"><img
						src="themes/switch/images/clr/superhero.png" alt="bootstrap business templates"></a>
				<a href="themes/css/#" name="cyborg"><img src="themes/switch/images/clr/cyborg.png"
						alt="bootstrap business templates"></a>
				<a href="themes/css/#" name="cerulean"><img src="themes/switch/images/clr/cerulean.png"
						alt="bootstrap business templates"></a>
				<a href="themes/css/#" name="journal"><img src="themes/switch/images/clr/journal.png"
						alt="bootstrap business templates"></a>
				<a href="themes/css/#" name="readable"><img src="themes/switch/images/clr/readable.png"
						alt="bootstrap business templates"></a>
				<a href="themes/css/#" name="simplex"><img src="themes/switch/images/clr/simplex.png"
						alt="bootstrap business templates"></a>
				<a href="themes/css/#" name="slate"><img src="themes/switch/images/clr/slate.png"
						alt="bootstrap business templates"></a>
				<a href="themes/css/#" name="spacelab"><img src="themes/switch/images/clr/spacelab.png"
						alt="bootstrap business templates"></a>
				<a href="themes/css/#" name="united"><img src="themes/switch/images/clr/united.png"
						alt="bootstrap business templates"></a>
				<p style="margin:0;line-height:normal;margin-left:-10px;display:none;"><small>These are just examples
						and you can build your own color scheme in the backend.</small></p>
			</div>
			<div class="themeName">Background Patterns </div>
			<div class="images patterns">
				<a href="themes/css/#" name="pattern1"><img src="themes/switch/images/pattern/pattern1.png"
						alt="bootstrap business templates" class="active"></a>
				<a href="themes/css/#" name="pattern2"><img src="themes/switch/images/pattern/pattern2.png"
						alt="bootstrap business templates"></a>
				<a href="themes/css/#" name="pattern3"><img src="themes/switch/images/pattern/pattern3.png"
						alt="bootstrap business templates"></a>
				<a href="themes/css/#" name="pattern4"><img src="themes/switch/images/pattern/pattern4.png"
						alt="bootstrap business templates"></a>
				<a href="themes/css/#" name="pattern5"><img src="themes/switch/images/pattern/pattern5.png"
						alt="bootstrap business templates"></a>
				<a href="themes/css/#" name="pattern6"><img src="themes/switch/images/pattern/pattern6.png"
						alt="bootstrap business templates"></a>
				<a href="themes/css/#" name="pattern7"><img src="themes/switch/images/pattern/pattern7.png"
						alt="bootstrap business templates"></a>
				<a href="themes/css/#" name="pattern8"><img src="themes/switch/images/pattern/pattern8.png"
						alt="bootstrap business templates"></a>
				<a href="themes/css/#" name="pattern9"><img src="themes/switch/images/pattern/pattern9.png"
						alt="bootstrap business templates"></a>
				<a href="themes/css/#" name="pattern10"><img src="themes/switch/images/pattern/pattern10.png"
						alt="bootstrap business templates"></a>

				<a href="themes/css/#" name="pattern11"><img src="themes/switch/images/pattern/pattern11.png"
						alt="bootstrap business templates"></a>
				<a href="themes/css/#" name="pattern12"><img src="themes/switch/images/pattern/pattern12.png"
						alt="bootstrap business templates"></a>
				<a href="themes/css/#" name="pattern13"><img src="themes/switch/images/pattern/pattern13.png"
						alt="bootstrap business templates"></a>
				<a href="themes/css/#" name="pattern14"><img src="themes/switch/images/pattern/pattern14.png"
						alt="bootstrap business templates"></a>
				<a href="themes/css/#" name="pattern15"><img src="themes/switch/images/pattern/pattern15.png"
						alt="bootstrap business templates"></a>

				<a href="themes/css/#" name="pattern16"><img src="themes/switch/images/pattern/pattern16.png"
						alt="bootstrap business templates"></a>
				<a href="themes/css/#" name="pattern17"><img src="themes/switch/images/pattern/pattern17.png"
						alt="bootstrap business templates"></a>
				<a href="themes/css/#" name="pattern18"><img src="themes/switch/images/pattern/pattern18.png"
						alt="bootstrap business templates"></a>
				<a href="themes/css/#" name="pattern19"><img src="themes/switch/images/pattern/pattern19.png"
						alt="bootstrap business templates"></a>
				<a href="themes/css/#" name="pattern20"><img src="themes/switch/images/pattern/pattern20.png"
						alt="bootstrap business templates"></a>

			</div>
		</div>
	</div>
	<span id="themesBtn"></span>
</body>

</html>