<?php

namespace App\Http\Controllers;

use App\FollowedType;
use Illuminate\Http\Request;

class FollowedTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $type = new FollowedType();
        $type->ejraya_sader_id = $request->sader_id;
        $type->followed_type = $request->followed_type;
        $type->date = $request->date;
        $type->description = $request->description;
        $type->file = $request->file;
        $type->save();
        return  redirect(url('followed_list'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FollowedType  $followedType
     * @return \Illuminate\Http\Response
     */
    public function show(FollowedType $followedType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FollowedType  $followedType
     * @return \Illuminate\Http\Response
     */
    public function edit(FollowedType $followedType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FollowedType  $followedType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FollowedType $followedType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FollowedType  $followedType
     * @return \Illuminate\Http\Response
     */
    public function destroy(FollowedType $followedType)
    {
        //
    }
}
