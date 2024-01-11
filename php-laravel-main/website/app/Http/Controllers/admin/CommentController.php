<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use function Laravel\Prompts\table;

class CommentController extends Controller
{
    public function index() {
        $comments = Comment::where('parent_id','=',0)->with('childs')->paginate();
        return view('admins.content.comment.index',['comments'=>$comments]);
    }
    public  function add() {
        $comments = Comment::where('parent_id','=',0)->with('childs')->get();
        return view('admins.content.comment.add_comment',['comments'=>$comments]);
    }

    public function post(Request $request){
        $input = $request->all();
//        echo '<pre>';
//        print_r($input);
//        echo '</pre>';
//        exit;
        $comments = new Comment();
        $comments['content'] = $input ['content'];
        $comments ['parent_id'] = $input ['parent_id'];
        $comments->save();
        return redirect()->route('admin.comment.index');
    }
}
