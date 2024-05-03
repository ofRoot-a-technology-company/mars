
<!DOCTYPE HTML>
<html>
	<head>
        <title>Services | Metro Area Removal Services</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="http://metroarearemovalservices.com/css/index.css" />
		<noscript><link rel="stylesheet" href="http://metroarearemovalservices.com/css/noscript.css" /></noscript>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
            h3 { margin-top: 5%; margin-bottom: -0.5%; }
        </style>
	</head>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/noscript.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<!-- Add Bootstrap JS and jQuery Scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>


</body>

</html>
<!DOCTYPE HTML>
<html>
	<head>
        <title>Services | Metro Area Removal Services</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="http://metroarearemovalservices.com/css/index.css" />
		<noscript><link rel="stylesheet" href="http://metroarearemovalservices.com/css/noscript.css" /></noscript>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
            h3 { margin-top: 5%; margin-bottom: -0.5%; }
        </style>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">
                <!-- NAV/Header -->
                                <div class="mb-3 pb-3">
                    <style>
    .menu {
        margin-bottom: 20px; /* Adjust the value as needed */
    }
    </style>
<header id="header" class="alt">
    <a href="/" class="logo"><strong>Metro Area Removal Services</strong>
    | Online Booking
    </a>
    <nav>
        <a href="#menu">Menu</a>
    </nav>
</header>

<!-- Menu -->
<nav id="menu" >
    <ul class="links">
        <li><a href="/">Home</a></li>
        <li><a href="about-us">About Us</a></li>
        <li><a href="pricing">Pricing</a></li>
        <li><a href="hauled-items">Services</a></li>
        <li><a href="schedule-pickup">Schedule your haul</a></li>
        <li><a href="how-it-works">The Process</a></li>
        <li><a href="online-booking/step-one">Online Booking</a></li>
        <!-- <li><a href="generic.html">Generic</a></li>
        <li><a href="elements.html">Elements</a></li> -->
    </ul>
    <!-- TODO add these when working on admin area -->
    <!-- <ul class="actions stacked">
        <li><a href="#" class="button primary fit">Get Started</a></li>
        <li><a href="#" class="button fit">Log In</a></li>
    </ul> -->
</nav>
                </div>

            <div class="container">
                <form action="{{ route('step-three') }}" method="post">
                    @csrf
                     <div class="row mt-4 pt-4">
                        <div class="col-md-6">
                            <p id="service-type" class="btn btn-success btn-sm rounded-pill">{{Session::get('service_type')}}</p>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1" style="color:black;">Choose a time slot:</label>
                                <p style="color: grey; font-size: 75%;">Click below and select a time slot. May vary depending on availability</p>
                                <select id="time-slot" name="time_slot">
                                    <option value="07:00 AM">7:00 AM - 9:00 AM</option>
                                    <option value="09:00 AM">9:00 AM - 11:00 AM</option>
                                    <option value="11:00 AM">11:00 AM - 1:00 PM</option>
                                    <option value="01:00 PM">1:00 PM - 3:00 PM</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label id="service-label" for="exampleFormControlTextarea1" style="color:black;">List the items you would like removed</label>
                                <p id="service-label3" style="color: grey; font-size: 75%;">e.g., a mattress and a sofa in my basement</p>
                                <textarea class="form-control" name="items_to_remove" id="exampleFormControlTextarea1"
                                    placeholder="e.g., a mattress and a sofa in my basement" rows="1"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label id="service-label2" for="exampleFormControlTextarea1" style="color:black;">Pick A Date For Pickup</label>
                                <input name="date" data-date-format="mm/dd/yyyy" id="datepicker" class="form-control">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Submit</button>
                </form>
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
                        <li style="color:white;">
                            &copy;
                                2023 Metro Area Removal Services. <br><br>All rights reserved.<br><br>Metro Area Removal Services
                                <!-- &amp; -->
                                <br>
                                <hr>
                                Design: <a href="#">OFROOT a technology company</a>
                        </li>
                    </ul>
                </div>
            </footer>
        </div>
        <!-- Datepicker Initialization Script -->
        <script type="text/javascript">
            $('#datepicker').datepicker({
                weekStart: 1,
                daysOfWeekHighlighted: "6,0",
                autoclose: true,
                todayHighlight: true,
            });
            $('#datepicker').datepicker("setDate", new Date());

            // swap the label text based on given service type
            let serviceType = document.getElementById('service-type').innerText; // gets the service-type text, given from session
            if (serviceType == 'Removal Service'){
                document.getElementById('service-label').innerText = 'LIST THE ITEMS YOU WOULD LIKE REMOVED'
                document.getElementById('service-label2').innerText = 'PICK A DATE FOR PICKUP';
            }

            if (serviceType == 'Lawn Service'){
                document.getElementById('service-label').innerText = 'LIST DETAILS OF THE JOB'; // sets label with serviceType innerText
                document.getElementById('service-label2').innerText = 'PICK A DATE FOR LAWN SERVICE';
                document.getElementById('service-label3').innerText = 'e.g., I have 3 areas I would like to have serviced';
            }

        </script>

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
