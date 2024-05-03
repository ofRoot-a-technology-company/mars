<!DOCTYPE HTML>
<html>
	<head>
        <title>Services | Metro Area Removal Services</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
		<noscript><link rel="stylesheet" href="{{ asset('css/noscript.css') }}" /></noscript>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
            h3 { margin-top: 5%; margin-bottom: -0.5%; }
        </style>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">
                <!-- NAV/Header -->
                @php $name='Online Booking'; @endphp
                <div class="mb-3 pb-3">
                    <x-nav-bar :name="$name"/>
                </div>


				<!-- Main -->
					<div id="main" class="alt">
                        <div class="container-fluid mt-4 pt-4">
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
						<!-- One -->
                        <section id="one">
                            <div class="inner">
                                <header class="major">
                                    <h1>Enter your Zip Code</h1>
                                </header>
                                <!-- TODO add image later -->
                                <div class="container">
                                <p class="btn btn-success btn-sm rounded-pill">{{Session::get('service_type')}}</p>
                                    <form action="{{ url('/online-booking/step-two') }}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <!-- <label for="zip_code">Enter Zip Code</label> -->
                                            <input class="form-control" id="zip_code" placeholder="Zip Code" name="zip_code" maxlength="5" required>
                                            <button type="submit" class="btn btn-dark mt-4">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </section>
					</div>

                    <section id="three">
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

                    <section id="four">
                        <div class="inner">
                            <header class="major">
                                <h1>Have a job for us?</h1>
                            </header>
                            <p>Contact us here for more information on our services and to recieve a free estimate</p>
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

	</body>
</html>
