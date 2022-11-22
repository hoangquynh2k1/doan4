<?php

namespace App\Http\Controllers;

use App\Models\news;
use Illuminate\Http\Request;

class newscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return news::all();
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
        $db = new news();
        $db->tieude=$request->tieude;
        $db->noidung=$request->noidung;
        $db->idNV=$request->idNV;
        $db->NgayViet=$request->NgayViet;
        $db->save();
       return $db;   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\news  $news
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return news::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\news  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(news $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\news  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $db = news::find($request->id);
        $db->tieude=$request->tieude;
        $db->noidung=$request->noidung;
        $db->idNV=$request->idNV;
        $db->NgayViet=$request->NgayViet;
        $db->save();
       return $db; 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\news  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return news::find($id)->delete();
    }
}
