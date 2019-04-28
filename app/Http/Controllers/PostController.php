<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at','desc')->paginate(6);
        return view('post.index',compact('posts'));
    }

    public function show(Post $post)
    {
         return view('post.show',compact('post'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store()
    {
        $this->validate(request(),[
            'title'=>'required|string|max:100|min:5',
            'content'=>'required|string|min:5',
        ]);
        // $post = new Post();
        // $post->title = request('title');
        // $post->content = request('content');
        // $post->save();

        // $params = ['title'=>request('title'),'content'=>request('content')];
        $post = Post::create(request(['title','content']));

        return redirect('posts');

    }

    public function edit()
    {
        return view('post.edit');
    }

    public function update()
    {

    }

    public function delete()
    {

    }

    public function imageUpload(Request $request)
    {
        $path = $request->file('wangEditorFile')->store(md5(time()));
        return asset('storage/'.$path);
        dd(request()->all());
    }









}
