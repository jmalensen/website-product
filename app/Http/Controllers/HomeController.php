<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
//    /**
//     * Create a new controller instance.
//     *
//     * @return void
//     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Home
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.index');
    }

    /**
     * Features
     *
     * @return \Illuminate\Http\Response
     */
    public function features()
    {
        return view('front.features');
    }

    /**
     * Prices
     *
     * @return \Illuminate\Http\Response
     */
    public function prices()
    {
        return view('front.prices');
    }

    /**
     * Blog
     *
     * @return \Illuminate\Http\Response
     */
    public function blog()
    {
        return view('front.blog');
    }

    /**
     * Article
     *
     * @return \Illuminate\Http\Response
     */
    public function article()
    {
        return view('front.article');
    }

    /**
     * Contact
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('front.contact');
    }

    /**
     * Test page
     *
     * @return \Illuminate\Http\Response
     */
    public function test()
    {
        return view('front.demo');
    }

    /**
     * Legal Notice
     *
     * @return \Illuminate\Http\Response
     */
    public function legalNotice()
    {
        return view('front.index');
    }

    /**
     * Cookies
     *
     * @return \Illuminate\Http\Response
     */
    public function cookies()
    {
        return view('front.index');
    }
}
