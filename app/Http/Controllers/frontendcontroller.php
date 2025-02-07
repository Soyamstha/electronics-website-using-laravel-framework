<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
class frontendcontroller extends Controller
{
    function index()
    {
        return view('index');
    }
    function about()
    {
        return view('about');
    }
    function account()
    {
        return view('account');
    }
    function cart()
    {
        return view('cart');
    }
    function checkout()
    {
        return view('checkout');
    }
    function news_single()
    {
        return view('news_single');
    }
    function news()
    {
        return view('news');
    }
    function shop_left_sidebar()
    {
        return view('shop_left_sidebar');
    }
    function shop_single()
    {
        return view('shop_single');
    }
    function shop()
    {
        return view('shop');
    }
    function login()
    {
        return view('login');
    }
    function signup()
    {
        return view('signup');
    }
    function admin()
    {
        return view('admin');
    }
    function admin_access()
    {
        return view('admin_access');
    }
    function add_product()
    {
        return view('add_product');
    }
    function view()
    {
        $data=product::all();
        return view('view',compact('data'));
    }
    function edit($id)
    {
        $products=product::find($id);
        return view('edit',compact('products'));
    }
    function update(Request $request,$id)
    {
        $products=product::find($id);
        $products->name = $request->name;
        $products->description = $request->detail;
        $products->price = $request->cost_price;
        $products->sellprice = $request->sell_price;
        $products->quantity = $request->quantity;
        $products->catagory = $request->catagory;
        $products->type = $request->type;
        $products->image = $request->image1;
        $products->image1 = $request->image2;
        $products->image2 = $request->image3;
        $products->update();
        return redirect('view')->with('status','product has been updated');
    }
    function delete($id)
    {
        $products=product::find($id);
        $products->delete();
        return redirect('view')->with('status','product has been deleted');
    }
}
