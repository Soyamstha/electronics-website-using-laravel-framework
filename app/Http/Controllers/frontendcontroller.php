<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
