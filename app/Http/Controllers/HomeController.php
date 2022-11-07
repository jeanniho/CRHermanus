<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Session;

class HomeController extends Controller
{
    /**
     * Instantiate a new HomeController instance.
     */
    public function __construct(){
        if (Session::has('session_id')){
            $session_id = session('session_id');
        } else{
            Session::put('session_id', $this->generateBarcodeNumber());
        }
    }

    public function getHomePage() {
        return view('home');
    }

    // generate session user ID
    function generateBarcodeNumber() {
        $number = mt_rand(1, 9999999999); // better than rand()
    
        // call the same function if the barcode exists already
        if ($this->barcodeNumberExists($number)) {
            return $this->generateBarcodeNumber();
        }
    
        // otherwise, it's valid and can be used
        return $number;
    }

    function barcodeNumberExists($number) {
        // check the database if this number have been used and return a boolean
        
        $id_exist_in_cart_table = DB::table("carts")
        ->where('receipt_number', '=', $number)
        ->count();

        $id_exist_in_orders_table = DB::table("orders")
        ->where('receipt_number', '=', $number)
        ->count();

        if($id_exist_in_cart_table>0||$id_exist_in_orders_table>0){
            return true;
        }

        return false;
    }
    
}
