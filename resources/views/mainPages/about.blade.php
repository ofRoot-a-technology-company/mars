<!DOCTYPE HTML>
<html>
	<head>
    <title>About Us | Metro Area Removal Services</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{asset('css/index.css') }}" />
		<noscript><link rel="stylesheet" href="{{ asset('css/noscript.css') }}" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- NAV/Header -->
                @php $name='About Us'; @endphp
                <x-nav-bar :name="$name"/>

				<!-- Main -->
					<div id="main" class="alt">

						<!-- One -->
							<section id="one">
								<div class="inner">
									<header class="major">
										<h1>US & OUR MISSION</h1>
									</header>
									<!-- <span class="image main"><img src="images/pic11.jpg" alt="" /></span> -->
									<p>At Metro Area Removal Services, we are dedicated to providing our customers with high-quality and reliable junk removal services. We understand that clearing out your home or office can be a daunting task, and that's why we're here to help. </p>
									<p>Our company stands out for our commitment to transparent pricing and no-obligation estimates. We believe that our customers should know exactly what they're paying for, and we take pride in providing clear and easy-to-understand pricing for all of our services. Additionally, we always offer free estimates with no obligation, so you can make an informed decision about whether our services are right for you.
</p>
									<p>But we don't just stop at hauling away your junk. We also offer a donation pickup service to help our customers give back to their communities. We work with local charities to ensure that any usable items are given a second life and don't end up in a landfill.</p>

                                    <p>No matter what type of junk you need removed, we have you covered. We haul a wide range of materials, including furniture, appliances, carpeting, mattresses and boxsprings, scrap metal, tires, office equipment, yard debris, hot tubs, paint, and many other items. Our team is equipped with the tools and experience necessary to handle any job, big or small.</p>

                                    <p>At Metro Area Removal Services, our goal is to make junk removal as easy and stress-free as possible for our customers. Contact us today to learn more about our services and schedule your free estimate.
</p>
								</div>
							</section>

					</div>


                <!-- Contact -->
                <x-contact/>

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
