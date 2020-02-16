<?php

namespace App\Http\Controllers;

use App\Areeza;
use App\Chairmanship;
use App\ContactType;
use App\District;
use App\EducationLevel;
use App\Job;
use App\Ministry;
use App\Priority;
use App\Province;
use App\Related;
use App\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AreezaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $areezas = Areeza::select('id','first_name', 'last_name',
            'subject_id', 'description', 'form_random_number', 'date', 'current_address', 'phone_number')->where('downloaded', '0')->orderBy('created_at','DESC')->get();
        return  view('areeza.karshenasiView', compact('areezas'));
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
        return view('areeza.create', compact('priorities', 'ministries', 'relateds', 'edu_levels',
            'jobs', 'provinces', 'districts', 'subjects', 'chairmanships'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('identity_photo')) {
            $file = $request->file('identity_photo');
            $identityPhoto = time() . '_' . $file->getClientOriginalName();
            $path = public_path() . '/photos';
            $file->move($path, $identityPhoto);
        }
        else {
            $identityPhoto = NULL;
        }
        if ($request->hasFile('complain_photo')){
            $file = $request->file('complain_photo');
            $complainPhoto = time().'_'. $file->getClientOriginalName();
            $path = public_path().'/photos';
            $file->move($path,$complainPhoto);
        }
        else {
            $complainPhoto = NULL;
        }
        if ($request->hasFile('complainer')){
            $file = $request->file('complainer');
            $compliantPerson = time().'_'. $file->getClientOriginalName();
            $path = public_path().'/photos';
            $file->move($path,$compliantPerson);
        }
        else {
            $compliantPerson = NULL;
        }
        $token=uniqid();
        $areeza=new Areeza();
        $areeza->first_name=$request->first_name;
        $areeza->father_name=$request->father_name;
        $areeza->last_name=$request->last_name;
        $areeza->job_title=$request->job_title;
        $areeza->related_office=$request->related_office;
        $areeza->current_address=$request->current_address;
        $areeza->email=$request->email;
        $areeza->age=$request->age;
        $areeza->national_identity_card_NO=$request->national_identity_card_NO;
        $areeza->phone_number=$request->phone_number;
        $areeza->old_reply=$request->old_reply;
        $areeza->priority_id=$request->priority_id;
        $areeza->ministry_id=$request->ministry_id;
        $areeza->related_id=$request->related_id;
        $areeza->educational_level_id=$request->education_level_id;
        $areeza->job_id=$request->job_id;
        $areeza->province_id=$request->province_id;
        $areeza->district_id=$request->district_id;
        $areeza->subject_id=$request->subject_id;
        $areeza->chairmanship_id=$request->office_id;
        $areeza->description=$request->description;
        $areeza->date=$request->date;
        $areeza->gender=$request->gender;
        $areeza->identity_photo=$identityPhoto;
        $areeza->complain_photo=$complainPhoto;
        $areeza->complainer_photo=$compliantPerson;
        $areeza->form_random_number=$token;
        $areeza->save();
        return redirect()->back()->with('message','New Shekayat created Successfully'.$token);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Areeza  $areeza
     * @return \Illuminate\Http\Response
     */
    public function show(Areeza $areeza)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Areeza  $areeza
     * @return \Illuminate\Http\Response
     */
    public function edit(Areeza $areeza)
    {
        $data['areeza'] = Areeza::findOrFail($areeza['id']);
        $data['priorities'] = Priority::select('id','name')->get();
        $data['ministries'] = Ministry::select('id','name')->get();
        $data['relateds'] = Related::select('id','name')->get();
        $data['edu_levels'] = EducationLevel::select('id','name')->get();
        $data['jobs'] = Job::select('id','name')->get();
        $data['provinces'] = Province::select('id','name')->get();
        $data['districts'] = District::select('id','name')->get();
        $data['subjects'] = Subject::select('id','name')->get();
        $data['chairmanships'] = Chairmanship::select('id','name')->get();
        return view('areeza.editAreeza', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Areeza  $areeza
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Areeza $areeza)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Areeza  $areeza
     * @return \Illuminate\Http\Response
     */
    public function destroy(Areeza $areeza)
    {
        $areeza = Areeza::findOrFail($areeza->id);
        $image_path = "assets/images/".$areeza->photo;
        if(File::exists($image_path)) {
            File::delete($image_path);
        }
        $areeza->delete();
        return  redirect()->back();
    }
}
