<?php

namespace App\Http\Controllers;

use App\Models\MedicinesGeneric;
use App\Http\Requests\StoreMedicinesGenericRequest;
use App\Http\Requests\UpdateMedicinesGenericRequest;
use App\Models\Generic;
use App\Models\Medicine;

class MedicinesGenericController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $m=Medicine::all();
        $g=Generic::all();
//dd($medicines);
        return view("MedicinesGenerics.index")->with("abc",MedicinesGeneric::all(),compact('m','g'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medicines=Medicine::all();
       // dd($medicines);
        $generic=Generic::all();
        return view('MedicinesGenerics.create',compact('medicines','generic'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMedicinesGenericRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMedicinesGenericRequest $request)
    {
        MedicinesGeneric::Create($request->all());
        return redirect()->route('medicinesGenerics.index')
                        ->with('success','medicine Generic Added added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MedicinesGeneric  $medicinesGeneric
     * @return \Illuminate\Http\Response
     */
    // public function show(MedicinesGeneric $medicinesGeneric)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MedicinesGeneric  $medicinesGeneric
     * @return \Illuminate\Http\Response
     */
    public function edit(MedicinesGeneric $medicinesGeneric)
    {
        $medicines=Medicine::all();
        $generic=Generic::all();
        return view("MedicinesGenerics.edit",compact('medicines','generic'))->with("medicinesGeneric",$medicinesGeneric);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMedicinesGenericRequest  $request
     * @param  \App\Models\MedicinesGeneric  $medicinesGeneric
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMedicinesGenericRequest $request, MedicinesGeneric $medicinesGeneric)
    {
       $medicinesGeneric->update($request->all());
       return redirect()->route('medicinesGenerics.index')
                                  ->with('success','medicine Generic  updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MedicinesGeneric  $medicinesGeneric
     * @return \Illuminate\Http\Response
     */
    public function destroy(MedicinesGeneric $medicinesGeneric)
    {
        $medicinesGeneric->delete();
        return redirect()->route('medicinesGenerics.index')
                        ->with('success','medicine deleted successfully.');
    }
}
