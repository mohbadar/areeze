<?php

namespace App\Http\Controllers;

use App\EjrayaSader;
use Illuminate\Http\Request;

class EjrayaSaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sadersData = EjrayaSader::all();
        $todayDate = Date('Y-m-d');
        foreach ($sadersData as $sader){
            if ($sader->end_date == $todayDate){
                $sader->accept_status = 0;
                $sader->save();
            }
        }
        $saders = EjrayaSader::select('id', 'areeza_id', 'date', 'ministry_id', 'reference_ministries_copy',
            'sader_number', 'end_date', 'accept_status')->where([['response', 0], ['accept_status', 2]])->
        orwhere('accept_status', NULL)
            ->orderBy('created_at', 'DESC')->get();
        return view('areeza.EjrayaSaderList', compact('saders'));
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
        $sader = new EjrayaSader();
        $sader->areeza_id = $request->areeza_id;
        $sader->sader_number = $request->sader_number;
        $sader->date = $request->date;
        $sader->end_date = $request->end_date;
        $sader->ministry_id = $request->ministry_id;
        $sader->file = $signedFile;
        $sader->reference_ministries_copy =json_encode( $request->copy_ministry_ids);
        $sader->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EjrayaSader  $ejrayaSader
     * @return \Illuminate\Http\Response
     */
    public function show(EjrayaSader $ejrayaSader)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EjrayaSader  $ejrayaSader
     * @return \Illuminate\Http\Response
     */
    public function edit(EjrayaSader $ejrayaSader)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EjrayaSader  $ejrayaSader
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EjrayaSader $ejrayaSader)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EjrayaSader  $ejrayaSader
     * @return \Illuminate\Http\Response
     */
    public function destroy(EjrayaSader $ejrayaSader)
    {
        //
    }
}
