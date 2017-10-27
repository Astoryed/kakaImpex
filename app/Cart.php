<?php

namespace App;


use Illuminate\Support\Facades\Session;

class Cart
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;

        }
    }

    public function add($item,$id,$qty,$size)
    {
        $storedItems = ['qty' => $qty, 'price' => $item->price, 'items' => $item, 'size'=>$size];

        if ($this->items) {
            if (array_key_exists($id, $this->items)) {
                $cart = Session::get('cart');
                $storedItems['qty'] = $cart->items[$id]['qty'] + $qty;
                $storedItems['price'] = $item->price *  $storedItems['qty'];
                $storedItems['size']=$size;
                $this->items[$id] = $storedItems;
            }
        }

        if ($this->items) {
            if (!array_key_exists($id, $this->items)) {
                $storedItems['qty'] = $qty;
                $storedItems['price'] = $item->price * $qty;
                $storedItems['size']=$size;
                $this->items[$id] = $storedItems;

            }
        }

        if(session::has('cart')) {

            $cart = Session::get('cart');
            ['totalPrice' => $cart->totalPrice, 'totalQty' => $cart->totalQty];

            $this->totalQty = $cart->totalQty + $qty;
            $this->totalPrice = $cart->totalPrice +  $this->items[$id]['items']['price'] * $qty;
            $this->items[$id] = $storedItems;

        }

        if(!session::has('cart')) {

            $storedItems = ['qty' => 0, 'price' => 0, 'items' => $item];

            $storedItems['qty'] = $qty;
            $storedItems['price'] = $item->price * $qty;
            $storedItems['size']=$size;

            $this->items[$id] = $storedItems;

            $this->totalQty = $this->items[$id]['qty'];
            $this->totalPrice = $this->items[$id]['items']['price'] * $qty;
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



}
