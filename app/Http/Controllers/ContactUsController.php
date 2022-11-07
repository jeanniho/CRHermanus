<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContactUsController extends Controller
{
    public function getContactUsPage() {
        return view('contact_us');
    }

    public function sendContactUsEmail(Request $request) {
        $contact_us_from=$request->contact_us_from;
        $service_interested_in=null;
        $full_name = $request->full_name;
        $email = $request->email;
        $phone_number = $request->phone_number;
        $additional_information = $request->additional_information;
        $client_type=null;
        if($request->service_interested_in && count($request->service_interested_in)>0){
            $service_interested_in=implode(", ",$request->service_interested_in);
        }
        if($request->new_client && $request->new_client=="on"){
            $client_type="New Client, interest in our services";
        }
        if($request->existing_client && $request->existing_client=="on"){
            $client_type="Existing Client that has a query";
        }
        $data = array(
            'service_interested_in' => $service_interested_in,
            'full_name' => $full_name,
            'email' => $email,
            'phone_number' => $phone_number,
            'additional_information' => $additional_information,
            'client_type'=>$client_type
        );
        // dd($request);
        Mail::send('emails.contact_us', $data, function($message) {
            $message->to('jeannihorimbere31@gmail.com', 'Virat Gandhi')
            ->subject('Credit-Rescue Hermanus Contact Us');
            $message->from('jeannihorimbere31@gmail.com','Julian Jules');
         });
        if($contact_us_from=="home"){
            return redirect() ->route('home')
            ->with('success', 'Email have been successfully sent :)');
        }else if($contact_us_from=="contact_us"){
            return redirect() ->route('contact_us')
            ->with('success', 'Email have been successfully sent :)');
        }
        return 'Email have been successfully sent :)';
    }
}


