<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    function index ()
    {
        $listbook = [
            ['id' => 1, 'name' => 'Làng Vũ Đại','author' => 'ABC'],
            ['id' => 2, 'name' => 'Thép Đã Tôi Thế Đấy','author' => 'AAAA'],
            ['id' => 3, 'name' => 'Bé Tập Tô','author' => 'CCCC'],
        ];
        return view('admins.content.book.index',['listbook' => $listbook]);
    }
}
