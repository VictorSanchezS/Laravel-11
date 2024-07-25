<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        $posts = Post::orderby('id','desc')->paginate(10);

        return view('posts.index',compact('posts'));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){
        $request->validate([
            'title' => ['required','string','max:255'],
            'slug' => ['required','string','max:255','unique:posts,slug'],
            'category' => ['required','string','max:255'],
            'content' => ['required','string'],
        ]);
        Post::create($request->all());
        return redirect()->route('posts.index');
    }

    public function show(Post $post){
        return view('posts.show',compact('post'));
    }

    public function edit(Post $post){
        return view('posts.edit',compact('post'));
    }

    public function update(Request $request,Post $post)
    {
        $request->validate([
            'title' => ['required','string','max:255'],
            'slug' => ['required','string','max:255',"unique:posts,slug,{$post->id}"],
            'category' => ['required','string','max:255'],
            'content' => ['required','string'],
        ]);
        $post->update($request->all());
        return redirect()->route('posts.show',$post);
    }

    public function destroy(Post $post){
        $post->delete();
        return redirect()->route('posts.index');
    }

}
