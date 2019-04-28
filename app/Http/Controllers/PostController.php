<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at','desc')->paginate(5);
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

    public function edit(Post $post)
    {
        return view('post.edit',compact('post'));
    }

    public function update(Post $post)
    {
        $this->validate(request(),[
            'title'=>'required|string|max:100|min:5',
            'content'=>'required|string|min:5',
        ]);

         $post->title = request('title');
         $post->content = request('content');
         $post->save();

        return redirect("posts/{$post->id}");
    }

    public function delete(Post $post)
    {
        $post->delete();
        return redirect('/posts');
    }

    public function imageUpload(Request $request)
    {
        $path = $request->file('wangEditorFile')->store(md5(time()));
        return [
            'errno'=>0,
            'data'=>[
                asset('storage/'.$path)
            ]
        ];
    }









}
