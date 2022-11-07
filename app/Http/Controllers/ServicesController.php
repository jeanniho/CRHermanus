<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ServicesController extends Controller
{
    public function getDebtMediationPage() {
        return view('services.debt_mediation');
    }

    public function sendDebtMediationEmail(Request $request) {
        // dd($request);
        $service_type=$request->service_type;
        $service_interested_in=null;
        $full_name = $request->name;
        $email = $request->email;
        $phone_number = $request->phone_number;
        
        $client_type=null;
        if($request->new_client && $request->new_client=="on"){
            $client_type="New Client, interest in our services";
        }
        if($request->existing_client && $request->existing_client=="on"){
            $client_type="Existing Client that has a query";
        }

        if($service_type=="debt_mediation"){
            $service_interested_in="Debt Mediation";
        }

        $data = array(
            'service_interested_in' => $service_interested_in,
            'full_name' => $full_name,
            'email' => $email,
            'phone_number' => $phone_number,
            'client_type'=>$client_type
        );
        // dd($request);
        Mail::send('emails.services', $data, function($message) {
            $message->to('jeannihorimbere31@gmail.com', 'Jean Niho')
            ->subject('Credit-Rescue Hermanus Debt Mediation Services');
            $message->from('jeannihorimbere31@gmail.com','Julian Jules');
         });
        
         if($service_type=="debt_mediation"){
            return redirect() ->route('debt_mediation')
            ->with('success', 'Email have been successfully sent :)');
        }
        return 'Email have been successfully sent :)';
    }

    public function getDebtCounsellingPage() {
        return view('services.debt_counselling');
    }

    public function sendDebtCounsellingEmail(Request $request) {
        // dd($request);
        $service_type=$request->service_type;
        $service_interested_in=null;
        $full_name = $request->name;
        $email = $request->email;
        $phone_number = $request->phone_number;
        
        $client_type=null;
        if($request->new_client && $request->new_client=="on"){
            $client_type="New Client, interest in our services";
        }
        if($request->existing_client && $request->existing_client=="on"){
            $client_type="Existing Client that has a query";
        }

        if($service_type=="debt_counselling"){
            $service_interested_in="Debt Counselling";
        }

        $data = array(
            'service_interested_in' => $service_interested_in,
            'full_name' => $full_name,
            'email' => $email,
            'phone_number' => $phone_number,
            'client_type'=>$client_type
        );
        // dd($request);
        Mail::send('emails.services', $data, function($message) {
            $message->to('jeannihorimbere31@gmail.com', 'Jean Niho')
            ->subject('Credit-Rescue Hermanus Debt Counselling Services');
            $message->from('jeannihorimbere31@gmail.com','Julian Jules');
         });
        
         if($service_type=="debt_counselling"){
            return redirect() ->route('debt_counselling')
            ->with('success', 'Email have been successfully sent :)');
        }
        return 'Email have been successfully sent :)';
    }

    public function getDebtConsolidationPage() {
        return view('services.debt_consolidation');
    }

    public function sendDebtConsolidationEmail(Request $request) {
        // dd($request);
        $service_type=$request->service_type;
        $service_interested_in=null;
        $full_name = $request->name;
        $email = $request->email;
        $phone_number = $request->phone_number;
        
        $client_type=null;
        if($request->new_client && $request->new_client=="on"){
            $client_type="New Client, interest in our services";
        }
        if($request->existing_client && $request->existing_client=="on"){
            $client_type="Existing Client that has a query";
        }

        if($service_type=="debt_consolidation"){
            $service_interested_in="Debt Consolidation";
        }

        $data = array(
            'service_interested_in' => $service_interested_in,
            'full_name' => $full_name,
            'email' => $email,
            'phone_number' => $phone_number,
            'client_type'=>$client_type
        );
        // dd($request);
        Mail::send('emails.services', $data, function($message) {
            $message->to('jeannihorimbere31@gmail.com', 'Jean Niho')
            ->subject('Credit-Rescue Hermanus Debt Consolidation Services');
            $message->from('jeannihorimbere31@gmail.com','Julian Jules');
         });
        
         if($service_type=="debt_consolidation"){
            return redirect() ->route('debt_consolidation')
            ->with('success', 'Email have been successfully sent :)');
        }
        return 'Email have been successfully sent :)';
    }

    public function getDebtReviewServicesPage() {
        return view('services.debt_review_services');
    }

    public function sendDebtReviewServicesEmail(Request $request) {
        // dd($request);
        $service_type=$request->service_type;
        $service_interested_in=null;
        $full_name = $request->name;
        $email = $request->email;
        $phone_number = $request->phone_number;
        
        $client_type=null;
        if($request->new_client && $request->new_client=="on"){
            $client_type="New Client, interest in our services";
        }
        if($request->existing_client && $request->existing_client=="on"){
            $client_type="Existing Client that has a query";
        }

        if($service_type=="debt_review_services"){
            $service_interested_in="Debt Review Services";
        }

        $data = array(
            'service_interested_in' => $service_interested_in,
            'full_name' => $full_name,
            'email' => $email,
            'phone_number' => $phone_number,
            'client_type'=>$client_type
        );
        // dd($request);
        Mail::send('emails.services', $data, function($message) {
            $message->to('jeannihorimbere31@gmail.com', 'Jean Niho')
            ->subject('Credit-Rescue Hermanus Debt Review Services');
            $message->from('jeannihorimbere31@gmail.com','Julian Jules');
         });
        
         if($service_type=="debt_review_services"){
            return redirect() ->route('debt_review_services')
            ->with('success', 'Email have been successfully sent :)');
        }
        return 'Email have been successfully sent :)';
    }

    public function getDebtReviewRemovalPage() {
        return view('services.debt_review_removal');
    }

    public function sendDebtReviewRemovalEmail(Request $request) {
        // dd($request);
        $service_type=$request->service_type;
        $service_interested_in=null;
        $full_name = $request->name;
        $email = $request->email;
        $phone_number = $request->phone_number;
        
        $client_type=null;
        if($request->new_client && $request->new_client=="on"){
            $client_type="New Client, interest in our services";
        }
        if($request->existing_client && $request->existing_client=="on"){
            $client_type="Existing Client that has a query";
        }

        if($service_type=="debt_review_removal"){
            $service_interested_in="Debt Review Removal";
        }

        $data = array(
            'service_interested_in' => $service_interested_in,
            'full_name' => $full_name,
            'email' => $email,
            'phone_number' => $phone_number,
            'client_type'=>$client_type
        );
        // dd($request);
        Mail::send('emails.services', $data, function($message) {
            $message->to('jeannihorimbere31@gmail.com', 'Jean Niho')
            ->subject('Credit-Rescue Hermanus Debt Review Removal Services');
            $message->from('jeannihorimbere31@gmail.com','Julian Jules');
         });
        
         if($service_type=="debt_review_removal"){
            return redirect() ->route('debt_review_removal')
            ->with('success', 'Email have been successfully sent :)');
        }
        return 'Email have been successfully sent :)';
    }

    public function getGarnisheeRemovalsPage() {
        return view('services.garnishee_removals');
    }

    public function sendGarnisheeRemovalsEmail(Request $request) {
        // dd($request);
        $service_type=$request->service_type;
        $service_interested_in=null;
        $full_name = $request->name;
        $email = $request->email;
        $phone_number = $request->phone_number;
        
        $client_type=null;
        if($request->new_client && $request->new_client=="on"){
            $client_type="New Client, interest in our services";
        }
        if($request->existing_client && $request->existing_client=="on"){
            $client_type="Existing Client that has a query";
        }

        if($service_type=="garnishee_removals"){
            $service_interested_in="Garnishee Removals";
        }

        $data = array(
            'service_interested_in' => $service_interested_in,
            'full_name' => $full_name,
            'email' => $email,
            'phone_number' => $phone_number,
            'client_type'=>$client_type
        );
        // dd($request);
        Mail::send('emails.services', $data, function($message) {
            $message->to('jeannihorimbere31@gmail.com', 'Jean Niho')
            ->subject('Credit-Rescue Hermanus Garnishee Removals Services');
            $message->from('jeannihorimbere31@gmail.com','Julian Jules');
         });
        
         if($service_type=="garnishee_removals"){
            return redirect() ->route('garnishee_removals')
            ->with('success', 'Email have been successfully sent :)');
        }
        return 'Email have been successfully sent :)';
    }

    public function getAdministrationRemovalsPage() {
        return view('services.administration_removals');
    }

    public function sendAdministrationRemovalsEmail(Request $request) {
        // dd($request);
        $service_type=$request->service_type;
        $service_interested_in=null;
        $full_name = $request->name;
        $email = $request->email;
        $phone_number = $request->phone_number;
        
        $client_type=null;
        if($request->new_client && $request->new_client=="on"){
            $client_type="New Client, interest in our services";
        }
        if($request->existing_client && $request->existing_client=="on"){
            $client_type="Existing Client that has a query";
        }

        if($service_type=="administration_removals"){
            $service_interested_in="Administration Removals";
        }

        $data = array(
            'service_interested_in' => $service_interested_in,
            'full_name' => $full_name,
            'email' => $email,
            'phone_number' => $phone_number,
            'client_type'=>$client_type
        );
        // dd($request);
        Mail::send('emails.services', $data, function($message) {
            $message->to('jeannihorimbere31@gmail.com', 'Jean Niho')
            ->subject('Credit-Rescue Hermanus Administration Removals Services');
            $message->from('jeannihorimbere31@gmail.com','Julian Jules');
         });
        
         if($service_type=="administration_removals"){
            return redirect() ->route('administration_removals')
            ->with('success', 'Email have been successfully sent :)');
        }
        return 'Email have been successfully sent :)';
    }
}
