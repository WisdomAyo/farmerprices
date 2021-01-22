<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Helpers\Ehelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Categories as Category;
use App\Product;
use App\Order;

class Dashboard extends Controller
{
    private $_total = 0;
    public    $og_remember = '';
    public    $default_image = "kitalkers_files/kitalker-white-stright.jpg";


    public function getIndex()
    {

        if(Auth::user()->id && Auth::user()->user_status == 0):


            $profile = User::select('*')->where('id', Auth::user()->id)->get();
            $allcategory = Category::where('parent_id',0)->get();
            //////// CART SESSIONS///////////////
            if(session('cart')):
                $totalitems                = count(session('cart'));
                $totalcost                 = '₦' . number_format(Ehelper::totalCart());
                $cart                      = session('cart');
            else:
                $totalitems                = 0;
                $totalcost                 = 0;
                $cart                      = null;
            endif;
            /////// END OF CART SESSIONS ////////

            $headermenu                 = $this->getChildrenCategoryForMenu();
            $headermenumobile           = $this->getChildrenCategoryForMenuMobile();
            $cat                        = Category::where('parent_id',0)->take(7)->get();
            $cat2                        = Category::where('parent_id','!=',0)->take(7)->get();

            foreach ($cat2 as $row){
                $row['old_url'] = Category::where('id',Category::where('id', $row->id)->value('parent_id'))->value('url');

            }

            return view('users.dashboard',compact('profile','totalitems','totalcost','cart','headermenu','headermenumobile','cat','cat2','allcategory'));

        else:
            return redirect('/user-login')->with('response','Please Login to access this page');
        endif;
    }

    public function getSettings(){
        if(!empty(Auth::user()->id) && (Auth::user()->user_status == 0)):
            $title = 'Kitallker - Home';
            $sitedescription= 'Shop the Best Brands & Designers. Your World of Fashion in One Place.
        Latest Trends. Over 12,000 Designers. 5Million Fashion Products.
        Find The Best Sales. Get Sale Alerts. Types: Dresses, Sneakers, Flats, Jackets, Heels, Bags.';
            $profile = User::select('*')->where('id', Auth::user()->id)->get();
            return view('users.settings')
                ->withProfile($profile)
                ->withTitle($title)
                ->withSitedescription($sitedescription);
        else:
            return redirect('/user-login')->with('response','Please Login to access this page');
        endif;

    }



    private function GetRecentProduct()
    {
        $cat = Product::select('*')->orderBy('id', 'DESC')->paginate(30);
        $div = '';
        foreach ($cat  as $row) {

            $div .='<div class="col-12 isotope-item latest" style="padding-left:0px;" >
            <div class="review_listing">
                <div class="clearfix add_bottom_15" style="float:left;margin-right:20px;">
                     '.$this->GetAllproductImage($row->id).'

                </div>
                <div class="clearfix add_bottom_15">
                <h4><a href='.URL::to('/').'/'.$row->url.' >'.$row->name.'</a></h4>
                <p >'.str_limit($row->long_desc, 120).'</p>
                </div>
                <ul class="clearfix">
                    <li><small style="color:red;">'.date("l jS, F Y h:i:s A", strtotime($row->created_at)).'</small></li>
                    <li><a href='.URL::to('/').'/'.$row->url.' class="btn_1 small">Read more</a></li>
                </ul>
            </div>
        </div>';
        }
        $div .= '';

        return $div;
    }

    private function GetAllproductImage($product_id)
    {
        $image = Product_image::select('*')->where('product_id', '=', $product_id)->where('status', '=', 0)->get();
        $img = '';
        foreach ($image as $row) {
            $img = '<img class="img" src="'.URL::to('products/images').'/'.$row->name.'" alt=""  style="width:100px;height:100px;"/>';
        }
        $img .= '';

        return $img;
    }


    public function storeDp(Request $request){

        $id = Auth::user()->id;
        $post = User::find($id);

        if ($request->hasFile('post_image')) {
            $image = $request->file('post_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('profiledp/images/');
            $image->move($location, $filename);
            $post->profile_dp = $filename;
        }

        $post->save();
        return back()->withInput()->with('response','profile Picture Updated');

    }


    public function storeINFO(Request $request){

        $id = Auth::user()->id;
        $post = User::find($id);
        $post->firstname = $request->firstname;
        $post->city = $request->city;
        $post->country = $request->country;
        $post->facebook = $request->facebook;
        $post->save();
        return back()->withInput()->with('response','Account info updated');

    }



    private function getChildrenCategoryForMenu($parent='')
    {

        $ul = '';
        if($parent !== '') {
            $menu_action = Category::select('*')->where('parent_id', $parent)->get();
        }else {
            $menu_action = Category::select('*')->where('parent_id', 0)->get();
        }

        foreach($menu_action  as $row) {
            $folder = !empty($this->hasChild($row->id))?'':'';
            if($this->hasChild($row->id)):
                $ul .= '<li><a href="'.URL::to('/categories').'/'.$row->url.'">'.$folder.ucwords($row->name).'</a>'.
                    $this->getChildrenCategoryForMenu2($row->url,$row->id) .'</li>';
            else:
                $ul .= '<li class="nosub"><a href="'.URL::to('/categories').'/'.$row->url.'">'.$folder.strtoupper($row->name).'</a></li>';
            endif;
        }
        $ul .= '';
        return $ul;

    }

    private function getChildrenCategoryForMenuMobile($parent='')
    {

        $ul = '';

        if($parent !== '') {
            $menu_action = Category::select('*')->where('parent_id', $parent)->get();
        }else {
            $menu_action = Category::select('*')->where('parent_id', 0)->get();
        }

        foreach($menu_action  as $row) {
            $folder = !empty($this->hasChild($row->id))?'':'';
            if($this->hasChild($row->id)):
                $ul .= '<li><a href="'.URL::to('/categories').'/'.$row->url.'">'.$folder.strtoupper($row->name).'</a> <ul>'. $this->getChildrenCategoryForMenuMobile($row->id) .'</ul></li>';
            else:
                $ul .= '<li class="nosub"><a href="'.URL::to('/categories').'/'.Category::where('id',$parent)->value('url').'/'.$row->url.'">'.$folder.strtoupper($row->name).'</a></li>';
            endif;
        }
        $ul .= '';
        return $ul;

    }


    public function getChildrenCategoryForMenu2($URL,$parent=''){


        $ul = '<div class="wrap-popup column2">
                    <div class="popup">
                    <ul >';
        if($parent !== '') {
            $menu_action = Category::select('*')->where('parent_id', $parent)->get();
        }else {
            $menu_action = Category::select('*')->where('parent_id', 0)->get();
        }

        foreach($menu_action  as $row) {
            $folder = !empty($this->hasChild($row->id))?'':'';
            if($this->hasChild($row->id)):
                $ul .= '<li><a href="'.URL::to('/categories').'/'.$row->url.'">'.$folder.strtoupper($row->name).'</a></li>'. $this->getChildrenCategoryForMenu2($URL,$row->id) .'';
            else:
                $ul .= '<a href="'.URL::to('/categories').'/'.$URL.'/'.$row->url.'"><li>'.$folder.strtoupper($row->name).'</li></a>';
            endif;
        }
        $ul .= ' </ul>
        </div>
      </div>';
        return $ul;


    }

    public function totalCart()
    {
        if(session('cart'))
        {
            $cart = session('cart');

            foreach( $cart as $key)
            {
                $qty = !empty($key['quantity'])?(int)$key['quantity']:0;
                $this->_total += (int)str_replace(',', '', $key['price']) * $qty;
            }

            return $this->_total;
        }
    }


    private function hasChild($id) {
        $haschild = Category::where('parent_id', '=', $id)->count();
        return $haschild;
    }



}
