<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{

    public function index() {
        $menus = Menu::where('menu_parent_id','=',0)->with('childs')->paginate(5);
        return view('admins.content.menu.index',['menus'=>$menus]);
    }

    public function add() {
        $menus = Menu::where('menu_parent_id','=',0)->with('childs')->get();
        return view('admins.content.menu.add_menu',['menus'=>$menus]);
    }

    public function post(Request $request) {
        $menus = $request->all();
        $new_menu = new Menu();
        $new_menu ['menu_name'] = $menus['menu_name'];
        $new_menu ['menu_parent_id'] = $menus['menu_parent_id'];
        $new_menu ['menu_url'] = $menus['menu_url'];
        $new_menu->save();
        return redirect()->route('admin.menu.index');
    }

    public function edit($id) {
        $edit_menu = Menu::find($id);
        $menus = Menu::where('menu_parent_id','=',0)->with('childs')->get();
        return view("admins.content.menu.edit_menu",['menus' => $menus,'edit_menu' => $edit_menu]);
    }

    public function update(Request $request, $id){
        $item = Menu::find($id);
        $input = $request->all();
        $item ['menu_name'] = $input ['menu_name'];
        $item ['menu_parent_id'] = $input ['menu_parent_id'];
        $item ['menu_url'] = $input ['menu_url'];
        $item->save();
        return redirect()->route('admin.menu.index');

    }

    public function removeChild($id) {
        $item = Menu::find($id);
        if($item){
            if($item->childs) {
                foreach($item->childs as $child){
                    $this->removeChild($child->menu_id);
                }
            }
            $item->delete();
        }

    }

    public function remove($id)  {
        $this->removeChild($id);
        return redirect()->route('admin.menu.index');
    }

}
