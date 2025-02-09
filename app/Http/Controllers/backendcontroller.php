<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\admin_login;
use App\Models\product;
use App\Models\order;
use App\Models\orderitem;
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
                return view('index');
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
    function add_to_cart(Request $request)
    {
        if ($request->session()->has('cart')) {
            $cart = $request->session()->get('cart');
            $product_ids = array_column($cart, 'id');
            if (!in_array($request->id,$product_ids)) {
                $id = $request->id;
                $name = $request->name;
                $image = $request->image;
                $quantity = $request->quantity;
                ($request->sellprice != null) ? $price = $request->sellprice : $price = $request->price;
                $product_array= array(
                    'id' => $id,
                    'name' => $name,
                    'image' => $image,
                    'quantity' => $quantity,
                    'price' => $price
                );
                $cart[$request->id] = $product_array;
                $request->session()->put('cart', $cart);
                return view('cart');
            }
            else
            {
                return redirect()->back()->withErrors(['message'=>'product already added to cart']);
            }
        }
        else
        {
            $id = $request->id;
            $name = $request->name;
            $image = $request->image;
            $quantity = $request->quantity;
            ($request->sellprice != null) ? $price = $request->sellprice : $price = $request->price;
            $product_array = array(
                'id' => $id,
                'name' => $name,
                'image' => $image,
                'quantity' => $quantity,
                'price' => $price

            );
            $cart[$request->id] = $product_array;
            $request->session()->put('cart', $cart);
            return view('cart');
        }
    }
    function add_quantity(Request $request)
    {
        $cart=$request->session()->get('cart');
        $id=$request->id;
        $cart[$id]['quantity']=$request->quantity;
        $request->session()->put('cart',$cart);
        return redirect()->back();
    }
    function remove_item(Request $request)
    {
        $cart=$request->session()->get('cart');
        $id=$request->id;
        unset($cart[$id]);
        $request->session()->put('cart',$cart);
        return redirect()->back();
    }
    function place_order(Request $request)
    {
        $order =new order();
        $order->first_name=$request->first_name;
        $order->last_name=$request->last_name;
        $order->email=$request->email;
        $order->phone=$request->phone;
        $order->address=$request->address1;
        $order->address2=$request->address2;
        $order->city=$request->city;
        $order->cost=$request->cost;
        $order->status="not paid";
        $order->date=date("y-m-d");
        $order->save();
        $cart=$request->session()->get('cart');
        foreach($cart as $value)
        {
            $orderitem=new orderitem();
            $orderitem->order_id=$order->id;
            $orderitem->product_id=$value['id'];
            $orderitem->product_name=$value['name'];
            $orderitem->product_price=$value['price'];
            $orderitem->product_image=$value['image'];
            $orderitem->product_quantity=$value['quantity'];
            $orderitem->order_date=date("y-m-d");
            $orderitem->save();
        }

    }
}
