<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use Mail;

use App\Models\Cart;
use App\Models\Order;

class CartController extends Controller
{   
    // get product page
    public function getLifeStyleProductsPage() {
        return view('lifestyle_products.our_products');
    }

    // cart
    public function getCartProductsPage() {
        $session_id = Session::get('session_id');
        $products = DB::table("carts")
        ->where('receipt_number', '=', $session_id)
        ->get();
        $total_price = DB::table("carts")
        ->where('receipt_number', '=', $session_id)->sum('sub_total');
        return view(
            'lifestyle_products.cart',
            [
                "products"=>$products,
                "total_price"=>$total_price
            ]
        );
    }

    public function addProductToCart(Request $request){
        $session_id = Session::get('session_id');
        $image_name=$request->image_name;
        $product_name = $request->product_name;
        $product_price = $request->product_price;
        $image_name = $request->image_name;
        $product_id=$request->product_id;

        $product_exists = DB::table("carts")
        ->where('receipt_number', '=', $session_id)
        ->where('product_id', '=', $product_id)
        ->increment('quantity', 1, ['sub_total' => DB::raw('`sub_total` + `product_price`')]);
        // dd($product_exists);
        if($product_exists==0){
            $product = Cart::create([
                'receipt_number' => $session_id,
                'product_name' => $product_name,
                'product_price' => $product_price,
                'product_image_name' => $image_name,
                'product_id' => $product_id,
                'sub_total' => floatval($product_price)
            ]);
            return redirect()->route('our_products')
                ->with('product_add', $product_name.' '.'have been added to cart');
        }else{
            return redirect()->route('our_products')
                ->with('product_add', $product_name.' '.'have been incremented in the cart');
        }
    }

    public function deleteProductFromCart(Request $request){
        $session_id = Session::get('session_id');

        $product_deleted = DB::table("carts")
        ->where('receipt_number', '=', $session_id)
        ->where('product_id', '=', $request->product_id)
        ->delete();
        // dd($product_deleted);
        return $product_deleted;
    }

    public function updateProductQuantityFromCart(Request $request){
        $session_id = Session::get('session_id');

        $product_id = $request->product_id;
        $product_price = $request->product_price;
        $quantity = $request->quantity;

        $subtotal = floatval($product_price)*intval($quantity);

        $product_exists = DB::table("carts")
        ->where('receipt_number', '=', $session_id)
        ->where('product_id', '=', $product_id)
        ->update(['quantity' => $quantity, 'sub_total' => $subtotal]);
        
        // dd($product_exists);
        if($product_exists==1){
            return redirect()->route('cart');
        }else{
            return redirect()->route('cart')
                ->with('product_add', 'Cart have been successfully updated');
        }
    }

    // checkout
    public function getCheckoutPage() {
        $session_id = Session::get('session_id');
        
        $products = DB::table("carts")
        ->where('receipt_number', '=', $session_id)
        ->get();
        $total_price = DB::table("carts")
        ->where('receipt_number', '=', $session_id)->sum('sub_total');
        return view(
            'lifestyle_products.checkout',
            [
                "products"=>$products,
                "total_price"=>$total_price
            ]
        );
    }

    public function placeOrder(Request $request) {
        $session_id = Session::get('session_id');

        $products = DB::table("carts")
        ->where('receipt_number', '=', $session_id)
        ->get();

        $products_count = count($products);

        if($products_count>=1){
            $total_price = DB::table("carts")
            ->where('receipt_number', '=', $session_id)->sum('sub_total');

            $quantity_county = DB::table("carts")
            ->where('receipt_number', '=', $session_id)->sum('quantity');

            $first_name = $request->first_name;
            $last_name = $request->last_name;
            $company_name = $request->company_name;
            $country_name = $request->country_name;
            $street_address = $request->street_address;
            $apartment_suite_unit = $request->apartment_suite_unit;
            $town_city = $request->town_city;
            $state_province = $request->state_province;
            $zip_postal_code = $request->zip_postal_code;
            $phone = $request->phone;
            $email = $request->email;
            $additional_information = $request->additional_information;

            // dd($request);
            $data = array(
                'receipt_number' => $session_id,
                'quantity_count' => $quantity_county,
                'product_count' => $products_count,
                'order_total_price' => $total_price,
                'first_name' => $first_name,
                'last_name' => $last_name,
                'company_name' => $company_name,
                'country_name' => $country_name,
                'street_address' => $street_address,
                'apartment_suite_unit' => $apartment_suite_unit,
                'town_city' => $town_city,
                'state_province' => $state_province,
                'zip_postal_code' => $zip_postal_code,
                'phone' => $phone,
                'email' => $email,
                'additional_information' => $additional_information
            );

            // save order
            $order = Order::create($data);

            // foreach($products as $product){
            //     $user_id = $user->id;
            //     // Get all message from selected user
            //     $message = Wechat::where(function ($query) use ($user_id, $my_id) {
            //          $query->where('sender', $user_id)->where('receiver', $my_id);
            //      })->oRwhere(function ($query) use ($user_id, $my_id) {
            //          $query->where('sender', $my_id)->where('receiver', $user_id);
            //      })->get()->sortBy('created_at')->first();
            //      array_push($foundMessages, $message);
            // }

            $datas = array(
                'receipt_number' => $session_id,
                'quantity_count' => $quantity_county,
                'product_count' => $products_count,
                'order_total_price' => $total_price,
                'first_name' => $first_name,
                'last_name' => $last_name,
                'company_name' => $company_name,
                'country_name' => $country_name,
                'street_address' => $street_address,
                'apartment_suite_unit' => $apartment_suite_unit,
                'town_city' => $town_city,
                'state_province' => $state_province,
                'zip_postal_code' => $zip_postal_code,
                'phone' => $phone,
                'email' => $email,
                'additional_information' => $additional_information,
                'products' => $products
            );

            // send order via email address to admin
            Mail::send('emails.orders', $datas, function($message) {
                $message->to('jeannihorimbere31@gmail.com', 'Jean Niho')
                ->subject('Credit-Rescue Hermanus Lifestyle Products Order');
                $message->from('jeannihorimbere31@gmail.com','Julian Jules');
             });

            //  update the session user ID
            Session::put('session_id', $this->generateBarcodeNumber());

            return redirect()->route('our_products')
                ->with('product_add', 'Your order have been placed and will be processed soon :)');
        }

        return redirect()->route('our_products')
            ->with('product_add', 
                'For unforeseen reasons we are unable to place your order. 
                We apologize, please retry by selecting from our products. 
                Thank you for understanding :)'
            );
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
