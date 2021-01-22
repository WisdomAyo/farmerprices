<?php

namespace App\Http\Controllers\ProductTags;

use App\Http\Controllers\Controller;
use App\ProductView;
use Illuminate\Http\Request;
use DB;
use App\Categories as Category;
use App\ProductCategories;
use App\Product;
use Carbon\Carbon;
use GuzzleHttp\Client;
use App\ProductTags as Tags;
use App\Http\Controllers\Helpers\ProductHelpers;

class ProductTagsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Index() {

        $category = $this->getCategoryParentCategoryCheck();
        return view('admin.producttags.add-tag',compact('category'));
    }



    public function ViewTags(){
        $title ='- View category';
        $allcategory = Tags::all();

        return view('admin.producttags.view-tags',compact('title','allcategory'));

    }



    public function getEditTags($id){
        $category = Tags::where('id',$id)->get();
        return view('admin.producttags.edit-tag',compact('category'));
    }

    private function getTotalSubTags($id) {
        $haschild = Tags::where('parent_id', '=', $id)->count();
        return $haschild;
    }

    public function getallTags() {
        $cat =  Tags::select('*')->get();
        return $cat;
    }



    public function storeEditTags(Request $request){

        $id                         = $request->id;
        $post                       = Tags::find($id);
        $post->name                 = $request->category_name;
        $post->save();
        return back()->withInput()->with('response','Tag Updated');

    }

    public function storeTags(Request $request){

        $post                   = new Tags;
        $post->name             = $request->category_name;
        $post->status_id        = 1;

        $post->save();
        return back()->withInput()->with('response','Tags Added');

    }


    private function getCategoryParentCategoryCheck($parent='')
    {

        $ul = '<ul class="ul-category">';
            $menu_action = DB::table('product_tags')->where('deleted_at', Null)->get();

        $x = 1;

        foreach($menu_action  as $row) {

                $ul .= '<li data-id="'.$row->id.'"><input type="checkbox" name="assoc_category" value="'.$row->id.'" id="basic_checkbox_2'.$row->id.'" class="filled-in"><label for="basic_checkbox_2'.$row->id.'" class="mb-0 h-15 ml-8"></label>&nbsp;'.$row->name.'</li>';

        }
        $ul .= '</ul>';
        $x++;
        return $ul;


    }


    public function EnablingTags(Request $request) {

        $id                                 = $request->id;
        $post                               = Tags::find($id);
        $post->status_id                    = $request->status_answer;
        $post->save();
        if($request->status_answer == 1):
            return back()->withInput()->with('response','Tags Enabled Successfully ');
        else:
            return back()->withInput()->with('response','Tags Disabled Successfully');
        endif;

    }

}
