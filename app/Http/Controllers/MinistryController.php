<?php

namespace App\Http\Controllers;

use App\Ministry;
use Illuminate\Http\Request;

class MinistryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $ministries=Ministry::all();
        return view('anotherpage.ministry' ,compact('ministries'));
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
        $this->validate($request,[
            'name'    =>'required'

        ]);
        $ministrie= new Ministry();
        $ministrie->name=$request->name;
        $ministrie->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ministry  $ministry
     * @return \Illuminate\Http\Response
     */
    public function show(Ministry $ministry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ministry  $ministry
     * @return \Illuminate\Http\Response
     */
    public function edit(Ministry $ministry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ministry  $ministry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ministry $ministry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ministry  $ministry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ministry $ministry)
    {
        $ministry =Ministry::findOrFail($ministry->id);
        $ministry->delete();
        return  redirect()->back();
    }
}
