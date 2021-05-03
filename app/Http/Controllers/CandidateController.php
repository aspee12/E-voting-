<?php
  
namespace App\Http\Controllers;
   
use App\Models\Candidate;
use App\Models\Position;

use Illuminate\Http\Request;
  
class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        // $candidate = Candidate::findOrFail(1);
        // return $candidate->image;
        $candidates = Candidate::latest()->paginate(5);
        return view('ballot.index',compact('candidates'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $positions =Position::all();
        return view('ballot.create')->with('positions', $positions);
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
            'enrol' => 'required',
            'name' => 'required',
            'image'=> 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048000',
            'detail' => 'required',
        ]);
    
        // Candidate::create($request->all());
       
        $store = new  Candidate;
        $store->enrol = $request->input('enrol');
        $store->name = $request->input('name');
        $store->detail = $request->input('detail');
        $store->position_id = $request->input('position_id');

        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension= $file->getClientOriginalExtension();
            $filename = time(). '.'.$extension;
            $file -> move('uploads/candidate/',$filename);
            $store -> image=$filename;
        }
        else{
            return $request;
            $store->image='';
        }
    
        $store->save();
     
        return redirect()->route('ballot.index')
                        ->with('success','Candidate Added successfully.');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\Candidate  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        // return view('ballot.show',compact('candidate'));
        $candidate = Candidate::findOrFail($id);
        return view('ballot.show')->with('candidate',  $candidate);
    } 
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Candidate  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        // return view('ballot.edit',compact('candidate'));
        $positions = Position::all();
        $candidate = Candidate::findOrFail($id);
        return view('ballot.edit')->with('candidate',  $candidate)->with('positions',$positions);

    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Candidate  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'detail' => 'required',
        //     'image'=> 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        // ]);
        $store = Candidate::findOrFail($id);
    if($request->hasFile('image')){
        $request->validate([
            'image'=> 'required|image|mimes:jpg,png,jpeg,gif,svg|max:204800',
        ]);
        $file = $request->file('image');
        $extension= $file->getClientOriginalExtension();
        $filename = time(). '.'.$extension;
        $file -> move('uploads/candidate/',$filename);
        $store -> image=$filename;
    }
        $store->enrol = $request->input('enrol');
        $store->name = $request->input('name');
        $store->detail = $request->input('detail');
        $store->position_id = $request->input('position_id');
        $store->save();

        // $candidate->update($request->all());
    
        return redirect()->route('ballot.index')
                        ->with('success','Candidate updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Candidate  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $candidate= Candidate::find($id);
        if($candidate!=null){

            $candidate->delete();
            return redirect()->route('ballot.index')
                            ->with('success','Candidate deleted successfully');
        }
    }
}