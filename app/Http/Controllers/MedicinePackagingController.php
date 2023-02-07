<?php

namespace App\Http\Controllers;

use App\Models\MedicinePackaging;
use App\Http\Requests\StoreMedicinePackagingRequest;
use App\Http\Requests\UpdateMedicinePackagingRequest;
use App\Models\Medicine;
use App\Models\PharmaceuticalPackaging;
use App\Models\SellingUnit;

class MedicinePackagingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicines=Medicine::all();
        $packaging=PharmaceuticalPackaging::all();
        $selling=SellingUnit::all();
        return view("MedicinesPackagings.index")->with("abc",MedicinePackaging::all(),compact('medicines','packaging','selling'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medicines=Medicine::all();
        $packaging=PharmaceuticalPackaging::all();
        $selling=SellingUnit::all();
        return view('MedicinesPackagings.create',compact('medicines','packaging','selling'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMedicinePackagingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMedicinePackagingRequest $request)
    {
        MedicinePackaging::Create($request->all());
        return redirect()->route('medicinePackagings.index')
                        ->with('success','medicine packaging Added added successfully.');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MedicinePackaging  $medicinePackaging
     * @return \Illuminate\Http\Response
     */
    // public function show(MedicinePackaging $medicinePackaging)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MedicinePackaging  $medicinePackaging
     * @return \Illuminate\Http\Response
     */
    public function edit(MedicinePackaging $medicinePackaging)
    {
        $medicines=Medicine::all();
        $packaging=PharmaceuticalPackaging::all();
        $selling=SellingUnit::all();
        return view("MedicinesPackagings.edit",compact('medicines','packaging','selling'))->with("medicinePackaging",$medicinePackaging);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMedicinePackagingRequest  $request
     * @param  \App\Models\MedicinePackaging  $medicinePackaging
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMedicinePackagingRequest $request, MedicinePackaging $medicinePackaging)
    {
        $medicinePackaging->update($request->all());
        return redirect()->route('medicinePackagings.index')
                                  ->with('success','medicines updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MedicinePackaging  $medicinePackaging
     * @return \Illuminate\Http\Response
     */
    public function destroy(MedicinePackaging $medicinePackaging)
    {
        $medicinePackaging->delete();
        return redirect()->route('medicinePackagings.index')
                        ->with('success','medicine deleted successfully.');
    }
}
