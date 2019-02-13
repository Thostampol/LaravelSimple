<?php

namespace App\Http\Controllers;

use App\Post;
use\App\testInput;
use DateTime;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datas=Post::take(5)->get();
        return view('frontend.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $kategori = \App\testInput::all();
        return view('backend.posts.create',compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $save = new Post; 
        $now  = new DateTime();  
        $save->judul       = $request->judul;     
        $save->isipost     = $request->isipost;
        $save->kategori    = $request->kategori; 
        $save->tgl_post    = $now; 
        $save->save();   
        return redirect('/backend-admin/posts')->with('success','Information has been Added');   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $datas = Post::find($id);
        return view('frontend.contents.detail', compact('datas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $datas = Post::find($id);
        $kategori = \App\testInput::all();
        return view('backend.posts.update', compact(['datas','kategori']));
        
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
        $save = Post::find($id);
        $save->judul = $request->judul;
        $save->isipost = $request->isipost;
        $save->kategori = $request->kategori;
        $save->save();   
        return redirect('/backend-admin/posts')->with('success','Information has been Updated');   
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
        $delete = Post::find($id);
        $delete->delete();
        return redirect('/backend-admin/posts')->with('success','Information has been deleted');
    }
}
