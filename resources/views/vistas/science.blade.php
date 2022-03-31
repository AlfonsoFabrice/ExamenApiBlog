<!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Api - Science</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="css/main.css" />
		<noscript><link rel="stylesheet" href="css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
				<!-- Note: The "styleN" class below should match that of the banner element. -->
					<header id="header" class="alt style2">
						<a href="index.html" class="logo"><strong>UPT</strong></a>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<ul class="links">
							<li><a href="{{route('inicioApi')}}">Inicio</a></li>
							<li><a href="landing.html">Landing</a></li>
							<li><a href="generic.html">Generic</a></li>
							<li><a href="elements.html">Elements</a></li>
						</ul>
						<ul class="actions stacked">
							<li><a href="#" class="button primary fit">Get Started</a></li>
							<li><a href="#" class="button fit">Log In</a></li>
						</ul>
					</nav>

				<!-- Banner -->
				<!-- Note: The "styleN" class below should match that of the header element. -->
					

				<!-- Main -->
					<div id="main">
						<!-- Three -->
						<section id="three">
							<div class="inner">
								<header class="major">
									<h2>Science</h2>
								</header>
								<ul class="actions">
									<li><a href="{{route('apiStories')}}" class="button next">Regresar al inicio</a></li>
								</ul>
							</div>
						</section>
						<!-- Two -->
						@foreach($elementos as $item)
						<section id="two" class="spotlights">
							<section>
							

								<a href="generic.html" class="image">
									<img src="images/pic08.jpg" alt="" data-position="center center" />
								</a>
								<div class="content">
									<div class="inner">

										<header class="major">
											<h3>{{$item['titulo']}}</h3>
										</header>
										<p>{{$item['resumen']}}</p>
										<ul class="actions">
											<li><a href="{{$item['url']}}" class="button">Ver nota completa</a></li>
										</ul>

									</div>
								</div>
							
							</section>
						</section>		
						@endforeach

					</div>
				

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<ul class="icons">
								<li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
								<li><a href="#" class="icon brands alt fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
							</ul>
							<ul class="copyright">
								<li>&copy; Untitled</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</footer>
			</div>

		<!-- Scripts -->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.scrolly.min.js"></script>
		<script src="js/jquery.scrollex.min.js"></script>
		<script src="js/browser.min.js"></script>
		<script src="js/breakpoints.min.js"></script>
		<script src="js/util.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>