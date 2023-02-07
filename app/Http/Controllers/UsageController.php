<?php

namespace App\Http\Controllers;

use App\Models\Usage;
use App\Http\Requests\StoreUsageRequest;
use App\Http\Requests\UpdateUsageRequest;

class UsageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("Usage.index")->with("abc",Usage::all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Usage.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUsageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUsageRequest $request)
    {
        Usage::Create($request->all());
        return redirect()->route('usages.index')
                        ->with('success','usage added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usage  $usage
     * @return \Illuminate\Http\Response
     */
    // public function show(Usage $usage)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usage  $usage
     * @return \Illuminate\Http\Response
     */
    public function edit(Usage $usage)
    {
        return view("Usage.edit")->with("usage",$usage);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUsageRequest  $request
     * @param  \App\Models\Usage  $usage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUsageRequest $request, Usage $usage)
    {
        $usage->name=$request->name;
        $usage->save();
        return redirect()->route('usages.index')
        ->with('success','Usage Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usage  $usage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usage $usage)
    {
        $usage->delete();
        return redirect()->route('usages.index')
                        ->with('success','usage deleted successfully.');
    }
}
