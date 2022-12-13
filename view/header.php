<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>PhoneCaseShop Online Shopping cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link id="callCss" rel="stylesheet" href="themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="themes/css/base.css" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive -->	
	<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->	
	<link href="themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
<!-- fav and touch icons -->
<link rel="shortcut icon" href="themes/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="themes/images/ico/apple-touch-icon-57-precomposed.png">
	<link rel="stylesheet" href="./asset/css/style.css">
	
	<style type="text/css" id="enject"></style>
	<style>
		@media screen and (min-width: 1200px) {
		.span9 {
			width: 1200px !important;
		}
		.thumbnail-css {
		width: 262px;
		height: 260px;	
}

		.custom-price-css{
			position: relative;
			top: 0%;
			left: 79%;
			z-index: 10;
		}

  }

	</style>
  </head>
<body>
<div id="header">
<div class="container">
<div id="welcomeLine" class="row">
	<div class="span6">Hello!<strong> <?php
	 if(isset($_COOKIE['USERNAME'])){
		echo $_COOKIE['USERNAME']; 
		
	}else{
		echo "user";
	}
	 
	 ?></strong></div>
	<div class="span6">
	<div class="pull-right">
		<form  method="post" action="./shoppingCart.php">
			<input type="hidden"  name="session" value='<?php
				if(isset($_COOKIE['USERNAME'])){
					echo $_COOKIE['USERNAME']; 
				}else{
					echo "";
	}?>' >
			<button><i class="icon-shopping-cart icon-white"></i>Itemes in your cart </span></button>
		</form>
	</div>
	</div>
</div>
<!-- Navbar ================================================== -->
<div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>
  <div class="navbar-inner">
    <a class="brand" href="./home.php"><img src="themes/images/logo.png" alt="PhoneCaseShop"/></a>
		<form class="form-inline navbar-search" method="post" action="./home.php" >
		<input id="srchFld" name="key_searching" class="srchTxt" type="text" />
		 
		  <button type="submit" id="submitButton" class="btn btn-primary">Go</button>
    </form>
    <ul id="topMenu" class="nav pull-right">
	<li class=""><a href="./logout.php"><?php

		if(isset($_COOKIE['USERNAME'])){
			echo 'Logout';
		}
	 ?></a></li>
	<li class=""><a href="./admin.php?route=USER"><?php
		if (isset($_COOKIE['ROLE']) && $_COOKIE['ROLE'] == "ADMIN"){
			echo 'Admin';
		}
	 ?></a></li>
	
	 <li class=""><a href="./account.php?profile=<?php
	 if(isset($_COOKIE['USERNAME'])){
		echo $_COOKIE['USERNAME']; 
	}else{
		echo "";
	}
	 
	 ?>">Profile</a></li>
	 <li class=""><a href="./register.php">Register</a></li>
	 <li class="">
	 <a href="./login.php" style="padding-right:0"><span class="btn btn-large btn-success">Login</span></a>
	</li>
    </ul>
  </div>
</div>
</div>
</div>