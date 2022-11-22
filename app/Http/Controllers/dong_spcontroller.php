<?php

namespace App\Http\Controllers;

use App\Models\dong_sp;
use Illuminate\Http\Request;

class dong_spcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return dong_sp::all();
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
        $db = new dong_sp();
        $db->tendong=$request->tendong;
        $db->idLoai=$request->idLoai;
        $db->mota=$request->mota;
        $db->NhaSX=$request->NhaSX;
        $db->NamSX=$request->NamSX;
        $db->save();
       return $db;  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\dong_sp  $dong_sp
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return dong_sp::find($id);
    }
    public function getLoaiSP($id)
    {
        return dong_sp::where('idLoai','=',$id)->get();
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dong_sp  $dong_sp
     * @return \Illuminate\Http\Response
     */
    public function edit(dong_sp $dong_sp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dong_sp  $dong_sp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $db = dong_sp::find($request->id);
        $db->tendong=$request->tendong;
        $db->idLoai=$request->idLoai;
        $db->mota=$request->mota;
        $db->NhaSX=$request->NhaSX;
        $db->NamSX=$request->NamSX;
        $db->save();
       return $db; 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dong_sp  $dong_sp
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return dong_sp::find($id)->delete();
    }
}
