<?php

namespace App\Http\Controllers;

use App\KarshenasiResponse;
use Illuminate\Http\Request;

class KarshenasiResponseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karshenasiLists = KarshenasiResponse::select('id', 'areeza_id', 'status_type', 'date',
            'description')->orderBy('created_at', 'DESC')->get();
        return view('areeza.KarshenasiAreezasList', compact('karshenasiLists'));
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
        $response = new KarshenasiResponse();
        $response->areeza_id = $request->areeza_id;
        $response->status_type = $request->status_type;
        $response->date = $request->date;
        $response->description = $request->description;
        $response->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\KarshenasiResponse  $karshenasiResponse
     * @return \Illuminate\Http\Response
     */
    public function show(KarshenasiResponse $karshenasiResponse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\KarshenasiResponse  $karshenasiResponse
     * @return \Illuminate\Http\Response
     */
    public function edit(KarshenasiResponse $karshenasiResponse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\KarshenasiResponse  $karshenasiResponse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KarshenasiResponse $karshenasiResponse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\KarshenasiResponse  $karshenasiResponse
     * @return \Illuminate\Http\Response
     */
    public function destroy(KarshenasiResponse $karshenasiResponse)
    {
        //
    }
}
