<?php

namespace App\Http\Controllers;

use App\Chairmanship;
use App\Confirm;
use App\District;
use App\EducationLevel;
use App\Job;
use App\Ministry;
use App\Priority;
use App\Province;
use App\Related;
use App\ShekayatForm;
use App\Status;
use App\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $confirms = Confirm::where([['status_id', '=', 1]])->with('Shekayatform')->get();
        $stat = Status::where('id','=', 1)->count();
        $sta = Status::where('id','=', 2)->count();
        $status = Status::where('id','=', 3)->count();
        return view('callcenter.working-under-compliants',compact('confirms','status','sta','stat'));
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
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $data['aops']=Chairmanship::all();
        $data['degrees']=EducationLevel::all();
        /*  $data['contents']=ContactType::all();*/
        $data['provinces']=Province::all();
        $data['districts']=District::all();
        $data['jobs']=Job::all();
        $data['ministries']=Ministry::all();
        $data['relations']=Related::all();
        $data['subjects']=Subject::all();
        $data['types']=Priority::all();
        $data['statuses']=Status::all();
        $data['shekayat'] = ShekayatForm::findOrFail($id);
        $data['is_confirmed']= count(DB::table('confirm')->where('shekayatform_id',$id)->get())=='0' ? 'true': 'false';
        // return  $data['is_confirmed'];
        // return $data['shekayat'];
        return view('callcenter.responsi_call_center',$data);
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
