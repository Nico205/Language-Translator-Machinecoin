<?php

$content = '<!DOCTYPE HTML>
<!--
	Helios 1.5 by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>'. $title .'</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet" type="text/css" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
			<link rel="stylesheet" href="css/style-noscript.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
	</head>
	<body class="no-sidebar">
        		<!-- Header -->
			<div id="header">

				<!-- Inner -->
					<div class="inner">
						<header>
							<h1><a href="'.$lang.'-index.html" id="logo">Machinecoin</a></h1>
						</header>
					</div>
				
				<!-- Nav -->
					<nav id="nav">
						<ul>
							'.$links.'
						</ul>
					</nav>

			</div>
			
		<!-- Main -->
			<div class="wrapper style1">

				<div class="container">
					<div class="row">
						<div class="12u skel-cell-important" id="content">
							<article id="main" class="special">
								<header>
									<h2><a href="installation.html">Installation</a></h2>
									<span class="byline">
										'.$installation.'
									</span>
								</header>
								<!-- <a href="http://mdomaradzki.deviantart.com/art/Planet-Bronte-339258500" class="image featured"><img src="images/pic06.jpg" alt="" /></a>
								<p>
									Commodo id natoque malesuada sollicitudin elit suscipit. Curae suspendisse mauris posuere accumsan massa 
									posuere lacus convallis tellus interdum. Amet nullam fringilla nibh nulla convallis ut venenatis purus 
									lobortis. Auctor etiam porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum 
									consequat integer interdum integer purus sapien. Nibh eleifend nulla nascetur pharetra commodo mi augue 
									interdum tellus. Ornare cursus augue feugiat sodales velit lorem. Semper elementum ullamcorper lacinia 
									natoque aenean scelerisque vel lacinia mollis quam sodales congue.
								</p> -->
								<section>
									<header>
										<h2 class="fa fa-external-link circled solo"><span>Windows</span></h2>
									</header>
									<p>
										<strong>Windows</strong>
									</p>
									<ul class="divided">
										<li>
											<article class="special">
												<a href=
												"http://machinecoin.org/download/machinecoin-qt.zip"
												title="Machinecoin Wallet 0.8.6.2+OpenSSL1.0.1g">Machinecoin Wallet 0.8.6.2+OpenSSL1.0.1g</a>,
												<a href=
												"https://github.com/Gitju/Machinecoin/archive/master.zip"
												title="Source code">Source code</a>,
												<a href=
												"https://github.com/Gitju/Machinecoin-Docs/archive/master.zip"
												title="Build instructions">Build
												instructions</a>
											</article>
										</li>
									</ul>
									<p>
										<strong>Setup</strong>
									</p>
									<ul class="divided">
										<li>
											<article class="special">
												1. Unzip "machinecoin-qt.zip" to for
												example&nbsp;"C:\Machinecoin\"<br>
												2. Start
												"machinecoin-qt.exe" with a mouse click and
												close it again after the very first
												start.<br>
												3. Copy 
												"machinecoin.conf"
												to&nbsp;"C:\Users\<em>&lt;Username&gt;</em>\AppData\Roaming\Machinecoin\machinecoin.conf"
												and change "&lt;rpcusername&gt;" and
												"&lt;rpcpassword&gt;" inside of it.<br>
												4.&nbsp;Start "machinecoin-qt.exe" with a mouse click.
											</article>
										</li>
									</ul>
								</section>
								
								<section>
									<header>
										<h2 class="fa fa-external-link circled solo"><span>Linux</span></h2>
									</header>
									<p>
										<strong>Linux</strong>
									</p>
									<ul class="divided">
										<li>
											<article class="special">
												<a href=
												"https://github.com/Gitju/Machinecoin/archive/master.zip"
												title="Source code">Source code</a>,
												<a href=
												"https://github.com/Gitju/Machinecoin-Docs/archive/master.zip"
												title="Build instructions">Build
												instructions</a>
											</article>
										</li>
									</ul>
								</section>
								
								<section>
									<header>
										<h2 class="fa fa-external-link circled solo"><span>Mac OS X</span></h2>
									</header>
									<p>
										<strong>Mac OS X</strong>
									</p>
									<ul class="divided">
										<li>
											<article class="special">
												<a href=
												"https://github.com/Gitju/Machinecoin/archive/master.zip"
												title="Source code">Source code</a>,
												<a href=
												"https://github.com/Gitju/Machinecoin-Docs/archive/master.zip"
												title="Build instructions">Build
												instructions</a>
											</article>
										</li>
									</ul>
								</section>
								
								<section>
									<header>
										<h2 class="fa fa-external-link circled solo"><span>Android</span></h2>
									</header>
									<p>
										<strong>Android</strong>
									</p>
									<ul class="divided">
										<li>
											<article class="special">
												<a href=
												"http://machinecoin.org/download/machinecoin-android.apk"
												title="Machinecoin Androidwallet 3.30.8 BETA">Machinecoin Androidwallet 3.30.8 BETA</a>,
												<a href=
												"https://github.com/Gitju/Machinecoin-Androidwallet/archive/master.zip"
												title="Source code">Source code</a>,
												<a href=
												"https://github.com/Gitju/Machinecoin-Docs/archive/master.zip"
												title="Build instructions">Build
												instructions</a>
											</article>
										</li>
									</ul>
									<p>
										<strong>Setup</strong>
									</p>
									<ul class="divided">
										<li>
											<article class="special">
												1. Download "machinecoin-android.apk" to your smartphone or tablet.<br>
												2. Open "machinecoin-android.apk" and walk through the installation procedure.<br>
												3. Start "machinecoin-android.apk" by clicking on the Machinecoin symbol on your homescreen.
											</article>
										</li>
									</ul>
								</section>
								
							</article>
						</div>
					</div>
				</div>

			</div>

		<!-- Footer -->
			<div id="footer">
				<div class="container">
					<hr />
					<div class="row">
						<div class="12u">
							
							<!-- Contact -->
								<section class="contact">
									<header>
										<h3>'.$idea.'</h3>
									</header>
									<p><a href="https://github.com/Gitju/Machinecoin-Communitykit">'.$download.'</p>
									<ul class="icons">
										<li><a href="https://twitter.com/machinecoin" class="fa fa-twitter solo"><span>Twitter</span></a></li>
									</ul>
								</section>
							
							<!-- Copyright -->
								<div class="copyright">

									<ul class="menu">
										<li>Photo Machinecoingirl: <a href="http://idienstler.de">iDienstler</a>, <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a></li>
										<li>HTML template design: <a href="http://html5up.net/">HTML5 UP</a></li>
										<li>&copy; 2014 <a href="http://machinecoin.org">Machinecoin Project</a>. All rights reserved.</li>
									</ul>
								</div>
							
						</div>
					
					</div>
				</div>
			</div>
	</body>
</html>
';

?>

