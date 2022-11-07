<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Order;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function getAdminLogin(){
        return view('admin.admin_login');
    }

    public function getAdminSignUp(){
        return view('admin.admin_signup');
    }

    public function createAdmin(Request $request){
        //validate the user
        $this->validate($request, [
            'first_name'=>'required|max:100',
            'last_name'=>'required|max:100',
            'email'=>'required|email|max:100',
            'password'=>'required'
        ]);

        // dd($request->first_name);

        //store the user
        User::create([
            'name' => $request->first_name,
            'surname' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        //sign the user in
        $signed_in = auth()->attempt($request->only('email', 'password'));
        
        if(!$signed_in){
            return back()->with('status', 'Unable to login!');
        }
        //redirect
        return redirect()->route('admin_dashboard');
    }

    public function adminLogin(Request $request){
        //validate the user
        $this->validate($request, [
            'email'=>'required|email',
            'password'=>'required'
        ]);

        // dd($request);

        //sign the user in
        if(!auth()->attempt(['email'=>$request->email, 'password'=>$request->password])){
            return back()->with('status', 'Invalid login credentials!');
        }
        // dd($request);
        //redirect
        return redirect()->route('dashboard');
    }

    public function adminLogout(){
        auth()->logout();
        return redirect()->route('admin');
    }

    public function displayAdmins(){
        $users = DB::table("users")->get();
        return view('admin.display_admins', [
            "users"=> $users
        ]);
    }

    public function adminSearch(Request $request){
        if($request->isMethod('post')){
            // dd($request);
            $orders = null;
            $search_option=$request->get('search_option');
            $search_text=$request->get('search_text');
            if($search_option=="email_address"){
                $users = DB::table("users")
                ->where('email','LIKE','%'.$search_text.'%')
                ->paginate(5);
                return view('admin.display_admins', [
                    "users"=> $users
                ]);
            } else if($search_option=="first_name"){
                $users = DB::table("users")
                ->where('name','LIKE','%'.$search_text.'%')
                ->paginate(5);
                return view('admin.display_admins', [
                    "users"=> $users
                ]);
            } else if($search_option=="last_name"){
                $users = DB::table("users")
                ->where('surname','LIKE','%'.$search_text.'%')
                ->paginate(5);
                return view('admin.display_admins', [
                    "users"=> $users
                ]);
            }
            return "Sorry, it seem as if you've wondered off, please go back :)";
        }
    }

    public function orderManipulation(Request $request){
        $user_manipulation_type = $request->user_manipulation_type;
        $user_id = $request->user_id;

        if($user_manipulation_type=="delete"){
            $user = DB::table("users")
            ->where('id', '=', $user_id)
            ->get();

            $user_deleted = DB::table("users")
            ->where('id', '=', $user_id)
            ->delete();
            // dd($order_updated);
            if(user_deleted>0){
                return redirect()->route('list_admins')
                ->with('message', ''.$user->name. ' '.$user->surname.' have been successfully deleted :)');
            }else{
                return redirect()->route('dashboard')
                    ->with('error', 'Unable delete admin user, please try again.');
            }
        }

        return "You've drafted off in the wrong direction, please go back. Thank you :)";
    }

    public function getMyAdminUserProfile(){
        $user = DB::table("users")
        ->where('id', Auth::id())->first();
        return view('admin.admin_my_user_profile', [
            "user"=> $user
        ]);
    }

    public function manipulateMyAdminUserProfile(Request $request){
        $user_manipulation_type = $request->user_manipulation_type;
        $user_id = $request->user_id;

        if($user_manipulation_type=="delete" && $user_id==Auth::id()){
            $user_deleted = DB::table("users")->where('id', Auth::id())->delete();
            if(user_deleted>0){
                return redirect()->route('admin');
            }else{
                return redirect()->route('admin_my_user_profile')
                    ->with('error', 'Unable delete admin user, please try again.');
            }
        } else if($user_manipulation_type=="edit" && $user_id==Auth::id()){
            $user_to_update = DB::table("users")->where('id', Auth::id())->first();
            //validate some user information
            $this->validate($request, [
                'first_name'=>'required|max:100',
                'last_name'=>'required|max:100',
                'email'=>'required|email|max:100',
            ]);

            $name = $request->first_name;
            $surname = $request->last_name;
            $email = $request->email;
            $current_password = $request->current_password;
            $new_password = $request->new_password;
            $confirm_new_password = $request->confirm_new_password;
            if($current_password!=null && Hash::check($current_password, $user_to_update->password)){
                if($new_password!=null){
                    if($confirm_new_password==null){
                        // throw an error
                        return back()->with('status', 'Confirm new password is required');
                    }else if( $confirm_new_password!=null && strcmp($new_password,$confirm_new_password)!=0){
                        // we not good
                        return back()->with('status', 'New password and confirm new password do not match');
                    }else if( $confirm_new_password!=null && strcmp($new_password,$confirm_new_password)==0){
                        // we good
                        $updated_user = User::where('id', Auth::id())->update([
                            'name' => $name, 
                            'surname' => $surname,
                            'email' => $email,
                            'password' => Hash::make($new_password),
                        ]);
                        if($updated_user>=1){
                            return redirect()->route('admin_my_user_profile')
                            ->with('success', 'Your profile details have been successfully updated :)');
                        }else{
                            return redirect()->route('admin_my_user_profile')
                                ->with('status', 'Unable to update your profile details');
                        }
                    }
                } else{
                    $updated_user = User::where('id', Auth::id())->update([
                        'name' => $name, 
                        'surname' => $surname,
                        'email' => $email
                    ]);
                    if($updated_user>=1){
                        return redirect()->route('admin_my_user_profile')
                        ->with('success', 'Your profile details have been successfully updated :)');
                    }else{
                        return redirect()->route('admin_my_user_profile')
                            ->with('status', 'Unable to update your profile details');
                    }
                }
                
            } else{
                return back()->with('status', 'Current password is incorrect, try again :)');
            }
        }
        return "You've drafted off in the wrong direction, please go back. Thank you :)";
    }

}
