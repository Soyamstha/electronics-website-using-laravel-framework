<?php

use App\Http\Controllers\backendcontroller;
use App\Http\Controllers\frontendcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/',[frontendcontroller::class,'index'])->name('index');
Route::get('/about',[frontendcontroller::class,'about'])->name('about');
Route::get('/account',[frontendcontroller::class,'account'])->name('account');
Route::get('/cart',[frontendcontroller::class,'cart'])->name('cart');
Route::get('/checkout',[frontendcontroller::class,'checkout'])->name('checkout');
Route::get('/contact',[frontendcontroller::class,'contact'])->name('contact');
Route::get('/news_single',[frontendcontroller::class,'news_single'])->name('news_single');
Route::get('/news',[frontendcontroller::class,'news'])->name('news');
Route::get('/shop_left_sidebar',[frontendcontroller::class,'shop_left_sidebar'])->name('shop_left_sidebar');
Route::get('/shop_single/{id}',[frontendcontroller::class,'shop_single'])->name('shop_single');
Route::get('/shop',[frontendcontroller::class,'shop'])->name('shop');
Route::get('/login',[frontendcontroller::class,'login'])->name('login');
Route::get('/signup',[frontendcontroller::class,'signup'])->name('signup');
Route::get('/admin',[frontendcontroller::class,'admin'])->name('admin');
Route::get('/admin_access',[frontendcontroller::class,'admin_access'])->name('admin_access');
Route::get('/add_product',[frontendcontroller::class,'add_product'])->name('add_product');
Route::get('/view',[frontendcontroller::class,'view'])->name('view');
Route::get('/edit/{id}',[frontendcontroller::class,'edit'])->name('edit');
Route::get('/delete/{id}',[frontendcontroller::class,'delete'])->name('delete');
Route::get('/order_detail/{id}',[frontendcontroller::class,'order_detail'])->name('order_detail');

Route::POST('/login_process',[backendcontroller::class,'login_process'])->name('login_process');
Route::POST('/register',[backendcontroller::class,'register'])->name('register');
Route::POST('/admin_login',[backendcontroller::class,'admin_login'])->name('admin_login');
Route::POST('/add_product',[backendcontroller::class,'add_product'])->name('add_product');
Route::POST('/admin_logout',[backendcontroller::class,'admin_logout'])->name('admin_logout');
Route::Put('/update/{id}',[frontendcontroller::class,'update'])->name('update');

Route::POST('/add_to_cart',[backendcontroller::class,'add_to_cart'])->name('add_to_cart');
Route::POST('/add_quantity',[backendcontroller::class,'add_quantity'])->name('add_quantity');
Route::POST('/remove_item',[backendcontroller::class,'remove_item'])->name('remove_item');
Route::POST('/place_order',[backendcontroller::class,'place_order'])->name('place_order');
