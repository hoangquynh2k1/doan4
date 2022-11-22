<?php

namespace App\Http\Controllers;

use App\Models\loai_sp;
use Illuminate\Http\Request;

class loai_spcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return loai_sp::all();
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
        $db = new loai_sp();
        $db->tenloai=$request->tenloai;
        $db->mota=$request->mota;
        $db->save();
       return $db;   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\loai_sp  $loai_sp
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return loai_sp::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\loai_sp  $loai_sp
     * @return \Illuminate\Http\Response
     */
    public function edit(loai_sp $loai_sp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\loai_sp  $loai_sp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $db = loai_sp::find($request->id);
        $db->tenloai=$request->tenloai;
        $db->mota=$request->mota;
        $db->save();
       return $db;   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\loai_sp  $loai_sp
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return loai_sp::find($id)->delete();
    }
}
