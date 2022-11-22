<?php

namespace App\Http\Controllers;

use App\Models\khach_hang;
use Illuminate\Http\Request;

class khach_hangcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return khach_hang::all();
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
        $db = new khach_hang();
        $db->full_name=$request->full_name;
        $db->users_name=$request->users_name;
        $db->email=$request->email;
        $db->password=$request->password;
        $db->phone=$request->phone;
        $db->address=$request->address;
        $db->save();
       return $db;    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\khach_hang  $khach_hang
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return khach_hang::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\khach_hang  $khach_hang
     * @return \Illuminate\Http\Response
     */
    public function edit(khach_hang $khach_hang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\khach_hang  $khach_hang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, khach_hang $khach_hang)
    {
        $db = khach_hang::find($request->id);
        $db->full_name=$request->full_name;
        $db->users_name=$request->users_name;
        $db->email=$request->email;
        $db->password=$request->password;
        $db->phone=$request->phone;
        $db->address=$request->address;
        $db->save();
       return $db; 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\khach_hang  $khach_hang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return khach_hang::find($id)->delete();
    }
}
