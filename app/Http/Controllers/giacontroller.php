<?php

namespace App\Http\Controllers;

use App\Models\gia;
use Illuminate\Http\Request;

class giacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return gia::all();
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\gia  $gia
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return gia::where('idSP','=',$id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\gia  $gia
     * @return \Illuminate\Http\Response
     */
    public function edit(gia $gia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\gia  $gia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, gia $gia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\gia  $gia
     * @return \Illuminate\Http\Response
     */
    public function destroy(gia $gia)
    {
        //
    }
}
