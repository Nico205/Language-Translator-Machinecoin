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
		<!--[if lte IE 8]><script src="./js/html5shiv.js"></script><![endif]-->
		<script src="./js/jquery.min.js"></script>
		<script src="./js/jquery.dropotron.min.js"></script>
		<script src="./js/skel.min.js"></script>
		<script src="./js/skel-panels.min.js"></script>
		<script src="./js/init.js"></script>
	<noscript>
		<link rel="stylesheet" href="./css/skel-noscript.css" />
		<link rel="stylesheet" href="./css/style.css" />
		<link rel="stylesheet" href="./css/style-desktop.css" />
		<link rel="stylesheet" href="./css/style-noscript.css" />
	</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="./css/ie8.css" /><![endif]-->
</head>
	<body class="homepage">

		<!-- Header -->
			<div id="header">

				<!-- Inner -->
					<div class="inner">
						<header>
							<h1><a href="#" id="logo">Machinecoin</a></h1>
							<hr />						
							<span class="byline">'. $slogan .'</span>
						</header>
						<footer>
							<a href="#banner" class="button circled scrolly fadeInDown">Start</a>
						</footer>
					</div>

				<!-- Nav -->
					<nav id="nav">
						<ul>
							'.$links.'
						</ul>
					</nav>

			</div>

		<!-- Banner -->
			<div id="banner">
				<h2>'.$slogan2.'</h2>
				<br />
				<span class="byline">
					'.$about .' 
					<footer>
						<a href="./'. $lang .'-installation.html" class="button">Windows</a>
						<a href="./'. $lang .'-installation.html" class="button">&nbsp;&nbsp;&nbsp;&nbsp;Linux&nbsp;&nbsp;&nbsp;&nbsp;</a>
						<a href="./'. $lang .'-installation.html" class="button">Mac OS X</a>		
						<a href="./'. $lang .'-installation.html" class="button">&nbsp;Android&nbsp;</a>	
						<a href="./'. $lang .'-installation.html" class="button">&nbsp;&nbsp;Source&nbsp;&nbsp;</a>			
					</footer>
				</span>
			</div>

		<!-- Carousel -->
			<div class="carousel">
				<div class="reel">

					<article>
						<a href="'. $lang .'-blockchain.html" class="image featured"><img src="./images/pic01.jpg" alt="Blockchain Explorer" /></a>
						<header>
							<h3><a href="'. $lang .'-blockchain.html">'. $blockchain_text .'</a></h3>
						</header>
						<p>'. $blockchain . '</p>							
					</article>

					<article>
						<a href="'. $lang .'-exchanges.html" class="image featured"><img src="./images/pic02.jpg" alt="Exchanges" /></a>
						<header>
							<h3><a href="'. $lang .'-exchanges.html">'. $exchange_text .'</a></h3>
						</header>
						<p>'. $exchange .'</p>							
					</article>

					<article>
						<a href="'. $lang .'-shops.html" class="image featured"><img src="./images/pic03.jpg" alt="Shops" /></a>
						<header>
							<h3><a href="'. $lang .'-shops.html">'. $shop_text .'</a></h3>
						</header>
						<p>'. $shop .'</p>							
					</article>

					<article>
						<a href="'. $lang .'-miner.html" class="image featured"><img src="./images/pic04.jpg" alt="Miner" /></a>
						<header>
							<h3><a href="'. $lang .'-miner.html">'. $miner_text .'</a></h3>
						</header>
						<p>'. $miner .'</p>							
					</article>

					<article>
						<a href="'. $lang .'-pools.html" class="image featured"><img src="./images/pic05.jpg" alt="Mining-Pools" /></a>
						<header>
							<h3><a href="'. $lang .'-pools.html">'. $pool_text .'</a></h3>
						</header>
						<p>'. $pool .'</p>							
					</article>

					<article>
						<a href="'. $lang .'-faucets.html" class="image featured"><img src="./images/pic17.jpg" alt="Faucets" /></a>
						<header>
							<h3><a href="'. $lang .'-paper-wallets.html">'. $faucet_text .'</a></h3>
						</header>
						<p>'. $faucet .'</p>							
					</article>

					<article>
						<a href="'. $lang .'-paper.html" class="image featured"><img src="./images/pic16.jpg" alt="Paper-Wallet" /></a>
						<header>
							<h3><a href="'. $lang .'-paper.html">'. $paper_wallet_text .'</a></h3>
						</header>
						<p>'. $paper_wallet .'</p>							
					</article>

					<article>
						<a href="'. $lang .'-irc-channels.html" class="image featured"><img src="./images/pic06.jpg" alt="IRC Channels" /></a>
						<header>
							<h3><a href="'. $lang .'-irc-channels.html">'. $irc_text .'</a></h3>
						</header>
						<p>'. $irc .'</p>							
					</article>

					<article>
						<a href="'. $lang .'-forums.html" class="image featured"><img src="./images/pic07.jpg" alt="Forums" /></a>
						<header>
							<h3><a href="'. $lang .'-forums.html">'. $forum_text .'</a></h3>
						</header>
						<p>'. $forum .'</p>							
					</article>

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
</html>';  

?>
