<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckoutRequest;
use App\Inquiry;
use App\Order;
use App\Product;
use App\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     *
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        $orders = Order::findOrFail($id);
//
//        return view('checkout',compact('orders'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
//    public function update(Request $request, $id)
//    {
//        $oldCart = Session::has('cart') ? Session::get('cart') : null;
//
//        $cart = new Cart($oldCart);
//
//        $quantity = $request->qty;
//
////        $product = Product::findOrfail($id);
//
//        $item = Product::findOrFail($id);
//
//        $cart->updateQty($id,$quantity,$item);
//
//
//
//        Session::put('cart', $cart);
//
////        if(!empty($_SESSION["shopping_cart"]))
////        {
////            $totalQty = $totalQty + $qty;
//            }
////
////
////            $totalQty = $qty;
////        }
//
//
//        return redirect()->route('cart');
//
//
////        $quantity = $request->qty;
////
////        $price = Product::findOrFail($id)->price;
////
////        $multiply = $price *$quantity;
////
////        echo $multiply;
//
//    }


    // Post Controller
    public function poster()
    {
        return view('poster');

    }
    public function poster()
    {
        return view('poster');

    }
    public function postermail(Request $request)
    {
        return $request->all();

    }
//
//    public function postUser(Request $request)
//    {
//        return $request->all();
//    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
