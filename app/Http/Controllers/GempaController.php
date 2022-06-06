<?php

namespace App\Http\Controllers;

use App\Models\GempaModel;
use Illuminate\Http\Request;

class GempaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.gempa.index');
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
     * @param  \App\Models\GempaModel  $gempaModel
     * @return \Illuminate\Http\Response
     */
    public function show(GempaModel $gempaModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GempaModel  $gempaModel
     * @return \Illuminate\Http\Response
     */
    public function edit(GempaModel $gempaModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GempaModel  $gempaModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GempaModel $gempaModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GempaModel  $gempaModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(GempaModel $gempaModel)
    {
        //
    }
}