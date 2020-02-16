<?php

namespace App\Http\Controllers;

use App\EjrayaSader;
use App\MinistryResponse;
use Illuminate\Http\Request;

class MinistryResponseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $response = new MinistryResponse();
        $response->ejraya_sader_id = $request->sader_id;
        $response->date = $request->date;
        $response->file = $request->file;
        $update = EjrayaSader::findOrFail($request->sader_id);
        $update->accept_status = $request->acceptStatus;
        $update->save();
        $response->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MinistryResponse  $ministryResponse
     * @return \Illuminate\Http\Response
     */
    public function show(MinistryResponse $ministryResponse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MinistryResponse  $ministryResponse
     * @return \Illuminate\Http\Response
     */
    public function edit(MinistryResponse $ministryResponse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MinistryResponse  $ministryResponse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MinistryResponse $ministryResponse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MinistryResponse  $ministryResponse
     * @return \Illuminate\Http\Response
     */
    public function destroy(MinistryResponse $ministryResponse)
    {
        //
    }
}
