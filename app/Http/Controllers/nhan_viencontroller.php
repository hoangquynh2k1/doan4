<?php

namespace App\Http\Controllers;

use App\Models\nhan_vien;
use Illuminate\Http\Request;

class nhan_viencontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return nhan_vien::all();
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
        $db = new nhan_vien();
        $db->ho_ten=$request->ho_ten;
        $db->gioi_tinh=$request->gioi_tinh;
        $db->ngay_sinh=$request->ngay_sinh;
        $db->que_quan=$request->que_quan;
        $db->sdt=$request->sdt;
        $db->email=$request->email;
        $db->chucvu=$request->chucvu;
        $db->sdt=$request->sdt;
        $db->cccd=$request->cccd;
        $db->save();
       return $db;    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\nhan_vien  $nhan_vien
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return nhan_vien::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\nhan_vien  $nhan_vien
     * @return \Illuminate\Http\Response
     */
    public function edit(nhan_vien $nhan_vien)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\nhan_vien  $nhan_vien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $db = nhan_vien::find($request->id);
        $db->ho_ten=$request->ho_ten;
        $db->gioi_tinh=$request->gioi_tinh;
        $db->ngay_sinh=$request->ngay_sinh;
        $db->que_quan=$request->que_quan;
        $db->sdt=$request->sdt;
        $db->email=$request->email;
        $db->chucvu=$request->chucvu;
        $db->sdt=$request->sdt;
        $db->cccd=$request->cccd;
        $db->save();
       return $db;    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\nhan_vien  $nhan_vien
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return nhan_vien::find($id)->delete();
    }
}
