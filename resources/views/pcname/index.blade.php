@extends( 'layout')


@section('content')
    <header id="header">
				<div class="inner">
					
					<a href="/" class="logo">FYP Adrina</a>
					<nav id="nav">
						<a href="/">Home</a>
						<a href="/recommend">Recommend</a>
						<a href="elements.html">PC Stores</a>
					</nav>
					
				</div>
			</header>
			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a> -->

		<!-- Banner -->
			<!-- <section id="banner">
				<div class="inner">
					<h1>Introspect: <span>A free + fully responsive<br />
					site template by TEMPLATED</span></h1>
					<ul class="actions">
						<li><a href="#" class="button alt">Get Started</a></li>
					</ul>
				</div>
			</section> //check sini kalau taknak header ni bila tekan generic -->

		<!-- One
			<section id="one">
				<div class="inner">
					<header>
						<h2>Magna Etiam Lorem</h2>
					</header>
					<p>Suspendisse mauris. Fusce accumsan mollis eros. Pellentesque a diam sit amet mi ullamcorper vehicula. Integer adipiscin sem. Nullam quis massa sit amet nibh viverra malesuada. Nunc sem lacus, accumsan quis, faucibus non, congue vel, arcu, erisque hendrerit tellus. Integer sagittis. Vivamus a mauris eget arcu gravida tristique. Nunc iaculis mi in ante.</p>
					<ul class="actions">
						<li><a href="#" class="button alt">Learn More</a></li>
					</ul>
				</div>
			</section>

		<Two -->
			<section id="two">
				<div class="inner">
					<article>
						<div class="content">
						@foreach ($pcname as $pcname)
							<header>
								<h3>
							<a href="/pcname/{{ $pcname->id}}"> {{ $pcname->PCname }} </a></h3>
							</header>
							<div class="image fit">
								<img src="images/pic01.jpg" alt="" />
							</div>
							<p>{{ $pcname->rating }}</p>
							<p>{{!! $pcname->detail !!}}</p>
							<ul class="actions">
								<li><a href="#" class="button alt">Learn More</a></li>
							</ul>
							@endforeach
						</div>
					</article>
					
					
				</div>
			</section>

		<!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

  
@endsection