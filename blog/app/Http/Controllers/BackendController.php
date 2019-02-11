<?php

namespace App\Http\Controllers;

use App\Post;
use DB;
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
        $datas = DB::table('posts')
            ->leftJoin('test_inputs', 'posts.kategori', '=', 'test_inputs.id')
            ->get();
        return view('backend.posts.lists',compact('datas'));
    }
}
