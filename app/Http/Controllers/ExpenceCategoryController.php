<?php

namespace App\Http\Controllers;

use App\Models\ExpenceCategory;
use App\Http\Requests\StoreExpenceCategoryRequest;
use App\Http\Requests\UpdateExpenceCategoryRequest;

class ExpenceCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("ExpenceCategorys.index")->with("abc",ExpenceCategory::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("ExpenceCategorys.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreExpenceCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreExpenceCategoryRequest $request)
    {
        ExpenceCategory::Create($request->all());
        return redirect()->route('expencecategorys.index')
                        ->with('success',' expence Category added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ExpenceCategory  $expenceCategory
     * @return \Illuminate\Http\Response
     */
    // public function show(ExpenceCategory $expenceCategory)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ExpenceCategory  $expenceCategory
     * @return \Illuminate\Http\Response
     */
    public function edit( $expenceCategory)
    {
        $j=  ExpenceCategory::find($expenceCategory);
        //dd($j);
        return view("ExpenceCategorys.edit")->with("expenceCategory",$j);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateExpenceCategoryRequest  $request
     * @param  \App\Models\ExpenceCategory  $expenceCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateExpenceCategoryRequest $request, $expenceCategory)
    {
        $j=  ExpenceCategory::find($expenceCategory);
        //dd($j);
        $j->name=$request->name;
        $j->save();
        return redirect()->route('expencecategorys.index')
        ->with('success','expence category Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExpenceCategory  $expenceCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExpenceCategory $expenceCategory)
    {
        $expenceCategory->delete();
        return redirect()->route('categorys.index')
                        ->with('category','usage deleted successfully.');
    }
}
