<?php

namespace App\Http\Controllers\Product;

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

class ProductTypesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function AddProduct() {

        $category = Category::all();
        return view('admin.Product.add',compact('category'));
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
        $post->save();
        return back()->withInput()->with('response','Category Updated');

    }

}
