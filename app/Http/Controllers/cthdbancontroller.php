<?php

namespace App\Http\Controllers;

use App\Models\cthdban;
use Illuminate\Http\Request;

class cthdbancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return cthdban::all();
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
        $ds = cthdban::where('idhdBan', '=', $request->idhdBan)->get();
        $ch = false;
        $id = 0;
        for ($i = 0; $i < count($ds); $i++) {
            if ($ds[$i]['idSP'] == $request->idSP) {
                $ch = true;
                $id = $ds[$i]['id'];
                break;
            }
        }
        if (!$ch) {
            $db = new cthdban();
            $db->idhdBan = $request->idhdBan;
            $db->idSP = $request->idSP;
            $db->giaBan = $request->giaBan;
            $db->soLuong = $request->soLuong;
            $db->save();
            return $db;
        } else {
            $db = cthdban::find($id);
            $db->idhdBan = $request->idhdBan;
            $db->idSP = $request->idSP;
            $db->giaBan = $request->giaBan;
            $db->soLuong = $db->soLuong + $request->soLuong;
            $db->save();
            return $db;
            //return 2;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cthdban  $cthdban
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return cthdban::find($id);
    }

    public function show2()
    {
        return 12;
        // if($request->idhdBan>0)
        //     return '123';
        // return cthdban::where('idhdBan','=',$request->idhdBan)->get();
        // cthdban::where('idhdBan','=',$request->idhdBan,'and idSP','=',$request->idSP)->first();
    }
    public function getIdHDon($id)
    {
        return cthdban::where('idhdBan', '=', $id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cthdban  $cthdban
     * @return \Illuminate\Http\Response
     */
    public function edit(cthdban $cthdban)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cthdban  $cthdban
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $db = cthdban::find($request->id);
        $db->idhdBan = $request->idhdBan;
        $db->idSP = $request->idSP;
        $db->giaBan = $request->giaBan;
        $db->soLuong = $request->soLuong;
        $db->save();
        return $db;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cthdban  $cthdban
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return cthdban::find($id)->delete();
    }
}
