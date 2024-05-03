<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Mail\Email;
use Illuminate\Support\Facades\Mail;

class OnlineBookingController extends Controller
{

    // Service option 1
    public function removalService(){
        Session::put('service_type', 'Removal Service');
        return redirect('online-booking/step-one');
    }

    public function lawnService(){
        Session::put('service_type', 'Lawn Service');
        return redirect('online-booking/step-one');
    }

    // Step one
    public function checkZipCode(Request $request)
    {
        $givenZipCode = $request->zip_code;

        // TODO: zipCode is checked against serviced zipCodes
        $servicedZipCodes = [
            48103, 48104, 48105, 48108, 48109, 48197, 48198, 48111,
            48187, 48188, 48135, 48150, 48152, 48154, 48160, 48167, 48168,
            48374, 48375, 48377, 48170, 48176, 48111, 48185, 48186, 48189, 48393, 48174
        ];

        if (in_array($givenZipCode, $servicedZipCodes)) {
            // The given ZIP code is in the list, it's valid
            return view('onlineBooking.step-two');
        } else {
            // The given ZIP code is not in the list, return an error
            return back()->with('error','Sorry, we do not service this area. If we made an error please send us an email: customer.mar.services@gmail.com');
        }
        // next stage
    }

    // Step two: pick up dates
    public function storeDateData(request $request){
        // Session::put($request->date);
        // Session::put($request->items_to_remove);

        $dateOfRemoval = $request->date;
        $items_to_remove = $request->items_to_remove;
        $time_slot = $request->time_slot;
        return view('onlineBooking.step-three',
            [
                'dateOfRemoval' => $dateOfRemoval,
                'items_to_remove' => $items_to_remove,
                'time_slot' => $time_slot
            ]);
    }

    // Step three: Set customer pickup data
    public function submitCustomerData(request $request){
        // finalize and send email
        Session::put('address', $request->address);
        Session::put('unit', $request->unit);
        Session::put('city', $request->city);
        Session::put('state', $request->state);
        Session::put('zip', $request->zip);
        Session::put('country', $request->country);
        Session::put('first_name', $request->first_name);
        Session::put('last_name', $request->last_name);
        Session::put('email', $request->email);
        Session::put('phone_number', $request->phone_number);
        Session::put('phone_type', $request->phone_type);
        Session::put('items_to_remove', $request->items_to_remove);
        Session::put('dateOfRemoval', $request->dateOfRemoval);

        // add 2 hours to time slot, to get a time span of 2 hours from initial starting time selected

        // Convert input time to a Unix timestamp
        $timestamp = strtotime($request->time_slot);

        // Add 2 hours (7200 seconds) to the timestam
        $timestamp += 7200;

        // Format the new time as "hh:mm am/pm"
        $endOfTimeSlot = date("h:i A", $timestamp);

        Session::put('time_slot', $request->time_slot . ' -  ' . $endOfTimeSlot);
        return view('onlineBooking.step-four');
    }

    // Step four: confirm and send email
    public function sendEmail(){
        // Get session data
        $address = session('address');
        $unit = session('unit');
        $city = session('city');
        $state = session('state');
        $zip = session('zip');
        $country = session('country');
        $first_name = session('first_name');
        $last_name = session('last_name');
        $email = session('email');
        $phone_number = session('phone_number');
        $phone_type = session('phone_type');
        $dateOfRemoval = session('dateOfRemoval');
        $items_to_remove = session('items_to_remove');
        $time_slot = session('time_slot');
        $service_type = session('service_type');

        // Compose email content
        $emailContent = "Service Type: $service_type \n";
        $emailContent .= "Address: $address\n";
        $emailContent .= "Unit: $unit\n";
        $emailContent .= "City: $city\n";
        $emailContent .= "State: $state\n";
        $emailContent .= "ZIP Code: $zip\n";
        $emailContent .= "Country: $country\n\n";
        $emailContent .= "First Name: $first_name\n\n";
        $emailContent .= "Last Name: $last_name\n\n";
        $emailContent .= "Email: $email\n\n";
        $emailContent .= "Phone Number: $phone_number\n\n";
        $emailContent .= "Phone Type: $phone_type\n\n";
        $emailContent .= "Date of Pickup: $dateOfRemoval\n\n";
        $emailContent .= "Time of Pickup: $time_slot\n\n";
        $emailContent .= "Items to Remove: $items_to_remove";

        $customer_email = $email;
        $customer_name = $first_name . ' ' . $last_name;
        $company_email = 'customer.mar.services@gmail.com';

        // Subject of the email
        $subject = 'Online booking request from: ' . $customer_name;

        // Email message
        $messageBody = "Hello,\n I have booked a service request,\n below are the details.  \n" . $emailContent;

        // associative array form
        $headers = [
            'From' => 'customer.mar.services@gmail.com',
            // 'Reply-To' => 'customerservice@metroarearemovalservices.com', Fill this out later
            'Content-Type' => 'text/html; charset=UTF-8',
        ];

        try {
            // TODO: call App/Mail/Email::class, and set it with the data above
            Mail::to($company_email)->send(new Email(
                $company_email, $customer_email,
                $customer_name, $subject, $headers, $messageBody)
            );
            return redirect('/');
        } catch (Exception $e) {
            // Handle the exception
            \Log::error('Email sending failed: ' . $e->getMessage());
        }
    }
}
