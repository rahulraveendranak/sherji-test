<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostComment;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    
    public function index()
    {
        return view('posts.index');
    }

    public function store(Request $request)
    {
        // dd($request->title);
        $data = $request->validate([
            'title'=>'required',
            'description'=>'required'
        ]);

        // dd(auth()->user()->id);
        Post::create([
            'user_id' => auth()->user()->id,
            'title' => $request->title,
            'description' => $request->description
        ]);

        return redirect('/dashboard/');
    }

    public function currentUserPost()
    {
        $posts = Post::where('user_id',auth()->user()->id)->withCount('comments')->with('user')->latest('id')->get();
       
        return view('posts.list', compact('posts'));
    }

    public function postShow($id)
    {
        $data = Post::findOrfail($id);
        $comments = PostComment::where('post_id',$id)->with('user')->get();
     
        return view('posts.show', compact('data','comments'));
    }

    public function postEdit($id)
    {
        $data = Post::findOrfail($id);
     
        return view('posts.edit', compact('data'));
    }

    public function postUpdate(Request $request,$id)
    {
        $data = $request->validate([
            'title'=>'required',
            'description'=>'required'
        ]);

        $data = Post::where('id',$id)->update(['title'=>$request->title, 'description'=>$request->description]);
     
        return redirect('/dashboard/');
    }


    public function commentAdd(Request $request,$id)
    {
        $data = $request->validate([
            'comment'=>'required',
        ]); 

        PostComment::create([
            'user_id' => auth()->user()->id,
            'post_id' => $id,
            'description' => $request->comment
        ]);

        return redirect('/postShow/'.$id);
    }

}
