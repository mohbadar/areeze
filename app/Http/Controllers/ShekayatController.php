<?php

namespace App\Http\Controllers;

use App\Chairmanship;
use App\ContactType;
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

class ShekayatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shekayats=ShekayatForm::select('id','first_name', 'last_name',
            'subject_id', 'description', 'form_random_number', 'date', 'current_address', 'phone_number')->where('downloaded', '0')->orderBy('created_at','DESC')->get();
        return  view('callcenter.list_confirm', compact('shekayats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $priorities = Priority::select('id','name')->get();
        $ministries = Ministry::select('id','name')->get();
        $relateds = Related::select('id','name')->get();
        $edu_levels = EducationLevel::select('id','name')->get();
        $jobs = Job::select('id','name')->get();
        $provinces = Province::select('id','name')->get();
        $districts = District::select('id','name')->get();
        $subjects = Subject::select('id','name')->get();
        $chairmanships = Chairmanship::select('id','name')->get();
        return view('callcenter.create', compact('priorities', 'ministries', 'relateds', 'edu_levels',
            'jobs', 'provinces', 'districts', 'subjects', 'chairmanships'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $shek=rand();
        $shekayat=new ShekayatForm();
        $shekayat->first_name=$request->first_name;
        $shekayat->father_name=$request->father_name;
        $shekayat->last_name=$request->last_name;
        $shekayat->job_title=$request->job_title;
        $shekayat->related_office=$request->related_office;
        $shekayat->current_address=$request->current_address;
        $shekayat->email=$request->email;
        $shekayat->age=$request->age;
        $shekayat->national_identity_card_NO=$request->national_identity_card;
        $shekayat->phone_number=$request->phone_number;
        $shekayat->old_reply=$request->old_reply;
        $shekayat->maaroz_name=$request->maaroz_name;
        $shekayat->description=$request->subject;
        $shekayat->gender=$request->gender;
        /* $shekayat->shake_photocopy=$request->first_name;*/
        $shekayat->identity_photo=$request->shake_photocopy;
        $shekayat->complain_photo=$request->passport_photocopy;
        $shekayat->complainer_photo=$request->shake_photo;
        $shekayat->priority_id=$request->priority_id;
        $shekayat->ministry_id=$request->ministry_id;
        $shekayat->related_id=$request->related_id;
        $shekayat->educational_level_id=$request->education_level_id;
        $shekayat->job_id=$request->job_id;
        $shekayat->district_id=$request->district_id;
        $shekayat->province_id=$request->province_id;
        $shekayat->chairmanship_id=$request->office_id;
        $shekayat->subject_id=$request->subject_id;
        $shekayat->date=$request->date;
       /* $shekayat->office_id=$request->type_subject_id;
        $shekayat->province_id=$request->province_id;*/
       /* $shekayat->relation_type_id=$request->relation_type_id;*/
        $shekayat->form_random_number=$shek;

        $shekayat->save();
        return redirect()->back()->with('message','شکایات شما ثبت شد تشکر'.' '.$shek);






























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
        $data['shekayat'] = ShekayatForm::findOrFail($id);
        $data['types'] = Priority::select('id','name')->get();
        $data['ministries'] = Ministry::select('id','name')->get();
        $data['relations'] = Related::select('id','name')->get();
        $data['degrees'] = EducationLevel::select('id','name')->get();
        $data['jobs'] = Job::select('id','name')->get();
        $data['provinces'] = Province::select('id','name')->get();
        $data['districts'] = District::select('id','name')->get();
        $data['subjects'] = Subject::select('id','name')->get();
        $data['aops'] = Chairmanship::select('id','name')->get();

        $data['statuses']=Status::all();
        $data['is_confirmed']= count(DB::table('confirm')->where('shekayatform_id',$id)->get())=='0' ? 'true': 'false';
        // return  $data['is_confirmed'];
        // return $data['shekayat'];
        return view('callcenter.confirm',$data);




   /*
        $data['shekayat'] =ShekayatForm::findOrFail($shekayat $id);*/



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
        $shekayat=ShekayatForm::findOrFail($id);
        $shekayat->first_name=$request->first_name;
        $shekayat->father_name=$request->father_name;
        $shekayat->last_name=$request->last_name;
        $shekayat->job_title=$request->job_title;
        $shekayat->related_office=$request->related_office;
        $shekayat->current_address=$request->current_address;
        $shekayat->email=$request->email;
        $shekayat->age=$request->age;
        $shekayat->national_identity_card_NO=$request->national_identity_card_NO;
        $shekayat->phone_number=$request->phone_number;
        $shekayat->old_reply=$request->old_reply;
        $shekayat->maaroz_name=$request->maaroz_name;
        $shekayat->description=$request->subject;
        $shekayat->gender=$request->gender;
        /* $shekayat->shake_photocopy=$request->first_name;*/
        $shekayat->identity_photo=$request->shake_photocopy;
        $shekayat->complain_photo=$request->passport_photocopy;
        $shekayat->complainer_photo=$request->shake_photo;
        $shekayat->priority_id=$request->priority_id;
        $shekayat->ministry_id=$request->ministry_id;
        $shekayat->related_id=$request->related_id;
        $shekayat->educational_level_id=$request->education_level_id;
        $shekayat->job_id=$request->job_id;
        $shekayat->district_id=$request->district_id;
        $shekayat->province_id=$request->province_id;
        $shekayat->chairmanship_id=$request->office_id;
        $shekayat->subject_id=$request->subject_id;
        $shekayat->date=$request->date;
        /* $shekayat->office_id=$request->type_subject_id;
         $shekayat->province_id=$request->province_id;*/
        /* $shekayat->relation_type_id=$request->relation_type_id;*/
        $shekayat->form_random_number=rand();

        $shekayat->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *

     *  @param  \App\ShekayatForm  $shekayat
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShekayatForm $shekayat)
    {
        $shekayat = ShekayatForm::findOrFail($shekayat->id);
          $image_path = "assets/images/".$shekayat->photo;
       if(File::exists($image_path)) {
            File::delete($image_path);
        }
        $shekayat->delete();
        return  redirect()->back();
    }
}
