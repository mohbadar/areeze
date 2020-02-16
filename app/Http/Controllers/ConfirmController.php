<?php

namespace App\Http\Controllers;

use App\Confirm;
use App\ShekayatForm;
use App\Status;
use Illuminate\Http\Request;

class ConfirmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data['shekayats']=ShekayatForm::select('shekayatforms.id','first_name','form_random_number','shekayatforms.created_at as shekeyat_date',
            'priorities.name as name','subjects.name as sub_name','statuses.status_name as wit_name'
        )
            ->join('statuses','statuses.status_name','confirm.statuses_name')
            ->join('priorities','priorities.name','shekayatforms.priorities_name')
            ->join('subjects','subjects.name','shekayatforms.subjects_name')
            ->get();


        return view('callcenter.wait_for_document',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $statuses=Status::all();
        return view('callcenter.confirm' ,compact('statuses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $confirm=new Confirm();
        $confirm->des_date=$request->des_date;
        $confirm->description=$request->description;
        $confirm->status_id=$request->status_id;
        $confirm->shekayatform_id=$request->shekayatId;
        $confirm->save();
        return redirect()->back();
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
