<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Gate;

class PostsController extends Controller
{

    /**
     * PostsController constructor.
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function show($id)
    {
        \Auth::loginUsingId(1);
        $post=Post::findOrFail($id);
        //$this->authorize('update',$post);
        //if(Gate::denies('update',$post)) abort(403,'Sorry');
        return view('posts.show',compact('post'));
    }
}
