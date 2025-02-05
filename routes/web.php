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
Route::get('/shop_single',[frontendcontroller::class,'shop_single'])->name('shop_single');
Route::get('/shop',[frontendcontroller::class,'shop'])->name('shop');
Route::get('/login',[frontendcontroller::class,'login'])->name('login');
Route::get('/signup',[frontendcontroller::class,'signup'])->name('signup');
Route::get('/admin',[frontendcontroller::class,'admin'])->name('admin');

Route::POST('/login_process',[backendcontroller::class,'login_process'])->name('login_process');
Route::POST('/register',[backendcontroller::class,'register'])->name('register');
