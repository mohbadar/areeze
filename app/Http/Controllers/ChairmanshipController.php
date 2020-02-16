<?php

namespace App\Http\Controllers;

use App\Chairmanship;
use Illuminate\Http\Request;

class ChairmanshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $aops=Chairmanship::all();
        return view('anotherpage.chairmanship',compact('aops'));
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
        $aop=new Chairmanship();
        $aop->name=$request->name;
        $aop->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Chairmanship  $chairmanship
     * @return \Illuminate\Http\Response
     */
    public function show(Chairmanship $chairmanship)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Chairmanship  $chairmanship
     * @return \Illuminate\Http\Response
     */
    public function edit(Chairmanship $chairmanship)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Chairmanship  $chairmanship
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chairmanship $chairmanship)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Chairmanship  $chairmanship
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chairmanship $chairmanship)
    {
        $chairmanship =Chairmanship::findOrFail($chairmanship->id);
        $chairmanship->delete();
        return  redirect()->back();
    }
}
