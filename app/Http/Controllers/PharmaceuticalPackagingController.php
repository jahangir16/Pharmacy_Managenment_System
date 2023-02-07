<?php

namespace App\Http\Controllers;

use App\Models\PharmaceuticalPackaging;
use App\Http\Requests\StorePharmaceuticalPackagingRequest;
use App\Http\Requests\UpdatePharmaceuticalPackagingRequest;

class PharmaceuticalPackagingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("Pharmaceutical_Packaging.index")->with("abc",PharmaceuticalPackaging::all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Pharmaceutical_Packaging.create");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePharmaceuticalPackagingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePharmaceuticalPackagingRequest $request)
    {
        PharmaceuticalPackaging::Create($request->all());
        return redirect()->route('packagings.index')
                        ->with('success','Pharmaceutical_Packaging added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PharmaceuticalPackaging  $pharmaceuticalPackaging
     * @return \Illuminate\Http\Response
     */
    // public function show(PharmaceuticalPackaging $pharmaceuticalPackaging)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PharmaceuticalPackaging  $pharmaceuticalPackaging
     * @return \Illuminate\Http\Response
     */
    public function edit(PharmaceuticalPackaging $packaging)
    {
        return view("Pharmaceutical_Packaging.edit")->with("packaging",$packaging);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePharmaceuticalPackagingRequest  $request
     * @param  \App\Models\PharmaceuticalPackaging  $pharmaceuticalPackaging
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePharmaceuticalPackagingRequest $request, PharmaceuticalPackaging $packaging)
    {
        $packaging->name=$request->name;
        $packaging->save();
        return redirect()->route('packagings.index')
        ->with('success','packagings Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PharmaceuticalPackaging  $pharmaceuticalPackaging
     * @return \Illuminate\Http\Response
     */
    public function destroy(PharmaceuticalPackaging $packaging)
    {
         $packaging->delete();
        return redirect()->route('packagings.index')
                        ->with('packaging','packagings deleted successfully.');
    }
}
