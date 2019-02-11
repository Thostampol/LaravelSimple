<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return view('backend.index');
    }

    public function show(){
        $datas=Post::all();
        return view('backend.posts.lists',compact('datas'));
    }
}
