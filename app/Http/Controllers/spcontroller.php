<?php

namespace App\Http\Controllers;

use App\Models\sp;
use App\Models\dong_sp;
use Illuminate\Http\Request;

class spcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return sp::all();
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
        $db = new sp();
        $db->tenSP=$request->tenSP;
        $db->idDong=$request->idDong;
        $db->ThongSoKT=$request->ThongSoKT;
        $db->MoTa=$request->MoTa;
        $db->CauTao=$request->CauTao;
        $db->HinhAnh=$request->HinhAnh;
        $db->SoLuong=$request->SoLuong;
        $db->giaNhap=$request->giaNhap;
        $db->giaBan=$request->giaBan;
        $db->save();
       return $db;   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sp  $sp
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return sp::find($id);
    }
    public function getIdDong($id)
    {
        return sp::where('idDong','=',$id)->get();
    }
    public function getIdLoai($id)
    {
        $sp = [];
        $dong=  dong_sp::where('idLoai','=',$id)->get();
        //return $dong;
        for ($i = 0; $i < count($dong); $i++) {
           $sp1= sp::where('idDong','=',$dong[$i]['id'])->get();
           for ($j = 0; $j < count($sp1); $j++) {
                array_push($sp,$sp1[$j]);
           }
        }
        return $sp;
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sp  $sp
     * @return \Illuminate\Http\Response
     */
    public function edit(sp $sp)
    {
        //
    }

    public function getDongSP($id)
    {
        return sp::where('idDong','=',$id)->get();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sp  $sp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $db = sp::find($request->id);
        $db->tenSP=$request->tenSP;
        $db->idDong=$request->idDong;
        $db->ThongSoKT=$request->ThongSoKT;
        $db->MoTa=$request->MoTa;
        $db->CauTao=$request->CauTao;
        $db->HinhAnh=$request->HinhAnh;
        $db->SoLuong=$request->SoLuong;
        $db->save();
       return $db;   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sp  $sp
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return sp::find($id)->delete();
    }
}
