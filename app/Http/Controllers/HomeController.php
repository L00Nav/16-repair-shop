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
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function default()
    {
        return view('test.new');
    }

    public function index()
    {
        return view('welcome');
    }
    
    public function user()
    {
        return view('test.user');
    }
    
    public function admin()
    {
        return view('test.admin');
    }
    
    public function servicesIndex()
    {
        return view('services.index');
    }
    
    public function mechanicsIndex()
    {
        return view('mechanics.index');
    }
    
    public function ordersIndex()
    {
        return view('orders.index');
    }
    
    public function ratingsIndex()
    {
        return view('ratings.index');
    }
}
