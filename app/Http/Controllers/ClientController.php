<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;


class ClientController extends Controller
{
    function index(){
        $data = Post::all();
        return view('Client/home/index',compact('data'));
    }
    function detail($id){
        $post = Post::find($id);
        return view('Client/post/detail', compact('post'));
    }
    function category($id){
        $category = Category::find($id);
        $post = Post::where('idLT', $id)->paginate(4);
        return view('Client/post/category', compact('category','post'));
    }

}
