<!DOCTYPE HTML>
<html>
	<head>
		<title>Metro Area Removal Services | Home Services Company</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <meta name="description" content="Metro Area Removal Services is a family-owned company serving your removal needs.
             Learn about our services and get a free estimate.">
		<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
		<noscript><link rel="stylesheet" href="{{ asset('css/noscript.css') }}" /></noscript>
        <style>
            .orange-button {
                background-color: orange; /* Change button background color to orange */
                color: white; /* Change text color to white */
            }
        </style>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">
				<!-- NAV/Header -->
                @php $name='Welcome'; @endphp
                <div class="mb-3 pb-3">
                    <x-nav-bar :name="$name"/>
                </div>
				<!-- Banner -->
                <section id="banner" class="major mb-1 ">
                    <div class="container-fluid">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if(session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                    </div>
                    <div class="inner">
                        <header class="major">
                            <h1 style="color:white;">METRO AREA REMOVAL SERVICES</h1>
                        </header>
                        <div class="content">
                            <p>Hours Of Operation: 9am - 5pm est</p>
                            <p>A Metro area company serving you and your businesses needs,<br> we are family owned and devoted to serving the community.</p>
                            <ul class="actions">
                                <li><a href="#one" class="button next scrolly">Get Started</a></li>
                            </ul>
                            <ul class="actions">
    <li><a href="/online-booking/service-selection" class="button next scrolly orange-button">Book A Call</a></li>
</ul>
                        </div>
                        <!-- Angies list provided seals/images -->
                        <div class="row" style="padding-bottom:2.5%; margin: bottom 2.5%;">
                            <div class=" col-4 col-sm-12" id="">
                                <a style="text-decoration: none;" href="https://www.homeadvisor.com/rated.metroarearemovalservice.137223648.html" style="display: block; margin: 0 auto;">
                                    <img alt="HomeAdvisor Screened & Approved Business" style="display:block;" src="https://www.homeadvisor.com/images/sp-badges/soap-solid-border.png?sp=137223648&key=edb1f7dd58aad3ecdde8ed9e63e128f6" />
                                        <!-- Screen & Approved -->
                                </a>
                            </div>
                            <div class=" col-4 col-sm-12" id="">
                                <a style="text-decoration: none;" href="https://www.homeadvisor.com/c.Waste-Material-Removal.Ypsilanti.MI.-12076.html#spid=137223648" style="display: block; margin: 0 auto;">
                                    <img alt="Metro Area Removal Services is a Top Rated HomeAdvisor Pro" style="display:block;" src="https://www.homeadvisor.com/images/sp-badges/toprated-solid-border.png?sp=137223648&key=edb1f7dd58aad3ecdde8ed9e63e128f6" />
                                        <!-- Top rated professional -->
                                </a>
                            </div>
                            <div class=" col-4 col-sm-12" id="">
                                <a style="text-decoration: none;" href="https://www.homeadvisor.com/c.Waste-Material-Removal.Ypsilanti.MI.-12076.html#spid=137223648" style="display: block; margin: 0 auto;">
                                    <img alt="Metro Area Removal Services - HomeAdvisor Elite Service" style="display:block;" src="https://www.homeadvisor.com/images/sp-badges/elite-solid-border.png?sp=137223648&key=edb1f7dd58aad3ecdde8ed9e63e128f6" />
                                        <!-- Elite service professional -->
                                </a>
                            </div>
                        </div>
                    </div>
                </section>

				<!-- Main -->
					<div id="main">

						<!-- One -->
							<section id="one" class="tiles">
								<article>
									<span class="image">
										<img src="images/pic01.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="/pricing" class="link">HOW MUCH DOES IT COST?</a></h3>
										<p>Prices based on volume,
                                           <a href="/pricing">click here to learn more</a>
                                        </p>
									</header>

								</article>
								<article>
									<span class="image">
										<img src="images/pic02.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="/hauled-items" class="link">WHAT ITEMS DO WE TAKE?</a></h3>
										<p>To see the items available for hauling, <a href="/hauled-items">click here to learn more</a></p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/pic03.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="/schedule-pickup" class="link">WHEN CAN YOU PICKUP MY STUFF?</a></h3>
										<p>We offer prompt service, with options for either same-day or next-day
                                                    appointments.
                                                    <a href="/schedule-pickup">click here to learn more</a></p>
                                        </p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/pic04.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="how-it-works" class="link">HOW DOES IT WORK?</a></h3>
										<p>Take a look at our process, rest assured, you're in good hands
                                        <a href="/how-it-works">click here to learn more</a>
                                        </p>
									</header>
								</article>

							</section>

						<!-- Two -->

							<section id="two">
								<div class="inner">
									<!-- <header class="major">
										<h2>Angies Top Rated Servi</h2>
									</header> -->
                            <!-- <div class="content" id="angiesList">
								<ul class="actions" class="">
                                    <li class="">
                                        <a href="http://www.homeadvisor.com/rated.metroarearemovalservice.137223648.html" style="display: block; margin: 0 auto;">
                                            <img alt="HomeAdvisor Screened & Approved Business" style="display:block;" src="http://www.homeadvisor.com/images/sp-badges/soap-solid-border.png?sp=137223648&key=edb1f7dd58aad3ecdde8ed9e63e128f6" />
                                            Screen & Approved
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="http://www.homeadvisor.com/c.Waste-Material-Removal.Ypsilanti.MI.-12076.html#spid=137223648" style="display: block; margin: 0 auto;">
                                            <img alt="Metro Area Removal Services is a Top Rated HomeAdvisor Pro" style="display:block;" src="http://www.homeadvisor.com/images/sp-badges/toprated-solid-border.png?sp=137223648&key=edb1f7dd58aad3ecdde8ed9e63e128f6" />
                                            Top rated professional
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="http://www.homeadvisor.com/c.Waste-Material-Removal.Ypsilanti.MI.-12076.html#spid=137223648" style="display: block; margin: 0 auto;">
                                            <img alt="Metro Area Removal Services - HomeAdvisor Elite Service" style="display:block;" src="http://www.homeadvisor.com/images/sp-badges/elite-solid-border.png?sp=137223648&key=edb1f7dd58aad3ecdde8ed9e63e128f6" />
                                                Elite service professional
                                        </a>
                                    </li>
								</ul>
							</div> -->
								</div>
							</section>

					</div>


                    <section id="four">
                        <div class="inner">
                            <header class="major">
                                <h1>Service Areas</h1>
                            </header>
                            <p>
                                <li>Ann Arbor, Michigan</li>
                                <li>Ypsilanti, Michigan</li>
                                <li>Belleville, Michigan</li>
                                <li>Canton, Michigan</li>
                                <li>Garden City, Michigan</li>
                                <li>Livonia, Michigan</li>
                                <li>Milan, Michigan</li>
                                <li>Northville, Michigan</li>
                                <li>Novi, Michigan</li>
                                <li>Plymouth, Michigan</li>
                                <li>Saline, Michigan</li>
                                <li>Van Buren Township, Michigan</li>
                                <li>Westland, Michigan</li>
                                <li>Whitmore Lake, Michigan</li>
                                <li>Wixom, Michigan</li>
                                <li>Romulus, Michigan</li>
                            </p>
                        </div>
                    </section>
                <!-- Contact Areas -->
                <section id="three">
                    <div class="inner">
                        <header class="major">
                            <h1>Connect with us</h1>
                        </header>
                        <p>Contact us here for more information on our services and to recieve a <a href="/online-booking/service-selection">free estimate</a></p>
                        <x-contact/>
                    </div>
                </section>

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
        <script type="application/ld+json">
            {
                "@context": "http://schema.org",
                "@type": "LocalBusiness",
                "name": "Metro Area Removal Services",
                "description": "Metro Area Removal Services is a family-owned removal service company serving the community's needs.",
                "address": {
                    "@type": "PostalAddress",
                    "streetAddress": "",
                    "addressLocality": "Ann Arbor",
                    "addressRegion": "Michigan",
                    "postalCode": "48103",
                    "addressCountry": "United States"
                },
                "telephone": "1-734-985-4490",
                "email": " customer.mar.services@gmail.com",
                "url": "http://www.at-mar.com",
                "sameAs": [
                    "https://www.facebook.com/profile.php?id=61550591346858&mibextid=LQQJ4d",
                    "https://www.instagram.com/metroarearemovalservices/",
                ],
                "openingHours": [
                    "Mo-Fr 09:00-17:00"
                ],
                "image": ""
            }
        </script>
	</body>
</html>
