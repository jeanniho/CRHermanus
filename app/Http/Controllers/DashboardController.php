<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Order;
use App\Models\Cart;

class DashboardController extends Controller
{
    public function __construct(){
        $this->middleware(['auth']);
    }

    public function getDashboardPage(){
        $orders = DB::table("orders")->get();
        return view('admin.dashboard', [
            "orders"=> $orders
        ]);
    }

    public function orderManipulation(Request $request){
        $order_manipulation_type = $request->order_manipulation_type;
        $order_id = $request->order_id;
        $order_receipt_number = $request->order_receipt_number;

        if($order_manipulation_type=="complete"){
            $order_updated = DB::table("orders")
            ->where('id', '=', $order_id)
            ->where('receipt_number', '=', $order_receipt_number)
            ->update(['order_status' => "Completed"]);
            // dd($order_updated);
            if($order_updated>=1){
                return redirect()->route('dashboard')
                ->with('message', 'Oder: '.$order_receipt_number.' have been successfully completed :)');
            }else{
                return redirect()->route('dashboard')
                    ->with('error', 'Unable to mark order as complete, please try again.');
            }
        } else if($order_manipulation_type=="pending"){
            $order_updated = DB::table("orders")
            ->where('id', '=', $order_id)
            ->where('receipt_number', '=', $order_receipt_number)
            ->update(['order_status' => "Pending"]);
            // dd($order_updated);
            if($order_updated>=1){
                return redirect()->route('dashboard')
                ->with('message', 'Oder: '.$order_receipt_number.' have been marked as pending.');
            }else{
                return redirect()->route('dashboard')
                    ->with('error', 'Unable to mark order as pending, please try again.');
            }
        } else if($order_manipulation_type=="view"){
            $order = DB::table("orders")
            ->where('id', '=', $order_id)
            ->where('receipt_number', '=', $order_receipt_number)
            ->first();

            $products = DB::table("carts")
            ->where('receipt_number', '=', $order_receipt_number)
            ->get();

            // dd($order_updated);
            if($order!=null && count($products)>=1){
                return view('admin.view_order', [
                    "order"=> $order,
                    "products"=> $products
                ]);
            }else{
                return redirect()->route('dashboard')
                    ->with('error', 'Unable to find full order details, please try again.');
            }
        } else if($order_manipulation_type=="delete"){
            $order_deleted = DB::table("orders")
            ->where('id', '=', $order_id)
            ->where('receipt_number', '=', $order_receipt_number)
            ->delete();

            $products_deleted = DB::table("carts")
            ->where('receipt_number', '=', $order_receipt_number)
            ->delete();

            // dd($order_updated);
            if($order_deleted>0 && $products_deleted>0){
                return redirect()->route('dashboard')
                    ->with('message', 'Oder: '.$order_receipt_number.' have been successfully deleted :)');
            }else{
                return redirect()->route('dashboard')
                    ->with('error', 'Unable to successfully delete order details with receipt number: ,'.$order_receipt_number.'. please try again.');
            }
        } if($order_manipulation_type=="cancel"){
            $order_updated = DB::table("orders")
            ->where('id', '=', $order_id)
            ->where('receipt_number', '=', $order_receipt_number)
            ->update(['order_status' => "Cancelled"]);
            // dd($order_updated);
            if($order_updated>=1){
                return redirect()->route('dashboard')
                ->with('message', 'Oder: '.$order_receipt_number.' have been successfully cancelled :)');
            }else{
                return redirect()->route('dashboard')
                    ->with('error', 'Unable to mark order as cancelled, please try again.');
            }
        }

        return [];
    }

    public function orderSearch(Request $request){
        if($request->isMethod('post')){
            // dd($request);
            $orders = null;
            $search_option=$request->get('search_option');
            $search_text=$request->get('search_text');
            if($search_option=="receipt_number"){
                $orders = DB::table("orders")
                ->where('receipt_number','LIKE','%'.$search_text.'%')
                ->paginate(5);
                return view('admin.dashboard', [
                    "orders"=> $orders
                ]);
            } else if($search_option=="first_name"){
                $orders = DB::table("orders")
                ->where('first_name','LIKE','%'.$search_text.'%')
                ->paginate(5);
                return view('admin.dashboard', [
                    "orders"=> $orders
                ]);
            } else if($search_option=="last_name"){
                $orders = DB::table("orders")
                ->where('last_name','LIKE','%'.$search_text.'%')
                ->paginate(5);
                return view('admin.dashboard', [
                    "orders"=> $orders
                ]);
            }
            return "Sorry, it seem as if you've wondered off, please go back :)";
        }
    }

    public function openOrders(Request $request){
        if($request->isMethod('get')){
            // dd($request);
            $search_text="Open";
            $orders = DB::table("orders")
                ->where('order_status','LIKE','%'.$search_text.'%')
                ->paginate(5);
            return view('admin.dashboard', [
                "orders"=> $orders
            ]);
        }
    }

    public function completeOrders(Request $request){
        if($request->isMethod('get')){
            // dd($request);
            $search_text="Completed";
            $orders = DB::table("orders")
                ->where('order_status','LIKE','%'.$search_text.'%')
                ->paginate(5);
            return view('admin.dashboard', [
                "orders"=> $orders
            ]);
        }
    }

    public function pendingOrders(Request $request){
        if($request->isMethod('get')){
            // dd($request);
            $search_text="Pending";
            $orders = DB::table("orders")
                ->where('order_status','LIKE','%'.$search_text.'%')
                ->paginate(5);
            return view('admin.dashboard', [
                "orders"=> $orders
            ]);
        }
    }

    public function cancelledOrders(Request $request){
        if($request->isMethod('get')){
            // dd($request);
            $search_text="Cancelled";
            $orders = DB::table("orders")
                ->where('order_status','LIKE','%'.$search_text.'%')
                ->paginate(5);
            return view('admin.dashboard', [
                "orders"=> $orders
            ]);
        }
    }
}
