<?php

namespace App\Http\Controllers;

use App\Models\cthdnhap;
use Illuminate\Http\Request;

class cthdnhapcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return cthdnhap::all();
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
        $db = new cthdnhap();
        $db->idHDNhap=$request->idHDNhap;
        $db->idSP=$request->idSP;
        $db->soLuong=$request->soLuong;
        $db->giaNhap=$request->giaNhap;
        $db->save();
       return $db;  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cthdnhap  $cthdnhap
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return cthdnhap::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cthdnhap  $cthdnhap
     * @return \Illuminate\Http\Response
     */
    public function edit(cthdnhap $cthdnhap)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cthdnhap  $cthdnhap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $db = cthdnhap::find($request->id);
        $db->idHDNhap=$request->idHDNhap;
        $db->idSP=$request->idSP;
        $db->soLuong=$request->soLuong;
        $db->giaNhap=$request->giaNhap;
        $db->save();
       return $db;  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cthdnhap  $cthdnhap
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return cthdnhap::find($id);
    }
}
