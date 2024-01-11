<?php

namespace App\Http\Controllers\admin;

use App\Models\Post;
use App\Models\Seo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
{
  /*  public function __construct()
    {
        $this->middleware('auth:admin');
    }*/

//    private function getAllData() {
//        return DB::table('posts')->get();
//    }

    public  function index() {
            $posts = Post::get();
            return view('admins.content.post.index',['posts'=>$posts]);
    }

    public function add () {
        return view('admins.content.post.add_post');
    }
    public function new(Request $request) {
        $input = $request->all();
        $new_post = new Post();
        $new_post['title']= $input['title'];
        $new_post ['content'] = $input['content'];
        $new_post['image'] = $input ['image'];
        $new_post['slug'] = $input ['slug'];
        $new_post ['description'] = $input['description'];
        $new_post->save();
        $new_seo = new Seo();
        $new_seo['seo_title'] = $input ['seo_title'];
        $new_seo['seo_keywords'] = $input ['seo_keywords'];
        $new_seo['seo_description'] = $input ['seo_description'];
        $new_seo["post_id"] = $new_post->id;
        $new_seo->save();
        return redirect()->route('admin.post.index');
    }

    public function remove($id)
    {
        $post = Post::find($id);
        if ($post){
            $post->delete();
        }
        return redirect()->route('admin.post.index');
    }

    public function edit($id){
        $post_edit = Post::find($id);
        return view('admins.content.post.edit_post',['post_edit'=>$post_edit]);

    }

    public function update(Request $request,$id) {
        $input = $request->all();
        $edit_post = Post::find($id);
        $edit_post ->title = $input['title'] ;
        $edit_post ->content = $input['content'];
        $edit_post ->image = $input ['image'];
        $edit_post ->slug = $input ['slug'];
        $edit_post ->description = $input['description'];
        $edit_post->save();

        $edit_seo = Seo::find($id);
        if($edit_seo != ""){
            $edit_seo ->seo_title = $input ['seo_title'] ?? '';
            $edit_seo ->seo_keywords = $input ['seo_keywords'] ?? '' ;
            $edit_seo ->seo_description = $input ['seo_description'] ?? '';
            $edit_seo ->post_id = $edit_post->id;
            $edit_seo->save();
        }else{
            $edit_seo = new Seo();
            $edit_seo ['seo_title'] = $input ['seo_title'] ?? '';
            $edit_seo ['seo_keywords'] = $input ['seo_keywords'] ?? '';
            $edit_seo ['seo_description'] = $input ['seo_description'] ?? '';
            $edit_seo ['post_id'] = $edit_post->id;
            $edit_seo->save();
        }
        return redirect()->route('admin.post.index');
    }

}
