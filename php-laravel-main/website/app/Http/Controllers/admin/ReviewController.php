<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = DB::table('reviews')->get();
       return view('admins.content.review.index',['reviews' => $reviews]);

    }

    public  function add(){
        return view('admins.content.review.add_reviews');
    }
    public function remove($id) {
        $item = Review::find($id);
        $item->delete();
        return redirect()->route('admin.review.index');
    }

}
