<?php
namespace App\Classes;
use function Couchbase\defaultDecoder;
use Illuminate\Support\Facades\Session;
use App\Product;

class Cart
{
    public static function add($product)
  

    {

        $existingCart = session('cart');

        $cart = array();



        if (isset($existingCart)) {

            if (array_key_exists($product->id, $existingCart)) {

                $newAmount = $existingCart[$product->id]+ 1;

                $existingCart[$product->id] = $newAmount;

                session(['cart' => $existingCart]);

            } else {

                $Cart = $existingCart + array ($product->id =>1);

                session(['cart' => $Cart]);

            }

        }

        else{

            $CartNew = array($product->id => 1);

            session(['cart' => $CartNew]);

        }

        return redirect('shoppingcart');

    }

    public static function changeAmount($product, $amount)

    {

        $existingSession = session('cart');

        if ($amount >= 1){

            $existingSession[$product->id] = $amount;

            session(['cart' => $existingSession]);

        }
        else{

            unset($existingSession[$product->id]);

            session(['cart' => $existingSession]);

        }

        return Redirect('/shoppingcart');

    }
    
}
