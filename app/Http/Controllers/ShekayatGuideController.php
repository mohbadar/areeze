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
use App\ShekayatGuide;
use App\Status;
use App\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class ShekayatGuideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {

        $shekayats=ShekayatForm::all();
        $aops=Chairmanship::all();
        $degrees=EducationLevel::all();
     /*   $contents=Content::all();*/
        $provinces=Province::all();
        $districts=District::all();
        $jobs=Job::all();
        $ministries=Ministry::all();
        $relations=Related::all();
        $subjects=Subject::all();
        $types=Priority::all();

        $q =Input::get('q');
        $shekayats = ShekayatForm::where('first_name','LIKE','%'.$q.'%')->orWhere('form_random_number','LIKE','%'.$q.'%')->get();
        if(count($shekayats) > 0)
            return view('Report.report' ,compact('confirms','shekayats','degrees','contents','provinces','aops','districts','jobs','ministries','relations','subjects','types'))->withDetails($shekayats)->withQuery( $q );
        else return view ('Report.report')->withMessage('No Details found. Try to search again !');
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $guide=new ShekayatGuide();
        $guide->des_date = $request->des_date;
        $guide->title=$request->title;
        $guide->description=$request->description;
        $guide->shekayatform_id=$request->shekayatform_id;
        $guide->save();
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ShekayatGuide  $shekayatGuide
     * @return \Illuminate\Http\Response
     */
    public function show(ShekayatGuide $shekayatGuide)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ShekayatGuide  $shekayatGuide
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
        $data['confirm']=Confirm::all();
        $data['shekayat'] = ShekayatForm::findOrFail($id);
       /* $data['is_confirmed']= count(DB::table('confirm')->where('shekayatform_id',$id)->get())=='0' ? 'true': 'false';*/
        // return  $data['is_confirmed'];
        // return $data['shekayat'];
        return view('Report.editReport',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ShekayatGuide  $shekayatGuide
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ShekayatGuide $shekayatGuide)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ShekayatGuide  $shekayatGuide
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShekayatGuide $shekayatGuide)
    {
        //
    }
}
