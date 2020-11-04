@extends( 'layout')


@section('content')
	
    <header id="header">
				<div class="inner">
					
					<a href="/" class="logo">FYP Adrina</a>
					<nav id="nav">
						<a href="/">Home</a>
						<a href="/recommend">Recommend</a>
						<a href="/pcname/create">PC Stores</a>
					</nav>
					
				</div>
			</header>
			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a> -->

		
			<section id="one">
				<div class="inner">
					<header>
						<h2>{{ $pcname->PCname }}</h2>
					</header>
					<P>
					<img
						src='/images/egmonaliza.jpg'
						alt=""
						class="image image-full"
						/>
							<br>
						{{ $pcname->detail }}
					</p>
				</div>
			</section>

		<Two -->
			
					
					
				</div>
			</section>

		<!-- Footer -->
			<section id="footer">
				<div class="inner">
					<header>
						<h2>Get in Touch</h2>
					</header>
					<form method="post" action="#">
						<div class="field half first">
							<label for="name">Name</label>
							<input type="text" name="name" id="name" />
						</div>
						<div class="field half">
							<label for="email">Email</label>
							<input type="text" name="email" id="email" />
						</div>
						<div class="field">
							<label for="message">Message</label>
							<textarea name="message" id="message" rows="6"></textarea>
						</div>
						<ul class="actions">
							<li><input type="submit" value="Send Message" class="alt" /></li>
						</ul>
					</form>
					
				</div>
			</section>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

  
@endsection

        