<?php

namespace App\Http\Controllers;

use App\Banners;
use Illuminate\Http\Request;
use App\Admin;

class bannersAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners=Banners::all();
        return $banners;
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

        $banner=Banners::create($input);

        return $banner;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $banner=Banners::find($id);

        return $banner;
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
        
        $banner=Banners::find($id);

        if(empty($banner)){
            return response()->json(['message'=>'data tidak ditemukan'], 404);
        }

        $banner->update($input);

        return redirect('/admin/banner/edit')->with('sukses', 'Banner Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner=Banners::find($id);

        if(empty($banner)){
            return response()->json(['message'=>'data tidak ditemukan'], 404);
        }

        $banner->delete();

        return response()->json(['message'=>'data telah dihapus']);
    }
}
