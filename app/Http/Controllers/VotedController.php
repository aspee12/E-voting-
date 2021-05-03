<?php

namespace App\Http\Controllers;

use App\Models\Voted;
use Illuminate\Http\Request;

class VotedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $result = select user_id from voted where user_id=1 and position_id=1;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Voted  $voted
     * @return \Illuminate\Http\Response
     */
    public function show(Voted $voted)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Voted  $voted
     * @return \Illuminate\Http\Response
     */
    public function edit(Voted $voted)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Voted  $voted
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Voted $voted)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Voted  $voted
     * @return \Illuminate\Http\Response
     */
    public function destroy(Voted $voted)
    {
        //
    }
}
