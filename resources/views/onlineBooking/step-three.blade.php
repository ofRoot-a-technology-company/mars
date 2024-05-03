<!DOCTYPE HTML>
<html>
    <head>
        <title>Services | Metro Area Removal Services</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/noscript.css') }}" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        label {color: black; }
        /* located in index.css */
        input[type="text"],
        input[type="password"],
        input[type="email"],
        input[type="tel"],
        input[type="search"],
        input[type="url"],
        select,
        textarea {
            -moz-appearance: none;
            -webkit-appearance: none;
            -ms-appearance: none;
            appearance: none;
            background: #d3d3d3;
            border: none;
            border-radius: 0;
            color: inherit;
            display: block;
            outline: 0;
            padding: 0 1em;
            text-decoration: none;
            width: 100%;
        }
    </style>
</head>
<body>
    @php
        $name='Online Booking';
    @endphp
    <div class="mb-3 pb-3">
        <x-nav-bar :name="$name"/>
    </div>

    <div class="container mt-4 pt-4">
        <p id="service-type" class="btn btn-success btn-sm rounded-pill mt-3 p-3">{{Session::get('service_type')}}</p>
        <form action="{{ url('/online-booking/step-four') }}" method="post">
            @csrf
            <!-- Pick-up Address Section -->
            <label id="service-label1" class="mt-4"></label>
            <div class="form-group mt-1 pt-1">

                <label for="address">Address:</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="e.g., 480 West Broad Street">
            </div>
            <div class="form-group">
                <label for="unit">Unit #:</label>
                <input type="text" class="form-control" id="unit" name="unit" placeholder="e.g., Unit #420">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="city">City:</label>
                    <input type="text" class="form-control" id="city" name="city" placeholder="e.g., Columbus">
                </div>
                <div class="form-group col-md-6">
                    <label for="state">State:</label>
                    <input type="text" class="form-control" id="state" name="state" placeholder="e.g., Ohio">
                </div>
            </div>
            <div class="form-group">
                <label for="zip">ZIP Code:</label>
                <input type="text" class="form-control" id="zip" name="zip" placeholder="e.g., 77002">
            </div>
            <div class="form-group">
                <label for="country">Country:</label>
                <input type="text" class="form-control" id="country" name="country" placeholder="e.g., USA">
            </div>

                    <!-- Contact Details Section -->
            <h2 class="mt-4 pt-4">Contact Details</h2>
            <div class="form-group mt-3 pt-3">
                <label for="first-name">First Name:</label>
                <input type="text" class="form-control" id="first-name" name="first_name" placeholder="e.g., Donny">
            </div>
            <div class="form-group">
                <label for="last-name">Last Name:</label>
                <input type="text" class="form-control" id="last-name" name="last_name" placeholder="e.g., Merkel">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="e.g., harry.starman@gmail.com">
            </div>
            <div class="form-group">
                <label for="phone-number">Phone Number:</label>
                <input type="tel" class="form-control" id="phone-number" name="phone_number" placeholder="e.g., 7344489999">
            </div>
            <div class="form-group">
                <label for="phone-type">Phone Number Type:</label>
                <select class="form-control" id="phone-type" name="phone_type">
                    <option value="home">Home</option>
                    <option value="business">Business</option>
                </select>
            </div>
            <div class="form-group">
                <label id="service-label2" for="items_to_remove">Items Being Removed</label>
                <input class="form-control" name="items_to_remove" value="{{ $items_to_remove ?? '' }}" placeholder="{{ $items_to_remove ?? '' }}">
            </div>
            <div class="form-group">
                <label id="service-label3" for="dateofRemoval">Date Of Removal</label>
                <input class="form-control" name="dateOfRemoval" value="{{ $dateOfRemoval ?? '' }}" placeholder="{{ $dateOfRemoval ?? '' }}">
            </div>
            <div class="form-group">
                <label id="service-label4" for="exampleFormControlTextarea1" style="color:black;">Time for Pickup</label>
                <p style="color: grey; font-size: 75%;">Click below and select a time slot. May vary depending on availability</p>
                <p style="color: grey; font-size: 75%;">A representative may reassign this slot for an earlier or later time depending on availability</p>
                <select id="time-slot" name="time_slot">
                    <option value="07:00 AM">7:00 AM - 9:00 AM</option>
                    <option value="09:00 AM">9:00 AM - 11:00 AM</option>
                    <option value="11:00 AM">11:00 AM - 1:00 PM</option>
                    <option value="01:00 PM">1:00 PM - 3:00 PM</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Include Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        let service_type = document.getElementById('service-type').innerText;
        let service_label2 = document.getElementById('service-label2').innerText;
        let service_label3 = document.getElementById('service-label3').innerText;
        let service_label4 = document.getElementById('service-label4').innerText;
        if(service_type == 'Lawn Service'){
            document.getElementById('service-label1').innerText = 'Lawn Service Address';
            document.getElementById('service-label2').innerText = 'Details of Service';
            document.getElementById('service-label3').innerText = 'Date of Service';
            document.getElementById('service-label4').innerText = 'Time of Service';
        }
        if(service_type == 'Removal Service'){
            document.getElementById('service-label1').innerText = 'Pick-up Address';
        }
    </script>
</body>
</html>
