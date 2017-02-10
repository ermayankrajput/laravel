<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use Session;
use Image;
use \DateTime;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(5);
        return view('posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'title' => 'required|max:250',
            'slug'  =>  'required|alpha_dash|min:5|unique:posts,slug',
            'body'  =>  'required'
        ));
        $post = new Post;
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->body = $request->body;
        if($request->hasFile('image')){
            $image = $request->image;
            $filename = $image->getClientOriginalName();
            $dateimg = new DateTime();
            Image::make($image->getRealPath())->save('images/'.$dateimg->getTimestamp(). $filename);
            $post->image = '/images/'.$dateimg->getTimestamp().$filename;
        }
        //$post->image = $request->image;
        $post->save();
        Session::flash('success', 'The Blog Post Was Successfully Saved!..');
        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit')->withPost($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $post = Post::find($id);
        if($request->input('slug')==$post->slug){
            $this->validate($request, array(
            'title' => 'required|max:250',
            'slug'  =>  'required',
            'body'  =>  'required'
        ));
        }else{
            $this->validate($request, array(
            'title' => 'required|max:250',
            'slug'  =>  'required|alpha_dash|min:5|unique:posts,slug',
            'body'  =>  'required'
        ));
        }
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->body = $request->body;
        if($request->hasFile('image')){
            $image = $request->image;
            $filename = $image->getClientOriginalName();
            $dateimg = new DateTime();
            Image::make($image->getRealPath())->save('images/'.$dateimg->getTimestamp(). $filename);
            $post->image = '/images/'.$dateimg->getTimestamp().$filename;
        }
        $post->save();
        Session::flash('success', 'The Blog Post Was Successfully Edited!..');
        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $post = Post::find($id);
        $post->delete();
        Session::flash('success', 'The Blog Post Was Successfully Deleted!..');
        return redirect()->route('posts.index', $post->id);
    }
}
