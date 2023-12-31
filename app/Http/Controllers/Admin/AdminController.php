<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Contact;
use Auth;

class AdminController extends Controller
{
    public function dashboard() {
        return view('admin.dashboard');
    }

    public function login(Request $request) {

        if ($request->method() == 'POST') {
            $validator = Validator::make($request->all(), [
                'email'    => 'required|email',
                'password' => 'required'
            ]);
            if ($validator->fails()){
                return redirect()->back()->withErrors($validator->errors())->withInput();
            }
            $user = User::where('email', $request->input('email'))->first();
           
            if ($user != null){
                if (Hash::check($request->input('password'), $user->password)) {
                    Auth::login($user);
                    if($user->role_id == 1) {
                        return redirect(route('admin.dashboard'));
                    } else {
                        if(\Cart::getTotalQuantity() > 0) {
                            return redirect('submit-request');
                        } else {
                            return redirect('/');
                        }
                    }
                } else {
                  
                    return back()->withErrors(['password' => 'invalid email or password']);
                }
            }else{
                return back()->withErrors(['password' => 'invalid email or password']);
            }
        }
        return view('admin.login');
    }

    public function register(Request $request) {

        if ($request->method() == 'POST') {
            $validator = Validator::make($request->all(), [
                'email'    => 'required|email',
                'password' => 'required'
            ]);
            if ($validator->fails()){
                return redirect()->back()->withErrors($validator->errors())->withInput();
            }
            $user = User::where('email', $request->input('email'))->first();
           
            if ($user == null) {
                $user = User::create([
                    'name'  => $request->fname.' '.$request->lname,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'organization_type' => $request->organization_type,
                    'organization_name' => $request->organization_name,
                    'country'  => $request->country,
                    'state'    => $request->state,
                    'zip'      => $request->zip,
                    'password' => Hash::make($request->password),
                ]);
                return redirect('/')->with('success', 'Account Created..!!');
            } else {
                return back()->withErrors(['password' => 'Email already Exist']);
            }
        }
        return view('admin.signup');
    }

    public function users() {
        $users = User::where('id','!=',1)->orderByDESC('id')->paginate(30);
        return view('admin.users', compact('users'));
    }

    public function contacts() {
        
        $contacts = Contact::orderByDESC('id')->paginate(30);
        return view('admin.contacts', compact('contacts'));
    }


    // public function setting(Request $request) {

    //     $content = Setting::firstOrFail();
    //     if ($request->method() == 'POST') {

    //         $content->title             = $request->input('title') ?? '';
    //         $content->email             = $request->input('email');
    //         $content->phone             = $request->input('phone');
    //         $content->address           = $request->input('address');
    //         $content->facebook          = $request->input('facebook');
    //         $content->twitter           = $request->input('twitter');
    //         $content->instagram         = $request->input('instagram');
    //         $content->commission        = $request->input('commission');
    //         $content->stripe_api_key    = $request->input('stripe_api_key') ?? '';
    //         $content->stripe_secret_key = $request->input('stripe_secret_key') ?? '';
    //         $content->paypal_api_key    = $request->input('paypal_api_key') ?? '';
    //         $content->paypal_secret_key = $request->input('paypal_secret_key') ?? '';

    //         if ($request->has('logo')) {

    //             $dir      = "uploads/setting/";
    //             $file     = $request->file('logo');
    //             $fileName = time().'-setting.'.$file->getClientOriginalExtension();
    //             $file->move($dir, $fileName);
    //             $content->logo = $dir.$fileName;
    //         }
    //         $content->save();

    //         return redirect()->back()->with('success', 'Site Setting Updated Successfully');
    //     }
    //     return view('admin.setting', compact('content'));
    // }

    // public function changePassword()
    // {
    //     return view('admin.change-password');
    // }

    // public function updateAdminPassword(Request $request)
    // {
    //     $id = Auth::user()->id;

    //     $this->validate($request, [
    //         'current_password' => 'required',
    //         'password' => 'required|min:8|confirmed',
    //     ]);

    //     if (Hash::check($request->current_password, Auth::User()->password)) {
    //         $content = User::find($id);
    //         $content->password = Hash::make($request->password);
    //         $content->save();
    //         return redirect()->back()->with('success', 'Password Update Successfully.');
    //     }else{
    //         return back()->withErrors(['current_password' => 'Your current Password not recognized']);
    //     }

    // }
}
