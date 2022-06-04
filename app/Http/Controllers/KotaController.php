<?php

namespace App\Http\Controllers;

use App\Models\KotaModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function  getkota(request $request)
    // {
    //     if($request->ajax()){
 
    //     }
    //         $nama_provinsi = $request->nama_provinsi;
    //         dd($nama_provinsi);
    //         $Kota = KotaModel::where('id_provinsi', $nama_provinsi)->get();
    //         foreach ($Kota as $p) {
    //           echo "<option value='$p->nama_daerah'>$p->nama_daerah</option>";
    //         }
    
    // }
public function index()
    {
        $kota = KotaModel::all();
        return view('kota.index', compact('kota'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}