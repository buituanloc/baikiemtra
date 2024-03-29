<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\table;


class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::where('category_parent_id','=',0)->with('childs')->get();
//        dump($categories);
//        exit();
        return view("admins.content.category.index",["categories"=>$categories]);
    }

    public function add()
    {
        $categories = Category::where('category_parent_id','=',0)->with('childs')->get();
        return view("admins.content.category.add", ["categories"=>$categories]);
    }
    public function post(Request $request)
    {
        $input = $request->all();
        $category = new Category();
        $category['category_name'] = $input['category_name'];
        $category['category_slug'] = $input['category_slug'];
        $category['category_parent_id'] = $input['category_parent_id'];
        $category->save();
        return redirect()->route('admin.category.index');
    }
    public function edit($id)
    {
        $item_edit = Category::find($id);
        $categories = Category::where('category_parent_id','=',0)->with('childs')->get();
        return view( 'admins.content.category.edit',['categories' => $categories, 'item' => $item_edit]);
    }

    public function update(Request $request, $id){
        $item = Category::find($id);
        $input = $request->all();
        $item['category_name'] = $input['category_name'];
        $item['category_slug'] = $input['category_slug'];
        $item['category_parent_id'] = $input['category_parent_id'];
        $item->save();
        return redirect()->route('admin.category.index');
    }
    public function destroyChilds($id){
        $item = Category::find($id);
        if ($item){
            if ($item->childs){
                foreach ($item->childs as $child){
                    $this->destroyChilds($child->category_id);
                }
            }
            $item->delete();
        }
    }
    public function destroy($id) {
        $this->destroyChilds($id);
        return redirect()->route('admin.category.index');
    }
}
