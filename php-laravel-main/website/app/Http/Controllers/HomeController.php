<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function bookInfo() {
        $book = Book::all();
        return view('unishap',['book'=>$book]);

    }

    public function inforOrder(){
        $orders = Product::find(1);
        return view('admins.content.book.index',['orders'=> $orders]);
    }

}
