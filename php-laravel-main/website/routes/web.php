<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\BookController;
use App\Http\Controllers\admin\CommentController;
use App\Http\Controllers\admin\MenuController;
use App\Http\Controllers\admin\PostController;
use App\Http\Controllers\admin\ReviewController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\SeoController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Models\Menu;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test',function(){
    return 'Hello';
});
Route::get('/test',function () {
    return 'Hi';
});

Route::get('/view',function(){
   return view('view');
});

Route::get('/user/{id}', function ($id) {
    return 'User '.$id;
});

Route::get('/view', 'UserController@index');

Route::group(['prefix' => 'admin'],function (){
    Route::get('/',[AdminController::class,'index'])->name('admin.index');
    Route::get('/register',[RegisterController::class,'formRegister'])->name('admin.auth.register');
    Route::post('/register',[RegisterController::class,'postRegister'])->name('admin.auth.register.post');
    Route::get('/login',[LoginController::class,'loginAdmin'])->name('admin.auth.login');
    Route::post('/login',[LoginController::class,'postLogin'])->name('admin.auth.login.post');


    Route::get('/',[AdminController::class,'index'])->  name('admin.index');
    Route::get('/book', [BookController::class,'index'] )-> name('admin.book.index');

    Route::group(['prefix' => 'category'],function (){
        Route::get('/',[CategoryController::class,'index']) ->name('admin.category.index');
        Route::get('/add',[CategoryController::class,'add']) ->name('admin.category.add');
        Route::post('/add',[CategoryController::class,'post']) ->name('admin.category.post');
        Route::get('/edit/{id}',[CategoryController::class,'edit']) ->name('admin.category.edit');
        Route::post('/edit/{id}',[CategoryController::class,'update']) ->name('admin.category.update');
        Route::get('/delete/{id}',[CategoryController::class,'destroy']) ->name('admin.category.destroy');
    });

    Route::group(['prefix' => 'review'],function (){
        Route::get('/',[ReviewController::class,'index'])-> name('admin.review.index');
        Route::get('/add_reviews',[ReviewController::class,'add']) -> name('admin.review.add');
        Route::get('/remove/{id}',[ReviewController::class,'remove'])-> name('admin.review.remove');
    });

    Route::group(['prefix' => 'user'],function () {
        Route::get('/',[UserController::class,'index'])->name('admin.user.index');
        Route::get('/add_user',[UserController::class,'add'])->name('admin.user.add');
        Route::post('/add_user',[UserController::class,'post'])->name('admin.user.post');
        Route::get('/edit_user/{id}',[UserController::class,'edit'])->name('admin.user.edit');
        Route::post('/edit_user/{id}',[UserController::class,'update'])->name('admin.user.update');
        Route::get('/delete/{id}',[UserController::class,'remove'])->name('admin.user.remove');
    });

    Route::group(['prefix'=>'menu'],function (){
        Route::get('/',[MenuController::class,'index'])->name('admin.menu.index');
        Route::get('/add_menu',[MenuController::class,'add'])->name('admin.menu.add');
        Route::post('/add_menu',[MenuController::class,'post'])->name('admin.menu.post');
        Route::get('/edit_menu/{id}',[MenuController::class,'edit'])->name('admin.menu.edit');
        Route::post('/edit_menu/{id}',[MenuController::class,'update'])->name('admin.menu.update');
        Route::get('/delete/{id}',[MenuController::class,'remove'])->name('admin.menu.remove');
    });

    Route::group(['prefix' => 'comment'],function () {
        Route::get('/',[CommentController::class,'index'])->name('admin.comment.index');
        Route::get('/add_comment',[CommentController::class,'add'])->name('admin.comment.add');
        Route::post('/add_comment',[CommentController::class,'post'])->name('admin.comment.post');
    });

    Route::group(['prefix'=>'post'],function (){
        Route::get('/',[PostController::class,'index'])->name('admin.post.index');
        Route::get('/add_post',[PostController::class,'add'])->name('admin.post.add');
        Route::post('/add_post',[PostController::class,'new'])->name('admin.post.new');
        Route::get('delete/{id}',[PostController::class,'remove'])->name('admin.post.remove');
        Route::get('/edit_post/{id}',[PostController::class,'edit'])->name('admin.post.edit');
        Route::post('/edit_post/{id}',[PostController::class,'update'])->name('admin.post.update');
    });
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/tinymce', function () {
    return view('tinymce');
});

Route::get('/book/{id}',[HomeController::class,'bookInfo']);
Route::get('admin/book',[HomeController::class,'inforOrder']);



