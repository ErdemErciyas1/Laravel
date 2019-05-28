<?php

namespace App;

class ShoppingCart 
{
    public $items = null;
    public $totalQty= 0;
    public $totalPrice = 0;

    public function __construct($oldShoppingCart)
    {
        if ($oldShoppingCart) {
            $this ->items = $oldShoppingCart->items;
            $this ->totalQty = $oldShoppingCart->totalQty;
            $this ->totalPrice = $oldShoppingCart->totalPrice;
        }
    }

    public function add($item, $id) {
        $storedItem = ['quantity' => 0, 'price' => $item->price, 'item' =>$item];
        if ($this->items) {
            if (array_key_exists($id, $this->items)){
                $storedItem = $this->items[$id];
            }
        }
        $storedItem['quantity']++;
        $storedItem['price'] = $item->price * $storedItem['quantity'];
        $this->items[$id] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $item->price;
    }
}
