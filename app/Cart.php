<?php

namespace App;


use Illuminate\Support\Facades\Session;

class Cart
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;
    public  $boat = 0;

    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;

        }
    }

    public function add($item, $id, $qty)
    {
        session()->push('saved.id', $id);

        $storedItems = ['qty' => 0, 'price' => 0, 'items' => $item];

//        if ($this->items) {
//            if (!array_key_exists($id, $this->items)) {
                $storedItems['qty'] = $qty;
                $storedItems['price'] = $item->price * $qty;

                $this->items[$id] = $storedItems;

                $this->totalQty = $this->items[$id]['qty'];
                $this->totalPrice = $this->items[$id]['items']['price'] * $qty;
                $storedItems['qty'] = 0;
//            }
//        }

        if(session::has('cart')) {

            $cart = Session::get('cart');
            ['totalPrice' => $cart->totalPrice, 'totalQty' => $cart->totalQty];

            $sum = session()->get('saved.id');

            if (in_array($id, $sum)) {
                $storedItems['qty'] = $this->items[$id]['qty'] + $qty;
               //$storedItems['qty'] = 0 + $qty;
                $storedItems['price'] = $this->items[$id]['items']['price'] + $item->price * $qty;
                $this->items[$id] = $storedItems;
            }

            $this->totalQty = $cart->totalQty + $qty;
            $this->totalPrice = $cart->totalPrice + $this->items[$id]['items']['price'] * $qty;
            $this->items[$id] = $storedItems;
            $storedItems['qty'] = 0;

        }
    }

    public function removeItem($id)
    {
        if(session::has('cart')) {
            $cart = Session::get('cart');
            ['totalPrice' => $cart->totalPrice, 'totalQty' => $cart->totalQty];

            $this->totalQty = $cart->totalQty - $this->items[$id]['qty'];
            $this->totalPrice = $cart->totalPrice - $this->items[$id]['items']['price'] * $this->items[$id]['qty'];

            unset($this->items[$id]);

        }

    }


    public function moreItem($id)
    {
        $this->items[$id]['qty']++;
        $this->items[$id]['price'] += $this->items[$id]['items']['price'];
        $this->totalQty++;
        $this->totalPrice += $this->items[$id]['items']['price'];
    }

}

//    public function updateQty($id,$quantity,$item)
//    {
////      Each Quantity
//        $this->items[$id]['qty'] = $quantity;
//
////      Each Price
//        $this->items[$id]['price'] = $this->items[$id]['items']['price']* $quantity;
//
////      Total Price
////        $this->totalPrice = $this->items[$id]['items']['price'] * $quantity;
//
////      Total Quantity


//          Array have same id
//          ----------------------

//$sum = session()->get('saved.id');
//if (in_array($id, $sum)) {
//
//    $storedItems['qty'] = $cart->totalQty + $qty;
//    $storedItems['price'] = $cart->totalPrice + $storedItems['price'];
//    $this->items[$id] = $storedItems;
//


// $storedItems['price']*$qty +
//}

//            IF array have same id
//          ----------------------
//            $sum = session()->get('saved.id');
//
//            if (in_array($id, $sum)) {
//                $storedItems = ['items' => $item];
//
//                $storedItems['qty'] = $cart->items[$id]['qty'] + $qty;
//                $storedItems['price'] = $cart->items[$id]['items']['price'] + $item->price * $qty;
//
//                $this->items[$id]= $storedItems;
//
////            } else if (!in_array($id, $sum)) {
////                $storedItems['qty'] = 0;
////                $storedItems['price'] = 0;
////                $this->items[$id] = $storedItems;
//            }
