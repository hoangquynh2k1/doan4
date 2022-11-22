<?php

namespace App\Http\Controllers;

use App\Models\hdnhap;
use Illuminate\Http\Request;

class hdnhapcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return hdnhap::all();
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
        $db = new hdnhap();
        $db->idNCC=$request->idNCC;
        $db->NgayNhap=$request->NgayNhap;
        $db->tongtien=$request->tongtien;
        $db->save();
       return $db;   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\hdnhap  $hdnhap
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return hdnhap::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\hdnhap  $hdnhap
     * @return \Illuminate\Http\Response
     */
    public function edit(hdnhap $hdnhap)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\hdnhap  $hdnhap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $db = hdnhap::find($request->id);
        $db->idNCC=$request->idNCC;
        $db->NgayNhap=$request->NgayNhap;
        $db->tongtien=$request->tongtien;
        $db->save();
       return $db; 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\hdnhap  $hdnhap
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return hdnhap::find($id)->delete();
    }
}
