<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Mail\PostCreatedMail;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PostController extends Controller
{
    public function index(){

        $posts = Post::orderby('id','desc')->paginate(10);

        return view('posts.index',compact('posts'));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(StorePostRequest $request){
        // $request->validate([
        //     'title' => ['required','string','max:255'],
        //     'slug' => ['required','string','max:255','unique:posts,slug'],
        //     'category' => ['required','string','max:255'],
        //     'content' => ['required','string'],
        // ]);

        $post = Post::create($request->all());

        Mail::to('prueba@gmail.com')->send(new PostCreatedMail($post));

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
