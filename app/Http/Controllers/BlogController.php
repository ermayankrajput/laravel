<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class BlogController extends Controller
{
    public function getSingle($slug){
    	//return $slug;
    	$post = Post::where('slug', '=', $slug)->first();
    	return view('blog.single')->withPost($post);
    }
    public function getArchieve(){
    	//return $slug;
    	$posts = Post::orderBy('id', 'desc')->paginate(5);
        return view('blog.index')->withPosts($posts);
    }
}
