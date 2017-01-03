<?php
include('../session.php');
if(!isset($login_session)){
	header('Location: ../../index.php'); // Redirecting To Home Page
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>DDPS</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" media="screen,projection" type="text/css" href="../../css/reset.css" />
	<link rel="stylesheet" media="screen,projection" type="text/css" href="../../css/main.css" />
	<link rel="stylesheet" media="screen,projection" type="text/css" href="../../css/style.css" />
	<link rel="stylesheet" media="print" type="text/css" href="../../css/print.css" />
</head>
<body>
<div id="main" style="width:1150px">
	<div id="header">
		<h1 id="logo"><a href="../../index.php"><img src="../../images/tmp/logo.png" alt="" /></a></h1>
		<hr class="noscreen"/>
		<div id="nav"> 
			<font size=5 font-weight="bold">Dengue Detection & Prevention System &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font>
			<a href="../logout.php" style="text-decoration:none;"><b>Sign Out</b></a><span>|</span>
			<a href="../../aboutUs.php" style="text-decoration:none;"><b>About Us</b></a> <span>|</span> 
			<a href="../../contactUs.php" style="text-decoration:none;"><b>Contact Us</b></a> 
		</div>
	</div>
	<br/>
	<div id="tray" style="width:1150px">
		<ul>
			<li><a href="../../index.php">Home</a></li>
			<li><a href="../../dengueMap.php">Dengue Map</a></li>
			<li><a href="../../dengueInfo.php">Dengue Info</a></li>
			<li><a href="../../currentNews.php">Current News</a></li>
		</ul>
		<div id="search" class="box">
			<form action="#" method="get">
			<div class="box">
				<div id="search-input"><span class="noscreen">Search:</span>
					<input type="text" size="30" name="" value="Search" />
				</div>
				<div id="search-submit">
					<input type="image" src="../../images/design/search-submit.gif" value="OK" />
				</div>
			</div>
			</form>
		</div>		
	</div>		
    <div id="col-top" style="margin-top:40px"></div>     
    <div id="col"class="box" style="height:1200px; overflow:hidden">         
		<div name="mainpannel"  style="height:1350px; width:100%">         
		<iframe style="width:100%; height:95%; margin-top:-10px; margin-left:0px" src="rdhsReg.php"></iframe>
		</div>
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
