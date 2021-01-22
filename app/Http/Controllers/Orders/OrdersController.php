<?php

namespace App\Http\Controllers\Orders;

use App\Http\Controllers\Controller;
use App\ProductView;
use Illuminate\Http\Request;
use DB;
use App\Categories as Category;
use App\ProductCategories;
use App\Product;
use Carbon\Carbon;
use GuzzleHttp\Client;
use App\Http\Controllers\Helpers\ProductHelpers;
use App\Orders;

class OrdersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Index() {

        $orders = Orders::all();
        return view('admin.orders.all',compact('orders'));
    }



}
