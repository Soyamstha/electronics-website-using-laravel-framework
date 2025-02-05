<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class backendcontroller extends Controller
{
    function login_process(Request $request)
    {
        $email=$request->email;
        $password=$request->password;
        $user=User::where('email',$email)->first();
        if($user)
        {
            if(password_verify($password,$user->password))
            {
                $request->session()->put('user',$user);
                return redirect('index');
            }
            else
            {
                return redirect()->back()->withErrors(['message'=>'Invalid Password']);
            }
        }
        else
        {
            return redirect()->back()->withErrors(['message'=>'Invalid Email']);
        }
    }
    function register(Request $request)
    {
        $user = new user();
        if($request->password == $request->re_password)
        {
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->save();
            return back()->with('success','your acc has be register');
        }
        else
        {
            return redirect()->back()->withErrors(['message'=>'password and Repeat password are not same']);
        }
    }
}
