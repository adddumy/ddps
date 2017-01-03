<?php
include('../login/session.php');
if(!isset($login_session)){
	header('Location: ../index.php'); // Redirecting To Home Page
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>DDPS</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" media="screen,projection" type="text/css" href="css/reset.css" />
	<link rel="stylesheet" media="screen,projection" type="text/css" href="css/main.css" />
	<link rel="stylesheet" media="screen,projection" type="text/css" href="css/style.css" />
	<link rel="stylesheet" media="print" type="text/css" href="css/print.css" />
	<!-- Image Slider-->
		<link href="slider/js-image-slider.css" rel="stylesheet" type="text/css" />
		<script src="slider/mcVideoPlugin.js" type="text/javascript"></script>
		<script src="slider/js-image-slider.js" type="text/javascript"></script>
	<!-- Image Slider-->
</head>
<body>
<div id="main">
	<div id="header">
		<h1 id="logo"><a href="index.php"><img src="images/tmp/logo.png" alt="" /></a></h1>
		<hr class="noscreen"/>
		<div id="nav"> 
			<font size=5 font-weight="bold">Dengue Detection & Prevention System &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font>
			<a href="login/register.php" style="text-decoration:none;"><b>Sign Up</b></a><span>|</span>
			<a href="login/login.php" style="text-decoration:none;"><b>Sign In</b></a> <span>|</span> 
			<a href="aboutUs.php" style="text-decoration:none;"><b>About Us</b></a> <span>|</span> 
			<a href="contactUs.php" style="text-decoration:none;"><b>Contact Us</b></a> 
		</div>
	</div>
	<br/>
	<div id="tray">
		<ul>
			<li id="tray-active"><a href="index.php">Home</a></li>
			<li><a href="dengueMap.php">Dengue Map</a></li>
			<li><a href="dengueInfo.php">Dengue Info</a></li>
			<li><a href="currentNews.php">Current News</a></li>
		</ul>
		<div id="search" class="box">
			<form action="#" method="get">
			<div class="box">
				<div id="search-input"><span class="noscreen">Search:</span>
					<input type="text" size="30" name="" value="Search" />
				</div>
				<div id="search-submit">
					<input type="image" src="images/design/search-submit.gif" value="OK" />
				</div>
			</div>
			</form>
		</div>	
	</div>			
    <div id="sliderFrame" style="width:100%">
        <div id="slider" style="width:100%">
            <img src="images/slider/1.jpg" style="width:100%" />
            <img src="images/slider/2.jpg" style="width:100%" />
            <img src="images/slider/3.jpg" style="width:100%" />
            <img src="images/slider/4.jpg" style="width:100%" />
            <img src="images/slider/5.jpg" style="width:100%" />
            <img src="images/slider/6.jpg" style="width:100%" />
        </div>       
    </div>		
	<div id="col-top" style="margin-top:40px"></div>
	<div id="col" class="box" style="height:600px; overflow:hidden">
		<iframe name="mainpannel" width="100%" height="100%" ></iframe>
		<div id="col-text"></div>
	</div>
	<hr class="noscreen" />
	<div id="col-bottom"></div>
	<div id="footer">
		<p>Copyright &copy;&nbsp;2017 <strong><a href="#">University of Jaffna</a></strong>, All Rights Reserved &reg;</p>
	</div>
</div>
</body>
</html>