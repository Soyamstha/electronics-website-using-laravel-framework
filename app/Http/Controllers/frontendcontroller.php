<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\order;
use App\Models\orderitem;
use Yajra\DataTables\DataTables;
class frontendcontroller extends Controller
{
    function index()
    {
        $products = product::all();
        return view('index',compact('products'));
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
    function contact()
    {
        return view('contact');
    }
    function news()
    {
        return view('news');
    }
    function shop_left_sidebar()
    {
        return view('shop_left_sidebar');
    }
    function shop_single($id)
    {
        $products = product::find($id);
        return view('shop_single', ['products' => $products]);
    }
    function shop()
    {
        $products = product::all();
        return view('shop',compact('products'));
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
        $orders=order::all();
        return view('admin_access',compact('orders'));
    }
    public function getOrders(Request $request)
    {
    if ($request->ajax()) {
        $orders = Order::select(['id', 'first_name', 'last_name', 'email', 'phone', 'address', 'address2', 'city', 'status', 'cost']);
        return DataTables::of($orders)->make(true);
    }
    return view('admin_access');
    }
    function editorders(Request $request)
    {
        $validated = $request->validate([
        'id' => 'required|exists:orders,id',
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:20',
        'address' => 'required|string|max:255',
        ]);

        Order::where('id', $validated['id'])->update([
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'address' => $validated['address'],
        ]);
        return response()->json([
        'success' => true,
        'message' => 'Order updated successfully.'
        ]);

    }
    function deleteorder(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->delete();
        return response()->json([
            'success' => true,
            'message' => 'Order deleted successfully.'
    ]);
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
    function order_detail($id)
    {
        $order_items=orderitem::where("order_id",$id)->get();
        return view('order_detail',compact('order_items'));
    }
    function order_status($id)
    {
        $order=order::find($id);
        $order->status="completed";
        $order->update();
        return redirect()->back();
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
