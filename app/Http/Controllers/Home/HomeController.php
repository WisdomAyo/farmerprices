<?php

namespace App\Http\Controllers\Home;

use App\Categories as Category;
use App\Http\Controllers\Controller;
use App\Notifications;
use Illuminate\Http\Request;
use App\Http\Controllers\Helpers\Ehelper;
use Auth;
use Illuminate\Support\Facades\URL;
use Validator;
use App\User;
use App\Agents;
use App\AgentsCategory;
use Carbon\Carbon;
use App\Orders;
use App\ProductTags as Tags;
use App\Product;
use App\ProductImages;
use App\ProductsVideos;


class HomeController extends Controller
{


    private function invoice_mat_ref ($l, $c = '1234567890') {
        for ($s = '', $cl = strlen($c)-1, $i = 0; $i < $l; $s .= $c[mt_rand(0, $cl)], ++$i);
        return $s;
    }

    private function mt_rand_str ($l, $c = 'abcdefghijklmnopqrstuvwxyz1234567890') {
        for ($s = '', $cl = strlen($c)-1, $i = 0; $i < $l; $s .= $c[mt_rand(0, $cl)], ++$i);
        return $s;
    }


    public function Index(){

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

        $latest_products = Product::all();

        foreach ($latest_products as $row){
            $row['image'] = ProductImages::where('product_id', $row->id)->value('name');
            $row['category_name'] = Category::where('id',$row->category_id)->value('name');
            $row['category_url'] = Category::where('id',$row->category_id)->value('url');

        }

        $top_rated = Product::all()->take(4);
        foreach ($top_rated as $row){
            $row['image'] = ProductImages::where('product_id', $row->id)->value('name');
            $row['category_name'] = Category::where('id',$row->category_id)->value('name');
            $row['category_url'] = Category::where('id',$row->category_id)->value('url');
        }

        $featured = Product::all()->take(4);
        foreach ($featured as $row){
            $row['image'] = ProductImages::where('product_id', $row->id)->value('name');
            $row['category_name'] = Category::where('id',$row->category_id)->value('name');
            $row['category_url'] = Category::where('id',$row->category_id)->value('url');
        }

        $onsale = Product::all()->take(4);
        foreach ($onsale as $row){
            $row['image'] = ProductImages::where('product_id', $row->id)->value('name');
            $row['category_name'] = Category::where('id',$row->category_id)->value('name');
            $row['category_url'] = Category::where('id',$row->category_id)->value('url');
        }


        return view('home.index',compact('latest_products','top_rated','onsale','featured','totalcost','totalitems','cart','headermenu','headermenumobile','cat','cat2'));
    }



    public function getAbout(){
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

        //////// COMPARE SESSIONS///////////////

        $allcompare                   = session('compare');

        /////// END OF CART SESSIONS ////////



        $latest_products = Product::all();

        foreach ($latest_products as $row){
            $row['image'] = ProductImages::where('product_id', $row->id)->value('name');
            $row['category_name'] = Category::where('id',$row->category_id)->value('name');
            $row['category_url'] = Category::where('id',$row->category_id)->value('url');

        }

        $top_rated = Product::all()->take(4);
        foreach ($top_rated as $row){
            $row['image'] = ProductImages::where('product_id', $row->id)->value('name');
            $row['category_name'] = Category::where('id',$row->category_id)->value('name');
            $row['category_url'] = Category::where('id',$row->category_id)->value('url');
        }

        $featured = Product::all()->take(4);
        foreach ($featured as $row){
            $row['image'] = ProductImages::where('product_id', $row->id)->value('name');
            $row['category_name'] = Category::where('id',$row->category_id)->value('name');
            $row['category_url'] = Category::where('id',$row->category_id)->value('url');
        }

        $onsale = Product::all()->take(4);
        foreach ($onsale as $row){
            $row['image'] = ProductImages::where('product_id', $row->id)->value('name');
            $row['category_name'] = Category::where('id',$row->category_id)->value('name');
            $row['category_url'] = Category::where('id',$row->category_id)->value('url');
        }

        return view('home.about',compact('totalcost','totalitems','cart','headermenumobile','headermenu','allcompare','featured','onsale','top_rated','latest_products','cat','cat2'));
    }



    public function getContact(){
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

        //////// COMPARE SESSIONS///////////////

        $allcompare                   = session('compare');

        /////// END OF CART SESSIONS ////////


        return view('home.contact',compact('totalitems','totalcost','cart','headermenumobile','headermenu','cat','cat2'));

    }


    public function GetCompare(){

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

        //////// COMPARE SESSIONS///////////////

        $allcompare                   = session('compare');

        /////// END OF CART SESSIONS ////////


        $latest_products = Product::all();

        foreach ($latest_products as $row){
            $row['image'] = ProductImages::where('product_id', $row->id)->value('name');
            $row['category_name'] = Category::where('id',$row->category_id)->value('name');
            $row['category_url'] = Category::where('id',$row->category_id)->value('url');

        }

        $top_rated = Product::all()->take(4);
        foreach ($top_rated as $row){
            $row['image'] = ProductImages::where('product_id', $row->id)->value('name');
            $row['category_name'] = Category::where('id',$row->category_id)->value('name');
            $row['category_url'] = Category::where('id',$row->category_id)->value('url');
        }

        $featured = Product::all()->take(4);
        foreach ($featured as $row){
            $row['image'] = ProductImages::where('product_id', $row->id)->value('name');
            $row['category_name'] = Category::where('id',$row->category_id)->value('name');
            $row['category_url'] = Category::where('id',$row->category_id)->value('url');
        }

        $onsale = Product::all()->take(4);
        foreach ($onsale as $row){
            $row['image'] = ProductImages::where('product_id', $row->id)->value('name');
            $row['category_name'] = Category::where('id',$row->category_id)->value('name');
            $row['category_url'] = Category::where('id',$row->category_id)->value('url');
        }

        return view('home.compare',compact('totalitems','totalcost','cart','headermenumobile','headermenu','allcompare','featured','onsale','top_rated','latest_products','cat','cat2'));



    }



    private function getChildrenCategoryForMenuMobile($parent='')
    {

        $ul = ' ';

        if($parent !== '') {
            $menu_action = Category::select('*')->where('parent_id', $parent)->get();
        }else {
            $menu_action = Category::select('*')->where('parent_id', 0)->get();
        }

        foreach($menu_action  as $row) {
            $folder = !empty($this->hasChild($row->id))?'':'';
            if($this->hasChild($row->id)):
                $ul .= '  <li class="u-has-submenu u-header-collapse__submenu">
                                                        <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="'.URL::to('/categories').'/'.$row->url.'" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebar'.$row->id.'Collapse" data-target="#headerSidebar'.$row->id.'Collapse">
                                                           '.$folder.strtoupper($row->name).'
                                                        </a>

                                                        <div id="headerSidebar'.$row->id.'Collapse" class="collapse" data-parent="#headerSidebarContent">
                                                            <ul id="headerSidebar'.$row->name.'Menu" class="u-header-collapse__nav-list">'. $this->getChildrenCategoryForMenuMobile2($row->id) .'</ul>
                                                        </div>
                                                    </li>';
            else:
                $ul .= '<li class="u-has-submenu u-header-collapse__submenu">
                                                        <a class="u-header-collapse__nav-link" href="'.URL::to('/categories').'/'.$row->url.'">'.$folder.strtoupper($row->name).'</a></li>';
            endif;
        }
        $ul .= '';
        return $ul;

    }



    private function getChildrenCategoryForMenuMobile2($parent='')
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
                $ul .= '<li class="nav-item u-header__nav-item"><a href="'.URL::to('/categories').'/'.$row->url.'">'.$folder.strtoupper($row->name).'</a></li>';
            else:
                $ul .= '<li class="nosub"><a href="'.URL::to('/categories').'/'.Category::where('id',$parent)->value('url').'/'.$row->url.'">'.$folder.strtoupper($row->name).'</a></li>';
            endif;
        }
        $ul .= '';
        return $ul;

    }



    public function getLogin()
    {
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
        /////// END OF CART SESSIONS ////////
        return view('home.login',compact('totalcost','totalitems','cart','headermenu','headermenumobile','cat','cat2'));
    }

    public function GetforgetPassword(){
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
        /////// END OF CART SESSIONS ////////

        return view('home.forgetpass',compact('totalcost','totalitems','cart','headermenu','headermenumobile'));

    }

    public function getRegister()
    {
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

        //////// COMPARE SESSIONS///////////////

        $allcompare                   = session('compare');


        /////// END OF CART SESSIONS ////////
        return view('home.register',compact('totalcost','totalitems','cart','headermenu','headermenumobile','allcompare','cat','cat2'));
    }



    public function getSearchresult(Request $request){


        if($request->category =='All Categories'):
            $products                       = $this->GetproductSearchListing($request->keyword);
        else:
            $products                       = $this->GetproductSearchListing($request->keyword,$request->category);
        endif;
        $cat                            = Category::select('*')->where('parent_id', 0)->get();
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

        //////// COMPARE SESSIONS///////////////

        $allcompare                   = session('compare');

        $recommended = Product::all();
        foreach ($recommended as $row){
            $row['image'] = ProductImages::where('product_id', $row->id)->value('name');
            $row['category_name'] = Category::where('id',$row->category_id)->value('name');
            $row['category_url'] = Category::where('id',$row->category_id)->value('url');
        }

        /////// END OF CART SESSIONS ////////
        return view('home.search',compact('products','allcompare','totalcost','totalitems','cart','headermenumobile','headermenu','recommended','cat','cat2'));

    }



    public function storeUsers(Request $request)
    {

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


        $validator = Validator::make($request->all(), [
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect('/register-with-us')
                ->withErrors($validator)
                ->withInput();
        }

        $post = new User;
        $post->firstname                      = $request->firstname;
        $post->lastname                       = $request->lastname;
        $post->email                          = $request->email;
        $post->phone                          = $request->phone;
        $post->user_status                    = 0;
        $post->remember_token                 = bcrypt($request->password);
        $post->password                       = bcrypt($request->password);
        $post->save();

        $details    =   [
            'name'=>$request->firstname,
            'email'=>$request->email
        ];

//
//        Mail::to($request->email)->send(new Welcome($details));
//
//        $userID = $post->id;
//        if($request->rememberme):
//            //submitting for Newsletters//
//            $postnewsletters = new Newsletter;
//            $postnewsletters->user_id             = $userID;
//            $postnewsletters->save();
//            // end of newsletters //
//        endif;

        return redirect('/user-login')->with('response','Registration was successfully. Please Login');

    }

    public function postSignIn(Request $request){
        //if($request->ajax()){
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
        if ($validator->fails()) {
            return redirect('/user-login')
                ->withErrors($validator)
                ->withInput();
        }


        if(auth::attempt([
            'email'=>$request->input('email'),
            'password'=>$request->input('password'),
            'user_status'=> '0'
        ])){
            //dd($request);
            if( Auth::user()){
                return redirect()->route('user.dashboard');
            }
            return back()->withInput()->with('responses','Invalid Email or Password');
            // return response()->json();
        }
        return back()->withInput()->with('responses','Invalid Email or Password');
        //}
    }


    public static function MuiltpleImage($product_id){
        $mutipleimages                  = ProductImages::select('*')->where('product_id', '=', $product_id)->where('status_id', '=', 2)->get();
        return $mutipleimages;
    }



    private function GetproductSearchListing($key1, $key2 =''){
        if(empty($id2)):

            $cat = Product::select('*')->where('name','LIKE','%'.$key1.'%')->get();
        else:
            $cat =  Product::select('*')->where('name','LIKE','%'.$key1.'%')->where('category_id', $key2)->get();
        endif;

        return $cat;

    }





    public function ProductDetails($url){

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

        //////// COMPARE SESSIONS///////////////

        $allcompare                   = session('compare');


        /////// END OF CART SESSIONS ////////


        $latest_products = Product::all()->take(5);

        foreach ($latest_products as $row){
            $row['image'] = ProductImages::where('product_id', $row->id)->value('name');
            $row['category_name'] = Category::where('id',$row->category_id)->value('name');
            $row['category_url'] = Category::where('id',$row->category_id)->value('url');

        }


        $productname = $this->getproductName($url);
        $headermenu                 = $this->getChildrenCategoryForMenu();
        $headermenumobile           = $this->getChildrenCategoryForMenuMobile();
        $cat                        = Category::where('parent_id',0)->take(7)->get();
        $cat2                        = Category::where('parent_id','!=',0)->take(7)->get();

        $product_id                     = $this->GetIDProduct($url);
        $images                         = ProductImages::select('*')->where('product_id', '=', $product_id)->where('status_id', '=', 1)->take(1)->get();
        $video                         = ProductsVideos::select('*')->where('product_id', '=', $product_id)->where('status_id', '=', 1)->take(1)->get();
        $mutipleimages                  = ProductImages::select('*')->where('product_id', '=', $product_id)->where('status_id', '=', 1)->get();

        $products                       =   Product::select('*')->where('url', '=', $url)->get();

        if(!empty($productname)):

            return view('home.products',compact('images','mutipleimages','products','productname','totalcost','totalitems','cart','headermenu','headermenumobile','latest_products','allcompare','cat','cat2','video'));

        else:

            return view('home.error');
        endif;
    }




    public function CategoryDetails($url){


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
        $sidebarcategory            = $this->getChildrenCategorySideBar();
        $cat                        = Category::where('parent_id',0)->take(7)->get();
        $cat2                        = Category::where('parent_id','!=',0)->take(7)->get();

        $recommended = Product::all();
        foreach ($recommended as $row){
            $row['image'] = ProductImages::where('product_id', $row->id)->where('status_id',1)->value('name');
            $row['category_name'] = Category::where('id',$row->category_id)->value('name');
            $row['category_url'] = Category::where('id',$row->category_id)->value('url');
        }

        $category_id                     = $this->GetIDCategory($url);
        $categoryname = $this->getCategoryName($category_id);
        $products                        = Product::select('*')->where('category_id', '=', $category_id)->get();
        foreach ($products as $row){
            $row['image'] = ProductImages::where('product_id', $row->id)->where('status_id',1)->value('name');
            $row['category_name'] = Category::where('id',$row->category_id)->value('name');
            $row['category_url'] = Category::where('id',$row->category_id)->value('url');
        }

        $latest_products = Product::all();

        foreach ($latest_products as $row){
            $row['image'] = ProductImages::where('product_id', $row->id)->where('status_id',1)->value('name');
            $row['category_name'] = Category::where('id',$row->category_id)->value('name');
            $row['category_url'] = Category::where('id',$row->category_id)->value('url');

        }

        $top_rated = Product::all()->take(4);
        foreach ($top_rated as $row){
            $row['image'] = ProductImages::where('product_id', $row->id)->where('status_id',1)->value('name');
            $row['category_name'] = Category::where('id',$row->category_id)->value('name');
            $row['category_url'] = Category::where('id',$row->category_id)->value('url');
        }

        $featured = Product::all()->take(4);
        foreach ($featured as $row){
            $row['image'] = ProductImages::where('product_id', $row->id)->where('status_id',1)->value('name');
            $row['category_name'] = Category::where('id',$row->category_id)->value('name');
            $row['category_url'] = Category::where('id',$row->category_id)->value('url');
        }

        $onsale = Product::all()->take(4);
        foreach ($onsale as $row){
            $row['image'] = ProductImages::where('product_id', $row->id)->where('status_id',1)->value('name');
            $row['category_name'] = Category::where('id',$row->category_id)->value('name');
            $row['category_url'] = Category::where('id',$row->category_id)->value('url');
        }



        if(!empty($categoryname)):

            return view('home.categories',compact('products','categoryname','totalcost','totalitems','cart','recommended','headermenu','headermenumobile','cat','cat2','onsale','latest_products','top_rated','featured','sidebarcategory'));

        else:

            return view('home.error');
        endif;
    }

    private function GetIDProduct($url) {
        $parent = Product::select('id')->where('url', $url)->get();
        foreach($parent as $row){
            return $row['id'];
        }
    }

    private function GetIDCategory($url) {
        $parent = Category::select('id')->where('url', $url)->get();
        foreach($parent as $row){
            return $row['id'];
        }
    }

    public function getproductName($id) {
        $parent = product::select('name')->where('url',$id)->get();
        foreach($parent as $row) {
            return $row['name'];
        }
    }

    public function getCategoryName($id) {
        $parent = Category::select('name')->where('id',$id)->get();
        foreach($parent as $row) {
            return $row['name'];
        }
    }



    public function getCheckout() {


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

        return view('home.checkout',compact('totalcost','totalitems','cart','headermenu','headermenumobile','cat','cat2'));

    }

    public function getShopping_cart() {

        $headermenu                 = $this->getChildrenCategoryForMenu();
        $headermenumobile           = $this->getChildrenCategoryForMenuMobile();
        $cat                        = Category::where('parent_id',0)->take(7)->get();
        $cat2                        = Category::where('parent_id','!=',0)->take(7)->get();
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


        return view('home.shopping-cart',compact('totalcost','totalitems','cart','headermenu','headermenumobile','cat','cat2'));

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
                $ul .= '<li class="nav-item hs-has-mega-menu u-header__nav-item" data-event="hover" data-animation-in="slideInUp"
                           data-animation-out="fadeOut" data-position="left">
                             <a id="basicMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="'.URL::to('/categories').'/'.$row->url.'" aria-haspopup="true" aria-expanded="false">'.$folder.ucwords($row->name).'</a>'.
                    $this->getChildrenCategoryForMenu2($row->url,$row->id,$row->name) .'</li>';
            else:
                $ul .= '<li class="nav-item hs-has-mega-menu u-header__nav-item" data-event="hover" data-animation-in="slideInUp"
                           data-animation-out="fadeOut" data-position="left">
                             <a id="basicMegaMenu" class="nav-link u-header__nav-link " href="'.URL::to('/categories').'/'.$row->url.'">'.$folder.strtoupper($row->name).'</a></li>';
            endif;
        }
        $ul .= '';
        return $ul;

    }


    public function getChildrenCategoryForMenu2($URL,$parent='',$name){


        $ul = '<div class="hs-mega-menu vmm-tfw u-header__sub-menu" aria-labelledby="basicMegaMenu">
                <div class="vmm-bg">
                    <img class="img-fluid" src="../../assets/img/500X400/img1.png" alt="Image Description">
                </div>
                <div class="row u-header__mega-menu-wrapper">
                    <div class="col mb-3 mb-sm-0">
                        <span class="u-header__sub-menu-title">'.ucwords($name).'</span> <ul class="u-header__sub-menu-nav-group mb-3">';
        if($parent !== '') {
            $menu_action = Category::select('*')->where('parent_id', $parent)->get();
        }else {
            $menu_action = Category::select('*')->where('parent_id', 0)->get();
        }

        foreach($menu_action  as $row) {
            $folder = !empty($this->hasChild($row->id))?'':'';
            if($this->hasChild($row->id)):
                $ul .= '<li><a href="'.URL::to('/categories').'/'.$row->url.'">'.$folder.strtoupper($row->name).'</a></li>   </ul>
                                                                    </div>'. $this->getChildrenCategoryForMenu2($URL,$row->id) .'';
            else:
                $ul .= '<li><a href="'.URL::to('/categories').'/'.$URL.'/'.$row->url.'"><li>'.$folder.strtoupper($row->name).'</li></a>';
            endif;
        }
        $ul .= ' </div>
                </div>
                <!-- End Nav Item - Mega Menu -->
            </li>';
        return $ul;


    }




    private function getChildrenCategorySideBar($parent='')
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
                $ul .= '
                        <li>
                            <a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav'.$row->id.'Collapse" data-target="#sidebarNav'.$row->id.'Collapse">'.$folder.ucwords($row->name).' <span class="text-gray-25 font-size-12 font-weight-normal"> ('.count(Product::where('category_id',$row->id)->get()).')</a>'.
                    $this->getChildrenCategorySideBar2($row->url,$row->id,$row->name) .'</li>';
            else:
                $ul .= '<li>
                             <a  class="nav-link u-header__nav-link " href="'.URL::to('/categories').'/'.$row->url.'">'.$folder.strtoupper($row->name).'</a></li>';
            endif;
        }
        $ul .= '';
        return $ul;

    }


    public function getChildrenCategorySideBar2($URL,$parent='',$name){


        $ul = '<div id="sidebarNav'.$parent.'Collapse" class="collapse" data-parent="#sidebarNav'.$parent.'">
                                <ul id="sidebarNav'.$parent.'" class="list-unstyled dropdown-list">';
        if($parent !== '') {
            $menu_action = Category::select('*')->where('parent_id', $parent)->get();
        }else {
            $menu_action = Category::select('*')->where('parent_id', 0)->get();
        }

        foreach($menu_action  as $row) {
            $folder = !empty($this->hasChild($row->id))?'':'';
            if($this->hasChild($row->id)):
                $ul .= '<li><a class="dropdown-item" href="'.URL::to('/categories').'/'.$row->url.'">'.$folder.strtoupper($row->name).' <span class="text-gray-25 font-size-12 font-weight-normal"> ('.count(Product::where('category_id',$row->id)->get()).')</span></a></li>   </ul>
                                                                    </div>'. $this->getChildrenCategoryForMenu2($URL,$row->id) .'';
            else:
                $ul .= '<li><a class="dropdown-item"  href="'.URL::to('/categories').'/'.$URL.'/'.$row->url.'">'.$folder.strtoupper($row->name).'<span class="text-gray-25 font-size-12 font-weight-normal"> ('.count(Product::where('category_id',$row->id)->get()).')</span></a>';
            endif;
        }
        $ul .= '
                </div>
                <!-- End Nav Item - Mega Menu -->
            </li>';
        return $ul;


    }


    private function hasChild($id) {
        $haschild = Category::where('parent_id', '=', $id)->count();
        return $haschild;
    }




}
