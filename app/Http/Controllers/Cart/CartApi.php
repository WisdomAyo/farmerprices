<?php

namespace App\Http\Controllers\Cart;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\URL;
use App\Product;
use App\ProductImages;

class CartApi extends Controller
{

    public function index(Request $request){


        return response()->json(['success']);


    }


    public function addtocart(Request $request)
    {
        $id = $request->id;
        $product_id = $request->id;
        $product = Product::find($id);
        $quantity = $request->quantity;

        if(!$product) {

            abort(404);

        }

        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if(!$cart) {

            $cart = [
                $id => [
                    "id"   => $product->id,
                    "name" => $product->name,
                    "quantity" => $quantity,
                    "price" => $product->price,
                    "photo" => ProductImages::select('*')->where('product_id', '=', $product->id)->where('status_id', '=', 1)->take(1)->value('name'),
                    "lifetime" => 4152240000
                ]
            ];

            session()->put('cart', $cart);

            return redirect()->route('index.shopping_cart')->with('response','Product added to cart successfully!');
        }

        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {

            $cart[$id]['quantity']++;

            session()->put('cart', $cart);

            return redirect()->route('index.shopping_cart')->with('response','Product added to cart successfully!');

        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "id"   => $product->id,
            "name" => $product->name,
            "quantity" => $quantity,
            "price" => $product->price,
            "photo" =>  ProductImages::select('*')->where('product_id', '=', $product->id)->where('status_id', '=', 1)->take(1)->value('name'),
        ];

        session()->put('cart', $cart);

        return redirect()->route('index.shopping_cart')->with('response','Product added to cart successfully!');
    }



    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');

            $cart[$request->id]["quantity"] = $request->quantity;

            session()->put('cart', $cart);

            session()->flash('success', 'Cart updated successfully');
        }
    }

    public function remove(Request $request)
    {
        if($request->id) {

            $cart = session()->get('cart');

            if(isset($cart[$request->id])) {

                unset($cart[$request->id]);

                session()->put('cart', $cart);
            }

            session()->flash('success', 'Product removed successfully');
        }
    }


//     public function addtocart(Request $request) {

//       $this->cart = new \Cart(true);
//         if(isset($request->action) && $request->action === 'add to cart'):
//                 $id = $request->id;
//                 $qty = (int)$request->quantity;

//           if($this->cart->hasItem($id)) {
//             //$qty = $this->cart->getQuantity($id);
//             $qty = 1;
//             $this->cart->updateQuantity($id, 'quantity', $qty);
//             $item = array(
//               'id'                  => $id,
//               'quantity'            => $qty,
//               'name'                => Product::where('id', $id)->value('name'),
//               'price'               => number_format(Product::where('id', $id)->value('price')),
//               'cart_image'          => URL::to('products/'.Product_image::where('product_id', $id)->value('name')),
//               'url'                 => URL::to(Product::where('id', $id)->value('url')),
//               'data_url'            => URL::to('/')
//             );

//             $item['cart_image'] = '<img src="'.base_url('uploads/thumbnail-40x52/'.Product_image::where('product_id', $id)->value('name')).'" />';
//             $item['result'] = 'success';
//             $item['total'] = $this->cart->totalItems();
//             $item['total_cost'] = ($this->cart->total() == null)? number_format(Product::where('id', $id)->value('price')) : number_format($this->cart->total()/2);
//             $item['cur_quantity'] = $this->cart->getQuantity($id);

//             // print json_encode($item);
//           }else {
//             $item = array(
//                 'id'                  => $id,
//                 'quantity'            => $qty,
//                 'name'                => Product::where('id', $id)->value('name'),
//                 'price'               => number_format(Product::where('id', $id)->value('price')),
//                 'cart_image'          => URL::to('products/'.Product_image::where('product_id', $id)->value('name')),
//                 'url'                 => URL::to(Product::where('id', $id)->value('url')),
//                 'data_url'            => URL::to('/')
//             );
//             $this->cart->addToCart($id, $item);

//             $item['result'] = 'success';
//             $item['total'] = $this->cart->totalItems();
//             $item['total_cost'] = ($this->cart->total() == null)? number_format(Product::where('id', $id)->value('price')) : number_format($this->cart->total()/2);
//             $item['cur_quantity'] = $this->cart->getQuantity($id);

//             return view('home.index', $item);
//           }
//         else:
//             $heading                = 'Wrong Page!';
//             $message                = 'We sorry this has happened, please go to main site - <a href="'. URL::to('/') .'">back</a>';
//             return view('home.login')->compact('heading','message');
//         endif;

// }

}
