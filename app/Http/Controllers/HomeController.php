<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('blog.index');
    }
    public function cart()
    {
        return view('blog.cart');
    }
    public function blog()
    {
        return view('blog.blog');
    }
    public function contact()
    {
        return view('blog.contact');
    }
    public function product()
    {
        return view('blog.product');
    }
    public function regular()
    {
        return view('blog.regular');
    }
    public function shop()
    {
        return view('blog.shop');
    }
    public function blog_single()
    {
        return view('blog.blog_single');
    }
}
