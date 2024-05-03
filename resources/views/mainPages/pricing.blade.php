<!DOCTYPE HTML>
<html>
	<head>
        <title>Our Pricing | Metro Area Removal Services</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
        <noscript<link rel="stylesheet" href="{{ asset('css/noscript.css') }}" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

                <!-- NAV/Header -->
                @php $name='Pricing'; @endphp
                <x-nav-bar :name="$name"/>


				<!-- Main -->
					<div id="main" class="alt">

						<!-- One -->
							<section id="one">
								<div class="inner">
									<header class="major">
										<h1>OUR PRICING</h1>
									</header>
                                    <!-- TODO add image later -->
									<!-- <span class="image main"><img src="images/pic11.jpg" alt="" /></span> -->
									<p>Our company stands out for our commitment to transparent pricing and no-obligation estimates. We believe that our customers should know exactly what they're paying for, and we take pride in providing clear and easy-to-understand pricing for all of our services. Additionally, we always offer free estimates with no obligation, so you can make an informed decision about whether our services are right for you.</p>


									<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dapibus rutrum facilisis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam tristique libero eu nibh porttitor fermentum. Nullam venenatis erat id vehicula viverra. Nunc ultrices eros ut ultricies condimentum. Mauris risus lacus, blandit sit amet venenatis non, bibendum vitae dolor. Nunc lorem mauris, fringilla in aliquam at, euismod in lectus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In non lorem sit amet elit placerat maximus. Pellentesque aliquam maximus risus, vel sed vehicula.</p>
									<p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis. Praesent rutrum sem diam, vitae egestas enim auctor sit amet. Pellentesque leo mauris, consectetur id ipsum sit amet, fersapien risus, commodo eget turpis at, elementum convallis elit. Pellentesque enim turpis, hendrerit tristique lorem ipsum dolor.</p> -->
								</div>
							</section>

					</div>

				<!-- Contact-->
                <!-- Allow customer to request a free estimate for a job -->
					<!-- <section id="contact">
						<div class="inner"> -->
                            <section>
                                <x-contact/>
                            </section>
						<!-- </div>
					</section> -->

					<!-- Footer -->
                    <x-footer/>

			</div>

		<!-- Scripts -->
            <script src="{{ asset('/js/jquery.min.js') }}"></script>
			<script src="{{ asset('/js/jquery.scrolly.min.js') }}"></script>
			<script src="{{ asset('/js/jquery.scrollex.min.js') }}"></script>
			<script src="{{ asset('/js/browser.min.js') }}"></script>
			<script src="{{ asset('/js/breakpoints.min.js') }}"></script>
			<script src="{{ asset('/js/util.js') }}"></script>
			<script src="{{ asset('/js/main.js') }}"></script>

	</body>
</html>
