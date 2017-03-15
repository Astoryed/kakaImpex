<?php

namespace App;

class Cart
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if($oldCart)
        {
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice =$oldCart->totalPrice;
        }
    }
    public function add($item, $id)
    {
        $storedItems = ['qty' =>0, 'price' =>0, 'items'=> $item];
        if($this->items)
        {
            if(array_key_exists($id, $this->items))
            {
                $storedItems = $this->items[$id];
            }
        }
        $storedItems['qty']++;
        $storedItems['price'] = $item->price * $storedItems['qty'];

        $this->items[$id] = $storedItems;

        $this->totalQty++;
        $this->totalPrice +=$item->price;

    }

    public function moreItem($id)
    {
        $this->items[$id]['qty']++;
        $this->items[$id]['price'] += $this->items[$id]['items']['price'];
        $this->totalQty++;
        $this->totalPrice += $this->items[$id]['items']['price'];
    }

    public function removeItem($id)
    {
        $this->totalQty -= $this->items[$id]['qty'];
        $this->totalPrice -= $this->items[$id]['items']['price'];
        unset($this->items[$id]);

    }

}
