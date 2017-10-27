<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Inquiry;
use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     *
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
        session()->keep(['saved'=> $id]) ;

        $product = Product::findOrfail($id);

        $oldCart = Session::has('cart') ? Session::get('cart') : null;

        $cart = new Cart($oldCart);

        $qty = $request->qty;

        $cart->add($product, $product->id,$qty);

        $request->session()->put('cart', $cart);

        Session::flash('product_added', 'The Product has been added into the cart');

        return back();

    }

    public function cart()
    {
        if (!Session::has('cart')) {
            return view('cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice, 'totalQty' =>$cart->totalQty]);
    }

    public function index(){

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

    public function feedback()
    {
        return view('feedback');
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

        $cart->removeItem($id,$cart->totalQty,$cart->totalPrice);

        if (count($cart->items) >0)
        {
            Session::put('cart', $cart);

//          for session named save
            $sum = session()->get('saved.id');
            $sub = array_search($id,$sum);
            unset($sum[$sub]);
            Session::put('saved.id',$sum);

        }
        else{
            Session::forget('cart');
            Session::forget('saved');
        }

        return redirect()->route('cart');

    }

    public function getReduce($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);

        $cart->reduceItem($id);

        Session::put('cart', $cart);
        return redirect()->route('details');
    }

    public function warmupJackets()
    {
        $products =Product::where('category', 'WarmUpJackets')->get();

        return view('products',compact('products'));
    }

    public function warmupTrousers()
    {
        $products =Product::where('category', 'WarmUpTrousers')->get();

        return view('products',compact('products'));
    }

    public function warmupSuits()
    {
        $products =Product::where('category', 'WarmUpSuits')->get();

        return view('products',compact('products'));
    }

    public function sleeveless()
    {
        $products =Product::where('category', 'SleevesLess')->get();

        return view('products',compact('products'));
    }

    public function shortSleeves()
    {
        $products =Product::where('category', 'ShortSleeves')->get();

        return view('products',compact('products'));
    }

    public function longSleeves()
    {
        $products =Product::where('category', 'LongSleeves')->get();

        return view('products',compact('products'));
    }

    public function soccer()
    {
        $products =Product::where('category', 'Soccer')->get();

        return view('products',compact('products'));
    }

    public function shorts()
    {
        $products =Product::where('category', 'Shorts')->get();

        return view('products',compact('products'));
    }

    public function sublimation()
    {
        $products =Product::where('category', 'Sublimation')->get();

        return view('products',compact('products'));
    }

    public function rain()
    {
        $products =Product::where('category', 'Rain')->get();

        return view('products',compact('products'));
    }

    public function pullover()
    {
        $products =Product::where('category', 'Pullover')->get();

        return view('products',compact('products'));
    }

    public function baseballGloves()
    {
        $products =Product::where('category', 'BaseballBattingGloves')->get();

        return view('products',compact('products'));
    }

    public function bibs()
    {
        $products =Product::where('category', 'TrainingBibs')->get();

        return view('products',compact('products'));
    }

    public function hoodedJackets()
    {
        $products =Product::where('category', 'HoodedJackets')->get();

        return view('products',compact('products'));
    }

    public function sweatShirts()
    {
        $products =Product::where('category', 'SweatShirts')->get();

        return view('products',compact('products'));
    }

    public function backpack()
    {
        $products =Product::where('category', 'Backpack')->get();

        return view('products',compact('products'));
    }

    public function cyclingGloves()
    {
        $products =Product::where('category', 'CyclingGloves')->get();

        return view('products',compact('products'));
    }

    public function baseballJerseys()
    {
        $products =Product::where('category', 'BaseballJerseys')->get();

        return view('products',compact('products'));
    }

    public function poloUmpireShirts()
    {
        $products =Product::where('category', 'poloUmpireShirts')->get();

        return view('products',compact('products'));
    }

    public function baseballPants()
    {
        $products =Product::where('category', 'baseballPants')->get();

        return view('products',compact('products'));
    }

    public function cyclingJerseys()
    {
        $products =Product::where('category', 'CyclingJerseys')->get();

        return view('products',compact('products'));
    }

    public function leatherMen()
    {
        $products =Product::where('role_id',1)->get();

        return view('products',compact('products'));
    }

    public function leatherWomen()
    {
        $products =Product::where('role_id',2)->get();

        return view('products',compact('products'));
    }

    public function newArrivals()
    {
        $products =Product::latest()->limit(6)->get();

        return view('products',compact('products'));
    }

    public function sendMail()
    {
        $customer_name = Auth::user()->name;

        $customer_email = Auth::user()->email;

        $customer_id = Auth::user()->id;

        $cart = Session::get('cart');

        $orders = new Order();

        $orders->cart = serialize($cart);

        $input = session()->get('order_id');

        $orders->id = $input;

        $orders->customer_id = $customer_id;

        $orders->customer_name = $customer_name;

        $orders->customer_email = $customer_email;

        $orders->save();

        $orders = Order::latest()->limit(1)->get();

            $orders->transform(function ($order, $key) {

                $order->cart = unserialize($order->cart);

                return $order;
            });

        Mail::send('email.mymail', ['orders' => $orders], function ($m) use ($orders) {
            $m->from('kakaimpex@gmail.com', 'Your Application');

            $m->to('astoryed@gmail.com')->subject('Order Details!');
        });

        Session::flash('order_submitted', 'Your Order has been submitted');

        if (!Session::has('cart')) {
            return view('cart');
        }

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        return view('cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice,]
            ,compact('customer_id','customer_name','customer_email','orders','products'));

    }






















}
