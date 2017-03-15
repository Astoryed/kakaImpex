<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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

    public function getAddToCart(Request $request, $id)
    {
        $product = Product::findOrfail($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);
        $request->session()->put('cart', $cart);

        $products = Product::all();

        return view('products',compact('products'));

    }
    public function cart()
    {
        if(!Session::has('cart'))
        {
            return view('cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice,]);
    }


    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function products()
    {
        $products =Product::all();

        return view('products',compact('products'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function details($id)
    {
        $product =Product::findOrfail($id);

        return view('details',compact('product'));
    }

    public function getMore($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);

        $cart->moreItem($id);

        Session::put('cart', $cart);

        return redirect()->route('cart');

    }

    public function getDelete($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);

        $cart->removeItem($id);

        if (count($cart->items) >0)
        {
            Session::put('cart', $cart);
        }
        else{
            Session::forget('cart');
        }

        return redirect()->route('cart');

    }

}
