<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;


class PostController extends Controller
{
    public function index(){

    //buat kondisi untuk mengubah title berdasarkan request 
    $title ='';
    if (request('category')){
        $category= Category::firstWhere('slug', request('category'));
        $title = ' in '. $category->name;
    }

    if (request('author')){
        $author = User::firstWhere('username', request('author'));
        $title = ' By '. $author->name;
    }

    return view('posts', [
        "title"=>"All Post" . $title,
        "active"=>"post",
        "posts"=>Post::latest()->Filter(request(['search','category','author']))->paginate(6)->withQueryString()
    ]);
    }
    
    public function show(Post $post){
        return view('post',[
            "title"=>"single post",
            "active"=>"post",
            "posts"=>$post
        ]);
    }
}
