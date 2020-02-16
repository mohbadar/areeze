<?php

namespace App\Http\Controllers;

use App\Related;
use Illuminate\Http\Request;

class RelatedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $relations=Related::all();
        return view('anotherpage.related',compact('relations'));
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
        $relation=new Related();
        $relation->name=$request->name;
        $relation->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Related  $related
     * @return \Illuminate\Http\Response
     */
    public function show(Related $related)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Related  $related
     * @return \Illuminate\Http\Response
     */
    public function edit(Related $related)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Related  $related
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Related $related)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Related  $related
     * @return \Illuminate\Http\Response
     */
    public function destroy(Related $related)
    {
        $related= Related::findOrFail($related->id);
        $related->delete();
        return  redirect()->back();
    }
}
