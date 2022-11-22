<?php

namespace App\Http\Controllers;

use App\Models\hdban;
use Illuminate\Http\Request;

class hdbancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return hdban::where('tinhtrang', '>', 0)->get();
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
        $ds = hdban::where('idKH', '=', $request->id)->get();
        $db = [];
        foreach ($ds as $h) {
            if ( $h['tinhtrang'] < 1)
            {
                array_push($db, $h);
            }
            else
            {
            }
        }
        if (count($db)>0) {
            $db = hdban::find($request->id);
            $db->idKH = $request->idKH;
            $db->NgayDat = $request->NgayDat;
            $db->tinhtrang = $request->tinhtrang;
            $db->tongtien = $request->tongtien;
            $db->thanhtoan = $request->thanhtoan;
            $db->save();
            return $db;
        } else {
            $db = new hdban();
            $db->idKH = $request->idKH;
            $db->NgayDat = $request->NgayDat;
            $db->tinhtrang = $request->tinhtrang;
            $db->tongtien = $request->tongtien;
            $db->thanhtoan = $request->thanhtoan;
            $db->save();
            return $db;
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\hdban  $hdban
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hd = hdban::where('idKH', '=', $id)->get();
        $hd2 = [];
        foreach ($hd as $h) {
            if (
            $h['tinhtrang'] == 0
            )
            {
                array_push($hd2, $h);
            }
            else
            {
            }
        }
        if(count($hd2)>0)
            return $hd2[0];
        return -1;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\hdban  $hdban
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $db = hdban::find($request->id);
        $db->idKH = $request->idKH;
        $db->NgayDat = $request->NgayDat;
        $db->tinhtrang = $request->tinhtrang;
        $db->thanhtoan = $request->thanhtoan;
        $db->save();
        return $db;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\hdban  $hdban
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $db = hdban::find($request->id);
        $db->idKH = $request->idKH;
        $db->NgayDat = $request->NgayDat;
        $db->tinhtrang = $request->tinhtrang;
        $db->tongtien = $request->tongtien;
        $db->thanhtoan = $request->thanhtoan;
        $db->save();
        return $db;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\hdban  $hdban
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return hdban::find($id);
    }
}
