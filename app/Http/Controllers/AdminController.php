<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Order;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.admin');
    }

    public function show()
    {
        $admins = Admin::all();

        return view('admin.index',compact('admins'));
    }

    public function order()
    {
        $orders = Order::latest()->limit(100)->get();

        $orders->transform(function ($order, $key) {

            $order->cart = unserialize($order->cart);

            return $order;

        });

        return view('orders.orderlist',['orders' => $orders]);

    }
}
