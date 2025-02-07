<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\admin_login;
use App\Models\product;
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
    function admin_login(Request $request)
    {
        $email=$request->email;
        $password=$request->password;
        $admin_login=admin_login::where('email',$email)->first();
        if($admin_login)
        {
            if($password == $admin_login->password)
            {
                $request->session()->put('admin',$admin_login);
                return redirect('admin_access');
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
    function admin_logout()
    {
        session()->forget('admin');
        return redirect('admin_login');
    }
    function add_product(Request $request)
    {
        $product = new product();
        $product->name = $request->name;
        $product->description = $request->detail;
        $product->price = $request->cost_price;
        $product->sellprice = $request->sell_price;
        $product->quantity = $request->quantity;
        $product->catagory = $request->catagory;
        $product->type = $request->type;
        $product->image = $request->image1;
        $product->image1 = $request->image2;
        $product->image2 = $request->image3;
        $product->save();
        return back()->with('success','product has been added');
    }

}
