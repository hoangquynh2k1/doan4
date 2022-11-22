<?php

namespace App\Http\Controllers;

use App\Models\nha_cung_cap;
use Illuminate\Http\Request;

class nha_cung_capcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return nha_cung_cap::all();
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
        $db = new nha_cung_cap();
        $db->ten_ncc=$request->ten_ncc;
        $db->diachi_ncc=$request->diachi_ncc;
        $db->email=$request->email;
        $db->sdt=$request->sdt;
        $db->sotk=$request->sotk;
        $db->save();
       return $db;    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\nha_cung_cap  $nha_cung_cap
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return nha_cung_cap::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\nha_cung_cap  $nha_cung_cap
     * @return \Illuminate\Http\Response
     */
    public function edit(nha_cung_cap $nha_cung_cap)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\nha_cung_cap  $nha_cung_cap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $db = nha_cung_cap::find($request->id);
        $db->ten_ncc=$request->ten_ncc;
        $db->diachi_ncc=$request->diachi_ncc;
        $db->email=$request->email;
        $db->sdt=$request->sdt;
        $db->sotk=$request->sotk;
        $db->save();
       return $db; 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\nha_cung_cap  $nha_cung_cap
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return nha_cung_cap::find($id)->delete();
    }
}
