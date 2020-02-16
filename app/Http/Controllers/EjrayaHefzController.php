<?php

namespace App\Http\Controllers;

use App\EjrayaHefz;
use Illuminate\Http\Request;

class EjrayaHefzController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hefzs = EjrayaHefz::select('id', 'areeza_id', 'date', 'hefz_number')->orderBy('created_at', 'DESC')->get();
        return view('areeza.EjrayaHefzList', compact('hefzs'));
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
        if ($request->hasFile('signedFile')) {
            $file = $request->file('signedFile');
            $signedFile = time() . '_' . $file->getClientOriginalName();
            $path = public_path() . '/photos';
            $file->move($path, $signedFile);
        }
        else {
            $signedFile = NULL;
        }
        $hefz = new EjrayaHefz();
        $hefz->areeza_id = $request->areeza_id;
        $hefz->date = $request->date;
        $hefz->hefz_number = $request->hefz_number;
        $hefz->file = $signedFile;
        $hefz->save();
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EjrayaHefz  $ejrayaHefz
     * @return \Illuminate\Http\Response
     */
    public function show(EjrayaHefz $ejrayaHefz)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EjrayaHefz  $ejrayaHefz
     * @return \Illuminate\Http\Response
     */
    public function edit(EjrayaHefz $ejrayaHefz)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EjrayaHefz  $ejrayaHefz
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EjrayaHefz $ejrayaHefz)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EjrayaHefz  $ejrayaHefz
     * @return \Illuminate\Http\Response
     */
    public function destroy(EjrayaHefz $ejrayaHefz)
    {
        //
    }
}
