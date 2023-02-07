<?php

namespace App\Http\Controllers;

use App\Models\SellingUnit;
use App\Http\Requests\StoreSellingUnitRequest;
use App\Http\Requests\UpdateSellingUnitRequest;

class SellingUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("SellingUnits.index")->with("abc",SellingUnit::all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("SellingUnits.create");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSellingUnitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSellingUnitRequest $request)
    {
        SellingUnit::Create($request->all());
        return redirect()->route('units.index')
                        ->with('success',' Selling Units added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SellingUnit  $sellingUnit
     * @return \Illuminate\Http\Response
     */
    // public function show(SellingUnit $sellingUnit)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SellingUnit  $sellingUnit
     * @return \Illuminate\Http\Response
     */
    public function edit(  $sellingUnit)
    {
        
        $c = SellingUnit::Find($sellingUnit);
    // dd($c);
        return view("SellingUnits.edit")->with("sellingUnit",$c);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSellingUnitRequest  $request
     * @param  \App\Models\SellingUnit  $sellingUnit
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSellingUnitRequest $request, SellingUnit $sellingUnit)
    {
        $sellingUnit->name=$request->name;
        $sellingUnit->save();
        return redirect()->route('units.index')
        ->with('success','Selling Units Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SellingUnit  $sellingUnit
     * @return \Illuminate\Http\Response
     */
    public function destroy( $sellingUnit)
    {
        
        $c = SellingUnit::Find($sellingUnit);
        $c->delete();
        return redirect()->route('units.index')
                        ->with('success','Selling Units deleted successfully.');
    }
}
