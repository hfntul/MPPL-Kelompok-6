<?php

namespace App\Http\Controllers;

use App\Proposal;
use Illuminate\Http\Request;

class proposalAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proposals=Proposal::orderBy('id', 'asc')->get();
        return $proposals;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input=$request->all();

        $proposal=Proposal::create($input);

        return $proposal;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proposal=Proposal::find($id);

        return $proposal;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input=$request->all();
        
        $proposal=Proposal::find($id);

        if(empty($proposal)){
            return response()->json(['message'=>'data tidak ditemukan'], status: 404);
        }

        $proposal->update($input);

        return response()->json($proposal);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proposal=Proposal::find($id);

        if(empty($proposal)){
            return response()->json(['message'=>'data tidak ditemukan'], status: 404);
        }

        $proposal->delete();

        return response()->json(['message'=>'data telah dihapus']);
    }
}
