<?php

namespace App\Http\Controllers;

use App\Models\UlasanModel;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUlasanModelRequest;
use App\Http\Requests\UpdateUlasanModelRequest;
use Illuminate\Http\Request;

class UlasanModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = UlasanModel::all();
        
        return view('UlasanModel', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request )
    {
        UlasanModel::create($request->all());
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUlasanModelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        
        $data = new UlasanModel();
      
        $data->nama_ulasan = $request->nama_ulasan;

        $data->save();

       
     return response()->json([
            'status' => 200,
            'message' => "Terima Kasih, Data Berhasil Di Simpan",
        ]);
    }
        public function store2(Request $request)
    {
    
        
        $data = new UlasanModel();
      
        $data->nama_ulasan = $request->nama_ulasan1;
        $data->save();

       
     return response()->json([
            'status' => 200,
            'message' => "Terima Kasih, Data Berhasil Di Simpan",
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UlasanModel  $ulasanModel
     * @return \Illuminate\Http\Response
     */
    public function show(UlasanModel $ulasanModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UlasanModel  $ulasanModel
     * @return \Illuminate\Http\Response
     */
    public function edit(UlasanModel $ulasanModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUlasanModelRequest  $request
     * @param  \App\Models\UlasanModel  $ulasanModel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUlasanModelRequest $request, UlasanModel $ulasanModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UlasanModel  $ulasanModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(UlasanModel $ulasanModel)
    {
        //
    }
}