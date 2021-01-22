<?php

namespace App\Http\Controllers\Helpers;

class Ehelper
{
    public  static function totalCart()
    {
        if(session('cart'))
        {
            $cart = session('cart');

            foreach( $cart as $key)
            {
                $qty = !empty($key['quantity'])?(int)$key['quantity']:0;
                $total = 0;
                $total += (int)str_replace(',', '', $key['price']) * $qty;
            }

            return $total;
        }
    }
}
