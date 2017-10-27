<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckoutRequest;
use App\Inquiry;
use App\Order;
use App\Product;
use App\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;


class CheckoutController extends Controller
{
    public function index()
    {
        return view('checkout');
    }

    public function inquiry($id)
    {
        $orders = Order::findOrFail($id)->get();

        $inquires = Inquiry::where('order_id', $id)->get();

        return view('orders.inquiry', compact('inquires', 'orders'));
    }


    public function create()
    {
        //
    }

    public function store(checkoutRequest $request)
    {
        $input = $request->all();

        if ($user = Auth::user()->id) {
            $input['customer_id'] = $user;
        }

        $curId = mt_rand(100000, 1000000);

        $input['order_id'] = $curId;

        session(['order_id' => $curId]);

        Inquiry::create($input);

        return redirect('sendMail');
    }

    public function show($id)
    {
//        $orders = Order::findOrFail($id);
//
//        return view('checkout',compact('orders'));
    }

    public function edit($id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function printing()
    {
        return view('printing');
    }

    public function embroidery()
    {
        return view('printing.embroidery');
    }
    public function digital(){

        return view('printing.digital');

    }

    public function screen(){

        return view('printing.screen');

    }

    public function offset(){

        return view('printing.offset');

    }

    public function customize(){

        return view('printing.customize');

    }
    public function promotional(){

        return view('printing.promotional');

    }

    public function acrylic(){

        return view('printing.acrylic');

    }
}
