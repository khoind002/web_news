<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class AdminController extends Controller
{
    function admin(){
        return view('Admin/home/index');
    }

    function show(){
        $data = \App\Models\Post::all();
        return view('Admin/home/show',['data'=>$data]);
    }

    function add(){
        
        return redirect('');

    }

    function add_(){
        $t = new Post;
        $t->tieuDe = $_POST['tieuDe'];
        $t->tomTat = $_POST['tomTat'];
        $t->urlHinh = $_POST['urlHinh'];
        $t->idLT = $_POST['idLT'];
        $t->save();
        return view('admin/home/addPost');
    }



    function delete($id){
        $t = Post::find($id);
        if ($t==null) return redirect('/thongbao');
        $t->delete();
        return redirect('/admin/show');

    }

    function edit($id){
        $t = Post::find($id);
        return view("/Admin/home/editPost",['tin'=>$t]);
    }

    function edit_($id){
        $t = Post::find($id);
        $t->tieuDe= $_POST['tieuDe'];
        $t->tomTat= $_POST['tomTat'];
        $t->urlHinh= $_POST['urlHinh'];
        $t->idLT= $_POST['idLT'];
        $t->save();
        return redirect('/admin/show');
    }

    
}
