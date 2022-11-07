<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use Mail;

class AppFormController extends Controller
{
    public function getAppFormPage() {
        return view('app_form');
    }

    public function sendAppFormEmail(Request $request) {
        dd($request);
        // $service_interested_in=null;
        // $appointment_name = $request->appointment_name;
        // $appointment_email = $request->appointment_email;
        // $appointment_phone_number = $request->appointment_phone_number;
        // $appointment_description = $request->appointment_description;
        // $appointment_date=$request->appointment_date;
        // if($request->service_interested_in && count($request->service_interested_in)>0){
        //     $service_interested_in=implode(", ",$request->service_interested_in);
        // }

        // $data = array(
        //     'service_interested_in' => $service_interested_in,
        //     'appointment_name' => $appointment_name,
        //     'appointment_email' => $appointment_email,
        //     'appointment_phone_number' => $appointment_phone_number,
        //     'appointment_description' => $appointment_description,
        //     'appointment_date'=>$appointment_date
        // );
        // // dd($request);
        // Mail::send('emails.appointment_booking', $data, function($message) {
        //     $message->to('jeannihorimbere31@gmail.com', 'Jean Niho')
        //     ->subject('Credit-Rescue Hermanus Appointment Booking');
        //     $message->from('jeannihorimbere31@gmail.com','Julian Jules');
        //  });
        // return 'Appointment have been successfully booked :)';
    }
}
