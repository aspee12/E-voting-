<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menifesto;
use App\Models\Position;

class MenifestoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $menifestos= Menifesto::all();
        return view('menifesto.create')->with('menifestos',$menifestos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'video'=> 'mimes:mp4,mov,ogg,m3u8,avi  | max:200000',
            'description' => 'required',
        ]);

        $menifesto = new Menifesto;
        $menifesto->name = $request->name;
        $menifesto->description =$request->description;
        $menifesto->post = $request->post;
        if($request->hasfile('video')){
            $file = $request->file('video');
            $extension= $file->getClientOriginalExtension();
            $filename = time(). '.'.$extension;
            $file -> move('uploads/menifesto/',$filename);
            $menifesto -> video=$filename;
        }
        else{
            return $request;
            $menifesto->video='';
        }
        $menifesto->save();
        return redirect()->route('menifesto.create')->with('success','Menifesto Uploaded  Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $menifestos =Menifesto::all();
        // return view('menifesto.view')->with('menifestos', $menifestos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menifestos = Menifesto::findOrFail($id);
        return view('menifesto.edit')->with('menifestos',  $menifestos);
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
        $menifesto = Menifesto::findOrFail($id);
        $menifesto->name = $request->name;
        $menifesto->description =$request->description;
        $menifesto->post = $request->post;
        if($request->hasfile('video')){
            $file = $request->file('video');
            $extension= $file->getClientOriginalExtension();
            $filename = time(). '.'.$extension;
            $file -> move('uploads/menifesto/',$filename);
            $menifesto -> video=$filename;
        }
        $menifesto->save();
        return redirect()->route('menifesto.create')->with('success','Menifesto Uploaded  Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menifesto = Menifesto::findOrFail($id);
        $menifesto->delete();
        return redirect()->route('menifesto.create')->with('success','Menifesto Deleted Successfully!');
    }
}
