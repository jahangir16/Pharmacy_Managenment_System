<?php

namespace App\Http\Controllers;

use App\Models\MedicineUsage;
use App\Http\Requests\StoreMedicineUsageRequest;
use App\Http\Requests\UpdateMedicineUsageRequest;

class MedicineUsageController extends Controller
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
     * @param  \App\Http\Requests\StoreMedicineUsageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMedicineUsageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MedicineUsage  $medicineUsage
     * @return \Illuminate\Http\Response
     */
    public function show(MedicineUsage $medicineUsage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MedicineUsage  $medicineUsage
     * @return \Illuminate\Http\Response
     */
    public function edit(MedicineUsage $medicineUsage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMedicineUsageRequest  $request
     * @param  \App\Models\MedicineUsage  $medicineUsage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMedicineUsageRequest $request, MedicineUsage $medicineUsage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MedicineUsage  $medicineUsage
     * @return \Illuminate\Http\Response
     */
    public function destroy(MedicineUsage $medicineUsage)
    {
        //
    }
}
