<?php

namespace App\Http\Controllers\Compare;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\URL;
use App\Product;
use App\ProductImages;

class CompareApi extends Controller
{


    public function index(Request $request){


        return response()->json(['success']);


    }


    public function addtocompare(Request $request)
    {
        $id = $request->id;
        $product_id = $request->id;
        $product = Product::find($id);
        $quantity = $request->quantity;

        if(!$product) {

            abort(404);

        }

        $compare = session()->get('compare');

        // if compare is empty then this the first product
        if(!$compare) {

            $compare = [
                $id => [
                    "id"   => $product->id,
                    "name" => $product->name,
                    "quantity" => $quantity,
                    "price" => $product->price,
                    "photo" => ProductImages::select('*')->where('product_id', '=', $product->id)->where('status_id', '=', 1)->take(1)->value('name'),
                    "lifetime" => 4152240000
                ]
            ];

            session()->put('compare', $compare);

            return redirect()->back()->with('success', 'Product added to compare successfully!');
        }

        // if compare not empty then check if this product exist then increment quantity
        if(isset($compare[$id])) {

            $compare[$id]['quantity']++;

            session()->put('compare', $compare);

            return redirect()->back()->with('success', 'Product added to compare successfully!');

        }

        // if item not exist in compare then add to compare with quantity = 1
        $compare[$id] = [
            "id"   => $product->id,
            "name" => $product->name,
            "quantity" => $quantity,
            "price" => $product->price,
            "photo" =>  ProductImages::select('*')->where('product_id', '=', $product->id)->where('status_id', '=', 1)->take(1)->value('name'),
        ];

        session()->put('compare', $compare);

        return redirect()->back()->with('success', 'Product added to compare successfully!');
    }



    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $compare = session()->get('compare');

            $compare[$request->id]["quantity"] = $request->quantity;

            session()->put('compare', $compare);

            session()->flash('success', 'compare updated successfully');
        }
    }

    public function remove(Request $request)
    {
        if($request->id) {

            $compare = session()->get('compare');

            if(isset($compare[$request->id])) {

                unset($compare[$request->id]);

                session()->put('compare', $compare);
            }

            session()->flash('success', 'Product removed successfully');
        }
    }

}
