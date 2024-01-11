<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index() {
        $user = DB::table('users')->get();
        return view('admins.content.users.index',['users'=>$user]);
    }

    public function add(){
        $user = DB::table('users')->get();
        return view('admins.content.users.add_user',['users'=>$user]);
    }

    public function post(Request $request){
        $input = $request->all();
        $new_user = new User();
        $new_user['name'] = $input['name'];
        $new_user['phone'] = $input['phone'];
        $new_user['email'] = $input['email'];
        $new_user['password'] = $input['password'];
        $new_user['avatar'] = $input['avatar'];
        $new_user->save();
        return redirect()->route('admin.user.index');
    }

    public function edit($id) {
        $user = DB::table('users')->get();
        $item = User::find($id);
        return view('admins.content.users.edit_user',['users' => $user, 'item'=> $item]);
    }

    public function update(Request $request,$id){
        $item =User::find($id);
        $input = $request->all();
        $item['name'] = $input['name'];
        $item['phone'] = $input['phone'];
        $item['email'] = $input['email'];
        $item['password'] = $input['password'];
        $item['avatar'] = $input['avatar'];
        $item->save();
        return redirect()->route('admin.user.index');
    }
    public function remove($id){
        $item = User::find($id);
        $item->delete();
        return redirect()->route('admin.user.index');
    }

}
