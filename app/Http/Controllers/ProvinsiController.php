<?php

namespace App\Http\Controllers;

use App\Models\KotaModel;
use Illuminate\Http\Request;
use App\Models\ProvinsiModel;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ProvinsiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Provinsi['data'] = ProvinsiModel::orderby('nama_provinsi', 'asc')->get();
        return view('dashboard.index', compact('Provinsi'));

      
    } 

     

public function Kota($kotaid =0)
{
    // $isikota['data']=KotaModel::orderby('nama_daerah','asc')->select('id_provinsi','nama_daerah')->where('id_provinsi',$kotaid)->get();

    $isikota['data'] = DB::table('provinsi')
            ->join('kota', 'provinsi.id', '=', 'kota.id_provinsi')->where('nama_provinsi',$kotaid)->get();
l
   
  
    return response()->json($isikota);
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