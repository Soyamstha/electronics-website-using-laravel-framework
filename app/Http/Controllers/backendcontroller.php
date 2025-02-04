<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer_acc;
class backendcontroller extends Controller
{
    function login_process(Request $request)
    {
        $email=$request->email;
        $password=$request->password;
        $customer_acc=customer_acc::where('email',$email)->where('password',$password)->first();
        if($customer_acc)
        {
            return response()->json(['status'=>'success','message'=>'login success']);
        }
        else
        {
            return response()->json(['status'=>'error','message'=>'invalid email or password']);
        }
    }
    function register(Request $request)
    {
        $customer_acc = new customer_acc();
        if($request->password == $request->re_password)
        {
            $customer_acc->name = $request->name;
            $customer_acc->email = $request->email;
            $customer_acc->password = $request->password;
            $customer_acc->save();
            return back()->with('success','your acc has be register');
        }
        else
        {
            return redirect()->back()->withErrors(['message'=>'password and Repeat password are not same']);
        }
    }
}
