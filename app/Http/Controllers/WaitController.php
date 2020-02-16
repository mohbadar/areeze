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
use App\Subject;
use Illuminate\Http\Request;

class WaitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $shekayats=ShekayatForm::all();


        $todayDate = date('Y-m-d');
//        dd($todayDate);

        $confirms = Confirm::where([['status_id', '=', 1]])->get();
        foreach ($confirms as $key => $confirm ){
//
            if ($confirm->des_date == $todayDate) {
                $confirm->status_id = 4;
                $confirm->save();

            }
//            $forms[$key] = ShekayatForm::where('id', $confirm->id);
//            foreach ($forms) {
//
//            }

        }
//        dd($confirms);
        $aops=Chairmanship::all();
        $degrees=EducationLevel::all();
      /*  $contents=Content::all();*/
        $provinces=Province::all();
        $districts=District::all();
        $jobs=Job::all();
        $ministries=Ministry::all();
        $relations=Related::all();
        $subjects=Subject::all();
        $types=Priority::all();
        return view('callcenter.wait_for_document', compact('confirms','shekayats','degrees','contents','provinces','aops','districts','jobs','ministries','relations','subjects','types') );
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
