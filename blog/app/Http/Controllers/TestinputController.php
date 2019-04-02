<?php

namespace App\Http\Controllers;

use\App\testInput;
use Illuminate\Http\Request;

class TestinputController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $testInput=\App\testInput::all();
        return view('backend.kategori.list',compact('testInput'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.kategori.testinput');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $this->validate($request, [
            'filename' => 'required|image|mimes:jpg,png,jpeg'
        ]);
        if($request->hasfile('filename')){
            $file = $request->file('filename');
            $name=time()."_".$file->getClientOriginalName();
            $file->move(storage_path().'/app/public/', $name);
        }
        $save = new testInput;   
        $save->name       = $request->name;     
        $save->keterangan = $request->keterangan;
        $save->filename   = $name; 
        $save->save();   
        return redirect('backend-admin/kategori')->with('success','Information has been Added');   
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
        return ('ini view single '.$id);
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
        $testinput = \App\testInput::find($id);
        return view('backend.kategori.testinputedit',compact('testinput','id'));
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
        $save = \App\testInput::find($id);   
        if(!empty($request->filename)){
            $this->validate($request, [
                'filename' => 'required|image|mimes:jpg,png,jpeg'
            ]);
            if($request->hasfile('filename')){
                $file = $request->file('filename');
                $name=time()."_".$file->getClientOriginalName();
                $file->move(storage_path().'/app/public/', $name);
            }
            $save->filename   = $name; 
        }
        $save->name = $request->name;     
        $save->keterangan = $request->keterangan; 
        $save->save();
        return redirect('/backend-admin/kategori')->with('success','Information has been updated');   
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
        return ('ini delete');
    }
}
