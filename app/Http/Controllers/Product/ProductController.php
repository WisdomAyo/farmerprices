<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\ProductImages;
use App\ProductsVideos;

use App\ProductView;
use Illuminate\Http\Request;
use DB;
use App\Categories as Category;
use App\Product;
use App\ProductTags as Tags;
use Carbon\Carbon;
use GuzzleHttp\Client;
use App\Http\Controllers\Helpers\ProductHelpers;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\Storage; //Laravel Filesystem

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function AddProduct() {

        $category = Category::all();
        $tag = Tags::all();
        return view('admin.product.add',compact('category','tag'));
    }


    public function AddCategories(){
        $category = $this->getCategoryParentCategoryCheck();
        return view('admin.categories.add-category',compact('category'));

    }

    public function ViewCategories(){
            $title ='- View category';
            $allcategorys = $this->getallCategory();
            $allcategory = array();
            foreach($allcategorys as $rows => $row) {
                $row['total_sub_category'] = $this->getTotalSubCategory($row['id']);
                $allcategory[] = $row;
            }
            return view('admin.categories.view-category',compact('title','allcategory'));

    }



    public function getEditCategory($id){
        $category = Category::where('id',$id)->get();
        return view('admin.categories.edit-category',compact('category'));
    }

    private function getTotalSubCategory($id) {
        $haschild = Category::where('parent_id', '=', $id)->count();
        return $haschild;
    }

    public function getallCategory() {
        $cat =  Category::select('*')->get();
        return $cat;
    }



    public function storeEditCategory(Request $request){

        $id                         = $request->id;
        $post                       = Category::find($id);
        $post->name                 = $request->category_name;
        $post->url                  = strtolower(str_slug($request->category_name));
        $post->save();
        return back()->withInput()->with('response','Category Updated');

    }




    public function resizeImage($image, $requiredSize) {
        $width = $image->width();
        $height = $image->height();

        // Check if image resize is required or not
        if ($requiredSize >= $width && $requiredSize >= $height) return $image;

        $newWidth ='';
        $newHeight = '';

        $aspectRatio = $width/$height;
        if ($aspectRatio >= 1.0) {
            $newWidth = $requiredSize;
            $newHeight = $requiredSize / $aspectRatio;
        } else {
            $newWidth = $requiredSize * $aspectRatio;
            $newHeight = $requiredSize;
        }


        $image->resize($newWidth, $newHeight);
        return $image;
    }



    public function storeProduct(Request $request){


        if ($request->hasFile('post_video')) {

            $validator = Validator::make(Input::all(),
                array(
                    'file' => 'mimes:mp4,mov,ogg,qt | max:20000'
                )
            );
        }


        $post                           = new Product;
        $post->name                    = $request->title;
        $post->long_desc                = $request->content_ii;
        $post->short_desc               = $request->content_i;
        $post->tags_id                  = $request->tags;
        $post->pieces                   = $request->pieces;
        $post->price_range              = $request->pricerange;
        $post->out_of_stock             = $request->stocks;
        $post->discount                 = $request->discount;
        $post->weight                   = $request->weight;
        $post->quantity                 = $request->quantity;
        $post->price                    = $request->price;
        $post->state                    = $request->state;
        $post->area                     = $request->area;
        $post->url                      = strtolower(str_slug($request->title));
        $post->category_id              = $request->categoryid;
        $post->status                   = 1;

        $post->save();
        $product_id = $post->id;

        // saving to Image table


        if ($request->hasFile('post_image')) {



            foreach($request->file('post_image') as $file){


                //$filename = time() . '.' . $file->getClientOriginalExtension();
                $filename = time() . '-' .$file->getClientOriginalName();
                $post_image[] =$filename;


                $img = Image::make($file);
                $img->save(public_path('uploadedFiles/images/' . $filename))
                    ->resize(220, 300, function ($constraint){
                        $constraint->aspectRatio();
                    })->resize(200, 300)
                    ->save(public_path('uploadedFiles/images/resize/' . $filename),100);

                $images = $filename;

                ProductImages::insert( [
                    'name' => $images,
                    'status_id' =>1,
                    'product_id' =>$product_id,
                    'created_at' =>date('Y-m-d'),
                    'updated_at' =>date('Y-m-d'),
                ]);
            }
            }



        $postvideo = new ProductsVideos;

        if ($request->hasFile('post_video')) {

            $image = $request->file('post_video');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('uploadedFiles/video/');
            $image->move($location, $filename);

            $postvideo->name        = $filename;
            $postvideo->product_id  = $product_id;
            $postvideo->status_id   =1;

            $postvideo->save();

        }

            return back()->withInput()->with('response','Product Added Successfully');
        }



    public function UpdateProduct(Request $request){


        $id                             = $request->id;
        $post                           = Product::find($id);
        $post->name                     = $request->title;
        $post->long_desc                = $request->content_ii;
        $post->short_desc               = null;
        $post->tags_id                  = $request->tags;
        $post->pieces                   = $request->pieces;
        $post->price_range              = $request->pricerange;
        $post->out_of_stock             = $request->stocks;
        $post->discount                 = $request->discount;
        $post->weight                   = $request->weight;
        $post->quantity                 = $request->quantity;
        $post->price                    = $request->price;
        $post->url                      = strtolower(str_slug($request->title));
        $post->category_id              = $request->categoryid;
        $post->status                   = 1;

        $post->save();


        if ($request->hasFile('post_image')) {

            foreach($request->file('post_image') as $file){


                //$filename = time() . '.' . $file->getClientOriginalExtension();
                $filename = time() . '-' .$file->getClientOriginalName();
                $post_image[] =$filename;


                $img = Image::make($file);
                $img->save(public_path('uploadedFiles/images/' . $filename))
                    ->resize(220, 300, function ($constraint){
                        $constraint->aspectRatio();
                    })->resize(200, 300)
                    ->save(public_path('uploadedFiles/images/resize/' . $filename),100);

                $images = $filename;

                ProductImages::insert( [
                    'name' => $images,
                    'status_id' =>1,
                    'product_id' =>$id,
                    'created_at' =>date('Y-m-d'),
                    'updated_at' =>date('Y-m-d'),
                ]);
            }
        }




            return back()->withInput()->with('response','Product Updated Successfully');

    }

    public function AllProduct(){

        $title                  ='- View Product';
        $allProduct       = Product::select('*')->orderBy('id','DESC')->get();

        return view('admin.product.view',compact('title','allProduct'));

    }

    public function ViewProduct($id){

        $images = ProductImages::where('product_id',$id)->get();
        $Product               = Product::where('id',$id)->get();
        $Product_category      = Product::where('id',$id)->pluck('category_id');
        $Product_categorys     = Category::where('id',$id)->get();
        $allProduct_cat        = array();
        foreach($Product_categorys as $rows => $row) {
            $row['name'] = Category::where('id', $row->categories_id)->value('name');
            $allProduct_cat[] = $row;

        }

        return view('admin.product.edit-product',compact('Product','allProduct_cat','images'));
    }


    public function EditProduct(Request $request){




        return view('admin.product.editing-Product',compact('Product','category'));
    }




    public function storeCategory(Request $request){

        if(empty($request->assoc_category)){ $parent_ID = 0;}
        else { $parent_ID       = $request->assoc_category;}
        $post                   = new Category;
        $post->name             = $request->category_name;
        $post->parent_id        = $parent_ID;
        $post->url              = strtolower(str_slug($request->category_name));
        $post->status_id        = 1;

        $post->save();
        return back()->withInput()->with('response','Category Added');

    }


    private function getCategoryParentCategoryCheck($parent='')
    {

        $ul = '<ul class="ul-category">';
        if($parent !== '') {
            $menu_action = DB::table('categories')->where('parent_id', $parent)->where('deleted_at', Null)->get();
        }else {
            $menu_action = DB::table('categories')->where('parent_id', 0)->where('deleted_at', Null)->get();
        }
        $x = 1;

        foreach($menu_action  as $row) {
            $folder = !empty($this->hasChild($row->id))?'&nbsp;<i class="glyphicon glyphicon-folder-close"></i>&nbsp;':'';
            if($this->hasChild($row->id)):
                $ul .= '<li class="has-child" data-id="'.$row->id.'"><input type="checkbox" name="assoc_category" value="'.$row->id.'" id="basic_checkbox_2'.$row->id.'" class="glyphicon glyphicon-folder"> <label for="basic_checkbox_2'.$row->id.'" class="mb-0 h-15 ml-8"></label>&nbsp;'.'<span class="closex">'.$folder.$row->name.'</span>'. $this->getCategoryParentCategoryCheck($row->id) .'</li>';
            else:
                $ul .= '<li data-id="'.$row->id.'"><input type="checkbox" name="assoc_category" value="'.$row->id.'" id="basic_checkbox_2'.$row->id.'" class="filled-in"><label for="basic_checkbox_2'.$row->id.'" class="mb-0 h-15 ml-8"></label>&nbsp;'.'<span>'.$folder.$row->name.'</span>'. $this->getCategoryParentCategoryCheck($row->id) .'</li>';
            endif;
        }
        $ul .= '</ul>';
        $x++;
        return $ul;


    }

    private function hasChild($id) {
        $haschild = DB::table('categories')->where('parent_id', '=', $id)->where('deleted_at', Null)->count();
        return $haschild;
    }

    public function checkCategory($name, $parent_id) {
        $result = DB::table('categories')->where('name', $name)->where('deleted_at', Null)->get();
        if($result->num_rows() > 0 && $parent_id != '') {
            foreach ($result->result_array() as $row) {
                if($row['parent_id'] == $parent_id) {
                    return 1;
                }else {
                    return 0;
                }
            }
        }elseif($result->num_rows() > 0 && $parent_id == '') {
            return 1;
        }elseif($result->num_rows() < 1) {
            return 0;
        }
    }


    public function getName($id) {
        $parent = User::select('firstname')->where('id',$id)->get();
        foreach($parent as $row) {
            return $row['firstname'];
        }
    }


    public function EnablingProduct(Request $request) {

        $id                                 = $request->id;
        $post                               = Product::find($id);
        $post->status_id                    = $request->status_answer;
        $post->save();
        if($request->status_answer == 1):
        return back()->withInput()->with('response','Product Enabled Successfully ');
        else:
            return back()->withInput()->with('response','Product Disabled Successfully');
            endif;

    }


    public function EnablingCategories(Request $request) {

        $id                             = $request->id;
        $post                           = Category::find($id);
        $post->status_id                = $request->status_answer;
        $post->save();
        if($request->status_answer == 1):
            return back()->withInput()->with('response','Product Category Enabled Successfully ');
        else:
            return back()->withInput()->with('response','Product Category Disabled Successfully');
        endif;

    }

    public function SoftDeleteCategory(Request $request) {
        $post = Category::find($request->id);
        $post->delete();
        return back()->with('response','Category Deleted Successfully');

    }


    public function SoftDeleteProduct(Request $request) {
        $post = Product::find($request->id);
        $post->delete();
        return back()->with('response','Category Deleted Successfully');

    }


    public function SoftDeleteImage(Request $request) {
        $post = ProductImages::find($request->id);
        $post->delete();
        return back()->with('response','Deleted Successfully');

    }


    public function DuplicatingProduct(Request $request) {
        $tasks              = Product::find($request->id);
        $newTask            = $tasks->replicate();
        $newTask->save();

//        $CategoriesID = Category::where('Product_id',$request->id)->pluck('categories_id');
//
//        ///saving to Product categories
//
//        for ($x = 0; $x < sizeof($CategoriesID); $x++) {
//
//            $catNot                     = new Category();
//            $catNot->categories_id      = $CategoriesID[$x];
//            $catNot->Product_id    = $newTask->id;
//            $catNot->save();
//        }

        return back()->with('response','Product Duplicated Successfully');
    }
    public function ExtendProduct(Request $request) {
        $post                       = Product::find($request->id);
        $post->range_to             = $request->days;
        $post->save();
        return back()->with('response','Product days extended');
    }




}
