<!DOCTYPE HTML>

<html>
	<head>
		<title>fypadrina</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/assets/css/main.css" />
	</head>
	<body>
    <header id="header">
				<div class="inner">
				<a href="/" class="logo">FYP Adrina</a>
					<nav id="nav">
					<a href="/">Home</a>
					<a href="/recommend">Recommend</a>
					<a href="/recommend2">Recommend 2</a>
				<a href="/pcname/create">PC Stores</a>
					</nav>
				</div>
			</header>
			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

		<!-- Banner -->
			@yield('header')

@yield('content')
<section id="footer">
				<div class="inner">
			
					<div class="copyright">
						&copy; Adrina Design: <a href="https://templated.co/">TEMPLATED</a>. Images <a href="https://unsplash.com/">Unsplash</a>
					</div>
				</div>
			</section>
	</body>
</html>